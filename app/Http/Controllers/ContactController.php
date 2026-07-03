<?php

namespace App\Http\Controllers;

use App\Mail\ContactInquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;

class ContactController extends Controller
{
    /**
     * Handle a contact-form submission: validate, rate-limit, send email.
     *
     * The destination address is taken from config('site.contact.email'),
     * so it follows whatever the operator set in config/site.php.
     */
    public function __invoke(Request $request)
    {
        // 1. Throttle submissions per IP to deter spam (5 / minute).
        $throttleKey = 'contact:' . $request->ip();
        if (RateLimiter::tooManyAttempts($throttleKey, 5)) {
            $seconds = RateLimiter::availableIn($throttleKey);
            throw ValidationException::withMessages([
                'email' => "Too many submissions. Please try again in {$seconds} seconds.",
            ]);
        }

        // 2. Validate.
        $data = $request->validate([
            'name'    => ['required', 'string', 'max:120'],
            'email'   => ['required', 'email:rfc', 'max:200'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        // 3. Send to the address configured in config/site.php.
        $to = config('site.contact.email');

        try {
            Mail::to($to)->send(new ContactInquiry($data));
        } catch (\Throwable $e) {
            report($e);
            return back()
                ->withInput()
                ->withErrors(['email' => 'We could not send your message right now. Please email us directly.']);
        }

        // 4. Bump the throttle and flash success.
        RateLimiter::hit($throttleKey, 60);

        return back()->with('contact_success', true);
    }
}
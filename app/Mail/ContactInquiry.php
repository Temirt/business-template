<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;

class ContactInquiry extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The form payload, validated upstream.
     *
     * @param array{name:string,email:string,message:string} $data
     */
    public function __construct(public array $data)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address($this->data['email'], $this->data['name']),
            replyTo: [new Address($this->data['email'], $this->data['name'])],
            subject: 'New project inquiry from ' . $this->data['name'],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-inquiry',
            with: [
                'name'    => $this->data['name'],
                'email'   => $this->data['email'],
                'message' => $this->data['message'],
                'brand'   => config('site.brand.name'),
            ],
        );
    }
}
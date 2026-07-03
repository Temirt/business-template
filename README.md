# Business Website Template (Laravel)

A clean, editorial, mobile-first Laravel template you can re-skin for **any
business** — consultancy, agency, café, salon, gym, photography studio, law
firm, clinic, boutique, trades, etc.

The whole site is driven by **one config file**: `config/site.php`.
Edit the brand, colour, copy, services, portfolio, pricing tiers and FAQ
in that file and every page re-renders.

---

## Quick start

```bash
# 1. Install PHP dependencies (already done if you cloned with vendor/)
composer install

# 2. Copy .env if you don't already have one
cp .env.example .env

# 3. Generate the app key
php artisan key:generate

# 4. Boot the dev server
php artisan serve

# 5. Open http://127.0.0.1:8000
```

That's it. The page works offline apart from Google Fonts and the placeholder
photography on Unsplash — see *Images* if you want to host your own.

---

## How the template works

```
config/site.php                 ← THE single source of truth
  ↓ (config('site'))
resources/views/
  layout.blade.php              ← HTML shell + <style> injecting accent colour
  welcome.blade.php             ← composes every section
  partials/
    header.blade.php
    footer.blade.php
    hero.blade.php
    trust.blade.php
    about.blade.php
    services.blade.php
    work.blade.php
    testimonial.blade.php
    pricing.blade.php
    faq.blade.php
    contact.blade.php

public/
  css/styles.css                ← served directly (no Vite build needed)
  js/script.js                  ← mobile nav, FAQ, scroll reveals

app/Http/Controllers/
  HomeController.php            ← passes config('site') into the view

routes/web.php                  ← Route::get('/', HomeController::class)
```

No build step. No npm. Edit a `.php` file, refresh the browser.

---

## Re-skinning for any business

Open **`config/site.php`**. Everything you can change lives here.

### 1. Brand & meta

```php
'brand' => [
    'name'    => 'Halcyon Coffee Roasters',
    'tagline' => 'Specialty coffee, roasted weekly',
    'mark'    => '☕',  // any single character or emoji
],
'meta' => [
    'description' => 'Halcyon roasts single-origin coffee on a 1957 Probat, shipped within 48 hours.',
],
```

### 2. Theme (accent colour)

```php
'theme' => [
    'accent'      => '#c0532b',  // terracotta
    'accent_deep' => '#9a3f1f',
    'accent_soft' => '#f1d9cb',
],
```

Try `#2563eb` for a confident blue, `#15803d` for grounded green,
`#7c3aed` for creative purple, `#0f766e` for calm teal,
`#b45309` for warm amber.

The accent colour is injected into a `<style>` block in `layout.blade.php`,
so changing it re-skins every interactive element without touching CSS.

### 3. Hero

```php
'hero' => [
    'eyebrow'        => 'Specialty coffee',
    'headline'       => 'Roasted this week. In your kitchen Friday.',
    'subhead'        => 'Single-origin lots from a 1957 Probat — shipped within 48 hours of roast.',
    'cta_primary'    => ['label' => 'Subscribe',  'href' => '#contact'],
    'cta_secondary'  => ['label' => 'See the menu','href' => '#work'],
    'image'          => 'https://…your-image.jpg',
    'image_alt'      => '',
],
```

### 4. Services — add or remove items freely

```php
'services' => [
    'headline' => 'What we do.',
    'items'    => [
        ['title' => 'Subscriptions', 'body' => 'Weekly, fortnightly or monthly. Pause anytime.'],
        ['title' => 'Café',           'body' => 'Open Tue–Sun, 7am–4pm.'],
        ['title' => 'Wholesale',      'body' => 'Beans, training and equipment for restaurants.'],
    ],
],
```

### 5. Portfolio, pricing, FAQ — same pattern

All repeating sections are arrays. Add as many entries as you need; the
layout adapts automatically.

```php
'pricing' => [
    'currency' => '$',
    'tiers'    => [
        ['name' => 'Solo',   'price' => '18',  'features' => ['250g / week', 'Pause anytime'], 'featured' => false, 'cta' => ['label' => 'Start', 'href' => '#contact']],
        ['name' => 'Duo',    'price' => '32',  'features' => ['2 × 250g / week', 'Pause anytime'], 'featured' => true,  'flag' => 'Most popular', 'cta' => ['label' => 'Start', 'href' => '#contact']],
        ['name' => 'Office', 'price' => '120', 'features' => ['1kg / week', 'Free barista visit'], 'featured' => false, 'cta' => ['label' => 'Start', 'href' => '#contact']],
    ],
],
```

### 6. Contact details

```php
'contact' => [
    'email'          => 'hello@halcyon.coffee',
    'phone'          => '+44 117 555 0199',  // optional, appears in footer
    'instagram'      => 'https://instagram.com/halcyon',
    'location_url'   => 'https://maps.google.com/?q=Halcyon+Coffee+Bristol',
    'location_label' => 'Bristol, UK',
    'hours' => [
        'weekday' => '07:00 – 18:00',
        'saturday' => '08:00 – 17:00',
        'sunday'   => '09:00 – 15:00',
    ],
],
```

---

## Section order

The order is hard-coded in `resources/views/welcome.blade.php`. Re-order
or delete any line to customise:

```php
@section('content')
    @include('partials.hero')
    @include('partials.trust')
    @include('partials.about')
    @include('partials.services')
    @include('partials.work')
    @include('partials.testimonial')
    @include('partials.pricing')
    @include('partials.faq')
    @include('partials.contact')
@endsection
```

---

## Adding a new section

1. Add the data to `config/site.php` (e.g. `team`, `menu`, `journal`).
2. Create `resources/views/partials/<name>.blade.php`.
3. Add `@include('partials.<name>')` to `welcome.blade.php` in the order
   you want.

The partial receives `$site` automatically — read whatever key you added.

---

## Changing the typography

The default pairing is **Fraunces** (display serif) + **Inter** (body sans).
For a different feel, swap the Google Fonts link in `layout.blade.php`
and update `--font-display` / `--font-body` in `public/css/styles.css`:

| Brand vibe           | Display                 | Body                  |
| -------------------- | ----------------------- | --------------------- |
| Editorial / premium  | **Fraunces** (default)  | Inter                 |
| Tech / modern        | **Space Grotesk**       | Inter                 |
| Friendly / warm      | **DM Serif Display**    | DM Sans               |
| Luxury / classic     | **Cormorant Garamond**  | Manrope               |
| Bold / agency        | **Archivo Black**       | Inter                 |

---

## Images

The template ships with Unsplash photos so you can see it light up
immediately. Before you go live, replace them with your own.

**Where to swap:** open each partial in `resources/views/partials/` and
replace the `image` value in `config/site.php`.

**Recommended image specs:**

| Slot       | Aspect ratio | Min width |
| ---------- | ------------ | --------- |
| Hero       | 3:2 or 16:9  | 2400 px   |
| About      | 4:5          | 1200 px   |
| Work       | 16:10        | 1600 px   |

For local hosting, save images under `public/images/` and reference as
`'/images/your-file.jpg'`.

**Free sources:** [Unsplash](https://unsplash.com), [Pexels](https://pexels.com),
your own phone camera with good lighting.

---

## Contact form

The form **already works end-to-end out of the box** — `POST /contact`
is wired to `ContactController`, which:

- validates `name`, `email`, `message`
- rate-limits to 5 submissions / minute / IP
- sends a `ContactInquiry` mailable to `config('site.contact.email')`
- flashes `contact_success` on success

The destination address is whatever you set in `config/site.php` under
`contact.email`. No code edits needed to point it at a different mailbox.

### Choosing where the email is sent from

In your `.env`, configure your mail transport. A few common options:

```dotenv
# Local development — emails go to storage/logs/laravel.log
MAIL_MAILER=log

# Production — pick a real driver:
MAIL_MAILER=smtp
MAIL_HOST=smtp.postmarkapp.com
MAIL_PORT=587
MAIL_USERNAME=...
MAIL_PASSWORD=...
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="hello@yourbusiness.com"
MAIL_FROM_NAME="${APP_NAME}"

# Or transactional services:
MAIL_MAILER=postmark   # then set POSTMARK_TOKEN
MAIL_MAILER=mailgun    # then set MAILGUN_DOMAIN + MAILGUN_SECRET
MAIL_MAILER=resend     # then set RESEND_KEY
```

The Mailable uses the visitor's `email` as the `from` and `replyTo`,
so replies go straight to them — no need to copy/paste addresses.

### If you'd rather not run mail in this app

Replace `Mail::to(...)` in `app/Http/Controllers/ContactController.php`
with a forwarding call:

```php
// Formspree
$resp = Http::post('https://formspree.io/f/YOUR_ID', $data);

// Slack
Http::post(config('services.slack.webhook'), [
    'text' => "New inquiry from {$data['name']} ({$data['email']}): {$data['message']}",
]);

// Or just log + show success
\Log::info('Contact inquiry', $data);
```

The validation, rate-limiting and success flash all still apply.

---

## Switching the typography & build pipeline

This template is intentionally **no-build**:
CSS and JS live in `public/` and are served directly. If you'd rather use
Vite (Laravel's default), move them to `resources/css/app.css` and
`resources/js/app.js`, run `npm install && npm run dev`, and replace the
`<link>` and `<script>` in `layout.blade.php` with `@vite()` directives.

---

## Browser support

Modern evergreen browsers (Chrome, Edge, Firefox, Safari — last 2
versions). Uses CSS custom properties, `clamp()`, `aspect-ratio`,
IntersectionObserver, and `<details>`/`<summary>`. All widely supported.

---

## Credits

- Typography: [Fraunces](https://fonts.google.com/specimen/Fraunces) +
  [Inter](https://fonts.google.com/specimen/Inter) via Google Fonts.
- Placeholder photography: [Unsplash](https://unsplash.com).
- Built with [Laravel](https://laravel.com) 12.
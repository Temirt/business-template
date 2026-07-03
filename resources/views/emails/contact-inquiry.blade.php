@component('mail::message')
# New inquiry from {{ $name }}

**From:** {{ $name }} &lt;{{ $email }}&gt;
**Brand:** {{ $brand }}

---

{{ $message }}

---

@component('mail::subcopy')
Reply directly to this email to respond to {{ $name }}.
@endcomponent

@endcomponent
<section id="contact" class="contact">
  <div class="contact-inner reveal">
    <p class="eyebrow">Start a project</p>
    <h2 class="contact-title">{{ $site['contact_section']['headline'] }}</h2>
    <p class="contact-sub">{{ $site['contact_section']['body'] }}</p>

    @if (session('contact_success'))
      <div class="form-banner form-banner--success" role="status">
        <strong>Thanks — message sent.</strong>
        We'll be in touch within two working days.
      </div>
    @endif

    @if ($errors->any())
      <div class="form-banner form-banner--error" role="alert">
        <strong>Please fix the highlighted fields and try again.</strong>
        @if ($errors->first('email'))
          <div class="form-banner-detail">{{ $errors->first('email') }}</div>
        @endif
      </div>
    @endif

    <form
      method="POST"
      action="{{ route('contact.submit') }}"
      class="contact-form"
    >
      @csrf
      <div class="field">
        <label for="name">Your name</label>
        <input
          id="name" name="name" type="text"
          placeholder="Jane Doe"
          value="{{ old('name') }}"
          required
          @error('name') aria-invalid="true" @enderror
        />
        @error('name') <p class="field-error">{{ $message }}</p> @enderror
      </div>

      <div class="field">
        <label for="email">Email</label>
        <input
          id="email" name="email" type="email"
          placeholder="you@example.com"
          value="{{ old('email') }}"
          required
          @error('email') aria-invalid="true" @enderror
        />
        @error('email') <p class="field-error">{{ $message }}</p> @enderror
      </div>

      <div class="field">
        <label for="message">Tell us about your project</label>
        <textarea
          id="message" name="message" rows="4"
          placeholder="A few lines about what you're working on…"
          required
          @error('message') aria-invalid="true" @enderror
        >{{ old('message') }}</textarea>
        @error('message') <p class="field-error">{{ $message }}</p> @enderror
      </div>

      <button type="submit" class="btn btn-primary btn-block">Send inquiry</button>

      <p class="form-fine">
        {{ $site['contact_section']['form']['fine_print'] }}
        <a href="mailto:{{ $site['contact']['email'] }}">{{ $site['contact']['email'] }}</a>
      </p>
    </form>
  </div>
</section>
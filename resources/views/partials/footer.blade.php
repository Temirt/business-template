<footer class="site-footer">
  <div class="footer-grid">
    <div class="footer-brand">
      <p class="brand-mark">{{ $site['brand']['mark'] }}</p>
      <p class="footer-tagline">{{ $site['footer']['tagline'] }}</p>
    </div>

    <div>
      <h4>Explore</h4>
      <ul>
        <li><a href="#about">About</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#work">Work</a></li>
        <li><a href="#pricing">Pricing</a></li>
        <li><a href="#faq">FAQ</a></li>
      </ul>
    </div>

    <div>
      <h4>Connect</h4>
      <ul>
        <li><a href="mailto:{{ $site['contact']['email'] }}">{{ $site['contact']['email'] }}</a></li>
        @if ($site['contact']['instagram'])
          <li><a href="{{ $site['contact']['instagram'] }}" target="_blank" rel="noopener">Instagram</a></li>
        @endif
        @if ($site['contact']['linkedin'])
          <li><a href="{{ $site['contact']['linkedin'] }}" target="_blank" rel="noopener">LinkedIn</a></li>
        @endif
        @if ($site['contact']['phone'])
          <li><a href="tel:{{ preg_replace('/[^0-9+]/', '', $site['contact']['phone']) }}">{{ $site['contact']['phone'] }}</a></li>
        @endif
        <li><a href="{{ $site['contact']['location_url'] }}" target="_blank" rel="noopener">{{ $site['contact']['location_label'] }}</a></li>
      </ul>
    </div>

    <div>
      <h4>Hours</h4>
      <ul class="hours">
        <li><span>Mon – Fri</span><span>{{ $site['contact']['hours']['weekday'] }}</span></li>
        <li><span>Saturday</span><span>{{ $site['contact']['hours']['saturday'] }}</span></li>
        <li><span>Sunday</span><span>{{ $site['contact']['hours']['sunday'] }}</span></li>
      </ul>
    </div>
  </div>

  <div class="footer-bottom">
    <p>© <span id="year">{{ now()->year }}</span> {{ $site['brand']['name'] }}. All rights reserved.</p>
    <p class="footer-credit">Built with <a href="https://laravel.com" target="_blank" rel="noopener">Laravel</a></p>
  </div>
</footer>
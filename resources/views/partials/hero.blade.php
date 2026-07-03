<section class="hero">
  <div class="hero-media">
    <img src="{{ $site['hero']['image'] }}" alt="{{ $site['hero']['image_alt'] }}" loading="eager" />
    <div class="hero-overlay"></div>
  </div>

  <div class="hero-content">
    <p class="eyebrow">{{ $site['hero']['eyebrow'] }}</p>
    <h1 class="hero-title">{{ $site['hero']['headline'] }}</h1>
    <p class="hero-sub">{{ $site['hero']['subhead'] }}</p>
    <div class="hero-actions">
      <a href="{{ $site['hero']['cta_primary']['href'] }}" class="btn btn-primary">
        {{ $site['hero']['cta_primary']['label'] }}
      </a>
      <a href="{{ $site['hero']['cta_secondary']['href'] }}" class="btn btn-ghost">
        {{ $site['hero']['cta_secondary']['label'] }} →
      </a>
    </div>
  </div>

  <a href="#trust" class="scroll-cue" aria-label="Scroll to content">
    <span>Scroll</span>
    <svg width="14" height="40" viewBox="0 0 14 40" aria-hidden="true">
      <path d="M7 1 V36 M1 30 L7 36 L13 30" stroke="currentColor" stroke-width="1.2" fill="none" stroke-linecap="round" />
    </svg>
  </a>
</section>
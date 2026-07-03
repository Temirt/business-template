<section id="pricing" class="pricing">
  <header class="section-header reveal">
    <p class="eyebrow">Engagement</p>
    <h2>{{ $site['pricing']['headline'] }}</h2>
    <p class="section-sub">{{ $site['pricing']['sub'] }}</p>
  </header>

  <div class="pricing-grid">
    @foreach ($site['pricing']['tiers'] as $tier)
      <article class="tier {{ !empty($tier['featured']) ? 'tier--featured' : '' }} reveal">
        @if (!empty($tier['featured']) && !empty($tier['flag']))
          <span class="tier-flag">{{ $tier['flag'] }}</span>
        @endif
        <header>
          <h3>{{ $tier['name'] }}</h3>
          <p class="tier-tagline">{{ $tier['tagline'] }}</p>
        </header>
        <p class="tier-price">
          <span class="tier-currency">{{ $site['pricing']['currency'] }}</span>{{ $tier['price'] }}
        </p>
        <ul class="tier-features">
          @foreach ($tier['features'] as $feature)
            <li>{{ $feature }}</li>
          @endforeach
        </ul>
        <a href="{{ $tier['cta']['href'] }}" class="btn {{ !empty($tier['featured']) ? 'btn-primary' : 'btn-ghost' }} btn-block">
          {{ $tier['cta']['label'] }}
        </a>
      </article>
    @endforeach
  </div>
</section>
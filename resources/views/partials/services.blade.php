<section id="services" class="services">
  <header class="section-header reveal">
    <p class="eyebrow">What we do</p>
    <h2>{{ $site['services']['headline'] }}</h2>
    <p class="section-sub">{{ $site['services']['sub'] }}</p>
  </header>

  <ol class="service-list">
    @foreach ($site['services']['items'] as $i => $service)
      <li class="service reveal">
        <span class="service-number">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</span>
        <div>
          <h3>{{ $service['title'] }}</h3>
          <p>{{ $service['body'] }}</p>
        </div>
      </li>
    @endforeach
  </ol>
</section>
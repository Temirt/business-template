<section id="trust" class="trust" aria-label="Featured in">
  <span class="trust-label">{{ $site['trust']['label'] }}</span>
  <ul class="trust-list">
    @foreach ($site['trust']['items'] as $outlet)
      <li>{{ $outlet }}</li>
    @endforeach
  </ul>
</section>
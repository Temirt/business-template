<section id="faq" class="faq">
  <header class="section-header reveal">
    <p class="eyebrow">Questions</p>
    <h2>{{ $site['faq']['headline'] }}</h2>
  </header>

  <div class="faq-list">
    @foreach ($site['faq']['items'] as $i => $item)
      <details class="faq-item reveal" {{ $i === 0 ? 'open' : '' }}>
        <summary>
          <span>{{ $item['q'] }}</span>
          <span class="faq-icon" aria-hidden="true"></span>
        </summary>
        <p>{{ $item['a'] }}</p>
      </details>
    @endforeach
  </div>
</section>
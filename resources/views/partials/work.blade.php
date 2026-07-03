<section id="work" class="work">
  <header class="section-header reveal">
    <p class="eyebrow">Selected work</p>
    <h2>{{ $site['work']['headline'] }}</h2>
  </header>

  <div class="work-grid">
    @foreach ($site['work']['items'] as $item)
      <article class="work-item {{ !empty($item['offset']) ? 'work-item--offset' : '' }} reveal">
        <a href="{{ $item['href'] ?? '#' }}" class="work-link">
          <div class="work-image">
            <img src="{{ $item['image'] }}" alt="{{ $item['image_alt'] }}" loading="lazy" />
          </div>
          <div class="work-meta">
            <span class="work-tag">{{ $item['tag'] }}</span>
            <h3>{{ $item['title'] }}</h3>
            <p>{{ $item['desc'] }}</p>
          </div>
        </a>
      </article>
    @endforeach
  </div>
</section>
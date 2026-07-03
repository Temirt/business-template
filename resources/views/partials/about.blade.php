<section id="about" class="about">
  <div class="about-text reveal">
    <p class="eyebrow">About</p>
    <h2>{{ $site['about']['headline'] }}</h2>
    <p class="lead">{{ $site['about']['lead'] }}</p>
    <p>{{ $site['about']['body'] }}</p>
    <a href="#work" class="link-arrow">See selected work <span aria-hidden="true">→</span></a>
  </div>

  <figure class="about-figure reveal">
    <img src="{{ $site['about']['image'] }}" alt="{{ $site['about']['image_alt'] }}" loading="lazy" />
    <figcaption>{{ $site['about']['caption'] }}</figcaption>
  </figure>
</section>
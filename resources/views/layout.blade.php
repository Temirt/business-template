{{--
  Master layout for the business template.
  Receives: $site (config('site')) — every section partial reads from this.
--}}
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="{{ $site['meta']['description'] }}" />

  <meta property="og:title" content="{{ $site['brand']['name'] }} — {{ $site['brand']['tagline'] }}" />
  <meta property="og:description" content="{{ $site['meta']['description'] }}" />
  <meta property="og:type" content="website" />
  @if (!empty($site['meta']['og_image']))
    <meta property="og:image" content="{{ $site['meta']['og_image'] }}" />
  @endif

  <title>{{ $site['brand']['name'] }} — {{ $site['brand']['tagline'] }}</title>

  <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Ctext y='.9em' font-size='90'%3E%E2%9C%A6%3C/text%3E%3C/svg%3E" />

  {{-- Google Fonts: Fraunces + Inter (the editorial pairing) --}}
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600;9..144,700&family=Inter:wght@400;500;600;700&display=swap"
    rel="stylesheet"
  />

  {{-- Theme variables injected from config/site.php --}}
  <style>
    :root {
      --accent:      {{ $site['theme']['accent'] }};
      --accent-deep: {{ $site['theme']['accent_deep'] }};
      --accent-soft: {{ $site['theme']['accent_soft'] }};
    }
  </style>

  <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
</head>
<body>

  @include('partials.header')

  <main>
    @yield('content')
  </main>

  @include('partials.footer')

  <script src="{{ asset('js/script.js') }}" defer></script>
</body>
</html>
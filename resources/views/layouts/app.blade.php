<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="theme-color" content="#09090B">

  <title>@yield('title', 'Rikza Alif - Modern Web Developer')</title>
  <meta name="description" content="@yield('description', 'I build modern business websites that are fast, beautiful, and SEO-friendly. Specializing in Laravel, Tailwind CSS, and AI-assisted development.')">

  <link rel="canonical" href="{{ url()->current() }}">

  <meta property="og:type" content="website">
  <meta property="og:title" content="@yield('og_title', 'Rikza Alif - Modern Web Developer')">
  <meta property="og:description" content="@yield('og_description', 'I build modern business websites that are fast, beautiful, and SEO-friendly.')">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:image" content="{{ asset('images/og-image.png') }}">
  <meta property="og:site_name" content="Rikza Alif Portfolio">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="@yield('og_title', 'Rikza Alif - Modern Web Developer')">
  <meta name="twitter:description" content="@yield('og_description', 'I build modern business websites that are fast, beautiful, and SEO-friendly.')">
  <meta name="twitter:image" content="{{ asset('images/og-image.png') }}">

  <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "Person",
      "name": "Rikza Alif",
      "url": "{{ url('/') }}",
      "jobTitle": "Web Developer",
      "sameAs": [
        "https://github.com/RikzaALL",
        "https://www.linkedin.com/in/rikza-alif-muharom-a20a49387/",
        "https://instagram.com/rkz_mhrm"
      ]
    }
  </script>

  <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
  <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
  <link rel="manifest" href="{{ asset('site.webmanifest') }}">

  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @stack('head')
</head>
<body class="antialiased">
  <x-navbar />

  <main>
    @yield('content')
  </main>

  <x-footer />

  @stack('scripts')
</body>
</html>

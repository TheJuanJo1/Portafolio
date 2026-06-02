<!DOCTYPE html>
<html lang="es" class="scroll-smooth dark-theme">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @php($seo = config('portfolio.seo'))
    <title>{{ $seo['title'] }}</title>
    <meta name="description" content="{{ $seo['description'] }}">
    <meta name="author" content="{{ config('portfolio.name') }}">

    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $seo['title'] }}">
    <meta property="og:description" content="{{ $seo['description'] }}">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:image" content="{{ asset($seo['og_image']) }}">
    <meta property="og:locale" content="es_CO">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $seo['title'] }}">
    <meta name="twitter:description" content="{{ $seo['description'] }}">

    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700|jetbrains-mono:400,500" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="font-sans antialiased transition-colors duration-500">
    <canvas id="particles" class="particles-canvas" aria-hidden="true"></canvas>
    <div class="ambient-glow" aria-hidden="true"></div>

    {{ $slot }}

    @livewireScripts
</body>
</html>

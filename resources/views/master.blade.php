<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
      @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    @stack("tagscript")
  </head>
  <body class="font-sans antialiased background">
    <div class="m-8">
      <div class="md:grid md:grid-cols-4 md:gap-8">
        <div>
          @include('sidebar')
        </div>
        <div class="md:col-span-3 md:mt-0 mt-8 border border-solid border-black">
          @yield('content')
        </div>
      </div>
    </div>
  </body>
</html>

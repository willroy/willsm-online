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

    @yield('extra-head')
  </head>
  <body class="font-sans antialiased default_theme-body">
    <div class="m-8">
      <div class="flex flex-col md:flex-row">
        <div class="shrink md:mr-8">
          @include('sidebar')
          <div>
            @include('themeswitcher')
          </div>
        </div>
        <div class="content grow md:mt-0 mt-8 border border-solid border-black">
          @yield('content')
        </div>
      </div>
    </div>
    <script>
      function switchTheme(theme) {
        $('body').removeClass("default_theme-body");
        $('body').removeClass("beige_theme-body");
        $('body').removeClass("pastel_theme-body");
        $('body').addClass(theme+"-body");
      }
    </script>
  </body>
</html>
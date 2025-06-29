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

  </head>
  <body class="font-sans antialiased">
		<h1 class="mt-4 ml-4 sm:mt-16 sm:ml-16 lg:mt-64 lg:ml-64 text-2xl font-bold">Journalism Cat isn't here right now... Maybe come back later?</h1>
		<img class="" src="{{ asset('images-persistent/journalist-not-here.png') }}">
	</body>
</html>
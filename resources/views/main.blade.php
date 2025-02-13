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
    @else
      <style>
      </style>
    @endif
  </head>
  <body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
      <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
        <div class="relative w-[850px] max-w-2xl px-6 lg:max-w-7xl">
          <header class="grid grid-flow-col auto-cols-max md:auto-cols-min">
             @yield('header')
          </header>

          <main class="mt-12 px-8">
            @yield('content')
          </main>

          <footer class="py-16 text-center text-sm text-black dark:text-white/70">
            @yield('footer')

            @if (Auth::check())
            <br><br>
            <h1>Welcome, {{ Auth::user()->name }}</h1>
            <h1>Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</h1>
            <h1>DB: {{ config('services.db.name') }}
            <br>
            <br>
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit" class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded">Logout</button>
            </form>
            @endif

          </footer>
        </div>
      </div>
    </div>
  </body>
</html>

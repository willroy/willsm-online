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
    @stack("tagscript")
  </head>
  <body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
      <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
        <div class="relative xl:w-[1250px] w-full px-6">
          <header class="@if(Request::url() != url('/') || Auth::check())h-[6rem]@endif flex justify-center items-center">
            @if (Auth::check())
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="mx-2 float-right bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded">Logout</button>
              </form>
              <a href="{{ route('media.index') }}" class="mx-2 float-right bg-gray-500 hover:bg-gray-400 text-white font-bold py-2 px-4 border-b-4 border-gray-700 hover:border-gray-500 rounded">Media</a>
            @endif
            @if(Request::url() != url('/') || Auth::check())
              <a href="{{ route('main') }}" class="mx-2 float-right bg-gray-500 hover:bg-gray-400 text-white font-bold py-2 px-4 border-b-4 border-gray-700 hover:border-gray-500 rounded">Home</a>
            @endif
            @yield('header')
          </header>
          @if(Request::url() != url('/') || Auth::check())<hr>@endif
          <br><br>
          <main class="px-8">
            @yield('content')
          </main>
          <footer class="py-8 text-center text-sm text-black dark:text-white/70">
            @yield('footer')
          </footer>
        </div>
      </div>
    </div>
  </body>
</html>

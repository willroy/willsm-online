<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>willsm.online</title>


    <link rel="icon" type="image/png" href="{{ asset('/public/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('/public/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('/public/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/public/apple-touch-icon.png') }}" />
    <link rel="manifest" href="{{ asset('/public/site.webmanifest') }}" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
      @vite([
        'resources/css/app.css',
        'resources/js/app.js',
        'resources/css/themes/newgeneration.css',
        'resources/css/themes/classic.css',
        'resources/css/themes/catppiccinlatte.css',
        'resources/css/themes/oshawatt.css',
        'resources/css/themes/base2tonedesert.css',
        'resources/css/themes/pastelbonanza.css'
        ])
    @endif

    @yield('extra-head')
  </head>
  <body class="font-sans antialiased theme-{{ is_null(Cookie::get('theme')) ? 'newgeneration' : Cookie::get('theme') }}-body">
    <div class="xl:ml-[20%] @if ( isset($page) && is_null($page) && $page == 'home' ) xl:mr-[30%] @else xl:mr-[20%] @endif xl:my-16 lg:mx-[20%] lg:my-8 m-4">
      <div class="flex flex-col md:flex-row">
        <div class="shrink md:mr-8">
          @include('sidebar', ['page' => $page ?? null])
          <div>
            @include('themeswitcher')
          </div>
        </div>
        <div class="content grow md:mt-0 mt-8 border border-solid border-black relative">
          @yield('content')
        </div>
      </div>
      @yield('content-extra')
    </div>
    <script>
      function switchTheme(theme, btn) {
        console.log("switching to theme "+theme)

        $('body').removeClass("theme-newgeneration-body");
        $('body').removeClass("theme-classic-body");
        $('body').removeClass("theme-catppiccinlatte-body");
        $('body').removeClass("theme-oshawatt-body");
        $('body').removeClass("theme-eink-body");
        $('body').removeClass("theme-base2tonedesert-body");
        $('body').removeClass("theme-pastelbonanza-body");
        $('body').addClass("theme-"+theme+"-body");
        
        $('.themes .button-selected').removeClass('button-selected');
        $(btn).addClass('button-selected');

        $.ajax({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          url : "{{ url('/themeSwitch') }}",
          data : {'theme' : theme},
          type : 'GET',
          dataType : 'json',
          success : function(result) {
            console.log(result);
          }
        });
      }
    </script>
  </body>
</html>
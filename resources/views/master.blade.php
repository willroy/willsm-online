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
    <div class="xl:ml-[15%] xl:mr-[25%] xl:my-32 lg:mx-[10%] lg:my-16 m-4">
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
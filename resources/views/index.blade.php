@extends('main')

@section('content')
   <div class="grid grid-cols-2 gap-4 auto-cols-max md:auto-cols-min">
      @php($label = "Music")
      @php($aDelay = "150ms")
      @php($img = "../assets/music.png")
      @php($href = url('/music'))
      @php($fontsize = "60px")
      @include('inc/homebutton')

      @php($label = "Art")
      @php($aDelay = "200ms")
      @php($img = "")
      @php($href = url('/art'))
      @php($fontsize = "80px")
      @include('inc/homebutton')

      @php($label = "About")
      @php($aDelay = "350ms")
      @php($img = "")
      @php($href = url('/about'))
      @php($fontsize = "70px")
      @include('inc/homebutton')

      @php($label = "Projects")
      @php($aDelay = "200ms")
      @php($img = "")
      @php($href = url('/projects'))
      @php($fontsize = "50px")
      @include('inc/homebutton')
   </div>
@endsection

@section('footer')
   <div class="animate-fadein opacity-0 w-full h-auto flex items-center justify-center gap-2 flex-wrap mt-4" style="animation-delay: 400ms">
      <div class="p-3 w-3 h-3 bg-gray-400 rounded-full hover:rounded-sm hover:cursor-pointer -start-1.5 border border-gray-500"></div>
      <div class="p-3 w-3 h-3 bg-yellow-400 rounded-full hover:rounded-sm hover:cursor-pointer -start-1.5 border border-gray-500"></div>
      <div class="p-3 w-3 h-3 bg-pink-400 rounded-full hover:rounded-sm hover:cursor-pointer -start-1.5 border border-gray-500"></div>
      <div class="p-3 w-3 h-3 bg-green-400 rounded-full hover:rounded-sm hover:cursor-pointer -start-1.5 border border-gray-500"></div>
   </div>
@endsection
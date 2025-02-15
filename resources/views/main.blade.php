@extends('master')

@section('content')
   <div class="grid sm:grid-cols-2 grid-cols-1 gap-4">
      <x-HomeButton label="Music" img="../assets/music.png" href="{{ url('/music') }}" fontsize="60px" delay="120ms"/>
      <x-HomeButton label="Art" img="" href="{{ url('/art') }}" fontsize="80px" delay="150ms"/>
      <x-HomeButton label="About" img="" href="{{ url('/about') }}" fontsize="70px" delay="170ms"/>
      <x-HomeButton label="Projects" img="" href="{{ url('/projects') }}" fontsize="50px" delay="180ms"/>
   </div>
@endsection

@section('footer')
   <div class="animate-fadein opacity-0 w-full h-auto flex items-center justify-center gap-2 flex-wrap mt-4" style="animation-delay: 200ms">
      <div class="p-3 w-3 h-3 bg-gray-400 rounded-full hover:rounded-sm hover:cursor-pointer -start-1.5 border border-gray-500"></div>
      <div class="p-3 w-3 h-3 bg-yellow-400 rounded-full hover:rounded-sm hover:cursor-pointer -start-1.5 border border-gray-500"></div>
      <div class="p-3 w-3 h-3 bg-pink-400 rounded-full hover:rounded-sm hover:cursor-pointer -start-1.5 border border-gray-500"></div>
      <div class="p-3 w-3 h-3 bg-green-400 rounded-full hover:rounded-sm hover:cursor-pointer -start-1.5 border border-gray-500"></div>
   </div>
@endsection
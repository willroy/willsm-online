@extends('master')

@section('content')
   <div class="grid sm:grid-cols-2 grid-cols-1 gap-4 xl:px-[200px]">
      <x-HomeButton label="Music" img="../assets/music.png" href="{{ url('/music') }}" fontsize="60px"/>
      <x-HomeButton label="Art" img="" href="{{ url('/art') }}" fontsize="80px"/>
      <x-HomeButton label="About" img="" href="{{ url('/about') }}" fontsize="70px"/>
      <x-HomeButton label="Projects" img="" href="{{ url('/projects') }}" fontsize="50px"/>
   </div>
@endsection
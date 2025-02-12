@extends('main')

@section('content')
	<div class="grid grid-cols-2 gap-4">
      <div class="animate-fadein opacity-0">@include('dashboard.inc.art')</div>
      <div class="animate-fadein opacity-0" style="animation-delay: 350ms">@include('dashboard.inc.music')</div>
      <div class="animate-fadein opacity-0" style="animation-delay: 500ms">@include('dashboard.inc.projects')</div>
      <div class="animate-fadein opacity-0" style="animation-delay: 750ms">@include('dashboard.inc.aboutme')</div>
   </div>
@endsection

@section('footer')
   <div class="animate-fadein opacity-0 w-full h-auto flex items-center justify-center gap-2 flex-wrap mt-4" style="animation-delay: 1000ms">
      <div class="p-3 w-3 h-3 bg-gray-400 rounded-full hover:rounded-sm hover:cursor-pointer -start-1.5 border border-gray-500"></div>
      <div class="p-3 w-3 h-3 bg-yellow-400 rounded-full hover:rounded-sm hover:cursor-pointer -start-1.5 border border-gray-500"></div>
      <div class="p-3 w-3 h-3 bg-pink-400 rounded-full hover:rounded-sm hover:cursor-pointer -start-1.5 border border-gray-500"></div>
      <div class="p-3 w-3 h-3 bg-green-400 rounded-full hover:rounded-sm hover:cursor-pointer -start-1.5 border border-gray-500"></div>
   </div>
@endsection
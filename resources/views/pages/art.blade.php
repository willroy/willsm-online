@extends('main')

@section('content')
    <x-TagFilter label="pencil" value="pencil" />
    <x-TagFilter label="ink" value="ink" />
    <x-TagFilter label="digital" value="digital" />
    <x-TagFilter label="character" value="character" />
    <x-TagFilter label="animal" value="animal" />
    <x-TagFilter label="enviroment" value="enviroment" />
    <x-TagFilter label="referenced" value="referenced" />
    <x-TagFilter label="imagination" value="imagination" />
    <x-TagFilter label="sketch" value="sketch" />
    <x-TagFilter label="portait" value="portait" />
    <x-TagFilter label="landscape" value="landscape" />
@endsection

@section('footer')
   <div class="animate-fadein opacity-0 w-full h-auto flex items-center justify-center gap-2 flex-wrap mt-4" style="animation-delay: 400ms">
      <div class="p-3 w-3 h-3 bg-gray-400 rounded-full hover:rounded-sm hover:cursor-pointer -start-1.5 border border-gray-500"></div>
      <div class="p-3 w-3 h-3 bg-yellow-400 rounded-full hover:rounded-sm hover:cursor-pointer -start-1.5 border border-gray-500"></div>
      <div class="p-3 w-3 h-3 bg-pink-400 rounded-full hover:rounded-sm hover:cursor-pointer -start-1.5 border border-gray-500"></div>
      <div class="p-3 w-3 h-3 bg-green-400 rounded-full hover:rounded-sm hover:cursor-pointer -start-1.5 border border-gray-500"></div>
   </div>
@endsection
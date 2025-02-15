@extends('master')

@section('content')
   <a href="{{ route('media.edit') }}">Add</a>
   @foreach ($artMediaItems as $mediaItem)
      <img src="{{ asset($mediaItem->path) }}" />
   @endforeach
   @foreach ($musicMediaItems as $mediaItem)
      <img src="{{ asset($mediaItem->path) }}" />
   @endforeach
@endsection
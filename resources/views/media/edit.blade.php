@extends('master')

@section('content')
   <form method="POST" enctype="multipart/form-data" action="{{ route('media.save') }}">
      @csrf
      <input type="text" name="type">
      <input type="file" name="image">
      <button type="submit" class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded">Save</button>
   </form>
@endsection
@php $page = "media" @endphp

@extends('master')

@section('content')
   <form method="POST" enctype="multipart/form-data" action="{{ route('media.uploadsave') }}" id="uploadform" class="m-2 mt-4">
      @csrf
      <select name="type" class="m-2">
         <option value="art">Art</option>
         <option value="media">Media</option>
      </select>

      <input type="file" class="form-control" name="uploaded[]" multiple />

      <x-Button label="Submit" href="#" onclick="document.getElementById('uploadform').submit();"/>
   </form>
@endsection
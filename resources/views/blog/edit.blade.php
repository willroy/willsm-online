@php $page = "blog" @endphp

@extends('master')

@section('extra-head')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/easymde/dist/easymde.min.css">

@endsection

@section('content')
   <div class="m-8">
      <form method="POST" enctype="multipart/form-data" action="{{ route('blog.save', $blog->id ?? null) }}">
         @csrf
         <input type="text" name="title" placeholder="Blog title" class="mb-8" value="{{ $blog->title ?? null }}" />
         <textarea id="editor" name="content">{{ $blog->content ?? null }}</textarea>
         <button type="submit" class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded">Save</button>
      </form>

      <script src="https://cdn.jsdelivr.net/npm/easymde/dist/easymde.min.js"></script>
      <script>
         new EasyMDE({ element: document.getElementById('editor') });
      </script>
    </div>
@endsection
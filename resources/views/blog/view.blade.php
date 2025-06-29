@php $page = "blog" @endphp

@extends('master')

@section('content')
   <div class="m-8">
      <div class="blog-item px-8 py-8 mb-8">
          <h2 class="text-2xl font-semibold">{{ $blog->title }}</h2><hr class="my-8">
          <div class="prose max-w-none">{!! $blog->content_html !!}</div>
      </div>
   </div>
@endsection
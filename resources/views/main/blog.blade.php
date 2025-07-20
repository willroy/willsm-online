@php $page = "blog" @endphp

@extends('master')

@section('content')

<div class="content-banner p-4">
	<h1 class="text-xl">Blog</h1>
</div>

@if (Auth::check())
	<div class="float-right m-4">
    	<x-Button href="{{ route('blog.edit') }}" label="Create"/>
	</div>
@endif

<div class="m-4 @if (Auth::check()) mt-20 @endif ">
	@foreach ($blogs as $blog)
		@if (Auth::check())
		<div class="float-right m-4 flex">
	    	<x-Button href="{{ route('blog.edit', ['id' => $blog->id]) }}" label="Edit"/>
	    	<x-Button href="{{ route('blog.delete', ['id' => $blog->id]) }}" label="Delete"/>
		</div>
		@endif
		<div class="blog-item px-8 py-8 mb-8">
		    <h2 class="text-2xl font-semibold">{{ $blog->title }}</h2><hr class="my-8">
		    <div class="prose max-w-none">{!! $blog->content_html !!}</div>
		</div>
	@endforeach
</div>

@endsection
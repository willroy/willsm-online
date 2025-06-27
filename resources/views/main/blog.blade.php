@php $page = "blog" @endphp

@extends('master')

@section('content')

<div class="content-banner p-4">
	<h1 class="text-xl">Blog</h1>
</div>
<hr>
<div class="m-4">
	<div class="float-right">
        @if (Auth::check())
	    	<x-Button href="{{ route('blog.edit') }}" label="Create"/>
	    @endif
	</div>
	<hr>
	@foreach ($blogs as $blog)
		<div class="blog-item px-8 py-8">
		    <h2 class="text-2xl font-semibold">{{ $blog->title }}</h2><hr class="my-8">
		    <div class="prose max-w-none">{!! $blog->content_html !!}</div>
		</div>
	@endforeach
</div>

@endsection
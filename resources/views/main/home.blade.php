@php $page = "home" @endphp

@extends('master')

@section('content')


<div class="absolute bottom-[30rem] -right-[15rem] hidden xl:block z-20 border">
	<div class="content-banner p-2">
		<p>Facts Cat</p>
	</div>
	<a class="w-[350px] float-right popup shadow-2xl" href="{{ route('factscat.index') }}">
		<img src="{{ asset('images-persistent/journalist.png') }}">
		<p class="absolute top-[50px] right-[20px] font-bold">Hello! I'm journalism cat!!</p>
		<p class="absolute top-[80px] right-[20px] font-bold">Click me to help me</p>
		<p class="absolute top-[110px] right-[20px] font-bold"> learn every fact!</p>
	</a>
</div>

<div class="content-banner p-4">
	<h1 class="text-xl">Home</h1>
</div>

<hr>

<div class="m-4">
	<h1 class="text-5xl mb-2">Welcome!!!!</h1>
	<div class="md:grid md:grid-cols-3 md:gap-4">
		<div class="col-span-2">
			<h1 class="text-3xl my-4">Latest Blog</h1>
			<div class="blog-item px-8 py-8 max-h-[550px] overflow-hidden relative">
				@foreach ($blogs as $blog)
				    <h2 class="text-2xl font-semibold">{{ $blog->title }}</h2><hr class="my-8">
				    <div class="prose max-w-none">{!! $blog->content_html !!}</div>
				@endforeach
				<div class="absolute w-[100%] h-[50px] bottom-0 left-[50%] -translate-x-1/2 bg-white opacity-80 flex justify-center items-center z-30"><a href="{{ route('blog.view', ['id' => $blog->id]) }}">read more</a></div>
			</div>
		</div>
		<div>
			<h1 class="text-3xl my-4">Recent Art</h1>
			<x-ImageList :images="$mediaItems" maxItems="1"/>
		</div>
	</div>
</div>

<x-ImageModal />

@endsection

@section('content-extra')

<div class="xl:hidden border my-8 md:w-[350px] float-right relative">
	<div class="content-banner p-2">
		<p>Facts Cat</p>
	</div>
	<div class="p-2 relative popup">
		<a href="{{ route('factscat.index') }}">
			<div class="absolute top-[10px] right-[10px]">
				<p class="font-bold">Hello! I'm journalism cat!!</p>
				<p class="font-bold">Click me to help me</p>
				<p class="font-bold"> learn every fact!</p>
			</div>
			<img src="{{ asset('images-persistent/journalist.png') }}">
		</a>
	</div>
</div>

@endsection
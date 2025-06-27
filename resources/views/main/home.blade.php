@extends('master')

@section('content')
    
<div class="content-banner p-4">
	<h1 class="text-xl">Home > > > > > ></h1>
</div>
<hr>
<div class="m-4">
	<h1 class="text-3xl mb-2">Welcome!!!!</h1>
	<hr>
	<h1 class="text-3xl my-4">Latest Blog</h1>
	<div class="ml-8 mb-8">
		@foreach ($blogs as $blog)
		    <h2 class="text-2xl font-semibold">{{ $blog->title }}</h2><hr class="my-8">
		    <div class="prose max-w-none p-8">{!! $blog->content_html !!}</div>
		@endforeach
	</div>
	<hr>
	<h1 class="text-3xl my-4">Recent Art</h1>
	<x-ImageList :images="$mediaItems"/>
</div>

@endsection

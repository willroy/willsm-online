@extends('master')

@section('content')

<div class="content-banner p-4">
	<h1 class="text-xl">Blog > > > > > ></h1>
</div>
<hr>
<div class="m-4">
	<div class="float-right">
        @if (Auth::check())
	    	<x-Button href="{{ route('blog.edit') }}" label="Create"/>
	    @endif
	</div>
	<hr>
	<div>
		@foreach ($blogs as $blog)
		    <h2 class="text-2xl font-semibold">{{ $blog->title }}</h2><hr class="my-8">
		    <div class="prose max-w-none p-8">{!! $blog->content_html !!}</div>
		@endforeach
	</div>
</div>

@endsection
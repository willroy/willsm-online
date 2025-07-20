@php $page = "music" @endphp

@extends('master')

@section('content')

<div class="content-banner p-4">
    <h1 class="text-xl">Media</h1>
</div>
<hr>
<div class="m-4">
    <div class="flex justify-between mb-2">
        @if (Auth::check())
            <x-Button classes="" href="{{ route('media.upload') }}" label="Upload"/>
        @endif
    </div>
    <hr>
    <div class="my-4 grid md:grid-cols-2 grid-cols-1 gap-2 items-center">
		@foreach ($videos as $video)
			<video controls src="{{ asset($video->path) }}"></video>
		@endforeach
	</div>
</div>

@endsection
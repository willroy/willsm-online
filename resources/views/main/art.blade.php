@extends('master')

@section('content')

<div class="content-banner p-4">
    <h1 class="text-xl">Art > > > > > ></h1>
</div>
<hr>
<div class="m-4">
    <div class="flex justify-between mb-2">
        <div class="flex">
            @foreach ($tags as $tag)
                <x-Button classes="" label="{{ $tag->handle }}" value="{{ $tag->handle }}"/>
            @endforeach
        </div>
        @if (Auth::check())
            <x-Button classes="" href="{{ route('media.upload') }}" label="Upload"/>
        @endif
    </div>
    <hr>
    <x-ImageList :images=$mediaItems/>
</div>

<x-ImageModal />

@endsection
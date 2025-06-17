@extends('master')

@section('content')
    <div class="m-4">
        <div class="flex justify-between">
            <div>
                @foreach ($tags as $tag)
                    <x-TagFilter label="{{ $tag->handle }}" value="{{ $tag->handle }}" />
                @endforeach
            </div>
            @if (Auth::check())
                <div class="mt-0 mb-2">
                    <x-Button href="{{ route('media.upload') }}" label="Upload"/>
                </div>
            @endif
        </div>
        <hr>
        <x-ImageList :images=$mediaItems/>
    </div>

    <x-ImageModal />
@endsection
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
        <div class="my-4 grid xl:grid-cols-5 md:grid-cols-3 grid-cols-1 gap-2 items-center">
            @foreach ($mediaItems as $mediaItem)
                 <div class="relative">
                    <img src="{{ asset($mediaItem->path) }}" onclick="showModal('{{ asset($mediaItem->path) }}')"/>
                    @if (Auth::check())
                        <div class="absolute float-right top-0">
                           <x-Button href="{{ route('media.edit', ['id' => $mediaItem->id]) }}" label="Edit" classes="bg-white"/>
                           <x-Button href="{{ route('media.delete', ['id' => $mediaItem->id]) }}" label="Delete" classes="bg-white"/>
                        </div>
                    @endif
                 </div>
            @endforeach
        </div>
    </div>

    <x-ImageModal />
@endsection
@extends('master')

@section('content')
    <div class="m-4">
        <div class="my-4">
            @foreach ($tags as $tag)
                <x-TagFilter label="{{ $tag->handle }}" value="{{ $tag->handle }}" />
            @endforeach
        </div>
        <hr>
        <div class="my-4 grid xl:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-2 items-center">
            @foreach ($mediaItems as $mediaItem)
                <img src="{{ asset($mediaItem->path) }}" data-modal-show="imgmodal" onclick="showModal('{{ asset($mediaItem->path) }}')"/>
            @endforeach
        </div>
        <hr>
    </div>

    <x-ImageModal />
@endsection

@extends('master')

@section('content')
   <div>
      @foreach ($tags as $tag)
         <x-TagFilter label="{{ $tag->handle }}" value="{{ $tag->handle }}" />
      @endforeach
   </div>
   <br><br><hr><br><br>
   <div class="grid xl:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-2 items-center">
      @foreach ($mediaItems as $mediaItem)
         <img src="{{ asset($mediaItem->path) }}" data-modal-show="imgmodal" onclick="showModal('{{ asset($mediaItem->path) }}')"/>
      @endforeach
   </div>
   <br><br><hr><br>

   <x-ImageModal />
@endsection
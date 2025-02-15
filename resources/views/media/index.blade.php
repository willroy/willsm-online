@extends('master')

@section('content')
   <x-Button classes="float-right" href="{{ route('media.edit') }}" label="Add" colour="red" />
   <br><br><br><hr><br>
   <h2>Art</h2>
   <br><br>
   <div class="grid sm:grid-cols-3 grid-cols-1 gap-x-[3rem] gap-y-[1rem]">
      @foreach ($artMediaItems as $mediaItem)
         <div class="flex items-center justify-center gap-2">
            <img class="w-[100px] h-[100px]" src="{{ asset($mediaItem->path) }}" onclick="showModal('{{ asset($mediaItem->path) }}')"/>
            <x-Button classes="" href="{{ route('media.view', ['id' => $mediaItem->id]) }}" label="View" colour="red" />
            <x-Button classes="" href="{{ route('media.edit', ['id' => $mediaItem->id]) }}" label="Edit" colour="red" />
            <x-Button classes="" href="{{ route('media.delete', ['id' => $mediaItem->id]) }}" label="Delete" colour="red" />
         </div>
      @endforeach
   </div>
   <br><hr><br>
   <h2>Music</h2>
   <br><br>
   <div class="grid sm:grid-cols-3 grid-cols-1 gap-x-[3rem] gap-y-[1rem]">
      @foreach ($musicMediaItems as $mediaItem)
         <div class="flex items-center justify-center gap-2">
            <img class="w-[100px] h-[100px]" src="{{ asset($mediaItem->path) }}" onclick="showVideoModal('{{ asset($mediaItem->path) }}')"/>
            <x-Button classes="" href="{{ route('media.view', ['id' => $mediaItem->id]) }}" label="View" colour="red" />
            <x-Button classes="" href="{{ route('media.edit', ['id' => $mediaItem->id]) }}" label="Edit" colour="red" />
            <x-Button classes="" href="{{ route('media.delete', ['id' => $mediaItem->id]) }}" label="Delete" colour="red" />
         </div>
      @endforeach
   </div>

   <x-ImageModal />
   <x-VideoModal />
@endsection
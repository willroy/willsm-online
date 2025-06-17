<div class="my-4 grid xl:grid-cols-5 md:grid-cols-3 grid-cols-1 gap-2 items-center">
   @foreach ($images as $image)
        <div class="relative">
           <img src="{{ asset($image->path) }}" onclick="showModal('{{ asset($image->path) }}')"/>
           @if (Auth::check())
               <div class="absolute float-right top-0">
                  <x-Button href="{{ route('media.edit', ['id' => $image->id]) }}" label="Edit" classes="bg-white"/>
                  <x-Button href="{{ route('media.delete', ['id' => $image->id]) }}" label="Delete" classes="bg-white"/>
               </div>
           @endif
        </div>
   @endforeach
</div>
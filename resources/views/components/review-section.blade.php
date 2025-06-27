<div class="flex my-2 h-[40px]">
    @if( !is_null($img) && !($img == "") )<img src="{{ asset($img) }}" />@endif
    <button onclick="$('#review-{{ $handle }}').toggleClass('hidden')" class="button whitespace-nowrap px-2 ml-2">{{ $name }}</button>
    
</div>   
<p class="my-4 hidden" id="review-{{ $handle }}">
    {{ $desc }}
</p>
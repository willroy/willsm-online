<div class="animate-fadein opacity-0" style="animation-delay: {{ $delay }}">
  <div class="bg-gray-200 rounded-md overflow-hidden h-[345px]">
    <a href="{{ $href }}" class="flex h-full hover:animate-fadeout">
      <div class="m-auto">
        <h1 class="text-[{{ $fontsize }}] font-serif font-extrabold">{{ $label }}</h1>
      </div>
    </a>
    <a href="{{ $href }}" class="flex h-full relative -top-full opacity-0 hover:animate-fadein hover:bg-[url({{ $img }})] hover:bg-contain">
      <div class="m-auto">
        <h1 class="text-[{{ $fontsize }}] font-serif font-extrabold text-white">{{ $label }}</h1>
      </div>
    </a>
  </div>
</div>
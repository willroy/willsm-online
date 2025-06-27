<div class="sidebar mb-8 border md:min-w-48 p-2 md:justify-items-end md:min-w-48 flex flex-row md:flex-col flex-wrap">
  <x-Button label="Home" href="{{ route('main') }}" classes="{{ $page === 'home' ? 'button-selected' : '' }}" />
  <x-Button label="Blog" href="{{ route('blog') }}" classes="{{ $page === 'blog' ? 'button-selected' : '' }}" />
  <x-Button label="Videos" href="{{ route('media') }}" classes="{{ $page === 'music' ? 'button-selected' : '' }}" />
  <x-Button label="Art" href="{{ route('art') }}" classes="{{ $page === 'art' ? 'button-selected' : '' }}" />
  <x-Button label="Reviews" href="{{ route('reviews') }}" classes="{{ $page === 'reviews' ? 'button-selected' : '' }}" />
  <x-Button label="Places" href="{{ route('places') }}" classes="{{ $page === 'places' ? 'button-selected' : '' }}" />
  <x-Button label="Software" href="{{ route('software') }}" classes="{{ $page === 'software' ? 'button-selected' : '' }}" />
  <x-Button label="About" href="{{ route('about') }}" classes="{{ $page === 'about' ? 'button-selected' : '' }}" />

  @if (Auth::check())
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <div class="p-2">
        <button type="submit" class="border border-black border-solid p-2">Logout</button>
      </div>
    </form>
  @endif
</div>
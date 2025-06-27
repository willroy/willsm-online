<div class="sidebar mb-8 border border-solid border-black md:float-right md:justify-items-end md:min-w-48 flex flex-row md:flex-col flex-wrap">
  <x-Button label="Home" href="{{ route('main') }}"/>
  <x-Button label="Blog" href="{{ route('blog') }}"/>
  <x-Button label="Music" href="{{ route('music') }}"/>
  <x-Button label="Art" href="{{ route('art') }}"/>
  <x-Button label="About" href="{{ route('about') }}"/>
  <x-Button label="Software" href="{{ route('software') }}"/>

  @if (Auth::check())
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <div class="mt-2 mb-2 pl-2 pr-2">
        <button type="submit" class="border border-black border-solid p-2">Logout</button>
      </div>
    </form>
  @endif
</div>

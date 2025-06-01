<div class="border border-solid border-black">
  @if (Auth::check())
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <div class="mt-2 mb-2 pl-2">
        <button type="submit" class="border border-black border-solid p-2">Logout</button>
      </div>
    </form>
    <x-HomeSidebarButton label="Media" href="{{ route('media.index') }}"/>
  @endif

  @if(Request::url() != url('/') || Auth::check())
    <x-HomeSidebarButton label="Home" href="{{ route('main') }}"/>
  @endif

  <x-HomeSidebarButton label="Music" href="{{ url('/music') }}"/>
  <x-HomeSidebarButton label="Art" href="{{ url('/art') }}"/>
  <x-HomeSidebarButton label="About" href="{{ url('/about') }}"/>
  <x-HomeSidebarButton label="Software" href="{{ url('/software') }}"/>
</div>

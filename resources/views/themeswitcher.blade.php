<div class="sidebar 1border border-solid border-black md:float-right md:justify-items-end md:min-w-48 flex flex-row md:flex-col flex-wrap">
  <x-Button label="default_theme" href="#" onclick="switchTheme('default_theme')" />
  <x-Button label="pastel_theme" href="#" onclick="switchTheme('pastel_theme')" />

  @if (Auth::check())
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <div class="mt-2 mb-2 pl-2 pr-2">
        <button type="submit" class="border border-black border-solid p-2">Logout</button>
      </div>
    </form>
  @endif
</div>

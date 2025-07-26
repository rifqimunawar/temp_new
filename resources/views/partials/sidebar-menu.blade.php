<li class="menu-item">
  <a href="{{ $menu->url ?? '#' }}" class="menu-link">
    <span class="menu-icon"><i class="fa {{ $menu->icon }}"></i></span>
    <span class="menu-text">{{ $menu->title }}</span>
    @if (!empty($menu->children))
      <span class="menu-caret"><b class="caret"></b></span>
    @endif
  </a>

  @if (!empty($menu->children))
    <ul class="menu-submenu">
      @foreach ($menu->children as $child)
        @include('partials.sidebar-menu', ['menu' => $menu])
      @endforeach
    </ul>
  @endif
</li>

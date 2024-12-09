<li>
    <a href="{{ route($routeName) }}" class="block {{ request()->routeIs($routeName) ? 'link-active' : 'link' }}">{{ $label }}</a>
</li>
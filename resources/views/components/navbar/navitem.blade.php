<li class="nav-item">
    <a class="nav-link {{ Route::currentRouteNamed( $routeName ) ? 'active' : '' }}" href={{ route( $routeName ) }}> {{ $name }} </a>
</li>
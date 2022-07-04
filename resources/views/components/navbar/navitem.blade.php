<li class="nav-item">
    <a class="nav-link {{ Route::currentRouteNamed( $routeName ) ? 'active' : '' }}" href={{ route( $routeName ) }}> @lang($name) </a>
</li>
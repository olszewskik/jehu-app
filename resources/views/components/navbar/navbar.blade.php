<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">{{env('APP_NAME', 'Home')}}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <x-navbar.navitem name='content.users' routeName="users"/>
            <x-navbar.navitem name="content.groups" routeName="group.index"/>
            <x-navbar.navitem name="content.places" routeName="places.index"/>
            <x-navbar.navitem name="content.settings" routeName="general.edit"/>
          {{-- <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteNamed('users') ? 'active' : '' }}" href={{ route('users') }}>Users</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteNamed('group.index') ? 'active' : '' }}" href={{ route('group.index') }}>Groups</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteNamed('places.index') ? 'active' : '' }}" href={{ route('places.index') }}>Places</a>
          </li>  
          <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteNamed('general.edit') ? 'active' : '' }}" href={{ route('general.edit') }}>Settings</a>
          </li>   --}}
        </ul>
        <div class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
          @auth
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <span class="nav-link">Witaj {{auth()->user()->first_name}}</span>
            </li>
            <li class="nav-item">
              <form class="d-flex" method="POST" action="/logout">
                @csrf
                <button class="btn btn-outline-secondary" type="submit">
                  logout
                </button>
              </form>
            </li>
          </ul>
          @else
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <x-navbar.navitem name='content.register' routeName="register"/>
            <x-navbar.navitem name='content.login' routeName="login"/>
          </ul>
          @endauth
      </div>


      </div>
    </div>
  </nav>
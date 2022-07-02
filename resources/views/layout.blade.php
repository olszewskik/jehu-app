<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JehuApp</title>
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href={{ route('users') }}>Users</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href={{ route('group.index') }}>Groups</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href={{ route('places.index') }}>Places</a>
            </li>  
            <li class="nav-item">
              <a class="nav-link" href={{ route('general.edit') }}>Settings</a>
            </li>  
          </ul>
          <div class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
            @auth
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <span class="nav-link">Welcome {{auth()->user()->name}}</span>
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
            <li class="nav-item">
              <a class="nav-link" href='/register'>Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href='/login'>Login</a>
            </li>
            </ul>
            @endauth
        </div>


        </div>
      </div>
    </nav>

    <div class="container">
    @yield('content')
    </div>
    
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
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
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href='/manage/users'>Users</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href='/manage/groups'>Groups</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href='/manage/places'>Places</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href='/manage/trolleys'>Trolleys</a>
            </li>
          </ul>
          <div class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
              @auth
              <span>Welcome {{auth()->user()->name}}</span>
              <form method="POST" action="/logout">
                  @csrf
                  <button type="submit">
                      logout
                  </button>
              </form>
              @else
              <a class="nav-link" href='/register'>Register</a>
              <a class="nav-link" href='/login'>Login</a>
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
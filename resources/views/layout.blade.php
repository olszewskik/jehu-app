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
    <div class="container">
    <menu>
        <li><a href='/register'>Register</a></li>
        <li><a href='/settings/users'>Users</a></li>
        <li><a href='/settings/groups'>Groups</a></li>
        <li><a href='/settings/places'>Places</a></li>
        <li><a href='/settings/trolleys'>Trolleys</a></li>
    </menu>
    </div>
    
    @yield('content')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
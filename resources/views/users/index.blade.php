@extends('layout')

@section('content')

<h1>Users List</h1>
<table class="table table-hover">
    <tr>
        <th>Login</th>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>Email</th>
    </tr>
    @foreach ($usersList as $user)
    <tr>
        <td>{{$user['login']}}</td>
        <td>{{$user['name']}}</td>
        <td>{{$user['surname']}}</td>
        <td>{{$user['email']}}</td>
    </tr>    
    @endforeach
</table>

<div>
    {{$usersList->links()}}
</div>

<div>
    <a href="/register">
        <button>Add New User</button>
    </a>
</div>

@endsection

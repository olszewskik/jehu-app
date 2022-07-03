@extends('layout')

@section('content')

<div>
    <h3>Users List</h3>
    <hr>
    <div>
        <a href="/manage/groups/create">
            <button class="btn btn-primary btn-sm">+ New</button>
        </a>
    </div>
    <hr>
</div>

<div class="table-responsive">
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
</div>

<div>
    {{$usersList->links()}}
</div>

<div>
    <a href="/register">
        <button>Add New User</button>
    </a>
</div>

@endsection

@extends('layout')

@section('content')

<h1>Register new user</h1>

<form method="POST", action="/users">
    @csrf
    <div>
        <label for=login">Login</label>
        <input type="text" name="login" value="{{old('login')}}"/>
        @error('login')
            <p>{{$message}}</p>
        @enderror
    </div>
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" value="{{old('name')}}"/>
        @error('name')
            <p>{{$message}}</p>
        @enderror
    </div>
    <div>
        <label for="surname">Surname</label>
        <input type="text" name="surname" value="{{old('surname')}}"/>
        @error('surname')
            <p>{{$message}}</p>
        @enderror
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" value="{{old('email')}}"/>
        @error('email')
            <p>{{$message}}</p>
        @enderror
    </div>
    <div>
        <label for="password">Name</label>
        <input type="password" name="password" value="{{old('password')}}"/>
        @error('password')
            <p>{{$message}}</p>
        @enderror
    </div>

    <div>
        <input type="submit" value="Submit">
    </div>
</form>

@endsection

@extends('layout')

@section('content')

<h1>Login user</h1>

<form method="POST", action="/users/authenticate">
    @csrf
    <div>
        <label for=login">Login</label>
        <input type="text" name="login" value="{{old('login')}}"/>
        @error('login')
            <p>{{$message}}</p>
        @enderror
    </div>
    <div>
        <label for="password">Password</label>
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

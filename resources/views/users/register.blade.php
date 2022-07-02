@extends('layout')

@section('content')

<div class="container">
    <div class="card mb-3">
        <h4 class="card-header">Register new user</h4>
        <div class="card-body">
            <form method="POST", action="/users">
                @csrf
                <div class="mb-3">
                    <label for=login" class="form-label">Login</label>
                    <input type="text" class="form-control" name="login" value="{{old('login')}}"/>
                    @error('login')
                        <p>{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" value="{{old('name')}}"/>
                    @error('name')
                        <p>{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="surname" class="form-label">Surname</label>
                    <input type="text" class="form-control" name="surname" value="{{old('surname')}}"/>
                    @error('surname')
                        <p>{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="{{old('email')}}"/>
                    @error('email')
                        <p>{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" value="{{old('password')}}"/>
                    @error('password')
                        <p>{{$message}}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>

@endsection

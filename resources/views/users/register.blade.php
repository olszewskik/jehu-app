@extends('layout')

@section('content')

<div class="container">
    <div class="card mb-3">
        <h4 class="card-header">Register new user</h4>
        <div class="card-body">
            <form method="POST", action="/users">
                @csrf
                <div class="mb-3">
                    <label for=name" class="form-label">Login</label>
                    <input type="text" class="form-control" name="name" value="{{old('name')}}"/>
                    @error('name')
                        <p>{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="first_name" class="form-label">Firstname</label>
                    <input type="text" class="form-control" name="first_name" value="{{old('first_name')}}"/>
                    @error('first_name')
                        <p>{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="last_name" class="form-label">Lastname</label>
                    <input type="text" class="form-control" name="last_name" value="{{old('last_name')}}"/>
                    @error('last_name')
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
                    <label for="phone" class="form-label">Phone No.</label>
                    <input type="number" class="form-control" name="phone" value="{{old('phone')}}"/>
                    @error('phone')
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

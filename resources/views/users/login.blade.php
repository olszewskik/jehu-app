@extends('layout')

@section('content')

<div class="container">
    <div class="card">
        <h4 class="card-header">Login user</h4>
        <div class="card-body">
            <form method="POST" action="/users/authenticate">
                @csrf
                <div class="mb-3">
                    <label for=login" class="form-label">Login</label>
                    <input type="text" class="form-control" name="login" value="{{old('login')}}"/>
                    @error('login')
                    <div class="alert alert-danger" role="alert">
                        s{{$message}}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" value="{{old('password')}}"/>
                    @error('password')
                        <p>{{$message}}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>

@endsection

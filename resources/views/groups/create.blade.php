@extends('layout')

@section('content')

<form method="POST", action="/settings/groups">
    @csrf
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" />
        @error('name')
            <p>{{$message}}</p>
        @enderror
    </div>
    <div>
        <input type="submit" value="Submit">
    </div>
</form>

@endsection
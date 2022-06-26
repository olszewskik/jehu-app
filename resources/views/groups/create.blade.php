@extends('layout')

@section('content')

<form method="POST", action="/settings/groups">
    @csrf
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" value="{{old('name')}}"/>
        @error('name')
            {{$message}}
        @enderror
    </div>
    <div class="form-check form-switch">
        <label for="blocked">Blocked</label>
        <input class="form-check-input" type="checkbox" role="switch" blocked" value="1"/>
    </div>
    <div>
        <input type="submit" value="Submit">
    </div>
</form>

@endsection
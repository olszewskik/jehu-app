@extends('layout')

@section('content')

<form method="POST", action="/settings/groups">
    @csrf
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" />
    </div>
    <div>
        <label for="blocked">Blocked</label>
        <input type="checkbox" name="blocked" />
    </div>
    <div>
        <input type="submit" value="Submit">
    </div>
</form>

@endsection
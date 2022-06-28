@extends('layout')

@section('content')

<form method="POST", action="/manage/groups/{{$group->id}}">
    @csrf
    @method('PUT')
    <div>
        <label for="name">@lang('content.name')</label>
        <input type="text" name="name" value="{{$group->name}}"/>
        @error('name')
            <p>{{$message}}</p>
        @enderror
    </div>
    <div>
        <label for="blocked">@lang('content.blocked')</label>
        <input type="checkbox" name="blocked" value="1" 
        @if ($group->blocked)
            checked    
        @endif/>
    </div>
    <div>
        <button>Save</button>
    </div>
</form>

@endsection
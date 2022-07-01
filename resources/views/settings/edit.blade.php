@extends('layout')

@section('content')

@foreach ($settings as $setting)
<form method="POST", action="{{ route('general.update') }}">
    @csrf
    @method('PUT')
    <div>
        <label for="name_congregation">Nazwa zboru</label>
        <input type="text" name="name_congregation" value="{{$setting['name_congregation']}}"/>
        @error('name_congregation')
            <p>{{$message}}</p>
        @enderror
    </div>
    <div>
        <button>Save</button>
    </div>
</form>
@endforeach

@endsection
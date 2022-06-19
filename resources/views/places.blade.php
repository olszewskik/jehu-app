@extends('layout')

@section('content')

<h1>{{$heading}}</h1>
@foreach ($placesList as $place)
<li>
    {{$place['id']}} {{$place['name']}}
</li>    
@endforeach
@endsection
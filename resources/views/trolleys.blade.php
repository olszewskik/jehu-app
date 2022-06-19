@extends('layout')

@section('content')

<h1>{{$heading}}</h1>
@foreach ($trolleysList as $trolley)
<li>
    {{$trolley['id']}} {{$trolley['name']}}
</li>    
@endforeach
@endsection
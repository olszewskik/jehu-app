@extends('layout')

@section('content')

<h1>{{$heading}}</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Blocked</th>
    </tr>
    @foreach ($groupsList as $group)
    <tr>
        <td>{{$group['id']}}</td> 
        <td>{{$group['name']}}</td>
        <td>{{$group['blocked']}}</td>
    </tr>    
    @endforeach
</table>

@endsection

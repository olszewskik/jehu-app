@extends('layout')

@section('content')

<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Blocked</th>
    </tr>
    <tr>
        <td>{{$group['id']}}</td> 
        <td>{{$group['name']}}</td>
        <td>{{$group['blocked']}}</td>
        <td>
            <a href="/settings/groups/{{$group->id}}/edit">Edit</a>
        </td>
    </tr>    
</table>

@endsection
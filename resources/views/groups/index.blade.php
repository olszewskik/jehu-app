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
        <td><a href='/settings/groups/{{$group->id}}'>{{$group['id']}}</a></td> 
        <td>{{$group['name']}}</td>
        <td>{{$group['blocked']}}</td>
    </tr>    
    @endforeach
</table>

<div>
    {{$groupsList->links()}}
</div>

<div>
    <a href="/settings/groups/create">
        <button>Add New Group</button>
    </a>
</div>

@endsection

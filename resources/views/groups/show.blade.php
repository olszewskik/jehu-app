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
            <a href="/manage/groups/{{$group->id}}/edit">Edit</a>
        </td>
        <td>
            <form method="POST" action="/manage/groups/{{$group->id}}">
                @csrf
                @method('DELETE')
                <button>Delete</button>
            </form>
        </td>
    </tr>    
</table>

@endsection
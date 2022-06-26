@extends('layout')

@section('content')

<h1>Groups List</h1>
<table class="table table-hover">
    <tr>
        <th>Id</th>
        <th>@lang('content.name')</th>
        <th>@lang('content.blocked')</th>
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

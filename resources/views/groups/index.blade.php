@extends('layout')

@section('content')

<h1>Groups List</h1>
<table class="table table-hover">
    <tr>
        <th>@lang('content.name')</th>
        <th>@lang('content.blocked')</th>
        <th></th>
    </tr>
    @foreach ($groupsList as $group)
    <tr>
        <td>{{$group['name']}}</td>
        <td>{{$group['blocked']}}</td>
        <td>
            <div class="btn-group">
                <button type="button" class="btn btn-light btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/manage/groups/{{$group->id}}">@lang('content.details')</a></li>
                  <li><a class="dropdown-item" href="/manage/groups/{{$group->id}}/edit">@lang('content.edit')</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">@lang('content.remove')</a></li>
                </ul>
              </div>
        </td>
    </tr>    
    @endforeach
</table>

<div>
    {{$groupsList->links()}}
</div>

<div>
    <a href="/manage/groups/create">
        <button>Add New Group</button>
    </a>
</div>

@endsection

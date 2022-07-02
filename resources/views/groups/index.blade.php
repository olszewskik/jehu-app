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
        <td><input class="form-check-input" type="checkbox" value="" disabled 
            @if ($group['blocked'])
                checked>
            @endif 
        </td>
        <td>
            <div class="btn-group">
                <button type="button" class="btn btn-light btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href={{ route('group.show', ['group' => $group->id]) }}>@lang('content.details')</a></li>  
                  <li><a class="dropdown-item" href="/manage/groups/{{$group->id}}/edit">@lang('content.edit')</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                    <form method="POST" action="/manage/groups/{{$group->id}}">
                        @csrf
                        @method('DELETE')
                        <button class="dropdown-item">@lang('content.remove')</button>
                    </form>
                </li>
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
        <button class="btn btn-primary btn-sm">Add New Group</button>
    </a>
</div>

@endsection
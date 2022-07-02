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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal-{{$group->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Uwaga</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Czy na pewno chcesz usunąć wybraną grupę? {{$group->name}}
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <form method="POST" action="/manage/groups/{{$group->id}}">
                @csrf
                @method('DELETE')
            <button class="btn btn-primary">Save changes</button>
            </form>
            </div>
        </div>
        </div>
    </div>

    <tr @if ($group['blocked'])
        class="table-danger"
    @endif>
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
                  <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$group->id}}">@lang('content.remove')</button></li>
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
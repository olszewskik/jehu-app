@extends('layout')

@section('content')

<h3>Groups List</h3>
<hr>
<div>
    <a href="/manage/groups/create">
        <button class="btn btn-primary btn-sm">+ New</button>
    </a>
</div>
<hr>

<table class="table table-hover">
        <tr>
            <th>@lang('content.name')</th>
            <th>Nadzorca grupy</th>
            <th>@lang('content.blocked')</th>
            <th></th>
        </tr>
    @foreach ($groupsList as $group)

    <x-modal.remove-element :idItemToRemove="$group->id" :nameItemToRemove="$group->name"/>

    <tr @if ($group['blocked'])
        class="text-black-50"
    @endif>
        <td>{{$group['name']}}</td>
        <td></td>
        <td><input class="form-check-input" type="checkbox" value="" disabled 
            @if ($group['blocked'])
                checked>
            @endif 
        </td>
        <td>
            <div class="btn-group">
                <button type="button" class="btn btn-light btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href={{ route('group.show', ['group' => $group->id]) }}>@lang('content.details')</a></li>  
                  <li><a class="dropdown-item" href="/manage/groups/{{$group->id}}/edit">@lang('content.edit')</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#removeModal-{{$group->id}}">@lang('content.remove')</button></li>
                </ul>
              </div>
        </td>
    </tr>    
    @endforeach
</table>

<div>
    {{$groupsList->links()}}
</div>


@endsection
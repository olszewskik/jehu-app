@props(['head' => $headerNameArray])

<table class="table table-hover">
    <x-table.table-header :headerNameArray="$headerNameArray" :showActions=$showActions/>
    <x-table.table-body :head="$head"/>

{{-- @foreach ($groupsList as $group)

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
@endforeach --}}
</table>
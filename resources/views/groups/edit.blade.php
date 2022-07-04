@extends('layout')

@section('content')


<!-- Modal -->
<div class="modal fade" id="removeModal-{{$group->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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



<h3>EDIT: {{$group['name']}}</h3>
<nav class="navbar-expand">
    <hr>
    <ul class="nav">
        <li class="nav-item"><a class="nav-link" href="/manage/groups/{{$group->id}}/edit">Show</a></li>
        <li class="nav-item"><button class="nav-link btn btn-link" data-bs-toggle="modal" data-bs-target="#removeModal-{{$group->id}}">@lang('content.remove')</button></li>
    </ul>
    <hr>
</nav>


<div class="accordion" id="accordion">
    <div class="accordion-item">
        <h5 class="accordion-header" id="general">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseGeneral" aria-expanded="true" aria-controls="collapseGeneral">
                Ogólne
            </button>
        </h5>
        <div id="collapseGeneral" class="accordion-collapse collapse show" aria-labelledby="general" data-bs-parent="#accordion">
            <div class="accordion-body">        

                <form class="row g-3" method="POST" action="/manage/groups/{{$group->id}}">
                    @csrf
                    @method('PUT')
                    <div class="col-md-6">
                      <label for="id" class="form-label">Id</label>
                      <input type="text" class="form-control" id="id" value="{{$group['id']}}" disabled>
                    </div>
                    <div class="col-md-6">
                      <label for="name" class="form-label">Nazwa</label>
                      <input type="text" class="form-control" id="name" name="name" value="{{$group['name']}}">
                        @error('name')
                            <p>{{$message}}</p>
                        @enderror
                    </div>
                    <div class="col-md-6">
                      <label for="overseer" class="form-label">Nadzorca grupy</label>
                      <select id="overseer" class="form-select">
                        <option selected></option>
                        @foreach ($users as $user)
                        <option value={{$user->id}}>{{$user->last_name}} {{$user->first_name}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label for="deputyOverseer" class="form-label">Zastępca</label>
                      <input type="text" class="form-control" id="deputyOverseer">
                    </div>
                     <div class="col-12">
                      <div class="form-check form-switch">
                        <label class="form-check-label" for="blocked">Zablokowane</label>
                        <input class="form-check-input" type="checkbox" id="blocked" name="blocked" value="1"
                            @if ($group['blocked'])
                                checked>
                            @endif
                      </div>
                     </div>
                     <div class="col-12">
                        <button type="submit" class="btn btn-primary">Save</button>
                      </div>
                  </form>


            </div>
        </div>
    </div>
</div>


@endsection
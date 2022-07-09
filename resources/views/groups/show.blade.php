@extends('layout')

@section('content')


<x-modal.remove-element :idItemToRemove="$group->id" :nameItemToRemove="$group->name"/>

<h3>{{$group['name']}}</h3>
<nav class="navbar-expand">
    <hr>
    <ul class="nav">
        <li class="nav-item"><a class="nav-link" href="/manage/groups/{{$group->id}}/edit">Edit</a></li>
        <li class="nav-item"><button class="nav-link btn btn-link" data-bs-toggle="modal" data-bs-target="#removeModal-{{$group->id}}">@lang('content.remove')</button></li>
    </ul>
    <hr>
</nav>


<div class="accordion" id="accordion">
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                Ogólne
            </button>
        </h2>
        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
            <div class="accordion-body">
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="id" class="form-label">Id</label>
                        <input type="text" class="form-control" id="id" value="{{$group['id']}}" disabled>
                    </div>
                    <div class="col-md-6">
                        <label for="name" class="form-label">Nazwa</label>
                        <input type="text" class="form-control" id="name" value="{{$group['name']}}" disabled>
                    </div>
                    <div class="col-md-6">
                        <label for="overseer" class="form-label">Nadzorca grupy</label>
                        <input type="text" class="form-control" id="overseer" disabled>
                    </div>
                    <div class="col-md-6">
                        <label for="deputyOverseer" class="form-label">Zastępca</label>
                        <input type="text" class="form-control" id="deputyOverseer" disabled>
                    </div>
                    <div class="col-12">
                        <div class="form-check form-switch">
                            <label class="form-check-label" for="blocked">Zablokowane</label>
                            <input class="form-check-input" type="checkbox" id="blocked" disabled
                                @if ($group['blocked'])
                                    checked
                                @endif>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true" aria-controls="panelsStayOpen-collapseTwo">
                Członkowie
            </button>
        </h2>
        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingTwo">
            <div class="accordion-body">
                <p>Kamil Olszewski</p>
                <p>Karolina Olszewska</p>
            </div>
        </div>
    </div>
</div>


@endsection

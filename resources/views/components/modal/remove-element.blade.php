<div class="modal fade" id="removeModal-{{$idItemToRemove}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Remove {{$nameItemToRemove}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Czy na pewno chcesz usunąć {{$nameItemToRemove}}?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <form method="POST" action="/manage/groups/{{$idItemToRemove}}">
                    @csrf
                    @method('DELETE')
                <button class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
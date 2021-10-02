<form action="{{route('users.destroy' $user->id)}}" method="POST" enctype="multipart/form-data">
{{@method_field('delete')}}
{{ csrf_field() }}

<div class="modal fade" id="ModalDelete{{$user->id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                    <h4 class="modal-title"> {{'User Delete'}} </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>

                    </button>
            </div>

            <div class="modal body"> You sure you want to delete <b> {{user->id}}</b>?</div>
                <div class="modal-footer">
                    <button type="button" class="btn gray btn-outline-secondary" data-dismiss="modal">{{__('cancel')}}</button>
                    <button type="button" class="btn gray btn-outline-danger" >{{__('delete')}}</button>
        </div>



    </div>


</div>

</form>

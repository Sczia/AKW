<div class="modal" id="cancel{{ $appointment->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">

                <h5 class="modal-title text-light font-weight-bold">WARNING!</h5>
                <button type="button" class="close"  data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <p> This request will be deleted.</p>
            

             <form action="{{ route('pending.destroy',$appointment->id ) }}" method="POST">
                    @csrf
                    @method('delete')
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" >YES</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>

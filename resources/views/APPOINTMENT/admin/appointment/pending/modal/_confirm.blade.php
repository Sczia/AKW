<div class="modal" id="confirm{{ $appointment->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">

                <h5 class="modal-title text-light font-weight-bold">INFORMATION</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <h5 class="text-left">Name: {{ $appointment->name}}  </h5>
                <h5 class="text-left">Email: {{ $appointment->email}}  </h5>

                <form action="{{ route('confirm.store',$appointment->id) }}" method="GET">
                    @csrf

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">YES</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">NO</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

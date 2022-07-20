<div class="modal" id="edit{{ $manage->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content text-start">
            <div class="modal-heade bg-info">

                <h5 class="modal-title  text-light font-weight-bold ">INFORMATION</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <p> You are now able to edit the title and the Logo</p>

                <form action="{{ route('manage.update', $manage->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    @if ($manage->id == 1)
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Title"
                                value="{{ $manage->title }}">
                        </div>
                    @endif

                    @if ($manage->id == 2)
                        <div class="form-group">
                            <label for="file">Logo</label>
                            <input type="file" name="file" class="form-control" id="file" placeholder="file">
                        </div>
                    @endif


                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Save changes</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                </form>

            </div>



        </div>
    </div>
</div>

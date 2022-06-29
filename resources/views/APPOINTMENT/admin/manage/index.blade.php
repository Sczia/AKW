
@extends('APPOINTMENT.admin.index')
@section('page-title')
Manage Homepage
@endsection

@section('contents')
<div class="row shadow align-items-center mb-3">
    <div class="col">
        <h1 class="h3 text-gray-800 m-0 py-3">@yield('page-title')</h1>
    </div>
</div>
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="contact">
                    <thead class="table-danger text-black">
                        <tr>
                            <th>Name</th>
                            <th>Action</th>

                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($manages as $manage)

                            <tr>
                                <td>{{ $manage->title }} </td>



                               <td class="text-center">
                                    <a class="btn btn-outline-primary " href="" data-toggle="modal"
                                        data-target="#edit{{ $manage->id }}">edit</a>
                                    @include('APPOINTMENT.admin.manage.modal._edit')
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection

@section('page-level-javascript')
    <script>
        $(document).ready(function() {
            $('#contact').DataTable();
        });
    </script>
@endsection

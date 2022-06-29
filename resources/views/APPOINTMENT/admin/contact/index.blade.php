
@extends('APPOINTMENT.admin.index')
@section('page-title')
Messages
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
                    <thead class="table-warning text-black">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>

                            <th>More Info</th>
                            <th>Action</th>

                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($contact as $contact)

                            <tr>
                                <td>{{ $contact->name }} </td>
                                <td>{{ $contact->email }}</td>


                               <td class="text-center">
                                    <a class="btn btn-outline-primary " href="" data-toggle="modal"
                                        data-target="#view{{ $contact->id }}">view</a>
                                    @include('APPOINTMENT.admin.contact.modal._show')
                                </td>


                                <td class="d-flex justify-content-center align-items-center">
                                    <a class="btn btn-outline-danger " href="" data-toggle="modal"
                                        data-target="#delete{{ $contact->id }}"> delete</a>
                                    @include('APPOINTMENT.admin.contact.modal._delete')
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

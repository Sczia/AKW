@extends('APPOINTMENT.admin.index')

@section('page-title')
    Request Appointments
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
                <table class="table table-bordered table-hover" id="pending">
                    <thead class="table-primary text-black">
                        <tr>

                            <th>Name</th>
                            <th>Conatct number</th>
                            <th>Address</th>
                            <th>More Info</th>
                            <th>Action</th>

                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($appointments as $appointment)
                            <tr>
                                <td>{{ $appointment->name }}
                                <td>{{ $appointment->phone_number }}</td>
                                <td>{{ $appointment->address }}</td>



                                <td class="text-center  ">
                                    <a class="btn btn-outline-primary " href="" data-toggle="modal"
                                        data-target="#show{{ $appointment->id }}">view</a>
                                    @include('APPOINTMENT.admin.appointment.pending.modal._show')
                                </td>
                                <td class=" text-center ">
                                    <a class="btn btn-outline-success" href="" data-toggle="modal"
                                        data-target="#confirm{{ $appointment->id }}">accept</a>
                                    @include('APPOINTMENT.admin.appointment.pending.modal._confirm')

                                    <a class="btn btn-outline-danger" href="" data-toggle="modal"
                                        data-target="#cancel{{ $appointment->id }}">cancel</a>
                                    @include('APPOINTMENT.admin.appointment.pending.modal._cancel')
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
            $('#pending').DataTable(
                'odering': false
            );
        });
    </script>
@endsection

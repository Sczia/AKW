@extends('APPOINTMENT.admin.index')
@section('page-title')
    Approved Appointments
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
                <table class="table table-bordered table-hover" id="confirm">
                    <thead class="table-success text-black">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Conatct number</th>
                            <th>Address</th>
                            <th>Message</th>
                         <th>More Info</th>


                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($appointments as $appointment)
                            <tr>
                                <td>{{ $appointment->name }}
                                <td>{{ $appointment->email }}</td>
                                <td>{{ $appointment->phone_number }}</td>
                                <td>{{ $appointment->address }}</td>
                                <td>{{ $appointment->message }}</td>


                        <td class="text-center  ">
                                    <a class="btn btn-outline-primary" href="" data-toggle="modal"
                                        data-target="#show{{ $appointment->id }}">view</a>
                                    @include('APPOINTMENT.admin.appointment.confirm.modal._show')
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
            $('#confirm').DataTable(
                'odering': false
            );
        });
    </script>
@endsection

<div class="modal fade" id="show{{ $appointment->id }}" tabindex="-1" role="dialog"
    aria-labelledby="examplModallongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role document="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title  text-light font-weight-bold" id="exampleModalLongtitle"> Confirm
                    Appointments</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>



            <div class="modal-body">
                <table class="table table-hover">
                    <thead>
                      <tr>

                       <h3 class="modal-title text-dark font-weight-bold">INFORMATION</h3>


                      </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td class="text-left">Name:</td>
                            <td class="text-left">{{ $appointment->name }}</td>
                          </tr>

                          <tr>
                            <td class="text-left">Email:</td>
                            <td class="text-left">{{ $appointment->email }}</td>
                          </tr>

                          <tr>
                            <td class="text-left">Contact number:</td>
                            <td class="text-left">{{ $appointment->phone_number}}</td>
                          </tr>

                          <tr>
                            <td class="text-left">Address:</td>
                            <td class="text-left">{{ $appointment->address }}</td>
                          </tr>

                          <tr>
                            <td class="text-left">Message:</td>
                            <td class="text-left">{{ $appointment->message}}</td>
                          </tr>
                    </tbody>

                  </table>


            </div>

            <div class=="modal-footer">

            </div>
        </div>

    </div>
</div>

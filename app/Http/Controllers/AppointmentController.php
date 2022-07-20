<?php

namespace App\Http\Controllers;

use App\Mail\cancel;
use App\Mail\MailController;
use App\Mail\TestMail;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments = Appointment::where('status', 0)->get();
        return view('APPOINTMENT.admin.appointment.pending.index', compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Appointment::create(
            $request->all()
        );
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        try {
            $appointment = Appointment::where('id', $id)->first();
            $details= [
                'name' => $appointment->name,
                'date' => $appointment->date,
                'time' => $appointment->time,
                'email' =>  $appointment->email,
                'number' => $appointment->phone_number,
                'address' => $appointment->address,
            ];
            $data = [

                'api_key' => "2BWiJ9Bke4zGymsjOTS5CaebKki",
                'api_secret' => "x52BicQo6crbVYufk509UcgxyrfBFJsPoFyxY0kF",
                'text' => "Hello! I would like to say that your Request Appointment has been cancel, kindly check our website for more schedule Thank you",
                'to' =>   "63" . Str::substr($appointment->phone_number, 1, 10), // replace with mobile number ng sesendan
                'from' => "MOVIDER"
            ];
            $response = Http::asForm()->post('https://api.movider.co/v1/sms', $data);
          Mail::to($appointment->email)->send(new cancel($details));
          $appointment->delete();
            toast()->warning('Warning', 'You deleted the request')->autoClose(3000)->animation('animate__fadeInRight', 'animate__fadeOutRight')->width('400px');
            return back();
        } catch (\Throwable $th) {
            toast()->warning('Warning', $th->getMessage())->autoClose(3000)->animation('animate__fadeInRight', 'animate__fadeOutRight')->width('400px');
            return redirect()->route('pending.index');
        }
    }
}

/* swal({
    title: "Are you sure?",
    text: "You will not be able to recover this imaginary file!",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Yes, delete it!",
    closeOnConfirm: false
  },


  function(){
    swal("Deleted!", "Your imaginary file has been deleted.", "success");
  }); */

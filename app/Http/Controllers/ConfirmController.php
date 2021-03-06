<?php

namespace App\Http\Controllers;

use App\Mail\MailController;
use RealRashid\SweetAlert\Facades\Alert;
use App\Mail\TestMail;
use App\Models\Appointment;
use App\Models\Confirm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class ConfirmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments = Appointment::where('status', 1)->get();
        return view('APPOINTMENT.admin.appointment.confirm.index', compact('appointments'));
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
    public function store($id)
    {
        try {

            $appointment = Appointment::where('id', $id)->first();
            $appointment->status = 1;
            $appointment->save();
            $details = [
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
                'text' => "Hello! Congratulations your Request Appointment has been approved. ",
                'to' =>   "63" . Str::substr($appointment->phone_number, 1, 10), // replace with mobile number ng sesendan
                'from' => "MOVIDER"
            ];


            $response = Http::asForm()->post('https://api.movider.co/v1/sms', $data);

           Mail::to($appointment->email)->send(new MailController($details));

            toast()->success('Success', 'You confirmed the request')->autoClose(3000)->animation('animate__fadeInRight', 'animate__fadeOutRight')->width('400px');
            return redirect()->route('confirm.index');
        } catch (\Throwable $th) {
            toast()->warning('Warning', $th->getMessage())->autoClose(3000)->animation('animate__fadeInRight', 'animate__fadeOutRight')->width('400px');
            return redirect()->back();
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Confirm  $confirm
     * @return \Illuminate\Http\Response
     */
    public function show(Confirm $confirm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Confirm  $confirm
     * @return \Illuminate\Http\Response
     */
    public function edit(Confirm $confirm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Confirm  $confirm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Confirm $confirm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Confirm  $confirm
     * @return \Illuminate\Http\Response
     */
    public function destroy(Confirm $confirm)
    {
        //
    }
}

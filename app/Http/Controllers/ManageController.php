<?php

namespace App\Http\Controllers;

use App\Models\Manage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ManageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manages = Manage::all();
        return view('APPOINTMENT.admin.manage.index', compact('manages'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Manage  $manage
     * @return \Illuminate\Http\Response
     */
    public function show(Manage $manage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Manage  $manage
     * @return \Illuminate\Http\Response
     */
    public function edit(Manage $manage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Manage  $manage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
       /*  dd($request->file('file')->store('img')); */
if ($request->has('title')) {
    $manage = Manage::Find($id);
    $manage->title=$request->title;
    $manage->save();

}
if ($request->has('file')) {

$file = $request->file('file');
    $path="img";

    $fileName = 'logo-logo-removebg-preview';
    if (!file_exists(storage_path($path.'/'.$fileName.'.png'))) {
        Storage::delete(storage_path($path.'/'.$fileName.'.png'));
    }
    $file->storeAs($path, $fileName.'.png');

}






            toast()->success('Success', 'You saved changes')->autoClose(3000)->animation('animate__fadeInRight', 'animate__fadeOutRight')->width('400px');

            return redirect()->back();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Manage  $manage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manage $manage)
    {
        //
    }
}

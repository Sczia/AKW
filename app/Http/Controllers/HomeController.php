<?php

namespace App\Http\Controllers;

use App\Models\Manage;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function landing (){
        $title=Manage::where('type','=',0)->first();
        $logo=Manage::where('type','=',1)->first();
        return view ('APPOINTMENT.homecontents.landing', compact('title','logo'));
      }

      public function appointment (){
        $title=Manage::where('type','=',0)->first();
        $logo=Manage::where('type','=',1)->first();
        return view ('APPOINTMENT.homecontents.appointment', compact('title','logo'));
      }


      public function contactus (){
        $title=Manage::where('type','=',0)->first();
        $logo=Manage::where('type','=',1)->first();
        return view ('APPOINTMENT.homecontents.contactus', compact('title','logo'));
      }

      public function login(){
        $title=Manage::where('type','=',0)->first();
        $logo=Manage::where('type','=',1)->first();
        return view ('APPOINTMENT.homecontents.login', compact('title','logo'));
      }

      public function register(){
        $title=Manage::where('type','=',0)->first();
        $logo=Manage::where('type','=',1)->first();
        return view ('APPOINTMENT.homecontents.register', compact('title','logo'));
      }
}

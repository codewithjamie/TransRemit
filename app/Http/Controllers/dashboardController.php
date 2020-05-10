<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index(){
       return view('dashboard');
    }
    public function admin(){
      return view('/dashboard/admin');
    }
    public function agent(){
      return view('/dashboard/agent');
    }

    public function ga(){
      return view('/dashboard/ga');
    }

    // settings naviagtion
    public function reportLink(){
        return view('dashboard.settings.report');
    }
    public function profileLink(){
        return view('dashboard.settings.profile');
    }


}

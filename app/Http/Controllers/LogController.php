<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\log;


class LogController extends Controller
{
    public function index()
    {
      $temp_historical_logs = log::paginate('10');

      return view('dashboard.settings.logs', compact('temp_historical_logs'));
    }
}

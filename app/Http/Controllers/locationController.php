<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class locationController extends Controller
{
  public function index()
  {
      $countries = DB::table("countries")->pluck("name","id");
      return view('pages.riders.riders',compact('countries'));
  }

  public function getStateList(Request $request)
  {
      $states = DB::table("states")
      ->where("country_id",$request->country_id)
      ->pluck("name");
      return response()->json($states);
  }

  public function getCityList(Request $request)
  {
      $cities = DB::table("cities")
      ->where("state_id",$request->state_id)
      ->pluck("name");
      return response()->json($cities);
  }
}

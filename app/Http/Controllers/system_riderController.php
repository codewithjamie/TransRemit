<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\system_book_rider;
use DB;

class system_riderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $riders = system_book_rider::paginate('10');

        return view('dashboard.riders.all-riders', compact('riders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.riders.add-rider');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

        $uid = substr(str_shuffle($permitted_chars), 0, 10);
        // $imagePath = request('image')->store('uploads', 'public');
        // $qr_code = request('qr_code')->store('uploads', 'public');


        system_book_rider::create([
          'name' => $request->name,
          'phone' => $request->phone,
          'email' => $request->email,
          'nationality' => $request->nationality,
          'state' => $request->state,
          'city' => $request->city,
          'id_type' => $request->id_type,
          'id_number' => $request->id_number,
          'keke_number' => $request->keke_number,
          'union' => $request->union,
          'branch' => $request->branch,
          'address' => $request->address,
          'rider_uid' => $uid,
          // 'image' => $imagePath,
          // 'qr_code' => $qr_code,
        ]);
        return redirect('/dashboard/all-riders')->with('message', 'Great! You have successfully created a new agent');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $where = array('id' => $id);
      $riders  = system_book_rider::where($where)->first();

      return view('dashboard.riders.edit-rider', compact('riders'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $riders = system_book_rider::findOrFail($id);

         $input = $request->all();

         $riders->fill($input)->save();

         return redirect('/dashboard/all-riders')->with('message', 'Great! You have successfully updated a record');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
   {
       $riders = system_book_rider::where('id', $id)->delete();

       return redirect('/dashboard/all-riders')->with('info', 'Great! You have successfully deleted a rider');
   }

}

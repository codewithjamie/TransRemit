<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\union;

class unionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $unions = union::orderBy('id')->paginate(5);

      return view('dashboard.union.unions', compact('unions'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      union::updateOrCreate(
          ['name' => $request->name],
          ['status' => $request->status]
      );
      return redirect('dashboard/unions')->with('message', 'Great! You have successfully created a union');
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
      $unions  = union::where($where)->first();

      return view('dashboard.union.edit-union', compact('unions'));
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
         $unions = union::findOrFail($id);

         $input = $request->all();

         $unions->fill($input)->save();

         return redirect('dashboard/unions')->with('message', 'Great! You have successfully updated the union');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $unions = union::where('id',$id)->delete();

       return redirect('dashboard/unions')->with('message', 'Great! You have successfully deleted a union');
    }
}

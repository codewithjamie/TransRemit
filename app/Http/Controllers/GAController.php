<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ga;
use DB;

class GAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gas = ga::where('status', 'Active')->paginate('10');

        return view('dashboard.ga.all-gas', compact('gas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'userid' => '2',
            'userip' => \Request::ip(),
            'password' => '$2y$10$xfqnezqDlXR8LywYoggvsulB9jL8LQQAjVHI.gZm7PP7AAJVZq1ta',
        ]);

        ga::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'status' => $request->status,
        ]);
        return redirect('/dashboard/all-gas')->with('message', 'Great! You have successfully created a new Govt Agent');
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
      $gas  = ga::where($where)->first();

      return view('dashboard.ga.edit-ga', compact('gas'));
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
        $gas = ga::findOrFail($id);

        $data = DB::table('users')
               ->where('id', DB::table('users')->pluck('id'))
               ->update([
                   'name' => $request->name,
                   'userid' => '2',
                   'password' => '$2y$10$xfqnezqDlXR8LywYoggvsulB9jL8LQQAjVHI.gZm7PP7AAJVZq1ta',
               ]);


         $input = $request->all();

         $gas->fill($input)->save();

         return redirect('/dashboard/all-gas')->with('message', 'Great! You have successfully updated a record');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $gas = ga::where('id',$id)->delete();

      return redirect('/dashboard/all-gas')->with('message', 'Great! You have successfully deleted an Agent');
    }
}

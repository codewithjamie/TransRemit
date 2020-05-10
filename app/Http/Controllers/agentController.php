<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\agent;
use DB;

class agentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agents = agent::where('status', 'Active')->paginate('10');

        return view('dashboard.agents.agents', compact('agents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.agents.add-agent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imagePath = request('image')->store('uploads', 'public');

        $data = DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'userid' => '1',
            'userip' => \Request::ip(),
            'password' => '$2y$10$xfqnezqDlXR8LywYoggvsulB9jL8LQQAjVHI.gZm7PP7AAJVZq1ta',
        ]);

        agent::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'branch' => $request->branch,
            'address' => $request->address,
            'image' => $imagePath,
            'status' => $request->status,
        ]);
        return redirect('/dashboard/agents')->with('message', 'Great! You have successfully created a new agent');
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
      $agents  = agent::where($where)->first();

      return view('dashboard.agents.edit-agent', compact('agents'));
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
          $agents = agent::findOrFail($id);


         $data = DB::table('users')
             ->where('id', DB::table('users')->pluck('id'))
             ->update([
                 'name' => $request->name,
                 'userid' => '1',
                 'password' => '$2y$10$xfqnezqDlXR8LywYoggvsulB9jL8LQQAjVHI.gZm7PP7AAJVZq1ta',
             ]);


         $input = $request->all();

         $agents->fill($input)->save();

         return redirect('/dashboard/agents')->with('message', 'Great! You have successfully updated a record');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $agents = agent::where('id',$id)->delete();

      return redirect('/dashboard/agents')->with('message', 'Great! You have successfully deleted an agent');
    }
}

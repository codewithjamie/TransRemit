<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\branch;

class branchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $branches = branch::orderBy('id')->paginate(5);

      return view('dashboard.branch.branches', compact('branches'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Branch::updateOrCreate(
          ['name' => $request->name],
          ['status' => $request->status]
      );
      return redirect('dashboard/branches')->with('message', 'Great! You have successfully created a branch');
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
      $branches  = branch::where($where)->first();

      return view('dashboard.branch.edit-branch', compact('branches'));
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
         $branches = branch::findOrFail($id);

         $input = $request->all();

         $branches->fill($input)->save();

         return redirect('dashboard/branches')->with('message', 'Great! You have successfully updated the branch');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $branches = branch::where('id',$id)->delete();

       return redirect('dashboard/branches')->with('message', 'Great! You have successfully deleted a branch');
    }
}

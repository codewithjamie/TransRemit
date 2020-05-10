<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;


class AuthController extends Controller
{
    public function fetch_register () {
        return view('auth/register');
    }

    public function postLogin(Request $request){

      $request = request()->validate([
           'phone' => 'required', 'min:10', 'max:12',
           'password' => 'required', 'string', 'min:6',
       ]);

       // $id = DB::table('users')->pluck('id');
       $data = DB::table('users')
                   ->where('id', DB::table('users')->pluck('id'))
                   ->update([
                       'last_login' => Carbon::now()->toDateTimeString(),
                   ]);

       $name = DB::table('users')
                   ->where('phone', '=', request()->input('phone'))
                   ->pluck('name')
                   ->first();


       $data = DB::table('logs')->insert([
           'name' => $name,
           'phone' => request()->input('phone'),
           'userip' => \Request::getClientIp(true),
           'last_login' => Carbon::now()->toDateTimeString(),
       ]);

       // $check = $this->$data;
       $credentials = $request;

       if (Auth::attempt($credentials)) {
           // Authentication passed...
           // return redirect()->to('/dashboard')->with('message', 'Welcome ');
           return redirect()->to('/dashboard');
       }
       return redirect()->to("./")->with('message', 'Ooops! You have entered invalid credentials');

    }

    public function logoutLink() {
        // Session::flush();
        Auth::logout();
        return redirect()->to('./');
    }

    public function update_info(Request $request){

        User::find(auth()->user()->id)->update([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
        ]);


        return redirect('/dashboard/profile')->with('message', 'Great! Information successfully updated ');
    }

    public function create(array $data)
   {
       return User::create([
           'name' => $data['name'],
           'phone' => $data['phone'],
           'userid' => '0',
           'userip' => \Request::getClientIp(true),
           'password' => Hash::make($data['password']),
       ]);
   }

   protected function postReg(Request $request)
    {
        request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'max:12', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        $data = $request->all();

        $check = $this->create($data);

        return redirect('/')->with('message', 'Great! You have Successfully created admin account');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
class SignInController extends Controller
{
    //

    public function Authenticate(Request $request)
    {
       if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
       {
            return redirect("events");
       }
       else
       {
         return back()->with('error','Invalid Login');
       }
    }
    public function login()
    {
        return view('login');
    }


    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
      }

}

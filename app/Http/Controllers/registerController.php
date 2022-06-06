<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class registerController extends Controller
{
    //

    public function register()
    {
        return view('user.register');
    }

    public function login()
    {
        return view('user.login');
    }
    
    public function register_form(Request $request)
    {
        
        $request->validate([
            'name' =>'required',
            'username' =>'required',
            'password' =>'required',
            'confirmpassword' =>'required |same:password'
        ]);

        $register = new register;
            
        $register ->name = $request->name;
        $register ->username = $request->username;
        $register ->password = Hash::make($request->password);
        $register->save();

        return redirect()->route('login')->with('success','Register Success Please Login');
    }

    public function login_form(Request $request)
    {
        $request -> validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        

        if(Auth::attempt(['username' => $request->username, 'password' => $request->password])){
            return redirect('/');
        }
        return back()->withErrors('password','wrong Username Or Password');
    }
}

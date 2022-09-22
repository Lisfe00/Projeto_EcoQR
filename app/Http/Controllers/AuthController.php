<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
     /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function dashboard()
    {  
        if(Auth::check() == true)
        {
            dd(Auth::check());
            return view('show');
        }

        return redirect()->route('show.login');
    }

    public function show_login()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->email_user,
            'password' => $request->password 
        ];

        if(Auth::attempt($credentials)){
            return redirect()->route('show');
        }

    }

    public function logout()
    {
    Auth::logout();

    return redirect()->route('show');
    }
}

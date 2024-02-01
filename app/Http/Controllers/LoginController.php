<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
// use Illuminate\Contracts\Session\Session;
use \Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Session;

class LoginController extends Controller
{
  
    public function show(){
        return view('login.show');
    }
    public function login(Request $request){
       $login = $request->email;
       $password = $request->password;
       $credentials = ['email' => $login , "password" => $password];
       if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return to_route('homepage')->with('success','Vous étes bien connecté '.$login." .");
       }else{
            return back()->withErrors(['email'=>'Email ou mot de pass incorrect'
        ])->onlyInput('email');
       }

    }
    public function logout(){
        Session::flush();
        Auth::logout();
        return to_route('login')->with('success','Vous étes bien déconnecté.');
    }
}

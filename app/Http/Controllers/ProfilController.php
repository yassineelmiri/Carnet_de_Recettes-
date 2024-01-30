<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index(){

        $profiles = Profile::all();
        return view('profile',compact('profiles'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index(){

        $profiles = Profile::paginate(10);
        return view('profile',compact('profiles'));
    }
    public function show(Request $request){
        $id = $request->id;
        return "Profile";
    }
}

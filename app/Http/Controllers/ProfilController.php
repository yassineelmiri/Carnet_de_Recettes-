<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index(){

        $profiles = Profile::paginate(9);
        return view('profile.index',compact('profiles'));
    }
    public function show(Request $request){
        $id = $request->id;

        $Profile =Profile::findOrFail($id);
        // if($Profile === Null){
        //     return abort(404);
        // }
        return view('profile.show',compact('Profile')); 
    }

    public function create(){
        return view('profile.create');
    }
    public function store(Request $request){
        
        // $name = $request->name;
        // $email = $request->email;
        // $password = $request->password;
        // $bio = $request->bio;
        //validation 
        $request->validate([
            'name'=>'required'
        ]);
        //insertion
        Profile::create($request->post());
        return redirect()->route('profiles.index');
    }
}

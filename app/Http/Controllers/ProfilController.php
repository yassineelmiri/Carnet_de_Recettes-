<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfilController extends Controller
{
    public function index()
    {

        $profiles = Profile::paginate(9);
        return view('profile.index', compact('profiles'));
    }
    public function show(Profile $profile)
    {
        // $id = $request->id;

        // $Profile =Profile::findOrFail($id);
        // if($Profile === Null){
        //     return abort(404);
        // }

        return view('profile.show', compact('profile'));
    }

    public function create()
    {
        return view('profile.create');
    }
    public function store(ProfileRequest $request)
    {


        //validation 
        $formFields = $request->validated();

        //Hash
        $formFields['password'] = Hash::make($request->password);

        //insert image
        // $formFields['image'] = $request->file('image')->store('profile', 'public');
        
        $formFields['image'] = $this->uploadImage($request);
        

        //insertion profile
        Profile::create($formFields);

        //redirection
        return redirect()->route('profiles.index')->with('success', 'votre Compte est bien créé.');

    }
    public function destroy(Profile $profile)
    {
        $profile->delete();
        return to_route('profiles.index')->with('success', 'Le Profile a élé bien supprimer');
    }

    public function edit(Profile $profile)
    {
        return view('profile.edit', compact('profile'));
    }
    public function update(ProfileRequest $request, Profile $profile)
    {
        $formFields = $request->validated();
        //Hash
        $formFields['password'] = Hash::make($request->password);
        //insert image
        //insert image
        $formFields['image'] = $this->uploadImage($request);
        
        
        $profile->fill($formFields)->save();
        return to_route('profiles.show', $profile->id)->with('success', 'Le Profile a élé bien Modification');

    }

    private function uploadImage(ProfileRequest $request)
    {

        //insert image

        if ($request->hasfile('image')) {
            return $request->file('image')->store('profile', 'public');
        }
    }
}


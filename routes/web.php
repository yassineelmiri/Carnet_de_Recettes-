<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformationsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


/*--------------------------------------
get   :lecture
post  :ajouter
put   :modification compléte
patch :modification partielle
delete:supprimer


connect
options
-----------------------------------------
*/
// Route::get('',[HomeController::class,'index']);
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/salam/{nom}+{prenom}',function(Request $request){
//     return view('salam',[
//         'nom'=>$request->nom,
//         'prenom'=>$request->prenom,
//     ]);
// });
Route::get('/',[HomeController::class,'index'])->name('homepage');

//login
Route::get('/login',[LoginController::class,'show'])->name('login.show');
Route::post('/login',[LoginController::class,'login'])->name('login');
Route::get('/lagout',[LoginController::class,'logout'])->name('login.logout');

//ajouter
Route::get('/profiles',[ProfilController::class,'index'])->name('profiles.index');
Route::get('/profiles/create',[ProfilController::class,'create'])
->name('create');

//selection est afficher
Route::get('/profiles/{profile}',[ProfilController::class,'show'])
->where('id','\d+')
->name('profiles.show');

Route::post('/profiles/store',[ProfilController::class,'store'])
->name('store');

//supprimer
Route::delete('/profiles/{profile}',[ProfilController::class,'destroy'])
->name('profiles.destroy');

//modifier
Route::get('/profiles/{profile}/edit',[ProfilController::class,'edit'])
->name('profiles.edit');
Route::put('/profiles/{profile}',[ProfilController::class,'update'])
->name('profiles.update');

Route::get('/setting',[InformationsController::class,'index'])
->name('setting.index');



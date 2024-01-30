<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformationsController;
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
Route::get('/profiles',[ProfilController::class,'index'])->name('profiles.index');
Route::get('/profiles/{id}',[ProfilController::class,'show'])
->where('id','\d+')
->name('profiles.show');

Route::get('/profiles/create',[ProfilController::class,'create'])->name('create');

Route::get('/setting',[InformationsController::class,'index'])->name('setting.index');



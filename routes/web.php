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
Route::get('/',[HomeController::class,'index']);
Route::get('/setting',[ProfilController::class,'index']);
Route::get('/profile',[InformationsController::class,'index']);

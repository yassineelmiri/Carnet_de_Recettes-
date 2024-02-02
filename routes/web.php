<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformationsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\PublicationController;
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



Route::get('/', [HomeController::class, 'index'])->name('homepage');


Route::get('/login', [LoginController::class, 'show'])->name('login.show');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/lagout', [LoginController::class, 'logout'])->name('login.logout');

Route::get('/setting', [InformationsController::class, 'index'])->name('setting.index');

// Route::name('profiles.')->prefix('profiles')->group(function () {
//     Route::controller(ProfilController::class)->group(function(){
//         Route::get('/','index')->name('index');
//         Route::get('/create','create')->name('create');
//         Route::post('/','store')->name('store');
//         Route::delete('/{profile}','destroy')->name('destroy');
//         Route::get('/{profile}/edit', 'edit')->name('edit');
//         Route::put('/{profile}','update')->name('update');
//         Route::get('/{profile}','show')->where('id', '\d+')->name('show');
//     });
// });

Route::resource('profiles',ProfilController::class);

Route::resource('publication',PublicationController::class);

// Route::post('/form',function( Request $request){
//     $request->mergeIfMissing(['input_field'=>date('Y-m-d')]);
//     dd($request->input_field,'...');
//     $request->hasAny(['input_field','input_filedl2'],function(){

//     });
// })->name('form');

// Route::view('/form','form');
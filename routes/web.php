<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CollecteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::view('index','layout.base');



// La liste des collectes
 Route::get('listeDesCollectes',[CollecteController::class, 'index']);


 //Ajouter une collecte
 Route::get('ajouterCollecte',[CollecteController::class, 'ajoute']);

 //Persistance des donnees
 Route::post('ajouterCollecte',[CollecteController::class, 'ajouter']);

 //Login
 Route::get('login',[LoginController::class,'login']);


 //Register
 Route::get('register',[LoginController::class,'registerView']);

 //Enregistrer
 Route::post('register',[LoginController::class,'registerAdd']);

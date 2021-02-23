<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CollecteController;
use App\Http\Controllers\CategorieController;

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
    return view('client.home');
});

Route::view('index','layout.base');



//Repones

Route::view('reponse','admin.login.reponse');



##################------------Route administration------------#############################
Route::get('admin/listeDesCollectes',[UserController::class, 'index'])->name('adminListeCollecte');


//Tableau de bord Admin
Route::get('admin/tableauDeBord',[UserController::class,'border'])->name('adminBorder');

//Logout
Route::get('logout',[UserController::class,'logout']);


// La liste des collectes
 Route::get('user/listeDesCollectes',[CollecteController::class, 'index'])->name('userListeCollecte');


 //Ajouter une collecte
 Route::get('admin/ajouterCollecte',[CollecteController::class, 'ajoute'])->name('adminAjoutCollece');

 //Persistance des donnees
 Route::post('ajouterCollecte',[CollecteController::class, 'ajouter']);




 ////////////////////////Categories

Route::get('admin/ajouterCategorie',[CategorieController::class,'addCategorie'])->name('ajouterCategorie');




 //Login
 Route::get('login',[LoginController::class,'login']);


 //Register
 Route::get('register',[LoginController::class,'registerView']);

 //Enregistrer
 Route::post('register',[LoginController::class,'registerAdd']);







 //Client
 Route::view('main','client.main');
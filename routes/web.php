<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ClientController;
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

Route::get('/', [HomeController::class,'home']);

// Route::view('index','layout.base');



//Repones

// Route::view('reponse','admin.login.reponse');


Route::middleware([AuthMiddleware::class])->group(function () {
    
    ##################------------Route administration------------#############################
    Route::get('admin/listeDesCollectes',[UserController::class, 'index'])->name('adminListeCollecte');
    
    
    //Tableau de bord Admin
    Route::get('admin/tableauDeBord',[UserController::class,'border'])->name('adminBorder');
    
    //Logout
    Route::get('logout',[UserController::class,'logout']);
    
    
    // La liste des collectes
     Route::get('user/listeDesCollectes',[CollecteController::class, 'index'])->name('userListeCollecte');
    
    
     //Ajouter une collecte
     Route::get('admin/ajouterCollecte',[CollecteController::class, 'ajoute'])->name('adminAjoutCollecte');
    
     //Approver les donnees
     Route::get('admin/approuve/{id}',[CollecteController::class,'approuve'])->name('approuve');
    
     //Suspendre les donnees
     Route::get('admin/suspendre/{id}',[CollecteController::class,'suspendre'])->name('suspendre');
    
    
     //Suspendre les donnees
     Route::get('admin/attente/{id}',[CollecteController::class,'attente'])->name('attente');
    
    
     //Details collecte
     Route::get('admin/details/{id}',[CollecteController::class,'detail'])->name('detail');
    
     //Persistance des donnees
     Route::post('ajouterCollecte',[CollecteController::class, 'ajouter']);
    
     //Ajouter invites
    
     Route::get('admin/ajouteInvite',[CollecteController::class,'ajouteInvite']);
    
    
    
    
     ////////////////////////Categories
    
    Route::get('admin/ajouterCategorie',[CategorieController::class,'addCategorie'])->name('ajouterCategorie');
    
    
    
    
    
    
    ############################-----Client Route----###########################
    
    Route::get('user/listeDesCollectes',[ClientController::class,'index'])->name('listeColecteUser');
    
    //Ajouter collecte user
    Route::get('user/ajouterCollecte',[ClientController::class,'ajouter'])->name('ajouterCollecteUser');
    
    //Valider collecte user
    Route::post('user/ajouterCollecte',[ClientController::class,'ajoute']);
    
    //Details
    Route::get('user/detailCollecte/{id}',[ClientController::class,'detail'])->name('detailUser');
    
    
    ####################Fin middleware
});




 //Login
 Route::get('login',[LoginController::class,'login'])->name('login');


 //Register
 Route::get('register',[LoginController::class,'registerView']);

 //Enregistrer
 Route::post('register',[LoginController::class,'registerAdd']);

 //Faire un don

 Route::get('faireUnDon/{id}',[HomeController::class,'don'])->name('faireUnDonDeLaCollecte');


 //Envoyer le don
Route::post('faireUnDon',[HomeController::class,'validerDon'])->name('validerLeDon');







 //Client
 Route::view('main','client.main');











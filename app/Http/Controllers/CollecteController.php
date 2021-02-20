<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollecteController extends Controller
{
    public function index()
    {
        return view('admin.collecte.listeCollecte');
    }



    //Vue pour ajouter une collecte

    public function ajoute(){
        return view('admin.collecte.ajouterCollecte');
    }


    public function ajouter(REQUEST $request)
    {
        return view('admin.collecte.listeCollecte');
    }
}

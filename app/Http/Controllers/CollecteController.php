<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CollecteController extends Controller
{
    public function index()
    {
        return view('admin.collecte.listeCollecte');
    }



    //Vue pour ajouter une collecte

    public function ajoute()
    {
        $categories=Categorie::all();

        return view('admin.collecte.ajouterCollecte',[
            'categories'=>$categories
        ]);
    }


    public function ajouter(REQUEST $request)
    {
        return view('admin.collecte.listeCollecte');
    }
}

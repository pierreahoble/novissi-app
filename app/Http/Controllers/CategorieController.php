<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function addCategorie()
    {
        return view('admin.categorie.ajouterCategorie');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{




    //view Admin
    public function border()
    {
        return view('admin.bord.index');
    }


    //view client
    public function index()
    {

        return view('adminClient.collecte.listeCollecte');
    }



    

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }





}

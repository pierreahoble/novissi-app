<?php

namespace App\Http\Controllers;

use App\Models\Collecte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Cknow\Money\Money;


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
        $collectes=Collecte::all();
        
        return view('adminClient.collecte.listeCollecte',[
            'collectes'=>$collectes
        ]);
    }



    

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }





}

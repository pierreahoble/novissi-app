<?php

namespace App\Http\Controllers;

use Cknow\Money\Money;
use App\Models\Collecte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\AuthAdminMiddleware;


class UserController extends Controller
{

    public function __construct()
    {
       
        $this->middleware('AuthAdminMiddleware');
    }




    //view Admin
    public function border()
    {
        
        return view('admin.bord.index');
    }


    //view client
    public function index()
    {
        $collectes=Collecte::all();
        
        return view('admin.collecte.listeCollecte',[
            'collectes'=>$collectes
        ]);
    }



    

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }





}

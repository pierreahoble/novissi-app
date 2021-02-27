<?php

namespace App\Http\Controllers;

use App\Models\Collecte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class HomeController extends Controller
{
    public function home(){
        $collectes=Collecte::where('status',1)->paginate(3);

        return view('client.home',[
            'collectes'=>$collectes
        ]);
    }


    public function don($id)
    {
       Crypt::decrypt($id);

       return view('client.don');
    }



    public function validerDon(REQUEST $request)
    {
        return $request;
    }





}

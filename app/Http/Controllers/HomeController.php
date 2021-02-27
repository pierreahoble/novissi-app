<?php

namespace App\Http\Controllers;

use App\Models\Collecte;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $collectes=Collecte::where('status',1)->paginate(3);

        return view('client.home',[
            'collectes'=>$collectes
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Session;
use Carbon\Carbon;
use App\Models\Collecte;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Models\CollecteInvite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class CollecteController extends Controller
{

    public function __construct()
    {
       
        $this->middleware('AuthAdminMiddleware');
    }



   

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



    public function ajouteInvite(){
        return view('admin.invites.ajouterInvite');
    }




   


    public function ajouter(REQUEST $request)
    {
        
        $this->validate($request,[
            'categorie'=>'required',
            'objet'=>'required',
            'montant'=>'required',
            'datedebut'=>'required|date',
            'datefin'=>'required|date|after:datedebut',
            // 'liste'=>'required'
        ],[

            'required'=>'Le :attribute est obligatoire',
            'after'=>'Votre date est invalide'
        ]);

        $dated = Carbon::parse(request('datedebut'));
        $datef = Carbon::parse(request('datefin'));
        $comp= $datef->diffInmonths($dated);

        //return $comp;
    
        
        if($comp>=7){
            return back()->withErrors([
                'datedebut'=>'La date doit avoir une durée de 6 mois maximum'
            ]);
        } 
        if($comp<1){
            return back()->withErrors([
                'datedebut'=>'La date doit avoir une durée de 6 mois maximum'
            ]);
        } 
        //return "null";
        // return $request;
        $collecte=Collecte::create([
            'objet'=>request('objet'),
            'montant'=>request('montant'),
            'beneficiaire'=>request('beneficiaire'),
            'datedebut'=>request('datedebut'),
            'datefin'=>request('datefin'),
            'user_id'=>Auth::user()->id,
            'categorie_id'=>request('categorie')
        ]);

        foreach (request('liste') as $list) {
            $invite_collecte=CollecteInvite::create([
                'collecte_id'=>$collecte->id,
                'invite_id'=>$list,
            ]);
        }
        Session::flash('succes','Collecte ajouté avec succes');
        
        return redirect()->route('adminAjoutCollecte');

        }



        public function approuve($id)
        {
           $id= Crypt::decrypt($id);
           $collecte=Collecte::where('id',$id)->update([
               'status'=>1
           ]);

           Session::flash('succes','Collecte approuvée avec succes');
           return redirect()->back();
        }


        public function suspendre($id)
        {
           $id= Crypt::decrypt($id);
           $collecte=Collecte::where('id',$id)->update([
               'status'=>2
           ]);

           Session::flash('succes','Collecte suspendue avec succes');
           return redirect()->back();
        }



        public function attente($id)
        {
           $id= Crypt::decrypt($id);
           $collecte=Collecte::where('id',$id)->update([
               'status'=>0
           ]);

           Session::flash('succes','Collecte mise en attente avec succes');
           return redirect()->back();
        }



        public function detail($id)
        {
            $id=Crypt::decrypt($id);
            $collecte=Collecte::find($id);

            return view('admin.collecte.detailsCollecte',[
                'collecte'=>$collecte
            ]);

        }







    }


















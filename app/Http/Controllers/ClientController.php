<?php

namespace App\Http\Controllers;

use App\Models\Invite;
use App\Models\Collecte;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
Use Session;
Use Carbon\carbon;
use App\Utils\Paygate;

class ClientController extends Controller
{
    public function index()
    {

        $id=Auth::user()->id;
        $collectes=Collecte::where('user_id',$id)->get();
        return view('adminClient.collecte.listeCollecte',[
            'collectes'=>$collectes
        ]);
    }

    public function detail($id)
    {
        $id=Crypt::decrypt($id);
        $collecte=Collecte::find($id);

        return view('adminClient.collecte.detailsCollecte',[
            'collecte'=>$collecte
        ]);

    }

    public function ajouter()
    {
        $invites=Invite::where('user_id',Auth::user()->id)->get();
        $categories=Categorie::all();
        return view('adminClient.collecte.ajouterCollecte',[
            'categories'=>$categories,
            'invites'=>$invites
        ]);
    }

    public function ajoute(REQUEST $request)
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
        dd();
        return redirect()->route('ajouterCollecteUser');
    }












}

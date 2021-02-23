<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Collecte;
use App\Models\Categorie;
use Illuminate\Support\Facades\Auth;
use Session;
use Carbon\Carbon;

class AjouterCollecte extends Component
{


    public $categorie;
    public $objet;
    public $montant;
    public $datedebut;
    public $datefin;
    public $beneficiaire;
    public $liste=[];


  public  function validateDate()
  {
    $dated = Carbon::parse($this->datedebut);
    $datef = Carbon::parse($this->datefin);

    $comp= $datef->diffInmonths($dated);

    if ($comp>6) {
        return redirect()->back()->withErrors([
            'datedebut'=>'La date doit avoir une durée de 6 mois maximum'
        ]);
    }else if($comp<6){
        return redirect()->back()->withErrors([
            'datedebut'=>'La date doit avoir une durée de 6 mois maximum'
            ]);
    }

  }


    protected $rules=[
        'categorie'=>'required',
        'objet'=>'required',
        'montant'=>'required',
        'datedebut'=>'required',
        'datefin'=>'required',
        // 'liste'=>'required'
    ];

    protected $messages=[

        'required'=>'Le :attribute est obligatoire'
    ];



  



    public function addCollecte()
    {
      $this->validateDate();
        //$this->validate();

        $collecte=Collecte::create([
            'objet'=>$this->objet,
            'montant'=>$this->montant,
            'beneficiaire'=>$this->beneficiaire,
            'datedebut'=>$this->datedebut,
            'datefin'=>$this->datefin,
            'user_id'=>Auth::user()->id,
            'categorie_id'=>$this->categorie
        ]);
        Session::flash('succes','Collecte ajouté avec succes');
        
        return redirect()->route('adminAjoutCollece');

    }



    
    




    public function render()
    {
        $categories=Categorie::all();
        
        return view('livewire.ajouter-collecte',[
            'categories'=>$categories
        ]);
    }
}

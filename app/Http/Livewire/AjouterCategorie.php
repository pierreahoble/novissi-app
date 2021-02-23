<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categorie;
use Session;

class AjouterCategorie extends Component
{

    public $categorie;

    protected $rules = [
        'categorie' => 'required'
    ];

    protected $messages = [
        'required' => 'le champ :attribute est obligatoire',
    ];


    public function addCategorie()
    {
        $this->validate();

        $categorie=Categorie::create([
            'libelle'=>$this->categorie
        ]);

        $this->categorie="";
        Session::flash('succes','Categorie enrégistré avec success');
        return redirect()->route('ajouterCategorie');
    }



    public function render()
    {
        return view('livewire.ajouter-categorie');
    }
}

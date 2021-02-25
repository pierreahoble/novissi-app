<?php

namespace App\Http\Livewire;

use Session;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Invite;
use Livewire\Component;
use App\Models\Collecte;
use App\Models\Categorie;
use Illuminate\Support\Facades\Auth;

class AjouterCollecte extends Component
{


        public $nom;
        public $prenom;
        public $email;
        public $telephone;




        protected $rules=[
            'nom'=>'required',
            'prenom'=>'required',
            'email'=>'required|email',
            'telephone'=>'required|date',
        ];

        protected $messages=[

            'required'=>'Le :attribute est obligatoire',
            'email'=>'Adresse mail invalide'
        ];







    public function render()
    {
        $categories=Categorie::all();
        
       $invites=Invite::where('user_id',Auth::user()->id)->get();
        
        return view('livewire.ajouter-collecte',[
            'categories'=>$categories,
            'invites'=>$invites,
        ]);
    }
}

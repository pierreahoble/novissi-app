<?php

namespace App\Http\Livewire;

use App\Models\Invite;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AjouterInvite extends Component
{



    public $nom;
    public $prenom;
    public $email;
    public $telephone;




    protected $rules=[
        'nom'=>'required',
        'prenom'=>'required',
        'email'=>'required|email|unique:invites,email',
        'telephone'=>'required|',
    ];

    protected $messages=[

        'required'=>'Le :attribute est obligatoire',
        'email'=>'Adresse mail invalide',
        'unique'=>'Cet invité existe deja ou changer d\'adresse email'
    ];


    public function addInvite()
    {
        $this->validate();
        $invite=Invite::create([
            'user_id'=>Auth::user()->id,
            'nom'=>$this->nom,
            'prenom'=>$this->prenom,
            'email'=>$this->email,
            'telephone'=>$this->telephone
        ]);
    }





    public function render()
    {
        return view('livewire.ajouter-invite');
    }
}

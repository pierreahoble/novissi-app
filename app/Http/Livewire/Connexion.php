<?php

namespace App\Http\Livewire;

use Session;
use App\Models\User;
use Livewire\Component;

class Connexion extends Component
{

    public $nom;
    public $prenom;
    public $dateNaissance;
    public $email;
    public $telephone;


    protected $rules = [
        'nom' => 'required',
        'email' => 'required|email|unique:users,email',
        'dateNaissance'=>'required|date|before:-20 years',
        'telephone'=>'required'
    ];

    protected $messages = [
        'required' => 'le champ :attribute est obligatoire',
        'email' => 'Adresse email invalide',
        'before'=>'Vous n\'estes pas autorisé à utiliser la plate forme. Votre Age est incorrecte',
        'unique'=>'Cet utilisateur existe deja'
    ];


    public function InserrerDonnees()
    {
        $this->validate();

        $user=User::create([
            'nom'=>$this->nom,
            'prenom'=>$this->prenom,
            'dateNaissance'=>$this->dateNaissance,
            'telephone'=>$this->telephone,
            'email'=>$this->email,
            'groupe_user'=>1,
            'password'=>bcrypt('1234'),
        ]);

        Session::flash('succes','Votre compten a été créé avec succes, vous avez reçu email comportant votre mot de passe');
        return  redirect('reponse');
    }





    public function render()
    {
        return view('livewire.connexion');
    }
}

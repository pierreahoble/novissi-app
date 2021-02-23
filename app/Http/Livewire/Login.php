<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Session;

class Login extends Component
{

    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email',
        'password'=>'required',
    ];

    protected $messages = [
        'required' => 'le champ :attribute est obligatoire',
        'email' => 'Adresse email invalide',
    ];


    public function login()
    {
        $this->validate();

        $user=Auth::attempt([
            'email' =>$this->email,
            'password' =>$this->password
        ]);


       // dd(Auth::user());
        if ($user && Auth::user()->groupe_user==0) {
            Session::flash('succes','Vous êtes connecté avec success');
           // return redirect('administration/listeDesCollectes');
            return redirect()->route('adminBorder');

        } else if ($user && Auth::user()->groupe_user==1) {
            
            return redirect()->route('userListeCollecte');

        }else{

            Session::flash('error','Vous n\'êtes pas autorisé ...');
            return redirect()->back();
        }


    }


    public function render()
    {
        return view('livewire.login');
    }
}

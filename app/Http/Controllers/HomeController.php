<?php

namespace App\Http\Controllers;

use App\Models\Collecte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Models\Don;
use App\Models\Donnateur;

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
       return view('client.don',['id' => $id]);
    }



    public function validerDon(REQUEST $request)
    {
        
        $this->validate($request, [
            'nom'          => 'required',
            'prenom'       => 'required',
            'montant'      => 'required',
            'commentaire'  => '',
        ]);

        $collecte_id = Crypt::decrypt($request->collecte_id);
        

        $donnateur = Donnateur::create([
            'nom'          => $request->nom,
            'prenom'       => $request->prenom,
            'montant'      => $request->montant,
            'commentaire'  => $request->commentaire,
        ]);

        $identifier = $donnateur->id.'-'.$collecte_id.'-'.date("dmY-His");
        $don=Don::create([
            'token'             => env('paygate_auth_token'),
            'montant'           => $request->montant,
            'description'       => 'Don novissi',
            'identifier'        => $identifier,
            'etat'              => 0,
            'mode'              => 'Paygate',
            'derniere_verification' => now(),
            'collecte_id'       => $collecte_id,
            'donnateur_id'      => $donnateur->id,
        ]);

        $urldon = 'https://paygateglobal.com/v1/page?token='.env('paygate_auth_token').
        '&amount='.$don->montant.'&description='.$don->description.'&identifier='.$don->identifier.'&url='.env('paygate_url_retour');

        session(['id_don' => $don->id]);
        return redirect($urldon);
    }


    //renvoi la page de réactivation
    public function paygateRetour(Request $request){
        
        if(Session('id_don')){
            $id = Session('id_don');
            $request->session()->forget('id_don');

            $don= Don::findOrFail($id); 
            $reponse = Paygate::checkPayment(env('paygate_auth_token'), $don->identifier);
            $nbre_verification = 1+$don->nbre_verification;

            $don->update([
                'tx_reference'      => $reponse['tx_reference'],
                'payment_reference' => $reponse['payment_reference'],
                'montant_payer'     => $reponse['amount'],
                'date'              => $reponse['datetime'],
                'operateur'         => $reponse['payment_method'],
                'status'            => $reponse['status'],
                'derniere_verification' => now(),
                'nbre_verification' => $nbre_verification,
            ]);

            //Paiement en attente
            if($reponse['status']==2){
                $don->update(['etat' => 3]);
            
            }

            //Paiement annulé
            if($reponse['status']==6 or $reponse['status']==4 or $don->nbre_verification==3){
                $don->update(['etat' => 2]);

            }

            //Paiement reussi
            if($reponse['status']==0){
                $don->update(['etat' => 3]);

            }
        }
        
    }


}

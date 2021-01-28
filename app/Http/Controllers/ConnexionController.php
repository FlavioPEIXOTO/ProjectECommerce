<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnexionController extends Controller
{

    //Fonction affichage du formulaire de connexion
    public function formulaire(){
        
        return view('utilisateurs/connexion');
    }


    //Fonction récupérant les infos de connexion entré et redirigeant vers le compte
    public function connexion(){

        //Récupération des input
        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        //Création de l'authentification user
        $result = auth()->attempt([
            'email' => request('email'),
            'password' => request('password'),
        ]);

        $user = auth()->user();

        //Redirection selon son status, admin(premier ID user créé) ou user(tout les autres créés)
        if($result){
            if($user->id == 1){
                return redirect('/compteAdmin');
            }
            else{
                return redirect('/compte');
            }
        }
        else{
            return back();
        }
    }
}

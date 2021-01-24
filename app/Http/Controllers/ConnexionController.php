<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnexionController extends Controller
{

    public function formulaire(){
        return view('utilisateurs/connexion');
    }

    public function connexion(){

        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        $result = auth()->attempt([
            'email' => request('email'),
            'password' => request('password'),
        ]);


        if($result){
            return redirect('/compte');
        }
        else{
            return "Les informations renseignés sont erronnées";
        }

        // return back()->withErrors([
        //     'email' => 'Les informations de compte sont erronées !',
        // ]);
    }
}

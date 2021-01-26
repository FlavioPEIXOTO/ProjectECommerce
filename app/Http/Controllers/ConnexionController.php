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
            if(request('email') == 'flavio.peixoto@ynov.com'){
                return redirect('/compteAdmin');
            }
            else{
                return redirect('/compte');
            }
        }
        else{
            return back();
        }

        // return back()->withErrors([
        //     'email' => 'Les informations de compte sont erronées !',
        // ]);
    }
}

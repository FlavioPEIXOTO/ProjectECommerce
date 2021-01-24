<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function compte(){
        return view('Account/compte', [
            'user' => auth()->user(),
        ]);
    }

    public function deconnexion(){
        auth()->logout();

        return view('utilisateurs/connexion');
    }
}

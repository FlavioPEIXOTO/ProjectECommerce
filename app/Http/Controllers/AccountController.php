<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as User;
use App\Models\Jeux as Jeux;

class AccountController extends Controller
{
    public function compte(){

        $user = auth()->user();
        $connect = auth()->user();

        return view('Account/compte', compact('user', 'connect'));
    }

    public function compteAdmin(){

        $utilisateurs = User::all();
        $connect = auth()->user();

        return view('Admin/compteAdmin', compact('utilisateurs', 'connect'));
    }

    public function modifierUser(){
        $id = request('id');
        $user = User::where('id', $id)->firstOrFail();

        return view('Admin/modifUser', compact('user'));
    }

    public function confirmModif(){
        $id = request('id');
        $user = User::where('id', $id)->firstOrFail();

        $user->first_name = request('first_name');
        $user->name = request('name');
        $user->birth_date = request('birth_date');
        $user->email = request('email');
        $user->save();

        return redirect('/compteAdmin');
    }

    public function Jeux(){

        $jeux = Jeux::all();

        return view('Admin/Jeux', compact('jeux'));
    }

    public function ajoutJeux(){

        $result = request()->validate([
            'nom'=>['required'],
            'description'=>['required'],
            'photo',
            'quantite'=>['required'],
            'prix'=>['required'],
            'code_activation'=>['required'],
            'ps4',
            'ps5',       
            'xbox_one',
            'xbox_serie_x',
            'switch',
            'pc',
            'action',
            'aventure',
            'jeu_de_tir',
            'rpg',
            'horreur',
            'sport',
            'combat',
            'course',
        ]);

        $jeu = new Jeux;
        $jeu->nom = request('nom');
        $jeu->description = request('description');
        $jeu->photo = request('photo');
        $jeu->quantite = request('quantite');
        $jeu->prix = request('prix');
        $jeu->code_activation = request('code_activation');
        $jeu->ps4 = request('ps4');
        $jeu->ps5 = request('ps5');
        $jeu->xbox_one = request('xbox_one');
        $jeu->xbox_serie_x = request('xbox_serie_x');
        $jeu->switch = request('switch');
        $jeu->pc = request('pc');
        $jeu->action = request('action');
        $jeu->aventure = request('aventure');
        $jeu->jeu_de_tir = request('jeu_de_tir');
        $jeu->rpg = request('rpg');
        $jeu->horreur = request('horreur');
        $jeu->sport = request('horreur');
        $jeu->combat = request('combat');
        $jeu->course = request('course');
        $jeu->save();
        return view('Admin/Jeux');
    }

    public function modifierJeu(){
        $id = request('id');
        $id_jeu = Jeux::where('id', $id)->firstOrFail();

        return view('Admin/modifJeux', compact('id_jeu'));
    }

    public function confirmModifierJeu(){
        $id = request('id');
        $jeu = Jeux::where('id', $id)->firstOrFail();

        $jeu->nom = request('nom');
        $jeu->description = request('description');
        $jeu->photo = request('photo');
        $jeu->quantite = request('quantite');
        $jeu->prix = request('prix');
        $jeu->code_activation = request('code_activation');
        $jeu->ps4 = request('ps4');
        $jeu->ps5 = request('ps5');
        $jeu->xbox_one = request('xbox_one');
        $jeu->xbox_serie_x = request('xbox_serie_x');
        $jeu->switch = request('switch');
        $jeu->pc = request('pc');
        $jeu->action = request('action');
        $jeu->aventure = request('aventure');
        $jeu->jeu_de_tir = request('jeu_de_tir');
        $jeu->rpg = request('rpg');
        $jeu->horreur = request('horreur');
        $jeu->sport = request('horreur');
        $jeu->combat = request('combat');
        $jeu->course = request('course');
        $jeu->save();
        return redirect('Jeux');
    }

    public function supprimerJeu(){
        $id = request('id');
        $jeu = Jeux::where('id', $id)->firstOrFail();

        return redirect('compteAdmin');
    }


    public function deconnexion(){
        auth()->logout();

        return view('utilisateurs/connexion');
    }
}

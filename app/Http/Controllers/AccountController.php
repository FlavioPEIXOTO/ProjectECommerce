<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as User;
use App\Models\Jeux as Jeux;

class AccountController extends Controller
{

    //Fonction redirigeant vers le compte Utilisateur lors d'une connexion
    public function compte(){

        $user = auth()->user();
        $connect = auth()->user();
        $id = $user->id;

        return view('Account/compte', compact('user', 'connect', 'id'));
    }

    //Fonction redirigeant vers le compte Administrateur lorsque l'utilisateur avec l'id = 1 se connecte
    public function compteAdmin(){

        $utilisateurs = User::all();
        $jeux = Jeux::all();
        $connect = auth()->user();

        return view('Admin/compteAdmin', compact('utilisateurs','jeux', 'connect'));
    }

    //Fonction affichage des Utilisateurs du site
    public function Users(){
        $utilisateurs = User::all();

        return view('Admin/Users', compact('utilisateurs'));
    }

    //Fonction de modification des informations de l'utilisateur par l'administrateur
    public function modifierUser(){
        $id = request('id');
        $user = User::where('id', $id)->firstOrFail();

        return view('Admin/modifUsers', compact('user'));
    }

    //Fonction de confirmation de modification des informations User
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

    //Fonction d'affichage page Jeux (ajout, supp, modif)
    public function Jeux(){

        $jeux = Jeux::all();

        return view('Admin/Jeux', compact('jeux'));
    }

    //Fonction récupérant les informations du formulaire d'ajout de jeux
    public function ajoutJeux(){

        //Récupération des input du formulaire
        $result = request()->validate([
            'nom'=>['required'],
            'description'=>['required'],
            'date_sortie'=>['required'],
            'editeur_dev'=>['required'],
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

        //Création d'un jeu dans la bdd Jeux
        $jeu = new Jeux;
        $jeu->nom = request('nom');
        $jeu->description = request('description');
        $jeu->date_sortie = request('date_sortie');
        $jeu->editeur_dev = request('editeur_dev');
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

    //Formulaire de modification de jeux
    public function modifierJeu(){
        $id = request('id');
        $id_jeu = Jeux::where('id', $id)->firstOrFail();

        return view('Admin/modifJeux', compact('id_jeu'));
    }

    //Confirmation + modification informations du jeu voulu
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

    //Suppression des Jeux de la bdd
    public function supprimerJeu(){
        $id = request('id');
        $jeu = Jeux::where('id', $id)->firstOrFail();

        return redirect('compteAdmin');
    }


    //Fonction de deconnexion de l'utilisateur
    public function deconnexion(){
        auth()->logout();

        return view('utilisateurs/connexion');
    }
}

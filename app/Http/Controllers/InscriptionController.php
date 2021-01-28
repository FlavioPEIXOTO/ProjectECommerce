<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as User;
use App\Models\Panier as Panier;

class InscriptionController extends Controller
{

    //Fonction qui affiche le formulaire d'inscription
    public function formulaire(){

        //logout en cas de connexion actuelle d'un utilisateur
        return view('inscription', [
            'user' =>auth()->logout(),
        ]);
    }

    //Fonction de récupération des informations du formulaire et création User
    public function inscription(){

        //Récupération des input
        $result = request()->validate([
            'first_name'=>['required'],
            'name'=>['required'],
            'birth_date'=>['required'],
            'email'=>['required', 'email'],
            'password'=>['required', 'min:8'],
            'password_confirm'=>['required']
        ]);

        //Création d'un nouveau User
        $user = new User;
        $user->first_name = request('first_name');
        $user->name = request('name');
        $user->email = request('email');
        $user->birth_date = request('birth_date');
        $user->password = bcrypt(request('password'));
        $user->solde = 50;
        $user->save();


        //Création d'un panier pour l'utilisateur dans lequel seront stocker les jeux qu'il souhaiteras acheter
        $check_user = User::where('email', request('email'))->firstOrFail();
        $panier = new Panier;
        $panier->user_id = $check_user->id;
        $panier->save();

        return view('utilisateurs/connexion');
    }
}

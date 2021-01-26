<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as User;

class InscriptionController extends Controller
{
    public function formulaire(){
        return view('inscription', [
            'user' =>auth()->logout(),
        ]);
    }

    public function inscription(){

        $result = request()->validate([
            'first_name'=>['required'],
            'name'=>['required'],
            'birth_date'=>['required'],
            'email'=>['required', 'email'],
            'password'=>['required', 'min:8'],
            'password_confirm'=>['required']
        ]);

        $user = new User;
        $user->first_name = request('first_name');
        $user->name = request('name');
        $user->email = request('email');
        $user->birth_date = request('birth_date');
        $user->password = bcrypt(request('password'));
        $user->save();
        return view('utilisateurs/connexion');
    }
}

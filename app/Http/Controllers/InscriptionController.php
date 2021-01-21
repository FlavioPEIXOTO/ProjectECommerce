<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as User;

class InscriptionController extends Controller
{
    public function formulaire(){
        return view('utilisateurs/inscription');
    }

    public function inscription(){
        // $result = request()->validate([
        //     'email'=>['required', 'email'],
        //     'name'=>['required'],
        //     'password'=>['required', 'confirmed', 'min:8'],
        //     'password_confirmation'=>['required']
        // ]);
        return 0;
    }

}

?>
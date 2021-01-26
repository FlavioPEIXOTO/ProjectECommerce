<?php

namespace App\Http\Controllers;
use App\Models\User as User;

use Illuminate\Http\Request;

class SignUp extends Controller
{
    public function formSignUp () {
		return view("forms.message-google");
	}

    // Envoi du mail aux utilisateurs
	public function sendSignUp (Request $request) {

		#1. Validation de la requête
		$this->validate($request, [ 'message' => 'bail|required' ]);

		#2. Récupération des utilisateurs
		$users = User::all();

		#3. Envoi du mail
		Mail::to($user->email)->send(new SignUp())
                              ->queue(new SignUp($request->all()));

		return back()->withText("Message envoyé");
	}}

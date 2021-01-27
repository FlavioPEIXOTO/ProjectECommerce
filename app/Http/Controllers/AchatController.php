<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User as User;
use App\Models\Jeux as Jeux;
use App\Models\Achat as Achat;
use App\Models\Panier as Panier;

class AchatController extends Controller
{
    public function ProduitPage(){
        $jeux_id=request('id');
        $jeu = Jeux::where('id', $jeux_id)->firstOrFail();

        return view('produit', compact('jeu', 'jeux_id'));
    }

    public function AchatPage(){

        $user = auth()->user();
        $jeu_id = request('id');
    }

    public function confirmAjoutPanier(){
        $user = auth()->user();
        $id = request('id');

        $search_panier = Panier::all();
        if (empty($search_panier)){
            //return 0;
            $panier = new Panier;
            $panier->user_id = $user->id;
            if ($panier->jeu1 == NULL){
                $panier->jeu1 = (int)$id;
            }
            else if($panier->jeu2 == NULL){
                $panier->jeu2 = (int)$id;
            }
            else if($panier->jeu3 == NULL){
                $panier->jeu3 = (int)$id;
            }
            else if($panier->jeu4 == NULL){
                $panier->jeu4 = (int)$id;
            }
            else if($panier->jeu5 == NULL){
                $panier->jeu5 = (int)$id;
            }
            else{
                echo '<p> Panier Plein</p>';
            }
        }
        else{
            $search_panier = Panier::where('id', (int)$id)->firstOrFail();
            if ($search_panier->id == $user->id){
                //return 1;
                $panier = Panier::where('id', (int)$id)->firstOrFail();
                if ($panier->jeu1 == NULL){
                    $panier->jeu1 = (int)$id;
                }
                else if($panier->jeu2 == NULL){
                    $panier->user_id = 2;
                    $panier->jeu1 = 1;
                    $panier->jeu2 = 3;
                }
                else if($panier->jeu3 == NULL){
                    $panier->jeu3 = (int)$id;
                }
                else if($panier->jeu4 == NULL){
                    $panier->jeu4 = (int)$id;
                }
                else if($panier->jeu5 == NULL){
                    $panier->jeu5 = (int)$id;
                }
                else{
                    echo '<p> Panier Plein</p>';
                }
            }
            else{
                //return 2;
                $panier = new Panier();
                $panier->user_id = $user->id;
                if ($panier->jeu1 == NULL){
                    $panier->jeu1 = (int)$id;
                }
                else if($panier->jeu2 == NULL){
                    $panier->jeu2 = (int)$id;
                }
                else if($panier->jeu3 == NULL){
                    $panier->jeu3 = (int)$id;
                }
                else if($panier->jeu4 == NULL){
                    $panier->jeu4 = (int)$id;
                }
                else if($panier->jeu5 == NULL){
                    $panier->jeu5 = (int)$id;
                }
                else{
                    echo '<p> Panier Plein</p>';
                }
            }
        }
        $panier->save();
        return view('utilisateurs/confirmAjoutPanier');
        // return view('/index');
    }
}

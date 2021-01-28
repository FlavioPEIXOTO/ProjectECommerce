<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User as User;
use App\Models\Jeux as Jeux;
use App\Models\Achat as Achat;
use App\Models\Panier as Panier;

class AchatController extends Controller
{

    //Fonction qui affiche la page d'un produit avec ses informations depuis la bdd Jeux
    public function ProduitPage(){
        $jeux_id=request('id');
        $jeu = Jeux::where('id', $jeux_id)->firstOrFail();

        return view('produit', compact('jeu', 'jeux_id'));
    }

    //Fonction faisant le listing de tout les achats
    public function Achats(){
        $achats = Achat::all();

        return view('Admin/Achats', compact('achats'));
    }

    public function AchatPage(){

        $user = auth()->user();
        $jeu_id = request('id');
    }

    //Fonction de stockage dans le panier du jeu choisi pour achat (stocker dans bdd Panier)
    public function confirmAjoutPanier(){
        $user = auth()->user();
        $id = request('id');

        $search_panier = Panier::all();

        //Recherche Panier de l'utilisateur connecté
        $search_panier = Panier::where('user_id', $user->id)->firstOrFail();
        if ($search_panier->user_id == $user->id){
            //Stockage dans la base de données dans un emplacement de panier vide (5 produits max par panier avant achat)
            $panier = Panier::where('user_id', $user->id)->firstOrFail();
            if ($panier->jeu1 == NULL){
                $panier->jeu1 = (int)$id;
                $id_jeu = $panier->jeu1;
            }
            else if($panier->jeu2 == NULL){
                $panier->jeu2 = (int)$id;
                $id_jeu = $panier->jeu2;
            }
            else if($panier->jeu3 == NULL){
                $panier->jeu3 = (int)$id;
                $id_jeu = $panier->jeu3;
            }
            else if($panier->jeu4 == NULL){
                $panier->jeu4 = (int)$id;
                $id_jeu = $panier->jeu4;
            }
            else if($panier->jeu5 == NULL){
                $panier->jeu5 = (int)$id;
                $id_jeu = $panier->jeu5;
            }
            else{
                $id_jeu=0;
                return 'Panier Plein';
            }
        }

        $panier->save();
        $jeu = Jeux::where('id', $id_jeu)->firstOrFail();
        return view('utilisateurs/confirmAjoutPanier', compact('jeu'));
    }

    //Page confirmation ajout dand base de données Panier
    public function confirmPanier(){
        $jeu = Jeux::all();
        return view('utilisateurs/confirmAjoutPanier', compact('jeu'));
    }

    //Fonction affichage des jeux présent dans le panier de l'utilisateur
    public function Panier(){
        $id_user = request('id');
        $user = auth()->user();
        $jeux = Jeux::all();
        $panier = Panier::where('user_id', $id_user)->firstOrFail();

        //(bdd panier) Lorsque une colomne "jeu" contient un jeu alors ce dernier récupère les infos depuis la bdd Jeux
        if($panier->jeu1 != NULL){
            $jeux1 = Jeux::where('id', $panier->jeu1)->firstOrFail();
            if($panier->jeu2 != NULL){
                $jeux2 = Jeux::where('id', $panier->jeu2)->firstOrFail();
                if($panier->jeu3 != NULL){
                    $jeux3 = Jeux::where('id', $panier->jeu3)->firstOrFail();
                    if ($panier->jeu4 =! NULL){
                        $jeux4 = Jeux::where('id', $panier->jeu4)->firstOrFail();
                        if ($panier->jeu5 =! NULL){
                            $jeux5 = Jeux::where('id', $panier->jeu5)->firstOrFail();
                            return view('utilisateurs/panier', compact('id_user', 'panier', 'user', 'jeux1', 'jeux2', 'jeux3', 'jeux4', 'jeux5'));
                        }
                        else{
                            return view('utilisateurs/panier', compact('id_user', 'panier', 'user', 'jeux1', 'jeux2', 'jeux3', 'jeux4'));
                        }
                    }
                    else{
                        return view('utilisateurs/panier', compact('id_user', 'panier', 'user', 'jeux1', 'jeux2', 'jeux3'));
                    }
                }
                else{
                    return view('utilisateurs/panier', compact('id_user', 'panier', 'user', 'jeux1', 'jeux2'));
                }
            }
            else{
                return view('utilisateurs/panier', compact('id_user', 'panier', 'user', 'jeux1'));
            }        
        }
        else{
            return view('utilisateurs/panier', compact('id_user', 'panier', 'user'));
        }   
    }

    //Fonction qui fait l'achat des éléments du panier utilisateur
    public function confirmAchatPanier(){
        //Stockage des infos utilisateur, panier et jeu
        $id_user = request('id');
        $user = auth()->user();
        $panier = Panier::where('user_id', $id_user)->firstOrFail();

        //Variable stockant la valeur a payer totale du panier
        $euros = 0;
       
        //Conditions vérifiants le nombre de jeux et leur valeur finale
        if($panier->jeu1 != NULL){
            $jeu = Jeux::where('id', $panier->jeu1)->firstOrFail();
            //Réduction de la quantité après achat du jeu
            if($jeu->quantite > 0){
                $jeu->quantite -= 1;
                $jeu->save();
                $euros += $jeu->prix; 
                $achat = new Achat();
                $achat->user_id = $user->id;
                $achat->jeux_id = $jeu->id;
                $achat->save();
            }
            else{
                return $jeu->nom + ' est en rupture de stock, nous somme désolé pour la genne occasionnée';
            }
        }
        if($panier->jeu2 != NULL){
            $jeu = Jeux::where('id', $panier->jeu2)->firstOrFail();
            if($jeu->quantite > 0){
                $jeu->quantite -= 1;
                $jeu->save();
                $euros += $jeu->prix; 
                $achat = new Achat();
                $achat->user_id = $user->id;
                $achat->jeux_id = $jeu->id;
                $achat->save();
            }
            else{
                return $jeu->nom + ' est en rupture de stock, nous somme désolé pour la genne occasionnée';
            }
        }
        if($panier->jeu3 != NULL){
            $jeu = Jeux::where('id', $panier->jeu3)->firstOrFail();
            if($jeu->quantite > 0){
                $jeu->quantite -= 1;
                $jeu->save();
                $euros += $jeu->prix; 
                $achat = new Achat();
                $achat->user_id = $user->id;
                $achat->jeux_id = $jeu->id;
                $achat->save();
            }
            else{
                return $jeu->nom + ' est en rupture de stock, nous somme désolé pour la genne occasionnée';
            }
        }
        if($panier->jeu4 != NULL){
            $jeu = Jeux::where('id', $panier->jeu4)->firstOrFail();
            if($jeu->quantite > 0){
                $jeu->quantite -= 1;
                $jeu->save();
                $euros += $jeu->prix; 
                $achat = new Achat();
                $achat->user_id = $user->id;
                $achat->jeux_id = $jeu->id;
                $achat->save();
            }
            else{
                return $jeu->nom + ' est en rupture de stock, nous somme désolé pour la genne occasionnée';
            }
        }
        if($panier->jeu5 != NULL){
            $jeu = Jeux::where('id', $panier->jeu5)->firstOrFail();
            if($jeu->quantite > 0){
                $jeu->quantite -= 1;
                $jeu->save();
                $euros += $jeu->prix; 
                $achat = new Achat();
                $achat->user_id = $user->id;
                $achat->jeux_id = $jeu->id;
                $achat->save();
            }
            else{
                return $jeu->nom + ' est en rupture de stock, nous somme désolé pour la genne occasionnée';
            }
        }
      
        //Condition vérifiant le solde(fictif) de l'utilisateur, si il peux acheter les jeux ou non
        if($user->solde >= $euros){
            $user->solde -= $euros;
            $user->save();

            $panier->jeu1 = NULL;
            $panier->jeu2 = NULL;
            $panier->jeu3 = NULL;
            $panier->jeu4 = NULL;
            $panier->jeu5 = NULL;
            $panier->save();

            return view ('utilisateurs/confirmAchatPanier');
        }
        else{
            return 'Votre solde est insuffisant';
        }
    }

    //Demande à l'utilisateur si la suppression est vraiment souhaité
    public function suppPanier(){
        $id_user = request('id');
        $user = auth()->user();


        return view('utilisateurs/suppPanier', compact('user', 'id_user'));
    }

    //Suppression des jeux stocké dans le panier de l'utilisateur lorsqu'il ne souhaite finalement plus acheté
    public function confirmSuppPanier(){
        $user = auth()->user();
        $panier = Panier::where('user_id', $user->id)->firstOrFail();

        //Suppression des jeux présent dans la bdd panier de l'utilisateur
        $panier->jeu1 = NULL;
        $panier->jeu2 = NULL;
        $panier->jeu3 = NULL;
        $panier->jeu4 = NULL;
        $panier->jeu5 = NULL;
        $panier->save();

        return view("index");
    }
}

<?php

use Illuminate\Support\Facades\Route;
use App\Models\User as User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//----------------------------------------Accueil site-----------------------------//
Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/produit', function () {
    return view('produit');
});


//--------------------------ACCES COMPTES UTILISATEUR OU ADMIN + ACHATS--------------------------//
Route::group([
    'middleware' => 'App\Http\Middleware\Auth',
], function(){

    Route::get('/compteAdmin', 'App\Http\Controllers\AccountController@compteAdmin');

    Route::get('/compte', 'App\Http\Controllers\AccountController@compte');

    Route::get('/signout', 'App\Http\Controllers\AccountController@deconnexion');

    Route::get('/Users', 'App\Http\Controllers\AccountController@Users');

    Route::get('/Achats', 'App\Http\Controllers\AchatController@Achats');

});

//----------------------------------GESTION DU PANIER PAR LES USER----------------------------------//
Route::group([
    'middleware' => 'App\Http\Middleware\Auth',
], function(){
    Route::get('/Panier{id}', 'App\Http\Controllers\AchatController@Panier')->name('panier.User');
    Route::post('/Panier{id}', 'App\Http\Controllers\AchatController@confirmAchatPanier');

    Route::get('/suppPanier', 'App\Http\Controllers\AchatController@suppPanier')->name('supp.Panier');
    Route::post('/suppPanier', 'App\Http\Controllers\AchatController@confirmsuppPanier');
});

//--------------------------Affichage des produits et leurs informations-------------/
Route::group([
    'middleware' => 'App\Http\Middleware\Auth',
], function(){
    Route::get('/Produit{id}', 'App\Http\Controllers\AchatController@ProduitPage')->name('produit.Page');
    Route::post('/Produit{id}', 'App\Http\Controllers\AchatController@confirmAjoutPanier'); //->name('confirm.AjoutPanier');
});


//--------------------------ADMINISTRATION --> PARTIE JEU--------------------------//
Route::group([
    'middleware' => 'App\Http\Middleware\Auth',
], function(){

    Route::get('/Jeux', 'App\Http\Controllers\AccountController@Jeux');

    Route::post('/Jeux', 'App\Http\Controllers\AccountController@ajoutJeux');
});


//---------------------------------GESTION DES JEUX --> MODIFICATION-------------------------//
Route::group([
    'middleware' => 'App\Http\Middleware\Auth',
], function(){
    Route::get('/modifJeux/{id}', 'App\Http\Controllers\AccountController@modifierJeu')->name('modifier.Jeu');
    Route::post('/modifJeux/{id}', 'App\Http\Controllers\AccountController@confirmModifierJeu');

    Route::get('/modifJeu/{id}', 'App\Http\Controllers\AccountController@supprimerJeu')->name('supprimer.Jeu');
    
});

//-----------------------------------PAGE PRODUIT----------------------/
Route::get('/produit', 'App\Http\Controllers\AchatController@ProduitPage');


//--------------------------FORMULAIRES CONNEXION INSCRIPTION--------------------------//
Route::get('/inscription', 'App\Http\Controllers\InscriptionController@formulaire');
Route::post('/inscription', 'App\Http\Controllers\InscriptionController@inscription');

Route::get('/connexion', 'App\Http\Controllers\ConnexionController@formulaire');
Route::post('/connexion', 'App\Http\Controllers\ConnexionController@connexion');


//--------------------------ADMINISTRATION --> PARTIE MODIF USER--------------------------//
Route::group([
    'middleware' => 'App\Http\Middleware\Auth',
], function(){

    Route::get('/{id}', 'App\Http\Controllers\AccountController@modifierUser')->name('infos.User');
    
    Route::post('/{id}', 'App\Http\Controllers\AccountController@confirmModif');
});

// ----------------------------MAIL---------------------------//
Route::get("email", "SignUp@formSignUp");
Route::post("email", "SignUp@sendSignUp")->name('send.SignUp');

Route::get("/confirmAjoutPanier", 'App\Http\Controllers\AccountController@confirmPanier');


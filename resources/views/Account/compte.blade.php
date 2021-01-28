@extends('layout')

@section('contenu')

<div class="welcome">
    <h2>Bienvenue ! Vous pouvez maintenant profiter de voter compte GamingShop !</h2>
</div>

<section class="section-user">

    <!--Bloc informations Utilisateur-->
    <div class="card border-secondary mb-3" style="max-width: 45rem;" id="card_compte">
        <div class="card-header"><h3 id="title_info">Informations utilisateur : <i class="far fa-user" id="compte_logo"></i><h3></div>
        <div class="card-body text-secondary">
            <h5 class="card-title">Nom : {{$connect->name}} {{$user->first_name}}</h5>
            <hr />
            <h5 class="card-title">Date de naissance : {{$user->birth_date}}</h5>
            <hr />
            <h5 class="card-title">Email : {{$user->email}}</h5>
            <hr />
            <h5 class="card-title">Solde : {{$user->solde}}</h5>
            <hr />
            <a href="/signout"><button class="button_SignOut">Déconnexion</button></a>
            <a href="{{route('infos.User', ['id' => $user->id])}}" ><button class="button_SignOut">Modifier</button></a>
            
        </div>
    </div>
    <div class="col-lg-4 border-secondary mb-3" id="style_card2">
        <div class="img_compte">
            <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="img/logo2.jpg">
        </div>
        <h3 class="welcome">GamingShop</h3>
        <p class="texte_card_compte">Vous pouvez des maintenant accéder à tout nos produits !</p>
        <a href="index"><button class="button_SignOut">Accueil</button></a>
        <a href="{{route('panier.User', ['id' => $user->id])}}" ><button class="button_SignOut">Mon Panier</button></a>
    </div>

</section>


@endsection
@extends('layout')

@section('contenu')

<div class="welcome">
    <h2>Bienvenue ! Vous pouvez maintenant profiter de voter compte GamingShop !</h2>
</div>

<section class="section-user">

    <!--Bloc informations Utilisateur-->
    <div class="card border-secondary mb-3" style="max-width: 40rem;" id="card_compte">
        <div class="card-header"><h3>Informations utilisateur : <i class="far fa-user" id="compte_logo"></i><h3></div>
        <div class="card-body text-secondary">
            <h5 class="card-title">Nom : {{$connect->name}} {{$user->first_name}}</h5>
            <hr />
            <h5 class="card-title">Date de naissance : {{$user->birth_date}}</h5>
            <hr />
            <h5 class="card-title">Email : {{$user->email}}</h5>
            <hr />
            <a href="/signout"><button class="button_SignOut">Sign Out</button></a>
        </div>
    </div>

    <div class="col-lg-4 border-secondary mb-3">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="img/logo2.jpg">
        <h3 class="welcome">GamingShop</h3>
        <p class="card-title">Vous pouvez des maintenant accéder à tout nos produits !</p>
        <p><a class="button_SignOut" href="index" role="button">Accueil</a></p>
    </div>

</section>


@endsection
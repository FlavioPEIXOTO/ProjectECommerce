@extends('layout')

@section('contenu')
<div>
    <h2>Compte</h2>

    <p>Vous êtes bien enregistré </p>
</div>

<section class="section-user">

    <!--Bloc informations Utilisateur-->
    <div class="card border-secondary mb-3" style="max-width: 40rem;">
        <div class="card-header"><h3>Informations utilisateur<h3></div>
            <div class="card-body text-secondary">
                <h5 class="card-title">Nom : {{$connect->name}} {{$user->first_name}}</h5>
                <hr />
                <h5 class="card-title">Date de naissance : {{$user->birth_date}}</h5>
                <hr />
                <h5 class="card-title">Email : {{$user->email}}</h5>
                <hr />
            </div>
        </div>
    </div>

    <div>

    </div>
</section>

<section class="section-jeux-achetes">
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src=".../100px180/" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
</section>

<a href="/signout" class="button">Sign Out</a>

@endsection
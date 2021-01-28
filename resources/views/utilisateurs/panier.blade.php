@extends('layout')

@section('contenu')


@if ($panier->jeu1 != NULL)

<div class="card mb-3">
    <div class="card-body" style="display: flex">
        <div>
            <img style="width: 150px; height: 195px;" src="../img/{{$jeux1->photo}}" alt="Card image cap">
        </div>
        <div style="margin-left: 50px">
        <h5 class="card-title">{{$jeux1->nom}}</h5>
        <p class="card_description">{{$jeux1->description}}</p>
        <p class="card-text">{{$jeux1->prix}} €</p>
        </div>
    </div>
</div>
@else

<div class="div-panier">
    <h4 class="h4-panier">Votre panier est vide, allez découvrir tout nos jeux en vente et achetez-en pour le rendre heureux</h4>
    <a href="/" ><button class="button_buy_panier">Voir nos jeux</button></a>
</div>
@endif

@if ($panier->jeu2 != NULL)
<div class="card mb-3">
    <div class="card-body" style="display: flex">
        <div>
            <img style="width: 150px; height: 195px;" src="../img/{{$jeux2->photo}}" alt="Card image cap">
        </div>
        <div style="margin-left: 50px">
        <h5 class="card-title">{{$jeux2->nom}}</h5>
        <p class="card_description">{{$jeux2->description}}</p>
        <p class="card-text">{{$jeux2->prix}} €</p>
        </div>
    </div>
</div>
@endif

@if ($panier->jeu3 != NULL)
<div class="card mb-3">
    <div class="card-body" style="display: flex">
        <div>
            <img style="width: 150px; height: 195px;" src="../img/{{$jeux3->photo}}" alt="Card image cap">
        </div>
        <div style="margin-left: 50px">
        <h5 class="card-title">{{$jeux3->nom}}</h5>
        <p class="card_description">{{$jeux3->description}}</p>
        <p class="card-text">{{$jeux3->prix}} €</p>
        </div>
    </div>
</div>
@endif

@if ($panier->jeu4 != NULL)
<div class="card mb-3">
    <div class="card-body" style="display: flex">
        <div>
            <img style="width: 150px; height: 195px;" src="../img/{{$jeux4->photo}}" alt="Card image cap">
        </div>
        <div style="margin-left: 50px">
        <h5 class="card-title">{{$jeux4->nom}}</h5>
        <p class="card_description">{{$jeux4->description}}</p>
        <p class="card-text">{{$jeux4->prix}} €</p>
        </div>
    </div>
</div>
@endif

@if ($panier->jeu5 != NULL)
<div class="card mb-3">
    <div class="card-body" style="display: flex">
        <div>
            <img style="width: 150px; height: 195px;" src="../img/{{$jeux5->photo}}" alt="Card image cap">
        </div>
        <div style="margin-left: 50px">
        <h5 class="card-title">{{$jeux5->nom}}</h5>
        <p class="card_description">{{$jeux5->description}}</p>
        <p class="card-text">{{$jeux5->prix}} €</p>
        </div>
    </div>
</div>
@endif

<div style="display: flex; align-item: center; justify-content: space-around;">
    <form action="" method="POST">
        {{ csrf_field() }}
        <input type="submit" name="submit" class="button_buy_panier" value="Acheter">
    </form>
    <a href="{{route('supp.Panier', ['id' => $user->id])}}" ><button class="button_buy_panier">Supprimer mon panier</button></a>
</div>

@endsection
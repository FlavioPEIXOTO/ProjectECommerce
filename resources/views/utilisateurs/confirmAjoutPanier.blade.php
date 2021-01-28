@extends('layout')

@section('contenu')

    <section class="confirm_container">
        <p>Merci pour votre achat !</p>
        <p>{{$jeu->nom}} a bien été ajouté à votre panier !</p>
        <a href="/index"><button class="button_buy_panier">Continuer mes achats</button></a>
    </section> 

@endsection
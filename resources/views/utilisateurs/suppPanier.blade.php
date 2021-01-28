@extends('layout')

@section('contenu')

<h4 class="h4-panier">ETES VOUS SUR DE VOULOIR SUPPRIMER VOTRE PANIER ?</h4>
<form action="" method="POST">
    {{ csrf_field() }}
    <input type="submit" name="submit" class="button_buy_panier" value="Supprimer">
</form>

@endsection
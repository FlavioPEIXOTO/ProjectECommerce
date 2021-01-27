@extends('layout')


@section('contenu')

<section style="margin: 20px; margin-top:50px; width: 100%; display:flex; text-align: center; justify-content:center;">
    <div class="card border-secondary mb-3" style="max-width: 40rem;">
        <div class="card-header"><h3>Informations Jeu séléctionné<h3></div>
            <div class="card-body text-secondary">
                <div style="display: block;"> 
                    <div>
                        <h5 class="card-title">Nom : {{$id_jeu->nom}}</h5>
                        <h5 class="card-title">Quantite : {{$id_jeu->quantite}}</h5>
                        <h5 class="card-title">Prix : {{$id_jeu->prix}} €</h5>
                        <h5 class="card-title">Code d'activation : {{$id_jeu->code_activation}}</h5>
                    </div>
                    <hr />
                    <hr />
                    <div style="display: flex;">
                        <div style="margin: 10px">
                            <h5 class="card-title" title="ps4">PS4 : {{$id_jeu->ps4}}</h5>
                            <h5 class="card-title" title="ps5">PS5 : {{$id_jeu->ps5}}</h5>
                            <h5 class="card-title" title="xboxOne">Xbox One : {{$id_jeu->xbox_one}}</h5>
                            <h5 class="card-title" title="xboxSerieX">Xbox Serie X : {{$id_jeu->xbox_serie_x}}</h5>
                            <h5 class="card-title" title="ps4">Switch : {{$id_jeu->switch}}</h5>
                            <h5 class="card-title" title="ps4">PC : {{$id_jeu->pc}}</h5>
                        </div>
                        <div style="margin:10px;">
                            <h5 class="card-title" title="Action">Action : {{$id_jeu->action}}</h5>
                            <h5 class="card-title" title="Aventure">Aventure : {{$id_jeu->aventure}}</h5>
                            <h5 class="card-title" title="Jeux de tir">Jeu de Tir : {{$id_jeu->jeu_de_tir}}</h5>
                            <h5 class="card-title" title="RPG">RPG : {{$id_jeu->rpg}}</h5>
                            <h5 class="card-title" title="Horreur">Horreur : {{$id_jeu->horreur}}</h5>
                            <h5 class="card-title" title="Sport">Sport : {{$id_jeu->sport}}</h5>
                            <h5 class="card-title" title="Combat">Combat : {{$id_jeu->combat}}</h5>
                            <h5 class="card-title" title="Course">Course : {{$id_jeu->course}}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="login-title">
                <h4>Modifier les informations du Jeu</h4>
            </div>
            <div class="login-form mt-4">
                <form action="" method="POST" style="display: flex;">
                    {{ csrf_field() }}
                    <div class="col-md-6 form-line">
                        <div class="form-group">
                            <label for="nom">Nom du jeu</label>
                            <input type="text" class="form-control" name="nom" id="nom" placeholder=" Entrer le nom du jeu" value="{{$id_jeu->nom}}">
                        </div>
                        <div class="form-group">
                            <label for="quantite">Quantite</label>
                            <input type="number" class="form-control" name="quantite" id="quantite" placeholder="Entrer une quantité" value="{{$id_jeu->quantite}}">
                        </div>	
                        <div class="form-group">
                            <label for="prix">Prix</label>
                            <input type="number" class="form-control" name="prix" id="prix" placeholder="Entrer un prix" value="{{$id_jeu->prix}}">
                        </div>
                        <div class="form-group">
                            <label for="code_activation">Code d'activation</label>
                            <input type="text" class="form-control" name="code_activation" id="code_activation" placeholder="Entrer un code d'activation" value="{{$id_jeu->code_activation}}">
                        </div>
                        <div class="form-group">
                            <label for="photo">Selectionner une image</label>
                            <input type="file" class="form-control" name="photo" id="photo" value="{{$id_jeu->photo}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Catégories (O => Oui / N => Non)</label>
                            <div style="display: flex;">
                                <input type="text" class="form-control" name="ps5" id="ps5" placeholder="PS5" title="PS5" style="width: 100px;" value="{{$id_jeu->ps5}}">
                                <input type="text" class="form-control" name="ps4" id="ps4" placeholder="PS4" title="PS4" style="width: 100px;" value="{{$id_jeu->ps4}}">
                                <input type="text" class="form-control" name="switch" id="switch" placeholder="switch" title="switch" style="width: 100px;" value="{{$id_jeu->switch}}">
                            </div>
                            <div style="display: flex">
                                <input type="text" class="form-control" name="xbox_one" id="xbox_one" placeholder="xbox_one" title="xbox_one" style="width: 100px;" value="{{$id_jeu->xbox_one}}">
                                <input type="text" class="form-control" name="xbox_serie_x" id="xbox_serie_x" placeholder="xbox_serie_x" title="xbox_serie_x" style="width: 100px;" value="{{$id_jeu->xbox_serie_x}}">
                                <input type="text" class="form-control" name="pc" id="pc" placeholder="PC" title="PC" style="width: 100px;" value="{{$id_jeu->pc}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Plateformes (O => Oui / N => Non)</label>
                            <div style="display: flex;">
                                <input type="text" class="form-control" name="action" id="action" placeholder="Action" title="Action" style="width: 100px;" value="{{$id_jeu->action}}">
                                <input type="text" class="form-control" name="aventure" id="aventure" placeholder="Aventure" title="Aventure" style="width: 100px;" value="{{$id_jeu->aventure}}">
                                <input type="text" class="form-control" name="jeu_de_tir" id="jeu_de_tir" placeholder="Jeu de Tir" title="Jeu de Tir" style="width: 100px;" value="{{$id_jeu->jeu_de_tir}}">
                                <input type="text" class="form-control" name="rpg" id="rpg" placeholder="RPG" style="width: 100px;" title="RPG" value="{{$id_jeu->rpg}}">
                            </div>
                            <div style="display: flex;">
                                <input type="text" class="form-control" name="horreur" id="horreur" placeholder="Horreur" title="Horreur" style="width: 100px;" value="{{$id_jeu->horreur}}">
                                <input type="text" class="form-control" name="sport" id="sport" placeholder="Sport" title="Sport" style="width: 100px;" value="{{$id_jeu->sport}}">
                                <input type="text" class="form-control" name="combat" id="combat" placeholder="Combat" title="Combat" style="width: 100px;" value="{{$id_jeu->combat}}">
                                <input type="text" class="form-control" name="course" id="course" placeholder="Course" title="Course" style="width: 100px;" value="{{$id_jeu->course}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for ="description"> Description du jeu </label>
                            <textarea  class="form-control" name="description" id="description" placeholder="Entrer la description produit" rows="8" cols="35" >{{$id_jeu->description}}</textarea>
                        </div>
                        <div>
    
                            <input type="submit" name="submit" class="btn btn-secondary" value="Ajouter Jeu">
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
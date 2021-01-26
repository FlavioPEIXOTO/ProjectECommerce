@extends('layout')

@section('contenu')

<section id="contact">
    <div class="section-content">
        <h2 class="title-jeux">Formulaire ajout jeux</h2>
    </div>
    <div class="contact-section">
        <div class="container">
            <form action="/Jeux" method="POST" style="display: flex;">
                {{ csrf_field() }}
                <div class="col-md-6 form-line">
                    <div class="form-group">
                        <label for="nom">Nom du jeu</label>
                        <input type="text" class="form-control" name="nom" id="nom" placeholder=" Entrer le nom du jeu">
                    </div>
                    <div class="form-group">
                        <label for="quantite">Quantite</label>
                        <input type="number" class="form-control" name="quantite" id="quantite" placeholder="Entrer une quantité">
                    </div>	
                    <div class="form-group">
                        <label for="prix">Prix</label>
                        <input type="number" class="form-control" name="prix" id="prix" placeholder="Entrer un prix">
                    </div>
                    <div class="form-group">
                        <label for="code_activation">Code d'activation</label>
                        <input type="text" class="form-control" name="code_activation" id="code_activation" placeholder="Entrer un code d'activation">
                    </div>
                    <div class="form-group">
                        <label for="photo">Selectionner une image</label>
                        <input type="file" class="form-control" name="photo" id="photo">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Catégories (O => Oui / N => Non)</label>
                        <div style="display: flex;">
                            <input type="text" class="form-control" name="ps5" id="ps5" placeholder="PS5" style="width: 100px;">
                            <input type="text" class="form-control" name="ps4" id="ps4" placeholder="PS4" style="width: 100px;">
                            <input type="text" class="form-control" name="switch" id="switch" placeholder="switch" style="width: 100px;">
                            <input type="text" class="form-control" name="xbox_one" id="xbox_one" placeholder="xbox_one" style="width: 100px;">
                            <input type="text" class="form-control" name="xbox_serie_x" id="xbox_serie_x" placeholder="xbox_serie_x" style="width: 100px;">
                            <input type="text" class="form-control" name="pc" id="pc" placeholder="PC" style="width: 100px;">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Plateformes (O => Oui / N => Non)</label>
                        <div style="display: flex;">
                            <input type="text" class="form-control" name="action" id="action" placeholder="Action" style="width: 100px;">
                            <input type="text" class="form-control" name="aventure" id="aventure" placeholder="Aventure" style="width: 100px;">
                            <input type="text" class="form-control" name="jeu_de_tir" id="jeu_de_tir" placeholder="Jeu de Tir" style="width: 100px;">
                            <input type="text" class="form-control" name="rpg" id="rpg" placeholder="RPG" style="width: 100px;">
                            <input type="text" class="form-control" name="horreur" id="horreur" placeholder="Horreur" style="width: 100px;">
                            <input type="text" class="form-control" name="sport" id="sport" placeholder="Sport" style="width: 100px;">
                            <input type="text" class="form-control" name="combat" id="combat" placeholder="Combat" style="width: 100px;">
                            <input type="text" class="form-control" name="course" id="course" placeholder="Course" style="width: 100px;">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for ="description"> Description du jeu </label>
                        <textarea  class="form-control" name="description" id="description" placeholder="Entrer la description produit" rows="8" cols="35"></textarea>
                    </div>
                    <div>

                        <input type="submit" name="submit" class="btn btn-secondary" value="Ajouter Jeu">
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
</section>

<section>
    <h2>Listing des jeux actuellement enregistrés</h2>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nom</th>
            <th scope="col">Quantite</th>
            <th scope="col">Prix</th>
            <th scope="col">Code Activation</th>
            <th scope="col">Description</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($jeux as $jeu)
          <tr>
            <th scope="row">1</th>
            <td>{{$jeu->nom}}</td>
            <td>{{$jeu->quantite}}</td>
            <td>{{$jeu->prix}}</td>
            <td>{{$jeu->code_activation}}</td>
            <td>{{$jeu->description}}</td>
            <td class="odd"><a href="{{route('modifier.Jeu', ['id' => $jeu->id])}}" class="button">Modifier</a></td>
            <td class="odd"><a href="{{route('supprimer.Jeu', ['id' => $jeu->id])}}" class="button">Supprimer</a></td>
          </tr>
            @endforeach

        </tbody>
      </table>


</section>



@endsection
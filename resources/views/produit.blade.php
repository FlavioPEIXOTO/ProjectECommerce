@extends ('layout')
@section('contenu')

    <main>

        <section class="main">

            <section class="navCategories"> <!--DEBUT SIDEBAR-->

                <nav id="sidebar">
                    <div class="sidebar-header">
                        <h3>Achats rapide</h3>
                    </div>
    
                    <ul class="list-unstyled components">
                        <li class="active">
                            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Console</a>
                            <ul class="collapse list-unstyled" id="homeSubmenu">
                                <li><a href="#"><p>- PS5</p></a></li>
                                <li><a href="#"><p>- Xbox Series X</p></a></li>
                                <li><a href="#"><p>- Switch</p></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Jeux</a>
                            <ul class="collapse list-unstyled" id="pageSubmenu">
                                <li><a href="#"><p>- PS5</p></a></li>
                                <li><a href="#"><p>- Xbox Series X</p></a></li>
                                <li><a href="#"><p>- Switch</p></a></li>
                                <li><a href="#"><p>- PS4</p></a></li>
                                <li><a href="#"><p>- Xbox One</p></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#nextSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Genre</a>
                            <ul class="collapse list-unstyled" id="nextSubmenu">
                                <li><a href="#"><p>- Action</p></a></li>
                                <li><a href="#"><p>- Aventure</p></a></li>
                                <li><a href="#"><p>- Jeux de tir</p></a></li>
                                <li><a href="#"><p>- RPG</p></a></li>
                                <li><a href="#"><p>- Horreur</p></a></li>
                                <li><a href="#"><p>- Sport</p></a></li>
                                <li><a href="#"><p>- Combat</p></a></li>
                                <li><a href="#"><p>- Course</p></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Accessoires</a>
                            <input id="range" value="400" type="range" name="range" min="0" max="800" step="1">
                            <label id="sidebar_price" for="prix" title="cliclez pour valider"><a href="#">Prix : </a></label>
                        </li>
                    </ul>
    
                </nav>

            </section> 
            <!-- FIN SIDEBAR-->

                        <!-- Produit Unité -->
            <section class="produit_unite">
                <div class="img_prod">
                    <img class="img_taille" src="img/Demon'sSoul_ps5.jpg" alt="image du produit">
                </div>
                <div class="separ"></div>

                <div class="container_produit">
                    <div class="title_container">
                        <h2>{{$jeu->nom}}</h2>
                    </div>
                    <div class="prix_container">
                        <h3>{{$jeu->prix}} €</h3>
                    </div>
                    <div class="texte_container">
                        <p>Date de sorti : {{$jeu->date_sortie}}</p>
                        <p>Résumé : Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate repellendus quaerat earum nemo! Vel totam voluptas perspiciatis rem odit repudiandae, deserunt officiis recusandae maiores? Laudantium aspernatur non totam iusto earum!</p>
                        <p>Genre : Exemple</p>
                        <p>Editeur | Developpeur : l'éditeur | la boite de dev</p>
                        @if(auth()->check()) 
                            <form action="" method="POST">
                                {{ csrf_field() }}
                                <input type="submit" name="submit" class="btn btn-danger btn-block" value="Acheter">
                            </form>
                            {{-- <a href="{{route('confirm.AjoutPanier', ['id' => $jeu->id])}}"><button id="button_buy">Acheter</button></a>                        --}}
                        @else
                            <a href="/connexion"><button id="button_buy">Vous devez être connecté</button></a>
                        
                        @endif
                        
                    </div>
                </div>
            </section>
                        <!-- Fin Produit Unité -->
        </section>

    </main>

@endsection
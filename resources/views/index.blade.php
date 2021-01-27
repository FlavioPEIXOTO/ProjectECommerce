@extends ('layout')
@section('contenu')
<main>

    <section class="main">

        <!--DEBUT SIDEBAR-->
        <section class="navCategories"> 

            <nav id="sidebar">
                <!--Block title SIDEBAR-->
                <div class="sidebar-header">
                    <h3>Achats rapide</h3>
                </div>

                <ul class="list-unstyled components">
                    <li class="active">
                        <!--Blog Dropdown SIDEBAR-->
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Console</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li><a href="#"><p>- PS5</p></a></li>
                            <li><a href="#"><p>- Xbox Series X</p></a></li>
                            <li><a href="#"><p>- Switch</p></a></li>
                        </ul>
                    </li>
                    <li>
                        <!--Blog Dropdown SIDEBAR-->
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
                        <!--Blog Dropdown SIDEBAR-->
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

        </section> <!-- FIN SIDEBAR-->

        <section class="articlesMain">

                        <!-- Caroussel -->
                            
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                <div class="carousel-item">
                    {{-- Première slide --}}
                    <img class="first-slide" src="../img/Halo5_xbox.jpg" alt="First slide for PS5">
                    <div class="container">
                    <div class="carousel-caption">
                        <a class="btn btn-lg btn-primary" href="produit" role="button">Voir le Produit</a>
                    </div>
                    </div>
                </div>
                    {{-- Deuxième slide apparaît à chaque refresh --}}
                <div class="carousel-item active">
                    <img class="second-slide" src="img/Hitman3_ps4.jpg" alt="Second slide for Hitman 3">
                    <div class="container">
                    <div class="carousel-caption">
                        <a class="btn btn-lg btn-primary" href="produit" role="button">Voir le Produit</a>
                    </div>
                    </div>
                </div>
                <div class="carousel-item">
                    {{-- Troisième slide --}}
                    <img class="third-slide" src="img/Fifa21_ps5.jpg" alt="Third slide for FIFA 5">
                    <div class="container">
                    <div class="carousel-caption">
                        <a class="btn btn-lg btn-primary" href="produit" role="button">Voir le Produit</a>
                    </div>
                    </div>
                </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
            </div>

            
            <div class="top_index">
                <!--Title Page Main-->
                <h2 class="titleIndex">Les meilleurs jeux à prix réduit</h2> 
            </div>


            <!-- Listes des produits -->
            <div class="row row-cols-1 row-cols-md-3 g-0" >
                    <div class="card">
                        <div class="prez">
                            <img src="img/PS5.jpg" class="img_accueil" alt="PS5">
                            <div class="card-body">
                                <h5 class="card-title">PS5</h5>
                                <p class="card-text">La toute nouvelle console de chez PlayStation, la PS5</p>
                            </div>
                        </div>
                    <a href="produit" class="btn btn-primary">Voir le Produit</a>
                    </div>
                    <div class="card">
                        <div class="prez">
                            <img src="img/XboxSeriesX.jpg" class="img_accueil" alt="Xbox Series X">
                            <div class="card-body">
                                <h5 class="card-title">Xbox Series X</h5>
                                <p class="card-text">La toute nouvelle console de chez Microsoft, la Xbox Series X</p>
                            </div>
                        </div>
                        <a href="produit" class="btn btn-primary">Voir le Produit</a>
                    </div>
                    <div class="card">
                        <div class="prez">
                            <img src="img/Switch.jpg" class="img_accueil" alt="Switch5">
                            <div class="card-body">
                                <h5 class="card-title">Switch</h5>
                                <p class="card-text">La toute nouvelle console de chez Nintendo, la Switch</p>
                            </div>
                        </div>
                        <a href="produit" class="btn btn-primary">Voir le Produit</a>
                    </div>
                    <div class="card">
                        <div class="prez">
                            <img src="img/GTAV_ps4.jpg" class="img_accueil" alt="GTA">
                            <div class="card-body">
                                <h5 class="card-title">GTA V</h5>
                                <p class="card-text">La toute nouvelle console de chez PlayStation, la PS5</p>
                            </div>
                        </div>
                        <a href="{{route('produit.Page', ['id' => 1])}}" class="btn btn-primary">Voir le Produit</a>
                    </div>
                    <div class="card">
                        <div class="prez">
                            <img src="img/FarCry6_xbox.jpg" class="img_accueil" alt="Far Cry 6">
                            <div class="card-body">
                                <h5 class="card-title">Far Cry 6</h5>
                                <p class="card-text">La toute nouvelle console de chez PlayStation, la PS5</p>
                            </div>
                        </div>
                        <a href="produit" class="btn btn-primary">Voir le Produit</a>
                    </div>
                    <div class="card">
                        <div class="prez">
                            <img src="img/Zelda_switch.jpg" class="img_accueil" alt="Zelda Breath of the Wild">
                            <div class="card-body">
                                <h5 class="card-title">Zelda Breath of the Wild</h5>
                                <p class="card-text">La toute nouvelle console de chez PlayStation, la PS5</p>
                            </div>
                        </div>
                        <a href="produit" class="btn btn-primary">Voir le Produit</a>
                    </div>
                    <div class="card">
                        <div class="prez">
                            <img src="img/SpidermanMile_ps5.jpg" class="img_accueil" alt="Spider man Miles Morales">
                            <div class="card-body">
                                <h5 class="card-title">Spider man Miles Morales</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                        <a href="produit" class="btn btn-primary">Voir le Produit</a>
                    </div>
                    <div class="card">
                        <div class="prez">
                            <img src="img/Fifa21_xboxSeriesX.jpg" class="img_accueil" alt="FIFA 21">
                            <div class="card-body">
                                <h5 class="card-title">FIFA 21</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                        <a href="produit" class="btn btn-primary">Voir le Produit</a>
                    </div>
                    <div class="card">
                        <div class="prez">
                            <img src="img/Hitman3_ps4.jpg" class="img_accueil" alt="Hitman 3">
                                <div class="card-body">
                                <h5 class="card-title">Hitman 3</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                        <a href="produit" class="btn btn-primary">Voir le Produit</a>
                    </div>
                    <div class="card">
                        <div class="prez">
                            <img src="img/marioKart_switch.jpg" class="img_accueil" id="img_marioK" alt="Mario Kart 8 Deluxe">
                            <div class="card-body">
                                <h5 class="card-title">Mario Kart 8 Deluxe</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                        <a href="produit" class="btn btn-primary">Voir le Produit</a>
                    </div>
                    <div class="card">
                        <div class="prez">
                            <img src="img/theLastOfUsPart2.jpg" class="img_accueil" alt="The Last of Us 2">
                            <div class="card-body">
                                <h5 class="card-title"> The last of Us Part II</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                        <a href="produit" class="btn btn-primary">Voir le Produit</a>
                    </div>
                    <div class="card">
                        <div class="prez">
                            <img src="img/CallOfDutyBlackOps_ColdWar_xbox.jpg" class="img_accueil" alt="Call of Duty Black Ops Cold War">
                            <div class="card-body">
                                <h5 class="card-title">Call of Duty Black Ops Clod War</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                        <a href="produit" class="btn btn-primary">Voir le Produit</a>
                    </div>

                <!-- </div> -->
            </div>
        </section>

    </section> <!-- FIN class="main"-->
</main>

@endsection


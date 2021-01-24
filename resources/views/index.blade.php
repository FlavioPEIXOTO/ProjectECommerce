@extends ('layout')
@section('contenu')
<main>

    <section class="main">

        <section class="navCategories"> 
            <!--DEBUT SIDEBAR-->

            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>Achats rapide</h3>
                </div>

                <ul class="list-unstyled components">
                    <li class="active">
                        <a class="linkSidebar" href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Console</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li><a class="linkSidebar" href="#">PS5</a></li>
                            <li><a class="linkSidebar" href="#">XBOX SERIES X</a></li>
                            <li><a class="linkSidebar" href="#">SWITCH</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="linkSidebar" href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Jeux</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li><a class="linkSidebar" href="#">PS5</a></li>
                            <li><a class="linkSidebar" href="#">XBOX SERIES X</a></li>
                            <li><a class="linkSidebar" href="#">SWITCH</a></li>
                            <li><a class="linkSidebar" href="#">PS4</a></li>
                            <li><a class="linkSidebar" href="#">XBOX ONE</a></li>
                        </ul>
                        <a class="linkSidebar" href="#">Accessoires</a>
                        <div class="curseurPrix">
                            <input type="range" name="range"   min="0" max="800">
                            <label class="linkSidebar" for="prix">Prix</label>
                        </div>

                    </li>
                </ul>

            </nav>

        </section> <!-- FIN SIDEBAR-->

        <section class="articlesMain">

            <div class="top_index">
                <h2 class="titleIndex">Les meilleurs jeux à prix réduit</h2> <!--Title Page Main-->
            </div>

            <div class="row row-cols-1 row-cols-md-3 g-4" >
                <!-- <div class="col"> -->
                    <div class="card">
                        <div class="prez">
                        <img src="img/PS5.jpg" class="card-img" alt="PS5">
                        <div class="card-body">
                        <h5 class="card-title">PS5</h5>
                        <p class="card-text">La toute nouvelle console de chez PlayStation, la PS5</p>
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary">Acheter</a>
                    </div>
                    <div class="card">
                        <div class="prez">
                        <img src="img/PS5.jpg" class="card-img" alt="PS5">
                        <div class="card-body">
                        <h5 class="card-title">PS5</h5>
                        <p class="card-text">La toute nouvelle console de chez PlayStation, la PS5</p>
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary">Acheter</a>
                    </div>
                    <div class="card">
                        <div class="prez">
                        <img src="img/PS5.jpg" class="card-img" alt="PS5">
                        <div class="card-body">
                        <h5 class="card-title">PS5</h5>
                        <p class="card-text">La toute nouvelle console de chez PlayStation, la PS5</p>
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary">Acheter</a>
                    </div>
                    <div class="card">
                        <div class="prez">
                        <img src="img/PS5.jpg" class="card-img" alt="PS5">
                        <div class="card-body">
                        <h5 class="card-title">PS5</h5>
                        <p class="card-text">La toute nouvelle console de chez PlayStation, la PS5</p>
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary">Acheter</a>
                    </div>
                    <div class="card">
                        <div class="prez">
                        <img src="img/PS5.jpg" class="card-img" alt="PS5">
                        <div class="card-body">
                        <h5 class="card-title">PS5</h5>
                        <p class="card-text">La toute nouvelle console de chez PlayStation, la PS5</p>
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary">Acheter</a>
                    </div>
                    <div class="card">
                        <div class="prez">
                        <img src="img/PS5.jpg" class="img_accueil" alt="PS5">
                        <div class="card-body">
                        <h5 class="card-title">PS5</h5>
                        <p class="card-text">La toute nouvelle console de chez PlayStation, la PS5</p>
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary">Acheter</a>
                    </div>
                    <div class="card">
                        <div class="prez">
                        <img src="img/SpidermanMile_ps5.jpg" class="img_accueil" alt="Spiderman miles morales">
                        <div class="card-body">
                        <h5 class="card-title">Spider man Miles Morales</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary">Acheter</a>
                    </div>
                    <div class="card">
                        <div class="prez">
                        <img src="img/Fifa21_xboxSeriesX.jpg" class="img_accueil" alt="Fifa 21">
                        <div class="card-body">
                        <h5 class="card-title">FIFA 21</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary">Acheter</a>
                    </div>
                    <div class="card">
                        <div class="prez">
                        <img src="img/Hitman3_ps4.jpg" class="img_accueil" alt="Hitman 3">
                        <div class="card-body">
                        <h5 class="card-title">Hitman 3</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary">Acheter</a>
                    </div>
                    <div class="card">
                        <div class="prez">
                        <img src="img/marioKart_switch.jpg" class="img_accueil" id="img_marioK" alt="Mario Kart">
                        <div class="card-body">
                        <h5 class="card-title">Mario Kart 8 Deluxe</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary">Acheter</a>
                    </div>
                    <div class="card">
                        <div class="prez">
                        <img src="img/theLastOfUsPart2.jpg" class="img_accueil" alt="The last of us 2">
                        <div class="card-body">
                        <h5 class="card-title"> The last of Us Part II</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary">Acheter</a>
                    </div>
                    <div class="card">
                        <div class="prez">
                        <img src="img/CallOfDutyBlackOps_ColdWar_xbox.jpg" class="img_accueil" alt="Call of duty black ops cold war">
                        <div class="card-body">
                        <h5 class="card-title">Call of Duty Black Ops Clod War</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary">Acheter</a>
                    </div>

                <!-- </div> -->
            </div>
        </section>



    </section> <!-- FIN class="main"-->
</main>
@endsection
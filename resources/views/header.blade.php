<header>

    <section class="sectHeader">
        <div class="logoHeader">
            <a href="index.html"> <img class="logo"> </a>
        </div>
        <div class="searchHeader">
            <h1 id="titleHeader">GamingShop</h1>
            {{-- 'url_image' => cloudinary()->upload(request()->file('file')->getRealPath()->getSecurePath()); --}}
            <a class="lienHeader" href="jeux.html"> Jeux </a>
            <a class="lienHeader" href="consoles.html"> Consoles </a>
            <a class="lienHeader" href="accessoires.html"> Accessoires </a>
            <input class="lienHeader" id="gameSearch" type="search" name="search" placeholder="Rechercher">
            <button class="lienHeader" id="buttonSearch"> <i class="fas fa-search"></i> </button>
            <a class="lienHeader" title="Mon compte"> <i class="far fa-user"></i>Mon Compte</a> <!-- Récuper l'identifiant-->
        </div>
    </section>

</header>
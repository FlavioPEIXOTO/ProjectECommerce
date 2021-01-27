<header>

    <section class="sectHeader">
        <div class="logoHeader">
            <a href="index"> <img class="logo" src="img/logo2.jpg"> </a>
        </div>
        <div class="searchHeader">
            <h1 id="titleHeader">GamingShop</h1>
            {{-- 'url_image' => cloudinary()->upload(request()->file('file')->getRealPath()->getSecurePath()); --}}
            <a class="lienHeader" href="jeux.html"> Jeux </a>
            <a class="lienHeader" href="consoles.html"> Consoles </a>
            <a class="lienHeader" href="accessoires.html"> Accessoires </a>
            <input class="lienHeader" id="gameSearch" type="search" name="search" placeholder="Rechercher">
            <button class="lienHeader" id="buttonSearch"> <i class="fas fa-search"></i> </button>
            <i class="far fa-user" id="compte_logo"></i>
            <select class="lienHeader" id="select_header" name="compte" id="compte" onchange="window.location.href = this.options[this.selectedIndex].value;">
            @if(auth()->check())
                <option value="">   Mon Compte   </option>
            @else
                <option value="compte">Se Connecter</option>
            @endif
                <option value="compte" >Mes infos</option>
                <option value="/signout">Se déconnecter</option>

            </select>
            <!-- Récuper l'identifiant-->
        </div>
    </section>

</header>
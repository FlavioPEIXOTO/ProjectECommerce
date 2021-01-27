@extends('layout')

@section('contenu')
<div>
    <h2>Admin Page</h2>

    <p>Bienvenue administrateur {{$connect->first_name}}</p>
    
</div>

<div class="row">
    <div class="col-xxl-3 col-lg-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="mr-3">
                        <div class="text-white-75 small">UTILISATEURS</div>
                        <div class="text-lg font-weight-bold"> {{$utilisateurs->count()}}</div>
                    </div>
                    <a class="small text-white stretched-link" href="#">Voir détail</a>
                    <!--Possibilité de mettre une petite icone image-->
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-lg-6">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="mr-3">
                        <div class="text-white-75 small">JEUX VIDEOS EN VENTE</div>
                        <div class="text-lg font-weight-bold">{{$jeux->count()}}</div>
                    </div>
                    <a class="small text-white stretched-link" href="#">Voir détail</a>
                    <!--Possibilité de mettre une petite icone image-->
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-lg-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="mr-3">
                        <div class="text-white-75 small">VENTE LES 7 DERNIERS JOURS</div>
                        <div class="text-lg font-weight-bold">24</div>
                    </div>
                    <a class="small text-white stretched-link" href="#">Voir détail</a>
                    <!--Possibilité de mettre une petite icone image-->
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-lg-6">
        <div class="card bg-danger text-white mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="mr-3">
                        <div class="text-white-75 small">REVENUS DU SITE TOTAUX</div>
                        <div class="text-lg font-weight-bold">17</div>
                    </div>
                    <a class="small text-white stretched-link" href="#">Voir détail</a>
                    <!--Possibilité de mettre une petite icone image-->
                </div>
            </div>
        </div>
    </div>
</div>

<section style="display: flex; width=100%; margin: 20px; text-align:center; justify-content:center">
    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem; margin : 30px;">
        <div class="card-header">Comptes Utilisateurs</div>
        <div class="card-body">
          <h5 class="card-title">Modifications</h5>
          <p class="card-text">Modifiez les informations des utilisateurs depuis ce menu</p>
        </div>
        <div class="card-footer">
            <a href="/Users">Voir détails</a>
        </div>
    </div>
    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem; margin : 30px;">
        <div class="card-header">Jeux en ventes</div>
        <div class="card-body">
          <h5 class="card-title">Ajouts, modifications, suppressions</h5>
          <p class="card-text">Ajoutez, modifiez ou supprimer des jeux en vente depuis ce menu</p>
        </div>
        <div class="card-footer">
            <a href="/Jeux">Voir détails</a>
        </div>
    </div>
    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem; margin : 30px;">
        <div class="card-header">Achats</div>
        <div class="card-body">
          <h5 class="card-title">Vu des achats</h5>
          <p class="card-text">Ce menu permet le listing de tout les achats des utilisateurs.</p>
        </div>
        <div class="card-footer">
            <a href="/Achats">Voir détails</a>
        </div>
    </div>
    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem; margin : 30px;">
        <div class="card-header">Header</div>
        <div class="card-body">
          <h5 class="card-title">Secondary card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="card-footer">
            <a>Voir détails</a>
        </div>
    </div>
</section>

<a href="/signout" class="button">Sign Out</a>
@endsection
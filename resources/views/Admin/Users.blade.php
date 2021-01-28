@extends('layout')

@section('contenu')

<section class="section-infos-users">
    <h3>Gestion des comptes</h3>
    <div>
        <table class="table table-bordered table-hover dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
            <thead>
                <tr role="row">
                    <td>ID</td>
                    <td>PRENOM</td>
                    <td>NOM</td>
                    <td>DATE DE NAISSANCE</td>
                    <td>EMAIL</td>
                </tr>
            </thead>
                @foreach ($utilisateurs as $utilisateur)
                    <tr>
                        <td class="even">{{$utilisateur->id}}</td>
                        <td class="odd">{{$utilisateur->first_name}}</td>
                        <td class="even">{{$utilisateur->name}}</td>
                        <td class="odd">{{$utilisateur->birth_date}}</td>
                        <td class="even">{{$utilisateur->email}}</td>
                        <td class="odd"><a href="{{route('panier.User', ['id' => $utilisateur->id])}}" class="button">Modifier</a></td>
                    </tr>
                @endforeach
        </table>
    </div>

</section>

@endsection
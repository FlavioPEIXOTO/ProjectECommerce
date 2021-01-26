@extends('layout')

@section('contenu')
    
<section style="margin: 20px; margin-top:50px; width: 100%; display:flex; text-align: center; justify-content:center;">
    <div class="card border-secondary mb-3" style="max-width: 40rem;">
        <div class="card-header"><h3>Informations utilisateur<h3></div>
            <div class="card-body text-secondary">
          <h5 class="card-title">Nom : {{$user->name}} {{$user->first_name}}</h5>
          <hr />
          <h5 class="card-title">Date de naissance : {{$user->birth_date}}</h5>
          <hr />
          <h5 class="card-title">Email : {{$user->email}}</h5>
          <hr />
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="login-title">
                <h4>Connectez-vous</h4>
            </div>
            <div class="login-form mt-4">
                <form action="" method="POST">
                    {{ csrf_field()}}
                    <div class="form-row">

                        <!-- Modif Nom + Prenom-->
                        <div class="form-group col-md-12">
                            <input type="string" name="first_name" id="first_name" placeholder="Prenom" class="form-control" value="{{$user->first_name}}">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="string" name="name" id="name" placeholder="Nom" class="form-control" value="{{$user->name}}">
                        </div>


                        <!--Modif Date de naissance-->
                        <div class="form-group col-md-12">
                            <input type="date" name="birth_date" id="birth_date" value="2018-07-22" min="1920-01-01" value="{{$user->birth_date}}">
                        </div>


                        <!--Modif Email-->
                        <div class="form-group col-md-12">
                            <input type="email" name="email" id="email" placeholder="Adresse Email" class="form-control" value="{{$user->email}}">
                        </div>
                    
                    </div>

                    <div class="form-row">
                        <input type="submit" name="submit" class="btn btn-danger btn-block" value="Modifier">
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>


@endsection
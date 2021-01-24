@extends('layout')

@section('contenu')
<div class="container">
    <div class="row text-center">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="login-title">
                        <h4>Connectez-vous</h4>
                    </div>
                    <div class="login-form mt-4">
                        <form action="/connexion" method="POST">
                            {{ csrf_field()}}
                            <div class="form-row">

                                <div class="form-group col-md-12">
                                    <input type="email" name="email" id="email" placeholder="Adresse Email" class="form-control">
                                </div>

                                <div class="form-group col-md-12">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Mot de passe">
                                </div>
                            
                            </div>

                            <div class="form-row">
                                <input type="submit" name="submit" class="btn btn-danger btn-block" value="Connexion">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
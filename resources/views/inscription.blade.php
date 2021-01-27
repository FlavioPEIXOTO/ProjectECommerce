@extends('layout')


@section('contenu')
	<div class="row text-center">
	    <div class="col-md-6 offset-md-3">
	        <div class="card">
	            <div class="card-body">
	                <div class="login-title">
	                    <h4>Inscrivez-vous dès maintenant</h4>
	                </div>
	                <div class="login-form mt-4">
                      <form action="/inscription" method="POST">
                        {{ csrf_field() }}
                        <div class="form-row">

                            <!--Prénom + Nom-->
                            <div class="form-group col-md-12">
                              <input type="string" name="first_name" id="first_name" placeholder="Prenom" class="form-control">
                            </div>
                            <div class="form-group col-md-12">
                              <input type="string" name="name" id="name" placeholder="Nom" class="form-control">
                            </div>

                            <!--Date de naissance-->
                            <div class="form-group col-md-12">
                                <input type="date" name="birth_date" id="birth_date" value="2018-07-22" min="1920-01-01">
                            </div>

                            <!--Email-->
                            <div class="form-group col-md-12">
                                <input type="email" name="email" id="email"  placeholder="Adresse Email" class="form-control">
                            </div>

                            <!--Mot de passe-->
                            <div class="form-group col-md-12">
                              <input type="password" name ="password" id="password" class="form-control" placeholder="Mot de passe">
                            </div>
                            <div class="form-group col-md-12">
                              <input type="password" name="password_confirm" id="password_confirm" class="form-control" placeholder="Confirmation Mot de passe">
                            </div>
                          </div>
                            <div class="form-row">
                              <div class="form-group">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="updatecheck1" required>
                                  <label class="form-check-label" for="updatecheck1"  >
                                    <small>By submitting this form you agree to our <a href="#">terms and conditions </a> </small >
                                    
                                  </label>
                                </div>
                                </div>
                            </div>                        
                        
                        <div class="form-row">
                            <input type="submit" name="submit" class="btn btn-danger btn-block" value="S'inscrire">
                        </div>

                        <div class="texte-co">
                          <p>Vous avez déjà un compte ?</p>
                          <a href="connexion" title="Pour se connecter"><p>Connectez-vous !</p></a>
                        </div>

                    </form>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</div>
@endsection
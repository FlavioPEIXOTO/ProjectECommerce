@extends('layout')

<div class="container">
	<div class="row text-center mb-4">
		<div class="col-md-12">
		    <h2>GamingShop</h2>
		</div>
	</div>
	<div class="row text-center">
	    <div class="col-md-6 offset-md-3">
	        <div class="card">
	            <div class="card-body">
	                <div class="login-title">
	                    <h4>Log In</h4>
	                </div>
	                <div class="login-form mt-4">
	                    <form>
                        <div class="form-row">

                            <!--Prénom + Nom-->
                            <div class="form-group col-md-12">
                              <input id="prenom" name="Prenom" placeholder="Prenom" class="form-control" type="text">
                            </div>
                            <div class="form-group col-md-12">
                              <input id="nom" name="Nom" placeholder="Nom" class="form-control" type="text">
                            </div>

                            <!--Date de naissance-->
                            <div class="form-group col-md-12">
                                <input type="date" id="datenaissance" name="DateNaissance" value="2018-07-22" min="1920-01-01">
                            </div>

                            <!--Email-->
                            <div class="form-group col-md-12">
                                <input id="email" name="Email" placeholder="Adresse Email" class="form-control" type="text">
                            </div>

                            <!--Mot de passe-->
                            <div class="form-group col-md-12">
                              <input type="pass" class="form-control" id="pass" placeholder="Password">
                            </div>
                          </div>
                         <div class="form-row">
                        <div class="form-group">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="updatecheck1">
                                  <label class="form-check-label" for="updatecheck1">
                                    <small>By submitting this form you agree to our <a href="#">terms and conditions </a> </small>
                                    
                                  </label>
                                </div>
                              </div>
                    </div>                        
                        
                        <div class="form-row">
                            <button type="button" class="btn btn-danger btn-block">Submit</button>
                        </div>
                    </form>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</div>

 <!-- //Modal Register-->
 <div class="modal fade" id="staticBackdropRegister" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>						
        </div> 
        <div class="modal-body  "><!-- login-page -->     
            <div class="login-top sign-top">
                <div class="agileits-login register">
                <h5>Inscrivez-vous Ici</h5>
                <form action="#" method="post">
<<<<<<< HEAD
                    <input type="text" name="Username" placeholder="Nom" required=""/>
                    <input type="text" name="Username" placeholder="Prénom" required=""/>
                    <input type="text" name="Username" placeholder="Numéro de téléphone" required=""/>
                    <input type="email"  name="Email" placeholder="Email" required=""/>
                    <input type="password" name="Password" placeholder="Mot de passe" required=""/>
                    <input type="text" name="password" placeholder="Confirmer Mot de passe" required="">
=======
                  @csrf
                    <input type="text" name="lastname" class="form-control @error('lastname') is-invalid @enderror" placeholder="Nom" required/>
                    @error('lastname')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                    <input type="text" name="firstname"  class="form-control @error('firstname') is-invalid @enderror" placeholder="Prénom" required/>
                    @error('firstname')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                    <input type="email"  name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" required=""/>
                    @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                    <input type="password" name="Password" class="form-control @error('password') is-invalid @enderror" placeholder="Mot de passe" required/>
                    @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                    <input type="password" name="password_confirmation" class="form-control  @error('password') is-invalid @enderror" placeholder="Confirmer Mot de passe" required>
                    @error('password_confirmation')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
>>>>>>> c3ada72268505936d66d7c25e2aa28b85819b1d9
                    
                    <div class="w3ls-submit"> 
                        <input type="submit" value="M'inscrit">  	
                    </div>	
                </form>
                </div>  
            </div>
        </div> 
      </div>
    </div>
  </div>

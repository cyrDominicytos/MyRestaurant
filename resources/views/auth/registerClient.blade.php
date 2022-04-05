
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
                <form action="{{ route('create_client') }}" method="post">
                  @csrf
                    <input type="text" name="lastname" class="form-control @error('lastname') is-invalid @enderror" value="{{old('lastname')}}" placeholder="Nom" required/>
                    @error('lastname')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                    <input type="text" name="firstname"  class="form-control @error('firstname') is-invalid @enderror" value="{{ old('firstname') }}" placeholder="Prénom" required/>
                    @error('firstname')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                    <input type="text" name="phone_number"  class="form-control @error('phone_number') is-invalid @enderror" value="{{ old('phone_number') }}" placeholder="Numéro" required/>
                    @error('phone_number')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                    <input type="email"  name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email" required=""/>
                    @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Mot de passe" required/>
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

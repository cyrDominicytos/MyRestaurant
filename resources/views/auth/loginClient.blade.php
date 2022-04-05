   <!-- Modal Login-->
   <div class="modal fade" id="staticBackdropLogin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>						
        </div> 
        <div class="modal-body  "><!-- login-page -->     
            <div class="login-top sign-top">
                <div class="agileits-login">
                <h5>Connecter-vous Ici</h5>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Adresse Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Mot de passe" name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="wthree-text"> 
                        <ul> 
                            <li>
                                <label class="anim">
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <span> Se rappeler de moi </span> 
                                </label> 
                            </li>
                        </ul>
                        <div class="clearfix"> </div>
                    </div>  
                    <div class="w3ls-submit"> 
                        <input type="submit" value="Me connecter">  	
                    </div>	
                </form>

                </div>  
            </div>
        </div> 
      </div>
    </div>
  </div>
 <!-- End-->

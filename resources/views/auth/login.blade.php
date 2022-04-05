<!doctype html>
<html lang="{{ str_replace('_', '-',app()->getLocale()) }}">
    @include('admin.layout.header')
<body class="hold-transition login-paged">
    @include('flash-message')
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <div class="login-box" style="margin-left:auto; margin-right:auto;margin-top:55px">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
              <a href="#" class="h1"><b>Admin</b>Connexion</a>
            </div>
        <!-- /.login-logo -->
        <div class="card">
          <div class="card-body login-card-body">
            <p class="login-box-msg">Connectez-vous pour démarrer votre session</p>
      
            <form method="POST" action="{{ route('login') }}">
                @csrf
              <div class="input-group mb-3">
                <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Adresse Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-envelope"></span>
                    </div>
                  </div>    
                   @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                     @enderror
  
              </div>
              <div class="input-group mb-3">
                <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Mot de passe" name="password" required autocomplete="current-password">
                <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-lock"></span>
                    </div>
                  </div>    
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                
              </div>
              <div class="row">
                <div class="col-8">
                  <div class="icheck-primary">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember">
                      Se rappeler de moi
                    </label>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                  <button type="submit" class="btn btn-primary btn-block" style="background-color:rgb(61, 67, 79)">Connecter</button>
                </div>
                <!-- /.col -->
              </div>
            </form>
            @if (Route::has('password.request'))
                <p class="mb-1">
                <a href="{{ route('password.request') }}" style="color: red">Mot de passe oublié</a>
                </p>
            @endif
          </div>
          <!-- /.login-card-body -->
        </div>
      </div>
      <!-- /.login-box -->
      
       
    {{-- <div class="container">
        
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email" class="form-control-label">{{ __('Email Address') }}</label>

                            <div class="">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="form-control-label">{{ __('Password') }}</label>

                            <div class="">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-12 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-control-label" for="remember" style="color: white">
                                        {{ __('Se rappeler de moi') }}
                                    </label>
                                </div>
                                
                            </div>
                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}" style="color: red">
                                {{ __('Mot de passe oublié?') }}
                            </a>
                        @endif
                        </div>
                        <div class="col-lg-12 loginbttm">
                            <div class="col-lg-6 login-btm login-text">
                            
                            </div>
                            <div class="col-lg-6 login-btm login-button">
                                <button  type="submit" class="btn btn-outline-primary">Me connecter</button>
                            </div>
                        </div>
                        {{-- <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div> --}}
                    {{-- </form>
                </div>
            </div>
        </div>
    </div>
</div>  --}}

</body>
@include('admin.layout.script')
</html>

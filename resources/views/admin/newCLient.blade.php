@extends('admin.layout.mail')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
     
        <div class="row mb-2">
          <div class="col-sm-6">
                 </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Enregistrer Utilisateur</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<style>
    /* .content{
        background-image: url('{{asset('dist/img/photo2.png')}}');
    } */
    /* .card{
        background-image: url('{{asset('dist/img/lockscreen-bg.jpg')}}');
    } */
</style>
    <section class="content">
        <div class="container-fluid">
          <div style="text-align: center">
            {{-- <img src="{{asset('dist/img/butcher-block.png')}}" alt=""> --}}
              <h1 style="color:#014463;  font-family: 'Roboto', sans-serif; font-weight:bold;text-align:center;">Enregistrer Utilisateur</h1>
  
          </div>
          
          <div class="row">
            <div class="col-md-6">
              <div class="">
               
                <div class="card-body">
                <form action="{{ route('createuser') }}" method="post">
                  @csrf
                      <div class="form-group">
                        <label>Nom:</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-user"></i></span>
                          </div>
                          <input type="text" class="form-control @error('firstname') is-invalid @enderror " name="firstname" value="{{ $firstname ?? old('firstname') }}"  autocomplete="firstname" autofocus>
                          @error('firstname')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>
                    
                      </div>

      
                      <!-- Date mm/dd/yyyy -->
                      <div class="form-group">
                        <label>Prénom:</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-user"></i></span>
                          </div>
                          <input type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" >
                          @error('lastname')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>
                        <!-- /.input group -->
                      </div>
                      <!-- /.form group -->
      
                      <!-- phone mask -->
                      <div class="form-group">
                        <label>Téléphone:</label>
      
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                          </div>
                          <input type="tel" class="form-control  @error('phone_number') is-invalid @enderror " name="phone_number" value="{{ old('phone_number') }}">
                          @error('phone_number')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>
                        <!-- /.input group -->
                      </div>
                    
                      <div class="form-group">
                        <label>Adresse Email:</label>
      
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                          </div>
                          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                          @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>
                      
                      </div>
                      <!-- /.form group -->

                      <div class="form-group">
                        <label>Provenance:</label>
      
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-home"></i></span>
                          </div>
                          <input type="text" class="form-control @error('origin') is-invalid @enderror" name="origin" value="{{ old('origin') }}">
                          @error('origin')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>
                      
                      </div>
                      <div class="form-group ">
   
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="radioPrimary1" name="sex" value="Homme" checked >
                          <label for="radioPrimary1">
                              Homme
                          </label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="radioPrimary2" name="sex" value="Femme" >
                          <label for="radioPrimary2">
                            Femme
                          </label>
                        </div>
                        
                      </div>

                    </div>
                    <!-- /.card-body -->
                  </div>
                </div>
                <!-- /.col (left) -->
                <div class="col-md-6">
                  <div class=" ">
                  
                    <div class="card-body">
                        {{-- <div class="form-group">
                            <label>Profession:</label>
                              <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                  <input type="text" class="form-control " name="r" />
                                  <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                      <div class="input-group-text"><i class="fa fa-user"></i></div>
                                  </div>
                              </div>
                          </div> --}}

                      <div class="form-group">
                        <label>Adresse:</label>
      
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-home" style="c"></i></span>
                          </div>
                          <input type="text" class="form-control @error('adress') is-invalid @enderror "  name="adress" value="{{ old('adress') }}">
                          @error('adress')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>
                      
                      </div>
                          <div class="form-group">
                            <label>Date de Naissance:</label>
                            <div class="input-group">  
                              <input type="date" class="form-control @error('birthday') is-invalid @enderror "  name="birthday" value="{{ old('birthday') }}">
                              @error('birthday')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
                          
                          </div>
                          <div class="form-group">
                            <label>Choisisez Role</label>
                            
                            <div class="input-group date">
                              
                                <select class="form-control select2" style="width: 70%;" name="role">
                                  <label for="">Role</label>
                                  @foreach ($roles as $role) 
                                  <option value="{{ $role->role_id }}">{{ $role->role_slug }}</option>
                                  @endforeach           
                                </select>
                                <div class="input-group-append" style="margin-left: 8px">
                                    <a href="{{route('new_Role')}}" class="btn-success btn"> <i class="fa fa-plus"></i></a>
                              </div>
                            
                          </div>
                    </div>
                            <!-- radio -->
                         
                          
                    <div class="form-group">
                      <label>Mot de passe:</label>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" />
                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-key"></i></div>
                            </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                      <label>Confirmer Mot de passe:</label>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror " name="password_confirmation"/>
                            <div class="input-group-append">
                                <div class="input-group-text"><i class="fa fa-key"></i></div>
                            </div>
                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <!-- /.card-body -->

                  </div>
              
                </div>
                <!-- /.col (right) -->
            </div>
            </div>
            <div class=" login-btm login-button" style="text-align: center">
                <button type="submit" class="btn btn-outline-primary">Inscrit</button>
            </div>
      </form>
      </section>


       
        <style>

.btn-outline-primary {
   
    border-color: #014463;
    color: #0FAC6D;
    width: 55%;
    font-weight: bold;
    letter-spacing: 1px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
}

.btn-outline-primary:hover {
    background-color: #d98b37;
    right: 0px;
}

.login-btm {
   
    text-align: center;
}

.login-button {
    padding-right: 0px;
    text-align: right;
    margin-bottom: 25px;
}

.login-text {
    text-align: left;
    padding-left: 0px;
    color: #A2A4A4;
}

.loginbttm {
    padding: 0px;
}
        </style>
@endsection
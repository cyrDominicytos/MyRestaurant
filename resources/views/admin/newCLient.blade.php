@extends('admin.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Advanced Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Advanced Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Input masks</h3>
                </div>
                <div class="card-body">
                 
                  <div class="form-group">
                    <label>Nom:</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-user"></i></span>
                      </div>
                      <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                    </div>
                
                  </div>

  
                  <!-- Date mm/dd/yyyy -->
                  <div class="form-group">
                    <label>Prénom:</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-user"></i></span>
                      </div>
                      <input type="text" class="form-control" >
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
                      <input type="tel" class="form-control" >
                    </div>
                    <!-- /.input group -->
                  </div>
                 
                  <div class="form-group">
                    <label>Adresse Email:</label>
  
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                      </div>
                      <input type="email" class="form-control" >
                    </div>
                  
                  </div>
                  <!-- /.form group -->

                  <div class="form-group">
                    <label>Provenance:</label>
  
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-home"></i></span>
                      </div>
                      <input type="text" class="form-control" >
                    </div>
                  
                  </div>

                  <div class="form-group">
                    <label>Adresse:</label>
  
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-home"></i></span>
                      </div>
                      <input type="text" class="form-control" >
                    </div>
                  
                  </div>

                </div>
                <!-- /.card-body -->
              </div>
            </div>
            <!-- /.col (left) -->
            <div class="col-md-6">
              <div class="card ">
                <div class="card-header">
                  <h3 class="card-title">Date picker</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Profession:</label>
                          <div class="input-group date" id="reservationdate" data-target-input="nearest">
                              <input type="text" class="form-control datetimepicker-input" />
                              <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                  <div class="input-group-text"><i class="fa fa-user"></i></div>
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                        <label>Date de Naissance:</label>
                        <div class="input-group">  
                          <input type="date" class="form-control" >
                        </div>
                      
                      </div>
                      
                        <!-- radio -->
                        <div class="form-group ">
                          
                          <div class="icheck-primary d-inline">
                            <input type="radio" id="radioPrimary1" name="r1" checked>
                            <label for="radioPrimary1">
                                Homme
                            </label>
                          </div>
                          <div class="icheck-primary d-inline">
                            <input type="radio" id="radioPrimary2" name="r1">
                            <label for="radioPrimary2">
                              Femme
                            </label>
                          </div>
                          
                        </div>
                        <div class="form-group">
                            <label>Choisisez Role</label>
                            <select class="form-control select2" style="width: 100%;">
                              <option selected="selected">Gérant</option>
                              <option>Comptable</option>
                              <option>Chef cuisiner</option>
                              <option>Caisier</option>
                              <option>Serveur</option>
                              <option>Nettoyeur</option>
                            
                            </select>
                          </div>
                        <div class="form-group">
                            <label>Mot de passe:</label>
                              <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                  <input type="password" class="form-control datetimepicker-input" />
                                  <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                      <div class="input-group-text"><i class="fa fa-key"></i></div>
                                  </div>
                              </div>
                          </div>
                          <div class="form-group">
                            <label>Confirmer Mot de passe:</label>
                              <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                  <input type="password" class="form-control datetimepicker-input" />
                                  <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                      <div class="input-group-text"><i class="fa fa-key"></i></div>
                                  </div>
                              </div>
                          </div>
       
                </div>
                  <div class="card-footer">
                    <a href="https://getdatepicker.com/5-4/">  Appuyer pour modifier les fonctionnalités</a>
                  </div>
                <!-- /.card-body -->
              </div>
           
            </div>
            <!-- /.col (right) -->
        </div>
        </div>
       
      </section>
        <div class=" login-btm login-button" style="text-align: center">
            <a href="{{route('admin')}}"  class="btn btn-outline-primary">Inscrit</a>
        </div>
        <style>

.btn-outline-primary {
    border-color: #0DB8DE;
    color: #0DB8DE;
    border-radius: 0px;
    font-weight: bold;
    letter-spacing: 1px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
}

.btn-outline-primary:hover {
    background-color: #0DB8DE;
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
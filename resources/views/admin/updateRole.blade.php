@extends('admin.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <style>
   
  </style>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
     
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="color:#0FAC6D;  font-family: 'Roboto', sans-serif; font-weight:bold;text-align:center;margin-top:30px">Creer Role</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Creer Role</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
      
                <div class="card-body">
                    
                     
                   
                        
                        <div class="form-group">
                          <label>Designation du role:</label>
                          <div class="input-group">
                            <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                          </div>
                      
                        </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Fonction</label>
                        <div class="input-group date">
                         <div class="selectBox" onclick="showCheckboxes()">
                             <select class="form-control select2" >
                               <option>Selectionner fonctionnalités</option>
                             </select>
                             <div class="overSelect"></div>
                           </div>
                           <div id="checkboxes" >
                             <label for="module" style="margin-left: 25px">
                                 <input type="checkbox" id="one" /> Comptable</label>
                             <label for="one" style="margin-left: 55px">
                               <input type="checkbox" id="one" /> Payer un fournisseur</label>
                             <label for="two" style="margin-left: 55px">
                               <input type="checkbox" id="two" /> Facturer une commande</label>
                             <label for="three" style="margin-left: 55px">
                               <input type="checkbox" id="three" /> Faire le point</label>
                           </div>
                          
                        </div>
                    </div>
            
           
          
        <div class=" login-btm login-button" style="text-align: center">
            <a href="{{route('admin')}}"  class="btn btn-outline-primary">Enregistrer le role</a>
        </div>
      </section>
       
        <style>

.selectBox {
  position: relative;
}

.selectBox select {
  width: 100%;
  font-weight: bold;
}

.overSelect {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
}

#checkboxes {
  display: none;
  border: 1px #dadada solid;
}

#checkboxes label {
  display: block;
}



.btn-outline-primary {
   
    border-color: #0DB8DE;
    color: #0FAC6D;
    width: 55%;
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

        <script>
              var expanded = false;

function showCheckboxes() {
  var checkboxes = document.getElementById("checkboxes");
  if (!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
  } else {
    checkboxes.style.display = "none";
    expanded = false;
  }
}
        </script>
@endsection
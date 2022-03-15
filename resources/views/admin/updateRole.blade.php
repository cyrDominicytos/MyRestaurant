@extends('admin.layout.mail')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  
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
                     <div class="row">
                        <div class="form-group col-md-6">
                          <label>Designation du role:</label>
                          <div class="input-group">
                            <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                          </div>
                        </div>
                        <div class="form-group col-md-6">
                          <label>Blog du role:</label>
                          <div class="input-group">
                            <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                          </div>
                        </div>
                     </div>
                     <div class="form-group ">
                      <label>Description:</label>
                      <div class="input-group">
                        <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                          <button class="accordion"> <i class="fa fa-plus"></i> Comptable</button>
                        <div class="panel">
                          <label for="module" style="margin-left: 15px">
                            <input type="checkbox" id="one" /> Facturer </label>
                          <label for="module" style="margin-left: 25px">
                            <input type="checkbox" id="one" /> Fait le point de la journéé</label>
                          <label for="module" style="margin-left: 15px">
                              <input type="checkbox" id="one" /> Satisfaire</label>
                        </div>
                    </div>
                    
                      </div>
                    </div>
                    
                  </div>     
            
        <div class=" login-btm login-button" style="text-align: center">
            <a href="{{route('admin')}}"  class="btn btn-outline-primary">Enregistrer le role</a>
        </div>
      </section>
       
  <link rel="stylesheet" href="{{asset('css/newrole.css')}}">

        <script>
              // var expanded = false;

// function showCheckboxes() {
//   var checkboxes = document.getElementById("checkboxes1");
 
//   if (!expanded) {
//     checkboxes.style.display = "block";
//     expanded = true;
//   } else {
//     checkboxes.style.display = "none";
//     expanded = false;
//   }
// }

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}

        </script>
@endsection
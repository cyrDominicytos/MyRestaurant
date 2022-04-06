@extends('admin.layout.mail')
@section('content')
<link rel="stylesheet" href="{{asset('dist/css/slide.css')}}">
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 style="color:#014463; margin-top:25px; font-family: 'Roboto', sans-serif; font-weight:bold;text-align:center;">Commande</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Accueil</a></li>
          <li class="breadcrumb-item active">Creer une commande</li>
        </ol>
      </div>
    </div>
 
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
              <div class="col-md-1">

              </div>
            <!-- center column -->
            <div class="col-md-10">
              <!-- general form elements -->
              <div class="card card-danger">
                <div class="card-header" style="background-color: #014463">
                  <h3 class="card-title"></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="" method="post" enctype="multipart/form-data">
                  @csrf

                  <div class="card-body">
                    <div class="form-group">
                        <label>Choissisez met</label>
                        <select class="form-control custom-select" name="categorie_met_id" required>
                          <option value="">Atchèkè</option>
                          <option value="">Amala</option>
                        </select>
                      </div>
                    <div class="row">
                        <div class="col-sm-6">
                         <div class="form-group">
                            <label>Nom </label>
                            <input type="text" class="form-control @error('met_price') is-invalid @enderror " name="met_price" placeholder=""  value="{{ isset($met) ? $met->met_price : old('met_price') }}"  required>
                          </div>
                        </div>
                       
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Prénom </label>
                                <input type="text" class="form-control @error('met_price') is-invalid @enderror " name="met_price" placeholder=""  value="{{ isset($met) ? $met->met_price : old('met_price') }}"  required>
                              </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-6">
                         <div class="form-group">
                            <label>Email </label>
                            <input type="email" class="form-control @error('met_price') is-invalid @enderror " name="met_price" placeholder=""  value="{{ isset($met) ? $met->met_price : old('met_price') }}"  required>
                          </div>
                        </div>
                       
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Numéro </label>
                                <input type="text" class="form-control @error('met_price') is-invalid @enderror " name="met_price" placeholder=""  value="{{ isset($met) ? $met->met_price : old('met_price') }}"  required>
                              </div>
                        </div>
                     </div>


                     <p id="togg1" style="cursor: pointer; color:#014463;font-weight:bold">Je demande une livraison !</p>
                  
                    <div id="d1" style="display: none">
                        <div class="form-group">
                            <label>Date et Heure de Recuperation</label>
                            <input type="datetime-local" class="form-control @error('met_price') is-invalid @enderror " name="met_price" placeholder=""  value="{{ isset($met) ? $met->met_price : old('met_price') }}"  required>
                        
                          </div>
                       
                        <div class="row">
                            <div class="col-sm-6">
                             <div class="form-group">
                                <label>Ville</label>
                                <input type="text" class="form-control @error('met_price') is-invalid @enderror " name="met_price" placeholder=""  value="{{ isset($met) ? $met->met_price : old('met_price') }}"  required>
                              </div>
                            </div>
                           
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Quartier </label>
                                    <input type="text" class="form-control @error('met_price') is-invalid @enderror " name="met_price" placeholder=""  value="{{ isset($met) ? $met->met_price : old('met_price') }}"  required>
                                  </div>
                            </div>
                         </div>
                         <div class="row">
                            <div class="col-sm-6">
                             <div class="form-group">
                                <label>Numéro et Rue </label>
                                <input type="text" class="form-control @error('met_price') is-invalid @enderror " name="met_price" placeholder=""  value="{{ isset($met) ? $met->met_price : old('met_price') }}"  required>
                              </div>
                            </div>
                           
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Commentaire </label>
                                    <input type="text" class="form-control @error('met_price') is-invalid @enderror " name="met_price" placeholder="Information supplémentaire"  value="{{ isset($met) ? $met->met_price : old('met_price') }}"  required>
                                  </div>
                            </div>
                         </div>
                    </div>
               
                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                        <button type="submit" class="btn btn-info" style="background-color: #014463">Commander Maintenant</button>
                 
                  </div>
                </form>
              </div>
              <!-- /.card -->
            </div>

            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-1"> 
            </div>
            <!--/.col (right) -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
<script>
let togg1 = document.getElementById("togg1");
let d1 = document.getElementById("d1");
togg1.addEventListener("click", () => {
if(getComputedStyle(d1).display != "none"){
    d1.style.display = "none";
} else {
    d1.style.display = "block";
}
})

      </script>
@endsection
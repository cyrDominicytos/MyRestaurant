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
                        <label>Choissisez client</label>
                        <select class="form-control custom-select" name="categorie_met_id" required>
                          <option value="">Moufid</option>
                          <option value="">Trick</option>
                        </select>
                      </div>
                       <div class="form-group">
                        <label>Vous étes sur quelle table</label>
                        <select class="form-control custom-select" name="categorie_met_id" required>
                          <option value="">Table 01</option>
                          <option value="">Table 02</option>
                        </select>
                      </div>
                      
                    <div class="row">
                        <div class="col-sm-4">
                         <div class="form-group">
                            <label>Selectionner category</label>
                            <select class="form-control custom-select" id="category" name="categorie_met_id" required>
                            <option value="1">Vitamine</option>
                            <option value="2">Graisse</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-group">
                            <label>Selectionner mets</label>
                            <select class="form-control custom-select" id="food" name="categorie_met_id" required>
                            <option value="1">Atchèkè</option>
                            <option value="2">Amala</option>
                            </select>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-group">
                          <label>Quantité </label>
                          <input type="number" id="quantity" placeholder=" 01" class="form-control @error('met_price') is-invalid @enderror " name="met_price" placeholder=""  value="{{ isset($met) ? $met->met_price : old('met_price') }}"  required>
                        </div>
                      </div>
                    </div>
                    {{-- Toggle Button --}}
                    <ul>
                      <li><label>Appliqué frais de reduction</label></li>
                      <li> <label class="switch"><input type="checkbox"><span class="slider round hide-off"></a></span></label>
                      </li>
                    </ul>
                
                  <div class="hideme" style="display: none">
                    <div class="row">
                      <div class="col-sm-6">
                       <div class="form-group">
                          <label>Valeur de Reduction en %</label>
                          <input type="number" id="reduct_pourc" class="form-control @error('met_price') is-invalid @enderror " name="met_price" placeholder=""  value="{{ isset($met) ? $met->met_price : old('met_price') }}"  required>
                        </div>
                      </div>
                     
                      <div class="col-sm-6">
                          <div class="form-group">
                              <label>Valeur de Reduction en Prix  </label>
                              <input type="number" id="reduct_price" class="form-control @error('met_price') is-invalid @enderror " name="met_price" placeholder=""  value="{{ isset($met) ? $met->met_price : old('met_price') }}"  required>
                            </div>
                      </div>
                   </div>
                  </div>

                  <div class="text-center">
                    <a id="get" href="#" class="btn btn-sm btn-primary">Ajouter cet aux commandes</a> 
                  </div>
                   
                  <table id="kt_table_users" class="table table-bordered table-striped mt-4 mb-4">
                    <thead>
                    <tr style="color: #014463">
                      <th>Type de Mets</th>
                      <th>Mets</th>
                      <th>Quantité</th>
                      <th>Reduction</th>
                      <th>Net a payé</th>
                      <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                   
                    </tbody>
                 
                  </table>

                  <div class="row">
                    <div class="col-sm-4">
                     <div class="form-group">
                      <label>Total sans remise sur facture </label>
                      <input type="text" id="quantity" disabled  class="form-control @error('met_price') is-invalid @enderror " name="met_price" placeholder=""  value="25500f"  required>
                   </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Total remise accordé </label>
                      <input type="text" id="quantity" disabled placeholder=" 01" class="form-control @error('met_price') is-invalid @enderror " name="met_price" placeholder=""  value="25000f"  required>
                   </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Montant à payer à la caisse </label>
                      <input type="text" id="quantity" disabled placeholder=" 01" class="form-control @error('met_price') is-invalid @enderror " name="met_price" placeholder=""  value="55000f"  required>
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
                                <input type="text" class="form-control @error('met_price') is-invalid @enderror "  name="met_price" placeholder=""  value="{{ isset($met) ? $met->met_price : old('met_price') }}"  required>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" ></script>
{{--  
Toglle Button Script --}}

<script>
$(document).ready(function(){
  $(".switch input").on("change", function(e) {
    const isOn = e.currentTarget.checked;

    if (isOn) {
      $(".hideme").show();
       
    } else {
      $(".hideme").hide();
    }
  });
});
</script>

{{-- Table Generate script --}}

    <!-- /.container-fluid -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>  
 <script>

   var tableResult = [];
   var category = document.getElementById('category');
   var food = document.getElementById('food');
   var quantity = document.getElementById('quantity');
   var reduct_pourc = document.getElementById('reduct_pourc');
   var reduct_price = document.getElementById('reduct_price');
   var table =  document.getElementById('kt_table_users');
   var SaveData = [];

  $(document).on('click','#get', function(){
      var Index = food.value + category.value;
      var labelFood = food.options[food.selectedIndex].label;
      var labelCategory = category.options[category.selectedIndex].label;
      var labelquantity = quantity.value;
      var labelreduct_pourc = reduct_pourc.value;
      var labelreduct_price = reduct_price.value;
      var MonTableau = [labelCategory, labelFood,labelquantity,labelreduct_pourc];

      console.log(MonTableau);
    
      if (!SaveData.includes(Index)){
        //Row in exits

        var html = '';
          html += '<tr ">';
          html += '<td class="text-gray" hidden><input type="text" required id="food[]" name="food[]" class="form-control" hidden  value='+food.value+'>'+Index+'</td>';
          html += '<td ">'+MonTableau[0]+'</td>';
          html += '<td ">'+MonTableau[1]+'</td>';
          html += '<td ">'+MonTableau[2]+'</td>';
          html += '<td ">'+MonTableau[3]+'</td>';
          html += '<td ">'+25000+'</td>';
          html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove" id="'+Index+'"><span class="fa fa-trash"></span></button></td></tr>';
          $('#kt_table_users').append(html);
          SaveData[SaveData.length]=Index;
      }
  });


  $(document).on('click', '.remove', function(){
      var row_index =$(this).closest("tr").index();
      var rowId =  $(this).attr("id");
      SaveData.splice(row_index, 1);
      $(this).closest('tr').remove();
  });
  </script> 

@endsection
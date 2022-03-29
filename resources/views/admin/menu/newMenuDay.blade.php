@extends('admin.layout.mail')
@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">    
                <h3 class="card-title" style="color: #014463; font-size:25px;font-weight:bold">Creer Menu du jour</h3>      
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Creer Menu du jour</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
               
                <table  class="table table-bordered table-striped">
                  <thead style="background-color: #014463">
                  <tr style="color: #ffffff">
                    <th>Nom Mets</th>
                    <th>Type</th>
                    <th>Jour</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td> 
                        <div class="form-group">
                            <div class="input-group date">
                                <select class="form-control supplies_sales_options_id" id="food" style="width: 50%;" name="role">
                                  @foreach ($mets as $met)
                                  <option value="{{ $met->met_id }}">{{ $met->met_name }}</option>
                                  @endforeach
                                </select>
                          </div>
                       </div>  
                      </td>
                      <td> 
                        <div class="form-group">
                          <div class="input-group date">
                              <select class="form-control select2" id="type" style="width: 50%;" name="role">
                                @foreach (metType() as $index =>$metType)
                                <option value="{{ $index }}">{{ $metType }}</option>
                                @endforeach
                              </select>
                        </div>
                     </div>  
                      </td>
                      <td> 
                        <div class="form-group">
                          <div class="input-group date">
                              <select class="form-control select2" id="day" style="width: 50%;" name="role">
                                @foreach (metJour() as $index =>$day)
                                <option value="{{ $index }}">{{ $day }}</option>
                                @endforeach
                              </select>
                        </div>
                     </div>  
                      </td>
                    
                    </tr>
                </tbody>
                   
                </table>
                <input id="get" style="float: right; margin-top:15px;background-color:#014463;border:#014463"  class="btn btn-danger" type="button" value="Ajouter" />
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
         
          {{-- Tableau de sauvegarde --}}

          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-header">
                <h3 class="card-title">Elément Ajouter</h3>
              </div>
              <div class="card-body">
                <form action="" >
                  @csrf
                <table  class="table table-bordered table-striped" id="kt_table_users">
                  <thead style="background-color: rgb(8, 148, 3)">
                  <tr style="color: #ffffff">
                    <th>Nom Mets</th>
                    <th>Type</th>
                    <th>Jour</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                     
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
            <input  id="sauvegarde" style="margin-left:35%; margin-right:auto;  width:30%" class="btn btn-success" type="button" value="Sauvegarder" />
         </form> 
          {{-- Fin Tableau --}}
        </div>
        <!-- /.row -->

      </div>
      <!-- /.container-fluid -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>  
   <script>

     var tableResult = [];
     var food = document.getElementById('food');
     var type = document.getElementById('type');
     var day = document.getElementById('day');
     var table =  document.getElementById('kt_table_users');
     var SaveData = [];
 
    $(document).on('click','#get', function(){
        var Index = food.value + type.value + day.value;
        var labelFood = food.options[food.selectedIndex].label;
        var labelType = type.options[type.selectedIndex].label;
        var labelDay = day.options[day.selectedIndex].label;
        var MonTableau = [labelFood, labelType, labelDay];
      
        if (!SaveData.includes(Index)){
          //Row in exits

          var html = '';
            html += '<tr ">';
            html += '<td class="text-gray" hidden><input type="text" required id="food[]" name="food[]" hidden  value='+Index+'>'+Index+'</td>'
            // html += '<td ">'+MonTableau[0]+'</td>';
            html += '<td ">'+MonTableau[0]+'</td>';
            html += '<td ">'+MonTableau[1]+'</td>';
            html += '<td ">'+MonTableau[2]+'</td>';
            html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove" id="'+Index+'"><span class="fa fa-trash"></span></button></td></tr>';
            $('#kt_table_users').append(html);
            tableResult[Index]=[MonTableau[0],MonTableau[1],MonTableau[2]];
            console.log(tableResult,Index);
            SaveData[SaveData.length]=Index;
        }
     return tableResult;
    });


    $(document).on('click', '.remove', function(){
        var row_index =$(this).closest("tr").index();
        var rowId =  $(this).attr("id");
        tableResult.splice(rowId, 1);
        SaveData.splice(row_index, 1);
        $(this).closest('tr').remove();
    });

   $(document).on("click","#sauvegarde",function(e) {
        e.preventDefault();
        if(tableResult.length!=0){
          console.log(tableResult);
        }
        else{
          console.log("veuillez selectionnez un menu");
        }
        });

    </script>  
@endsection
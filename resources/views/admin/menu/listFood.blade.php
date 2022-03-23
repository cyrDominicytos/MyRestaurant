@extends('admin.layout.mail')
@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">    
                <h3 class="card-title" style="color: #014463; font-size:25px;font-weight:bold">Liste des Mets</h3>      
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Liste des Mets</li>
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
                  <table id="example2" class="table table-bordered table-striped">
                    <thead style="background-color: rgb(216, 44, 44)">
                    <tr style="color: #ffffff">
                      <th>Mets ID</th>
                      <th>Nom Mets</th>
                      <th>Catégories</th>
                      <th>Status</th>
                      <th>Prix</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                        <tr>
                          <td>015</td>
                          <td>Amala</td>
                          <td> Matières grasses </td>
                          <td><span class="right badge badge-success">En stock</span></td>
                          <td>5000f </td>
                        </tr>
                      
                    </tbody>
                   
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
     
@endsection
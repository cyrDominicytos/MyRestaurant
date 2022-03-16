@extends('admin.layout.mail')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
      
                <h3 class="card-title" style="color: #014463; font-size:25px;font-weight:bold">Liste de employers dans votre restaurant</h3>
             
         
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Liste des employers</li>
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
                  <table id="" class="table table-bordered table-striped">
                    <thead>
                    <tr style="color: #014463">
                      <th>N°</th>
                      <th>Nom et Prénom</th>
                      <th>Adresse Email</th>
                      <th>Numéro</th>
                      <th>Role</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>DAOUDA Moufid</td>
                        <td>mfiddaoud@gmail.com</td>
                        <td>96911842</td>
                        <td>Boss</td>
                        <td>
                          <div class="nav-item dropdown">
                            <a  class="nav-link" type="button"   aria-expanded="false" data-toggle="dropdown"><i class="fa fa-cogs" style="color: black"></i></a>
                            <div class="dropdown-menu ">
                                <a class="dropdown-item" href="#" style="font-size: 12px;color:green; font-weight:bold"><i class="fa fa-edit" style="margin-right:10px;color:green"></i>Editer</a>
                                <a class="dropdown-item" href="#" style="font-size: 12px;color:red; font-weight:bold"><i class="fa fa-trash" style="margin-right:10px;color:red"></i>Supprimer</a>
                            </div> 
                        </div>
                        
                        </td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>OSSOUNLANAN Patrick</td>
                        <td>osounlanpatrick@gmail.com</td>
                        <td>96911842</td>
                        <td>Petit</td>
                        <td>
                          <div class="nav-item dropdown">
                            <a  class="nav-link" type="button"   aria-expanded="false" data-toggle="dropdown"><i class="fa fa-cogs" style="color: black"></i></a>
                            <div class="dropdown-menu ">
                                <a class="dropdown-item" href="#" style="font-size: 12px;color:green; font-weight:bold"><i class="fa fa-edit" style="margin-right:10px;color:green"></i>Editer</a>
                                <a class="dropdown-item" href="#" style="font-size: 12px;color:red; font-weight:bold"><i class="fa fa-trash" style="margin-right:10px;color:red"></i>Supprimer</a>
                            </div> 
                        </div>
                        
                        </td>
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
      </section>
</div>
@endsection
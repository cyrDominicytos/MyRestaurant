@extends('admin.layout.mail')
@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">    
                <h3 class="card-title" style="color: #014463; font-size:25px;font-weight:bold">Liste des Commande</h3>      
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Liste des commandes</li>
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
                  <thead>
                  <tr style="color: #014463">
                    <th>N°</th>
                    <th>Commande de</th>
                    <th>Date et Heure</th>
                    <th>Nombre de Mets</th>
                    <th>Montant Total</th>
                    <th>Statut</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                      <tr>
                        <td>01_2022</td>
                        <td>Mfid DAOUDA</td>
                        <td>22/12/2022 à 15h05</td>
                        <td>05</td>
                        <td>25000f</td>
                        <td> 
                            <small class="badge badge-warning"> En attente</small>
                           
                        </td>
                        <td>
                          <div class="nav-item dropdown">
                            <a  class="nav-link" type="button"   aria-expanded="false" data-toggle="dropdown"><i class="fa fa-cogs" style="color: black"></i></a>
                            <div class="dropdown-menu ">
                                <a class="dropdown-item" href="#" data-toggle="modal" style="font-size: 12px;color:green; font-weight:bold"><i class="fa fa-user" style="margin-right:10px;color:green"></i>Traiter</a>
                                <a class="dropdown-item" href="" style="font-size: 12px;color:green; font-weight:bold"><i class="fa fa-comment-dollar" style="margin-right:10px;color:green"></i>Modifier</a>
                                <a class="dropdown-item "  style="font-size: 12px;color:red; font-weight:bold"><i class="fa fa-trash" style="margin-right:10px;color:red"></i>Supprimer</a>
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
     @include('admin.layout.modal.modalFormsCommand')
 
     
@endsection
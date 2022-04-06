@extends('admin.layout.mail')
@section('content')
<link rel="stylesheet" href="{{asset('dist/css/alt/ListMenu.css')}}">
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
    <main>
        <div class="card-footer">
            <form action="#" method="post">
                <div class="input-group">
                    <input type="text" name="message" placeholder="Rechercher Commande..." class="form-control">
                    <span class="input-group-append">
                        <button type="button" class="btn btn-primary">Rechercher</button>
                    </span>
                </div>
            </form>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    
                </div>
            </div>
        </div>
    </main>
     {{-- @include('admin.layout.modalDeleteFood') --}}
@endsection
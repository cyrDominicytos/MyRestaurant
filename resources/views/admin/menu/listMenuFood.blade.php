@extends('admin.layout.mail')
@section('content')
<link rel="stylesheet" href="{{asset('dist/css/alt/ListMenu.css')}}">
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
    <main>
        <div class="container-fluid bg-trasparent my-4 p-3" style="position: relative;">
          @if (count($foods)!=null)
            <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
              @foreach ($foods as $food)
                <div class="col">
                    <div class="card h-100 shadow-sm"> <img src="{{ Storage::url($food->met_image)}}" class="card-img-top" alt="...">
                      @if (status($food->met_status)=="En Stock")
                        <div class="label-success shadow-sm">{{ status($food->met_status) }}</div>
                      @else
                        <div class="label-danger shadow-sm">{{ status($food->met_status) }}</div>
                      @endif
                        <div class="card-body">
                            <div class="clearfix "> <span class="float-start card-title">{{ $food->met_name }}</span> <span class="float-end badge rounded-pill bg-success mb-3" style="float: right;"><a href="#" class=" text-muted">{{ $food->met_price }} FCFA</a></span></div>
                            <h5 class="card-text" style="margin-bottom: 25px">{{ $food->met_description }}</h5>
                            <div class="row" >
                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <a class="deletebtn" href="#myModalLock" data-toggle="modal" >Supprimer</a>
                                  </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <a class="editbtn" href="{{ route('edit_Food',$food->met_id) }}" >Modifier</a>
                                      </div>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @else
            <div class="alert alert-info">Aucun Menu disponible</div>
            @endif
        </div>
    </main>
     @include('admin.layout.modalDeleteFood')
@endsection
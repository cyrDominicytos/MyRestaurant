@extends('admin.layout.mail')
@section('content')
<link rel="stylesheet" href="{{asset('dist/css/slide.css')}}">
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 style="color:#014463; margin-top:25px; font-family: 'Roboto', sans-serif; font-weight:bold;text-align:center;">Reservation</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Accueil</a></li>
          <li class="breadcrumb-item active">Reservation</li>
        </ol>
      </div>
    </div>
 
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="card card-info">
                <div class="card-header" style="background:url('{{asset('dist/img/Reservationimg.png')}}');">
                  <h3 class="card-title"></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="card-body">
                 
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Type de Reservation</label>
                                <select class="form-control custom-select" name="categorie_met_id" required>
                                  <option value="">VIP</option>
                                  <option value="">Standard</option>
                                </select>
                              </div>
                        </div>
                       
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Nombre de Personnes</label>
                            <select class="form-control custom-select" name="met_status" id="met_status" required>
                              <option value="">2</option>
                              <option value="">3</option>
                            </select>
                          </div>
                        </div>
                      </div>
                     
                   
                        <div class="form-group">
                          <label>Date et Heure </label>
                          <input type="datetime-local" class="form-control @error('met_price') is-invalid @enderror " name="met_price" placeholder="Enter le prix du mets"  value="{{ isset($met) ? $met->met_price : old('met_price') }}"  required>
                      
                        </div>
                     

                    <div class="form-group">
                      <label for="inputMessage">Details</label>
                        <textarea  class="form-control @error('met_description') is-invalid @enderror" name="met_description" rows="4" placeholder="Details supplémentaire "  required>{{ isset($met) ? $met->met_description : old('met_description') }}</textarea>
                      
                    </div>
                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                        <button type="submit" class="btn btn-info">Reserver</button>
                 
                  </div>
                </form>
              </div>
              <!-- /.card -->
            </div>

            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">
      
              <!-- Form Element sizes -->
              <div class="card ">
                <div class="card-header">
                  <h3 class="card-title"></h3>
                </div>
                <div class="card-body mx-auto" >
                    <div class="carousel slide" data-ride="carousel">
                       
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset('dist/img/reservation-la-gi_1.jpg')}}" class="img-fluid" alt="">
                            </div>
                         					
                        </div>
                     
                    </div>
    
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card --> 
            </div>
            <!--/.col (right) -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->

@endsection
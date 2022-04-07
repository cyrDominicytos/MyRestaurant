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
                <form action="{{ route('createReservation') }}" method="POST">
                  @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label>Nom du client</label>
                      <select class="form-control custom-select" name="reservation_user_id" required>
                        @foreach ($users as $user)
                          <option value="{{ $user->id }}">{{ $user->lastname }} {{ $user->firstname }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Type de Reservation</label>
                                <select class="form-control custom-select" name="reservation_type" required>
                                  <option value="VIP">VIP</option>
                                  <option value="Standard">Standard</option>
                                </select>
                              </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Nombre de Personnes</label>
                            <input type="number" class="form-control @error('reservation_people') is-invalid @enderror " name="reservation_people" placeholder="Nombre de personnes" value="{{ old('reservation_people') }}"required>
                            @error('reservation_people')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                          </div>
                        </div>
                    </div>
                      <div class="form-group">
                        <label>Date et Heure </label>
                        <input type="datetime-local" class="form-control @error('reservation_days') is-invalid @enderror " name="reservation_days" placeholder="Enter le prix du mets"  value="{{  old('reservation_days') }}"  required>
                        @error('reservation_days')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                      <div class="form-group">
                      <label for="inputMessage">Details</label>
                        <textarea  class="form-control @error('reservation_datail') is-invalid @enderror" name="reservation_datail" rows="4" placeholder="Details supplémentaire "  required>{{  old('reservation_datail') }}</textarea>
                        @error('reservation_datail')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
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
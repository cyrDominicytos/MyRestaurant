@extends('admin.layout.mail')
@section('content')
<link rel="stylesheet" href="{{asset('dist/css/slide.css')}}">
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 style="color:#014463; margin-top:25px; font-family: 'Roboto', sans-serif; font-weight:bold;text-align:center;">Ajouter Nouveau Mets</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Nouveau Met</li>
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
                <div class="card-header" style="background:url('{{asset('dist/img/add-product-1.jpg')}}');">
                  <h3 class="card-title"></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action=" {{ isset($met) ? route('update_Food',$met->met_id) : route('create_Food') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nom </label>
                      <input type="text" class="form-control @error('met_name') is-invalid @enderror " name="met_name" id="exampleInputEmail1" placeholder="Enter le nom du mets" value="{{isset($met) ? $met->met_name : old('met_name') }}" required>
                      @error('met_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                          <!-- text input -->
                          <div class="form-group">
                            <label>Prix </label>
                            <input type="text" class="form-control @error('met_price') is-invalid @enderror " name="met_price" placeholder="Enter le prix du mets"  value="{{ isset($met) ? $met->met_price : old('met_price') }}"  required>
                            @error('met_price')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Status</label>
                            <select class="form-control custom-select" name="met_status" id="met_status" required>
                              @if(isset($met))
                              <option value="{{ $met->met_status }}">{{ status($met->met_status)  }}</option>
                              @endif
                              @foreach (status() as $index =>$status)
                                <option value="{{ $index }}">{{ $status  }}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Type</label>
                            <select class="form-control custom-select" name="met_type" required>
                              @if(isset($met))
                              <option value="{{ $met->met_type }}">{{ metType($met->met_type) }}</option>
                              @endif
                              @foreach (metType() as $index =>$type)
                                  <option value="{{ $index }}">{{ $type }}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Categories</label>
                                <select class="form-control custom-select" name="categorie_met_id" required>
                                  @if(isset($met))
                                  <option value="{{ $met->met_categorie_id}}">{{ $met->met_categorie_name }}</option>
                                  @endif
                                  @foreach ($category as $cat)
                                      <option value="{{ $cat->met_categorie_id}}">{{ $cat->met_categorie_name }}</option>
                                  @endforeach
                                </select>
                              </div>
                        </div>
                      </div>

                     
                    <div class="form-group">
                      <label for="exampleInputFile">Image Mets</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="form-control custom-file-input @error('met_image') is-invalid @enderror" id="exampleInputFile" name="met_image" value="{{ isset($met) ? $met->met_image : old('met_image') }}">
                          @error('met_image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                          <label class="custom-file-label" for="exampleInputFile"> Selectionner Image </label>

                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control @error('met_description') is-invalid @enderror" rows="3" placeholder="Decriver votre Mets." name="met_description"  required> {{  isset($met) ? $met->met_description : old('met_description') }}</textarea>
                        @error('met_description')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    @if(isset($met))
                        <button type="submit" class="btn btn-info">Modifer</button>
                    @else
                        <button type="submit" class="btn btn-info">Enregistrer</button>
                    @endif
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
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Carousel indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                        </ol>   
                        <!-- Wrapper for carousel items -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset('dist/img/add-product-2.jpg')}}" class="img-fluid" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('dist/img/add-product4.jpeg')}}" class="img-fluid" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('dist/img/add-product-3.jpg')}}" class="img-fluid" alt="">
                            </div>	
                            <div class="carousel-item">
                                <img src="{{asset('dist/img/add-product5.jpg')}}" class="img-fluid" alt="">
                            </div>					
                        </div>
                        <!-- Carousel controls -->
                        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                            <span><i class="fa fa-angle-left"></i></span>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                            <span><i class="fa fa-angle-right"></i></span>
                        </a>
                    </div>
                 {{-- <img src="{{asset('dist/img/add-product-1.jpg')}}" alt=""> --}}
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
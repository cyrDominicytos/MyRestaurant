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
                <form>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nom </label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter le nom du mets">
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                          <!-- text input -->
                          <div class="form-group">
                            <label>Prix </label>
                            <input type="text" class="form-control" placeholder="Enter le prix du mets">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Status</label>
                            <select class="custom-select">
                                <option>Selectionner status du Mets</option>
                              <option>En stock</option>
                              <option>Pas en stock</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Type</label>
                            <select class="custom-select">
                                <option>Selectionner Type Mets</option>
                              <option>Pétit dejeuner</option>
                              <option>Dejeuner</option>
                              <option>Diner</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Categories</label>
                                <select class="custom-select">
                                  <option>Selectionner Categories Mets</option>
                                  <option>Légumes</option>
                                  <option>Matières Grasse</option>
                                  <option>...</option>
                                </select>
                              </div>
                        </div>
                      </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Image Mets</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Enregistrer l'image de votre mets </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows="3" placeholder="Decriver votre Mets."></textarea>
                      </div>
                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info">Enregistrer</button>
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
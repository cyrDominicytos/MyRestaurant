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
            <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
                <div class="col">
                    <div class="card h-100 shadow-sm"> <img src="{{asset('dist/img/food-2.jpg')}}" class="card-img-top" alt="...">
                        <div class="label-success shadow-sm">Disponible</div>
                        <div class="card-body">
                            <div class="clearfix "> <span class="float-start ">Veggies</span> <span class="float-end badge rounded-pill bg-success mb-3" style="float: right;"><a href="#" class=" text-muted">7500f</a></span> </div>
                            <h5 class="card-title" style="margin-bottom: 25px">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam quidem eaque ut eveniet aut quis rerum. Asperiores accusamus harum ducimus velit odit ut. Saepe, iste optio laudantium sed aliquam sequi.</h5>
                            <div class="row" >
                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <button class="deletebtn" style=" ">Supprimer</button>
                                  </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <button class="editbtn">Modifier</button>
                                      </div>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm"> <img src="{{asset('dist/img/food-3.jpg')}}" class="card-img-top" alt="...">
                        <div class="label-danger shadow-sm">Indisponible</div>
                        <div class="card-body">
                            <div class="clearfix "> <span class="float-start ">Veggies</span> <span class="float-end badge rounded-pill bg-success mb-3" style="float: right;"><a href="#" class=" text-muted">7500f</a></span> </div>
                            <h5 class="card-title" style="margin-bottom: 25px">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam quidem eaque ut eveniet aut quis rerum. Asperiores accusamus harum ducimus velit odit ut. Saepe, iste optio laudantium sed aliquam sequi.</h5>
                            <div class="row" >
                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <button class="deletebtn" style=" ">Supprimer</button>
                                  </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <button class="editbtn">Modifier</button>
                                      </div>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm"> <img src="{{asset('dist/img/food-5.jpg')}}" class="card-img-top" alt="...">
                        <div class="label-danger shadow-sm">Indisponible</div>
                        <div class="card-body">
                            <div class="clearfix "> <span class="float-start ">Veggies</span> <span class="float-end badge rounded-pill bg-success mb-3" style="float: right;"><a href="#" class=" text-muted">7500f</a></span> </div>
                            <h5 class="card-title" style="margin-bottom: 25px">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam quidem eaque ut eveniet aut quis rerum. Asperiores accusamus harum ducimus velit odit ut. Saepe, iste optio laudantium sed aliquam sequi.</h5>
                            <div class="row" >
                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <button class="deletebtn" style=" ">Supprimer</button>
                                  </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <button class="editbtn">Modifier</button>
                                      </div>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm"> <img src="{{asset('dist/img/food-6.jpg')}}" class="card-img-top" alt="...">
                        <div class="label-success shadow-sm">Disponible</div>
                        <div class="card-body">
                            <div class="clearfix "> <span class="float-start ">Veggies</span> <span class="float-end badge rounded-pill bg-success mb-3" style="float: right;"><a href="#" class=" text-muted">7500f</a></span> </div>
                            <h5 class="card-title" style="margin-bottom: 25px">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam quidem eaque ut eveniet aut quis rerum. Asperiores accusamus harum ducimus velit odit ut. Saepe, iste optio laudantium sed aliquam sequi.</h5>
                            <div class="row" >
                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <button class="deletebtn" style=" ">Supprimer</button>
                                  </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <button class="editbtn">Modifier</button>
                                      </div>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
     
@endsection
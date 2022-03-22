@extends('admin.layout.mail')
@section('content')

      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="color:#014463; margin-top:25px; font-family: 'Roboto', sans-serif; font-weight:bold;text-align:center;">Ajouter Catégories Mets</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Categories</li>
            </ol>
          </div>
        </div>
     

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-body row">
          <div class="col-5 text-center  d-flex align-items-center justify-content-center" style="background:url('{{asset('dist/img/add-product-1.jpg')}}');">
           
          </div>
          <div class="col-7">
  
            <form action="" method="get">
                <div class="form-group">
                    <label for="inputSubject">Nom de la Categorie <span style="color: red">*</span></label>
                    <input type="text" id="inputSubject" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label for="inputMessage">Description</label>
                    <textarea id="inputMessage" class="form-control" rows="4"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" class="btn btn-danger" value="Enregistrer la catégorie">
                  </div>
            </form>
          </div>
        </div>
      </div>

    </section>
    <!-- /.content -->
@endsection
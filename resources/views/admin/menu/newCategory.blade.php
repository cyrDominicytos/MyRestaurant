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
  
            <form action="{{ isset($category_met) ? route('edit_category',$category_met->met_categorie_id) : route('create_category') }}" method="POST">
              @csrf
                <div class="form-group">
                    <label for="inputSubject">Nom de la Categorie <span style="color: red">*</span></label>
                    <input type="text"  class="form-control @error('met_categorie_name') is-invalid @enderror " name="met_categorie_name"  placeholder="Nom de la Categorie" name="met_categorie_name" value="{{ isset($category_met) ? $category_met->met_categorie_name: '' }}" required/>
                    @error('met_categorie_name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="inputMessage">Description</label>
                    <textarea  class="form-control @error('met_categorie_description') is-invalid @enderror " name="met_categorie_description" rows="4" placeholder="Description de la categorie"  required>{{ isset($category_met) ? $category_met->met_categorie_description : '' }}</textarea>
                    @error('met_categorie_description')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    @if (isset($category_met))
                      <input type="submit" class="btn btn-success" value="Modifier la catégorie">
                    @else
                      <input type="submit" class="btn btn-danger" value="Enregistrer la catégorie">
                    @endif
                    
                  </div>
            </form>
          </div>
        </div>
      </div>

    </section>
    <!-- /.content -->
@endsection


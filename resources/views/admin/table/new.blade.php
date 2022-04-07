@extends('admin.layout.mail')
@section('content')

  
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
     
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="color:#0FAC6D;  font-family: 'Roboto', sans-serif; font-weight:bold;text-align:center;margin-top:30px">Ajouter Table</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Creer vos Tables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
                <div class="card-body">
                  <form action="{{ route('storeTable') }}" method="POST">  
                    @csrf    
                      <div class="form-group">
                          <label>Numéro de Table*:</label>
                          <div class="input-group">
                            <input type="number" placeholder="Table 01" class="form-control @error('table_number') is-invalid @enderror" name="table_number"  id="role_name" value="{{old('table_number')}}" required >
                            @error('table_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                          </div>
                      </div>
                     <div class="form-group ">
                      <label>Nombre de personne maximal*:</label>
                      <div class="input-group">
                        <input type="number" placeholder="06 Personnes" class="form-control @error('table_number_personne') is-invalid @enderror" name="table_number_personne" value="{{ old('table_number_personne') }}" required>
                        @error('role_description')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                    </div>
                  </div>     
            
        <div class=" login-btm login-button" style="text-align: center">
            <button type="submit" class="btn btn-outline-primary">Enregistrer la table</button>
        </div>
      </form> 
      </section>
       
  <link rel="stylesheet" href="{{asset('css/newrole.css')}}">

@endsection
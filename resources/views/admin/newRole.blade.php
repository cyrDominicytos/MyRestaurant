@extends('admin.layout.mail')
@section('content')

  
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
     
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="color:#0FAC6D;  font-family: 'Roboto', sans-serif; font-weight:bold;text-align:center;margin-top:30px">Ajouter Role</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Creer Role</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
      
                <div class="card-body">
                  <form action="{{ route('createrole') }}" method="post">  
                    @csrf    
                     <div class="row">
                        <div class="form-group col-md-6">
                          <label>Designation du role*:</label>
                          <div class="input-group">
                            <input type="text" class="form-control @error('role_name') is-invalid @enderror" name="role_name"  id="role_name" value="{{old('role_name')}}" required >
                            @error('role_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                          </div>
                        </div>

                
                        <div class="form-group col-md-6">
                          <label>Slug du role*:</label>
                          <div class="input-group">
                            <input type="text" class="form-control @error('role_slug') is-invalid @enderror" name="role_slug" id="role_slug" value="{{ old('role_slug') }}" required>
                            @error('role_slug')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                          </div>
                        </div>

                     </div>
                     <div class="form-group ">
                      <label>Description*:</label>
                      <div class="input-group">
                        <input type="text" class="form-control @error('role_description') is-invalid @enderror" name="role_description" value="{{ old('role_description') }}" required>
                        @error('role_description')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                    </div>


                    <div class="row">
                      @foreach (permissionModule() as $index=>$permission)
                      <div class="col-md-6">
                          <p class="accordion"> <i class="fa fa-plus" style="margin-right:15px"> Module*  {{ ucfirst($index) }}</i> </p>
                          <div class="panel">
                            @foreach ($permission as $perm)
                            <label for="module" style="margin-left: 15px">
                              <input type="checkbox" id="one" name="permission[]" value="{{ $perm->permission_id }}" > {{ $perm->permission_name }} </label>
                            @endforeach
                          </div>
                          
                      </div>
                      @endforeach

                      @if($errors->has('permission'))
                        <div class="error alert-danger" role="alert">{{ $errors->first('permission') }}</div>
                      @endif
                    </div>
                    
                  </div>     
            
        <div class=" login-btm login-button" style="text-align: center">
            <button type="submit" class="btn btn-outline-primary">Enregistrer</button>
        </div>
      </form> 
      </section>
       
  <link rel="stylesheet" href="{{asset('css/newrole.css')}}">

  {{-- jQuery Script --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
{{-- Check Slug --}}
<script>
              // var expanded = false;

// function showCheckboxes() {
//   var checkboxes = document.getElementById("checkboxes1");
 
//   if (!expanded) {
//     checkboxes.style.display = "block";
//     expanded = true;
//   } else {
//     checkboxes.style.display = "none";
//     expanded = false;
//   }
// }

$('#role_name').change(function(e) {
       $.get('{{ url("Admin/check_slug") }}', 
       { 'role_name': $(this).val() }, 
       function( data ) {
         console.log(data);
           $('#role_slug').val(data.slug);
       }
       );
});

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}

</script>
@endsection
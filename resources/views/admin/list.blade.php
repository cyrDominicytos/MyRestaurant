@extends('admin.layout.mail')
@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">  
                <h3 class="card-title" style="color: #014463; font-size:25px;font-weight:bold">Liste de employers dans votre restaurant</h3>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Liste des employers</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
            
              <div class="card">
              
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr style="color: #014463">
                      <th>N°</th>
                      <th>Nom et Prénom</th>
                      <th>Adresse Email</th>
                      <th>Numéro</th>
                      <th>Role</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach ($users as $user)
                        <tr>
                          <td>{{ $user->id }}</td>
                          <td>{{ $user->firstname }} {{ $user->lastname }} </td>
                          <td>{{ $user->email }}</td>
                          <td>{{ $user->phone_number }}</td>
                          <td>{{ $user->role->role_name }}</td>
                          <td>
                            <div class="nav-item dropdown">
                              <a  class="nav-link" type="button"   aria-expanded="false" data-toggle="dropdown"><i class="fa fa-cogs" style="color: black"></i></a>
                              <div class="dropdown-menu ">
                                  <a class="dropdown-item" href="{{ route('user_edit', $user->id) }}" style="font-size: 12px;color:green; font-weight:bold"><i class="fa fa-edit" style="margin-right:10px;color:green"></i>Editer</a>
                                  @if ($user->isbannir)
                                    <a class="dropdown-item" href="{{ route('user_block',['id'=>$user->id,'bannir'=>$user->isbannir]) }}" style="font-size: 12px;color:rgb(49, 105, 189); font-weight:bold"><i class="fa fa-lock" style="margin-right:10px;color:rgb(49, 105, 189)"></i>Bloquer</a> 
                                  @else
                                    <a class="dropdown-item" href="{{ route('user_block',['id'=>$user->id,'bannir'=>$user->isbannir]) }}" style="font-size: 12px;color:rgb(49, 105, 189); font-weight:bold"><i class="fa fa-lock" style="margin-right:10px;color:rgb(189, 49, 159)"></i>Debloquer</i></a> 
                                  @endif
                                  
                                  <a class="dropdown-item" href="{{ route('user_delete',$user->id) }}" style="font-size: 12px;color:red; font-weight:bold"><i class="fa fa-trash" style="margin-right:10px;color:red"></i>Supprimer</a>                                              
                              </div> 
                          </div>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                   
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
</div>
@endsection
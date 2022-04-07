@extends('admin.layout.mail')
@section('content')
<link rel="stylesheet" href="{{asset('dist/css/alt/ListMenu.css')}}">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">    
                <h3 class="card-title" style="color: #014463; font-size:25px;font-weight:bold">Liste des Commande</h3>      
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Liste des commandes</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <main>
        <div class="card-footer">
            <form action="#" method="post">
                <div class="input-group">
                    <input type="text" name="message" placeholder="Rechercher Commande..." class="form-control">
                    <span class="input-group-append">
                        <button type="button" class="btn btn-primary">Rechercher</button>
                    </span>
                </div>
            </form>
        </div>
        {{-- <div class="container">
            <div class="row">
                <div class="col-md-4">
                    
                </div>
            </div>
        </div> --}}
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card card-margin">
                            <h2 class="index">N° 01_2022</h5>
                                <h2 class="">Commande de Moufid DAOUDA</h5>
                        <div class="card-body pt-0">
                            <div class="widget-49">
                                <div class="wrapper">
                                    <div class="date-primary">
                                        <span class="widget-49-date-day">09</span>
                                        <span class="widget-49-date-month">Dec</span>
                                    </div>
                                    <div class="info">
                                        <span class="widget-49-pro-title"><span style="color: #014463; font-weight:bold">Montant Total</span> : 15000f</span>
                                        <span class="widget-49-meeting-time"><br> 12:00 à 13.30 Heure</span>
                                    </div>
                                </div>
                            
                                <span class="widget-49-pro-title" style="margin-right: auto; margin-left:20%"><span style="color: #014463; font-weight:bold">Nombre de Mets</span> : 3</span>
                           
                                <ol class="liste">
                                    <li class="liste-item"><span>Amala</span></li>
                                    <li class="liste-item"><span>Atchèkèe</span></li>
                                    <li class="liste-item"><span>Salade</span></li>
                                </ol>
                                <div class="widget-49-meeting-action">
                                    <a href="#" class="btn btn-sm btn-flash-border-primary">Voir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" >
                        <div class="col-sm-4">
                            <a href="#" class="Cmdbtn bg-gradient-green">Traiter</a>
                        </div>
                        <div class="col-sm-4">
                            <a href="#" class="Cmdbtn bg-info">Modifier</a>
                        </div>
                        <div class="col-sm-4">
                            <a href="#" class="Cmdbtn bg-danger">Supprimer</a>
                        </div>
                      </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-margin">
                            <h2 class="index">N° 01_2022</h5>
                                <h2 class="">Commande de Moufid DAOUDA</h5>
                        <div class="card-body pt-0">
                            <div class="widget-49">
                                <div class="wrapper">
                                    <div class="date-primary">
                                        <span class="widget-49-date-day">09</span>
                                        <span class="widget-49-date-month">Dec</span>
                                    </div>
                                    <div class="info">
                                        <span class="widget-49-pro-title"><span style="color: #014463; font-weight:bold">Montant Total</span> : 15000f</span>
                                        <span class="widget-49-meeting-time"><br> 12:00 à 13.30 Heure</span>
                                    </div>
                                </div>
                            
                                <span class="widget-49-pro-title" style="margin-right: auto; margin-left:20%"><span style="color: #014463; font-weight:bold">Nombre de Mets</span> : 3</span>
                           
                                <ol class="liste">
                                    <li class="liste-item"><span>Amala</span></li>
                                    <li class="liste-item"><span>Atchèkèe</span></li>
                                    <li class="liste-item"><span>Salade</span></li>
                                </ol>
                                <div class="widget-49-meeting-action">
                                    <a href="#" class="btn btn-sm btn-flash-border-primary">Voir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" >
                        <div class="col-sm-4">
                            <a href="#" class="Cmdbtn bg-gradient-green">Traiter</a>
                        </div>
                        <div class="col-sm-4">
                            <a href="#" class="Cmdbtn bg-info">Modifier</a>
                        </div>
                        <div class="col-sm-4">
                            <a href="#" class="Cmdbtn bg-danger">Supprimer</a>
                        </div>
                      </div>
                </div>
            </div>
          
            </div>
    </main>
     {{-- @include('admin.layout.modalDeleteFood') --}}
     <style>
.row .Cmdbtn a{
    text-decoration: none;
}
.row .Cmdbtn {
    margin-top: 5px;
    width: 100%;
    padding: 10px;
    color: black;
    border-radius: 8px
}

.card {
    border: 0;
    box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
    -webkit-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
    -moz-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
    -ms-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #cfcece;
    background-clip: border-box;
    border: 1px solid #e6e4e9;
    border-radius: 8px;
}

.card .index {
    text-align: center;
    color: #000000;
    margin-top: 8px;
    margin-bottom: 10px
}
.card h2 {
    text-align: center;
    color: #014463;
    margin-top: 8px;
    margin-bottom: 10px
}
.card .card-header.no-border {
    border: 0;
}
.card .card-header {
    background: none;
    padding: 0 0.9375rem;
    font-weight: 500;
    display: flex;
    align-items: center;
    
}
.widget-49 .widget-49-meeting-time {
    margin-bottom: 15px;
  color: #464647;
  font-size: 13px;
}
.card-header:first-child {
    border-radius: calc(8px - 1px) calc(8px - 1px) 0 0;
}

.widget-49 .wrapper {
  display: flex;
  align-items: center;
}

.info {
    margin-left: 5px
}
.widget-49 .wrapper .date-primary {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  background-color: #edf1fc;
  width: 4rem;
  height: 4rem;
  border-radius: 50%;
}

.widget-49 .wrapper .date-primary .widget-49-date-day {
  color: #4e73e5;
  font-weight: 500;
  font-size: 1.5rem;
  line-height: 1;
}

.widget-49 .wrapper .date-primary .widget-49-date-month {
  color: #4e73e5;
  line-height: 1;
  font-size: 1rem;
  text-transform: uppercase;
}



.widget-49 .liste {
  font-weight: 400;
  font-size: 13px;
  margin-top: .5rem;
}

.widget-49 .liste .liste-item {
  display: list-item;
  color: #727686;
}

.widget-49 .liste .liste-item span {
  margin-left: .5rem;
  color: black
}

.widget-49 .widget-49-meeting-action {
  text-align: right;
}

.widget-49 .widget-49-meeting-action a {
  text-transform: uppercase;
}
     </style>
@endsection
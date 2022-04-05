@extends('client.body')
@section('content')
  <!-- inner banner -->
  <section class="inner-banner py-5">
    <div class="w3l-breadcrumb py-lg-5">
        <div class="container pt-sm-5 pt-4 pb-sm-4">
            <h4 class="inner-text-title font-weight-bold pt-5">Menu</h4>
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Accueil</a></li>
                <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Menu</li>
            </ul>
        </div>
    </div>
</section>
<!-- //inner banner -->
<section class="about-section container py-5 menu">
    <div class="row">
        <div class="col-md-4">
         <div class = "containers">
                <div class = "card">
                  <div class = "image">
                    <img href = "#" src="{{asset('dist/img/add-product-2.jpg')}}" />
                  </div>
                  <div class = "content">
                    <h3>Pizza</h3>
                    <p>255f</p>
                    <button type="submit" class="btn btn-style" style="background-color: green">Ajouter au Panier</button>
                  </div>
                </div>    
              </div>
            
           
          
       </div>
       <div class="col-md-4">
           <div class = "containers">
               <div class = "card">
                 <div class = "image">
                   <img href = "#" src="{{asset('dist/img/add-product-1.jpg')}}" />
                 </div>
                 <div class = "content">
                   <h3>Hubbergert</h3>
                   <p>255f</p>
                   <button type="submit" class="btn btn-style" style="background-color: green">Ajouter au Panier</button>
                 </div>
               </div>       
          </div>
         
      </div>
         <div class="col-md-4">
           <div class = "containers">
               <div class = "card">
                 <div class = "image">
                   <img href = "#" src="{{asset('dist/img/add-product-3.jpg')}}" />
                 </div>
                 <div class = "content">
                   <h3>Atchèkè</h3>
                   <p>255f</p>
                   <button type="submit" class="btn btn-style" style="background-color: green">Ajouter au Panier</button>
                 </div>
               </div>          
            </div>
       </div>
       
       
    </div>
</section>

@endsection
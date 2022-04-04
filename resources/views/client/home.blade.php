@extends('client.body')
@section('content')

 <!-- banner blog section -->
 <section class="w3l-banner-blog py-5">
    <div class="w3l-main-blog py-4">
        <div class="owl-blog owl-carousel owl-theme">
            <div class="item">
                <div class="news-img">
                    <a href="blog-single.html"><img src="client/images/banner-blog1.jpg" class="img-fluid img-responsive"
                            alt="news image"></a>
                    <div class="title-wrap">
                        <h4 class="title"><a href="blog-single.html">Amala</a></h4>
                        <ul class="admin-list mt-2 mb-4">
                       
                            <li><a href="#blog"><i class="fa fa-money-bill-alt"></i>XOF 2500f</a>
                            </li>
                        </ul>
                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet sed do eiusmod tempor
                           </p>
                    </div>
                </div>
            </div>
         
            <div class="item">
                <div class="news-img">
                    <a href="blog-single.html"><img src="client/images/banner-blog3.jpg" class="img-fluid img-responsive"
                            alt="news image"></a>
                    <div class="title-wrap">
                        <h4 class="title"><a href="blog-single.html">Amamla</a></h4>
                        <ul class="admin-list mt-2 mb-4">
                       
                            <li><a href="#blog"><i class="fa fa-money-bill-alt"></i>XOF 2500f</a>
                            </li>
                        </ul>
                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
           
          
       
         
        </div>
    </div>
</section>
<!-- //banner blog section -->

<!-- Button trigger modal -->

  @include('auth.loginClient')
  @include('auth.registerClient')
@endsection
@extends('client.body')
@section('content')

 <!-- banner blog section -->
 <section class="w3l-banner-blog py-5">
    <div class="w3l-main-blog py-4">
        <div class="owl-blog owl-carousel owl-theme">
            @foreach ($foods as $food)
            <div class="item">
                <div class="news-img">
                    <a href="blog-single.html"><img src="{{ Storage::url($food->met_image)}}" class="img-fluid img-responsive"
                            alt="news image"></a>
                    <div class="title-wrap">
                        <h4 class="title"><a href="blog-single.html">{{ $food->met_name }}</a></h4>
                        <ul class="admin-list mt-2 mb-4">
                       
                            <li><a href="#blog"><i class="fa fa-money-bill-alt"></i>XOF {{ $food->met_price }}f</a>
                            </li>
                        </ul>
                        <p>{{ $food->met_description }}</p>
                    </div>
                </div>
            </div>
         
            @endforeach
        </div>
    </div>
</section>
<!-- //banner blog section -->

<!-- Button trigger modal -->

  @include('auth.loginClient')
  @include('auth.registerClient')
@endsection
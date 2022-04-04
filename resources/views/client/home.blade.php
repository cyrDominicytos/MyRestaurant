@extends('client.body')
@section('content')

 <!-- banner blog section -->
 <section class="w3l-banner-blog py-5">
    <div class="w3l-main-blog py-4">
        <div class="owl-blog owl-carousel owl-theme">
            <div class="item">
                <div class="news-img position-relative">
                    <a href="blog-single.html"><img src="client/images/banner-blog1.jpg" class="img-fluid img-responsive"
                            alt="news image"></a>
                    <div class="title-wrap">
                        <h4 class="title"><a href="blog-single.html">Happiness is an extra scoop of a soup</a></h4>
                        <ul class="admin-list mt-2 mb-4">
                            <li><a href="#blog"><i class="far fa-user"></i>Mob Joe
                                </a></li>
                            <li><a href="#blog"><i class="far fa-heart"></i>12 Likes</a></li>
                            <li><a href="#blog"><i class="far fa-comment-dots"></i>9 Comments</a>
                            </li>
                        </ul>
                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
         
            <div class="item">
                <div class="news-img">
                    <a href="blog-single.html"><img src="client/images/banner-blog3.jpg" class="img-fluid img-responsive"
                            alt="news image"></a>
                    <div class="title-wrap">
                        <h4 class="title"><a href="blog-single.html">Delicious pizza with mozzarella cheese</a></h4>
                        <ul class="admin-list mt-2 mb-4">
                            <li><a href="#blog"><i class="far fa-user"></i>Patty Joe
                                </a></li>
                            <li><a href="#blog"><i class="far fa-heart"></i>14 Likes</a></li>
                            <li><a href="#blog"><i class="far fa-comment-dots"></i>5 Comments</a>
                            </li>
                        </ul>
                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="news-img">
                    <a href="blog-single.html"><img src="client/images/banner-blog6.jpg" class="img-fluid img-responsive"
                            alt="news image"></a>
                    <div class="title-wrap">
                        <h4 class="title"><a href="blog-single.html">How to make a quick and easy breakfast?</a></h4>
                        <ul class="admin-list mt-2 mb-4">
                            <li><a href="#blog"><i class="far fa-user"></i>Mreen Blo
                                </a></li>
                            <li><a href="#blog"><i class="far fa-heart"></i>13 Likes</a></li>
                            <li><a href="#blog"><i class="far fa-comment-dots"></i>6 Comments</a>
                            </li>
                        </ul>
                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="news-img">
                    <a href="blog-single.html"><img src="client/images/banner-blog5.jpg" class="img-fluid img-responsive"
                            alt="news image"></a>
                    <div class="title-wrap">
                        <h4 class="title"><a href="blog-single.html">Breakfast with Bun & White cream</a></h4>
                        <ul class="admin-list mt-2 mb-4">
                            <li><a href="#blog"><i class="far fa-user"></i>Allie Gra
                                </a></li>
                            <li><a href="#blog"><i class="far fa-heart"></i>14 Likes</a></li>
                            <li><a href="#blog"><i class="far fa-comment-dots"></i>7 Comments</a>
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

  
   <!-- Modal Login-->
  <div class="modal fade" id="staticBackdropLogin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>						
        </div> 
        <div class="modal-body  "><!-- login-page -->     
            <div class="login-top sign-top">
                <div class="agileits-login">
                <h5>Connecter-vous Ici</h5>
                <form action="#" method="post">
                    <input type="email" class="email" name="Email" placeholder="Email" required=""/>
                    <input type="password" class="password" name="Password" placeholder="Mot de passe" required=""/>
                    <div class="wthree-text"> 
                        <ul> 
                            <li>
                                <label class="anim">
                                    <input type="checkbox" class="checkbox">
                                    <span> Se rappeler de moi </span> 
                                </label> 
                            </li>
                        </ul>
                        <div class="clearfix"> </div>
                    </div>  
                    <div class="w3ls-submit"> 
                        <input type="submit" value="Me connecter">  	
                    </div>	
                </form>

                </div>  
            </div>
        </div> 
      </div>
    </div>
  </div>
 <!-- End-->

 <!-- //Modal Register-->
 <div class="modal fade" id="staticBackdropRegister" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>						
        </div> 
        <div class="modal-body  "><!-- login-page -->     
            <div class="login-top sign-top">
                <div class="agileits-login register">
                <h5>Inscrivez-vous Ici</h5>
                <form action="#" method="post">
                    <input type="text" name="Username" placeholder="Nom" required=""/>
                    <input type="text" name="Username" placeholder="Prénom" required=""/>
                    <input type="email"  name="Email" placeholder="Email" required=""/>
                    <input type="password" name="Password" placeholder="Mot de passe" required=""/>
                    <input type="text" name="password" placeholder="Confirmer Mot de passe" required="">
                    
                    <div class="w3ls-submit"> 
                        <input type="submit" value="M'inscrit">  	
                    </div>	
                </form>
                </div>  
            </div>
        </div> 
      </div>
    </div>
  </div>

@endsection
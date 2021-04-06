<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DeliTaste</title>
    <meta name="description" content="Delitaste - Food delivery and Restaurant HTML Template" />
    <meta name="author" content="George_Fx">
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="assets/images/favicon.png">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/js/lib/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/js/lib/slick/slick-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/flaticon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/responsive.css')}}">
</head>

<body>

    <div class="page-loading">
        <img src="{{asset('front/images/loader.gif')}}" alt="" />
    </div><!--page-loading end-->

    <div class="wrapper">

        @include('front.header')<!--header end-->

        <div class="responsive-mobile-menu">
            <ul>
                <li><a class="active" href="index.html" title="">Home</a></li>
                <li><a href="about.html" title="">About Us</a></li>
                <li><a href="#" title="">Pages</a>
                    <ul>
                        <li><a href="restaurants.html" title="">Restaurants</a></li>
                        <li><a href="restaurant-details.html" title="">Restaurant detail</a></li>
                        <li><a href="cart.html" title="">Cart</a></li>
                        <li><a href="checkout.html" title="">Checkout</a></li>
                        <li><a href="profile.html" title="">My profile</a></li>
                        <li><a href="faqs.html" title="">FAQs</a></li>
                        <li><a href="testimonials.html" title="">Testimonials</a></li>
                        <li><a href="404.html" title="">404</a></li>
                    </ul>
                </li>
                <li><a href="#" title="">Blog</a>
                    <ul>
                        <li><a href="blog1.html" title="">Blog 1</a></li>
                        <li><a href="blog2.html" title="">Blog 2</a></li>
                        <li><a href="blog-single.html" title="">Blog Single</a></li>
                    </ul>
                </li>
                <li><a href="contact.html" title="">Contact Us</a></li>
            </ul>
        </div><!--responsive-mobile-menu end-->

        <section class="pager-section text-center">
            <div class="fixed-bg bg4"></div>
            <div class="container">
                <div class="pager-head">
                    <h2>Checkout</h2>
                    <ul>
                        <li><a href="#" title="">Home</a></li>
                        <li><span>Checkout</span></li>
                    </ul>
                </div><!--pager-head end-->
            </div>
        </section><!--pager-section end-->

        <section class="sec-block">
            <div class="container">
                <div class="checkout-head">
                    <ul>
                    <li>
                            <h2 ><span>01.</span> Détails commande</h2>
                        </li>
                        <li>
                            <h2><span>02.</span> Payement</h2>
                        </li>
                        <li>
                            <h2  class="active"><span>03.</span> Terminé</h2>
                        </li>
                    </ul>
                </div><!--checkout-head end-->
                <div class="success-para text-center">
                    <img src="{{asset('front/images/check-circle.png')}}" alt="">
                    <h2>Merci !</h2>
                    <p>Votre commande a bien passé au restaurant . Voir votre email à propos l'avancement </p>
                </div>

                <div class="col-lg-8">
                        <div class="sidebar">
                            <div class="widget widget-review">
                                <h3 class="widget-title">Donner votre avis</h3>
                                <form method="POST" action="{{ route('feed.store') }}"  enctype="multipart/form-data">
                                @csrf
                                    <input type="text" name="name" placeholder="Name*" value="{{$Client[0]->name}}" class="half-radius">
                                    <input type="email" name="email" placeholder="Email*" value="{{$Client[0]->email}}" class="half-radius">
                                    <input class="form-control half-radius" id="image" name="image" value="{{$Client[0]->image}}" type="file">

                                    <textarea name="commentaire" placeholder="Write a review"></textarea>

                                    <button type="submit" class="btn-default half-radius">Enregistrer avis <span></span></button>
                                </form>
                            </div><!--widget-review end-->
                        </div><!--sidebar end-->
                    </div>
                    <!--success-para end-->
                <div class="order-infoo">
                    <div class="order-details">
                        <h3>Votre commande</h3>
                        <ul class="vl-ord">
                        @foreach(Cart::content() as $item)
                            <li>
                                <div class="ppc">
                                    <span>{{$item->name}}</span>
                                    <b>2x</b>
                                </div>
                                <span>{{$item->price}}</span>
                            </li>
                        @endforeach
                        </ul>
                    </div><!--order-details end-->
                    <div class="order-details">
                        <ul class="price-tablee">
                            <li>
                                <h4>Subtotal</h4>
                                <span>{{$item->subtotal()}}</span>
                            </li>
                            <li>
                                <h4 class="delivery">Livraison</h4>
                                <span>{{Cart::tax()}}</span>
                            </li>
                            <li>
                                <h4 class="total-price">Total</h4>
                                <span class="total-price">{{$item->total()}}</span>
                            </li>
                        </ul>
                    </div><!--order-details end-->
                </div><!--order-infoo end-->

            </div>
        </section>

        @include('front.footer')<!--footer end-->

    </div><!--wrapper end-->


    <script src="{{asset('front/js/jquery.min.js')}}"></script>
    <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('front/js/lib/slick/slick.js')}}"></script>
    <script src="{{asset('front/js/scripts.js')}}"></script>

</body>
</html>

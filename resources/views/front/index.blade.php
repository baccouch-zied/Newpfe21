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
        <img src="assets/images/loader.gif" alt="" />
    </div><!--page-loading end-->

    <div class="wrapper">

        @include('front.header')
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <section class="main-banner">

            <div class="container">
                <div class="banner-text">
                    <h2>Zarzis Delivery</h2>
                    <span class="semi-bold text-capitalize">Meilleur solution pour commander vos plats préféres</span>
                        <form action="{{ route('restaurant.search')}}" method="get">
                                <div class="form-group">
                                    <input type="text" name="query" placeholder="Chercher votre restaurant"  class="half-radius">
                                    <button type="submit" class="btn-default half-radius">Chercher</button>
                                </div>
                            </form>
                </div><!--banner-text end-->
            </div>
        </section><!--main-banner end-->

        <section class="services-section">
            <div class="container">
                <div class="services-sec">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="service">
                                <h2 class="semi-bold">01.</h2>
                                <span class="text-uppercase"><img src="assets/images/icons/location.svg" alt="">Etape 1</span>
                                <h4 class="semi-bold text-capitalize"><a href="#" title="">Choisir votre restaurant</a></h4>
                                <p>Dans ce site vous trouvez tous les restaurants de notre région Zarzis</p>
                            </div><!--service end-->
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="service">
                                <h2 class="semi-bold">02.</h2>
                                <span class="text-uppercase"><img src="assets/images/icons/meat.svg" alt="">Etape 2</span>
                                <h4 class="semi-bold text-capitalize"><a href="#" title="">Choisir vos produits</a></h4>
                                <p>Dans chaque restaurant vous trouvez leurs catégories ainsi leurs produits</p>
                            </div><!--service end-->
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="service">
                                <h2 class="semi-bold">03.</h2>
                                <span class="text-uppercase"><img src="assets/images/icons/box.svg" alt="">Etape 3</span>
                                <h4 class="semi-bold text-capitalize"><a href="#" title="">livraison de commande</a></h4>
                                <p>Aprés que vous passez votre commande un livreur va l'emporter </p>
                            </div><!--service end-->
                        </div>
                    </div>
                </div><!--services end-->
            </div>
        </section><!--services section end-->

        @include('front.liste')<!--featured-section end-->

        <section class="sec-block">
            <div class="container">
                <div class="section-title text-center">
                    <span>Pourquoi ZarzisDelivery</span>
                    <h2 class="text-capitalize">Pourquoi les gens nous choisissent</h2>
                    <p class="mx-auto">Nous avons de nombreux avantages ,regardez ci-dessous.</p>
                </div><!--sec-title end-->
                <div class="our-proptz text-center">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="proptz">
                                <div class="propt-icon">
                                    <img src="{{asset('front/images/icons/discount.svg')}}" alt="">
                                </div>
                                <h3 class="semi-bold text-capitalize">Systéme sécurisé</h3>
                                <p>Nous avon un sytéme sécurisé pour vos données</p>
                            </div><!--proptz end-->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="proptz">
                                <div class="propt-icon">
                                    <img src="{{asset('front/images/icons/delivery.svg')}}" alt="">
                                </div>
                                <h3 class="semi-bold text-capitalize">Livraison rapide</h3>
                                <p>la livraison la plus rapide à n'importe quel endroit de notre ville.</p>
                            </div><!--proptz end-->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="proptz">
                                <div class="propt-icon">
                                    <img src="{{asset('front/images/icons/food.svg')}}" alt="">
                                </div>
                                <h3 class="semi-bold text-capitalize">+ restaurants</h3>
                                <p>Grand choix de restaurants à travers Zarzis</p>
                            </div><!--proptz end-->
                        </div>
                    </div>
                </div><!--our-proptz end-->
            </div>
        </section><!--our-proptz-section end-->
<hr>


<section class="sec-block pb-0">
            <div class="container">
            <div class="section-title text-center">
                    <span>Votre Rêve</span>
                    <h2 class="text-capitalize">Devenir un partenaire</h2>
                </div>
                <div class="offer-posts">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="offer-post">
                                <img src="{{asset('front/images/livreur.jpg')}}" alt="" class="w-100">
                                <h2><a href="/registerLivreur" title="">En tant que un livreur</a></h2>
                                <a href="/registerLivreur" title="" class="arrow">
                                    <img src="{{asset('front/images/icons/arrow.svg')}}" alt="">
                                </a>
                            </div><!--blog end-->
                        </div>
                        <div class="col-md-6">
                            <div class="offer-post">
                                <img src="{{asset('front/images/resto.jpg')}}" alt="" class="w-100">
                                <h2><a href="/registerRestaurant" title="">En tant que un restaurant</a></h2>
                                <a href="/registerRestaurant" title="" class="arrow">
                                    <img src="{{asset('front/images/icons/arrow.svg')}}" alt="">
                                </a>
                            </div><!--blog end-->
                        </div>
                    </div>
                </div><!--offer-post end-->
            </div>
        </section>

        <section class="sec-block pb-0">
            <div class="container">
                <div class="row">
                <div class="col-md-6 col-6">
                 <div class="section-title text-center">
                    <span>Testimonials </span>
                    <h2 class="text-capitalize">Nos clients disent</h2>
                </div><!--sec-title end-->
                <div class="testimonials text-center">
                @foreach($feedbacksite as $feedbacksite)

                    <div class="testimonial-slide">
                        <p>{{$feedbacksite->commentaire}}</p>
                        <div class="testimonial-by">
                            <img src="{{ URL::to('/') }}/images/{{ $feedbacksite->image }}" alt="">
                            <h4 class="text-capitalize semi-bold">{{$feedbacksite->name}}</h4>
                            <span>May 16, 2020</span>
                        </div>
                    </div>
                @endforeach<!--testimonial-slide end-->
                </div>
                </div><!--testimonials end-->
                </div>
                @if(auth()->user())

                <div class="col-md-6 col-6">
                <div class="sidebar">
                            <div class="widget widget-review">
                                <h3 class="widget-title">Donner votre avis</h3>
                                <form method="POST" action="{{ route('feedapp.store') }}"  enctype="multipart/form-data">
                                @csrf
                                    <input type="text" name="name" placeholder="Name*"  class="half-radius">
                                    <input type="email" name="email" placeholder="Email*"   class="half-radius">
                                    <input class="form-control half-radius" id="image" name="image"  type="file">

                                    <textarea name="commentaire" placeholder="Write a review"></textarea>

                                    <button type="submit" class="btn-default half-radius">Enregistrer avis <span></span></button>
                                </form>
                            </div><!--widget-review end-->
                        </div><!--sidebar end-->
                </div>
                </div>
                @endif<!--testimonials end-->
            </div>
            </section>

        <br/>

        <section class="sec-block oder-sec">
            <div class="fixed-bg bg2"></div>
            <div class="container">
                <div class="order-appliction">
                    <h2>Make orders With Our <span>Application</span></h2>
                    <ul class="vl-fzt">
                        <li>
                            <span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="transparent" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22 11.0799V11.9999C21.9988 14.1563 21.3005 16.2545 20.0093 17.9817C18.7182 19.7088 16.9033 20.9723 14.8354 21.5838C12.7674 22.1952 10.5573 22.1218 8.53447 21.3744C6.51168 20.6271 4.78465 19.246 3.61096 17.4369C2.43727 15.6279 1.87979 13.4879 2.02168 11.3362C2.16356 9.18443 2.99721 7.13619 4.39828 5.49694C5.79935 3.85768 7.69278 2.71525 9.79619 2.24001C11.8996 1.76477 14.1003 1.9822 16.07 2.85986" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M22 4L12 14.01L9 11.01" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                            <div class="vs-info">
                                <h4>Order and pay in a few minutes</h4>
                                <p>Сhoose food and pay for the order in a couple of clicks online also choose you current location using GPS.</p>
                            </div>
                        </li>
                        <li>
                            <span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="transparent" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22 11.0799V11.9999C21.9988 14.1563 21.3005 16.2545 20.0093 17.9817C18.7182 19.7088 16.9033 20.9723 14.8354 21.5838C12.7674 22.1952 10.5573 22.1218 8.53447 21.3744C6.51168 20.6271 4.78465 19.246 3.61096 17.4369C2.43727 15.6279 1.87979 13.4879 2.02168 11.3362C2.16356 9.18443 2.99721 7.13619 4.39828 5.49694C5.79935 3.85768 7.69278 2.71525 9.79619 2.24001C11.8996 1.76477 14.1003 1.9822 16.07 2.85986" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M22 4L12 14.01L9 11.01" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                            <div class="vs-info">
                                <h4>Check Delivery Status</h4>
                                <p>Follow the status of your order in real time and also track the delivery path until you get it.</p>
                            </div>
                        </li>
                    </ul>
                    <ul class="btnss">
                        <li><img src="{{asset('front/images/btn1.png')}}" alt=""></li>
                        <li><img src="{{asset('front/images/btn2.png')}}" alt=""></li>
                    </ul>
                </div><!--promotion end-->
            </div>
        </section>
    <br/><br/>

<!--newsletter end-->



        @include('front.footer')<!--footer end-->

    </div><!--wrapper end-->


    <script src="{{asset('front/js/jquery.min.js')}}"></script>
    <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('front/js/lib/slick/slick.js')}}"></script>
    <script src="{{asset('front/js/isotope.js')}}"></script>
    <script src="{{asset('front/js/scripts.js')}}"></script>

</body>
</html>

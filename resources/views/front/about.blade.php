<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Zarzis Delivery</title>
    <meta name="description" content="Delitaste - Food delivery and Restaurant HTML Template" />
    <meta name="author" content="George_Fx">
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{asset('front/images/logo.png')}}">
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


        <section class="pager-section text-center">
            <div class="fixed-bg bg4"></div>
            <div class="container">
                <div class="pager-head">
                    <h2>A Propos</h2>
                    <ul>
                        <li><a href="#" title="">Accueil</a></li>
                        <li><span>A Propos</span></li>
                    </ul>
                </div><!--pager-head end-->
            </div>
        </section><!--pager-section end-->

        <section class="sec-block">
            <div class="container">
                <div class="about-us-sec">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="about-content">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="abt-img">
                                            <img src="{{asset('front/images/lg1.jpg')}}"  alt="" class="w-100">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="abt-img">
                                            <img src="{{asset('front/images/lg2.jpg')}}"  alt="" class="w-100">
                                        </div>
                                    </div>
                                </div>
                                <h4>Qui sommes-nous ?</h4>
                                <p>Zarzis Delivery est une société qui vous offre un service de livraison à domicile et aux bureaux.
                                    Il vous suffit de consulter notre site web ou bien notre application mobile pour commander , vous commandez ou demandez ce que vous voulez de n'importe où à Zarzis, et nous vous le livrons où que vous soyez.
                                    Notre objectif est de vous faciliter la vie.</p>                            </div><!--about-content end-->
                        </div>
                        <div class="col-md-4">
                            <div class="our-proptz v2 text-center">
                                <div class="proptz">
                                    <div class="propt-icon">
                                        <img src="{{asset('front/images/icons/discount.svg')}}" alt="">
                                    </div>
                                    <h3 class="semi-bold text-capitalize">Systéme sécurisé</h3>
                                <p>Nous avon un sytéme sécurisé pour vos données</p>
                                </div>
                                <div class="proptz">
                                    <div class="propt-icon">
                                        <img src="{{asset('front/images/icons/delivery.svg')}}" alt="">
                                    </div>
                                    <h3 class="semi-bold text-capitalize">Livraison rapide</h3>
                                <p>la livraison la plus rapide à n'importe quel endroit de notre ville.</p>
                                </div>
                                <div class="proptz">
                                    <div class="propt-icon">
                                        <img src="{{asset('front/images/icons/food.svg')}}" alt="">
                                    </div>
                                    <h3 class="semi-bold text-capitalize">+ restaurants</h3>
                                <p>Grand choix de restaurants à travers Zarzis</p>
                                </div>
                            </div><!--our-proptz end-->
                        </div>
                    </div>
                </div><!--about-us-sec end-->
            </div>
        </section>
        <section class="sec-block pb-0" style="padding-top: 5px;">
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
        </section><br/<br/>


      @include('front.footer')<!--footer end-->

    </div><!--wrapper end-->


    <script src="{{asset('front/js/jquery.min.js')}}"></script>
    <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('front/js/lib/slick/slick.js')}}"></script>
    <script src="{{asset('front/js/scripts.js')}}"></script>

</body>
</html>

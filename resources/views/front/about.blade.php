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
                                            <img src="https://via.placeholder.com/360x350" alt="" class="w-100">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="abt-img">
                                            <img src="https://via.placeholder.com/360x350" alt="" class="w-100">
                                        </div>
                                    </div>
                                </div>
                                <h4>We deliver food as soon as possible. Our team works seven days a week and is always ready to answer any of your questions.</h4>
                                <p>We are a team of hardworking and friendly people who work every day on a common goal for more than 5 years. Each ctro at us begins with coffee. Together we develop, grow and relax. More than 50 restaurants and cafes cooperate with us. More than 250 employees are working to improve our service. We always work for our beloved customers and try to be on top. We have a favorable system of discounts for regular customers and good conditions for cooperation with partners.</p>
                            </div><!--about-content end-->
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
                                <img src="https://via.placeholder.com/555x400" alt="" class="w-100">
                                <h2><a href="/registerLivreur" title="">Get paid as a courier partner</a></h2>
                                <a href="/registerLivreur" title="" class="arrow">
                                    <img src="{{asset('front/images/icons/arrow.svg')}}" alt="">
                                </a>
                            </div><!--blog end-->
                        </div>
                        <div class="col-md-6">
                            <div class="offer-post">
                                <img src="https://via.placeholder.com/555x400" alt="" class="w-100">
                                <h2><a href="/registerRestaurant" title="">Become a restaurant partner</a></h2>
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
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

        @include('front.header')
        <section class="main-banner">
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
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
                    <span>Cherchez vous un solution ?</span>
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
                <div class="col-md-12">
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

                <div class="col-md-12">
                <div class="sidebar">
                            <div class="widget widget-review">
                                <h3 class="widget-title">Donner votre avis</h3>
                                <form method="POST" action="{{ route('feedapp.store') }}"  enctype="multipart/form-data">
                                @csrf
                                    <input type="text" name="name" class="@error('name') is-invalid @enderror" id="name" placeholder="Name*"  class="half-radius">
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                    <input type="email" name="email" class="@error('email') is-invalid @enderror" id="email" placeholder="Email*"   class="half-radius">
                                    @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                dimensions(65px/65px)

                                    <input class="form-control half-radius" id="image" name="image"  class="@error('image') is-invalid @enderror" id="image" type="file">
                                    @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

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
                    <h2>Passez des commandes avec notre
                        <span>Application</span></h2>
                    <ul class="vl-fzt">
                        <li>

                            <div class="vs-info">
                                <h4>Commandez et payez en quelques minutes</h4>
                                <p>Choisissez de la nourriture et payez la commande en quelques clics en ligne.</p>
                            </div>
                        </li>
                        <li>

                            <div class="vs-info">
                                <h4>
                                    Vérifier l'état de la commande</h4>
                                <p>Suivez l'état de votre commande en temps réel jusqu'à ce que vous l'obteniez</p>
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


 <!-- facebook chat section start -->
    <div id="fb-root"></div>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    <!-- Your customer chat code -->
    <div class="fb-customerchat" attribution=setup_tool page_id="105913478290055" theme_color="#0084ff"
        logged_in_greeting="Bonjour! Comment on peux vous aide ?"
        logged_out_greeting="Bonjour! Comment on peux vous aide ?">
    </div>
    <!-- facebook chat section end -->

    </div><!--wrapper end-->


    <script src="{{asset('front/js/jquery.min.js')}}"></script>
    <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('front/js/lib/slick/slick.js')}}"></script>
    <script src="{{asset('front/js/isotope.js')}}"></script>
    <script src="{{asset('front/js/scripts.js')}}"></script>

</body>
</html>

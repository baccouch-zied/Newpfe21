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
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/jquery-ui.css')}}">
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
                    <h2>Restaurants </h2>
                    <ul>
                        <li><a href="/" title="">Accueil</a></li>
                        <li><span>Restaurants</span></li>
                    </ul>
                </div><!--pager-head end-->
            </div>
        </section><!--pager-section end-->
        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
        <section class="sec-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 order-md-1 order-sm-1 order-col-1">
                        <div class="sidebar left-sidebar">
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
                        </div><!--sidebar end-->
                    </div>

                    <div class="col-lg-9">
                        <div class="search-prod">
                            <form action="{{ route('restaurant.search')}}" method="get">
                                <div class="form-group">
                                    <input type="text" name="query" placeholder="Search"  class="form-control half-radius">
                                    <button type="submit" class="btn-default half-radius">Search Restaurant</button>
                                </div>
                            </form>
                        </div><!--search-prod end-->
                        <div class="listing-products">
                        @foreach($UserRestaurants as $UserRestaurant)
                            <div class="listing-product">
                                <div class="product-thumb">
                                    <img src="{{ URL::to('/') }}/images/{{ $UserRestaurant->image }}" alt="" class="w-100">
                                </div>
                                <div class="product-info">
                                    <h3><a href="/restaurant-details/{{$UserRestaurant->id}}" title="">{{$UserRestaurant->name}}</a></h3>

                                    <p>{{$UserRestaurant->description}}</p>
                                    <ul class="btm">
                                        <li><a href="#" title="">Spécialité : {{$UserRestaurant->specialite}}</a></li>
                                    </ul>
                                    <a href="/restaurant-details/{{$UserRestaurant->id}}" title="" class="view-menu">Voir Menu <i class="fa fa-long-arrow-alt-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </div><!--listing-product end-->
                            @endforeach

                        </div><!--listing-products end-->
                        <div class="load-more mt-40 text-center">
                            <a href="#" title="" class="btn-default">Plus des restos <span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

   @include('front.footer')<!--footer end-->

    </div><!--wrapper end-->


    <script src="{{asset('front/js/jquery.min.js')}}"></script>
    <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('front/js/lib/slick/slick.js')}}"></script>
    <script src="{{asset('front/js/jquery-ui.js')}}"></script>
    <script src="{{asset('front/js/scripts.js')}}"></script>

</body>
</html>

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
                    <h2>Restaurants and cafes</h2>
                    <ul>
                        <li><a href="#" title="">Home</a></li>
                        <li><span>Restaurants and cafes</span></li>
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
                            <form>
                                <div class="widget widget-filter">
                                    <h3 class="widget-title">Filter</h3>
                                    <ul>
                                        <li>
                                            <label class="label">Beverages
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="label">Burgers
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="label">Meat & Steaks
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="label">Pastry
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="label">Pasta
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="label">Pizza
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="label">Sandwiches
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="label">Seafood
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="label">Soup & Salads
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="label">Sushi
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="label">Vegetarian Food
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div><!--widget-filter end-->
                                <div class="widget widget-tags">
                                    <h3 class="widget-title">Tags</h3>
                                    <ul>
                                        <li><a href="#" title="">Fish</a></li>
                                        <li><a href="#" title="">Grill</a></li>
                                        <li><a href="#" title="">Beer</a></li>
                                        <li><a href="#" title="">Chicken</a></li>
                                        <li><a href="#" title="">Beef</a></li>
                                        <li><a href="#" title="">Hot</a></li>
                                        <li><a href="#" title="">Vegetables</a></li>
                                        <li><a href="#" title="">Chilly</a></li>
                                        <li><a href="#" title="">Fruits</a></li>
                                    </ul>
                                </div><!--widget-tags end-->
                                <div class="widget widget-price-filter">
                                    <h3 class="widget-title">Rating</h3>
                                    <div id="slider-range"></div>
                                    <div class="price-bx">
                                        <input type="text" id="amount" readonly>
                                    </div>
                                    <div class="clearfix"></div>
                                </div><!--widget-filter end-->
                            </form>
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
                                    <ul class="rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <p>{{$UserRestaurant->description}}</p>
                                    <ul class="btm">
                                        <li><a href="#" title="">Restaurant</a></li>
                                        <li><span><b class="statuss"></b>Ouvert</span></li>
                                    </ul>
                                    <a href="/restaurant-details/{{$UserRestaurant->id}}" title="" class="view-menu">View Menu <i class="fa fa-long-arrow-alt-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </div><!--listing-product end-->
                            @endforeach
                                 
                        </div><!--listing-products end-->
                        <div class="load-more mt-40 text-center">
                            <a href="#" title="" class="btn-default">Load More <span></span></a>
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
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
                    <h2>Payement</h2>
                    <ul>
                        <li><a href="#" title="">Accueil</a></li>
                        <li><span>Payement</span></li>
                    </ul>
                </div><!--pager-head end-->
            </div>
        </section><!--pager-section end-->

        <section class="sec-block">
            <div class="container">
                <div class="checkout-head">
                    <ul>
                        <li>
                            <h2 class="active"><span>01.</span> Détails commande</h2>
                        </li>
                        <li>
                            <h2><span>02.</span> Payement</h2>
                        </li>
                        <li>
                            <h2><span>03.</span> Terminé</h2>
                        </li>
                    </ul>
                </div><!--checkout-head end-->
                <a href="/mon-panier" title="" class="btn-default2"><i class="fa fa-long-arrow-alt-left"></i>Back to cart</a>
                <div class="row">
                 <div class="col-lg-8">
                    <form class="checkout-form" method="POST" action="{{ route('commande.store') }}" >
                        @csrf
                            <div class="ck-form">
                                <h4>Vos informations:</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control half-radius" required="" placeholder="First name *" value="{{$Client[0]->name}}">
                                        </div><!--form-group end-->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="prenom" class="form-control half-radius" required="" placeholder="Last name *" value="{{$Client[0]->prenom}}">
                                        </div><!--form-group end-->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="number" name="telephone" class="form-control half-radius" required="" placeholder="Phone number *" value="{{$Client[0]->telephone}}">
                                        </div><!--form-group end-->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control half-radius" required="" placeholder="Email *" value="{{$Client[0]->email}}">
                                        </div><!--form-group end-->
                                    </div>
                                    @foreach(Cart::content() as $item)

                                    <input type="hidden" name="produits" value="{{$item->name}}">
                                    <input type="hidden" name="produits" value="{{Cart::total()}}">

                                    @endforeach


                                </div>
                            </div>
                            <div class="ck-form">
                                <h4>Delivery info:</h4>
                                <div class="row">      
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="adresse" class="form-control half-radius" required="" placeholder="Address *" value="{{$Client[0]->adresse}}">
                                        </div><!--form-group end-->
                                    </div>
                
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="time" name="heure" class="form-control half-radius" required="" placeholder="Delivery time *">
                                        </div><!--form-group end-->
                                    </div>
                                </div>
                            </div>
                            <div class="ck-form">
                                <h4>Commentaire:</h4>
                                <div class="form-group">
                                    <textarea name="commentaire" placeholder="Order note"></textarea>
                                </div><!--form-group end-->
                            </div>
                            <div class="form-group">
                                    <button type="submit" class="btn-default w-100">Enregistrer <span></span></button>
                                </div>
                        
                    </div>
                    <div class="col-lg-4">
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
                            <ul class="price-tablee">
                                <li>
                                    <h4>Subtotal</h4>
                                    <span>{{Cart::subtotal()}}</span>
                                </li>
                                <li>
                                <h4 class="delivery">Livraison</h4>
                                        <span>{{Cart::tax()}}</span>
                                </li>
                                <li>
                                    <h4 class="total-price">Total</h4>
                                    <span class="total-price">{{Cart::total()}}</span>
                                </li>
                            </ul>
                        </div><!--order-details end-->
                    </div>
                    </form>
                </div>
            </div>
        </section>

        @include('front.footer')
    <!--footer end-->
        
    </div><!--wrapper end-->


    <script src="{{asset('front/js/jquery.min.js')}}"></script>
    <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('front/js/lib/slick/slick.js')}}"></script>
    <script src="{{asset('front/js/scripts.js')}}"></script>

</body>
</html>
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
                            <h2 class="active"><span>02.</span> Payement</h2>
                        </li>
                        <li>
                            <h2><span>03.</span> Terminé</h2>
                        </li>
                    </ul>
                </div><!--checkout-head end-->
                <a href="/details-commande" title="" class="btn-default2"><i class="fa fa-long-arrow-alt-left"></i>Retour au détails de mon commande</a>
                <div class="row mt-40">
                    <div class="col-lg-8">
                        <form class="checkout-form mt-0">
                            <div class="payment-optionz">
                                <div class="credit-card-payment">
                                    <div class="cd-head">
                                        <h4>
                                            <img src="{{asset('front/images/icons/check-circle.svg')}}" alt="">
                                            Credit card
                                        </h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Card number</label>
                                                <input type="number" name="credit" placeholder="xxxx xxxx xxxx xxxx" class="form-control">
                                            </div><!--form-group end-->
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Expiration date</label>
                                                <input type="number" name="month" placeholder="mm" class="form-control">
                                            </div><!--form-group end-->
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="opacity-0">year</label>
                                                <input type="number" name="year" placeholder="yy" class="form-control">
                                            </div><!--form-group end-->
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Security code</label>
                                                <input type="number" name="ccv" placeholder="CVV" class="form-control">
                                            </div><!--form-group end-->
                                        </div>
                                    </div>
                                </div><!--credit-card-payment end-->
                                <div class="other-pay-optz">
                                    <h4><span class="circle-box"></span><a href="#" title="">PayPal</a></h4>
                                </div><!--other-pay-optz end-->
                                <div class="other-pay-optz">
                                    <h4><span class="circle-box"></span><a href="#" title="">Pay with cash</a></h4>
                                </div><!--other-pay-optz end-->
                            </div><!--payment-optionz end-->
                            <a href="checkout-step3.html" title="" class="btn-default">Confirm Order <span></span></a>
                        </form>
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
                                    <h4 class="delivery">Delivery</h4>
                                    <span>$25</span>
                                </li>
                                <li>
                                    <h4 class="total-price">Total</h4>
                                    <span class="total-price">{{Cart::total()}}</span>
                                </li>
                            </ul>
                        </div><!--order-details end-->
                    </div>
                </div>
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
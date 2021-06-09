<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DeliTaste</title>
    <meta name="description" content="Delitaste - Food delivery and Restaurant HTML Template" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>


    <style>
        .container{
        padding: 0.5%;
        }
     </style>

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
                <h4>Choisir votre type de paiement:</h4>

                <div class="row mt-40">
                    <div class="col-lg-12">


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">

                                        <input class="form-check-input" name="payement_method" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                          Paiement par carte bancaire
                                        </label><br/>|
                                    </div><!--form-group end-->
                                </div><br/>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-check-input" name="payement_method" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                          Paiement sur place
                                        </label>
                                     </div><!--form-group end-->
                                </div>
                            </div>
                            <label class="label">Montant de votre commande</label>
                            <input type="text" name="amount" value="{{Cart::total()}}"class="form-control amount">
                          </div>
                          <button type="button" class="btn btn-primary btn-block">Payer</button><br/>

                        <div class="col-md-4 offset-md-4">
                            <div class="form-group"><br/>
                                <a href="/fini-commande" class="btn btn-primary btn">Je valide mon methode de paiment</a>
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
                                    <h4 class="delivery">Livraision</h4>
                                    <span>{{Cart::tax()}}</span>
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


    <script src = "https://checkout.stripe.com/checkout.js" > </script>
<script type = "text/javascript">
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });

$('.btn-block').click(function() {
  var amount = $('.amount').val();
  var handler = StripeCheckout.configure({
      key: 'pk_test_51IahNbE3b6CPfzYs5K5zXgyGmwDiIB5pQ0fFOInReoyvEDndEYXePWF6pDZxpTrlQmZmAG1o3Z3ydKqbYfidvUHM00PIcbzkb9', // your publisher key id
      locale: 'auto',
      token: function(token) {
          // You can access the token ID with `token.id`.
          // Get the token ID to your server-side code for use.
          $('#res_token').html(JSON.stringify(token));
          $.ajax({
              url: '{{ url("payment-process") }}',
              method: 'post',
              data: {
                  tokenId: token.id,
                  amount: amount
              },
              success: (response) => {
                  console.log(response)
              },
              error: (error) => {
                  console.log(error);
                  alert('Oops! Something went wrong')
              }
          })
      }
  });
  handler.open({
      name: 'Payment Demo',
      description: 'NiceSnippets',
      amount: amount * 100
  });
})

</script>


    <script src="{{asset('front/js/jquery.min.js')}}"></script>
    <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('front/js/lib/slick/slick.js')}}"></script>
    <script src="{{asset('front/js/scripts.js')}}"></script>

</body>
</html>

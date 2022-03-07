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
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{asset('front/images/logo.png')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/js/lib/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/js/lib/slick/slick-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/flaticon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/responsive.css')}}">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

</head>

<body>

    <div class="page-loading">
        <img src="{{asset('front/images/loader.gif')}}" alt="" />
    </div><!--page-loading end-->

    <div class="wrapper">

        @include('front.header')<!--header end-->

    <!--responsive-mobile-menu end-->

        <section class="pager-section text-center">
            <div class="fixed-bg bg4"></div>
            <div class="container">
                <div class="pager-head">
                    <h2>Détails commande</h2>
                    <ul>
                        <li><a href="/" title="">Accueil</a></li>
                        <li><span>Détails commande</span></li>
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
                            <h2><span>02.</span> Terminé</h2>
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
                                            <input type="time" name="heure" class="form-control half-radius"  placeholder="Delivery time *">
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

                            <div class="ck-form">
                                <h4>Mode paiement:</h4>
                                <div class="form-group">
                                    <input class="form-check-input" name="payement_method" type="checkbox" value="sur place" id="flexCheckDefault">
                                    <label class="form-check-label">
                                      Paiement sur place
                                    </label><br/>
                                    <input class="form-check-input" name="payement_method" type="checkbox" value="sur place" id="flexCheckDefault">
                                    <label class="form-check-label">
                                      Paiement par carte
                                    </label><br/>

                                    <label class="label">Montant de votre commande</label>
                            <input type="text" name="amount" value="{{Cart::total()}}"class="form-control amount">
                          <button type="button" class="btn btn-primary btn-block">Payer</button><br/>
                                </div><!--form-group end-->
                            </div>

                            <div class="form-group">
                                    <button type="submit" class="btn-default w-100">Enregistrer <span></button></a>
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
                                        <b>{{$item->qty}}</b>
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

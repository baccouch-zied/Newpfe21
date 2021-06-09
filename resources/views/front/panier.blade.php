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
    <meta name="csrf-token" content="{{ csrf_token() }}">
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



        <section class="pager-section text-center">
            <div class="fixed-bg bg4"></div>
            <div class="container">
                <div class="pager-head">
                    <h2>Cart</h2>
                    <ul>
                        <li><a href="#" title="">Home</a></li>
                        <li><span>Cart</span></li>
                    </ul>
                </div><!--pager-head end-->
            </div>
        </section><!--pager-section end-->
        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
        @if(Cart::count() >0)

        <section class="sec-block">
            <div class="container">
                <div class="cart-page">
                    <table>
                        <thead>
                            <tr>

                                <th>Produit</th>
                                <th>Quantity</th>
                                <th>Prix</th>
                                <th>action</th>

                            </tr>
                        </thead>
                        <tbody>
                        @foreach(Cart::content() as $item)
                            <tr>
                                <td>
                                    <div class="cart-prod-info d-flex flex-wrap align-items-center">
                                        <img src="{{$item->image}}" alt="">
                                        <div class="cart-pro-info">
                                            <h4><a href="#" title="">{{$item->name}}</a></h4>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                <div class="item-counter">
                                        <div class="quantity">
                                            <form action="{{ route('cart.update1', $item->rowId)  }}" method="POST">
                                                @csrf
                                            <button type="submit" class="plus-btn">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </form>
                                            <input type="text" name="produit-quantity" value="{{$item->qty}}">
                                            <form action="{{ route('cart.update2', $item->rowId)  }}" method="POST">
                                                @csrf
                                            <button type="submit" class="minus-btn">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="price">{{$item->price()}}</span>
                                </td>

                                <td>
                                    <form action="{{ route('cart.destroy', $item->rowId)  }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-dark"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    <div class="row justify-content-end">
                        <div class="col-lg-5">
                            <div class="price-table">
                                <ul>
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
                                <a href="/details-commande" title="" class="btn-default text-center w-100">Commander <span></span></a>
                            </div><!--price-table end-->
                        </div>
                    </div>
                </div><!--cart-page end-->
            </div>
        </section>
        @else
            <div><h2 text-align="center">Votre Panier est Vide </h2></div><br/><br/><br/><br/>
        @endif

       @include('front.footer')<!--footer end-->

    </div><!--wrapper end-->

    <script>
    (function(){
            const classname = document.querySelectorAll('.quantity')
            Array.from(classname).forEach(function(element) {
                element.addEventListener('change', function() {
                    const id = element.getAttribute('data-id')
                    const productQuantity = element.getAttribute('data-productQuantity')
                    axios.patch(`/panier/${id}`, {
                        quantity: this.value,
                        productQuantity: productQuantity
                    })
                    .then(function (response) {
                        // console.log(response);
                        window.location.href = '{{ route('cart.index') }}'
                    })
                    .catch(function (error) {
                        // console.log(error);
                        window.location.href = '{{ route('cart.index') }}'
                    });
                })
            })
        })();
    </script>
    <script src="{{asset('front/js/jquery.min.js')}}"></script>
    <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('front/js/lib/slick/slick.js')}}"></script>
    <script src="{{asset('front/js/scripts.js')}}"></script>

</body>
</html>

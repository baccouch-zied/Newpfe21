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
                    <h2>Feedback </h2>
                    <ul>
                        <li><a href="/" title="">Accueil</a></li>
                        <li><span>Feed</span></li>
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
                    <div class="col-lg-8">
                        <div class="sidebar">
                            <div class="widget widget-review">
                                <h3 class="widget-title">Donner votre avis</h3>
                                <form method="POST" action="{{ route('feedbackclient.store') }}"  enctype="multipart/form-data">
                                @csrf
                                <input type="text" hidden name="idres" value="{{$idres}}">
                                    <input type="text" name="name" placeholder="Name*" value="{{$Client[0]->name}}" class="half-radius">
                                    <input type="email" name="email" placeholder="Email*" value="{{$Client[0]->email}}" class="half-radius">
                                    <input class="form-control half-radius" id="image" name="image" value="{{$Client[0]->image}}" type="file">

                                    <textarea name="commentaire" placeholder="Write a review"></textarea>

                                    <button type="submit" class="btn-default half-radius">Enregistrer avis <span></span></button>
                                </form>
                            </div><!--widget-review end-->
                        </div><!--sidebar end-->
                    </div>
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="widget contact-widget">
                                <div class="numb">
                                    <h5>Notre numéro:</h5>
                                    <p>+216 54312703</p>
                                </div>
                                <div class="numb">
                                    <h5>Email:</h5>
                                    <p>zied.baccouch213@gmail.com</p>
                                </div>
                                <div class="numb">
                                    <h5>Heures de Travail:</h5>
                                    <p>Lun - Sam: 9:00 am - 10:00 pm <br /> Dim: 10:00 am - 8:00 pm</p>
                                </div>
                            </div><!--contact-widget end-->
                        </div><!--sidebar end-->
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

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
                    <h2>Contact Us</h2>
                    <ul>
                        <li><a href="#" title="">Home</a></li>
                        <li><span>Contact us</span></li>
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
                        <div class="contact-us-section pr-100">
                            <div class="section-title">
                                <span>Être en contact
                                </span>
                                <h2 class="text-capitalize">Envoyer un message</h2>
                                <p class="mx-auto mw-100">Si vous avez besoin d'une consultation concernant la collaboration, faites-le nous savoir ou si vous avez une autre question, n'hésitez pas, envoyez-nous un message.</p>
                            </div><!--sec-title end-->
                            <form id="contact-form" method="POST" action="{{ route('contact.store') }}"  enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control name half-radius" placeholder="Name*">
                                        </div><!--form-group end-->
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control email half-radius" placeholder="Email*">
                                        </div><!--form-group end-->
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div><!--form-group end-->
                                    </div>
                                    <div class="col-sm-12">
                                        <button type="submit" id="submit" class="btn-default">Envoyer <span></span></button>
                                    </div>
                                </div>
                            </form>
                        </div><!--contact-us-section end-->
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

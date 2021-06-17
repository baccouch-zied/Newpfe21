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
                    <h2>FAQ</h2>
                    <ul>
                        <li><a href="#" title="">Home</a></li>
                        <li><a href="#" title="">About us</a></li>
                        <li><span>FAQ</span></li>
                    </ul>
                </div><!--pager-head end-->
            </div>
        </section><!--pager-section end-->



        <section class="sec-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="faqs toggle">
                            @foreach($faqs as $faq)
                            <div class="toggle-item">
                                <h4 class="active"><span>01.</span>{{$faq->question}}</h4>
                                <div class="content">
                                    <p>{{$faq->reponse}}</p>
                                </div>
                            </div>
                            @endforeach<!--toggle-item end-->
                        </div><!--faqs end-->
                    </div>
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="widget widget-services services-sec">
                                <div class="service">
                                    <h2 class="semi-bold">01.</h2>
                                    <span class="text-uppercase"><img src="{{asset('front/images/icons/location.svg')}}" alt="">Step 1</span>
                                    <h4 class="semi-bold text-capitalize m-0"><a href="#" title="">Choose Location</a></h4>
                                </div><!--service end-->
                                <div class="service">
                                    <h2 class="semi-bold">02.</h2>
                                    <span class="text-uppercase"><img src="{{asset('front/images/icons/meat.svg')}}" alt="">Step 2</span>
                                    <h4 class="semi-bold text-capitalize m-0"><a href="#" title="">Order food</a></h4>
                                </div><!--service end-->
                                <div class="service">
                                    <h2 class="semi-bold">03.</h2>
                                    <span class="text-uppercase"><img src="{{asset('front/images/icons/box.svg')}}" alt="">Step 3</span>
                                    <h4 class="semi-bold text-capitalize m-0"><a href="#" title="">fast Delivery</a></h4>
                                </div><!--service end-->
                            </div><!--widget-services end-->
                            <div class="widget widget-help">
                                <h3 class="widget-title">Need help?</h3>
                                <p>If you have more questions please let us know. We will answer as soon as possible.</p>
                                <a href="#" title="" class="btn-default height-2">Contact us <span></span></a>
                            </div><!--widget-help end-->
                            <div class="widget widget-app">
                                <h3 class="widget-title">Download The App</h3>
                                <ul>
                                    <li><img src="{{asset('front/images/btn1.png')}}" alt=""></li>
                                    <li><img src="{{asset('front/images/btn2.png')}}" alt=""></li>
                                </ul>
                            </div><!--widget-app end-->
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

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

        @include('front.header')



        <section class="pager-section text-center">
            <div class="fixed-bg bg4"></div>
            <div class="container">
                <div class="pager-head">
                    <h2>Mon Profil</h2>
                    <ul>
                        <li><a href="#" title="">Home</a></li>
                        <li><span>Profil</span></li>
                    </ul>
                </div><!--pager-head end-->
            </div>
        </section><!--pager-section end-->

        <section class="sec-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="profile-section">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="orders-tab" data-toggle="tab" href="#orders" role="tab" aria-controls="orders" aria-selected="true">Mes commandes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="info-tab" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Mes infrmations</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                    <div class="order-tables-sec">
                                        <div class="ord-head">
                                            <ul>
                                                <li class="date">Date</li>
                                                <li class="delivery">Adress livraison</li>
                                                <li class="amount">Montan</li>
                                                <li>Etat</li>
                                            </ul>
                                    </div><!--ord-head end-->
                                        <div class="ord-tablez">
                                            <div class="oc-table active">
                                                <div class="oct-table-head">
                                                    <ul>
                                                        <li class="date">May 22, 20</li>
                                                        <li class="delivery">27 Division St, New York, NY 10002</li>
                                                        <li class="amount">$130.57</li>
                                                        <li class="status active">Preparing</li>
                                                    </ul>
                                                    <a href="#" title="" class="tog-down"><i class="fa fa-angle-down"></i></a>
                                                </div><!--oct-table-head end-->
                                                <div class="oct-table-body">
                                                    <ul>
                                                        <li>
                                                            <h4>Shrimp and oyster soup <span>x2</span></h4>
                                                            <span>$130.79</span>
                                                        </li>
                                                        <li>
                                                            <h4>Rib-eye steaks <span>x2</span></h4>
                                                            <span>$31.38</span>
                                                        </li>
                                                        <li>
                                                            <h4>Greek salad <span>x1</span></h4>
                                                            <span>$34.19</span>
                                                        </li>
                                                        <li>
                                                            <h4><strong>Payment Method</strong></h4>
                                                            <span>Credit Card: <strong>****5478</strong></span>
                                                        </li>
                                                    </ul>
                                                </div><!--oct-table-body end-->
                                            </div><!--oc-table end-->
                                            <div class="oc-table">
                                                <div class="oct-table-head">
                                                    <ul>
                                                        <li class="date">May 22, 20</li>
                                                        <li class="delivery">27 Division St, New York, NY 10002</li>
                                                        <li class="amount">$130.57</li>
                                                        <li class="status">Delivered</li>
                                                    </ul>
                                                    <a href="#" title="" class="tog-down"><i class="fa fa-angle-down"></i></a>
                                                </div><!--oct-table-head end-->
                                                <div class="oct-table-body">
                                                    <ul>
                                                        <li>
                                                            <h4>Shrimp and oyster soup <span>x2</span></h4>
                                                            <span>$130.79</span>
                                                        </li>
                                                        <li>
                                                            <h4>Rib-eye steaks <span>x2</span></h4>
                                                            <span>$31.38</span>
                                                        </li>
                                                        <li>
                                                            <h4>Greek salad <span>x1</span></h4>
                                                            <span>$34.19</span>
                                                        </li>
                                                        <li>
                                                            <h4><strong>Payment Method</strong></h4>
                                                            <span>Credit Card: <strong>****5478</strong></span>
                                                        </li>
                                                    </ul>
                                                </div><!--oct-table-body end-->
                                            </div><!--oc-table end-->
                                                <!--oc-table end-->
                                        </div><!--ord-tablez end-->
                                    </div><!--order-tables-sec end-->
                                </div>
                                <div class="tab-pane fade show " id="info" role="tabpanel" aria-labelledby="info-tab">
                                <div class="blog-posts blog-page">

                                <div class="row">
                                <div class="col-lg-10">
                                     <div class="blog">
                                            <div class="blog-thumbnail">
                                    <img src="{{ URL::to('/') }}/images/{{ $Client[0]->image }}" alt="" class="w-100">
                                     <span class="category">{{$Client[0]->name}}</span>
                                      </div>
                                      <div class="blog-info">
                                        <h2 class="blog-title">Nom Client: {{$Client[0]->name}} {{$Client[0]->prenom}}</h2><br/>
                                        <h2>Telephne: {{$Client[0]->telephone}}</h2><br/>
                                        <h2>Adresse: {{$Client[0]->adresse}}</h2><br/>
                                        <h2>Email: {{$Client[0]->telephone}}</h2><br/>


                                         </div>
                                         </div><!--blog end-->
                                 </div>
                                </div>
                                </div>
                                <form class="checkout-form" method="POST" action="{{ url('/profil/update',$Client[0]->id) }}"  enctype="multipart/form-data" >
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
                                         <div class="col-md-6">
                                             <div class="form-group">
                                            <input type="text" name="adresse" class="form-control half-radius" required="" placeholder="Adresse *" value="{{$Client[0]->adresse}}">
                                             </div><!--form-group end-->
                                         </div>

                                         <div class="col-md-6">
                                             <div class="form-group">
                                                <input class="form-control half-radius" id="image" name="image" value="{{$Client[0]->image}}" type="file">                                            
                                             </div><!--form-group end-->
                                         </div>
                                          </div>
                                 </div>
                                 <button type="submit" title="" class="btn-default height-2">Enregistrer<span></span></a>

                                </form>
                                </div>

                            </div>
                        </div><!--profile-section end-->
                    </div>
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="widget widget-help">
                                <h3 class="widget-title">Need help?</h3>
                                <p>If you have more questions please let us know. We will answer as soon as possible.</p>
                                <a href="/contact" title="" class="btn-default height-2">Contact us <span></span></a>
                            </div><!--widget-help end-->
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                        @csrf
                                        <button type="submit" class="btn btn-danger">
                                      Deconnexion
                                    </button>
                                 
                                    </form>
                             <!--widget-newsletter end-->
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
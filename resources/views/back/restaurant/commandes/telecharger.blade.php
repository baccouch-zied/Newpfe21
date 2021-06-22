<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Zarzis Delivery</title>
    <link rel="apple-touch-icon" href="{{asset('front/images/logo.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('front/images/logo.png')}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('back//css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back//css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back//css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back//css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back//css/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back//css/themes/bordered-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back//css/themes/semi-dark-layout.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('back//css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back//css/pages/app-invoice-print.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('back//css/style.css')}}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">


            <div class="content-body">
                <!-- Basic Tables start -->
                <div class="row" id="basic-table">
                    <div class="col-12">
                        <section class="invoice-preview-wrapper">
                            <div class="row invoice-preview">
                                <!-- Invoice -->
                                <div class="col-xl-9 col-md-8 col-12">
                                    <div class="card invoice-preview-card">
                                        <div class="card-body invoice-padding pb-0">
                                            <!-- Header starts -->
                                            <div class="d-flex justify-content-between flex-md-row flex-column invoice-spacing mt-0">
                                                <div>
                                                    <div class="logo-wrapper">

                                                        <h3 class="text-primary invoice-logo">Notre Restaurant</h3>
                                                    </div>
                                                    @foreach ($UserRestaurants as $UserRestaurant)

                                                    <p class="card-text mb-25">{{$UserRestaurants[0]->name}}</p>
                                                    <p class="card-text mb-25">{{$UserRestaurants[0]->adresse}}</p>
                                                    <p class="card-text mb-0">{{$UserRestaurants[0]->telephone}}</p>
                                                    @endforeach

                                                </div>
                                                <div class="mt-md-0 mt-2">

                                                    <div class="invoice-date-wrapper">
                                                        <p class="invoice-date-title">Date commande:</p>
                                                        <p class="invoice-date">{{$commande[0]->created_at}}</p>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Header ends -->
                                        </div>

                                        <hr class="invoice-spacing" />

                                        <!-- Address and Contact starts -->
                                        <div class="card-body invoice-padding pt-0">
                                            <div class="row invoice-spacing">
                                                <div class="col-xl-8 p-0">
                                                    <h6 class="mb-2">Commande pour :</h6>
                                                    <h6 class="mb-25">Client :{{$commande[0]->name}} {{$commande[0]->prenom}}</h6>
                                                    <p class="card-text mb-25">{{$commande[0]->adresse}}</p>
                                                    <p class="card-text mb-25">{{$commande[0]->telephone}}</p>
                                                    <p class="card-text mb-0">{{$commande[0]->email}}</p>
                                                </div>
                                                <div class="col-xl-4 p-0 mt-xl-0 mt-2">
                                                    <h6 class="mb-2">Payment Details:</h6>
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <td class="pr-1">Façon de paiement:</td>
                                                                <td class="pr-1">{{$commande[0]->payement_method}}</td>
                                                            </tr>

                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Address and Contact ends -->

                                        <!-- Invoice Description starts -->
                                        {{-- <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="py-1">Commande détails</th>
                                                        <th class="py-1">Quantity</th>
                                                        <th class="py-1">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        @foreach($commandes as $commande)

                                                        <td class="py-1">
                                                            <p class="card-text font-weight-bold mb-25"></p>

                                                        </td>
                                                        <td class="py-1">
                                                            <span class="font-weight-bold"></span>
                                                        </td>
                                                        <td class="py-1">
                                                            <span class="font-weight-bold"></span>
                                                        </td>
                                                        @endforeach


                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div> --}}


                                        <div class="card-body invoice-padding pb-0">
                                            <div class="row invoice-sales-total-wrapper">
                                                <div class="invoice-total-wrapper">
                                                    <div class="invoice-total-item">
                                                        <p class="invoice-total-title">Commande:</p>

                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="py-1">Produits</th>
                                                                        <th class="py-1">Quantity</th>
                                                                        <th class="py-1">Total</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($commande[0]->commandeProduits as $produitCommand)
                                                                    <tr>
                                                                        <td class="py-1">
                                                                            <p class="card-text font-weight-bold mb-25">{{$produitCommand->produit->name}}</p>

                                                                        </td>
                                                                        <td class="py-1">
                                                                            <span class="font-weight-bold">{{$produitCommand->quantity}}
                                                                            </span>
                                                                        </td>

                                                                        <td class="py-1">
                                                                            <span class="font-weight-bold">{{$produitCommand->total}}DT</span>
                                                                        </td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <!-- Invoice Description ends -->

                                        <hr class="invoice-spacing" />

                                        <!-- Invoice Note starts -->

                                        <!-- Invoice Note ends -->
                                    </div>
                                </div>
                                <!-- /Invoice -->

                                <!-- Invoice Actions -->

                            </form>



                                <!-- /Invoice Actions -->
                            </div>
                        </section>
                    </div>
                </div>
                <!-- Basic Tables end -->


                <!-- Small Table end -->



            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('back//vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('back/s/js/core/app-menu.js')}}"></script>
    <script src="{{asset('back//js/core/app.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('back//js/scripts/pages/app-invoice-print.js')}}"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>
<!-- END: Body-->

</html>

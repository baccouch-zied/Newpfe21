@extends('back.restaurant.index')

@section('content')



<div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Table Commande</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Commande Détails
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif

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
                                                    <p class="card-text mb-25">{{$UserRestaurant->name}}</p>
                                                    <p class="card-text mb-25">{{$UserRestaurant->adresse}}</p>
                                                    <p class="card-text mb-0">{{$UserRestaurant->telephone}}</p>
                                                </div>
                                                <div class="mt-md-0 mt-2">
                                                    <h4 class="invoice-title">
                                                        Invoice
                                                        <span class="invoice-number">#3492</span>
                                                    </h4>
                                                    <div class="invoice-date-wrapper">
                                                        <p class="invoice-date-title">Date Issued:</p>
                                                        <p class="invoice-date">25/08/2020</p>
                                                    </div>
                                                    <div class="invoice-date-wrapper">
                                                    <form class="needs-validation user-add" method="POST" action="#">
                                                        @csrf
                                                        @method('PUT')

                                                        <p class="invoice-date-title">Etat de cet commande:</p>
                                                        <select class="custom-select ol-xl-8 col-sm-9"  name="categorie_id">

                                                             @switch($commandes->etat)
                                                                     @case(1)
                                                                     <option>Validé</option>
                                                                      @break

                                                                     @case(2)
                                                                     <option>Réjeté</option>
                                                                     @break

                                                                     @default
                                                                     <option>En cours</option>
                                                            @endswitch

                                                        </select>

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
                                                    <h6 class="mb-25">Client :{{$commandes->name}} {{$commandes->prenom}}</h6>
                                                    <p class="card-text mb-25">{{$commandes->adresse}}</p>
                                                    <p class="card-text mb-25">{{$commandes->telephone}}</p>
                                                    <p class="card-text mb-0">{{$commandes->email}}</p>
                                                </div>
                                                <div class="col-xl-4 p-0 mt-xl-0 mt-2">
                                                    <h6 class="mb-2">Payment Details:</h6>
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <td class="pr-1">Total Due:</td>
                                                                <td><span class="font-weight-bold">$12,110.55</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="pr-1">Bank name:</td>
                                                                <td>American Bank</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="pr-1">Country:</td>
                                                                <td>United States</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="pr-1">IBAN:</td>
                                                                <td>ETD95476213874685</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="pr-1">SWIFT code:</td>
                                                                <td>BR91905</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Address and Contact ends -->

                                        <!-- Invoice Description starts -->
                                        <div class="table-responsive">
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
                                                        @foreach ($commande->commandeProduits->produits as $produit)

                                                        <td class="py-1">
                                                            <p class="card-text font-weight-bold mb-25">{{$produit->name}}</p>

                                                        </td>
                                                        <td class="py-1">
                                                            <span class="font-weight-bold">{{$commande->commandeProduits->quantity}}</span>
                                                        </td>
                                                        <td class="py-1">
                                                            <span class="font-weight-bold">{{$commande->commandeProduits->total}}</span>
                                                        </td>
                                                        @endforeach
                                                        @endforeach


                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="card-body invoice-padding pb-0">
                                            <div class="row invoice-sales-total-wrapper">
                                                <div class="col-md-6 order-md-1 order-2 mt-md-0 mt-3">
                                                    <p class="card-text mb-0">
                                                        <span class="font-weight-bold">Salesperson:</span> <span class="ml-75">Alfie Solomons</span>
                                                    </p>
                                                </div>
                                                <div class="col-md-6 d-flex justify-content-end order-md-2 order-1">
                                                    <div class="invoice-total-wrapper">
                                                        <div class="invoice-total-item">
                                                            <p class="invoice-total-title">Total commande:</p>
                                                            <p class="invoice-total-amount">$1800</p>
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
                                <div class="col-xl-3 col-md-4 col-12 invoice-actions mt-md-0 mt-2">
                                    <div class="card">
                                        <div class="card-body">
                                            <button id="submit" name="submit" class="btn btn-primary btn-block mb-75" >
                                                Mettre à jour
                                            </button>
                                            <a href="/telecharger" class="btn btn-primary btn-block mb-75">Télcharger</a>


                                        </div>
                                    </div>
                                </div>
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



@endsection





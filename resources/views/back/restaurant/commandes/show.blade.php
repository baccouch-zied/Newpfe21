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
                                                    @foreach ($UserRestaurants as $UserRestaurant)

                                                    <p class="card-text mb-25">{{$UserRestaurants->name}}</p>
                                                    <p class="card-text mb-25">{{$UserRestaurants->adresse}}</p>
                                                    <p class="card-text mb-0">{{$UserRestaurants->telephone}}</p>
                                                    @endforeach

                                                </div>
                                                <div class="mt-md-0 mt-2">

                                                    <div class="invoice-date-wrapper">
                                                        <p class="invoice-date-title">Date commande:</p>
                                                        <p class="invoice-date">{{$commande->created_at}}</p>
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
                                                    <h6 class="mb-25">Client :{{$commande->name}} {{$commande->prenom}}</h6>
                                                    <p class="card-text mb-25">{{$commande->adresse}}</p>
                                                    <p class="card-text mb-25">{{$commande->telephone}}</p>
                                                    <p class="card-text mb-0">{{$commande->email}}</p>
                                                </div>
                                                <div class="col-xl-4 p-0 mt-xl-0 mt-2">
                                                    <h6 class="mb-2">Payment Details:</h6>
                                                    <table>
                                                        <tbody>

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
                                                        <p class="invoice-total-title">Total commande:</p>
                                                        <p class="invoice-total-amount">$1800</p>
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

                                            <button type="button" class="btn btn-success btn-block mb-75" data-toggle="modal" data-target="#myModal">Validé commande</button>
                                            <button type="button" class="btn btn-danger btn-block mb-75" data-toggle="modal" data-target="#myModal1">Réjété commande</button>
                                            <a href="{{ route('commandes.create', $commande->id) }}" class="btn btn-primary btn-block mb-75">Exporter facture</a>


                                        </div>
                                    </div>
                                </div>
                            </form>

                              <!-- Modal -->
                                <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Validé commande</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="{{ route('accepter.update',$commande->id) }}">
                                                @csrf
                                                @method('PUT')

                                            <div class="form-group">
                                                <label for="usr">Name:</label>
                                                <input name="nom" type="text" class="form-control" id="usr">
                                              </div>
                                              <div class="form-group">
                                                <label for="comment">Message:</label>
                                                <textarea name="message" class="form-control" rows="5" id="comment"></textarea>
                                              </div>
                                              <button type="submit" class="btn btn-success">Envoyer</button>

                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                    </div>
                                </div>

                                  <!-- Modal 2-->
                                    <div class="modal fade" id="myModal1" role="dialog">
                                        <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Réjeté commande </h4>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" action="{{ route('rejeter.update',$commande->id) }}">
                                                    @csrf
                                                    @method('PUT')

                                                <div class="form-group">
                                                    <label for="usr">Name:</label>
                                                    <input name="nom" type="text" class="form-control" id="usr">
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="comment">Raison:</label>
                                                    <textarea name="raison" class="form-control" rows="5" id="comment"></textarea>
                                                  </div>
                                                  <button type="submit" class="btn btn-success">Envoyer</button>

                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>

                                        </div>
                                    </div>

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





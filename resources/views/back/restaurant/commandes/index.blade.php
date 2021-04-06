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
                                    <li class="breadcrumb-item active">Table Commandes
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
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Mes Commandes</h4>
                            </div>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nom</th>
                                            <th>Prenom</th>
                                            <th>Adresse</th>
                                            <th>Telephone</th>
                                            <th>Details</th>
                                            <th>Etat</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($commandes as $commande)

                                    <tr>

                                    <td>{{$commande->id}}</td>
                                         <td>{{$commande->name}}</td>
                                         <td>{{$commande->prenom}}</td>
                                         <td>{{$commande->adresse}}</td>
                                         <td>{{$commande->telephone}}</td>
                                         <td>{{$commande->details}}</td>

                                         <td><span class="badge badge-success">Validé</span></td>

                                        <td>
                                        <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ route('commandes.show', $commande->id) }}">
                                                        <i data-feather="edit-2" class="mr-50"></i>
                                                        <span>Voir</span>
                                                    </a>
                                                    <a class="dropdown-item">
                                                        <i data-feather="edit-2" class="mr-50"></i>
                                                        <span>Envoyer</span>
                                                    </a>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Basic Tables end -->


                <!-- Small Table end -->



            </div>
        </div>
    </div>
    <!-- END: Content-->



@endsection





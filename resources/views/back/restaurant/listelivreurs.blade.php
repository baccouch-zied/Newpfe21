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
                            <h2 class="content-header-title float-left mb-0">Liste Livrerus</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/resto">Accueil</a>
                                    </li>
                                    <li class="breadcrumb-item active"> Livreurs
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
                                <h4 class="card-title">Livreurs connectées avec Zarzis Delivery</h4>
                            </div>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Nom</th>
                                            <th>Prenom</th>
                                            <th>Email</th>
                                            <th>Age</th>
                                            <th>Telphone</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($UserLivreurs as $UserLivreur)

                                        <tr>
                                            <td>{{$UserLivreur->id}}</td>
                                            <td><img src="{{ URL::to('/') }}/images/{{ $UserLivreur->image }}" class="img-thumbnail" width="75" /></td>
                                            <td>{{$UserLivreur->name}}</td>
                                            <td>{{$UserLivreur->prenom}}</td>
                                            <td>{{$UserLivreur->email}}</td>
                                            <td>{{$UserLivreur->age}}</td>
                                            <td>{{$UserLivreur->telephone}}</td>
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

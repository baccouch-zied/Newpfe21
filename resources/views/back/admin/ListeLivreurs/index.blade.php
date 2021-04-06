@extends('back.admin.index')

@section('content')

<div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Liste Livreurs</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Liste Livreurs
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
                                <h4 class="card-title">Livreurs</h4>
                            </div>
                      
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nom Livreur</th>
                                            <th>Prenom</th>
                                            <th>Telephone</th>
                                            <th>Email</th>
                                            <th>Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($UserLivreurs as $UserLivreur)

                                        <tr>
                                            <td>{{$UserLivreur->id}}</td>
                                            <td>{{$UserLivreur->name}}</td>
                                            <td>{{$UserLivreur->prenom}}</td>
                                            <td>{{$UserLivreur->telephone}}</td>
                                            <td>{{$UserLivreur->email}}</td>
                                            <td>
                                            <div class="dropdown">
                                                    <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                                                        <i data-feather="more-vertical"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">
                                                            <i data-feather="edit-2" class="mr-50"></i>
                                                            <span>Valider</span>
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

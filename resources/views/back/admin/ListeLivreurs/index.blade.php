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
                                    <li class="breadcrumb-item"><a href="/dash">Accueil</a>
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
                                            <th>Telephone</th>
                                            <th>Email</th>
                                            <th>Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($Users as $User)

                                        <tr>
                                            <td>{{$User->id}}</td>
                                            <td>{{$User->name}}</td>
                                            <td>{{$User->telephone}}</td>
                                            <td>{{$User->email}}</td>
                                            @if ($User->status=="")
                                            <td>
                                                <form method="POST" action="{{ route('ListeLivreur.update',$User->id) }}">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" class="btn btn-primary">Validé</button>
                                                </form>
                                                </a>
                                            </td>

                                            @elseif ($User->status=="valid")
                                            <td><i class="bi bi-check-lg"> </i><span>Livreur validé</span><br/><br/>
                                                <form action="{{route("ListeLivreur.destroy",$User->id)}}" method="POST" onsubmit="return confirm('Vous etes sure de Supprimer Cette compte ?');" style="display: inline-block;">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <button class="btn waves-effect waves-light btn-danger" type="submit"> <i class="bi bi-archive"></i></button>

                                                </form>
                                            </td>
                                            @endif
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

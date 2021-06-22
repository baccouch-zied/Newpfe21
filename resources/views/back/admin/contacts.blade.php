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
                            <h2 class="content-header-title float-left mb-0">Liste des messages contact</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/dash">Accueil</a>
                                    </li>
                                    <li class="breadcrumb-item active">Liste des messages
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
                                <h4 class="card-title">Messages clients</h4>
                            </div>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nom client</th>
                                            <th>Email</th>
                                            <th>Message</th>
                                            <th>Reponse</th>
                                            <th>Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($contacts as $contact)

                                        <tr>
                                            <td>{{$contact->id}}</td>
                                            <td>{{$contact->name}}</td>
                                            <td>{{$contact->email}}</td>
                                            <td>{{$contact->message}}</td>
                                            <td>{{$contact->reponse}}</td>
                                            <td>
                                                @if ($contact->status=="en attente")

                                                <a class="btn btn-primary" href="{{ route('ListeContact.edit', $contact->id) }}">Repondre</a><br/>

                                                <form action="{{route("ListeContact.destroy",$contact->id)}}" method="POST" onsubmit="return confirm('Vous etes sure de Supprimer Ce message ?');" style="display: inline-block;">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <button class="btn waves-effect waves-light btn-danger" type="submit"> <i class="bi bi-archive"></i></button>

                                                </form>
                                               @else
                                               <form action="{{route("ListeContact.destroy",$contact->id)}}" method="POST" onsubmit="return confirm('Vous etes sure de Supprimer Ce message ?');" style="display: inline-block;">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <button class="btn waves-effect waves-light btn-danger" type="submit"> <i class="bi bi-archive"></i></button>

                                            </form>
                                           @endif
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

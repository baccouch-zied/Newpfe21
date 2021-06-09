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
                            <h2 class="content-header-title float-left mb-0">Liste Clients</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Liste Clients
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
                                <h4 class="card-title">Clients</h4>
                            </div>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Nom Client</th>
                                            <th>Prenom</th>
                                            <th>Telephone</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($client as $client)

                                        <tr>
                                        <td>{{$client->id}}</td>
                                        <td><img src="{{ URL::to('/') }}/images/{{ $client->image }}" class="img-thumbnail" width="75" /></td>

                                            <td>{{$client->name}}</td>
                                            <td>{{$client->prenom}}</td>
                                            <td>{{$client->telephone}}</td>
                                            <td>{{$client->email}}</td>
                                            <td>
                                                <form method="POST" action="{{ route('ListeClients.destroy', $client->id) }}"  onsubmit="return confirm('Vous etes sure de Supprimer Cette Client ?');">
                                                    @csrf
                                                    @method('DELETE')
                                                 <button type="submit" class="btn btn-primary">
                                                     Supprimer
                                                 </button>
                                                         </form>
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

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
                            <h2 class="content-header-title float-left mb-0">Commandes</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/resto">Accuiel</a>
                                    </li>
                                    <li class="breadcrumb-item active">Commandes
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
                                            <th>Message</th>
                                            <th>Details</th>
                                            <th>Mode paiement</th>
                                            <th>Etat au restaurant</th>
                                            <th>Etat au livreur</th>
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
                                         <td>{{$commande->commentaire}}</td>

                                         <td>
                                         @foreach ($commande->commandeProduits as $produitCommand)
                                         {{$produitCommand->produit->name}} *{{$produitCommand->quantity}}=
                                         {{$produitCommand->total * $produitCommand->quantity}}dt
                                        @endforeach
                                          <td>{{$commande->payement_method}}</td>


                                          @if ($commande->etat=="en attente")
                                          <td><span class="badge badge-primary">{{$commande->etat}}</span></td>
                                        @elseif ($commande->etat=="en cours")
                                        <td><span class="badge badge-info">{{$commande->etat}}</span></td>
                                        @elseif ($commande->etat=="réjeté")
                                        <td><span class="badge badge-danger">{{$commande->etat}}</span></td>
                                          @else
                                          <td><span class="badge badge-success">{{$commande->etat}}</span></td>
                                        @endif

                                        @if ($commande->etatlivreur=="non affecté")
                                            <td><span class="badge badge-primary">{{$commande->etatlivreur}}</span></td>
                                            @elseif ($commande->etatlivreur=="en cours")
                                            <td><span class="badge badge-info">{{$commande->etatlivreur}}</span></td>

                                            @elseif ($commande->etatlivreur=="réjeté")
                                            <td><span class="badge badge-danger">{{$commande->etatlivreur}}</span></td>
                                            @elseif ($commande->etatlivreur=="non confirmé")
                                              <td><span class="badge badge-info">{{$commande->etatlivreur}}</span></td>
                                              @elseif ($commande->etatlivreur=="")
                                              <td><span>{{$commande->etatlivreur}}</span></td>

                                              @else
                                              <td><span class="badge badge-success">{{$commande->etatlivreur}}</span></td>

                                        @endif
                                        <td>


                                                    <a class="dropdown-item" href="{{ route('commandes.show', $commande->id) }}">
                                                        <i data-feather="edit-2" class="mr-50"></i>
                                                        <span>Voir</span>
                                                    </a>
                                                   <!-- <a href="#myModal{{$commande->id}}" class="dropdown-item" data-toggle="modal" data-target="#myModal2">
                                                        <i data-feather="edit-2" class="mr-50"></i>
                                                        <span >Envoyer</span>
                                                    </a>-->
                                        </td>
                                    </tr>

                                <div class="modal fade" id="myModal{{$commande->id}}" role="dialog">
                                    <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Envoyer commande</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="{{ route('handleAffectCommandLivreur') }}">
                                                @csrf
                                              <div class="form-group">
                                                    <input type="text" name="id" hidden value="{{$commande->id}}">
                                                <label for="comment">Choix livreurs:</label>
                                                <select name="livreurId" class="form-control form-control-lg">
                                                    @foreach ($UserLivreurs as $UserLivreur )
                                                    <option value="{{$UserLivreur->id}}">{{$UserLivreur->name}} {{$UserLivreur->prenom}}</option>

                                                    @endforeach
                                                  </select>
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

    <script type="text/javascript">
        $(document).ready(function(){
        $('.btnprn').printPage();
        });
        </script>
    <!-- END: Content-->



@endsection





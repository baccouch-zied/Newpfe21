@extends('back.livreur.index')

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
                                         <td>
                                         @foreach ($commande->commandeProduits->produits as $produit)
                                         {{$produit->name}} =
                                         {{$commande->commandeProduits->total}}dt
                                        @endforeach
                                          </td>
                                          <td>{{$commande->payement_method}}</td>
                                          @if ($commande->etat=="en cours")
                                          <td><span class="badge badge-primary">{{$commande->etat}}</span></td>
                                          @elseif ($commande->etat=="réjeté")
                                          <td><span class="badge badge-danger">{{$commande->etat}}</span></td>
                                            @else
                                            <td><span class="badge badge-success">{{$commande->etat}}</span></td>
                                          @endif
                                          @if ($commande->etatlivreur=="en cours")

                                              <td><span class="badge badge-primary">{{$commande->etatlivreur}}</span></td>
                                              @elseif ($commande->etatlivreur=="réjeté")
                                              <td><span class="badge badge-danger">{{$commande->etatlivreur}}</span></td>
                                                @else
                                                <td><span class="badge badge-success">{{$commande->etatlivreur}}</span></td>
                                          @endif
                                          @if ($commande->etatlivreur=="en cours")
                                              <td>
                                                <a href="{{ route('accepterLiv.update',$commande->id) }}" class="btn btn-success btn-block mb-75" >Validé commande</button>
                                                <a href="{{ route('rejeterLiv.update',$commande->id) }}" class="btn btn-danger btn-block mb-75" >Réjété commande</button>
                                          </td>
                                          @else
                                          <td>Valide</td>
                                          @endif
                                    </tr>
                                    @endforeach

                                </tbody>
                                </table>

                                <div class="modal fade" id="myModal3" role="dialog">
                                    <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Validé commande</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="{{ route('accepterLiv.update',$commande->id) }}">
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
                                    <div class="modal fade" id="myModal4" role="dialog">
                                        <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Réjeté commande </h4>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" action="{{ route('rejeterLiv.update',$commande->id) }}">
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





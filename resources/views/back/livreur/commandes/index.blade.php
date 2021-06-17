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
                            <h2 class="content-header-title float-left mb-0">Commandes</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/livreur">Accueil</a>
                                    </li>
                                    <li class="breadcrumb-item active">Mes Commandes
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
                                          <td><span class="badge badge-info">{{$commande->etat}}</span></td>
                                          @elseif ($commande->etat=="réjeté")
                                          <td><span class="badge badge-danger">{{$commande->etat}}</span></td>
                                            @else
                                            <td><span class="badge badge-success">{{$commande->etat}}</span></td>
                                          @endif
                                          @if ($commande->etatlivreur=="non confirmé")
                                          <td><span class="badge badge-info">{{$commande->etatlivreur}}</span></td>

                                          @elseif ($commande->etatlivreur=="en cours")

                                              <td><span class="badge badge-primary">{{$commande->etatlivreur}}</span></td>
                                              @elseif ($commande->etatlivreur=="réjeté")
                                              <td><span class="badge badge-danger">{{$commande->etatlivreur}}</span></td>
                                                @else
                                                <td><span class="badge badge-success">{{$commande->etatlivreur}}</span></td>
                                          @endif
                                          @if ($commande->etatlivreur=="non confirmé")
                                          <td>

                                            <form method="POST" action="{{ route('accepterLiv.update',$commande->id) }}">
                                                @csrf
                                                @method('PUT')
                                             <button type="submit" class="btn btn-success">
                                                 Valider
                                             </button>
                                            </form> <br/>

                                            <form method="POST" action="{{ route('rejeterLiv.update',$commande->id) }}">
                                                @csrf
                                                @method('PUT')
                                             <button type="submit" class="btn btn-danger">
                                                 Réjeter
                                             </button>
                                            </form> <br/>

                                            </td>
                                        @elseif ($commande->etatlivreur=="confirmé")
                                        <td>
                                            <form method="POST" action="{{ route('livrer.update',$commande->id) }}">
                                                @csrf
                                                @method('PUT')
                                             <button type="submit" class="btn btn-warning">
                                                 Livrer
                                             </button>
                                            </form>

                                            </td>
                                            @elseif ($commande->etatlivreur=="réjeté")
                                            <td>
                                                Commande rejté
                                            </td>
                                          @else
                                          <td>Commande bien livré</td>
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

    <script type="text/javascript">
        $(document).ready(function(){
        $('.btnprn').printPage();
        });
        </script>
    <!-- END: Content-->



@endsection





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
                            <h2 class="content-header-title float-left mb-0">Table Produits</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Table Produits
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrumb-right">
                        <div class="dropdown">
                        <a class="btn btn-primary" href="produit/create">Ajouter Produit</a>
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
                                <h4 class="card-title">Mes Produits</h4>
                            </div>
                      
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nom</th>
                                            <th>Details</th>
                                            <th>Prix</th>
                                            <th>Categorie</th>
                                            <th>Image</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($produits as $produit)

                                        <tr>
                                            <td>{{$produit->id}}</td>
                                            <td>{{$produit->name}}</td>
                                            <td>{{$produit->details}}</td>
                                            <td>{{$produit->price}}</td>
                                            <td>{{$produit->categorie_id}}</td>

                                            </td>
                                            <td>
                                            <img src="{{ URL::to('/') }}/images/{{ $produit->image }}" class="img-thumbnail" width="75" />
                                            </td>
                                            <td>
                                            <div class="dropdown">
                                                    <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                                                        <i data-feather="more-vertical"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="{{ route('produit.edit', $produit->id) }}">
                                                            <i data-feather="edit-2" class="mr-50"></i>
                                                            <span>Edit</span>
                                                        </a>
                                                        <a class="dropdown-item" href="{{ route('produit.show', $produit->id) }}">
                                                            <i data-feather="edit-2" class="mr-50"></i>
                                                            <span>Voir</span>
                                                        </a>
                                                        <form method="POST" action="{{ route('produit.destroy', $produit->id) }}" onsubmit="return confirm('Vous etes sure de Supprimer Cette produit ?');">   
                                                        @csrf
                                  @method('DELETE')
                                      <button type="submit" class="btn btn-primary suppbtn">
                                      Supprimer
                                    </button>
                                                        </a>
                                                        </form>
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
      
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- END: Page JS-->
    <script>
        //Warning Message
    function supp(){
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        }, function(){
            swal("Deleted!", "Your imaginary file has been deleted.", "success");
        });
    }
   </script>

@endsection

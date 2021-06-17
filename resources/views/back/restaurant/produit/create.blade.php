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
                            <h2 class="content-header-title float-left mb-0">Produit</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/resto">Accueil</a>
                                    </li>
                                    <li class="breadcrumb-item">Ajouter Produit
                                    </li>

                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="content-body">
                <!-- Basic Horizontal form layout section start -->
                <section id="basic-horizontal-layouts">
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Ajouter Votre Produit</h4>
                                </div>
                                <div class="card-body">
                                    <form class="form form-horizontal" method="POST" action="{{ route('produit.store') }}"  enctype="multipart/form-data">
                                    @csrf

                                        <div class="row">

                                        <div class="col-12">
                                            <div class="form-group row">
                                                <label for="validationCustom3" class="col-xl-3 col-md-4">Nom</label>
                                                <input class="form-control col-xl-8 col-md-7" class="@error('question') is-invalid @enderror" id="name" name="name" type="text">
                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            </div>
                                            </div>
                                            <div class="col-12">

                                            <div class="form-group row">
                                                <label for="validationCustom3" class="col-xl-3 col-md-4">Details</label>
                                                <input class="form-control col-xl-8 col-md-7" class="@error('question') is-invalid @enderror" id="details" name="details" type="text">
                                                @error('details')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            </div>
                                            </div>
                                            <div class="col-12">

                                            <div class="form-group row">
                                                <label for="validationCustom3" class="col-xl-3 col-md-4">Prix</label>
                                                <input class="form-control col-xl-8 col-md-7" class="@error('question') is-invalid @enderror" id="price" name="price" type="text">
                                                @error('price')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            </div>
                                            </div>
                                            <div class="col-12">
                                            <div class="form-group row">
                                                    <label for="exampleFormControlSelect1" class="col-xl-3 col-sm-4 mb-0">Select categorie :</label>
                                                    <select class="custom-select ol-xl-8 col-sm-7"  name="categorie_id">
                                                    @foreach($categories as $categorie)
                                                        <option value="{{$categorie->id}}">{{$categorie->nom}}</option>
                                                        @endforeach

                                                    </select>
                                                    @error('categorie_id')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                </div>

                                            <div class="col-12">
                                            <div class="form-group row">
                                                <label for="validationCustom3" class="col-xl-3 col-md-4">Image</label>
                                                <input class="form-control col-xl-8 col-md-7" id="image" name="image"type="file">
                                            </div>
                                            </div>

                                            <div class="col-sm-9 offset-sm-3">
                                            <button id="submit" name="submit" class="btn btn-primary">Enregistrer</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <!-- Basic Horizontal form layout section end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection

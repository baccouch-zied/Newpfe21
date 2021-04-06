@extends('back.restaurant.index')

@section('content')

<div class="app-content content ecommerce-application">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Details de categorie</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/resto">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="/categorie">Categorie</a>
                                    </li>
                                    
                                    <li class="breadcrumb-item active">Details
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
         
            </div>
            <div class="content-body">
                <!-- app e-commerce details start -->
                <section class="app-ecommerce-details">
                    <div class="card">
                        <!-- Product Details starts -->
                        <div class="card-body">
                            <div class="row my-2">
                                <div class="col-12 col-md-5 d-flex align-items-center justify-content-center mb-2 mb-md-0">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="{{ URL::to('/') }}/images/{{ $categorie->image }}" class="img-fluid product-img" alt="product image" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-7">
                                    <h4>{{$categorie->nom}}</h4>
                                    <span class="card-text item-company">ID: <a href="javascript:void(0)" class="company-name">{{$categorie->id}}</a></span>
                                    <div class="ecommerce-details-price d-flex flex-wrap mt-1">
                                        <h4 class="item-price mr-1">Details de mes Categories</h4>
                                  
                                    </div>                     
                                    <hr />
                                    <div class="col-sm-9 offset-sm-3">
                                            <a href="{{ route('categorie.edit', $categorie->id) }}" class="btn btn-warning">Modifier</a>
                                            <button id="submit" name="submit" class="btn btn-danger">Supprimer</button>

                                            </div>
                         
                                </div>
                            </div>
                        </div>
                        <!-- Product Details ends -->

                        <!-- Item features starts -->

                        <!-- Related Products starts -->
                  
                        <!-- Related Products ends -->
                    </div>
                </section>
                <!-- app e-commerce details end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

@endsection
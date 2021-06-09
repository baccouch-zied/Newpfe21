@extends('back.restaurant.index')

@section('content')

<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Stock de mon restaurant :</h2>
                    </div>
                </div><br/>

        <div class="content-body">
            <section id="card-demo-example">
                <div class="row match-height">
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="{{asset('back/images/slider/cmd.jpg')}}" alt="Card image cap" />
                            <div class="card-body">
                                <h4 class="card-title">Nombre des commandes</h4>

                                <a href="/commandes" class="btn btn-outline-primary">{{$commandes->count()}} Commandes</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="{{asset('back/images/slider/ctg.jpg')}}" alt="Card image cap" />
                            <div class="card-body">
                                <h4 class="card-title">Nombre des catégories</h4>

                                <a href="/categorie" class="btn btn-outline-primary">{{$categories->count()}} Catégories</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="{{asset('back/images/slider/prd.jpg')}}" alt="Card image cap" />
                            <div class="card-body">
                                <h4 class="card-title">Nombres de produits</h4>

                                <a href="/produit" class="btn btn-outline-primary">{{$produits->count()}} Produits</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>


</div>
@endsection

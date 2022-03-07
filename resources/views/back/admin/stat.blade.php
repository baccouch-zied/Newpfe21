@extends('back.admin.index')

@section('content')

<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Statistiques des partenariats :</h2>
                    </div>
                </div><br/>

        <div class="content-body">
            <section id="card-demo-example">
                <div class="row match-height">
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="{{asset('back/images/resto.jpg')}}" alt="Card image cap" />
                            <div class="card-body">
                                <h4 class="card-title">Nombre des restaurants</h4>

                                <a href="/ListeResto" class="btn btn-outline-primary">{{$UserRestaurant->count()}} Restaurants</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="{{asset('back/images/livr.jpg')}}" alt="Card image cap" />
                            <div class="card-body">
                                <h4 class="card-title">Nombre des livreurs</h4>

                                <a href="/ListeLivreur" class="btn btn-outline-primary">{{$UserLivreur->count()}} Livreurs</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="{{asset('back/images/client.jpg')}}" alt="Card image cap" />
                            <div class="card-body">
                                <h4 class="card-title">Nombres des clients</h4>

                                <a href="/ListeClients" class="btn btn-outline-primary">{{$Client->count()}} Clients</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>


</div>
@endsection

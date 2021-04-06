@extends('back.livreur.index')
@section('content')

<div class="app-content content ">

        <div class="content-body">
                <!-- Basic Horizontal form layout section start -->
                <section id="basic-horizontal-layouts">
                    <div class="row">
                        <div class="col-md-6 col-6">
                            <div class="card">
                            @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                                <div class="card-header">
                                    <h4 class="card-title">Modifier Mes informations</h4>
                                </div>
                                <div class="card-body">
                                    <form class="form form-horizontal" method="POST" action="{{ url('/infosLivreur/update',$UserLivreur[0]->id) }}"  enctype="multipart/form-data">
                                    @csrf

                                        <div class="row">
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <label for="validationCustom3" class="col-xl-3 col-md-4">Nom</label>
                                                <input class="form-control col-xl-8 col-md-7" id="nom" name="name" type="text" required="" value="{{$UserLivreur[0]->name}}">
                                            </div>  
                                            </div>

                                            <div class="col-12">
                                            <div class="form-group row">
                                                <label for="validationCustom3" class="col-xl-3 col-md-4">Prénom</label>
                                                <input class="form-control col-xl-8 col-md-7" id="prenom" name="prenom" type="text" required="" value="{{$UserLivreur[0]->prenom}}">
                                            </div>  
                                            </div>    

                                            <div class="col-12">
                                            <div class="form-group row">
                                                <label for="validationCustom3" class="col-xl-3 col-md-4">Age</label>
                                                <input class="form-control col-xl-8 col-md-7" id="age" name="age" type="text" required="" value="{{$UserLivreur[0]->age}}">
                                            </div>  
                                            </div>  

                                            <div class="col-12">
                                            <div class="form-group row">
                                                <label for="validationCustom3" class="col-xl-3 col-md-4">Adresse</label>
                                                <input class="form-control col-xl-8 col-md-7" id="adresse" name="adresse" type="text" required="" value="{{$UserLivreur[0]->adresse}}">
                                            </div>  
                                            </div>
                                   
                                            <div class="col-12">
                                            <div class="form-group row">
                                                <label for="validationCustom3" class="col-xl-3 col-md-4">Telephone</label>
                                                <input class="form-control col-xl-8 col-md-7" id="telephone" name="telephone" type="text" required="" value="{{$UserLivreur[0]->telephone}}">
                                            </div>  
                                            </div>

                                            <div class="col-12">
                                            <div class="form-group row">
                                                <label for="validationCustom3" class="col-xl-3 col-md-4">Email</label>
                                                <input class="form-control col-xl-8 col-md-7" id="email" name="email" type="text" required="" value="{{$UserLivreur[0]->email}}"> 
                                            </div>  
                                            </div>

                                            <div class="col-12">
                                            <div class="form-group row">
                                                <label for="validationCustom3" class="col-xl-3 col-md-4">Image</label>
                                                <input class="form-control col-xl-8 col-md-7" id="image" name="image" value="{{$UserLivreur[0]->image}}"type="file">
                                            </div>  
                                            </div>

                                         
                     
                                            <div class="col-sm-9 offset-sm-3">
                                            <button id="submit" name="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                      
                        <div class="col-md-6 col-6">

<div class="card card-developer-meetup">
    <div class="card-body">

    <div class="meetup-img-wrapper rounded-top text-center">
        <img src="{{ URL::to('/') }}/images/{{ $UserLivreur[0]->image }}" alt="Meeting Pic" height="170" />
    </div><hr>
        <div class="meetup-header d-flex align-items-center">
           
            <div class="my-auto">
            <h4 class="card-text item-company">{{$UserLivreur[0]->name}}</h4><h4 class="card-text item-company">{{$UserLivreur[0]->prenom}}</h4>
            </div><br/>
        </div>
        <div class="meetup-header d-flex align-items-center">
           
           <div class="my-auto">
           <h4 class="card-text item-company">- {{$UserLivreur[0]->age}}</h4>
           </div>
           
       </div><hr/>
       <div class="media">
            <div class="avatar bg-light-primary rounded mr-1">
                <div class="avatar-content">
                    <i data-feather="mail" class="avatar-icon font-medium-3"></i>
                </div>
            </div>
            <div class="media-body">
                <h6 class="mb-0">{{$UserLivreur[0]->email}}</h6>
            </div>
        </div><hr/>

         <div class="media">
            <div class="avatar bg-light-primary rounded mr-1">
                <div class="avatar-content">
                    <i data-feather="phone" class="avatar-icon font-medium-3"></i>
                </div>
            </div>
            <div class="media-body">
            <h6 class="mb-0">{{$UserLivreur[0]->telephone}}</h6>
            </div>
        </div><hr/>
        <div class="media">
            <div class="avatar bg-light-primary rounded mr-1">
                <div class="avatar-content">
                    <i data-feather="map-pin" class="avatar-icon font-medium-3"></i>
                </div>
            </div>
            <div class="media-body">
                <h6 class="mb-0">Place</h6>
                <small>{{$UserLivreur[0]->adresse}}</small>
            </div>
        </div>
 

    </div>
</div>
</div>

                    </div>
                </section>
                <!-- Basic Horizontal form layout section end -->

                  </div><br/>
          
                    <!--/ Developer Meetup Card -->
</div>
@endsection


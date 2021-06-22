@extends('back.restaurant.index')
@section('content')

<div class="app-content content ">

        <div class="content-body">
                <!-- Basic Horizontal form layout section start -->
                <section id="basic-horizontal-layouts">
                    <div class="row">
                        <div class="col-md-12 col-12">
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
                                    <form class="form form-horizontal" method="POST" action="{{ url('/infos/update',$UserRestaurant[0]->id) }}"  enctype="multipart/form-data">
                                    @csrf

                                        <div class="row">
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <label for="validationCustom3" class="col-xl-3 col-md-4">Nom</label>
                                                <input class="form-control col-xl-8 col-md-7 @error('telephone') is-invalid @enderror" id="nom" name="name" type="text" value="{{$UserRestaurant[0]->name}}">

                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                                </span>
                                              @enderror

                                            </div>
                                            </div>

                                            <div class="col-12">
                                            <div class="form-group row">
                                                <label for="validationCustom3" class="col-xl-3 col-md-4">Description</label>
                                                <input class="form-control col-xl-8 col-md-7 @error('description') is-invalid @enderror" id="description" name="description" type="text"  value="{{$UserRestaurant[0]->description}}">

                                                @error('description')
                                                <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                                </span>
                                              @enderror

                                            </div>
                                            </div>

                                            <div class="col-12">
                                            <div class="form-group row">
                                                <label for="validationCustom3" class="col-xl-3 col-md-4">Adresse</label>
                                                <input class="form-control col-xl-8 col-md-7 @error('adresse') is-invalid @enderror" id="adresse" name="adresse" type="text"  value="{{$UserRestaurant[0]->adresse}}">
                                                @error('adresse')
                                                <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                                </span>
                                              @enderror
                                            </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <label for="validationCustom3" class="col-xl-3 col-md-4">Spécialité</label>
                                                    <input class="form-control col-xl-8 col-md-7 @error('specialite') is-invalid @enderror" id="specialite" name="specialite" type="text"  value="{{$UserRestaurant[0]->specialite}}">
                                                    @error('specialite')
                                                    <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                    </span>
                                                  @enderror
                                             </div>
                                                </div>

                                            <div class="col-12">
                                            <div class="form-group row">
                                                <label for="validationCustom3" class="col-xl-3 col-md-4">Ouverture</label>
                                                <input class="form-control col-xl-8 col-md-7 @error('ouverture') is-invalid @enderror" id="ouverture" name="ouverture" type="time" value="{{$UserRestaurant[0]->ouverture}}">
                                                @error('ouverture')
                                                <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                                </span>
                                              @enderror
                                            </div>
                                            </div>
                                            <div class="col-12">
                                            <div class="form-group row">
                                                <label for="validationCustom3" class="col-xl-3 col-md-4">Fermeture</label>
                                                <input class="form-control col-xl-8 col-md-7 @error('fermeture') is-invalid @enderror" id="fermeture" name="fermeture" type="time" value="{{$UserRestaurant[0]->fermeture}}">
                                                @error('fermeture')
                                                <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                                </span>
                                              @enderror
                                            </div>
                                            </div>
                                            <div class="col-12">
                                            <div class="form-group row">
                                                <label for="validationCustom3" class="col-xl-3 col-md-4">Jour de Travails</label>
                                                <input class="form-control col-xl-8 col-md-7 @error('jour') is-invalid @enderror" id="jour" name="jour" type="text" value="{{$UserRestaurant[0]->jour}}">
                                                @error('jour')
                                                <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                                </span>
                                              @enderror
                                            </div>
                                            </div>

                                            <div class="col-12">
                                            <div class="form-group row">
                                                <label for="validationCustom3" class="col-xl-3 col-md-4">Telephone</label>
                                                <input class="form-control col-xl-8 col-md-7 @error('telephone') is-invalid @enderror" id="telephone" name="telephone" type="text" value="{{$UserRestaurant[0]->telephone}}">
                                                @error('telephone')
                                                <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                                </span>
                                              @enderror
                                            </div>
                                            </div>

                                            <div class="col-12">
                                            <div class="form-group row">
                                                <label for="validationCustom3" class="col-xl-3 col-md-4">Email</label>
                                                <input class="form-control col-xl-8 col-md-7 @error('email') is-invalid @enderror" id="email" name="email" type="text" value="{{$UserRestaurant[0]->email}}">
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                                </span>
                                              @enderror
                                            </div>
                                            </div>

                                            <div class="col-12">
                                            <div class="form-group row">
                                                <label for="validationCustom3" class="col-xl-3 col-md-4">Image</label>
                                                <input class="form-control col-xl-8 col-md-7 @error('image') is-invalid @enderror" id="image" name="image" value="{{$UserRestaurant[0]->image}}"type="file">
                                                @error('image')
                                                <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                                </span>
                                              @enderror
                                            </div>
                                            </div>

                                            <div class="col-12">
                                            <div class="form-group row">
                                                <label for="validationCustom3" class="col-xl-3 col-md-4">Image2</label>
                                                <input class="form-control col-xl-8 col-md-7 @error('image2') is-invalid @enderror" id="image2" name="image2" value=""type="file">
                                                @error('image2')
                                                <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                                </span>
                                              @enderror
                                            </div>
                                            </div>

                                            <div class="col-sm-9 offset-sm-3">
                                            <button id="submit" name="submit" class="btn btn-primary">Enrigistrer</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div><br/><br/>
                        <div class="card-header">
                            <h4 class="card-title">Mes informations</h4>
                        </div>
               <div class="col-md-12 col-12">

<div class="card card-developer-meetup">
    <div class="card-body">
    <div class="meetup-img-wrapper rounded-top text-center">
        <img src="{{ URL::to('/') }}/images/{{ $UserRestaurant[0]->image2 }}" alt="Meeting Pic" height="170" />
    </div><hr>

    <div class="meetup-img-wrapper rounded-top text-center">
        <img src="{{ URL::to('/') }}/images/{{ $UserRestaurant[0]->image }}" alt="Meeting Pic" height="170" />
    </div><hr>
        <div class="meetup-header d-flex align-items-center">

            <div class="my-auto">
            <h3 class="company-name">Nom du restaurant: </h3><h4 class="card-text item-company">- {{$UserRestaurant[0]->name}}</h4>
            </div>

        </div><hr/>
        <div class="meetup-header d-flex align-items-center">

           <div class="my-auto">
           <h3 class="company-name">Description: </h3><h4 class="card-text item-company">- {{$UserRestaurant[0]->description}}</h4>
           </div>

       </div><hr/>
       <div class="media">
            <div class="avatar bg-light-primary rounded mr-1">
                <div class="avatar-content">
                    <i data-feather="mail" class="avatar-icon font-medium-3"></i>
                </div>
            </div>
            <div class="media-body">
                <h6 class="mb-0">{{$UserRestaurant[0]->email}}</h6>
            </div>
        </div><hr/>

         <div class="media">
            <div class="avatar bg-light-primary rounded mr-1">
                <div class="avatar-content">
                    <i data-feather="phone" class="avatar-icon font-medium-3"></i>
                </div>
            </div>
            <div class="media-body">
            <h6 class="mb-0">{{$UserRestaurant[0]->telephone}}</h6>
            </div>
        </div><hr/>
        <div class="media">
            <div class="avatar bg-light-primary rounded mr-1">
                <div class="avatar-content">
                    <i data-feather="calendar" class="avatar-icon font-medium-3"></i>
                </div>
            </div>
            <div class="media-body">
            <h6 class="mb-0">{{$UserRestaurant[0]->jour}}</h6><br/>
            <h6 class="mb-0">Ouverture</h6> <small>{{$UserRestaurant[0]->ouverture}}</small><br/>
            <h6 class="mb-0">Fermeture</h6> <small>{{$UserRestaurant[0]->fermeture}}</small>
            <h6 class="mb-0">Spécialité</h6> <small>{{$UserRestaurant[0]->specialite}}</small>


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
                <small>{{$UserRestaurant[0]->adresse}}</small>
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


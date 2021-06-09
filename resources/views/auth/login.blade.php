@extends('layouts.app')

@section('content')
<div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-v2">
                    <div class="auth-inner row m-0">

                        <!-- /Brand logo-->
                        <!-- Left Text-->
                        <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                            <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img class="img-fluid" src="{{asset('back/images/pages/zz.png')}}" alt="Login V2" /></div>
                        </div>
                        <!-- /Left Text-->
                        <!-- Login-->
                        <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">

                            <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                                <div>
                                    <img src="{{asset('front/images/logo.png')}}" alt=""><br/><br/><br/>
                                </div>
                                <h2 class="card-title font-weight-bold mb-1">Zarzis Delivrey! 👋</h2>
                                <form class="auth-login-form mt-2" method="POST" action="{{ route('login') }}">
                                @csrf
                                @if(url()->previous() === route('cart.index'))
     <div class="col s12">
      <div class="card purple darken-3">
        <div class="card-content white-text center-align">
          Vous devez être connecté pour passer une commande, si vous n'avez pas encore de compte vous pouvez en créer un en utilisant le lien sous ce formulaire.
        </div>
      </div>
    </div>
  @endif
                                        <div class="form-group">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror

                                        </div>
                                        <div class="form-group">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">
                                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                      @enderror
                                        </div>

                                      <div class="form-terms">
                                            <div class="custom-control custom-checkbox mr-sm-2">

                                                @if (Route::has('password.request'))
                                    <a class="btn btn-default forgot-pass" href="{{ route('password.request') }}">
                                        {{ __('Mot de passe oublié?') }}
                                    </a>
                                      @endif
                                            </div>
                                        </div>

                                    <button class="btn btn-primary btn-block" tabindex="4">Connexion</button>
                                </form>
                                <p class="text-center mt-2"><span>Voulez-vous créer un compte ?</span><br/>
                                <a class="btn btn-primary" href="/registerLivreur">Compte livreur</a>
                                <a class="btn btn-primary" href="/registerRestaurant">Compte restaurant</a><br/><br/>
                                <a class="btn btn-primary" href="/registerClient">Compte client</a>

                            </div>
                        </div>
                        <!-- /Login-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

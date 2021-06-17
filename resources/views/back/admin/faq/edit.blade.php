@extends('back.admin.index')

@section('content')

<div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Faq</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Modifier Faq</a>
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
                        <div class="col-md-6 col-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Edit Faq</h4>
                                </div>
                                <div class="card-body">
                                    <form class="form form-horizontal" method="POST" action="{{ route('faq.update',$faq->id) }}"  enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')


                                        <div class="row">
                                            <div class="col-12">
                                            <div class="form-group row">
                                                <label for="validationCustom0" class="col-xl-3 col-md-4"> Question </label>
                                                <input class="form-control col-xl-8 col-md-7" class="@error('question') is-invalid @enderror" id="question" name="question" type="text" required="" value="{{$faq->question}}">
                                               @error('question')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            </div>
                                            <div class="col-12">
                                            <div class="form-group row">
                                                <label for="validationCustom0" class="col-xl-3 col-md-4"> Question </label>
                                                <input class="form-control col-xl-8 col-md-7" class="@error('reponse') is-invalid @enderror" id="reponse" name="reponse" type="text" required="" value="{{$faq->reponse}}">
                                                @error('reponse')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            </div>

                                            <div class="col-sm-9 offset-sm-3">
                                            <button id="submit" name="submit" class="btn btn-primary">Modifier</button>
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

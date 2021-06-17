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
                            <h2 class="content-header-title float-left mb-0">Liste des Faq</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/dash">Accueil</a>
                                    </li>
                                    <li class="breadcrumb-item active">Liste FeedsBack
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrumb-right">
                        <div class="dropdown">
                        <a class="btn btn-primary" href="faq/create">Ajouter Faq</a>
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
                                <h4 class="card-title">Questions , Réponses</h4>
                            </div>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                         <th>id</th>
                                        <th>Question</th>
                                        <th>Reponse</th>
                                        <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                    @foreach($faqs as $faq)

                                         <td>{{$faq->id}}</td>
                                        <td>{{$faq->question}}</td>
                                        <td>{{$faq->reponse}}</td>
                         <td>
                            <div class="dropdown">
                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                                    <i data-feather="more-vertical"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('faq.edit', $faq->id) }}">
                                        <i data-feather="edit-2" class="mr-50"></i>
                                        <span>Edit</span>
                                    </a>


                                    <form method="POST" action="{{ route('faq.destroy', $faq->id) }}"  onsubmit="return confirm('Vous etes sure de Supprimer Cette faq ?');">
                                 @csrf
                                 @method('DELETE')
                              <button type="submit" class="btn btn-primary">
                                  Supprimer
                              </button>
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



@endsection

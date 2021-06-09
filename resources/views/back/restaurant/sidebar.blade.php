<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">

    <a href="javascript:void(0);" class="brand-logo">
        <img src="{{asset('front/images/logo.png')}}" alt="" style="padding-left:60px ;">
    </a>
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="/resto"><span class="brand-logo">
                        <h2 class="brand-text">Interface restaurant</h2>
                    </a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <d
    iv class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Gestion de mon interface</span><i data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="/infos"><i data-feather="mail"></i><span class="menu-title text-truncate" data-i18n="Email">Mes Informations</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="/categorie"><i data-feather="mail"></i><span class="menu-title text-truncate" data-i18n="Email">Gestion des Categories</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="/produit"><i data-feather="message-square"></i><span class="menu-title text-truncate" data-i18n="Chat">Gestion des Produits</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="/feedback"><i data-feather="message-square"></i><span class="menu-title text-truncate" data-i18n="Chat">Gestion des Feedbacks</span></a>
                </li>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="/commandes"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Invoice">Gestion des Commandes</span></a>

                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="app-file-manager.html"><i data-feather="save"></i><span class="menu-title text-truncate" data-i18n="File Manager">Liste des Livreurs</span></a>
                </li>



            </ul>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                        @csrf
                                        <button type="submit" class="btn btn-primary">
                                      Deconnexion
                                    </button>

                                    </form>
        </div>
    </div>
    <!-- END: Main Menu-->

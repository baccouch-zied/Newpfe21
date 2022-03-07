<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <a href="javascript:void(0);" class="brand-logo">
            <img src="{{asset('front/images/logo.png')}}" alt="" style="padding-left:60px ;">
        </a>
            <div class="navbar-header">

                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mr-auto"><a class="navbar-brand" href="/livreur"><span class="brand-logo">
                            <h2 class="brand-text">Interface Livreur</h2>
                        </a></li>
                </ul>
            </div>
            <div class="shadow-bottom"></div>
            <d
        iv class="main-menu-content">
                <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

                    <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Gestion des mon interface</span><i data-feather="more-horizontal"></i>
                    </li>
                    <li class=" nav-item"><a class="d-flex align-items-center" href="/infosLivreur"><i class="bi bi-person-circle"></i><span class="menu-title text-truncate" data-i18n="Email">Mes Coordonées</span></a>
                    </li>
                    <li class=" nav-item"><a class="d-flex align-items-center" href="commandesLiv"><i class="bi bi-basket"></i><span class="menu-title text-truncate" data-i18n="Chat">Liste des Commandes</span></a>
                    </li>
                    </li>

                </ul>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="padding-left: 50px;">
                                            @csrf
                                            <button type="submit" class="btn btn-primary">
                                          Deconnexion
                                        </button>

                                        </form>
            </div>
            <div class="responsive-mobile-menu">
                    <ul>
                    <li><a  href="/infosLivreur">Mes Coordonées</a>
                    </li>
                    <li><a  href="commandesLiv">Mes Coordonées</a>
                    </li>
                    </li>
                    </ul>
            </div>


        </div>
        <!-- END: Main Menu-->

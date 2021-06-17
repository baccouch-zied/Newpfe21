<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="/dash"><span class="brand-logo">

                        <h2 class="brand-text">Administrateur</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <d
	iv class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">


            <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Gestion de site</span><i data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="commentaire"><i class="bi bi-chat-left-text"></i><span class="menu-title text-truncate" data-i18n="Email">Gestion Commentaires</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="faq"><i class="bi bi-question-octagon-fill"></i><span class="menu-title text-truncate" data-i18n="Chat">Gestion des FAQS</span></a>
                </li>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="ListeContact"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Invoice">Liste des Contacts</span></a>

                </li>

                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Gestion des acteurs</span><i data-feather="more-horizontal"></i>
                </li>

                <li class=" nav-item"><a class="d-flex align-items-center" href="ListeResto"><i class="bi bi-people-fill"></i> <span class="menu-title text-truncate" data-i18n="Email">Liste des restaurants</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="ListeLivreur"><i class="bi bi-people-fill"></i><span class="menu-title text-truncate" data-i18n="Chat">Liste des livreurs</span></a>
                </li>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="ListeClients"><i class="bi bi-people-fill"></i><span class="menu-title text-truncate" data-i18n="Invoice">Liste des clients</span></a>

                </li>
            </ul>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="padding-left: 50px;">
                                        @csrf
                                        <button type="submit" class="btn btn-primary">
                                      Deconnexion
                                    </button>

                                    </form>
        </div>
    </div>
    <!-- END: Main Menu-->


    <header>
            <div class="container-fluid">
                <div class="header-content d-flex flex-wrap align-items-center">
                    <div class="logo">
                        <a href="index.html" title="">
                            <img src="{{asset('front/images/logo.png')}}" alt="">
                        </a>
                    </div><!--logo end-->
                    <nav>
                        <ul>
                            <li><a href="/" title="">Accueil</a></li>
                            <li><a href="/APropos" title="">A Propos</a></li>
                            <li><a href="/restaurants" title="">Restaurants</a></li>
                            <li><a href="/faqs" title="">Faqs</a>                              
                            </li>
                           @if(auth()->user())
                             <li><a href="{{ route('monprofil') }}">Profil</a></li>
                              @endif
                            <li><a class="active" href="/contact" title="">Contact</a></li>
                        </ul>
                    </nav><!--navigation end-->
                    <div class="menu-btn">
                        <span class="bar1"></span>
                        <span class="bar2"></span>
                        <span class="bar3"></span>
                    </div><!--menu-bar end-->
                    <ul class="oth-lnks ml-auto">
                        <li><img src="{{asset('front/images/icons/phone.svg')}}" alt="">+2165453225</li>
                        <li><a href="/mon-panier" title="" class="cart-ico"><img src="{{asset('front/images/icons/cart.svg')}}" alt=""></a><span class="cart-item-num">{{Cart::count()}}</span></li>
                        <li><a href="/loginC" title="" class="cart-ico">Connexion<img src="{{asset('front/images/icons/sign-in.svg')}}" alt=""></a></li>

                    </ul>
                    <!--oth-lnks end-->
                </div><!--header-content end-->
                <div class="search-bar">
                    <div class="container">
                        <form>
                            <input type="text" name="search" placeholder="Search">
                        </form>
                    </div>    
                </div><!--search-bar end-->
            </div>
        </header><!--header end-->
        
        <div class="responsive-mobile-menu">
            <ul>
                            <li><a href="/" title="">Accueil</a></li>
                            <li><a href="/APropos" title="">A Propos</a></li>
                            <li><a href="/restaurants" title="">Restaurants</a></li>
                            <li><a href="/faqs" title="">Faqs</a>                              
                            </li>

                           @if(auth()->user())
                             <li><a href="{{ route('monprofil') }}">Profil</a></li>
                              @endif
                            <li><a class="active" href="/contact" title="">Contact</a></li>
            </ul>
        </div><!--responsive-mobile-menu end-->
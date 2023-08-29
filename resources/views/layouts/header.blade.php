<!-- mobile site__header -->
<header class="site__header d-lg-none">
    <div class="mobile-header mobile-header--sticky mobile-header--stuck">
        <div class="mobile-header__panel">
            <div class="container">
                <div class="mobile-header__body">
                    <button class="mobile-header__menu-button">
                        <svg width="18px" height="14px">
                            <use xlink:href="{{('assets/images/sprite.svg')}}#menu-18x14"></use>
                        </svg>
                    </button>
                    <a class="mobile-header__logo" href="{{route('home')}}">
                        <img src="{{ asset('assets/images/logos/logo.png')}}" class="" alt="logo" style="height: 50px">
                    </a>
                    <div class="mobile-header__search">
                        <form class="mobile-header__search-form" action="{{ route('home') }}">
                            <input class="mobile-header__search-input" name="search"
                                   placeholder="Search over 10,000 products" aria-label="Site search" type="text"
                                   autocomplete="off">
                            <button class="mobile-header__search-button mobile-header__search-button--submit" type="submit">
                                <svg width="20px" height="20px">
                                    <use xlink:href="{{('assets/images/sprite.svg')}}#search-20"></use>
                                </svg>
                            </button>
                            <button class="mobile-header__search-button mobile-header__search-button--close" type="button">
                                <svg width="20px" height="20px">
                                    <use xlink:href="{{('assets/images/sprite.svg')}}#cross-20"></use>
                                </svg>
                            </button>
                            <div class="mobile-header__search-body"></div>
                        </form>
                    </div>
                    <div class="mobile-header__indicators">
                        <div class="indicator indicator--mobile-search indicator--mobile d-sm-none">
                            <button class="indicator__button">
                                <span class="indicator__area">
                                    <svg width="20px" height="20px">
                                        <use xlink:href="{{('assets/images/sprite.svg')}}#search-20"></use>
                                    </svg>
                                </span>
                            </button>
                        </div>
                        {{--<div class="indicator indicator--mobile d-sm-flex d-none">
                            <a href="wishlist.html" class="indicator__button">
                                <span class="indicator__area">
                                    <svg width="20px" height="20px">
                                        <use xlink:href="{{('assets/images/sprite.svg')}}#heart-20"></use>
                                    </svg>
                                    <span class="indicator__value">0</span>
                                </span>
                            </a>
                        </div>--}}
                        <div class="indicator indicator--mobile">
                            <a href="{{ route('cart') }}" class="indicator__button">
                                <span class="indicator__area">
                                    <svg width="20px" height="20px">
                                        <use xlink:href="{{('assets/images/sprite.svg')}}#cart-20"></use>
                                    </svg>
                                    <span class="indicator__value">{{Cart::count()}}</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- mobile site__header / end -->
<!-- desktop site__header -->
<header class="site__header d-lg-block d-none">
    <div class="site-header">
        <!-- .topbar -->
        <div class="site-header__topbar topbar">
            <div class="topbar__container container">
                <div class="topbar__row">
                    <div class="topbar__item topbar__item--link"><a class="topbar-link" href="about-us.html">A proppos de nous</a></div>
                    <div class="topbar__item topbar__item--link"><a class="topbar-link" href="contact-us.html">Contactez Nous</a></div>
                    <div class="topbar__spring"></div>
                    <div class="topbar__item">
                        <div class="topbar-dropdown">
                            <button class="topbar-dropdown__btn" type="button">
                                Mon compte
                                <svg width="7px" height="5px">
                                    <use xlink:href="{{('assets/images/sprite.svg')}}#arrow-rounded-down-7x5"></use>
                                </svg>
                            </button>
                            <div class="topbar-dropdown__body">
                                <!-- .menu -->
                                <ul class="menu menu--layout--topbar">
                                    @auth
                                        @if (Auth::user()->is_admin)
                                            <li><a href="/admin">Interface Admin</a></li>
                                        @endif
                                        <li><a href="{{ route('dashboard') }}">Commandes</a></li>
                                        <li><a href="{{ route('profile.edit') }}">Parametres du compte</a></li>
                                        <li>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <a href="{{ route('logout') }}"
                                                   onclick="event.preventDefault(); this.closest('form').submit();">
                                                    {{ __('Log Out') }}
                                                </a>
                                            </form>
                                        </li>
                                    @else
                                        <li><a href="{{ route('login') }}">Se connecter</a></li>
                                        @if (Route::has('register'))
                                            <li><a href="{{ route('register') }}">S'inscrire</a></li>
                                        @endif
                                    @endauth
                                </ul>
                                <!-- .menu / end -->
                            </div>
                        </div>
                    </div>
                    {{--
                    <div class="topbar__item">
                        <div class="topbar-dropdown">
                            <button class="topbar-dropdown__btn" type="button">
                                Currency: <span class="topbar__item-value">USD</span>
                                <svg width="7px" height="5px">
                                    <use xlink:href="{{('assets/images/sprite.svg')}}#arrow-rounded-down-7x5"></use>
                                </svg>
                            </button>
                            <div class="topbar-dropdown__body">
                                <!-- .menu -->
                                <ul class="menu menu--layout--topbar">
                                    <li><a href="#">€ Euro</a></li>
                                </ul>
                                <!-- .menu / end -->
                            </div>
                        </div>
                    </div>
                    --}}
                    {{--
                    <div class="topbar__item">
                        <div class="topbar-dropdown">
                            <button class="topbar-dropdown__btn" type="button">
                                Language: <span class="topbar__item-value">EN</span>
                                <svg width="7px" height="5px">
                                    <use xlink:href="{{('assets/images/sprite.svg')}}#arrow-rounded-down-7x5"></use>
                                </svg>
                            </button>
                            <div class="topbar-dropdown__body"><!-- .menu -->
                                <ul class="menu menu--layout--topbar menu--with-icons">
                                    <li>
                                        <a href="#">
                                            <div class="menu__icon">
                                                <img srcset="images/languages/language-1.png, images/languages/language-1@2x.png 2x" src="images/languages/language-1.png" alt="">
                                            </div>
                                            English
                                        </a>
                                    </li>
                                </ul>
                                <!-- .menu / end -->
                            </div>
                        </div>
                    </div>
                    --}}
                </div>
            </div>
        </div><!-- .topbar / end -->
        <div class="site-header__middle container">
            <div class="site-header__logo">
                <a href="{{route('home')}}">
                    <img src="{{ asset('assets/images/logos/logo.png')}}" class="" alt="logo" style="height: 90px; width: 120px">
                </a>
            </div>
            <div class="site-header__search">
                <div class="search">
                    <form class="search__form" action="{{ route('home') }}">
                        <input class="search__input" name="search"
                               placeholder="Rechercher un produit product, une categorie, brand..."
                               aria-label="Site search" type="text"
                               autocomplete="off">
                        <button class="search__button" type="submit">
                            <svg width="20px" height="20px">
                                <use xlink:href="{{('assets/images/sprite.svg')}}#search-20"></use>
                            </svg>
                        </button>
                        <div class="search__border"></div>
                    </form>
                </div>
            </div>
            <div class="site-header__phone">
                <div class="site-header__phone-title">Service Client</div>
                <div class="site-header__phone-number">(+224) 620-39-30-53</div>
                <div class="site-header__phone-number">(+224) 621-20-77-08</div>
            </div>
        </div>
        <div class="site-header__nav-panel">
            <div class="nav-panel">
                <div class="nav-panel__container container">
                    <div class="nav-panel__row">
                        <div class="nav-panel__departments">
                            <!-- .departments -->
                            <div class="departments" data-departments-fixed-by="">
                                <div class="departments__body">
                                    <div class="departments__links-wrapper">
                                        <ul class="departments__links">
                                            @foreach ($categories as $category)
                                                <li class="departments__item">
                                                    <a href="{{ url()->current() }}?{{ http_build_query(array_merge(request()->query(), ['category' => $category->slug])) }}"
                                                       class="{{ $selectedCategory === $category->slug ? 'active' : '' }} font-semibold">
                                                        {{ ucfirst(strtolower($category->name)) }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <button class="departments__button">
                                    <svg class="departments__button-icon" width="18px" height="14px">
                                        <use xlink:href="{{('assets/images/sprite.svg')}}#menu-18x14"></use>
                                    </svg>
                                    Acheter Par Categorie
                                    <svg class="departments__button-arrow" width="9px" height="6px">
                                        <use xlink:href="{{('assets/images/sprite.svg')}}#arrow-rounded-down-9x6"></use>
                                    </svg>
                                </button>
                            </div>
                            <!-- .departments / end -->
                        </div>
                        <!-- .nav-links -->
                        <div class="nav-panel__nav-links nav-links">
                            <ul class="nav-links__list">
                                <li class="nav-links__item"><a href="{{route('home')}}"><span>Accueil</span></a></li>
                                {{--<li class="nav-links__item"><a href="contact-us.html"><span>Contacts</span></a></li>--}}
                            </ul>
                        </div><!-- .nav-links / end -->
                        <div class="nav-panel__indicators">
                            {{--<div class="indicator">
                                <a href="wishlist.html" class="indicator__button">
                                    <span class="indicator__area">
                                        <svg width="20px" height="20px">
                                            <use xlink:href="{{('assets/images/sprite.svg')}}#heart-20"></use>
                                        </svg>
                                        <span class="indicator__value">0</span>
                                    </span>
                                </a>
                            </div>--}}
                            <div class="indicator indicator--trigger--click">
                                <a href="{{ route('cart') }}" class="indicator__button">
                                    <span class="indicator__area">
                                        <svg width="20px" height="20px">
                                            <use xlink:href="{{('assets/images/sprite.svg')}}#cart-20"></use></svg>
                                        <span class="indicator__value">{{Cart::count()}}</span>
                                    </span>
                                </a>
                                <div class="indicator__dropdown">
                                    <!-- .dropcart -->
                                    <div class="dropcart">
                                        <div class="dropcart__products-list">
                                            @foreach (Cart::content() as $item)
                                                <div class="dropcart__product">
                                                    <div class="dropcart__product-image">
                                                        <a href="{{ route('product.details', $item->model->id) }}">
                                                            <img src="{{ asset('storage/'.$item->model->image) }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="dropcart__product-info">
                                                        <div class="dropcart__product-name">
                                                            <a href="{{ route('product.details', $item->model->id) }}">
                                                                {{ strlen($item->model->name) > 15 ? substr($item->model->name, 0, 15) . '...' : $item->model->name }}
                                                            </a>
                                                        </div>
                                                        {{--
                                                        <ul class="dropcart__product-options">
                                                            <li>Color: Yellow</li>
                                                            <li>Material: Aluminium</li>
                                                        </ul>
                                                        --}}
                                                        <div class="dropcart__product-meta">
                                                            <span class="dropcart__product-quantity">{{$item->qty}}</span> x
                                                            <span class="dropcart__product-price">{{$item->model->price}} GNF</span>
                                                        </div>
                                                    </div>
                                                    <div class="shopping-cart-delete">
                                                        <form action="{{ route('destroy.item') }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <input type="hidden" name="row_id" value="{{ $item->rowId }}">
                                                            <button type="submit" class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon">
                                                                <svg width="10px" height="10px">
                                                                    <use xlink:href="{{('assets/images/sprite.svg')}}#cross-10"></use>
                                                                </svg>
                                                            </button>
                                                            {{--
                                                            <a onclick="event.preventDefault(); this.closest('form').submit()">
                                                                <i class="fi-rs-cross-small"></i>
                                                            </a>
                                                            --}}
                                                        </form>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="dropcart__totals">
                                            <table>
                                                <tbody>
                                                <tr>
                                                    <th>Total</th>
                                                    <td>{{Cart::total()}} GNF</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="dropcart__buttons">
                                            <a class="btn btn-secondary" href="{{ route('cart') }}">Voir le Panier</a>
                                            <a class="btn btn-primary" href="{{ route('checkout') }}">Vérifier</a>
                                        </div>
                                    </div>
                                    <!-- .dropcart / end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- desktop site__header / end -->

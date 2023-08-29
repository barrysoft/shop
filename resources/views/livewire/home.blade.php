<x-app-layout>
    <!-- .block-slideshow -->
    <div class="block-slideshow block-slideshow--layout--full block">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="block-slideshow__body">
                        <div class="owl-carousel">
                            <a class="block-slideshow__slide" href="#">
                                <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop"
                                     style="background-image: url({{asset('assets/images/slides/slide-1-full.jpg')}})"></div>
                                <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile"
                                     style="background-image: url({{asset('assets/images/slides/slide-1-mobile.jpg')}})"></div>
                                <div class="block-slideshow__slide-content">
                                    <div class="block-slideshow__slide-title">Big choice of<br>Plumbing products</div>
                                    <div class="block-slideshow__slide-text">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit.<br>Etiam pharetra laoreet dui quis molestie.
                                    </div>
                                    <div class="block-slideshow__slide-button"><span class="btn btn-primary btn-lg">Acheter Maintenant</span>
                                    </div>
                                </div>
                            </a>
                            <a class="block-slideshow__slide" href="#">
                                <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop"
                                     style="background-image: url({{asset('assets/images/slides/slide-2-full.jpg')}})"></div>
                                <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile"
                                     style="background-image: url({{asset('assets/images/slides/slide-2-mobile.jpg')}})"></div>
                                <div class="block-slideshow__slide-content">
                                    <div class="block-slideshow__slide-title">Screwdrivers<br>Professional Tools</div>
                                    <div class="block-slideshow__slide-text">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit.<br>Etiam pharetra laoreet dui quis molestie.
                                    </div>
                                    <div class="block-slideshow__slide-button"><span class="btn btn-primary btn-lg">Acheter Maintenant</span>
                                    </div>
                                </div>
                            </a>
                            <a class="block-slideshow__slide" href="#">
                                <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop"
                                     style="background-image: url({{asset('assets/images/slides/slide-3-full.jpg')}})"></div>
                                <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile"
                                     style="background-image: url({{asset('assets/images/slides/slide-3-mobile.jpg')}})"></div>
                                <div class="block-slideshow__slide-content">
                                    <div class="block-slideshow__slide-title">One more<br>Unique header</div>
                                    <div class="block-slideshow__slide-text">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit.<br>Etiam pharetra laoreet dui quis molestie.
                                    </div>
                                    <div class="block-slideshow__slide-button"><span class="btn btn-primary btn-lg">Acheter Maintenant</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .block-slideshow / end -->

    <!-- .block-features -->
    <div class="block block-features block-features--layout--classic">
        <div class="container">
            <div class="block-features__list">
                <div class="block-features__item">
                    <div class="block-features__icon">
                        <svg width="48px" height="48px">
                            <use xlink:href="{{asset('assets/images/sprite.svg')}}#fi-free-delivery-48"></use>
                        </svg>
                    </div>
                    <div class="block-features__content">
                        <div class="block-features__title">Livraison Gratuite</div>
                        <div class="block-features__subtitle">Pour les commandes à partir de ...</div>
                    </div>
                </div>
                <div class="block-features__divider"></div>
                <div class="block-features__item">
                    <div class="block-features__icon">
                        <svg width="48px" height="48px">
                            <use xlink:href="{{asset('assets/images/sprite.svg')}}#fi-24-hours-48"></use>
                        </svg>
                    </div>
                    <div class="block-features__content">
                        <div class="block-features__title">Assistance 24h/24 et 7j/7</div>
                        <div class="block-features__subtitle">Appelez-nous à tout moment</div>
                    </div>
                </div>
                <div class="block-features__divider"></div>
                <div class="block-features__item">
                    <div class="block-features__icon">
                        <svg width="48px" height="48px">
                            <use xlink:href="{{asset('assets/images/sprite.svg')}}#fi-payment-security-48"></use>
                        </svg>
                    </div>
                    <div class="block-features__content">
                        <div class="block-features__title">100% Sécurité</div>
                        <div class="block-features__subtitle">Uniquement des paiements sécurisés</div>
                    </div>
                </div>
                <div class="block-features__divider"></div>
                <div class="block-features__item">
                    <div class="block-features__icon">
                        <svg width="48px" height="48px">
                            <use xlink:href="{{asset('assets/images/sprite.svg')}}#fi-tag-48"></use>
                        </svg>
                    </div>
                    <div class="block-features__content">
                        <div class="block-features__title">Offres spéciales</div>
                        <div class="block-features__subtitle">Réductions jusqu'à x%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .block-features / end -->

    <!-- .block-products-carousel -->
    <div class="block block-products-carousel" data-layout="grid-5">
        <div class="container">
            <div class="block-header">
{{--
                <h3 class="block-header__title">Featured Products</h3>
                <div class="block-header__divider"></div>
                <ul class="block-header__groups-list">
                    <li>
                        <button class="block-header__group block-header__group--active" type="button">All</button>
                    </li>
                    <li>
                        <button class="block-header__group" type="button">Power Tools</button>
                    </li>
                    <li>
                        <button class="block-header__group" type="button">Hand Tools</button>
                    </li>
                    <li>
                        <button class="block-header__group" type="button">Plumbing</button>
                    </li>
                </ul>
                <div class="block-header__arrows-list">
                    <button class="block-header__arrow block-header__arrow--left" type="button">
                        <svg height="11px" width="7px">
                            <use xlink:href="{{asset('assets/images/sprite.svg')}}#arrow-rounded-left-7x11"></use>
                        </svg>
                    </button>
                    <button class="block-header__arrow block-header__arrow--right" type="button">
                        <svg height="11px" width="7px">
                            <use xlink:href="{{asset('assets/images/sprite.svg')}}#arrow-rounded-right-7x11"></use>
                        </svg>
                    </button>
                </div>


                <div class="totall-product">
                    <p> We found <strong class="text-brand">{{ $products->total() }}</strong> items for you!</p>
                </div>
                <div class="sort-by-product-area">
                    <div class="sort-by-cover">
                        <div class="sort-by-product-wrap">
                            <div class="sort-by">
                                <span><i class="fi-rs-apps-sort"></i>Sort by:</span>
                            </div>
                            <div class="sort-by-dropdown-wrap">
                                    <span>
                                        @if ($sort === 'latest')
                                            Latest: New Released
                                        @elseif ($sort === 'low-to-high')
                                            Price: Low to High
                                        @elseif ($sort === 'high-to-low')
                                            Price: High to Low
                                        @else
                                            Default Sorting
                                        @endif
                                        <i class="fi-rs-angle-small-down"></i>
                                    </span>
                            </div>
                        </div>
                        <div class="sort-by-dropdown">
                            <ul>
                                <li><a class="{{ $sort === 'latest' ? 'active' : '' }}"
                                       href="{{ url()->current() }}?{{ http_build_query(array_merge(request()->query(), ['sort' => 'latest'])) }}">Latest:
                                        New Released</a></li>
                                <li><a class="{{ $sort === 'low-to-high' ? 'active' : '' }}"
                                       href="{{ url()->current() }}?{{ http_build_query(array_merge(request()->query(), ['sort' => 'low-to-high'])) }}">Price:
                                        Low to High</a></li>
                                <li><a class="{{ $sort === 'high-to-low' ? 'active' : '' }}"
                                       href="{{ url()->current() }}?{{ http_build_query(array_merge(request()->query(), ['sort' => 'high-to-low'])) }}">Price:
                                        High to Low</a></li>
                                <li><a href="{{ route('home') }}">Default Sorting</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
--}}
            </div>
            <div class="row product-grid-4">
                @foreach ($products as $p)
                    <div class="col-lg-3 col-md-3 col-6 col-sm-6 mb-4">
                        <div class="product-card">
                            <button class="product-card__quickview" type="button">
                                <svg height="16px" width="16px">
                                    <use xlink:href="{{asset('assets/images/sprite.svg')}}#quickview-16"></use>
                                </svg>
                                <span class="fake-svg-icon"></span>
                            </button>
                            <div class="product-card__image">
                                <a href="{{ route('product.details', $p->id) }}">
                                    <img src="{{  asset('storage/'.$p->image) }}" alt="{{$p->name}}">
                                </a>
                            </div>
                            <div class="product-card__info">
                                <div class="product-card__name">
                                    <a href="{{ route('product.details', $p->id) }}">
{{--                                        {{ strlen($p->name) > 20 ? substr($p->name, 0, 17) . '...': $p->name }}--}}
                                        {{ucfirst(strtolower($p->name))}}
                                    </a>
                                </div>
                                <div class="product-card__rating">
                                    <div class="rating">
                                        <div class="rating__body">
                                            <svg class="rating__star rating__star--active" height="12px"
                                                 width="13px">
                                                <g class="rating__fill">
                                                    <use xlink:href="{{asset('assets/images/sprite.svg')}}#star-normal"></use>
                                                </g>
                                                <g class="rating__stroke">
                                                    <use xlink:href="{{asset('assets/images/sprite.svg')}}#star-normal-stroke"></use>
                                                </g>
                                            </svg>
                                            <div class="rating__star rating__star--only-edge rating__star--active">
                                                <div class="rating__fill">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                                <div class="rating__stroke">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                            </div>
                                            <svg class="rating__star rating__star--active" height="12px"
                                                 width="13px">
                                                <g class="rating__fill">
                                                    <use xlink:href="{{asset('assets/images/sprite.svg')}}#star-normal"></use>
                                                </g>
                                                <g class="rating__stroke">
                                                    <use xlink:href="{{asset('assets/images/sprite.svg')}}#star-normal-stroke"></use>
                                                </g>
                                            </svg>
                                            <div class="rating__star rating__star--only-edge rating__star--active">
                                                <div class="rating__fill">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                                <div class="rating__stroke">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                            </div>
                                            <svg class="rating__star rating__star--active" height="12px"
                                                 width="13px">
                                                <g class="rating__fill">
                                                    <use xlink:href="{{asset('assets/images/sprite.svg')}}#star-normal"></use>
                                                </g>
                                                <g class="rating__stroke">
                                                    <use xlink:href="{{asset('assets/images/sprite.svg')}}#star-normal-stroke"></use>
                                                </g>
                                            </svg>
                                            <div class="rating__star rating__star--only-edge rating__star--active">
                                                <div class="rating__fill">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                                <div class="rating__stroke">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                            </div>
                                            <svg class="rating__star rating__star--active" height="12px"
                                                 width="13px">
                                                <g class="rating__fill">
                                                    <use xlink:href="{{asset('assets/images/sprite.svg')}}#star-normal"></use>
                                                </g>
                                                <g class="rating__stroke">
                                                    <use xlink:href="{{asset('assets/images/sprite.svg')}}#star-normal-stroke"></use>
                                                </g>
                                            </svg>
                                            <div class="rating__star rating__star--only-edge rating__star--active">
                                                <div class="rating__fill">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                                <div class="rating__stroke">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                            </div>
                                            <svg class="rating__star rating__star--active" height="12px"
                                                 width="13px">
                                                <g class="rating__fill">
                                                    <use xlink:href="{{asset('assets/images/sprite.svg')}}#star-normal"></use>
                                                </g>
                                                <g class="rating__stroke">
                                                    <use xlink:href="{{asset('assets/images/sprite.svg')}}#star-normal-stroke"></use>
                                                </g>
                                            </svg>
                                            <div class="rating__star rating__star--only-edge rating__star--active">
                                                <div class="rating__fill">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                                <div class="rating__stroke">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card__rating-legend">11 Reviews</div>
                                </div>
                                <ul class="product-card__features-list">
                                    <li>Speed: 750 RPM</li>
                                    <li>Power Source: Cordless-Electric</li>
                                    <li>Battery Cell Type: Lithium</li>
                                    <li>Voltage: 20 Volts</li>
                                    <li>Battery Capacity: 2 Ah</li>
                                </ul>
                            </div>
                            <div class="product-card__actions">
                                <div class="product-card__availability">
                                    Availability: <span class="text-success">En stock</span>
                                </div>
                                <div class="product-card__prices">{{--{{ $p->price }} GNF--}}</div>
                                <div class="product-card__buttons">
                                    <form action="{{ route('cart.add') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $p->id }}">
                                        <button class="btn btn-primary product-card__addtocart" type="submit">
                                            Ajouter au Panier
                                        </button>
                                        <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="submit">
                                            Ajouter au Panier
                                        </button>
                                        <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button">
                                            <svg height="16px" width="16px">
                                                <use xlink:href="{{asset('assets/images/sprite.svg')}}#wishlist-16"></use>
                                            </svg>
                                            <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span>
                                        </button>
                                        <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button">
                                            <svg height="16px" width="16px">
                                                <use xlink:href="{{asset('assets/images/sprite.svg')}}#compare-16"></use>
                                            </svg>
                                            <span class="fake-svg-icon fake-svg-icon--compare-16"></span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!--pagination-->
            {{ $products->links('pagination::tailwind') }}
        </div>
    </div>
    <!-- .block-products-carousel / end -->

</x-app-layout>

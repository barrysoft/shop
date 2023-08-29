<x-app-layout>
    <div class="page-header">
        <div class="page-header__container container">
            <div class="page-header__breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        {{--<li class="breadcrumb-item">
                            <a href="{{route('home')}}">Home</a>
                            <svg class="breadcrumb-arrow" height="9px" width="6px">
                                <use xlink:href="{{asset('assets/images/sprite.svg')}}#arrow-rounded-right-6x9"></use>
                            </svg>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Breadcrumb</a>
                            <svg class="breadcrumb-arrow" height="9px" width="6px">
                                <use xlink:href="{{asset('assets/images/sprite.svg')}}#arrow-rounded-right-6x9"></use>
                            </svg>
                        </li>
                        <li aria-current="page" class="breadcrumb-item active">Brandix Screwdriver SCREW1500ACC</li>--}}
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="block">
        <div class="container">
            <div class="product product--layout--standard" data-layout="standard">
                <div class="product__content"><!-- .product__gallery -->
                    <div class="product__gallery">
                        <div class="product-gallery">
                            <div class="product-gallery__featured">
                                <div class="owl-carousel" id="product-image">
                                    @foreach ($product->images as $img)
                                        <a href="#" target="_blank">
                                            <img src="{{ asset('storage/'.$img) }}" alt="product image">
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                            <div class="product-gallery__carousel">
                                <div class="owl-carousel" id="product-carousel">
                                    @foreach ($product->images as $img)
                                        <a class="product-gallery__carousel-item" href="#">
                                            <img class="product-gallery__carousel-image" src="{{ asset('storage/'.$img) }}" alt="product image">
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .product__gallery / end -->
                    <!-- .product__info -->
                    <div class="product__info">
                        <div class="product__wishlist-compare">
                            <button class="btn btn-sm btn-light btn-svg-icon" data-placement="right" data-toggle="tooltip" title="Wishlist" type="button">
                                <svg height="16px" width="16px">
                                    <use xlink:href="{{asset('assets/images/sprite.svg')}}#wishlist-16"></use>
                                </svg>
                            </button>
                            <button class="btn btn-sm btn-light btn-svg-icon" data-placement="right" data-toggle="tooltip" title="Compare" type="button">
                                <svg height="16px" width="16px">
                                    <use xlink:href="{{asset('assets/images/sprite.svg')}}#compare-16"></use>
                                </svg>
                            </button>
                        </div>
                        <h1 class="product__name">{{ $product->name }}</h1>
                        <div class="product__rating">
                            <div class="product__rating-stars">
                                <div class="rating">
                                    <div class="rating__body">
                                        <svg class="rating__star rating__star--active" height="12px" width="13px">
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
                                        <svg class="rating__star rating__star--active" height="12px" width="13px">
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
                                        <svg class="rating__star rating__star--active" height="12px" width="13px">
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
                                        <svg class="rating__star rating__star--active" height="12px" width="13px">
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
                                        <svg class="rating__star rating__star--active" height="12px" width="13px">
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
                            </div>
                            <div class="product__rating-legend">
                                <a href="#">7 Avis</a><span>/</span>
                                <a href="#">Écrire une critique</a>
                            </div>
                        </div>
                        <div class="product__description">
                            {{ $product->brief_description }}
                        </div>
                        <ul class="product__features">
                            <li class="mb-10"><i class="fi-rs-crown mr-5"></i> Garantie de 1 an sur la marque AL Jazeera</li>
                            <li class="mb-10"><i class="fi-rs-refresh mr-5"></i> Politique de retour sous 30 jours</li>
                            <li><i class="fi-rs-credit-card mr-5"></i> Paiement à la livraison disponible</li>
{{--                            <li>Speed: 750 RPM</li>--}}
{{--                            <li>Power Source: Cordless-Electric</li>--}}
{{--                            <li>Battery Cell Type: Lithium</li>--}}
{{--                            <li>Voltage: 20 Volts</li>--}}
{{--                            <li>Battery Capacity: 2 Ah</li>--}}
                        </ul>
                        <ul class="product__meta">
                            <li class="product__meta-availability">Disponibilité:
                                @if ($product->stock_status === 'instock')
                                    <span class="text-success">{{ $product->quantity }} Produits en stock</span>
                                @else
                                    <span class="text-danger">En supture de stock</span>
                                @endif
                            </li>
                            {{--<li>Brands:
                                @foreach ($product->categories as $index => $cat)
                                    <a href="/?{{ http_build_query(array_merge(request()->query(), ['category' => $cat->slug])) }}"
                                       el="tag">{{ $cat->name }}</a>
                                    @if ($index !== count($product->categories) - 1)
                                        ,
                                    @endif
                                @endforeach
                            </li>
                            <li>SKU: {{ $product->SKU }}</li>--}}
                        </ul>
                    </div>
                    <!-- .product__info / end -->

                    <!-- .product__sidebar -->
                    <div class="product__sidebar">
                        <div class="product__availability">
                            Disponibilité:
                            @if ($product->stock_status === 'instock')
                                <span class="in-stock text-success ml-5">{{ $product->quantity }} Produits en stock</span>
                            @else
                                <span class="out-stock text-danger ml-5">En supture de stock</span>
                            @endif
                        </div>
                        <div class="product__prices">
                            {{--{{ $product->price }} GNF--}}
                        </div>
                        <!-- .product__options -->
                        <form class="product__options" action="{{ route('cart.add') }}" method="post">
                            @csrf
                            {{--
                            <div class="form-group product__option">
                                <label class="product__option-label">Color</label>
                                <div class="input-radio-color">
                                    <div class="input-radio-color__list">
                                        <label class="input-radio-color__item input-radio-color__item--white" data-toggle="tooltip" style="color: #fff;" title="White">
                                            <input name="color" type="radio">
                                            <span></span>
                                        </label>
                                        <label class="input-radio-color__item" data-toggle="tooltip" style="color: #ffd333;" title="Yellow">
                                            <input name="color" type="radio">
                                            <span></span>
                                        </label>
                                        <label class="input-radio-color__item" data-toggle="tooltip" style="color: #ff4040;" title="Red">
                                            <input name="color" type="radio">
                                            <span></span></label>
                                        <label class="input-radio-color__item input-radio-color__item--disabled" data-toggle="tooltip" style="color: #4080ff;" title="Blue">
                                            <input disabled="disabled" name="color" type="radio">
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group product__option">
                                <label class="product__option-label">Material</label>
                                <div class="input-radio-label">
                                    <div class="input-radio-label__list">
                                        <label>
                                            <input name="material" type="radio">
                                            <span>Metal</span>
                                        </label>
                                        <label>
                                            <input name="material" type="radio">
                                            <span>Wood</span>
                                        </label>
                                        <label>
                                            <input disabled="disabled" name="material" type="radio">
                                            <span>Plastic</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            --}}
                            <div class="form-group product__option">
                                {{--<label class="product__option-label" for="product-quantity">Quantité</label>--}}
                                <div class="product__actions">
                                    {{--<div class="product__actions-item">
                                        <div class="input-number product__quantity">
                                            <input class="input-number__input form-control form-control-lg" id="product-quantity" min="1" type="number" value="1">
                                            <div class="input-number__add"></div>
                                            <div class="input-number__sub"></div>
                                        </div>
                                    </div>--}}
                                    <div class="product__actions-item product__actions-item--addtocart">
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <button type="submit" class="btn btn-primary btn-lg">Ajouter au panier</button>
                                    </div>
                                    <div class="product__actions-item product__actions-item--wishlist">
                                        <button class="btn btn-secondary btn-svg-icon btn-lg" data-toggle="tooltip" title="Wishlist" type="button">
                                            <svg height="16px" width="16px">
                                                <use xlink:href="{{asset('assets/images/sprite.svg')}}#wishlist-16"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="product__actions-item product__actions-item--compare">
                                        <button class="btn btn-secondary btn-svg-icon btn-lg" data-toggle="tooltip" title="Compare" type="button">
                                            <svg height="16px" width="16px">
                                                <use xlink:href="{{asset('assets/images/sprite.svg')}}#compare-16"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- .product__options / end -->
                    </div>
                    <!-- .product__end -->
                    <div class="product__footer">
                        <div class="product__tags tags">
                            <div class="tags__list">
                                @foreach ($product->categories as $index => $cat)
                                    <a href="/?{{ http_build_query(array_merge(request()->query(), ['category' => $cat->slug])) }}"
                                       el="tag">{{ $cat->name }}</a>
                                    @if ($index !== count($product->categories) - 1)
                                        ,
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="product__share-links share-links">
                            <ul class="share-links__list">
                                <li class="share-links__item share-links__item--type--like"><a href="#">Like</a>
                                </li>
                                <li class="share-links__item share-links__item--type--tweet"><a href="#">Tweet</a>
                                </li>
                                <li class="share-links__item share-links__item--type--pin"><a href="#">Pin It</a>
                                </li>
                                <li class="share-links__item share-links__item--type--counter"><a href="#">4K</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-tabs">
                <div class="product-tabs__list">
                    <a class="product-tabs__item product-tabs__item--active" href="#tab-description">Description</a>
                    <a class="product-tabs__item" href="#tab-specification">Specification</a>
                    <a class="product-tabs__item" href="#tab-reviews">Reviews</a>
                </div>
                <div class="product-tabs__content">
                    <div class="product-tabs__pane product-tabs__pane--active" id="tab-description">
                        <div class="typography">
                            <h3>Description</h3>
                            {!!$product->description!!}
                        </div>
                    </div>
                    {{--
                    <div class="product-tabs__pane" id="tab-specification">
                        <div class="spec">
                            <h3 class="spec__header">Specification</h3>
                            <div class="spec__section">
                                <h4 class="spec__section-title">General</h4>
                                <div class="spec__row">
                                    <div class="spec__name">Material</div>
                                    <div class="spec__value">Aluminium, Plastic</div>
                                </div>
                                <div class="spec__row">
                                    <div class="spec__name">Engine Type</div>
                                    <div class="spec__value">Brushless</div>
                                </div>
                                <div class="spec__row">
                                    <div class="spec__name">Battery Voltage</div>
                                    <div class="spec__value">18 V</div>
                                </div>
                                <div class="spec__row">
                                    <div class="spec__name">Battery Type</div>
                                    <div class="spec__value">Li-lon</div>
                                </div>
                                <div class="spec__row">
                                    <div class="spec__name">Number of Speeds</div>
                                    <div class="spec__value">2</div>
                                </div>
                                <div class="spec__row">
                                    <div class="spec__name">Charge Time</div>
                                    <div class="spec__value">1.08 h</div>
                                </div>
                                <div class="spec__row">
                                    <div class="spec__name">Weight</div>
                                    <div class="spec__value">1.5 kg</div>
                                </div>
                            </div>
                            <div class="spec__section">
                                <h4 class="spec__section-title">Dimensions</h4>
                                <div class="spec__row">
                                    <div class="spec__name">Length</div>
                                    <div class="spec__value">99 mm</div>
                                </div>
                                <div class="spec__row">
                                    <div class="spec__name">Width</div>
                                    <div class="spec__value">207 mm</div>
                                </div>
                                <div class="spec__row">
                                    <div class="spec__name">Height</div>
                                    <div class="spec__value">208 mm</div>
                                </div>
                            </div>
                            <div class="spec__disclaimer">
                                Information on technical characteristics, the delivery
                                set, the country of manufacture and the appearance of the goods is for reference
                                only and is based on the latest information available at the time of publication.
                            </div>
                        </div>
                    </div>
                    <div class="product-tabs__pane" id="tab-reviews">
                        <div class="reviews-view">
                            <div class="reviews-view__list"><h3 class="reviews-view__header">Customer Reviews</h3>
                                <div class="reviews-list">
                                    <ol class="reviews-list__content">
                                        <li class="reviews-list__item">
                                            <div class="review">
                                                <div class="review__avatar"><img alt=""
                                                                                 src="images/avatars/avatar-1.jpg"></div>
                                                <div class="review__content">
                                                    <div class="review__author">Samantha Smith</div>
                                                    <div class="review__rating">
                                                        <div class="rating">
                                                            <div class="rating__body">
                                                                <svg class="rating__star rating__star--active"
                                                                     height="12px" width="13px">
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
                                                                <svg class="rating__star rating__star--active"
                                                                     height="12px" width="13px">
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
                                                                <svg class="rating__star rating__star--active"
                                                                     height="12px" width="13px">
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
                                                                <svg class="rating__star rating__star--active"
                                                                     height="12px" width="13px">
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
                                                                <svg class="rating__star" height="12px"
                                                                     width="13px">
                                                                    <g class="rating__fill">
                                                                        <use xlink:href="{{asset('assets/images/sprite.svg')}}#star-normal"></use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use xlink:href="{{asset('assets/images/sprite.svg')}}#star-normal-stroke"></use>
                                                                    </g>
                                                                </svg>
                                                                <div class="rating__star rating__star--only-edge">
                                                                    <div class="rating__fill">
                                                                        <div class="fake-svg-icon"></div>
                                                                    </div>
                                                                    <div class="rating__stroke">
                                                                        <div class="fake-svg-icon"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="review__text">Phasellus id mattis nulla. Mauris
                                                        velit nisi, imperdiet vitae sodales in, maximus ut lectus.
                                                        Vivamus commodo scelerisque lacus, at porttitor dui iaculis
                                                        id. Curabitur imperdiet ultrices fermentum.
                                                    </div>
                                                    <div class="review__date">27 May, 2018</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="reviews-list__item">
                                            <div class="review">
                                                <div class="review__avatar"><img alt=""
                                                                                 src="images/avatars/avatar-2.jpg"></div>
                                                <div class="review__content">
                                                    <div class="review__author">Adam Taylor</div>
                                                    <div class="review__rating">
                                                        <div class="rating">
                                                            <div class="rating__body">
                                                                <svg class="rating__star rating__star--active"
                                                                     height="12px" width="13px">
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
                                                                <svg class="rating__star rating__star--active"
                                                                     height="12px" width="13px">
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
                                                                <svg class="rating__star rating__star--active"
                                                                     height="12px" width="13px">
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
                                                                <svg class="rating__star" height="12px"
                                                                     width="13px">
                                                                    <g class="rating__fill">
                                                                        <use xlink:href="{{asset('assets/images/sprite.svg')}}#star-normal"></use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use xlink:href="{{asset('assets/images/sprite.svg')}}#star-normal-stroke"></use>
                                                                    </g>
                                                                </svg>
                                                                <div class="rating__star rating__star--only-edge">
                                                                    <div class="rating__fill">
                                                                        <div class="fake-svg-icon"></div>
                                                                    </div>
                                                                    <div class="rating__stroke">
                                                                        <div class="fake-svg-icon"></div>
                                                                    </div>
                                                                </div>
                                                                <svg class="rating__star" height="12px"
                                                                     width="13px">
                                                                    <g class="rating__fill">
                                                                        <use xlink:href="{{asset('assets/images/sprite.svg')}}#star-normal"></use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use xlink:href="{{asset('assets/images/sprite.svg')}}#star-normal-stroke"></use>
                                                                    </g>
                                                                </svg>
                                                                <div class="rating__star rating__star--only-edge">
                                                                    <div class="rating__fill">
                                                                        <div class="fake-svg-icon"></div>
                                                                    </div>
                                                                    <div class="rating__stroke">
                                                                        <div class="fake-svg-icon"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="review__text">Aenean non lorem nisl. Duis tempor
                                                        sollicitudin orci, eget tincidunt ex semper sit amet. Nullam
                                                        neque justo, sodales congue feugiat ac, facilisis a augue.
                                                        Donec tempor sapien et fringilla facilisis. Nam maximus
                                                        consectetur diam. Nulla ut ex mollis, volutpat tellus vitae,
                                                        accumsan ligula.
                                                    </div>
                                                    <div class="review__date">12 April, 2018</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="reviews-list__item">
                                            <div class="review">
                                                <div class="review__avatar"><img alt=""
                                                                                 src="images/avatars/avatar-3.jpg"></div>
                                                <div class="review__content">
                                                    <div class="review__author">Helena Garcia</div>
                                                    <div class="review__rating">
                                                        <div class="rating">
                                                            <div class="rating__body">
                                                                <svg class="rating__star rating__star--active"
                                                                     height="12px" width="13px">
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
                                                                <svg class="rating__star rating__star--active"
                                                                     height="12px" width="13px">
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
                                                                <svg class="rating__star rating__star--active"
                                                                     height="12px" width="13px">
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
                                                                <svg class="rating__star rating__star--active"
                                                                     height="12px" width="13px">
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
                                                                <svg class="rating__star rating__star--active"
                                                                     height="12px" width="13px">
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
                                                    </div>
                                                    <div class="review__text">Duis ac lectus scelerisque quam
                                                        blandit egestas. Pellentesque hendrerit eros laoreet
                                                        suscipit ultrices.
                                                    </div>
                                                    <div class="review__date">2 January, 2018</div>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                    <div class="reviews-list__pagination">
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item disabled"><a
                                                    aria-label="Previous" class="page-link page-link--with-arrow"
                                                    href="#">
                                                    <svg aria-hidden="true"
                                                         class="page-link__arrow page-link__arrow--left" height="13px" width="8px">
                                                        <use xlink:href="{{asset('assets/images/sprite.svg')}}#arrow-rounded-left-8x13"></use>
                                                    </svg>
                                                </a></li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item active"><a class="page-link" href="#">2 <span
                                                        class="sr-only">(current)</span></a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a aria-label="Next"
                                                                     class="page-link page-link--with-arrow" href="#">
                                                    <svg aria-hidden="true"
                                                         class="page-link__arrow page-link__arrow--right" height="13px" width="8px">
                                                        <use xlink:href="{{asset('assets/images/sprite.svg')}}#arrow-rounded-right-8x13"></use>
                                                    </svg>
                                                </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <form class="reviews-view__form"><h3 class="reviews-view__header">Write A Review</h3>
                                <div class="row">
                                    <div class="col-12 col-lg-9 col-xl-8">
                                        <div class="form-row">
                                            <div class="form-group col-md-4"><label for="review-stars">Review
                                                    Stars</label> <select class="form-control" id="review-stars">
                                                    <option>5 Stars Rating</option>
                                                    <option>4 Stars Rating</option>
                                                    <option>3 Stars Rating</option>
                                                    <option>2 Stars Rating</option>
                                                    <option>1 Stars Rating</option>
                                                </select></div>
                                            <div class="form-group col-md-4"><label for="review-author">Your
                                                    Name</label> <input class="form-control" id="review-author"
                                                                        placeholder="Your Name" type="text">
                                            </div>
                                            <div class="form-group col-md-4"><label for="review-email">Email
                                                    Address</label> <input class="form-control" id="review-email"
                                                                           placeholder="Email Address"
                                                                           type="text"></div>
                                        </div>
                                        <div class="form-group"><label for="review-text">Your Review</label>
                                            <textarea class="form-control" id="review-text" rows="6"></textarea>
                                        </div>
                                        <div class="form-group mb-0">
                                            <button class="btn btn-primary btn-lg" type="submit">Post Your Review
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <div class="page-header">
        <div class="page-header__container container">
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            {{--<div class="page-header__breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
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
                        <li aria-current="page" class="breadcrumb-item active">Shopping Cart</li>
                    </ol>
                </nav>
            </div>
            <div class="page-header__title"><h1>Shopping Cart</h1></div>--}}
        </div>
    </div>
    <div class="cart block">
        <div class="container">
            <table class="cart__table cart-table">
                <thead class="cart-table__head">
                <tr class="cart-table__row">
                    <th class="cart-table__column cart-table__column--image">Image</th>
                    <th class="cart-table__column cart-table__column--product">Nom</th>
                    <th class="cart-table__column cart-table__column--price">Prix</th>
                    <th class="cart-table__column cart-table__column--quantity">Quantité</th>
                    <th class="cart-table__column cart-table__column--total">Total</th>
                    <th class="cart-table__column cart-table__column--remove"></th>
                </tr>
                </thead>
                @if (Cart::count() > 0)
                    <tbody class="cart-table__body">
                    @foreach (Cart::content() as $item)
                        <tr class="cart-table__row">
                            <td class="cart-table__column cart-table__column--image">
                                <a href="{{ route('product.details', $item->model->id) }}">
                                    <img src="{{ asset('storage/' . $item->model->image) }}" alt="{{ $item->model->name }}">
                                </a>
                            </td>
                            <td class="cart-table__column cart-table__column--product">
                                <a class="cart-table__product-name" href="{{ route('product.details', $item->model->id) }}">
                                    {{ ucfirst($item->model->name) }}
                                </a>
                                {{--
                                <p class="font-xs">
                                    {{ $item->model->brief_description }}
                                </p>
                                <ul class="cart-table__options">
                                    <li>Color: Yellow</li>
                                    <li>Material: Aluminium</li>
                                </ul>
                                --}}
                            </td>
                            <td class="cart-table__column cart-table__column--price" data-title="Price">
                                {{--{{ $item->model->price }} GNF--}}
                            </td>
                            <td class="cart-table__column cart-table__column--quantity" data-title="Quantity">
                                <div>
                                    <form action="{{ route('qty.up') }}" method="post" id="qtyUp">
                                        @csrf
                                        <input type="hidden" name="row_id" value="{{ $item->rowId }}">
                                    </form>
                                    <form action="{{ route('qty.down') }}" method="post" id="qtyDown">
                                        @csrf
                                        <input type="hidden" name="row_id" value="{{ $item->rowId }}">
                                    </form>
                                </div>
                                {{ $item->quantity }}
                                <div class="input-number">
                                    <input class="form-control input-number__input" min="1" type="number" value="{{ $item->qty }}">
                                    <div class="input-number__add" onclick="document.getElementById('qtyUp').submit();"></div>
                                    <div class="input-number__sub" onclick="document.getElementById('qtyDown').submit();"></div>
                                </div>
                            </td>
                            <td class="cart-table__column cart-table__column--total" data-title="Total">
                                {{--{{ $item->subtotal }} GNF--}}
                            </td>
                            <td class="cart-table__column cart-table__column--remove">
                                <form action="{{ route('destroy.item') }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="row_id" value="{{ $item->rowId }}">
                                    <button class="btn btn-light btn-sm btn-svg-icon" type="submit">
                                        <svg height="12px" width="12px">
                                            <use xlink:href="{{asset('assets/images/sprite.svg')}}#cross-12"></use>
                                        </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                @else
                    <h1 class="text-xl font-bold pb-20">Aucun article dans le panier</h1>
                @endif
            </table>
            <div class="cart__actions">
                <form class="cart__coupon-form" action="{{ route('destroy.cart') }}" method="post">
                    @csrf
                    @method('DELETE')
                    {{--<label class="sr-only" for="input-coupon-code">Password</label>
                    <input class="form-control" id="input-coupon-code" placeholder="Coupon Code" type="text">--}}
                    <button class="btn btn-danger" type="submit">Vider le panier</button>
                </form>
                <div class="cart__buttons">
                    <a class="btn btn-light" href="{{route('home')}}">Continuer a acheter</a>
                    {{--<a class="btn btn-primary cart__update-button" href="#">Update Cart</a>--}}
                </div>
            </div>
            @if (Cart::count() > 0)
            <div class="row justify-content-end pt-5">
                <div class="col-12 col-md-7 col-lg-6 col-xl-5">
                    <div class="card">
                        <div class="card-body"><h3 class="card-title">Totaux du panier</h3>
                            <table class="cart__totals">
                                <thead class="cart__totals-header">
                                <tr>
                                    <th>Sous-total</th>
                                    <td>{{--{{ Cart::subtotal() }} GNF--}}</td>
                                </tr>
                                </thead>
                                <tbody class="cart__totals-body">
                                <tr>
                                    <th>Frais de livraison</th>
                                    <td>
                                        <div class="cart__calc-shipping">
                                            <a href="#">Livraison Gratuite</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Taxe</th>
                                    <td>{{--{{ Cart::tax() }} GNF--}}</td>
                                </tr>
                                </tbody>
                                <tfoot class="cart__totals-footer">
                                <tr>
                                    <th>Total</th>
                                    <td>{{--{{ Cart::total() }} GNF--}}</td>
                                </tr>
                                </tfoot>
                            </table>
                            <a class="btn btn-primary btn-xl btn-block cart__checkout-button" href="{{ route('checkout') }}">
                                Passer à la caisse
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</x-app-layout>

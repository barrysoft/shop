<x-app-layout>
    <div class="checkout block">
        <div class="container">
            <div class="row mt-2">
                <div class="col-12 col-md-6 col-lg-6 col-xl-7">
                    <div class="card mb-lg-0">
                        <div class="card-body">
                            <h3 class="card-title">Details de la facture</h3>
                            <form method="post" action="{{route('checkout.order')}}" id="checkoutForm">
                                @csrf
                                <div class="form-group">
                                    <label for="billing_address">Adresse</label>
                                    <input id="billing_address" name="billing_address" type="text"
                                           class="form-control" value="{{$billingDetails ? $billingDetails->billing_address : ''}}" required autofocus autocomplete="billing_address" />
                                    @error('billing_address')<span class="text-danger">{{$message}}</span>@enderror
                                </div>
                                <div class="form-group">
                                    <label for="phone">Numéro de téléphone</label>
                                    <input id="phone" name="phone" type="text" class="form-control"
                                           autofocus autocomplete="phone" value="{{$billingDetails ? $billingDetails->phone : ''}}"/>
                                    @error('phone')<span class="text-danger">{{$message}}</span>@enderror
                                </div>
                                <div class="form-group">
                                    <label for="order_notes">Information complementaire<span class="text-muted">(Optionel)</span></label>
                                    <textarea name="order_notes" type="text" class="form-control"
                                              autofocus autocomplete="order_notes" placeholder="Any notes?" rows="4">
                                        {{$billingDetails ? $billingDetails->order_notes : ''}}
                                    </textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 col-xl-5 mt-4 mt-lg-0">
                    <div class="card mb-0">
                        <div class="card-body">
                            <h3 class="card-title">Votre Commande</h3>
                            <table class="checkout__totals">
                                <thead class="checkout__totals-header">
                                <tr>
                                    <th colspan="2">Produit</th>
                                    {{--<th>Total</th>--}}
                                </tr>
                                </thead>
                                <tbody class="checkout__totals-products">
                                @foreach (Cart::content() as $i)
                                    <tr>
                                        <td class="">
                                            <img src="{{ asset('storage/'.$i->model->image) }}" alt="#" width="50" height="50">
                                        </td>
                                        <td>
                                            <h5>
                                                <a href="{{ route('product.details', $i->model->id) }}">{{ $i->model->name }}</a>
                                            </h5>
                                            <span class="product-qty">x {{ $i->qty }}</span>
                                        </td>
                                        {{--<td>{{ $i->subtotal }} GNF</td>--}}
                                    </tr>
                                @endforeach
                                </tbody>
                                {{--<tbody class="checkout__totals-subtotals">
                                <tr>
                                    <th>Sous-total</th>
                                    <td colspan="2">{{ Cart::subtotal() }} GNF</td>
                                </tr>
                                <tr>
                                    <th>Taxe</th>
                                    <td colspan="2">{{ Cart::tax() }} GNF</td>
                                </tr>
                                <tr>
                                    <th>Frais livraison</th>
                                    <td colspan="2"><em>Livraison gratuite</em></td>
                                </tr>
                                </tbody>
                                <tfoot class="checkout__totals-footer">
                                <tr>
                                    <th>Total</th>
                                    <td colspan="2">
                                        <span class="font-xl text-brand fw-900">{{ Cart::total() }} GNF</span>
                                    </td>
                                </tr>
                                </tfoot>--}}
                            </table>
                            <button class="btn btn-primary btn-xl btn-block" type="submit" onclick="document.getElementById('checkoutForm').submit();">Valider la Commande</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

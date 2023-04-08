<x-guest-layout>


    <x-success-message />
    <x-error-message />

    <section class="breadCrum">
        <div class="container">
            <div class="breacrumCard">
                Shopping Cart
            </div>
        </div>
    </section>


    <section id="cartsPage">

        <div class="container">
            <div class="cart-wrapper">

                <div class="row">
                    <div class="info-block col-lg-8 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="thead-dark tHead">
                                      <tr>
                                        <th class="text-left">Item Details</th>
                                        <th class="text-left">Quantity</th>
                                        <th class="text-left">Item Price</th>
                                        <th class="text-left">Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        <?php $total = 0; ?>
                                        @forelse($carts as $id => $details)
                                        <?php $total += $details['product']['sales_price'] * $details['qty'] ?>
                                        <tr class="eachCart">
                                            <td>
                                                <div class="firstCol d-flex justify-content-start">
                                                    <div class="proImg">
                                                        <?php $imgLink = $details['product']['images']; ?>
                                                        <img src='{{ asset("assets/images/products/$imgLink") }}' alt="">
                                                    </div>
                                                    <div class="proInfo">
                                                        <p class="title">{{ $details['name'] }}</p>
                                                        <p class="subTtitle text-muted">Category: {{ $details['product']['category'] }}</p>
                                                        <p class="subTtitle text-muted">SKU: {{ $details['product']['sku'] }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-left">
                                                <div class="desInc">
                                                    <a href="{{ route('removeFromCart', $details['product_id']) }}"><span class="pointer">-</span></a>
                                                    <span>{{ $details['qty'] }}</span>
                                                    <a href="{{ route('addToCart', $details['product_id']) }}"><span class="pointer">+</span></a>
                                                </div>
                                            </td>
                                            <td class="text-left">
                                                <div class="price">
                                                    <p class="amount">₦{{ number_format($details['qty'] * $details['product']['sales_price']) }}</p>
                                                    <p class="amtDesc">₦{{number_format( $details['product']['sales_price']) }} x {{ $details['qty'] }} items</p>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="btn btn-sm btn-danger" href="{{ route('deleteCart', $details['product_id']) }}"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="4" class="text-center">
                                                <div class="mb-4">
                                                    No Carts
                                                </div>
                                                <a href="{{ route('productListings') }}" class="btn btn-success rounded-0">Start Shopping</a>
                                            </td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>



                    <div class="info-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner">
                            <div class="card">
                                <div class="text-left card-header">
                                    Order Summary
                                </div>
                                <div class="card-body p-0 orderSumm">
                                    <div class="d-flex justify-content-between">
                                        <div>Sub Total</div>
                                        <div>₦{{ number_format($total) }}</div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div>Shipping Fee</div>
                                        <div>₦0</div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div><b>Total</b></div>
                                        <div><b>₦{{ number_format($total) }}</b></div>
                                    </div>
                                    @if ($total > 0)
                                    <div class="mt-5 mb-4 text-center">
                                        <a href="{{ route('checkout') }}" class="btn btn-primary rounded-0">Proceed to Checkout</a>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>



</x-guest-layout>

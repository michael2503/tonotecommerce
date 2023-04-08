<x-guest-layout>


    <x-success-message />
    <x-error-message />

    <style>

.shippingFee{
    border-bottom: 1px solid #ccc;
}
.shippingFee p{
    font-size: 14px;
}
.orderInfo p{
    font-size: 14px;
}
.orderInfo .shippingAddr{
    background: #f2f2f2;
    border: 1px solid #ccc;
    padding: 10px;
    margin-bottom: 15px;
}


@media only screen and (max-width: 400px){
    .proDetBody{
        padding: 5px;
    }
}
    </style>


    <section class="breadCrum">
        <div class="container">
            <div class="breacrumCard">
                Order #{{ $order->order_number }}
            </div>
        </div>
    </section>


    <section id="cartsPage">

        <div class="container">
            <div class="cart-wrapper">

                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-12 mt-2 mb-5">
                        <div class="card cardShadow">
                            <div class="card-header">
                                Order Info
                            </div>
                            <div class="card-body orderInfo p-2">
                                <div class="d-flex justify-content-between">
                                    <p>Order Number</p>
                                    <p>{{ $order->order_number }}</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p>Payment Method</p>
                                    <p>{{ $order->payment_method }}</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p>First Name</p>
                                    <p>{{ $order->first_name }}</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p>Last Name</p>
                                    <p>{{ $order->last_name }}</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p>Email</p>
                                    <p>{{ $order->email }}</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p>Phone</p>
                                    <p>{{ $order->phone }}</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p>Status</p>
                                    <p>
                                        @if ($order->status == 'Pending')
                                        <span class="badge badge-info ml-2">Pending</span>
                                        @elseif ($order->status == 'Delivered')
                                        <span class="badge badge-success ml-2">Delivered</span>
                                        @elseif ($order->status == 'Cancelled')
                                        <span class="badge badge-danger ml-2">Cancelled</span>
                                        @elseif ($order->status == 'Returned')
                                        <span class="badge badge-dark ml-2">Returned</span>
                                        @elseif ($order->status == 'Shipped')
                                        <span class="badge badge-warning ml-2">Shipped</span>
                                        @endif
                                    </p>
                                </div>
                                <div class="d-block shippingAddr">
                                    <p>Shipping Address</p>
                                    <p class="mb-0">
                                        {{ $order->address }}, {{ $order->city }}, {{ $order->bus_stop }} {{ $order->state }}, {{ $order->country }}
                                    </p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p>Order On</p>
                                    <p>{{ date('M d, Y', strtotime($order->created_at)) }}</p>
                                </div>
                                <div class="text-center mt-3 mb-3">
                                    <a href="{{ route('downloadInvoice', $order->order_number) }}" class="btn btn-success btn-sm">Download Invoice</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-8 col-lg-8 col-md-12 mt-2 mb-5">
                        <div class="card cardShadow">
                            <div class="card-header">
                                Order Products
                            </div>
                            <div class="card-body proDetBody">
                                @foreach (json_decode($order->product_json) as $prod)
                                <div *ngFor="let prod of products" class="eachOrder">
                                    <div class="row">
                                        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-3 col-3">
                                            <div class="proImg">
                                                <img src='{{ asset("assets/images/products/$prod->images") }}' alt="">
                                            </div>
                                        </div>
                                        <div class="col-xl-10 col-lg-9 col-md-9 col-sm-9 col-9 proInfoWrapepr">
                                            <div class="proInfo">
                                                <p class="mb-0 proName">{{ $prod->product_name }}</p>
                                                <p class="pInfo mb-0 mt-2">Qty: {{ $prod->qty }}</p>
                                                <div class="priceSide">
                                                    <p class="amt mb-2">Amount:  <span>₦{{ number_format($prod->sales_price) }}</span></p>
                                                    <p class="amt">Sub Total:  <span>₦{{ number_format($prod->sub_total) }}</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                                <div class="d-flex justify-content-between mt-3 shippingFee">
                                    <p>Shipping Fee</p>
                                    <p>₦0.00</p>
                                </div>

                                <div class="d-flex justify-content-between mt-3">
                                    <p><b>Total</b></p>
                                    <p><b>₦{{ number_format($order->total) }}</b></p>
                                </div>
                                <div *ngIf="order?.couponInfo" class="d-flex justify-content-between mt-3">
                                    <p><b>Total Paid</b></p>
                                    <p><b>₦{{ number_format($order->total) }}</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>



</x-guest-layout>

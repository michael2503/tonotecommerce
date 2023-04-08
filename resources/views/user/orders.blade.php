<x-guest-layout>


    <x-success-message />
    <x-error-message />


    <section class="breadCrum">
        <div class="container">
            <div class="breacrumCard">
                My Orders
            </div>
        </div>
    </section>


    <section id="cartsPage">

        <div class="container">
            <div class="cart-wrapper">

                <div class="card cardShadow mb-5">
                    <div class="card-body">

                        @forelse ($orders as $order)

                        <?php
                            $proInfo = json_decode($order->product_json)[0];
                        ?>

                        <div class="eachOrder">
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4">
                                    <div class="proImg">
                                        <img src='{{ asset("assets/images/products/$proInfo->images") }}' alt="">
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-8 col-md-8 col-sm-8 proInfoWrapepr">
                                    <div class="proInfo">
                                        <p>{{ $proInfo->product_name }}</p>
                                        <p class="pInfo">Order Number: {{ $order->order_number }}</p>
                                        <p class="pInfo">Order On: {{ date('M d, Y', strtotime($order->created_at)) }}
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
                                        <div class="d-flex justify-content-between mt-3">
                                            <p class="pInfo">Total: ₦{{ number_format($order->total) }}</p>
                                            <h5><a href="{{ route('orderDetails', $order->order_number) }}"><small><b>Order Details</b></small></a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @empty
                        <p class="text-center">No Order</p>
                        @endforelse


                    </div>
                </div>

            </div>
        </div>

    </section>



</x-guest-layout>

<x-guest-layout>


    <x-success-message />
    <x-error-message />

    <section class="breadCrum">
        <div class="container">
            <div class="breacrumCard">
                Checkout
            </div>
        </div>
    </section>


    <section id="cartsPage">

        <div class="container">
            <div class="cart-wrapper">

                <div class="row">
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
                                        <a href="{{ route('viewCartList') }}" class="btn btn-primary rounded-0">Back to Cart</a>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="info-block col-lg-8 col-md-6 col-sm-12">
                        <div class="inner">
                            <div class="card">
                                <div class="text-left card-header">
                                    Order Summary
                                </div>
                                <div class="card-body p-3 orderSumm">
                                    <form method="POST" action="{{ route('createOrder') }}">
                                        @csrf

                                        <div class="checkSec">
                                            <div class="checkTitle">
                                                Personal Info
                                            </div>

                                            <div class="form-wrap">
                                                <div class="row">
                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="form-group ">
                                                            <label for="first_name">First Name</label>
                                                            <input type="text" class="form-control" name="first_name" required value="{{ old('first_name') }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="form-group ">
                                                            <label for="last_name">Last Name</label>
                                                            <input type="text" class="form-control" name="last_name" required value="{{ old('last_name') }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="form-group ">
                                                            <label for="email">Email</label>
                                                            <input type="email" class="form-control" name="email" required value="{{ old('email') }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="form-group ">
                                                            <label for="phone">Phone Number</label>
                                                            <input type="text" class="form-control" name="phone" required value="{{ old('phone') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="checkSec">
                                            <div class="checkTitle">
                                                Shipping Address
                                            </div>

                                            <div class="form-wrap">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12">
                                                        <div class="form-group ">
                                                            <label for="address">Address</label>
                                                            <input type="text" class="form-control" name="address" required value="{{ old('address') }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="form-group ">
                                                            <label for="bus_stop">Nearest Bus-stop</label>
                                                            <input type="text" class="form-control" name="bus_stop" required value="{{ old('bus_stop') }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="form-group ">
                                                            <label for="city">City</label>
                                                            <input type="text" class="form-control" name="city" required value="{{ old('city') }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="form-group ">
                                                            <label for="state">State</label>
                                                            <input type="text" class="form-control" name="state" required value="{{ old('state') }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="form-group ">
                                                            <label for="country">Country</label>
                                                            <input type="text" class="form-control" name="country" required value="{{ old('country') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="checkSec">
                                            <div class="checkTitle">
                                                Payment Method
                                            </div>

                                            <div class="form-wrap">
                                                <div class="custom-control custom-checkbox mb-4">
                                                    <input type="checkbox" class="custom-control-input" value="Delivery" id="payDelivery" name="payment_method">
                                                    <label class="custom-control-label" for="payDelivery">Pay on Delivery</label>
                                                </div>

                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" value="Card" id="payCard" name="payment_method">
                                                    <label class="custom-control-label" for="payCard">Pay With Credit Card</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-5 text-center">
                                            <button class="btn btn-primary">Checkout Now</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>



</x-guest-layout>

<x-guest-layout>


    <x-success-message />
    <x-error-message />

    <section class="breadCrum">
        <div class="container">
            <div class="breacrumCard">
                Home <i class="fa fa-arrow-right"></i> Products
            </div>
        </div>
    </section>


    <section id="contentSide">
        <div class="container">
            <div class="proList">
                <div class="row">
                    <div class="col-xl-3">
                        <div class="card">
                            <div class="card-header">
                                Filter
                            </div>

                            <div class="card-body" style="height: 400px">

                            </div>
                        </div>

                        <div class="ads">
                            <div class="adsImg mt-4">
                                <img src="{{ asset("assets/images/banner_08.png") }}" alt="" width="100%">
                                <img src="{{ asset("assets/images/banner_06.avif") }}" class="mt-4" alt="" width="100%">
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-9">
                        <div class="card card-body">
                            <h2 class="catName">Category</h2>

                            <div class="sortSide">
                                <div class="d-flex justify-content-between">
                                    <div class="sortList">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary"><i class="fa fa-bars"></i></button>
                                            <button type="button" class="btn btn-primary"><i class="fa fa-th"></i></button>
                                        </div>
                                    </div>
                                    <div class="sortFiled">
                                        <span>
                                            Sort:
                                            <select name="" id="">
                                                <option value="">Aphabetically A-Z</option>
                                                <option value="">Aphabetically Z-A</option>
                                                <option value="">Price: High - Low</option>
                                                <option value="">Price: Low - High</option>
                                                <option value="">Date: New - Old</option>
                                                <option value="">Date: Old - New</option>
                                            </select>
                                        </span>
                                    </div>
                                </div>
                            </div>


                            <div class="product-list">
                                <div class="row">
                                    @forelse ($products as $product)
                                    <div class="col-xl-3">
                                        <div class="eachList">
                                            <div class="proImg">
                                                <img src='{{ asset("assets/images/products/$product->images") }}' alt="">
                                            </div>
                                            <p class="proName">{{ $product->name }}</p>
                                            <p class="proPrice">
                                                @if ($product->old_price > 0)
                                                <span class="oldPrice">₦{{ number_format($product->old_price) }}</span>
                                                @endif
                                                <span class="salesPrice">₦{{ number_format($product->sales_price) }}</span>
                                            </p>

                                            <div class="optionBtn d-flex justify-content-center">
                                                <div class="btn-group">
                                                    <a class="btn btn-success" href="{{ route('addToCart', $product->id) }}"><i class="fa fa-shopping-cart"></i></a>
                                                    <button type="button" class="btn btn-success"><i class="fa fa-heart"></i></button>
                                                    <button type="button" class="btn btn-success"><i class="fa fa-eye"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @empty
                                        <div class="text-center">
                                            <h4>No Product Available</h4>
                                        </div>
                                    @endforelse

                                </div>


                                <div class="d-flex justify-content-center">
                                    {!! $products->links() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</x-guest-layout>


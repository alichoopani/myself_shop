@section('title', 'Phone Cover | ' . $phoneAccessory->brand)

<x-app-layout>

    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>{{ $phoneAccessory->brand }}</h2>
                        <span>{{ $phoneAccessory->phone_model }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Product Area Starts ***** -->
    <section class="section" id="product">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="left-images">
                        <img src="{{ asset('storage/' . $phoneAccessory->image) }}" alt="">
{{--                        <img src="assets/images/single-product-02.jpg" alt="">--}}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="right-content">
                        <h4>{{ $phoneAccessory->brand . " " . $phoneAccessory->name . " " . $phoneAccessory->phone_model }}</h4>
                        <span class="price">$75.00</span>
{{--                        <ul class="stars">--}}
{{--                            <li><i class="fa fa-star"></i></li>--}}
{{--                            <li><i class="fa fa-star"></i></li>--}}
{{--                            <li><i class="fa fa-star"></i></li>--}}
{{--                            <li><i class="fa fa-star"></i></li>--}}
{{--                            <li><i class="fa fa-star"></i></li>--}}
{{--                        </ul>--}}
                        <span>{{ $phoneAccessory->material }}</span>
{{--                        <div class="quantity-content">--}}
{{--                            <div class="left-content">--}}
{{--                                <h6>No. of Orders</h6>--}}
{{--                            </div>--}}
{{--                            <div class="right-content">--}}
{{--                                <div class="quantity buttons_added">--}}
{{--                                    <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="total">--}}
{{--                            <h4>Total: $210.00</h4>--}}
{{--                            <div class="main-border-button"><a href="#">Add To Cart</a></div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Product Area Ends ***** -->

</x-app-layout>

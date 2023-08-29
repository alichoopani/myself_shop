@section('title', 'Piston | ' . $piston->brand)

<x-app-layout>

    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>{{ $piston->brand }}</h2>
                        <span>{{ $piston->engine_name }}</span>
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
                        <img src="{{ asset('storage/' . $piston->image) }}" alt="piston">
{{--                        <img src="assets/images/single-product-02.jpg" alt="">--}}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="right-content">
                        <h4>{{ $piston->engine_name }}</h4>
                        <h4>Compression : {{ $piston->compression }}</h4>
                        <h4>Weight : {{ $piston->weight }}</h4>
                        <h4>Casting Method : {{ $piston->casting_method }}</h4>
                        <h4>Bore : {{ $piston->bore }}</h4>
                        <span class="price">$ {{ $piston->price }}</span>

                        <span>Description: {{ $piston->description }}</span>
{{--                        <div class="quote">--}}
{{--                            <i class="fa fa-quote-left"></i><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiuski smod.</p>--}}
{{--                        </div>--}}
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

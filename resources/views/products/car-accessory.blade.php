@section('title', 'Accessories')

<x-app-layout>

    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Check Our Accessories</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Products Area Starts ***** -->
    <section class="section" id="products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Our Latest Accessories</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach($accessories as $item)
                    <div class="col-lg-4">
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="{{ route('carAccessoryDetail', ['id' => $item->id]) }}"><i class="fa fa-eye"></i></a></li>
{{--                                        <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>--}}
{{--                                        <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>--}}
                                    </ul>
                                </div>
                                <img src="{{ asset('storage/' . $item->image) }}" alt="">
                            </div>
                            <div class="down-content">
                                <a href="{{ route('carAccessoryDetail', ['id' => $item->id]) }}">{{ $item->name ." ". $item->car_model }}</a>
                                <span>$ {{ $item->price }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="col-lg-12">
                    <div class="pagination">
                        <ul>
                            <li>
                                <a href="#">1</a>
                            </li>
                            <li class="active">
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#">4</a>
                            </li>
                            <li>
                                <a href="#">></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Products Area Ends ***** -->


</x-app-layout>

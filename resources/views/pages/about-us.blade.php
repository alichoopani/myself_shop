@section('title', 'About Us')

<x-app-layout>

    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading about-page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>About Our Company</h2>
                        <span>--------</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-image">
                        <img src="{{ asset('storage/' . $aboutUs->image) }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <h4>About Us</h4>
                            <span>{{ $aboutUs->content }}</span>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** About Area Ends ***** -->

{{--    <!-- ***** Subscribe Area Starts ***** -->--}}
{{--    <div class="subscribe">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-8">--}}
{{--                    <div class="section-heading">--}}
{{--                        <h2>By Subscribing To Our Newsletter You Can Get 30% Off</h2>--}}
{{--                        <span>Details to details is what makes Hexashop different from the other themes.</span>--}}
{{--                    </div>--}}
{{--                    <form id="subscribe" action="" method="get">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-5">--}}
{{--                                <fieldset>--}}
{{--                                    <input name="name" type="text" id="name" placeholder="Your Name" required="">--}}
{{--                                </fieldset>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-5">--}}
{{--                                <fieldset>--}}
{{--                                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">--}}
{{--                                </fieldset>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-2">--}}
{{--                                <fieldset>--}}
{{--                                    <button type="submit" id="form-submit" class="main-dark-button"><i class="fa fa-paper-plane"></i></button>--}}
{{--                                </fieldset>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-6">--}}
{{--                            <ul>--}}
{{--                                <li>Store Location:<br><span>Sunny Isles Beach, FL 33160, United States</span></li>--}}
{{--                                <li>Phone:<br><span>010-020-0340</span></li>--}}
{{--                                <li>Office Location:<br><span>North Miami Beach</span></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="col-6">--}}
{{--                            <ul>--}}
{{--                                <li>Work Hours:<br><span>07:30 AM - 9:30 PM Daily</span></li>--}}
{{--                                <li>Email:<br><span>info@company.com</span></li>--}}
{{--                                <li>Social Media:<br><span><a href="#">Facebook</a>, <a href="#">Instagram</a>, <a href="#">Behance</a>, <a href="#">Linkedin</a></span></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- ***** Subscribe Area Ends ***** -->--}}

</x-app-layout>

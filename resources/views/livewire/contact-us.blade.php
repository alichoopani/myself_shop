@section('title', 'Contact Us')

<div>
    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading about-page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Contact Us</h2>
                        <span>Ask Us we'll call you</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Contact Area Starts ***** -->
    <div class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div id="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d90186.37207676383!2d-80.13495239500924!3d25.9317678710111!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9ad1877e4a82d%3A0xa891714787d1fb5e!2sPier%20Park!5e1!3m2!1sen!2sth!4v1637512439384!5m2!1sen!2sth"
                            width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
                        <!-- You can simply copy and paste "Embed a map" code from Google Maps for any location. -->

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Say Hello. Don't Be Shy!</h2>
                        <span>Details to details is what makes Hexashop different from the other themes.</span>
                    </div>
                    <form wire:submit.prevent="submit" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                @error('name')<span class="text-red-600">{{$message}}</span> @enderror
                                <input wire:model="name" type="text" placeholder="Your name">
                            </div>
                            <div class="col-lg-6">
                                @error('email')<span class="text-red-600">{{$message}}</span> @enderror
                                <input wire:model="email" type="text" placeholder="Your email">
                            </div>
                            <div class="col-lg-12">
                                @error('content')<span class="text-red-600">{{$message}}</span> @enderror
                                <textarea wire:model="content" rows="6" placeholder="Your message"></textarea>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" id="form-submit" class="main-dark-button">
                                    <i class="fa fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                        @if(session()->has('message'))
                            <div class="text-gray-100">{{session('message')}}</div>
                        @endif
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- ***** Contact Area Ends ***** -->
</div>

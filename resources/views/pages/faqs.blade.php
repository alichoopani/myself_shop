@section('title', 'FAQs')

<x-app-layout>

    <!-- ***** Services Area Starts ***** -->
    <section class="our-services mt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Our Services</h2>
                        <span>Details to details is what makes Hexashop different from the other themes.</span>
                    </div>
                </div>

                @foreach($faq as $item)
                    <div class="col-lg-4">
                        <div class="service-item">
                            <h4>{{ $item->title }}</h4>
                            <p>{{ $item->content }}</p>
                            <img src="{{ asset('storage/' . $item->image) }}" alt="">
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- ***** Services Area Ends ***** -->

</x-app-layout>

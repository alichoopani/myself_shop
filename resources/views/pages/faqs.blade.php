@section('title', 'FAQs')

<x-app-layout>

    <!-- ***** Services Area Starts ***** -->
    <section class="our-services mt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Repetitive Questions </h2>
                        <span>Details to details is what makes Hexashop different from the other themes.</span>
                    </div>
                </div>
                @if(count($faq))
                    @foreach($faq as $item)
                        <div class="col-lg-4">
                            <div class="service-item">
                                <h4>{{ $item->question }}</h4>
                                <p>{{ $item->answer }}</p>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </section>
    <!-- ***** Services Area Ends ***** -->

</x-app-layout>

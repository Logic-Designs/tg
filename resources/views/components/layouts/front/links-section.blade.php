<!-- Section: Links  -->
<section class="">
    <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <!-- Content -->
                <h6 class="text-uppercase fw-bold mb-4">
                    <img src="{{ url('front/logo-black.png') }}" alt="TG Developments" class="logo-image-footer" width="100px" />
                    <!--<img src="./TG Developments final logo black-01 (1) copy.png" style="width: 40%;" alt="">-->
                </h6>
                <div>
                    {!! $setting->footer_about !!}
                </div>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">Quick Links</h6>

                <div>
                    <a href="{{ route('about') }}" class="text-reset">ABOUT US</a>
                </div>

                <div class="pt-3 pb-3">
                    <a href="{{ route('media') }}" class="text-reset">MEDIA CENTER</a>
                </div>
                <div>
                    <a href="{{ route('career') }}" class="text-reset">CAREERS</a>
                </div>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">DEVELOPMENTS</h6>
                <div>
                    <a href="{{ route('development') }}#Residential" class="text-reset">RESIDENTIAL</a>
                </div>
                <div class="pt-3">
                    <a href="{{ route('development') }}#Commercial" class="text-reset ">COMMERCIAL</a>
                </div>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">GET IN TOUCH</h6>
                <div><i class="fas fa-home me-3"></i> {{ $contact_content->address }}</div>
                <div class="py-4" style="    display: flex;
align-items: center;
justify-content: center;">
                    <i class="fas fa-envelope me-3"></i>
                    {{ $contact_content->email }}
                </div>
                <div><i class="fas fa-phone me-3"></i> {{ $contact_content->phone }}</div>
                <div class="pt-4"><i class="fas fa-print me-3"></i> {{ $contact_content->phone2 }}</div>
            </div>

            <!-- Grid column -->
        </div>
        <!-- Grid row -->
    </div>
</section>
<!-- Section: Links  -->

<div class=" ">
    <footer class="text-center">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">

                @foreach(json_decode($contact_content->social, true) as $social)
                <a class="btn btn-outline-light btn-floating m-1" href="{{ $social['url'] }}" role="button"><i
                        class="{{ $social->icon }}"></i></a>
                @endforeach
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            All Copyrights Reserved for ®TG DEVELOPMENTS 2024 - Designed &
            Developed By Logic Designs
        </div>
        <!-- Copyright -->
    </footer>
</div>

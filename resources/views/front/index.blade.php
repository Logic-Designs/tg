<x-layouts.front.master>

    <swiper-container class="mySwiper" pagination="true" pagination-dynamic-bullets="true">
        @foreach($sliders as $slider)
        <swiper-slide class="img-1" style="background-image: url('{{ url($slider->image) }}') !important; background-repeat: no-repeat; background-position: center center; background-size: cover;">
            <div class="shadow" style="width: 100%">
                <div class="slogan-slider" style="width: 100%">

                    <img src="{{ url('front/slogan.png') }}" alt="Italian Trulli">
                </div>
                <div class="button-Download-Brochure">
                    <button class="custom-btn btn-7">
                        <span>Download Brochure</span>
                    </button>
                </div>
            </div>
        </swiper-slide>
        @endforeach
    </swiper-container>

    <!--------------------------------------------------------  WHY CHOOSE US section  -->

    <div class="why-choose-us" style="
    background-image: url({{ url('front/why-choose-us-background.png') }});
    overflow: hidden;
    min-height: 376px;
    background-repeat: no-repeat;
    background-size: cover;
    background-position-x: center;">

    <div class="counter counters d-flex justify-content-between align-items-center">
        <div class="width-section" data-aos="zoom-in-up" data-aos-delay="100">
            <img class="image-why-choose-us" src="{{ url('front/why-choose-us-text.png') }}" alt="Why Choose Us" />
        </div>

        <div class="d-flex justify-content-center align-items-center width-section">
            <div class="reason" data-aos="zoom-in-up" data-aos-delay="200">
                <h1 class="number-count-why-choose-us">
                    +<span data-count="{{ $home_content->num_of_yesrs }}">0</span>
                </h1>
                <h1 class="reason-why-choose-us">Years</h1>
            </div>
        </div>

        <div class="d-flex justify-content-center align-items-center width-section">
            <div class="reason" data-aos="zoom-in-up" data-aos-delay="300">
                <h1 class="number-count-why-choose-us">
                    +<span data-count="{{ $home_content->num_of_projects }}">0</span>
                </h1>
                <h1 class="reason-why-choose-us">Projects</h1>
            </div>
        </div>

        <div class="d-flex justify-content-center align-items-center width-section">
            <div class="reason" data-aos="zoom-in-up" data-aos-delay="400">
                <h1 class="number-count-why-choose-us">
                    +<span data-count="{{ $home_content->num_of_units }}">0</span>
                </h1>
                <h1 class="reason-why-choose-us">Units</h1>
            </div>
        </div>
    </div>
</div>


    <!-- --------------------------------------- ceo Mssege ------------------------------------------- -->
    <div class="container my-5 ceo-section" data-aos="zoom-in">
        <div class="row" style="display: flex; justify-content: center; align-items: center">
            <div class="col-xl-6 col-sm-12 col-xs-12" id="text-ceo">
                <!-- Dynamic Title -->
                <h1 class="a-tittle" data-aos="fade-up">{{ $home_content->title }}</h1>

                <!-- Dynamic Description -->
                <h5 class="a-heading" data-aos="fade-up">
                    {!!  $home_content->description !!}
                </h5>
            </div>
            <div class="col-xl-6 col-sm-12 col-xs-12 image-ceo">
                <div data-aos="slide-right" data-aos-duration="3000" class="container-image-project">
                    <!-- Dynamic Image -->
                    <img src="{{ asset($home_content->image) }}" alt="CEO Message Image" style="width: 100%; border-radius: 26px" />
                </div>
            </div>
        </div>
    </div>

    <div data-aos="fade-up" data-aos-anchor-placement="center-bottom">
        <h1 class="text-center py-5">Our Developments</h1>
    </div>

    <div class="section-projects">
        @foreach($developments as $index => $development)
            <div class="card-project-home" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}"
                style="background-image: url('{{ asset($development->image) }}')">
                <div class="filter-card-project-home d-flex flex-column justify-content-between">
                    <h1 class="title-project">{{ $development->name }}</h1>
                    <p class="description">
                        {{ $development->description }}
                    </p>
                    <div class="frame">
                        <a href="{{ route('single-development', $development) }}" class="custom-btn btn-14">Explore</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


    <!----------------------------------------------------------- our partener ----------------------------------------------------->

    <div class="py-5 d-flex justify-content-center flex-column align-items-center main-partener-div" style="
    background-image: url({{ url('front/why-choose-us-background.png') }});
    overflow: hidden;
    background-repeat: no-repeat;
    background-size: cover;
    min-height: 376px;
    background-position-x: center;
">
    <h2 style="font-size: 43px; color: white; font-weight: 700">
        Our Partners
    </h2>
    <section class="customer-logos slider d-flex justify-content-center align-items-center" style="z-index: 1">
        @foreach($partners as $index => $partner)
        <div data-aos="flip-left" data-aos-delay="{{ ($index + 1) * 100 }}"
        style="background-image: url('{{ asset($partner->photo) }}');
               background-position: center;
               background-size: contain;
               background-repeat: no-repeat;
               height: 100%;
               width: 61%;"
        class="slide aos-init aos-animate">
    </div>
            <!-- <div data-aos="flip-left" data-aos-delay="{{ ($index + 1) * 100 }}" class="slide image-{{ $index + 1 }}">
                <img src="{{ asset($partner->photo) }}" alt="Partner Logo" class="img-fluid" style="max-height: 100px; max-width: 200px;"/>
            </div> -->
        @endforeach
    </section>
    <!--<img class="image-partner partner-2" src="pattersn1.png" style="position: absolute;width: 41%;opacity: 0.1;" />-->
</div>


    <!-- -------------------------------------------------------------slider --------------------------------------------------------->
    <h1 style="
        background: white;
        color: #f77f00;
        margin: 0;
        text-align: center;
        padding-top: 30px;
      ">
    Media & News
</h1>
<swiper-container class="mySwiper" navigation="true" pagination="true" keyboard="true" mousewheel="true" css-mode="true">
    @foreach($media as $item)
        <swiper-slide>
            <div class="slide-conainer" data-aos="flip-down" data-aos-duration="2000">
                <div class="slidee">
                    <div class="a-project-content">
                        <h1 class="heading-priject-slider" data-aos="fade-up" data-aos-delay="100">{{ $item->title }}</h1>
                        <p data-aos="fade-up" data-aos-delay="200" class="a-heading a-desc-left-container desc-project-slider">
                            {{ $item->description }}
                        </p>
                        <div>
                            <a href="{{ route('single-media', $item->id) }}" data-aos="fade-up" data-aos-delay="300" class="btn btn-dark">Learn More</a>
                        </div>
                    </div>
                    <img src="{{ asset($item->image) }}" alt="{{ $item->title }}" class="image-project-left" />
                </div>
            </div>
        </swiper-slide>
    @endforeach
</swiper-container>


    <!-----------------------------------------form--------------------------------------->

    <section class="contact-section">
        <div class="filter-contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 contact-info">
                        <h2 data-aos="fade-up" data-aos-delay="50">Contact Us</h2>
                        <p data-aos="fade-up" data-aos-delay="100">
                            {!! $home_content->contact_us_description !!}
                        </p>
                        <div class="info-item">
                            <i data-aos="fade-up" data-aos-delay="150" class="fa fa-home contact-icon"></i>
                            <div>
                                <h3 data-aos="fade-up" data-aos-delay="150">Address</h3>
                                <p data-aos="fade-up" data-aos-delay="200">{{ $contact_content->address }}</p>
                            </div>
                        </div>
                        <div class="info-item">
                            <i data-aos="fade-up" data-aos-delay="250" class="fa fa-phone contact-icon"></i>
                            <div>
                                <h3 data-aos="fade-up" data-aos-delay="250">Phone</h3>
                                <p data-aos="fade-up" data-aos-delay="300">{{ $contact_content->phone }}</p>
                                @if($contact_content->phone2)
                                    <p data-aos="fade-up" data-aos-delay="350">{{ $contact_content->phone2 }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="info-item">
                            <i data-aos="fade-up" data-aos-delay="350" class="fa fa-envelope contact-icon"></i>
                            <div>
                                <h3 data-aos="fade-up" data-aos-delay="350">Email</h3>
                                <p data-aos="fade-up" data-aos-delay="400">{{ $contact_content->email }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 form-contact">
                        <div class="contact-form">
                            <h3 data-aos="fade-up" data-aos-delay="100">Send Message</h3>
                            <form method="POST" action="{{ route('store-contact') }}">
                                @csrf
                                <div class="form-group" data-aos="fade-up" data-aos-delay="200">
                                    <input type="text" name="first_name" class="form-control" placeholder="First Name" required />
                                </div>
                                <div class="form-group" data-aos="fade-up" data-aos-delay="300">
                                    <input type="text" name="last_name" class="form-control" placeholder="Last Name" required />
                                </div>
                                <div class="form-group" data-aos="fade-up" data-aos-delay="500">
                                    <input type="email" name="email" class="form-control" placeholder="Email Address" required />
                                </div>
                                <div class="form-group" data-aos="fade-up" data-aos-delay="600">
                                    <input style="width: 100%; height: 38px; border-radius: 6px; border: 1px solid; color: #dee2e6;"
                                           type="tel" name="phone" id="phoneInput" placeholder="Enter phone number" required />
                                </div>
                                <button type="submit" class="btn btn-dark" data-aos="fade-up" data-aos-delay="700">SEND</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




</x-layouts.front.master>

<x-layouts.front.master>
    <x-slot name="title">Our Development</x-slot>

    <!--------------------------------------------------Hero-section------------------------------------------------------------->
    <div style="background-image: url({{ url('front/slider-background.png') }});" class="Hero-Section">
        <div class="logo-our-development">
            <img src="{{ url('front/our development.png') }}" alt="Italian Trulli">
        </div>
    </div>
    <!--------------------------------------------------end-Hero-section------------------------------------------------------------->

    <div class="fulldiv">
        <!-- Residential Developments -->
        <div class="categories-container" id="Residential">
            <div class="first-category">
                <div class="Residential-title">
                    <p class="category-title" style="width: 25%; margin-bottom: 31px;">Residential</p>
                    <div style="height: 1px; width: 75%; background-color: #f77f00;" class="line"></div>
                </div>

                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach($residentialDevelopments as $development)
                        <div class="swiper-slide" data-aos="fade-right">
                            <img class="swiper-img" src="{{ $development->image }}" />
                            <div class="slide-content">
                                <p class="slide-title">{{ $development->name }}</p>
                                <div class="frame">
                                    <button class="custom-btn btn-14">Explore</button>
                                </div>
                                <p class="slide-description">
                                    {!! $development->description !!}
                                </p>
                            </div>
                            <div class="btn-container btnourdevelopments">
                                <div class="btn-14" style="border-radius: 10px;">
                                    <a style="text-decoration: none; color:white;" href="{{ route('single-development', $development) }}">
                                        <p class="btn-text" style="margin: 0;">Explore</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Commercial Developments -->
        <div class="categories-container" id="Commercial">
            <div class="first-category">
                <div class="Commercial-title">
                    <p class="category-title" style="width: 25%; margin-bottom: 31px;">Commercial</p>
                    <div style="height: 1px; width: 75%; background-color: #f77f00;" class="line"></div>
                </div>

                <div class="swiper mySwiper" slides-per-view="1">
                    <div class="swiper-wrapper">
                        @foreach($commercialDevelopments as $development)
                        <div class="swiper-slide" data-aos="fade-up-right">
                            <img class="swiper-img" src="{{ $development->image }}" />
                            <div class="slide-content">
                                <p class="slide-title">{{ $development->name }}</p>
                                <div class="frame">
                                    <button class="custom-btn btn-14">Explore</button>
                                </div>
                                <p class="slide-description">
                                    {!! $development->description !!}
                                </p>
                            </div>
                            <div class="btn-container btnourdevelopments">
                                <div class="btn-14" style="border-radius: 10px;">
                                    <a style="text-decoration: none; color:white;" href="{{ route('single-development', $development) }}">
                                        <p class="btn-text" style="margin: 0;">Explore</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.front.master>

<x-layouts.front.master>
    <x-slot name="title">{{ $development->name }}</x-slot>

    <!--------------------------------------------------Hero-section------------------------------------------------------------->
    <div style="background-image: url({{ asset('front/slider-background.png') }}); height:60vh;" class="Hero-Section">
        <div>
            <h1 class="Title-Hero-Section">{{ $development->name }} <span class="color">{{ $development->category }}</span></h1>
        </div>
        <div>
            <!-- You can add more content here if needed -->
        </div>
    </div>
    <!--------------------------------------------------end-Hero-section------------------------------------------------------------->

    <!--------------------------------------------------Gallery------------------------------------------------------------->
    <div class="row p-5 align-items-center" style="background-image: url({{ asset('front/backgroundWhite-gray-pattern.jpg') }}); display: flex; text-align: start; justify-content: center; background-position: center; background-size: cover; background-repeat: no-repeat; height: 50vh;">
        <div class="col-md-12">
            <h1 class="color">{{ $development->name }}</h1>
            <p style="text-left; font-size: 26px;">
                {!! $development->description !!}
            </p>
            <div class="d-flex gap-2" style="align-items: start; justify-content: start;">
                <a href="#" class="btn btn-dark">Call Us</a>
            </div>
        </div>
    </div>

    <div class="title-Gallery">
        <div>
            <p class="heading" data-aos="fade-right">Gallery</p>
        </div>
        <div style="height: 2px; background-color: #f77f00; width: 75%;" data-aos="flip-right" data-aos-duration="1000"></div>
    </div>

    <div class="gallery-image" style="background-size: cover; background-repeat: no-repeat; background-position: center;">
        @foreach ($development->photos as $photo)
            <div class="img-box" data-aos="fade-up">
                <img src="{{ asset( $photo->photo) }}" alt="{{ $photo->title }}" />
                <div class="transparent-box">
                    <div class="caption">
                        <p>{{ $photo->title }}</p>
                        <p class="opacity-low">{{ $photo->description }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</x-layouts.front.master>

<x-layouts.front.master>
    <x-slot name="title">{{ $media->title }}</x-slot>

    <!--------------------------------------------------Hero-section------------------------------------------------------------->
    <div style="background-image: url({{ url('front/banner4.jpg') }}); height:50vh; position: relative;" class="Hero-Section">
        <div class="single-news-logo">
            <img src="{{ url('front/media center.png') }}" alt="Media Center">
        </div>
        <div style="position: absolute; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.41);"></div>
    </div>
    <!--------------------------------------------------end-Hero-section------------------------------------------------------------->

    <!--------------------------------------------------card-news------------------------------------------------------------->
    <div class="discription-news">
        <div class="align-items-start justify-content-center flex-column" style="position: relative; z-index: 1; display: flex; padding-left: 26px;">
            <h1 style="color: #f77f00">{{ $media->title }}</h1>
            <p style="font-size: 26px; padding: 0px 24px;" class="text-left">
                {!! $media->description !!}
            </p>
        </div>
        <img style="height: 100%; width: 100%; top: 0; position: absolute" src="{{ url('front/backgroundWhite-gray-pattern.jpg') }}" alt="Background Pattern" />
    </div>

    <!--------------------------------------------------photos-section------------------------------------------------------------->
    <div class="line-single-news">
        <h1 class="title-photo-and-video">Photos</h1>
        <div style="width: 90%; height: 2px; background-color: #f77f00"></div>
    </div>

    <div class="photos-div">
        @foreach ($photos as $photo)
            <figure class="snip1156" style="margin-left: 33px">
                <img style="width: 100%; height: 100%" src="{{ asset($photo->photo) }}" alt="{{ $photo->title }}" />
                <figcaption>
                    <div>
                        <h2>{{ $photo->title }}</h2>
                    </div>
                    <div>
                        <p>{{ $photo->description }}</p>
                    </div>
                </figcaption>
                <a href="#"></a>
            </figure>
        @endforeach
    </div>

    <!--------------------------------------------------video-section------------------------------------------------------------->
    <div class="line-single-news">
        <h1 class="title-photo-and-video">Videos</h1>
        <div style="width: 90%; height: 2px; background-color: #f77f00"></div>
    </div>

    <div class="video-div-single-News">
        @foreach ($videos as $video)
            <figure style="padding: 11px">
                <iframe
                    width="100%"
                    height="444"
                    src="{{ $video->youtube_url }}"
                    title="{{ $video->title }}"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen
                ></iframe>
                <figcaption>
                    <div>
                        <h2>{{ $video->title }}</h2>
                    </div>
                    <div>
                        <p>{{ $video->description }}</p>
                    </div>
                </figcaption>
                <a href="#"></a>
            </figure>
        @endforeach
    </div>

</x-layouts.front.master>

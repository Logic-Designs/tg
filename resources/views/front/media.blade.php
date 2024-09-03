

    <x-layouts.front.master>

        <x-slot name="title">MEDIA CENTER</x-slot>
<!--------------------------------------------------Hero-section------------------------------------------------------------->
<div style="background-image: url({{ url('front/banner4.jpg') }}); height:50vh;position: relative;" class="Hero-Section ">
    <div style="z-index: 1;
        margin-left: 34px;
    margin-top: 98px;" >
     <img src="{{ url('front/media center.png') }}" alt="Italian Trulli">

    </div>

    <div>

    </div>
    <div
    style="
      position: absolute;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.41);
    "
  ></div>
  </div>
  <!--------------------------------------------------end-Hero-section------------------------------------------------------------->
  <!--------------------------------------------------gallary------------------------------------------------------------->


  <div class="news-container">
    <div class="row">
        @foreach ($media as $item)
            <div class="card"
                 data-aos="fade-up"
                 data-aos-delay="{{ $loop->iteration * 100 }}"
                 style="background-image: url('{{ asset($item->image) }}');">
                <div class="details">
                    <div class="text">
                        <p class="date">{{ $item->created_at->format('F Y') }}</p>
                        <p class="main">{{ $item->title }}</p>
                        <p class="date">{!! $item->description !!}</p>
                    </div>
                    <div style="cursor:pointer;" class="btn-media-center">
                        <a class="color" style="text-decoration: none;" href="{{ route('single-media', $item->id) }}">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>



        <!-------------------------------------------------------end-vision---------------------------------------------------------------->
    </x-layouts.front.master>

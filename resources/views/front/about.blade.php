<x-layouts.front.master>

    <x-slot name="title">About Us</x-slot>
<!--------------------------------------------------Hero-section------------------------------------------------------------------->
     <div style="background-image: url({{ url('front/about-us-banner.jpg') }}); height:50vh;position: relative;" class="Hero-Section ">
    <div style="z-index: 22;
    margin-left: 53px;
    margin-top: 98px;" >
     <img src="./about us.png" alt="Italian Trulli">

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
    <div
      class="all-description-about-us"
      style="background-image: url(./backgroundWhite-gray-pattern.jpg);"
    >
      <div
        class="description-about-us"

        data-aos-delay="3000"
        data-aos-duration="3000"
      >
      {!! $about_content->about !!}
      </div>
    </div>
    <!-------------------------------------------------------mission---------------------------------------------------------------->

    <div
      class="Mission-About-Us-Section"
      style="display: flex; justify-content: center; align-items: center"
    >
      <h1
        data-aos="fade-left" data-aos-delay="100"
        class="tittle-vision-about-us"
        style="color: white;    align-items: center; display: flex; flex: 1; justify-content: center"
      >
        Mission
      </h1>
      <div
        data-aos="fade-left" data-aos-delay="200" class="Mission-description"
        style="
    font-size: 20px;
    color: white;
    padding-right: 69px;
    display: flex;
    flex: 1;
    justify-content: start;
        "
      >
        <div style="max-width: 600px;
    font-size: 17px;
    line-height: 35px;">
          {!! $about_content->mission !!}
        </div>
      </div>
    </div>
    <!-------------------------------------------------------end-mission---------------------------------------------------------------->
    <!-------------------------------------------------------vision-------------------------------------------------------------------->

    <div
      class="vision-about-us"
      style="
        background-image: url(./backgroundWhite-gray-pattern.jpg);
        display: flex;
        justify-content: center;
        align-items: center;
      "
    >
      <h1
        data-aos="fade-right" data-aos-delay="100"
        class="tittle-vision-about-us"
      >
        Vision
      </h1>
      <div
       class="Mission-description"
        style="
          font-size: 20px;
          display: flex;
          flex: 1;
          justify-content: end;
          padding-left: 75px;
        "
      >
        <div data-aos="fade-right" data-aos-delay="200" style="max-width: 600px; font-size: 17px;
    line-height: 35px;">
          {!! $about_content->vission !!}
        </div>
      </div>
    </div>

    <!-------------------------------------------------------end-vision---------------------------------------------------------------->
</x-layouts.front.master>

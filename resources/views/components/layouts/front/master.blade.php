<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
        integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/css/intlTelInput.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>{{ $setting->meta_title }} {{ isset($title)? ' | '.$title: '' }}</title>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="icon" href="./TG-WHITE-LOGO.png" type="image/icon type" />
    <link href="{{ url('front/fontawesome/css/fontawesome.css') }}" rel="stylesheet" />

    <link href="{{ url('front/fontawesome/css/brands.css') }}" rel="stylesheet" />
    <link href="{{ url('front/fontawesome/css/solid.css') }}" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />


    <link rel="stylesheet" href="{{ url('front/index.css') }}" />
</head>

<body>
    <div class="preloader-container">
        <img class="img-prloader" style="width: 10%; margin-bottom: 20vh" src="{{ url('front/tg-transbarent-logo.png') }}"
            alt="Italian Trulli" />
        <div class="preloader-text preloader-scale"
            style="display: flex; justify-content: center; align-items: start; ">
            <div style="
            display: flex;
            align-items: center;
            height: fit-content;
            gap: 9px;
            z-index:11;
          ">
                <div style="color: aliceblue">
                    <span style="color: aliceblue; font-family: serif !important"><img src="{{ url('front/extra.png') }}"
                            alt="Italian Trulli"></span>
                </div>
                <div style="color: aliceblue; position: relative; z-index: 20">
                    <span style="color: aliceblue; font-family: serif !important;  "><img src="{{ url('front/ordin.png') }}"
                            alt="Italian Trulli"></span>
                </div>
                <div style=" transform: translateX(-13px);">
                    <span><img src="{{ url('front/Reach.png') }}" alt="Italian Trulli"></span>
                </div>
                <div style="color: aliceblue">
                    <span style="font-family: serif !important; color: aliceblue"><img src="{{ url('front/extra2.png') }}"
                            alt="Italian Trulli"></span>
                </div>
                <div style="color: aliceblue;">
                    <span style="color: aliceblue;  font-family: serif !important"><img src="{{ url('front/ordin.png') }}"
                            alt="Italian Trulli"></span>
                </div>
                <div style="
              color: aliceblue;
              z-index: 20;
              position: relative;
              transform: translateX(-10px);
            ">
                    <span style="color: aliceblue; font-family: serif !important;"><img src="{{ url('front/slogtan.png') }}
" alt="Italian Trulli"></span>
                </div>

            </div>
        </div>
    </div>
    <!--------------------------------------------------start-header-section------------------------------------------------------------->
    <header>
        <div class="logo" data-aos-delay="3000" data-aos-duration="3000" data-aos="slide-right">
            <img src="{{ url($setting->image) }}" alt="TG Developments" />
        </div>
        <nav class="conainer-navbar-header">
            <ul class="navbar-header">
                <li>
                    <a href="{{ route('home') }}">
                        HOME
                    </a>
                </li>
                <li>
                    <a href="{{ route('about') }}">
                        ABOUT US
                    </a>
                </li>
                <li>
                    <a href="{{ route('developments') }}">OUR
                        DEVELOPMENTS</a>
                </li>
                <li>
                    <a href="{{ route('media') }}">MEDIA CENTER</a>
                </li>
                <li>
                    <a href="{{ route('careers') }}">CAREERS</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}">CONTACT US</a>
                </li>
            </ul>
        </nav>
        <div class="nav-icon">
            <!--<i class="fa-brands fa-whatsapp"></i>-->
            <i class="fa-solid fa-phone px-2"></i>
            <p class="m-0">{{ $contact_content->phone }}</p>
        </div>

        <div id="menuArea">
            <input type="checkbox" id="menuToggle" />

            <label for="menuToggle" class="menuOpen">
                <div class="open"></div>
            </label>

            <div class="menu menuEffects">
                <label for="menuToggle"></label>
                <div class="menuContent">
                    <ul>
                        <li><a href="{{ route('about') }}">ABOUT
                                US</a></li>
                        <li><a href="{{ route('developments') }}">OUR
                                DEVELOPMENTS</a></li>
                        <li><a href="{{ route('media') }}">MEDIA
                                CENTER</a></li>
                        <li><a href="{{ route('careers') }}">CAREERS</a></li>
                        <li><a href="{{ route('contact') }}">CONTACT
                                US</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    {{ $slot }}

    @if(Request::routeIs('home'))
        <x-layouts.front.footer1 :setting="$setting" :contact_content="$contact_content"/>
    @else
        <x-layouts.front.footer2 :setting="$setting" :contact_content="$contact_content"/>
    @endif


    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/intlTelInput.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/SplitText.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.2/anime.min.js"
        integrity="sha512-aNMyYYxdIxIaot0Y1/PLuEu3eipGCmsEUBrUq+7aVyPGMFH8z0eTP0tkqAvv34fzN6z+201d3T8HPb1svWSKHQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
        integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="{{ url('front/index.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script>
        const typed = new Typed("#title-write", {
            strings: [
                `
        <div style="display:flex;align-items:center;justify-content:flex-start;width:100%;">
<span style="color: aliceblue; font-family: serif !important; position: relative; z-index: 20;font-size:30px">Extra Ordinary</span>
<span style="font-size: 90px; font-family: Grey Qo !important; transform: translateX(-30px); color:#f77f00;">Reach</span>
<span style="font-family: serif !important; color: aliceblue"></span>
<span style="color: aliceblue; transform: translateX(-20px); z-index: 20; position: relative; font-family: serif !important;font-size:30px">..Extra Ordinary</span>
<span style="color:#f77f00;font-size: 90px; font-family: Grey Qo !important;transform: translateX(-50px); z-index: 10; position: relative">Outcomes</span>
          </div>
`,
            ],
            typeSpeed: 40,
            loop: true,
            showCursor: false,
            autoInsertCss: true,
            backSpeed: 30,
            smartBackspace: true,
            backDelay: 5000,
        });
        const typed2 = new Typed("#title-write2", {
            strings: [
                `
        <div style="display:flex;align-items:center;justify-content:flex-start;width:100%;">
<span style="color: aliceblue; font-family: serif !important; position: relative; z-index: 20;font-size:30px">Extra Ordinary</span>
<span style="font-size: 90px; font-family: Grey Qo !important; transform: translateX(-30px); color:#f77f00;">Reach</span>
<span style="font-family: serif !important; color: aliceblue"></span>
<span style="color: aliceblue; transform: translateX(-20px); z-index: 20; position: relative; font-family: serif !important;font-size:30px">..Extra Ordinary</span>
<span style="color:#f77f00;font-size: 90px; font-family: Grey Qo !important;transform: translateX(-50px); z-index: 10; position: relative">Outcomes</span>
          </div>
`,
            ],
            typeSpeed: 40,
            loop: true,
            showCursor: false,
            autoInsertCss: true,
            backSpeed: 30,
            smartBackspace: true,
            backDelay: 5000,
        });
        const typed3 = new Typed("#title-write3", {
            strings: [
                `
        <div style="display:flex;align-items:center;justify-content:flex-start;width:100%;">
<span style="color: aliceblue; font-family: serif !important; position: relative; z-index: 20;font-size:30px">Extra Ordinary</span>
<span style="font-size: 90px; font-family: Grey Qo !important; transform: translateX(-30px); color:#f77f00;">Reach</span>
<span style="font-family: serif !important; color: aliceblue"></span>
<span style="color: aliceblue; transform: translateX(-20px); z-index: 20; position: relative; font-family: serif !important;font-size:30px">..Extra Ordinary</span>
<span style="color:#f77f00;font-size: 90px; font-family: Grey Qo !important;transform: translateX(-50px); z-index: 10; position: relative">Outcomes</span>
          </div>
`,
            ],
            typeSpeed: 40,
            loop: true,
            showCursor: false,
            autoInsertCss: true,
            backSpeed: 30,
            smartBackspace: true,
            backDelay: 5000,
        });
        const typed4 = new Typed("#title-write4", {
            strings: [
                `
        <div style="display:flex;align-items:center;justify-content:flex-start;width:100%;">
<span style="color: aliceblue; font-family: serif !important; position: relative; z-index: 20;font-size:30px">Extra Ordinary</span>
<span style="font-size: 90px; font-family: Grey Qo !important; transform: translateX(-30px); color:#f77f00;">Reach</span>
<span style="font-family: serif !important; color: aliceblue"></span>
<span style="color: aliceblue; transform: translateX(-20px); z-index: 20; position: relative; font-family: serif !important;font-size:30px">..Extra Ordinary</span>
<span style="color:#f77f00;font-size: 90px; font-family: Grey Qo !important;transform: translateX(-50px); z-index: 10; position: relative">Outcomes</span>
          </div>
`,
            ],
            typeSpeed: 40,
            loop: true,
            showCursor: false,
            autoInsertCss: true,
            backSpeed: 30,
            smartBackspace: true,
            backDelay: 5000,
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/split-type"></script>
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.19/bundled/lenis.min.js"></script>
    <script>
        gsap.registerPlugin(ScrollTrigger);

        // Select all h1, h2, h3, h4, h5, span, and p elements
        const splitTypes = document.querySelectorAll('h1, h2, h3, h4, h5, p');

        splitTypes.forEach((char, i) => {
            const text = new SplitType(char, { types: 'chars' });

            gsap.from(text.chars, {
                scrollTrigger: {
                    trigger: char,
                    start: 'top 90%',
                    end: 'top 40%',
                    scrub: true,
                    markers: false,
                },
                opacity: 0.2,
                stagger: 0.1,

            });
        });

        //   // Initialize Lenis for smooth scrolling
        //   const lenis = new Lenis({
        //     // smooth scrolling duration set to 200ms
        //     easing: (t) => Math.min(1, 1 - Math.pow(1, -10 * t)),  // easing function for the scroll
        //     smoothWheel: true,  // enable smooth scrolling for mouse wheel
        //     smoothTouch: false, // enable smooth scrolling for touch devices
        //   });

        // Bind Lenis to the scroll event
        lenis.on('scroll', (e) => {
            ScrollTrigger.update();  // Sync ScrollTrigger with Lenis
        });

        function raf(time) {
            lenis.raf(time);
            requestAnimationFrame(raf);
        }

        requestAnimationFrame(raf);



    </script>

    {{ isset($extra_script) ? $extra_script : '' }}

</body>

</html>

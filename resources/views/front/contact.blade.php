<x-layouts.front.master>
    <x-slot name="title">Contact Us</x-slot>

    <!--------------------------------------------------Hero-section------------------------------------------------------------->
    <div style="background-image: url({{ asset('front/banner2.jpg') }});" class="Hero-Section">
        <div
            style="
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.67);
        "></div>
        <div style="z-index: 22; margin-left: 73px; margin-top: 98px;">
            <img src="{{ asset('front/contact us.png') }}" style="width: 83%;" alt="Contact Us">
        </div>
    </div>

    <div style="
        width: 100%;
        position: relative;
        display: flex;
        align-items: center;
        flex-direction: column;
        background-size: cover;
        background-repeat: no-repeat;
        justify-content: center;
        background-image: url({{ asset('front/backgroundWhite-gray-pattern.jpg') }});">
        <div class="form-container">
            <div class="col col-1">
                <div class="title-container">
                    <p class="title" data-aos="fade-up" data-aos-delay="50">Get in Touch</p>
                    <p class="slogan" data-aos="fade-up" data-aos-delay="100">It's Easy</p>
                </div>
                <!-- Update form to handle POST method -->
                <form class="form-div" method="POST" action="{{ route('store-contact') }}">
                    @csrf <!-- CSRF token for security -->
                    <div class="input-container" data-aos="fade-up" data-aos-delay="150">
                        <p>First name</p>
                        <input type="text" name="first_name" class="text-input" placeholder="e.g John Smith" required />
                    </div>
                    <div class="input-container" data-aos="fade-up" data-aos-delay="200">
                        <p>Last name</p>
                        <input type="text" name="last_name" class="text-input" placeholder="e.g John Smith" required />
                    </div>
                    <div class="input-container" data-aos="fade-up" data-aos-delay="250">
                        <p>Email</p>
                        <input type="email" name="email" class="text-input" placeholder="Johnsmith@example.com" required />
                    </div>
                    <div class="input-container" data-aos="fade-up" data-aos-delay="300">
                        <p>Phone number</p>
                        <input type="tel" name="phone_number" class="text-input" placeholder=" " required />
                    </div>

                    <div class="frame" style="display: block; width: 100%; height: 34px; margin: 0;" data-aos="fade-up" data-aos-delay="350">
                        <button class="custom-btn btn-14" style="width: 100%; margin: 0px;">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!------------------------- location-contact-us--------------------- -->
    <section class="contact-section">
        <div class="filter-contact p-0">
            <div class="container">
                <div class="">
                    <div class="contact-info d-flex flex-column">
                        <div>
                            <h2 style="margin-bottom: 11px;">Contact Us</h2>
                        </div>
                        <div class="d-flex align-items-center justify-content-evenly contact-info">
                            <!-- Address -->
                            <div class="info-item">
                                <div>
                                    <div class="d-flex justify-content-center align-content-center">
                                        <i data-aos="fade-up" class="fa fa-home contact-icon"></i>
                                        <h3 data-aos="fade-up">Address</h3>
                                    </div>
                                    <p data-aos="fade-up" class="d-flex align-items-center justify-content-center text-center addres-contact">
                                        {{ $contact_content->address ?? '4671 Sugar Camp Road, Owatonna, Minnesota, 55060' }}
                                    </p>
                                </div>
                            </div>
                            <!-- Phone -->
                            <div class="info-item flex-column">
                                <div data-aos="fade-up" class="d-flex justify-content-center mb-2 align-items-center">
                                    <i data-aos="fade-up" class="fa fa-phone contact-icon"></i>
                                    <h3 data-aos="fade-up">Phone</h3>
                                </div>
                                <div>
                                    <p data-aos="fade-up">
                                        {{ $contact_content->phone ?? '571-457-2321' }}
                                        @if($contact_content->phone2)
                                            , {{ $contact_content->phone2 }}
                                        @endif
                                    </p>
                                </div>
                            </div>
                            <!-- Email -->
                            <div class="info-item flex-column">
                                <div class="d-flex align-items-center mb-2 justify-content-center">
                                    <i data-aos="fade-up" class="fa fa-envelope contact-icon"></i>
                                    <h3 data-aos="fade-up">Email</h3>
                                </div>
                                <div>
                                    <p>{{ $contact_content->email ?? 'ntamerrwael@mfano.ga' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Map -->
    <iframe style="width:100%; height: 80vh;" src="{{ $contact_content->map ?? 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3454.310782739354!2d31.4773663!3d30.027940599999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458230503cb6359%3A0xe4392b72f6ce97b0!2sTrivium%20Square!5e0!3m2!1sen!2seg!4v1723558041075!5m2!1sen!2seg' }}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</x-layouts.front.master>

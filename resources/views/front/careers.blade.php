<x-layouts.front.master>
    <x-slot name="title">Careers</x-slot>

    <!-------------------------------------------------- Hero-section ------------------------------------------------------------->
    <div class="Hero-Section" style="background-image: url({{ asset('front/banner1.jpg') }}); position: relative;">
        <div class="overlay" style="position: absolute; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.67);"></div>
        <div class="hero-content" style="z-index: 22; margin-left: 73px; margin-top: 98px;">
            <img src="{{ asset('front/careers.png') }}" alt="Career Opportunities">
        </div>
    </div>

    <!------------------------- Job Description Section --------------------->
    <div class="job-description-careers d-flex justify-content-center align-items-start text-white" style="padding: 40px; height: 100%;">
        <p class="job-title" style="font-size: 38px; color: #f77f00">Accountant</p>
        <p>Looking For A Full Time Accountants</p>
        <p>Bachelor degree in Accounting (English Section).</p>
        <div class="job-details d-flex flex-column justify-content-center align-items-start">
            <p style="font-size: 20px; color: #f77f00">Job Description:</p>
            <p class="job-description-text" style="transform: translateY(-12px); text-align: start;">
                Prepare invoices, follow up on client cash collection, purchase orders, cheque follow ups, and online payments. Manage the petty cash, analyze and prepare monthly financial reports. Deal and communicate with all banks that SADEX deals with and issue cheques for the concerned entities. Follow up on the import transactions, the supplier invoices, and the payment schedules. Follow up on credit facilities files, such as issuing of letters of guarantees, and follow up on its settlement. Drafting, sending and following up letters of guarantees Prepare monthly salaries, manage expenses and allowances Budgeting and the responsibility of the monthly and quarterly taxes. End of year inventory management.
            </p>
        </div>
    </div>

    <!------------------------- Form Section --------------------->
    <div class="projcard projcard-customcolor my-5" style="height: 110vh">
        <div class="projcard-innerbox">
            <div class="projcard-textbox" style="align-items: center;">
                <div class="form-container">
                    <div class="col col-1">
                        <div class="title-container">
                            <p data-aos="fade-up" data-aos-delay="50" class="title">Get in Touch</p>
                            <p data-aos="fade-up" data-aos-delay="100" class="slogan">It's Easy</p>
                        </div>
                        <form class="form-div" method="POST" action="{{ route('store-career') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="input-container" data-aos="fade-up" data-aos-delay="150">
                                <label for="first_name">First Name</label>
                                <input type="text" name="first_name" class="text-input" placeholder="e.g. John" required>
                            </div>
                            <div class="input-container" data-aos="fade-up" data-aos-delay="200">
                                <label for="last_name">Last Name</label>
                                <input type="text" name="last_name" class="text-input" placeholder="e.g. Smith" required>
                            </div>
                            <div class="input-container" data-aos="fade-up" data-aos-delay="250">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="text-input" placeholder="Johnsmith@example.com" required>
                            </div>
                            <div class="input-container" data-aos="fade-up" data-aos-delay="300">
                                <label for="phone">Phone Number</label>
                                <input type="tel" name="phone_number" class="text-input" id="phone" required>
                            </div>

                            <div class="frame" style="display: block; width: 100%; height: 34px; margin: 0">
                                <input type="file" name="cv" class="custom-btn btn-14" style="width: 100%; margin: 0px" data-aos="fade-up" data-aos-delay="350" required>
                            </div>
                            <div class="frame" style="display: block; width: 100%; height: 34px; margin: 0">
                                <button type="submit" class="custom-btn btn-14" style="width: 100%; margin: 0px" data-aos="fade-up" data-aos-delay="400">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------------------------- End Form Section --------------------->
</x-layouts.front.master>

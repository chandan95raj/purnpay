@extends('web.app')

@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('web/pan/css/style.css') }}">
    <style>
        .custom_sec_form .bg-overlay {
            position: absolute;
        }

        .social-icon.social li a {
            display: flex;
        }

        .bz-footer-cta {
            display: flex;
        }

        #navigation .has-submenu .submenu .active .sub-menu-item::after {
            content: none;
        }
        .blog .card-img-top {
            height: 237px !important;
            object-fit: cover;
        }
</style>



    <section class="bg-half-170 pb-5 bg-light d-table w-100 overflow-hidden padding_head_below"
        style="background: url('{{ asset('web/images/shapes/shape2.png') }}') top; z-index: 0;">
        <div class="container" id="startbanner">
            <div class="row align-items-center mt-5 mt-sm-0">
                <div class="col-md-6">
                    <div class="title-heading text-center text-md-start">

                        <h1 class="heading mb-3 mt-2"><span class="">Become an Authorized PAN Card Agent</span></h1>
                        <p class="text-muted mb-0 para-dark para-desc mx-auto ms-md-auto">Your customers can now apply for
                            an E-PAN or Physical Card instantly using Aadhaar without the hassle of uploading any documents
                            and get an E-PAN within 2 hours. Open your own PAN Card Center and earn Rs.20000 every month.
                        </p>

                        <div class="mt-4">
                            <a href="https://app.purnpay.com/auth/register/view" target="_blank" class="btn btn-primary"
                                style="margin:10px 0px;">Become PAN Card Agent</a>
                            <!-- <a href="#lead_form" class="btn btn-primary" style="margin:10px 0px;">Distributor Account</a> -->

                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="freelance-hero position-relative" id="freelance-hero222">
                        <div class="bg-shape position-relative pb-5">
                            <img src="{{ asset('web/Pan-images/DisplayImage.png') }}" class="mx-auto d-block img-fluid"
                                alt="PurnPay  Agent">
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End Hero -->


    <section>
        <div class="sec2banner">
            <center>
                <h3 style="color:#fff;">Become a PAN Card Agent and Earn up to Rs.20,000 per month.</h3>
                <div class="">
                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#myModal1">
                        <div class="btn btn-primary">Sign Up</div>
                    </a>
                </div>
            </center>
        </div>
    </section>


    <!-- Sub category included in service >start<-->
    <section class="bg-light">
        <div class="container py-3 px-5">

            <div class="row justify-content-center pt-4">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h2 class="title mb-4">PAN Card Center</h2>
                        <p class="text-muted mb-0 mx-auto">A Permanent Account Number (PAN) card center is a
                            government-authorized entity that issues PAN cards to individuals and organizations in India.
                            PAN is a unique 10-digit alphanumeric identifier assigned by the Income Tax Department of India
                            to track the financial transactions of taxpayers. PAN card centers can be found across India,
                            and the process of applying for a PAN card involves submitting an application form along with
                            supporting documents to the nearest center.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center align-items-center">
                <div class="col-lg-12 col-md-12">
                    <div class="row mt-4 py-2">
                        <div class="col-md-4 col-12">
                            <div class="features pt-4 pb-4 features6767" id="pancardicol">
                                <div class="image position-relative d-inline-block">
                                    <img src="{{ asset('web/Pan-images/EPANCard.svg') }}"
                                        class="py-3 service-benefits-icon ps-3">
                                </div>
                                <div class="flex-1 mb-3">
                                    <h3 class="title py-3">E â€“ PAN Card: </h3>
                                    <p class="text-muted para mb-0 pb-3">E-PAN is a secure, paperless, and instant method of
                                        obtaining PAN, and it eliminates the need to wait for a physical PAN card to be
                                        delivered.</p>
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class="col-md-4 col-12">
                            <div class="features pt-4 pb-4 features67678" id="pancardicol">
                                <div class="image position-relative d-inline-block">
                                    <img src="{{ asset('web/Pan-images/PhysicalPANCard.svg') }}"
                                        class="py-3 service-benefits-icon ps-3">
                                </div>
                                <div class="flex-1">
                                    <h3 class="title py-3">Physical PAN Card:</h3>
                                    <p class="text-muted para mb-0 pb-3">Along with E-PAN, you can apply for a physical PAN
                                        Card which gets directly delivered to the customerâ€™s address within 21 days from
                                        the application date.</p>
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class="col-md-4 col-12">
                            <div class="features pt-4 pb-4 features6767" id="pancardicol">
                                <div class="image position-relative d-inline-block">
                                    <img src="{{ asset('web/Pan-images/PANCorrection.svg') }}"
                                        class="py-3 service-benefits-icon ps-3">
                                </div>
                                <div class="flex-1">
                                    <h3 class="title py-3">PAN Correction:</h3>
                                    <p class="text-muted para mb-0 pb-3">PurnPay provides the facility of updating the
                                        information on any existing PAN card. This includes changes to details such as name,
                                        date of birth, address, etc. </p>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end col-->
    </section>


    <!-- Sub category included in service >end<-->

    <section class="padding_50 bg-light py-5">
        <div class="container py-5 px-5">

            <div class="row justify-content-center py-5">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 px-5">
                        <h2 class="title mb-4">Advantages of PAN Card Agent</h2>
                    </div>
                </div>
            </div>
            <div class="row" id="row3322">
                <div class="column py-2" id="col3322">
                    <div class="card88 card88-hover" id="card88-88">
                        <p class="mt-3">Single Wallet</p>
                    </div>
                </div>
                <div class="column py-2" id="col3322">
                    <div class="card88 card88-hover" id="card88-88">
                        <p class="mt-3">Realtime Commission</p>
                    </div>
                </div>
                <div class="column py-2" id="col3322">
                    <div class="card88 card88-hover" id="card88-88">
                        <p class="mt-3">Physical & E-Pan</p>
                    </div>
                </div>
            </div>
            <div class="row " id="row3322">
                <div class="column py-2" id="col3322">
                    <div class="card88 card88-hover" id="card88-88">
                        <p class="mt-3">Instant Service Activation</p>
                    </div>
                </div>
                <div class="column py-2" id="col3322">
                    <div class="card88 card88-hover" id="card88-88">
                        <p class="mt-3">Marketing Support</p>
                    </div>
                </div>
                <div class="column py-2" id="col3322">
                    <div class="card88 card88-hover" id="card88-88">
                        <p class="mt-3">Shop Certificate</p>
                    </div>
                </div>
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Feature End -->

    <section class="padding_50"
        style="background: url('{{ asset('web/Pan-images/Common-Image-Last-on-the-Page.jpg') }}') center center;">
        <div class="bg-overlay"></div>
        <div class="container py-5 px-5">
            <div class="row" id="afterline">
                <div class="col-12">
                    <div class="section-title mb-4">
                        <h4 class="title mb-4" style="color: white;">PAN Card Center Benefits</h4>
                    </div>
                </div>
            </div>

            <div class="row py-5" id="row3322">
                <div class="column py-2" id="col3322">
                    <div class="card">
                        <img src="{{ asset('web/Pan-images/EPANin2Hrs.png') }}" class="py-3 service-benefits-icon">
                        <p class="pt-4">E â€“ PAN in just 2 Hours</p>
                    </div>
                </div>
                <div class="column py-2" id="col3322">
                    <div class="card">
                        <img src="{{ asset('web/Pan-images/HugeFootfallinShop.svg') }}"
                            class="py-3 service-benefits-icon">
                        <p class="pt-4">Huge Footfall in Shop</p>
                    </div>
                </div>
                <div class="column py-2" id="col3322">
                    <div class="card">
                        <img src="{{ asset('web/Pan-images/HighMonthlyIncome.svg') }}" class="py-3 service-benefits-icon">
                        <p class="pt-4">High Monthly Income</p>
                    </div>
                </div>
            </div>

        </div><!--end row-->
        </div><!--end container-->
    </section>

    <section class="padding_50 bg-light bgg">
        <div class="container py-5 px-4">

            <div class="row justify-content-center">
                <div class="column text-center">
                    <div class="section-title">
                        <h3 class="title pb-5" style="color: white;">How to Become PurnPay PAN Card Agent?</h3>
                    </div>
                </div>
            </div>
            <div class="row pt-4" id="row3322">
                <div class="col-lg-3 col-md-6 col-sm-6 mt-4" id="howtomargin">
                    <div class="card1">
                        <img src="{{ asset('web/Pan-images/Eo_circle_blue_number-1.svg.png') }}"
                            class="whyusicon whyusiconrotate">
                        <h3>Signup</h3>
                        <p class="py-2 whyuspara">Click on signup and register your shop by filling up the registration
                            form.</p>
                        <img src="{{ asset('web/Pan-images/Signup.svg') }}" class="py-3 service-benefits-icon">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mt-4" id="howtomargin">
                    <div class="card1">
                        <img src="{{ asset('web/Pan-images/Eo_circle_blue_number-2.svg.png') }}" class="whyusicon">
                        <h3>ID Activation</h3>
                        <p class="py-2 whyuspara">The registration form is verified, and your ID is activated within 24-48
                            hours.</p>
                        <img src="{{ asset('web/Pan-images/IDActivation.svg') }}" class="py-3 service-benefits-icon">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mt-4">
                    <div class="card1" id="howtomargin1">
                        <img src="{{ asset('web/Pan-images/Eo_circle_blue_white_number-3.svg.png') }}" class="whyusicon">
                        <h3>Activate Service</h3>
                        <p class="py-2 whyuspara">Login to PurnPay and go to the â€œAdd Serviceâ€ page. Click on PAN Card
                            and apply.</p>
                        <img src="{{ asset('web/Pan-images/ActivateService.svg') }}" class="py-3 service-benefits-icon">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mt-4">
                    <div class="card1" id="howtomargin1">
                        <img src="{{ asset('web/Pan-images/Eo_circle_blue_number-4.svg.png') }}" class="whyusicon">
                        <h3>Start Transaction</h3>
                        <p class="py-2 whyuspara">Service is activated instantly and you can start applying PAN Cards for
                            your customers.</p>
                        <img src="{{ asset('web/Pan-images/StartTransaction.svg') }}" class="py-3 service-benefits-icon">
                    </div>
                </div>
            </div>
        </div><!--end container-->
    </section><!--end section-->
    <!-- Feature End -->

    <section class="padding_50 bg-light">
        <div class="container pt-5">

            <div class="row">
                <div class="column text-center">
                    <div class="section-title">
                        <h4 class="title mb-4">Why choose us</h4>
                        <!--<p class="text-muted para-desc mb-0 mx-auto"><a href="">offers</a> many advantages which makes it one of the best option for anyone <br>who is looking to start a business Lorem ipsum dolor sit amet, consectetur <br>adipisicing elit, sed do eiusmod-->
                        <!--tem.</p>-->
                    </div>
                </div>
            </div>

            <div class="row py-5" id="row3322">
                <div class="col-lg-3 col-md-6 col-sm-6 mt-4 text-center">
                    <div class="card">
                        <img src="{{ asset('web/Pan-images/Service-activation-in-1-minute.svg') }}"
                            class="py-3 service-benefits-icon">
                        <p class="pt-4">Service activation in 1 minute</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mt-4 text-center">
                    <div class="card">
                        <img src="{{ asset('web/Pan-images/Both-UTI-and-NSDL-PAN-Card.svg') }}"
                            class="py-3 service-benefits-icon">
                        <p class="pt-4">Both - UTI and NSDL PAN Card</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mt-4 text-center">
                    <div class="card">
                        <img src="{{ asset('web/Pan-images/Web-as-well-as-a-mobile-application.svg') }}"
                            class="py-3 service-benefits-icon">
                        <p class="pt-4">Web as well as a mobile application</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mt-4 text-center">
                    <div class="card">
                        <img src="{{ asset('web/Pan-images/Distributor-model-available.svg') }}"
                            class="py-3 service-benefits-icon">
                        <p class="pt-4">Distributor model available</p>
                    </div>
                </div>
            </div>

            <!-- <div class="col-lg-4 col-md-4 col-12 mt-4 pt-2 text-center text-md-end">-->
            <!--    <img src="{{ asset('web/images/Why-Paynims -2.png') }}" class="img-fluid " alt="PurnPay  Services">-->
            <!--</div>  -->
        </div>
        </div>
    </section>

    <section class="padding_50">
        <div class="container pb-5">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">What Our Clients Said About <span class="text-primary">PurnPay </span></h4>

                        <p class="text-muted para-desc mx-auto mb-0">Start working with <span
                                class="text-primary fw-bold">PurnPay </span> that can provide everything you need to
                            generate awareness, drive traffic, connect.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12 mt-4">
                    <div class="tiny-two-item">
                        <div class="tiny-slide">
                            <div class="d-flex client-testi m-1">
                                <img src="{{ asset('web/Pan-images/man1.jpg') }}"
                                    class="avatar avatar-small client-image rounded shadow img-fluid" alt="">
                                <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted mt-2">" PurnPay has allowed me to be able to make some income
                                        gains during my leisure time. it is a perfect platform for all those who are looking
                                        at having a side income or a full-time business. Now having a good exposure working
                                        with PurnPay I have the flexibility to work from anywhere, all I need is a laptop or
                                        mobile with the internet. Thank you PurnPay for this wonderful opportunity. "</p>
                                    <h6 class="text-primary">- Suresh <small class="text-muted">Working
                                            Professional</small></h6>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="d-flex client-testi m-1">
                                <img src="{{ asset('web/Pan-images/woman1.jpg') }}"
                                    class="avatar avatar-small client-image rounded shadow img-fluid" alt="">
                                <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted mt-2">" It has been quite a while since I have been retired, one
                                        of the greatest challenges that I faced was the minimalistic lifestyle I had to live
                                        to manage my finances and pay my bills, I was looking for a way to monetize from my
                                        free time. Thatâ€™s when I got to know about PurnPay it seemed like the best option
                                        for me. The guidance and training provided by the team were well structured and has
                                        helped me understand the business better and start making money sooner than what I
                                        had assumed. Now even though I am retired I donâ€™t have to be reliant on anyone. "
                                    </p>
                                    <h6 class="text-primary">- Mr Bhupati <small class="text-muted">Retired
                                            Employee</small></h6>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="d-flex client-testi m-1">
                                <img src="{{ asset('web/Pan-images/woman2.jpg') }}"
                                    class="avatar avatar-small client-image rounded shadow img-fluid" alt="">
                                <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted mt-2">" Housewives tends to face a lot of limitations especially
                                        when it comes to working out. After marriage, I wasnâ€™t allowed to work. Although I
                                        didnâ€™t want these limitations to stop me from moving ahead, Also, I thought I
                                        could help in supporting my familyâ€™s financial needs. After receiving advice from
                                        a well-wisher of mine I decided to opt for PurnPay . It was the solution that well
                                        balanced my personal and professional life. Thank you PurnPay !!! "</p>
                                    <h6 class="text-primary">- Sangeeta <small class="text-muted">Housewife</small></h6>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="d-flex client-testi m-1">
                                <img src="{{ asset('web/Pan-images/man1.jpg') }}"
                                    class="avatar avatar-small client-image rounded shadow img-fluid" alt="">
                                <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted mt-2">" Being an ambitious guy I always brainstorm with myself to
                                        get better ways to make more money, and I knew I had to start working at an early
                                        age but I also knew I had time to earn from a side gig. I wanted an option that
                                        would not affect my education. During my research, I came across the PurnPay
                                        Platform which seemed promising to me and so I enrolled and got myself registered
                                        with them. Now I make enough to be able to finance my education. "</p>
                                    <h6 class="text-primary">- Nikhil <small class="text-muted">College student</small>
                                    </h6>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="d-flex client-testi m-1">
                                <img src="{{ asset('web/Pan-images/woman1.jpg') }}"
                                    class="avatar avatar-small client-image rounded shadow img-fluid" alt="">
                                <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted mt-2">" PurnPay has given me the confidence to step up my game and
                                        start my own business all with minimal investment, I appreciate how they have
                                        streamlined their training process and how the whole team goes out of the way to
                                        support with any difficulties faced. The first thing that comes to a personâ€™s mind
                                        before they start a business is where do I get my finances from? I donâ€™t have
                                        expertise in anything, who will guide me in my PurnPay? All these questions were
                                        answered well by PurnPay . "</p>
                                    <h6 class="text-primary">- Rajesh <small class="text-muted">Business owner</small>
                                    </h6>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="tiny-slide">-->
                        <!--    <div class="d-flex client-testi m-1">-->
                        <!--        <img src="{{ asset('web/images/client/06.jpg') }}" class="avatar avatar-small client-image rounded shadow" alt="">-->
                        <!--        <div class="flex-1 content p-3 shadow rounded bg-white position-relative">-->
                        <!--            <ul class="list-unstyled mb-0">-->
                        <!--                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>-->
                        <!--                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>-->
                        <!--                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>-->
                        <!--                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>-->
                        <!--                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>-->
                        <!--            </ul>-->
                        <!--            <p class="text-muted mt-2">" Thus, Lorem Ipsum has only limited suitability as a visual filler for German texts. "</p>-->
                        <!--            <h6 class="text-primary">- Jill Webb <small class="text-muted">Designer</small></h6>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light">
        <div class="container py-5">

            <div class="row" id="afterline">
                <div class="col-12">
                    <div class="section-title mb-4">
                        <h4 class="title mb-4">FAQ</h4>
                    </div>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-lg-6 col-sm-12">
                    <button class="accordionhover accordion mb-4">What is a PAN Card?</button>
                    <div class="panel">
                        <p>A PAN (Permanent Account Number) card is a unique 10-digit alphanumeric identification number
                            issued by the Indian Income Tax Department. It serves as an important document of identity proof
                            and is required for various financial transactions such as opening a bank account, filing income
                            tax returns, buying or selling property, and making investments.
                            The PAN card contains details such as the holder's name, date of birth, photograph, and PAN
                            number. It is a widely recognized and accepted form of identification in India and is mandatory
                            for individuals and entities that engage in financial transactions or pay taxes in India.
                        </p>
                    </div>

                    <button class="accordion accordionhover mb-4">What are the benefits of having a PAN Card?</button>
                    <div class="panel">
                        <p>A PAN (Permanent Account Number) card is a unique 10-digit alphanumeric identity issued by the
                            Indian government's Income Tax Department to individuals and entities for various financial
                            transactions. Here are some benefits of having a PAN card:
                            1. Tax Identification: PAN card serves as a tax identification number and helps the Income Tax
                            Department track financial transactions and tax payments.
                            2. Filing Tax Returns: A PAN card is mandatory for filing income tax returns and claiming
                            refunds.
                            3. Opening Bank Accounts: A PAN card is required to open a bank account, and it serves as a KYC
                            (Know Your Customer) document.
                            4. Investing in Securities: A PAN card is necessary for investing in securities such as stocks,
                            bonds, and mutual funds.
                            5. Applying for Loans: PAN card serves as identity proof when applying for loans such as home
                            loans, personal loans, and car loans.
                            6. Buying or selling immovable property: PAN card is mandatory when buying or selling immovable
                            property worth more than Rs. 10 lakhs.
                            7. Cash Transactions: PAN card is mandatory for cash transactions exceeding Rs. 50,000.
                            Overall, having a PAN card helps individuals and entities comply with legal and regulatory
                            requirements while engaging in various financial transactions.
                        </p>
                    </div>

                    <button class="accordion accordionhover mb-4">How to make a PAN Card for your customers?</button>
                    <div class="panel">
                        <p>With PurnPay , making a PAN Card is as easy as ABC. Create your account in PurnPay and activate
                            the PAN Card service. Once the service is activated you can start making PAN Cards for your
                            customers.
                            1. Select NSDL or UTI
                            2. Fill the form with details of the customer
                            3. Verify the Aadhaar of the customer with OTP
                            4. PAN Card is sent in the mail in 2 hours and within 15 days, the customer gets the PAN card
                            delivered to his address.
                        </p>
                    </div>

                    <button class="accordion accordionhover mb-4">How much does a PAN Card agent earn in a month?</button>
                    <div class="panel">
                        <p>With PurnPay , which has 30+ services under one single application and wallet, any agent can earn
                            up to Rs.50000 every month.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-12">
                    <button class="accordion accordionhover mb-4">What is the cost of a PAN Card Agency?</button>
                    <div class="panel">
                        <p>PurnPay offers 25+ free services and charges a very negligible amount for activation of PAN Card
                            service. Any retailer can start making money from the first day of registration and profits up
                            to Rs.50000 every month.</p>
                    </div>

                    <button class="accordion accordionhover mb-4">What Types of PAN Cards are available?</button>
                    <div class="panel">
                        <p>PurnPay offers both forms of PAN Cards. E-PAN (Digital PAN Card) which is delivered to the mail
                            ID of the customer in 2 hours and Physical PAN Card which is delivered to the address of the
                            customer within 15 days from the application date.</p>
                    </div>

                    <button class="accordion accordionhover mb-4">How will I get a commission?</button>
                    <div class="panel">
                        <p>On-time commission is given to all our PAN Card Agents and PAN Card distributors on each
                            transaction made. Once a PAN Card is issued, the commission is instantly credited to the
                            retailer's or distributorâ€™s PurnPay wallet.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>
    <script>
        jQuery(document).ready(function() {
            jQuery('#navigation .has-submenu .submenu li.active').removeClass('active');
        })
    </script>


    <section class=" d-table w-100 overflow-hidden px-0 py-0 my-5 mb-0" id="blog_header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 text-center ">
                    <div class="title-heading mt-4">

                        <h4 class="heading mb-3"><span class="text-primary fw-bold">Blogs</span></h4>
                        <!--<p class="para-desc text-muted"><span class="text-primary fw-bold">PurnPay </span> has integrated with all the available banks to enable cash withdrawal and other AEPS services for all its partners.</p>-->

                    </div>
                </div><!--end col-->

            </div><!--end row-->
        </div><!--end container-->
    </section>

    <section class="blogs_main my-3">
        <div class="container pt-lg-5">
            <div class="row">
                @foreach ($allblog as $value)
                <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="card blog blog-primary rounded border-0 shadow overflow-hidden">
                        <a href="{{url('/blog-details')}}/{{$value->ns_id}}">
                            <div class="position-relative">
                                <img src="{{ asset('admin/uploads/' . $value->ns_img) }}"
                                    class="card-img-top" alt="...">
                                <div class="overlay rounded-top"></div>
                            </div>
                        </a>
                        <div class="card-body content">
                            <h5><a href="{{url('/blog-details')}}/{{$value->ns_id}}" class="card-title title text-dark">{!! Str::words($value->ns_title, 6, '...') !!}</a></h5>
                            <div class="post-meta d-flex justify-content-between mt-3">
                                <a href="{{url('/blog-details')}}/{{$value->ns_id}}" class="text-muted readmore">Read More <i
                                        class="uil uil-angle-right-b align-middle"></i></a>
                            </div>
                        </div>
                        <div class="author">
                            <!--<small class="user d-block"><i class="uil uil-user"></i> Calvin Carlo</small>-->
                            <small class="date"><i class="uil uil-calendar-alt"></i>{{ \Carbon\Carbon::parse($value->created_at)->format('d M Y') }}</small>
                        </div>
                    </div>
                </div><!--end col-->
                @endforeach
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
@endsection

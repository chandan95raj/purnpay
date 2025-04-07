@extends('web.app')

@section('content')
 <!-- Hero Start -->
 <section class="padding_200 d-table w-100 overflow-hidden" id="home">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-7">
                <div class="title-heading mt-4">

                    <h1 class="heading mb-3 ">About Us</h1>
                    <p class="para-desc text-muted" style="text-align:justify;">PurnPay is a state-of-the-art
                        B2B2C Digital Platform, under the parent SaaS based Company PurnPay by PurnTechRetail
                        Finlife India (OPC) Pvt. Ltd. registered under the Start-up India program.</p>
                    <p class="para-desc text-muted" style="text-align:justify;">
                        We are a 2-year-old company currently focused on developing cutting edge technology to
                        enable Fintech solutions. Our primary goal is to make India financially inclusive by
                        catering to scarcity of financial connectivity in tier II/III cities of India. The
                        organization has previously served in sectors of travel, telecommunications and e-commerce.
                    </p>
                    <p class="para-desc text-muted" style="text-align:justify;">
                        We, at PurnPay, enable local retail stores to offer Assisted Digital Financial Services like
                        Cash Deposit, Cash Withdrawal, Balance Inquiry, Bill Payments, Micro ATM, Aadhaar Enabled
                        Services (AEPS), DTH-Mobile Recharges, POS Services, SMS Payment, Insurance, Money Transfer
                        etc.</p>
                    <p class="para-desc text-muted" style="text-align:justify;">
                        We have leveraged artificial intelligence in our technology to make these financial
                        transactions seamless, quick and simple. We continuously keep iterating our solutions and
                        adapting changes as per feedback of our 35,000-active partner-network to develop this secure
                        platform which offers a significantly superior user experience.</p>
                    <p class="para-desc text-muted" style="text-align:justify;">
                        Every day we are inching closer to our goal of transforming tier II/III stores into a
                        one-stop solution for all digital and financial services. These stores will act as an
                        enabler to digitize cash for the customers visiting their outlets thereby empowering greater
                        financial connectivity in semi urban and rural regions across India. We are working on
                        enhancing the portfolio of our authorized partners by continuously adding new services where
                        they earn maximum income with minimum investment.
                    </p>

                </div>
            </div><!--end col-->

            <div class="col-lg-5 col-md-5 mt-4 pt-2 mt-sm-0 pt-sm-0">
                <div class=" position-relative">
                    <div class="bg-app-shape position-relative">
                        <img src="{{asset('web/images/web-img/about-us/Image-1-About-Us.png')}}"
                            class="img-fluid mx-auto d-block img_shadow" alt="">
                    </div>

                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- Hero End -->

<!-- Section Start -->
<section class="section overflow-hidden padding_class">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">

                    <h4 class="title mb-4">What We Do ?</h4>
                    <p class="text-muted para-desc mx-auto mb-0">The core of <span
                            class="text-primary fw-bold">PurnPay,</span> what we develop? How we do it? And who all
                        can benefit from the offerings we have?</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            <div class="col-md-4 col-12 mt-4 pt-2">
                <div class="card text-center rounded border-0">
                    <div class="card-body">
                        <div class="p-3 bg-light rounded shadow d-inline-block">
                            <img src="{{asset('web/images/icon/art-and-design.svg')}}" class="avatar avatar-small" alt="">
                        </div>
                        <div class="mt-4">
                            <h5><a href="javascript:void(0)" class="text-dark">Technology Driven</a></h5>
                            <p class="text-muted mt-3 mb-0">We provide numerous services, developed with most
                                secured technology to retailers via android app & web portal, which gives them
                                earning opportunities maintaining the safety of their wallet.</p>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-md-4 col-12 mt-4 pt-2">
                <div class="card text-center bg-primary bg-gradient rounded border-0">
                    <div class="card-body">
                        <div class="p-3 bg-light rounded shadow d-inline-block">
                            <img src="{{asset('web/images/icon/smartphone.svg')}}" class="avatar avatar-small" alt="">
                        </div>
                        <div class="mt-4">
                            <h5><a href="javascript:void(0)" class="text-white title-dark">Multiple Services</a>
                            </h5>
                            <p class="text-white-50 mt-3 mb-0">We provide number of financial and utility services
                                under one common wallet. Each service with an unlimited income potential making
                                every retailer a smart banker of his area with good monthly income.</p>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-md-4 col-12 mt-4 pt-2">
                <div class="card text-center rounded border-0">
                    <div class="card-body">
                        <div class="p-3 bg-light rounded shadow d-inline-block">
                            <img src="{{asset('web/images/icon/clock.svg')}}" class="avatar avatar-small" alt="">
                        </div>
                        <div class="mt-4">
                            <h5><a href="javascript:void(0)" class="text-dark">We Network With</a></h5>
                            <p class="text-muted mt-3 mb-0">Retailers, Distributors and Developers, converting them
                                to smart banking outlet. Unlimited income opportunity for people with network and
                                Powerful REST APIs for developers to enable financial services</p>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-5">
                <div class="app-feature-shape-left position-relative">
                    <div class="text-center text-md-start">
                        <img src="{{asset('web/images/web-img/about-us/Vision_Mission.png')}}" class="img-fluid" alt=""
                            width="70%">
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-6 col-md-7 mt-5 mt-sm-0">
                <div class="section-title">
                    <h1 class="title mb-3">Vision </h1>
                    <p class="para-desc text-muted">Empowering people’s dreams of being a business owner and making
                        it a reality.</p><!--
                        <ul class="list-unstyled text-muted">
                            <li class="mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Digital Marketing Solutions for Tomorrow</li>
                            <li class="mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Our Talented & Experienced Marketing Agency</li>
                            <li class="mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Create your own skin to match your brand</li>
                        </ul> -->

                    <div class="section-title">
                        <h1 class="title mb-3">Mission </h1>
                        <p class="para-desc text-muted">To build India’s largest network of independent business
                            owners.</p>

                    </div>



                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <!-- <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-7 order-2 order-md-1 mt-5 mt-sm-0">
                    <div class="section-title">
                        <h1 class="title mb-3">Mission </h1>
                        <p class="para-desc text-muted">To build India’s largest network of independent business owners.</p>
                        <div class="mt-4">
                            <a href="javascript:void(0)" class="btn btn-primary">Learn More <i class="uil uil-angle-right-b"></i></a>
                        </div>
                    </div>
                </div>

                
                <div class="col-lg-6 col-md-5 order-1 order-md-2">
                    <div class="app-feature-shape-right position-relative">
                        <div class="text-center text-md-end">
                            <img src="{{asset('web/images/app/classic03.png')}}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>-->

    <!--
        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-5">
                    <div class="app-feature-shape-left position-relative">
                        <div class="text-center text-md-start">
                            <img src="{{asset('web/images/app/classic04.png')}}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>

                
                <div class="col-lg-6 col-md-7 mt-5 mt-sm-0">
                    <div class="section-title">
                        <h1 class="title mb-3">Beautiful, Simple & <br> Easy to Use</h1>
                        <p class="para-desc text-muted">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap v5 html page.</p>
                        <ul class="list-unstyled text-muted">
                            <li class="mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Digital Marketing Solutions for Tomorrow</li>
                            <li class="mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Our Talented & Experienced Marketing Agency</li>
                            <li class="mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Create your own skin to match your brand</li>
                        </ul>
                        <div class="mt-4">
                            <a href="javascript:void(0)" class="btn btn-primary">Read More <i class="uil uil-angle-right-b"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>end container-->

    <!-- Our User

        <div class="container mt-100 mt-60 pb-md-5 mb-md-5">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <span class="badge rounded-pill bg-success mb-2">Reviews</span>
                        <h4 class="title mb-4">What our users says !</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary fw-bold">PurnPay</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12 mt-4">
                    <div class="tiny-three-item">
                        <div class="tiny-slide">
                            <div class="d-flex client-testi m-2">
                                <img src="{{asset('web/images/client/01.jpg')}}" class="avatar avatar-small client-image rounded shadow" alt="">
                                <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted mt-2">" It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. "</p>
                                    <h6 class="text-primary">- Thomas Israel <small class="text-muted">C.E.O</small></h6>
                                </div>
                            </div>
                        </div>
                        
                        <div class="tiny-slide">
                            <div class="d-flex client-testi m-2">
                                <img src="{{asset('web/images/client/02.jpg')}}" class="avatar avatar-small client-image rounded shadow" alt="">
                                <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted mt-2">" One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others. "</p>
                                    <h6 class="text-primary">- Barbara McIntosh <small class="text-muted">M.D</small></h6>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="d-flex client-testi m-2">
                                <img src="{{asset('web/images/client/03.jpg')}}" class="avatar avatar-small client-image rounded shadow" alt="">
                                <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted mt-2">" The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. "</p>
                                    <h6 class="text-primary">- Carl Oliver <small class="text-muted">P.A</small></h6>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="d-flex client-testi m-2">
                                <img src="{{asset('web/images/client/04.jpg')}}" class="avatar avatar-small client-image rounded shadow" alt="">
                                <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted mt-2">" According to most sources, Lorum Ipsum can be traced back to a text composed by Cicero. "</p>
                                    <h6 class="text-primary">- Christa Smith <small class="text-muted">Manager</small></h6>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="d-flex client-testi m-2">
                                <img src="{{asset('web/images/client/05.jpg')}}" class="avatar avatar-small client-image rounded shadow" alt="">
                                <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted mt-2">" There is now an abundance of readable dummy texts. These are usually used when a text is required. "</p>
                                    <h6 class="text-primary">- Dean Tolle <small class="text-muted">Developer</small></h6>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="d-flex client-testi m-2">
                                <img src="{{asset('web/images/client/06.jpg')}}" class="avatar avatar-small client-image rounded shadow" alt="">
                                <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted mt-2">" Thus, Lorem Ipsum has only limited suitability as a visual filler for German texts. "</p>
                                    <h6 class="text-primary">- Jill Webb <small class="text-muted">Designer</small></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
    </div>
</section>

<section class="">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="main-icon rounded-pill text-primary text-center mt-4 pt-2">
                    <i data-feather="star" class="fea icon-md-sm"></i>
                </div>
                <center>
                    <h1>History</h1>
                </center>
                <div class="timeline-page pt-2 position-relative">
                    <div class="timeline-item mt-4">
                        <div class="row">

                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div
                                    class="duration date-label-left border rounded p-2 px-4 position-relative shadow">
                                    OCT 2023</div>
                            </div><!--end col-->
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div
                                    class="card event event-description-right rounded shadow border-0 overflow-hidden float-start">
                                    <!-- <img src="{{asset('web/images/blog/01.jpg')}}" class="img-fluid" alt=""> -->
                                    <div class="card-body">
                                        <h5 class="mb-0 text-capitalize">The Founding Team </h5>
                                        <p class="mt-3 mb-0 text-muted">The founding team got the company PurnPay
                                            by PurnTechRetail Finlife India (OPC) Pvt. Ltd. registered.</p>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end timeline item-->

                    <div class="timeline-item mt-4">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 order-sm-1 order-2">
                                <div
                                    class="card event event-description-left rounded shadow border-0 overflow-hidden float-start">
                                    <!-- <img src="{{asset('web/images/blog/02.jpg')}}" class="img-fluid" alt=""> -->
                                    <div class="card-body">
                                        <h5 class="mb-0 text-capitalize">Launched PurnPayB2B</h5>
                                        <p class="mt-3 mb-0 text-muted">one of the most advanced and user-friendly
                                            B2B portal with Travel services like flight and bus bookings.</p>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-6 col-md-6 col-sm-6 order-sm-2 order-1">
                                <div
                                    class="duration duration-right rounded border p-2 px-4 position-relative shadow text-start">
                                    OCT 2023</div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end timeline item-->

                    <div class="timeline-item mt-4">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div
                                    class="duration date-label-left border rounded p-2 px-4 position-relative shadow">
                                    NOV 2023</div>
                            </div><!--end col-->
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div
                                    class="card event event-description-right rounded shadow border-0 overflow-hidden float-start">
                                    <!-- <img src="{{asset('web/images/blog/03.jpg')}}" class="img-fluid" alt=""> -->
                                    <div class="card-body">
                                        <h5 class="mb-0 text-capitalize">1000 Retail Touchpoints </h5>
                                        <p class="mt-3 mb-0 text-muted">More than 10,000 retail touchpoints were
                                            onboarded in more than 500 cities throughout India and launched many
                                            other services like recharge, bill payments, etc.</p>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end timeline item-->

                    <div class="timeline-item mt-4">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 order-sm-1 order-2">
                                <div
                                    class="card event event-description-left rounded shadow border-0 overflow-hidden float-start">
                                    <!-- <img src="{{asset('web/images/blog/04.jpg')}}" class="img-fluid" alt=""> -->
                                    <div class="card-body">
                                        <h5 class="mb-0 text-capitalize">Presence</h5>
                                        <p class="mt-3 mb-0 text-muted">Expanded the presence in 7+ states in
                                            India. Started processing 2500+ transactions daily.</p>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-6 col-md-6 col-sm-6 order-sm-2 order-1">
                                <div
                                    class="duration duration-right rounded border p-2 px-4 position-relative shadow text-start">
                                    DEC 2023</div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end timeline item-->

                    <div class="timeline-item mt-4">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div
                                    class="duration date-label-left border rounded p-2 px-4 position-relative shadow">
                                    DEC 2023</div>
                            </div><!--end col-->
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div
                                    class="card event event-description-right rounded shadow border-0 overflow-hidden float-start">
                                    <!-- <img src="{{asset('web/images/blog/05.jpg')}}" class="img-fluid" alt=""> -->
                                    <div class="card-body">
                                        <h5 class="mb-0 text-capitalize">New Service</h5>
                                        <p class="mt-3 mb-0 text-muted">Started new service of Loan Distribution
                                        </p>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end timeline item-->

                    <div class="timeline-item mt-4">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 order-sm-1 order-2">
                                <div
                                    class="card event event-description-left rounded shadow border-0 overflow-hidden float-start">
                                    <!-- <img src="{{asset('web/images/blog/06.jpg')}}" class="img-fluid" alt=""> -->
                                    <div class="card-body">
                                        <h5 class="mb-0 text-capitalize">PurnPay</h5>
                                        <p class="mt-3 mb-0 text-muted">PurnPay total network grows over 5000
                                            touchpoints. Started offering financial services like domestic money
                                            transfer.</p>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-6 col-md-6 col-sm-6 order-sm-2 order-1">
                                <div
                                    class="duration duration-right rounded border p-2 px-4 position-relative shadow text-start">
                                    JAN 2024</div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end timeline item-->

                    <div class="timeline-item mt-4">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div
                                    class="duration date-label-left border rounded p-2 px-4 position-relative shadow">
                                    2024</div>
                            </div><!--end col-->
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div
                                    class="card event event-description-right rounded shadow border-0 overflow-hidden float-start">
                                    <!-- <img src="{{asset('web/images/blog/05.jpg')}}" class="img-fluid" alt=""> -->
                                    <div class="card-body">
                                        <h5 class="mb-0 text-capitalize">Network</h5>
                                        <p class="mt-3 mb-0 text-muted">Network kept growing and achieved a new
                                            milestone of 5500+ retail touchpoints.</p>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end timeline item-->

                    <div class="timeline-item mt-4">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 order-sm-1 order-2">
                                <div
                                    class="card event event-description-left rounded shadow border-0 overflow-hidden float-start">
                                    <!-- <img src="{{asset('web/images/blog/06.jpg')}}" class="img-fluid" alt=""> -->
                                    <div class="card-body">
                                        <h5 class="mb-0 text-capitalize">Technology Platform </h5>
                                        <p class="mt-3 mb-0 text-muted">Shifted to new technology platform with
                                            advanced features. Added many new services like payment acceptance, Pan
                                            Card issuance, UPI, micro insurance and a lot more.</p>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-6 col-md-6 col-sm-6 order-sm-2 order-1">
                                <div
                                    class="duration duration-right rounded border p-2 px-4 position-relative shadow text-start">
                                    2024</div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end timeline item-->

                </div><!--end timeline page-->
                <!-- TIMELINE END -->
            </div><!--end col-->
        </div><!--end row-->
    </div>
</section>

<section class=" padding_head_below">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title"></h4>
                </div>
            </div><!--end col-->
        </div><!--end row-->
        <div style="display:none;">

            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title">Team #2</h4>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="d-flex align-items-center">
                        <img src="{{asset('web/images/client/05.jpg')}}" class="avatar avatar-medium rounded-circle img-thumbnail"
                            alt="">
                        <div class="content ms-3">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="text-dark">Krista John</a>
                            </h5>
                            <small class="position text-muted">Professor</small>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="d-flex align-items-center">
                        <img src="{{asset('web/images/client/06.jpg')}}" class="avatar avatar-medium rounded-circle img-thumbnail"
                            alt="">
                        <div class="content ms-3">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="text-dark">Jack John</a></h5>
                            <small class="position text-muted">Professor</small>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="d-flex align-items-center">
                        <img src="{{asset('web/images/client/01.jpg')}}" class="avatar avatar-medium rounded-circle img-thumbnail"
                            alt="">
                        <div class="content ms-3">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="text-dark">Roger Jackson</a>
                            </h5>
                            <small class="position text-muted">Professor</small>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="d-flex align-items-center">
                        <img src="{{asset('web/images/client/02.jpg')}}" class="avatar avatar-medium rounded-circle img-thumbnail"
                            alt="">
                        <div class="content ms-3">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="text-dark">Luchhi Cina</a>
                            </h5>
                            <small class="position text-muted">Professor</small>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="d-flex align-items-center">
                        <img src="{{asset('web/images/client/03.jpg')}}" class="avatar avatar-medium rounded-circle img-thumbnail"
                            alt="">
                        <div class="content ms-3">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="text-dark">Sophiya Cally</a>
                            </h5>
                            <small class="position text-muted">Professor</small>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="d-flex align-items-center">
                        <img src="{{asset('web/images/client/04.jpg')}}" class="avatar avatar-medium rounded-circle img-thumbnail"
                            alt="">
                        <div class="content ms-3">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="text-dark">Johnny English</a>
                            </h5>
                            <small class="position text-muted">Professor</small>
                        </div>
                    </div>
                </div><!--end col-->
            </div>
            <! display none -->
        </div><!--end row-->
    </div><!--end container-->
</section>

@endsection
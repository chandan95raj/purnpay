@extends('web.app')

@section('content')

<!-- Start Hero -->
<section class="bg-half-170 pb-0 bg-light d-table w-100 overflow-hidden padding_head_below"
    style="background: url('images/shapes/shape2.png') top; z-index: 0;">
    <div class="container">
        <div class="row align-items-center mt-5 mt-sm-0">
            <div class="col-md-6">
                <div class="title-heading text-center text-md-start">

                    <h4 class="heading mb-3 mt-2">Purn Pay-Turant Pay! <span class="">Mere Desh Ka Deshi
                            Manch!</span></h4>
                    <p class="text-muted mb-0 para-dark para-desc mx-auto ms-md-auto">Become a part of the fastest
                        growing network of Independent Business Owners and become financially independent.</p>

                    <div class="mt-4">
                        <a href="https://app.purnpay.com/auth/register/view" target="_blank" class="btn btn-primary"
                            style="margin:10px 0px;">Free Agent Sign Up</a>
                        <a href="#lead_form" class="btn btn-primary" style="margin:10px 0px;">Distributor
                            Account</a>

                    </div>
                </div>
            </div><!--end col-->

            <div class="col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                <div class="freelance-hero position-relative">
                    <div class="bg-shape position-relative">
                        <img src="{{ asset('web/images/concept-credit-card-payment-landing-page_52683-24923-removebg-preview.png') }}"
                            class="mx-auto d-block img-fluid" alt="Purn Pay Agent">
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Hero -->

<!-- Partners start
        <section class="py-4 border-bottom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                        <img src="{{ asset('web/images/client/amazon.svg') }}" class="avatar avatar-ex-sm" alt="">
                    </div>

                    <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                        <img src="{{ asset('web/images/client/google.svg') }}" class="avatar avatar-ex-sm" alt="">
                    </div>
                    
                    <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                        <img src="{{ asset('web/images/client/lenovo.svg') }}" class="avatar avatar-ex-sm" alt="">
                    </div>
                    
                    <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                        <img src="{{ asset('web/images/client/paypal.svg') }}" class="avatar avatar-ex-sm" alt="">
                    </div>
                    
                    <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                        <img src="{{ asset('web/images/client/shopify.svg') }}" class="avatar avatar-ex-sm" alt="">
                    </div>
                    
                    <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                        <img src="{{ asset('web/images/client/spotify.svg') }}" class="avatar avatar-ex-sm" alt="">
                    </div>
                </div>
            </div>
        </section> section-->
<!-- Partners End -->

<!-- Start -->
<!--
        <section class="section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-12 order-1 order-lg-2">
                        <div class="section-title text-center text-lg-start mb-4 mb-lg-0 pb-2 pb-lg-0">
                            <span class="badge rounded-pill bg-soft-primary">Services</span>
                            <h4 class="title mt-3 mb-4">Make more, Manage less</h4>
                            <p class="text-muted para-desc mx-auto ms-lg-auto mb-0">Start working with <span class="text-primary fw-bold">Purn Pay</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                            <div class="mt-4 d-lg-block d-none">
                                <a href="javascript:void(0)" class="btn btn-primary">See more</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 col-12 order-2 order-lg-1">
                        <div class="row me-lg-5">
                            <div class="col-md-6 col-12">
                                <div class="row">
                                    <div class="col-12 mt-4 mt-lg-0 pt-2 pt-lg-0">
                                        <div class="card border-0 text-center features feature-clean course-feature p-4 overflow-hidden shadow">
                                            <div class="icons text-primary text-center mx-auto">
                                                <i class="uil uil-rocket d-block rounded-pill h3 mb-0"></i>
                                            </div>
                                            <div class="card-body p-0 mt-4">
                                                <a href="javascript:void(0)" class="title h5 text-dark">Targeted <br> High-quality Leads</a>
                                                <p class="text-muted mt-2 mb-0">It is a long established fact that a reader at its layout.</p>
                                                <i class="uil uil-rocket text-primary full-img"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 mt-4 pt-2">
                                        <div class="card border-0 text-center features feature-clean course-feature p-4 overflow-hidden shadow">
                                            <div class="icons text-primary text-center mx-auto">
                                                <i class="uil uil-airplay d-block rounded-pill h3 mb-0"></i>
                                            </div>
                                            <div class="card-body p-0 mt-4">
                                                <a href="javascript:void(0)" class="title h5 text-dark">Send, Schedule, and Snooze Emails</a>
                                                <p class="text-muted mt-2 mb-0">It is a long established fact that a reader at its layout.</p>
                                                <i class="uil uil-airplay text-primary full-img"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="row pt-lg-4 mt-lg-4">
                                    <div class="col-12 mt-4 pt-2">
                                        <div class="card border-0 text-center features feature-clean course-feature p-4 overflow-hidden shadow">
                                            <div class="icons text-primary text-center mx-auto">
                                                <i class="uil uil-envelope d-block rounded-pill h3 mb-0"></i>
                                            </div>
                                            <div class="card-body p-0 mt-4">
                                                <a href="javascript:void(0)" class="title h5 text-dark">Library of the Best Email Templates</a>
                                                <p class="text-muted mt-2 mb-0">It is a long established fact that a reader at its layout.</p>
                                                <i class="uil uil-envelope text-primary full-img"></i>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-12 mt-4 pt-2">
                                        <div class="card border-0 text-center features feature-clean course-feature p-4 overflow-hidden shadow">
                                            <div class="icons text-primary text-center mx-auto">
                                                <i class="uil uil-bell d-block rounded-pill h3 mb-0"></i>
                                            </div>
                                            <div class="card-body p-0 mt-4">
                                                <a href="javascript:void(0)" class="title h5 text-dark">Automated Follow-up Reminders</a>
                                                <p class="text-muted mt-2 mb-0">It is a long established fact that a reader at its layout.</p>
                                                <i class="uil uil-bell text-primary full-img"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 d-lg-none d-block text-center">
                            <a href="javascript:void(0)" class="btn btn-primary">See more</a>
                        </div>
                    </div>
                </div>
            </div> end container-->

<div
    style="background: linear-gradient(
        -45deg, rgba(21,64,214,1), rgba(42,188,238,1),rgba(21,64,214,1),rgba(42,188,238,1) ); padding:50px; animation: gradient 15s ease infinite; @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }">
    <center>
        <h3 style="color:#fff;">Become a Retailer and Earn upto Rs.1 Lakh per month.</h3>
        <div class="">
            <a href="https://app.purnpay.com/auth/register/view" data-bs-toggle="modal" data-bs-target="#myModal1">
                <div class="btn btn-primary">Sign Up</div>
            </a>
        </div>
    </center>
</div>
<div class="container mt-100 mt-60">
    <div class="row justify-content-center">
        <div class="col-12 text-center">
            <div class="section-title mb-4 pb-2">
                <h4 class="title mb-4"><span class="text-primary">One Wallet – </span>Multiple Services</h4>
            </div>
        </div><!--end col-->
    </div><!--end row-->
    <div class="row">
        <div class="col-md-4 mt-4 pt-2">
            <ul class="nav nav-pills nav-justified flex-column bg-white rounded shadow p-3 mb-0 sticky-bar"
                id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link rounded active" id="proposal" data-bs-toggle="pill" href="#developing"
                        role="tab" aria-controls="developing" aria-selected="false">
                        <div class="text-start d-flex align-items-center justify-content-between py-1 px-2">
                            <h6 class="mb-0"><i class="uil uil-postcard me-2 h5"></i>Aadhaar Banking</h6>
                            <i class="uil uil-angle-right-b"></i>
                        </div>
                    </a><!--end nav link-->
                </li><!--end nav item-->

                <li class="nav-item mt-2">
                    <a class="nav-link rounded" id="contract" data-bs-toggle="pill" href="#data-analise"
                        role="tab" aria-controls="data-analise" aria-selected="false">
                        <div class="text-start d-flex align-items-center justify-content-between py-1 px-2">
                            <h6 class="mb-0"><i class="uil uil-notes me-2 h5"></i>Mini ATM</h6>
                            <i class="uil uil-angle-right-b"></i>
                        </div>
                    </a><!--end nav link-->
                </li><!--end nav item-->

                <li class="nav-item mt-2">
                    <a class="nav-link rounded" id="crm" data-bs-toggle="pill" href="#security"
                        role="tab" aria-controls="security" aria-selected="false">
                        <div class="text-start d-flex align-items-center justify-content-between py-1 px-2">
                            <h6 class="mb-0"><i class="uil uil-folder-check me-2 h5"></i>Money Transfer</h6>
                            <i class="uil uil-angle-right-b"></i>
                        </div>
                    </a><!--end nav link-->
                </li><!--end nav item-->

                <li class="nav-item mt-2">
                    <a class="nav-link rounded" id="timetracking" data-bs-toggle="pill" href="#time-track"
                        role="tab" aria-controls="time-track" aria-selected="false">
                        <div class="text-start d-flex align-items-center justify-content-between py-1 px-2">
                            <h6 class="mb-0"><i class="uil uil-clock me-2 h5"></i>Payment Solutions</h6>
                            <i class="uil uil-angle-right-b"></i>
                        </div>
                    </a><!--end nav link-->
                </li><!--end nav item-->

                <li class="nav-item mt-2">
                    <a class="nav-link rounded" id="invoice" data-bs-toggle="pill" href="#invoices"
                        role="tab" aria-controls="invoices" aria-selected="false">
                        <div class="text-start d-flex align-items-center justify-content-between py-1 px-2">
                            <h6 class="mb-0"><i class="uil uil-invoice me-2 h5"></i>Utility Services</h6>
                            <i class="uil uil-angle-right-b"></i>
                        </div>
                    </a><!--end nav link-->
                </li><!--end nav item-->

                <li class="nav-item mt-2">
                    <a class="nav-link rounded" id="tasktracking" data-bs-toggle="pill" href="#task-track"
                        role="tab" aria-controls="task-track" aria-selected="false">
                        <div class="text-start d-flex align-items-center justify-content-between py-1 px-2">
                            <h6 class="mb-0"><i class="uil uil-exchange-alt me-2 h5"></i>Savings Insurance Khata
                            </h6>
                            <i class="uil uil-angle-right-b"></i>
                        </div>
                    </a>
                </li>

                <li class="nav-item mt-2">
                    <a class="nav-link rounded" id="prepaid" data-bs-toggle="pill" href="#pre-paid"
                        role="tab" aria-controls="pre-paid" aria-selected="false">
                        <div class="text-start d-flex align-items-center justify-content-between py-1 px-2">
                            <h6 class="mb-0"><i class="uil-card-atm me-2 h5"></i>Pre-Paid Card</h6>
                            <i class="uil uil-angle-right-b"></i>
                        </div>
                    </a><!--end nav link-->
                </li><!--end nav item-->

            </ul><!--end nav pills-->
        </div><!--end col-->

        <div class="col-md-8 col-12 mt-4 pt-2">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade bg-white show active p-4 rounded shadow" id="developing" role="tabpanel"
                    aria-labelledby="proposal">
                    <h4 class="mb-4">Aadhaar Enabled Payment Services (AEPS)</h4>
                    <p class="text-muted mb-0">Any Purn Pay AEPS agent can convert their store into Aadhaar ATM.
                        Customers can safely withdraw cash, get mini statement, balance inquiry and even payment can
                        be done using their Aadhaar card and thumb authentication only! Purn Pay AEPS agent earns a
                        high commission per transaction.</p>

                    <div class="mt-4">
                        <a href="{{ url('/aadhar-enabled-payment-system') }}" class="text-primary h6">Know More<i
                                class="uil uil-angle-right-b align-middle"></i></a>
                    </div>

                    <div class="mt-4">
                        <img src="{{ asset('web/images/Aadhaar-Enabled-Payment-Services-(AEPS).png') }}"
                            class="img-fluid" alt="Aadhaar Enabled Payment Services – AEPS">
                    </div>
                </div><!--end teb pane-->

                <div class="tab-pane fade bg-white p-4 rounded shadow" id="data-analise" role="tabpanel"
                    aria-labelledby="contract">
                    <h4 class="mb-4">Convert your Store into ATM</h4>
                    <p class="text-muted mb-0">Purn Pay Mini ATM machine is a solution for merchants who want to
                        receive card payment anywhere, anytime, and who want to extend additional services to their
                        customers. Convert your store into an ATM using the Micro ATM machine and provide cash
                        withdrawal service at your outlet.</p>

                    <div class="mt-4">
                        <a href="{{ url('/micro-atm') }}" class="text-primary h6">Know More<i
                                class="uil uil-angle-right-b align-middle"></i></a>
                    </div>

                    <div class="mt-4">
                        <img src="{{ asset('web/images/Mini-ATM-Machine.png') }}" class="img-fluid"
                            alt="Buy Mini Atm Machine - Purn Pay">
                    </div>
                </div><!--end teb pane-->

                <div class="tab-pane fade bg-white p-4 rounded shadow" id="security" role="tabpanel"
                    aria-labelledby="crm">
                    <h4 class="mb-4">Domestic Money Transfer (DMT)</h4>
                    <p class="text-muted mb-0">With Purn Pay you have the opportunity to start money transfer
                        business and transfer cash from your outlet to any Bank Account across the country with
                        least charges in the industry, leading to a high income opportunity for all our money
                        transfer agents. On every transaction, the retailer can earn a handsome income.</p>

                    <div class="mt-4">
                        <a href="{{ url('/money-transfer') }}" class="text-primary h6">Know More<i
                                class="uil uil-angle-right-b align-middle"></i></a>
                    </div>

                    <div class="mt-4">
                        <img src="{{ asset('web/images/Money-Transfer.png') }}" class="img-fluid"
                            alt="Money Transfer Agent – Purn Pay">
                    </div>
                </div><!--end teb pane-->

                <div class="tab-pane fade bg-white p-4 rounded shadow" id="time-track" role="tabpanel"
                    aria-labelledby="timetracking">
                    <h4 class="mb-4">UPI, QR Code, MPOS, Aadhar Pay</h4>
                    <p class="text-muted mb-0">Purn Pay partners can offer multiple Payment options for the
                        convenience of their customers- a unique UPI & QR Code where customer can pay by scanning,
                        MPOS for Debit/Credit Card Swipe, Payment Link for online payment and Aadhaar Pay where
                        customers can pay using their Aadhaar card and many more.</p>

                    <div class="mt-4">
                        <a href="{{ url('/payment-solutions') }}" class="text-primary h6">Know More<i
                                class="uil uil-angle-right-b align-middle"></i></a>
                    </div>

                    <div class="mt-4">
                        <img src="{{ asset('web/images/Payment-Solutions.png') }}" class="img-fluid"
                            alt="Payment Solution – Purn Pay">
                    </div>
                </div><!--end teb pane-->

                <div class="tab-pane fade bg-white p-4 rounded shadow" id="invoices" role="tabpanel"
                    aria-labelledby="invoice">
                    <h4 class="mb-4">Recharge, Bill Payments, PAN Card</h4>
                    <p class="text-muted mb-0">Customer Mobile and DTH Recharge, Electricity, Gas and 30+ such bill
                        payments, PAN Card Creation services are offered in Purn Pay panel to help the partner
                        attract more customers and increase their service portfolio while earning money on each
                        transaction.</p>

                    <div class="mt-4">
                        <a href="{{ url('/multi-recharge-distributorship') }}" class="text-primary h6">Know More<i
                                class="uil uil-angle-right-b align-middle"></i></a>
                    </div>

                    <div class="mt-4">
                        <img src="{{ asset('web/images/Utility-Services.png') }}" class="img-fluid"
                            alt="Utility service – Purn Pay">
                    </div>
                </div><!--end teb pane-->

                <div class="tab-pane fade bg-white p-4 rounded shadow" id="task-track" role="tabpanel"
                    aria-labelledby="tasktracking">
                    <h4 class="mb-4">Risk Free Guaranteed Returns</h4>
                    <p class="text-muted mb-0">Ensuring Risk free guaranteed returns, Purn Pay introduces an
                        Insurance Saving plan with 25 times cover. Get more returns than any savings account on the
                        amount invested. Purn Pay partners will add to their income and help customers fulfil their
                        dreams with the savings plan.</p>

                    <div class="mt-4">
                        <a href="{{ url('/super-insurance-khata') }}" class="text-primary h6">Know More<i
                                class="uil uil-angle-right-b align-middle"></i></a>
                    </div>

                    <div class="mt-4">
                        <img src="{{ asset('web/images/Savings-Insurance-Khata.png') }}" class="img-fluid"
                            alt="Savings insurance khata – Purn Pay">
                    </div>
                </div><!--end teb pane-->

                <div class="tab-pane fade bg-white p-4 rounded shadow" id="pre-paid" role="tabpanel"
                    aria-labelledby="prepaid">
                    <h4 class="mb-4">Debit Card without Account</h4>
                    <p class="text-muted mb-0">Using the Purn Pay Prepaid card, Purn Pay partners can provide debit
                        cards to customers who do not own a bank account. Customers can use these cards to pay for
                        purchases like any normal debit card.</p>

                    <div class="mt-4">
                        <a href="{{ url('/pre-paid-cards') }}" class="text-primary h6">Know More<i
                                class="uil uil-angle-right-b align-middle"></i></a>
                    </div>

                    <div class="mt-4">
                        <img src="{{ asset('web/images/Pre-Paid-Cards.png') }}" class="img-fluid"
                            alt="Pre paid cards – Purn Pay">
                    </div>
                </div><!--end teb pane-->

            </div><!--end tab content-->
        </div><!--end col-->
    </div><!--end row-->
</div><!--end container-->
</section><!--end section-->
<!-- End -->
<section class="padding_50 bg-light">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4">Why Purn Pay?</h4>
                    <p class="text-muted para-desc mb-0 mx-auto"><span class="fw-bold text-primary">Purn
                            Pay</span> offers many advantages which makes it one of the best option for anyone who
                        is looking to start a business</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center align-items-center">
            <div class="col-lg-8 col-md-8">
                <div class="row mt-4 pt-2">
                    <div class="col-md-6 col-12">
                        <div class="d-flex features pt-4 pb-4">
                            <div class="icon text-center rounded-circle text-primary me-3 mt-2">
                                <i data-feather="monitor" class="fea icon-ex-md text-primary"></i>
                            </div>
                            <div class="flex-1">
                                <h4 class="title">One Wallet </h4>
                                <p class="text-muted para mb-0">One wallet for all your services, no need to
                                    maintain funds in separate wallets, the same wallet acts as your settlement a/c
                                    as well</p>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-md-6 col-12">
                        <div class="d-flex features pt-4 pb-4">
                            <div class="icon text-center rounded-circle text-primary me-3 mt-2">
                                <i data-feather="feather" class="fea icon-ex-md text-primary"></i>
                            </div>
                            <div class="flex-1">
                                <h4 class="title">Multiple Services </h4>
                                <p class="text-muted para mb-0">Opportunity to increase your revenue multiple times
                                    as the portal is equipped with multiple services across different domains</p>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-md-6 col-12">
                        <div class="d-flex features pt-4 pb-4">
                            <div class="icon text-center rounded-circle text-primary me-3 mt-2">
                                <i data-feather="eye" class="fea icon-ex-md text-primary"></i>
                            </div>
                            <div class="flex-1">
                                <h4 class="title">Working Capital </h4>
                                <p class="text-muted para mb-0">Our unique business model is plug and play
                                    experience where you can start your own business at minimal or Zero working
                                    capital</p>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-md-6 col-12">
                        <div class="d-flex features pt-4 pb-4">
                            <div class="icon text-center rounded-circle text-primary me-3 mt-2">
                                <i data-feather="user-check" class="fea icon-ex-md text-primary"></i>
                            </div>
                            <div class="flex-1">
                                <h4 class="title">Artificial Intelligence </h4>
                                <p class="text-muted para mb-0">We have leveraged artificial intelligent so that
                                    the users get to enjoy lowest failures and fastest transactions in the industry
                                </p>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-md-6 col-12">
                        <div class="d-flex features pt-4 pb-4">
                            <div class="icon text-center rounded-circle text-primary me-3 mt-2">
                                <i data-feather="smartphone" class="fea icon-ex-md text-primary"></i>
                            </div>
                            <div class="flex-1">
                                <h4 class="title">Technology</h4>
                                <p class="text-muted para mb-0">We pride our self in using the latest technology so
                                    that you always enjoy seamless, fast & secured transactions & increase your
                                    revenue</p>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-md-6 col-12">
                        <div class="d-flex features pt-4 pb-4">
                            <div class="icon text-center rounded-circle text-primary me-3 mt-2">
                                <i data-feather="heart" class="fea icon-ex-md text-primary"></i>
                            </div>
                            <div class="flex-1">
                                <h4 class="title">Dedicated Team </h4>
                                <p class="text-muted para mb-0">We are proud of our support team & relationship
                                    managers who will walk hand in hand with you throughout the journey & ensure
                                    maximum income</p>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end col-->

            <div class="col-lg-4 col-md-4 col-12 mt-4 pt-2 text-center text-md-end">
                <img src="{{ asset('web/images/Why-PurnPay.png') }}" class="img-fluid " alt="Purn Pay Services">
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- Feature End -->
<div class="container mt-100 mt-60">
    <div class="row justify-content-center">
        <div class="col-12 text-center">
            <div class="section-title mb-4 pb-2">
                <h4 class="title mb-4"><span class="text-primary">Purn Pay</span> Business Opportunities</h4>
                <p class="text-muted para-desc mb-0 mx-auto">Our unique platform has exciting <span
                        class="text-primary fw-bold">business opportunity</span> for everyone, be it retailer,
                    distributor, API or Whitelable partner!</p>
            </div>
        </div><!--end col-->
    </div><!--end row-->

    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-12 mt-4 pt-2 text-center">
            <ul class="nav nav-pills nav-justified flex-column flex-sm-row rounded" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link rounded active" id="pills-cloud-tab" data-bs-toggle="pill"
                        href="#pills-cloud" role="tab" aria-controls="pills-cloud" aria-selected="false">
                        <div class="text-center py-2">
                            <h6 class="mb-0">Retailer</h6>
                        </div>
                    </a><!--end nav link-->
                </li><!--end nav item-->

                <li class="nav-item">
                    <a class="nav-link rounded" id="pills-smart-tab" data-bs-toggle="pill" href="#pills-smart"
                        role="tab" aria-controls="pills-smart" aria-selected="false">
                        <div class="text-center py-2">
                            <h6 class="mb-0">Distributor</h6>
                        </div>
                    </a><!--end nav link-->
                </li><!--end nav item-->

                <li class="nav-item">
                    <a class="nav-link rounded" id="pills-apps-tab" data-bs-toggle="pill" href="#pills-apps"
                        role="tab" aria-controls="pills-apps" aria-selected="false">
                        <div class="text-center py-2">
                            <h6 class="mb-0">API & Whitelable Partner</h6>
                        </div>
                    </a><!--end nav link-->
                </li><!--end nav item-->
            </ul><!--end nav pills-->
        </div>
    </div>

    <div class="row">
        <div class="col-12 mt-4 pt-2">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-cloud" role="tabpanel"
                    aria-labelledby="pills-cloud-tab">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <img src="{{ asset('web/images/Retailer_.png') }}" class="img-fluid mx-auto d-block"
                                alt="Purn Pay  Retailers">
                        </div><!--end col-->

                        <div class="col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                            <div class="section-title">
                                <h4 class="title mb-4"><i class="uil uil-angle-double-right text-primary"></i>Join
                                    Purn Pay as a Retailer</h4>
                                <p class="text-muted">More than 1 lac retailers across India have joined Purn Pay
                                    and offer financial and digital commerce services to their customers and earn
                                    commission. The most unique feature of this platform is single wallet - multiple
                                    services with unlimited income opportunity.</p>
                                <ul class="list-unstyled text-muted">
                                    <li class="mb-0"><span class="text-primary h5 me-2"><i
                                                class="uil uil-check-circle align-middle"></i></span>Become
                                        Aatmanirbhar & Earn Up-To 50000 every month</li>
                                    <li class="mb-0"><span class="text-primary h5 me-2"><i
                                                class="uil uil-check-circle align-middle"></i></span>Completely
                                        Free Zero Charge Activation of All the Services</li>
                                    <li class="mb-0"><span class="text-primary h5 me-2"><i
                                                class="uil uil-check-circle align-middle"></i></span>Earn Real Time
                                        Commission on Every Transaction</li>
                                    <li class="mb-0"><span class="text-primary h5 me-2"><i
                                                class="uil uil-check-circle align-middle"></i></span>One Android
                                        Application with All the Services</li>
                                    <li class="mb-0"><span class="text-primary h5 me-2"><i
                                                class="uil uil-check-circle align-middle"></i></span>Most Advanced
                                        & Secured Platform for Transactions</li>
                                    <li class="mb-0"><span class="text-primary h5 me-2"><i
                                                class="uil uil-check-circle align-middle"></i></span>Complete
                                        Reports & Dedicated Support Team</li>
                                </ul>
                                <a href="https://app.purnpay.com/auth/register/view" target="_blank"
                                    class="mt-3 h6 btn-primary btn">Create Free Purn Pay Account Today<i
                                        class="uil uil-angle-right-b"></i></a>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end teb pane-->

                <div class="tab-pane fade" id="pills-smart" role="tabpanel" aria-labelledby="pills-smart-tab">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <img src="{{ asset('web/images/Man-With-MATM-Device.png') }}"
                                class="img-fluid mx-auto d-block" alt="Purn Pay  Distributors">
                        </div><!--end col-->

                        <div class="col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                            <div class="section-title">
                                <h4 class="title mb-4"><i
                                        class="uil uil-angle-double-right text-primary"></i>Distributor </h4>
                                <p class="text-muted">This is the perfect platform for anyone who has a retail
                                    network or who is looking forward to building one. Distributors can have
                                    unlimited retailers under them and get commission on every transaction being
                                    done by the network. </p>
                                <ul class="list-unstyled text-muted">
                                    <li class="mb-0"><span class="text-primary h5 me-2"><i
                                                class="uil uil-check-circle align-middle"></i></span>No Limitation
                                        on Number of Retailers</li>
                                    <li class="mb-0"><span class="text-primary h5 me-2"><i
                                                class="uil uil-check-circle align-middle"></i></span>Different
                                        Categories of Retailers with Different Deals</li>
                                    <li class="mb-0"><span class="text-primary h5 me-2"><i
                                                class="uil uil-check-circle align-middle"></i></span>Real Time
                                        Commission on Every Transaction</li>
                                    <li class="mb-0"><span class="text-primary h5 me-2"><i
                                                class="uil uil-check-circle align-middle"></i></span>Unique
                                        Backoffice with Detailed Reports & Multiple Functionalities</li>
                                    <li class="mb-0"><span class="text-primary h5 me-2"><i
                                                class="uil uil-check-circle align-middle"></i></span>Marketing
                                        Material to Help in Business Growth</li>
                                </ul>
                                <a href="#lead_form" class="mt-3 h6 btn-primary btn">Become Purn Pay Distributor<i
                                        class="uil uil-angle-right-b"></i></a>
                            </div>
                        </div> <!--end col-->
                    </div> <!--end row-->
                </div><!--end teb pane-->

                <div class="tab-pane fade" id="pills-apps" role="tabpanel" aria-labelledby="pills-apps-tab">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <img src="{{ asset('web/images/API-Whitelable-Partner.png') }}"
                                class="img-fluid mx-auto d-block" alt="Purn Pay  – Api White Lable Partners"
                                width="275">
                        </div><!--end col-->

                        <div class="col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                            <div class="section-title">
                                <h4 class="title mb-4"><i class="uil uil-angle-double-right text-primary"></i>API
                                    & Whitelable Partner </h4>
                                <p class="text-muted">It is a unique opportunity to create your own brand in the
                                    market. Purn Pay provides numerous REST APIs of different services to enable
                                    various business transactions; or plug & play Whitelable model wherein you can
                                    start the entire business under your brand name in minimal time.</p>
                                <ul class="list-unstyled text-muted">
                                    <li class="mb-0"><span class="text-primary h5 me-2"><i
                                                class="uil uil-check-circle align-middle"></i></span>Unlimited
                                        Distributors & Retailers under the network</li>
                                    <li class="mb-0"><span class="text-primary h5 me-2"><i
                                                class="uil uil-check-circle align-middle"></i></span>Comprehensive
                                        Backoffice to Manage Business Operations</li>
                                    <li class="mb-0"><span class="text-primary h5 me-2"><i
                                                class="uil uil-check-circle align-middle"></i></span>Real Time
                                        Commission on Every Transaction</li>
                                    <li class="mb-0"><span class="text-primary h5 me-2"><i
                                                class="uil uil-check-circle align-middle"></i></span>Set Different
                                        Deals for Different Categories of Partners</li>
                                    <li class="mb-0"><span class="text-primary h5 me-2"><i
                                                class="uil uil-check-circle align-middle"></i></span>Corporate Kit
                                        to Enhance Your Brand Visibility in Market</li>
                                </ul>
                                <a href="#lead_form" class="mt-3 h6 btn-primary btn">Become Whitelable/API
                                    Partner<i class="uil uil-angle-right-b"></i></a>
                            </div>
                        </div> <!--end col-->
                    </div> <!--end row-->
                </div><!--end teb pane-->
            </div><!--end tab content-->
        </div><!--end col-->
    </div><!--end row-->
</div><!--end container-->
</section><!--end section-->

<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4">The growth journey –<span class="text-primary fw-bold"> Purn Pay</span>
                    </h4>
                    <p class="text-muted para-desc mx-auto mb-0">Over the years <span
                            class="text-primary fw-bold">Purn Pay</span> has spread its presence across the country
                        and process 1 lac+ transactions daily.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row" id="counter">
            <div class="col-md-3 col-6 mt-4 pt-2">
                <div class="counter-box text-center">
                    <img src="{{ asset('web/images/illustrator/Asset190.svg') }}" class="avatar avatar-small"
                        alt="500+ Districts – Purn Pay">
                    <h2 class="mb-0 mt-4"><span class="counter-value" data-target="200">200</span>+</h2>
                    <h6 class="counter-head text-muted">Districts Covered</h6>
                </div><!--end counter box-->
            </div>

            <div class="col-md-3 col-6 mt-4 pt-2">
                <div class="counter-box text-center">
                    <img src="{{ asset('web/images/illustrator/Asset189.svg') }}" class="avatar avatar-small"
                        alt="1 Lakh Retail Touch Points – Purn Pay">
                    <h2 class="mb-0 mt-4"><span class="counter-value" data-target="9000">9000</span>+</h2>
                    <h6 class="counter-head text-muted">Customer Service Points</h6>
                </div><!--end counter box-->
            </div>

            <div class="col-md-3 col-6 mt-4 pt-2">
                <div class="counter-box text-center">
                    <img src="{{ asset('web/images/illustrator/Asset192.svg') }}" class="avatar avatar-small"
                        alt="Daily Customer Transaction Volume – Purn Pay">
                    <h2 class="mb-0 mt-4"><span class="counter-value" data-target="1">1</span>Cr+</h2>
                    <h6 class="counter-head text-muted">Daily Transaction Volume</h6>
                </div><!--end counter box-->
            </div>

            <div class="col-md-3 col-6 mt-4 pt-2">
                <div class="counter-box text-center">
                    <img src="{{ asset('web/images/illustrator/Asset187.svg') }}" class="avatar avatar-small"
                        alt="Monthly Unique Customers – Purn Pay">
                    <h2 class="mb-0 mt-4"><span class="counter-value" data-target="1">1</span>Lacs+</h2>
                    <h6 class="counter-head text-muted">Monthly Unique Customers</h6>
                </div><!--end counter box-->
            </div>
        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4">What Our Clients Said About <span class="text-primary">Purn Pay</span>
                    </h4>
                    <!--
                            <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary fw-bold">Purn Pay</span> that can provide everything you need to generate awareness, drive traffic, connect.</p> -->
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row justify-content-center">
            <div class="col-lg-12 mt-4">
                <div class="tiny-two-item">
                    <!--<div class="tiny-slide">-->
                    <!--    <div class="d-flex client-testi m-1">-->
                    <!--        <img src="{{ asset('web/images/test/test-1.jpg') }}" class="avatar avatar-small client-image rounded shadow" alt="">-->
                    <!--        <div class="flex-1 content p-3 shadow rounded bg-white position-relative">-->
                    <!--            <ul class="list-unstyled mb-0">-->
                    <!--                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>-->
                    <!--                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>-->
                    <!--                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>-->
                    <!--                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>-->
                    <!--                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>-->
                    <!--            </ul>-->
                    <!--            <p class="text-muted mt-2">" Purn Pay has allowed me to be able to make some income gains during my leisure time. it is a perfect platform for all those who are looking at having a side income or a full-time business. Now having a good exposure working with Purn Pay  I have the flexibility to work from anywhere, all I need is a laptop or mobile with the internet. Thank you Purn Pay  for this wonderful opportunity. "</p>-->
                    <!--            <h6 class="text-primary">- Suresh <small class="text-muted">Working Professional</small></h6>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->

                    <!--<div class="tiny-slide">-->
                    <!--    <div class="d-flex client-testi m-1">-->
                    <!--        <img src="{{ asset('web/images/test/test-3.jpg') }}" class="avatar avatar-small client-image rounded shadow" alt="">-->
                    <!--        <div class="flex-1 content p-3 shadow rounded bg-white position-relative">-->
                    <!--            <ul class="list-unstyled mb-0">-->
                    <!--                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>-->
                    <!--                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>-->
                    <!--                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>-->
                    <!--                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>-->
                    <!--                <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i></li>-->
                    <!--            </ul>-->
                    <!--            <p class="text-muted mt-2">" It has been quite a while since I have been retired, one of the greatest challenges that I faced was the minimalistic lifestyle I had to live to manage my finances and pay my bills, I was looking for a way to monetize from my free time. That’s when I got to know about Purn Pay  it seemed like the best option for me. The guidance and training provided by the team were well structured and has helped me understand the business better and start making money sooner than what I had assumed. Now even though I am retired I don’t have to be reliant on anyone. "</p>-->
                    <!--            <h6 class="text-primary">- Mr Bhupati <small class="text-muted">Retired Employee</small></h6>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->

                    <!--<div class="tiny-slide">-->
                    <!--    <div class="d-flex client-testi m-1">-->
                    <!--        <img src="{{ asset('web/images/test/test-5.jpg') }}" class="avatar avatar-small client-image rounded shadow" alt="">-->
                    <!--        <div class="flex-1 content p-3 shadow rounded bg-white position-relative">-->
                    <!--            <ul class="list-unstyled mb-0">-->
                    <!--                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>-->
                    <!--                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>-->
                    <!--                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>-->
                    <!--                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>-->
                    <!--                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>-->
                    <!--            </ul>-->
                    <!--            <p class="text-muted mt-2">" Housewives tends to face a lot of limitations especially when it comes to working out. After marriage, I wasn’t allowed to work. Although I didn’t want these limitations to stop me from moving ahead, Also, I thought I could help in supporting my family’s financial needs. After receiving advice from a well-wisher of mine I decided to opt for Purn Pay. It was the solution that well balanced my personal and professional life. Thank you Purn Pay!!! "</p>-->
                    <!--            <h6 class="text-primary">- Sangeeta <small class="text-muted">Housewife</small></h6>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->

                    <!--<div class="tiny-slide">-->
                    <!--    <div class="d-flex client-testi m-1">-->
                    <!--        <img src="{{ asset('web/images/test/test-2.jpg') }}" class="avatar avatar-small client-image rounded shadow" alt="">-->
                    <!--        <div class="flex-1 content p-3 shadow rounded bg-white position-relative">-->
                    <!--            <ul class="list-unstyled mb-0">-->
                    <!--                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>-->
                    <!--                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>-->
                    <!--                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>-->
                    <!--                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>-->
                    <!--                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>-->
                    <!--            </ul>-->
                    <!--            <p class="text-muted mt-2">" Being an ambitious guy I always brainstorm with myself to get better ways to make more money, and I knew I had to start working at an early age but I also knew I had time to earn from a side gig. I wanted an option that would not affect my education. During my research, I came across the Purn Pay  Platform which seemed promising to me and so I enrolled and got myself registered with them. Now I make enough to be able to finance my education. "</p>-->
                    <!--            <h6 class="text-primary">- Nikhil <small class="text-muted">College student</small></h6>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->

                    <!--<div class="tiny-slide">-->
                    <!--    <div class="d-flex client-testi m-1">-->
                    <!--        <img src="{{ asset('web/images/test/test-4.jpg') }}" class="avatar avatar-small client-image rounded shadow" alt="">-->
                    <!--        <div class="flex-1 content p-3 shadow rounded bg-white position-relative">-->
                    <!--            <ul class="list-unstyled mb-0">-->
                    <!--                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>-->
                    <!--                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>-->
                    <!--                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>-->
                    <!--                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>-->
                    <!--                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>-->
                    <!--            </ul>-->
                    <!--            <p class="text-muted mt-2">" Purn Pay  has given me the confidence to step up my game and start my own business all with minimal investment, I appreciate how they have streamlined their training process and how the whole team goes out of the way to support with any difficulties faced. The first thing that comes to a person’s mind before they start a business is where do I get my finances from? I don’t have expertise in anything, who will guide me in my venture? All these questions were answered well by Purn Pay.  "</p>-->
                    <!--            <h6 class="text-primary">- Rajesh <small class="text-muted">Business owner</small></h6>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <div class="tiny-slide">
                        <div class="d-flex client-testi m-1">
                            <img src="{{ asset('web/images/Roshan_Jha.jpg') }}"
                                class="avatar avatar-small client-image rounded shadow" alt="">
                            <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                </ul>
                                <p class="text-muted mt-2">" Balliya gao me koi money transfer service nahi thi
                                    agar jo thi who gao se lakhbhag 6-7 KM dur thi. Jaise sab digital ho raha tha
                                    toh mene Purn Pay ke bare me pata kiya aur mene turant hi free id leli. Meri
                                    choti si dukaan par abh me aeps, money transfer, account opening, train ticket
                                    ye sab services deta hu. Purn Pay ne mujhe har transaction par badhiya
                                    commission diya hai jiske wajah se me prati mahina 29000 tak extra kama leta hu.
                                    "</p>
                                <h6 class="text-primary">- Roshan Jha <small class="text-muted">Business
                                        owner</small></h6>
                            </div>
                        </div>
                    </div>
                    <div class="tiny-slide">
                        <div class="d-flex client-testi m-1">
                            <img src="{{ asset('web/images/Sanjiv_bajaria.jpg') }}"
                                class="avatar avatar-small client-image rounded shadow" alt="">
                            <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                </ul>
                                <p class="text-muted mt-2">" Mene 2010 me Internet world naam se cyber café shuru
                                    kiya tha lekin Internet aur computer asani se har jagah milne ke karan mera
                                    business lagbhag thap hone laga. Mere dost ne mujhe tabhi Digibanking ke bare me
                                    bataya tha toh mene thoda research shuru kiya. Purn Pay mujhe sabse behtar and
                                    jyada commission ki vajah se acha laga aur mene Purn Pay se apni café ko ek mini
                                    bank me convert kar diya. Mera kaam bhi firse chalne laga aur aamdani dugni.
                                    Purn Pay hai best hai! "</p>
                                <h6 class="text-primary">- Sanjiv Bajaria <small class="text-muted">Business
                                        owner</small></h6>
                            </div>
                        </div>
                    </div>
                    <div class="tiny-slide">
                        <div class="d-flex client-testi m-1">
                            <img src="{{ asset('web/images/Srikanth_Vemula.jpg') }}"
                                class="avatar avatar-small client-image rounded shadow" alt="">
                            <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                </ul>
                                <p class="text-muted mt-2">" I’ve been using Purn Pay since the 2020 COVID
                                    pandemic. It was very difficult to survive in that period and started this
                                    business from my retail store. I almost used every service of Purn Pay and now
                                    Purn Pay has become a part of my life. I and my customers are very happy with
                                    their services & support. So far the best thing that changed my life is Purn
                                    Pay. "</p>
                                <h6 class="text-primary">- Shrikanth Vemula <small class="text-muted">Business
                                        owner</small></h6>
                            </div>
                        </div>
                    </div>
                    <div class="tiny-slide">
                        <div class="d-flex client-testi m-1">
                            <img src="{{ asset('web/images/Radha_Krishnan_Pallav.jpg') }}"
                                class="avatar avatar-small client-image rounded shadow" alt="">
                            <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                </ul>
                                <p class="text-muted mt-2">" I started my journey in a small recharge shop but I
                                    could hardly get any margin. I found one person at my shop that was a
                                    salesperson at Purn Pay I asked him about it he gave me a great brief so I
                                    joined Purn Pay. Now I’m earning more through Purn Pay than I used to get
                                    before. "</p>
                                <h6 class="text-primary">- Radhakrishnan Pallav <small class="text-muted">Business
                                        owner</small></h6>
                            </div>
                        </div>
                    </div>
                    <div class="tiny-slide">
                        <div class="d-flex client-testi m-1">
                            <img src="{{ asset('web/images/Alam_Shkh.jpg') }}"
                                class="avatar avatar-small client-image rounded shadow" alt="">
                            <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                </ul>
                                <p class="text-muted mt-2">" Purn Pay helped me a lot with recharge, money transfer
                                    & ticket booking. Their commission is on time and their support is good. "</p>
                                <h6 class="text-primary">- Alam Sheikh <small class="text-muted">Business
                                        owner</small></h6>
                            </div>
                        </div>
                    </div>
                    <div class="tiny-slide">
                        <div class="d-flex client-testi m-1">
                            <img src="{{ asset('web/images/Balwinder_Singh.jpg') }}"
                                class="avatar avatar-small client-image rounded shadow" alt="">
                            <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                </ul>
                                <p class="text-muted mt-2">" When I started using Purn Pay it was difficult to
                                    believe it. But now just by doing account opening, Pan card services, AePs
                                    services, money transfer, bill payments I make upto 50000 Rupees every month.
                                    Also, I’m a Purn Pay distributor now and with my retailer network, I earn a lot.
                                    "</p>
                                <h6 class="text-primary">- Balwinder Singh <small class="text-muted">Business
                                        owner</small></h6>
                            </div>
                        </div>
                    </div>
                    <div class="tiny-slide">
                        <div class="d-flex client-testi m-1">
                            <img src="{{ asset('web/images/Atul%20Chakma.jpg') }}"
                                class="avatar avatar-small client-image rounded shadow" alt="">
                            <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                </ul>
                                <p class="text-muted mt-2">" Here in Nagaland, Pampo there was no such service that
                                    Purn Pay provides. After becoming a Purn Pay retailer partner I not only earn
                                    money but also earn respect. Thank you Purn Pay, you are the best! "</p>
                                <h6 class="text-primary">- Atul Chakma <small class="text-muted">Business
                                        owner</small></h6>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="tiny-slide">
                                <div class="d-flex client-testi m-1">
                                    <img src="{{ asset('web/images/client/06.jpg') }}" class="avatar avatar-small client-image rounded shadow" alt="">
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
                            </div> -->
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section>

<!-- Partners start -->
<section class="mt-0 mt-md-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4">Our Partners</h4>
                    <!--<p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary fw-bold">Purn Pay</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>-->
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div>
</section>

<section class="mt-0  bg-light">
    <div class="container">

        <div class="row justify-content-center partner_img">

            <!-- owl -->

            <div class="owl-carousel">

                <div> <img src="{{ asset('web/images/partner/Airtel-DTH-Logo.png') }}" class=""
                        alt="Airtel-DTH  - Purn Pay">
                </div>

                <div> <img src="{{ asset('web/images/partner/Bharat-Bill-Pay-Logo.png') }}" class=""
                        alt="Bharat-Bill - Purn Pay"> </div>

                <div> <img src="{{ asset('web/images/partner/BOB-Logo.png') }}" class=""
                        alt="Bank of Baroda - Purn Pay">
                </div>

                <!-- <div> <img src="{{ asset('web/images/partner/Cleartrip-Logo.png') }}" class="" alt=""> </div> -->

                <div> <img src="{{ asset('web/images/partner/Dish-TV-Logo.png') }}" class=""
                        alt="Dish TV - Purn Pay">
                </div>

                <!-- <div> <img src="{{ asset('web/images/partner/Fino-Logo.png') }}" class="" alt=""> </div> -->

                <div> <img src="{{ asset('web/images/partner/ICICI-Bank-Logo.png') }}" class=""
                        alt="ICICI Bank - Purn Pay"> </div>

                <div> <img src="{{ asset('web/images/partner/NPCI-Logo.png') }}" class=""
                        alt="NCPI - Purn Pay"> </div>


                <!-- <div> <img src="{{ asset('web/images/partner/Redbus-Logo.png') }}" class="" alt=""></div> -->

                <div> <img src="{{ asset('web/images/partner/SBI-Logo.png') }}" class=""
                        alt="SBI Bank Partner - Purn Pay">
                </div>

                <div> <img src="{{ asset('web/images/partner/Tata-Sky-Logo.png') }}" class=""
                        alt="Tata Sky Partner - Purn Pay"> </div>

                <div> <img src="{{ asset('web/images/partner/Yes-Bank.png') }}" class=""
                        alt="Partner Yes Bank - Purn Pay">
                </div>

                <div> <img src="{{ asset('web/images/partner/Videocon-Logo.png') }}" class=""
                        alt="Videocon Partner -Purn Pay"> </div>



                <div> <img src="{{ asset('web/images/partner/UTI.png') }}" class=""
                        alt="UTI Partner - Purn Pay"> </div>

                <div> <img src="{{ asset('web/images/partner/Baroda-Gujarat-Gramin-Bank.png') }}" class=""
                        alt="Baroda-Gujarat-Gramin-Bank Partner - Purn Pay"> </div>

                <div> <img src="{{ asset('web/images/partner/airtel-payments-banks.png') }}" class=""
                        alt="Airtel Partner - Purn Pay"> </div>

                <div> <img src="{{ asset('web/images/partner/Amazon-Easy.png') }}" class=""
                        alt="Amazon Easy Partner - Purn Pay"> </div>

                <div> <img src="{{ asset('web/images/partner/Jana.png') }}" class=""
                        alt="Jana Partner - Purn Pay"> </div>

                <div> <img src="{{ asset('web/images/partner/NSDL-Payments-Bank.png') }}" class=""
                        alt="NSDL-Payments-Bank - Purn Pay"> </div>




            </div>


            <!-- owl End -->








            <!--
                
                    <div class="col-lg-2 col-md-2 col-6 text-center mt-4 pt-2">
                        <img src="{{ asset('web/images/partner/Airtel-DTH-Logo.png') }}" class="" alt="">
                    </div>

                    <div class="col-lg-2 col-md-2 col-6 text-center mt-4 pt-2">
                        <img src="{{ asset('web/images/partner/Bharat-Bill-Pay-Logo.png') }}" class="" alt="">
                    </div>
                    
                    <div class="col-lg-2 col-md-2 col-6 text-center mt-4 pt-2">
                        <img src="{{ asset('web/images/partner/BOB-Logo.png') }}" class="" alt="">
                    </div>
                    
                    <div class="col-lg-2 col-md-2 col-6 text-center mt-4 pt-2">
                        <img src="{{ asset('web/images/partner/Cleartrip-Logo.png') }}" class="" alt="">
                    </div>
                    
                    <div class="col-lg-2 col-md-2 col-6 text-center mt-4 pt-2">
                        <img src="{{ asset('web/images/partner/Dish-TV-Logo.png') }}" class="" alt="">
                    </div>
                    
                

                    <div class="col-lg-2 col-md-2 col-6 text-center mt-4 pt-2">
                        <img src="{{ asset('web/images/partner/Fino-Logo.png') }}" class="" alt="">
                    </div>

                    <div class="col-lg-2 col-md-2 col-6 text-center mt-4 pt-2">
                        <img src="{{ asset('web/images/partner/ICICI-Bank-Logo.png') }}" class="" alt="">
                    </div>

                    <div class="col-lg-2 col-md-2 col-6 text-center mt-4 pt-2">
                        <img src="{{ asset('web/images/partner/NPCI-Logo.png') }}" class="" alt="">
                    </div>

                    <div class="col-lg-2 col-md-2 col-6 text-center mt-4 pt-2">
                        <img src="{{ asset('web/images/partner/Redbus-Logo.png') }}" class="" alt="">
                    </div>

                

                    <div class="col-lg-2 col-md-2 col-6 text-center mt-4 pt-2">
                        <img src="{{ asset('web/images/partner/SBI-Logo.png') }}" class="" alt="">
                    </div>

                   

                    <div class="col-lg-2 col-md-2 col-6 text-center mt-4 pt-2">
                        <img src="{{ asset('web/images/partner/Tata-Sky-Logo.png') }}" class="" alt="">
                    </div>


                    <div class="col-lg-2 col-md-2 col-6 text-center mt-4 pt-2">
                        <img src="{{ asset('web/images/partner/Yes-Bank.png') }}" class="" alt="">
                    </div>

                    
                    <div class="col-lg-2 col-md-2 col-6 text-center mt-4 pt-2">
                        <img src="{{ asset('web/images/partner/Videocon-Logo.png') }}" class="" alt="">
                    </div>
                    

                </div>-->
        </div><!--end container-->

</section><!--end section-->
<!-- Partners End -->
@endsection
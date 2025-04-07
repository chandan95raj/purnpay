@extends('web.app')

@section('content')
    <section class="pb-0 d-table w-100 overflow-hidden padding_head_below">
        <div class="container ">
            <div class="row align-items-center pt-5">
                <div class="col-lg-7 col-md-6">
                    <div class="title-heading">
                        <h1 class="heading mb-3">Build <span class="text-primary fw-bold">Network</span> & Multiply
                            Your Income Every Month!</h1>
                        <p class="para-desc text-muted">PurnPay brings to you, unlimited income opportunity through its
                            unique distributor platform. Enroll unlimited retailers under you and earn instant
                            commission on every transaction done by your network.</p>
                        <div class="mt-4 pt-2">
                            <a href="#lead_form" target="" class="btn btn-primary">Become Distributor</a>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-5 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="freelance-hero  position-relative">
                        <div class="bg-shape position-relative">
                            <img src="{{ asset('web/images/web-img/home/Distributor-Image-1.png') }}"
                                class="mx-auto d-block" alt="" width="660">
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div>
    </section>
    <br>
    <div
        style="    background: linear-gradient(
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
                <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#myModal1">
                    <div class="btn btn-primary">Sign Up</div>
                </a>
            </div>
        </center>
    </div>
    <div class="container ">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-7 order-1 order-md-2">
                <div class="title-heading mt-4 ms-lg-5">
                    <h1 class="heading mb-3">Become <span class="text-primary">PurnPay</span> Distributor and Earn
                        More</h1>
                    <p class="para-desc text-muted">It is a unique opportunity to leverage existing distributor network
                        or to build a new one and earn on every transaction being done by the network. Distributors can
                        appoint unlimited number of retailers under them and these retailers will provide numerous
                        banking services to their customers. </p>

                    <p class="para-desc text-muted">We at PurnPay intend to improve our distributors earning potential
                        by enabling them to grow their business and make the best out of their retail network with
                        different services. We keep on adding new and innovative services which distributors and roll
                        out in their network. </p>


                </div>
            </div><!--end col-->

            <div class="col-lg-5 col-md-5 order-2 order-md-1 mt-4 pt-2 mt-sm-0 pt-sm-0">
                <img src="{{ asset('web/images/illustrator/working_with_computer.svg') }}" class="img-fluid" alt="">
            </div>
        </div><!--end row-->
    </div>


    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4"><span class="text-primary fw-bold">PurnPay</span> Distributorship
                            Advantages</h4>

                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-md-4 col-12">
                    <div class="features mt-5">
                        <div class="image position-relative d-inline-block">
                            <i class="uil uil-edit-alt h1 text-primary ps-3"></i>
                        </div>

                        <div class="content mt-4">
                            <h5>Go live in 2 days</h5>
                            <p class="text-muted mb-0">Kickstart your distributor portal in 2 working days and start
                                enrolling retailers in no time. The fastest model to start your own distribution
                                network.</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 col-12 mt-5">
                    <div class="features">
                        <div class="image position-relative d-inline-block">
                            <i class="uil uil-vector-square h1 text-primary ps-3"></i>
                        </div>

                        <div class="content mt-4">
                            <h5>Manage Retailers</h5>
                            <p class="text-muted mb-0">The unique PurnPay backoffice makes managing retailers a plug
                                and play experience. You can check their performance, reports and lots of other details.
                            </p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 col-12 mt-5">
                    <div class="features">
                        <div class="image position-relative d-inline-block">
                            <i class="uil uil-file-search-alt h1 text-primary ps-3"></i>
                        </div>

                        <div class="content mt-4">
                            <h5>Different Deals & Offers</h5>
                            <p class="text-muted mb-0">Option to create different categories of retailers and assign
                                different deals for them based on their performance.</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 col-12 mt-5">
                    <div class="features">
                        <div class="image position-relative d-inline-block">
                            <i class="uil uil-airplay h1 text-primary ps-3"></i>
                        </div>

                        <div class="content mt-4">
                            <h5>Service & Product Price</h5>
                            <p class="text-muted mb-0">PurnPay Distributors can set their own pricing for different
                                services and products being offered under PurnPay platform.</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 col-12 mt-5">
                    <div class="features">
                        <div class="image position-relative d-inline-block">
                            <i class="uil uil-calendar-alt h1 text-primary ps-3"></i>
                        </div>

                        <div class="content mt-4">
                            <h5>Instant Commission</h5>
                            <p class="text-muted mb-0">Distributors get real time commission on all the transactions
                                done by the retailers in their network. Earn lifetime commission.</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 col-12 mt-5">
                    <div class="features">
                        <div class="image position-relative d-inline-block">
                            <i class="uil uil-clock h1 text-primary ps-3"></i>
                        </div>

                        <div class="content mt-4">
                            <h5>Business on the Go</h5>
                            <p class="text-muted mb-0">Operate from anywhere - your home or shop. No inventory, no
                                warehouse, no manpower required, just one android phone.</p>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section>

    <!-- option 2
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="title mb-4">PurnPay Distributorship Advantages</h4>
                            
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 col-12">
                        <div class="features mt-5">
                            <div class="image position-relative d-inline-block">
                                <i class="uil uil-edit-alt h1 text-primary"></i>
                            </div>

                            <div class="content mt-4">
                                <h5>Go live in 2 days</h5>
                                <p class="text-muted mb-0">Kickstart your distributor portal in 2 working days and start enrolling retailers in no time. The fastest model to start your own distribution network.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-12 mt-5">
                        
                    </div>
                    
                    <div class="col-md-4 col-12 mt-5">
                        <div class="features">
                            <div class="image position-relative d-inline-block">
                                <i class="uil uil-file-search-alt h1 text-primary"></i>
                            </div>

                            <div class="content mt-4">
                                <h5>Different Deals & Offers</h5>
                                <p class="text-muted mb-0">Option to create different categories of retailers and assign different deals for them based on their performance.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-12 mt-5">
                        <div class="features">
                            <div class="image position-relative d-inline-block">
                                <i class="uil uil-airplay h1 text-primary"></i>
                            </div>

                            <div class="content mt-4">
                                <h5>Service & Product Price</h5>
                                <p class="text-muted mb-0">PurnPay Distributors can set their own pricing for different services and products being offered under PurnPay platform.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-12 mt-5">
                        
                        <div><img src="{{ asset('web/images/Charater_.jpg') }}" alt="business" width="280"></div>

                    </div>
                    
                    <div class="col-md-4 col-12 mt-5">
                        <div class="features">
                            <div class="image position-relative d-inline-block">
                                <i class="uil uil-clock h1 text-primary"></i>
                            </div>

                            <div class="content mt-4">
                                <h5>Business on the Go</h5>
                                <p class="text-muted mb-0">Operate from anywhere - your home or shop. No inventory, no warehouse, no manpower required, just one android phone.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-12 mt-5">
                        <div class="features">
                            <div class="image position-relative d-inline-block">
                                <i class="uil uil-vector-square h1 text-primary"></i>
                            </div>

                            <div class="content mt-4">
                                <h5>Manage Retailers</h5>
                                <p class="text-muted mb-0">The unique PurnPay backoffice makes managing retailers a plug and play experience. You can check their performance, reports and lots of other details.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-12 mt-5">
                        
                    </div>

                    <div class="col-md-4 col-12 mt-5">
                        <div class="features">
                            <div class="image position-relative d-inline-block">
                                <i class="uil uil-calendar-alt h1 text-primary"></i>
                            </div>

                            <div class="content mt-4">
                                <h5>Instant Commission</h5>
                                <p class="text-muted mb-0">Distributors get real time commission on all the transactions done by the retailers in their network. Earn lifetime commission.</p>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </section> -->



    <div class="container  mt-60">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section-title">
                    <h4 class="title mb-4"> <span class="text-primary">PurnPay </span>Distributorship - One-time
                        investment & lifetime returns!</h4>
                    <p class="text-muted para-desc">This unique business opportunity offers different categories of
                        Distributors. You can choose the one which suits you and start your business in no time.</p>
                    <ul class="list-unstyled text-muted">
                        <li class="mb-0"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>Distributor – Appoint
                            unlimited retailers under you</li>
                        <li class="mb-0"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>Distributor – Appoint
                            unlimited retailers under you</li>
                        <li class="mb-0"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>Master Distributor – Unlimited
                            business potential with best deals</li>
                    </ul>
                </div>
            </div><!--end col-->

            <div class="col-lg-6">
                <div class="row ms-lg-5" id="counter">
                    <div class="col-md-6 col-12">
                        <div class="row">
                            <div class="col-12 mt-4 mt-lg-0 pt-2 pt-lg-0">
                                <div class="card counter-box border-0 bg-light bg-gradient shadow text-center rounded">
                                    <div class="card-body py-5">
                                        <h2 class="mb-0"><span class="counter-value" data-target="500">500</span>+
                                        </h2>
                                        <h5 class="counter-head mb-0">Distributors</h5>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-12 mt-4 pt-2">
                                <div class="card counter-box border-0 bg-primary bg-gradient shadow text-center rounded">
                                    <div class="card-body py-5">
                                        <h2 class="text-light title-dark mb-0"><span class="counter-value"
                                                data-target="9">9</span></h2>
                                        <h5 class="counter-head mb-0 title-dark text-light">States Covered</h5>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end Row-->
                    </div><!--end col-->

                    <div class="col-md-6 col-12">
                        <div class="row pt-lg-4 mt-lg-4">
                            <div class="col-12 mt-4 pt-2">
                                <div class="card counter-box border-0 bg-success bg-gradient shadow text-center rounded">
                                    <div class="card-body py-5">
                                        <h2 class="text-light title-dark mb-0"><span class="counter-value"
                                                data-target="50000">50000</span>+</h2>
                                        <h5 class="counter-head mb-0 title-dark text-light">Monthly Income</h5>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-12 mt-4 pt-2">
                                <div class="card counter-box border-0 bg-light bg-gradient shadow text-center rounded">
                                    <div class="card-body py-5">
                                        <h2 class="mb-0"><span class="counter-value" data-target="20">20</span>+
                                        </h2>
                                        <h5 class="counter-head mb-0">Services</h5>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end Row-->
                    </div><!--end col-->
                </div><!--end Row-->
            </div><!--end col-->
        </div><!--end row-->
    </div>

    <div id="section_footer custom_pd">
        <section class=" d-table w-100 footer_new_section custom_sec_pd" id="home section_footer"
            style="padding: 55px 0px;">
            <div class="container custom_visiblity">
                <div class="row mt-5 align-items-center">
                    <div class="col-lg-6 col-md-7">
                        <div class="title-heading">
                            <h4 class="heading mb-3">Download <span class="text-primary fw-bold">PurnPay</span>
                                application from Google play-store</h4>
                            <p class="para-desc text-muted">Signup and create your account. In 48 hours you can start your
                                own business and increase your income</p>
                            <div class="mt-4">
                                <a href="https://play.google.com/store/apps/details?id=in.PurnPay.app" target="_blank"
                                    class="btn btn-primary mt-2"><i class="uil uil-google-play"></i> Play Store</a>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-6 col-md-5 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="text-md-end text-center ms-lg-4">
                            <img src="{{asset('web/images/web-img/home/Download-PurnPay-application.png')}}" class="img-fluid"
                                alt="">
                        </div>
                    </div>
                </div><!--end row-->
            </div><!--end container-->
        </section>


        <!--<div class="container mt-100 mt-60">
    <div class="rounded bg-primary bg-gradient p-lg-5 p-4">
        <div class="row align-items-end">
            <div class="col-md-8">
                <div class="section-title text-md-start text-center">
                    <h4 class="title mb-3 text-white title-dark">Join PurnPay Distributor</h4>
                    <p class="text-white-50 mb-0">Become PurnPay Distributor today and earn up to 50000 every month. </p>
                </div>
            </div>
            
            <div class="col-md-4 mt-4 mt-sm-0">
                <div class="text-md-end text-center">
                    <a href="javascript:void(0)" class="btn btn-light">Get Started</a>
                </div>
            </div>
        </div>
    </div>
    </div> -->
    @endsection

@extends('web.app')

@section('content')

<section class=" d-table w-100 overflow-hidden padding_head_below" id="home">
    <div class="container">
        <div class="row align-items-center pt-5">
            <div class="col-lg-7 col-md-6">
                <div class="title-heading">
                    <h1 class="heading mb-3">Apne <span class="text-primary">Deshi Bharat </span> ka main Deshi
                        dukaandar</h1>
                    <p class="para-desc text-muted">Become PurnPay retailer in 3 easy steps and start earning from
                        day one. Opportunity to become a part of the fastest growing fintech industry.</p>
                    <div class="mt-4 pt-2">
                        <a href="#lead_form" target="" class="btn btn-primary">Join PurnPay </a>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-5 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                <div class="freelance-hero position-relative">
                    <div class="bg-shape position-relative">
                        <img src="{{asset('web/images/web-img/purnpay-retailer/Retailer-Image-1.png')}}" class="mx-auto d-block"
                            alt="" width="500">
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section>
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

<!-- <div class="container pt-4 mt-100 mt-60">
            <div class="row justify-content-center" id="counter">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <h4 class="title mb-4">Apne <span class="text-primary">Deshi Bharat </span> ka main Deshi dukaandar</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Become Purn Pay  retailer in 3 easy steps and start earning from day one. Opportunity to become a part of the fastest growing fintech industry.</p>
                    
                        <div class="mt-4">
                            <a href="javascript:void(0)" class="btn btn-primary m-1">Join Purn Pay  <i class="uil uil-angle-right-b"></i></a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div> -->



<section class="section overflow-hidden padding_50">
    <div class="container pb-5 mb-md-5">

        <div class="row justify-content-center" id="counter">
            <div class="col-12 text-center">
                <div class="section-title">
                    <h4 class="title mb-4 padding_50">3 Steps to Become <span class="text-primary fw-bold">Purn
                            Pay </span> Retailer</h4>



                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            <div class="col-md-4 col-12">
                <div class="features text-center">
                    <div class="image position-relative d-inline-block">

                        <img src="{{asset('web/images/step_1.png')}}" alt="step-1" width="225">
                        <!-- <i class="uil uil-airplay h1 text-primary"></i> -->
                    </div>

                    <div class="content mt-4">
                        <h5>Download Purn Pay Android Application</h5>

                    </div>
                </div>
            </div><!--end col-->

            <div class="col-md-4 col-12 mt-5 mt-sm-0">
                <div class="features text-center">
                    <div class="image position-relative d-inline-block">
                        <img src="{{asset('web/images/step_2_.png')}}" alt="step-1" width="225">
                        <!-- <i class="uil uil-calendar-alt h1 text-primary"></i> -->
                    </div>

                    <div class="content mt-4">
                        <h5>Signup & Fill Your Personal and Business Details</h5>

                    </div>
                </div>
            </div><!--end col-->

            <div class="col-md-4 col-12 mt-5 mt-sm-0">
                <div class="features text-center">
                    <div class="image position-relative d-inline-block">
                        <img src="{{asset('web/images/step_3.png')}}" alt="step-1" width="225">
                        <!--  <i class="uil uil-clock h1 text-primary"></i> -->
                    </div>

                    <div class="content mt-4">
                        <h5>Upload KYC Documents</h5>

                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container pb-5 mb-md-5 mt-100 mt-60">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="saas-feature-shape-left position-relative">
                    <img src="{{asset('web/images/web-img/purnpay-retailer/PurnPay-Retailer-2.png')}}"
                        class="img-fluid mx-auto d-block rounded shadow" alt="">
                </div>
            </div><!--end col-->

            <div class="col-lg-5 mt-4 pt-2 mt-lg-0 pt-lg-0">
                <div class="section-title ms-lg-4">
                    <h4 class="mb-3">Purn Pay Retailer</h4>
                    <p class="para-desc text-muted">Purn Pay ’s advanced platform enables any user to do number of
                        different financial and utility transactions on the go. Anyone can start business with
                        negligible investment and start earning from day one. Purn Pay now has more than 50000
                        retailers who are leveraging its unique technology and earning up to 50000 every month.</p>


                    <h4 class="mb-3">Who can become Purn Pay Retailer?</h4>
                    <p class="para-desc text-muted">Anyone who knows how to operate an android phone can become a
                        Purn Pay Retailer and start his own business.</p>

                    <h4 class="mb-3">Investment required to become Purn Pay Retailer?</h4>
                    <p class="para-desc text-muted">This unique business opportunity is completely Free of cost.
                        Yes, you can start this business at 0 investment</p>


                    <!-- Purn Pay  extra
                        
                        <div class="tns-outer" id="tns1-ow"><div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide <span class="current">1</span>  of 6</div><div id="tns1-mw" class="tns-ovh"><div class="tns-inner" id="tns1-iw"><div class="tiny-single-item  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal" id="tns1" style="transform: translate3d(0%, 0px, 0px);">
                            <div class="tiny-slide tns-item tns-slide-active" id="tns1-item0">
                                <div class="client-testi">
                                    <img src="{{asset('web/images/client/01.jpg')}}" class="img-fluid avatar avatar-small rounded-circle shadow" alt="">
                                    <p class="text-muted mt-4">" It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. "</p>
                                    <h6 class="text-primary">- Thomas Israel</h6>
                                </div>
                            </div>

                            <div class="tiny-slide tns-item" id="tns1-item1" aria-hidden="true" tabindex="-1">
                                <div class="client-testi">
                                    <img src="{{asset('web/images/client/02.jpg')}}" class="img-fluid avatar avatar-small rounded-circle shadow" alt="">
                                    <p class="text-muted mt-4">" The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. "</p>
                                    <h6 class="text-primary">- Carl Oliver</h6>
                                </div>
                            </div>

                            <div class="tiny-slide tns-item" id="tns1-item2" aria-hidden="true" tabindex="-1">
                                <div class="client-testi">
                                    <img src="{{asset('web/images/client/03.jpg')}}" class="img-fluid avatar avatar-small rounded-circle shadow" alt="">
                                    <p class="text-muted mt-4">" One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others. "</p>
                                    <h6 class="text-primary">- Barbara McIntosh</h6>
                                </div>
                            </div>

                            <div class="tiny-slide tns-item" id="tns1-item3" aria-hidden="true" tabindex="-1">
                                <div class="client-testi">
                                    <img src="{{asset('web/images/client/04.jpg')}}" class="img-fluid avatar avatar-small rounded-circle shadow" alt="">
                                    <p class="text-muted mt-4">" Thus, Lorem Ipsum has only limited suitability as a visual filler for German texts. "</p>
                                    <h6 class="text-primary">- Jill Webb</h6>
                                </div>
                            </div>

                            <div class="tiny-slide tns-item" id="tns1-item4" aria-hidden="true" tabindex="-1">
                                <div class="client-testi">
                                    <img src="{{asset('web/images/client/05.jpg')}}" class="img-fluid avatar avatar-small rounded-circle shadow" alt="">
                                    <p class="text-muted mt-4">" There is now an abundance of readable dummy texts. These are usually used when a text is required. "</p>
                                    <h6 class="text-primary">- Dean Tolle</h6>
                                </div>
                            </div>

                            <div class="tiny-slide tns-item" id="tns1-item5" aria-hidden="true" tabindex="-1">
                                <div class="client-testi">
                                    <img src="{{asset('web/images/client/06.jpg')}}" class="img-fluid avatar avatar-small rounded-circle shadow" alt="">
                                    <p class="text-muted mt-4">" According to most sources, Lorum Ipsum can be traced back to a text composed by Cicero. "</p>
                                    <h6 class="text-primary">- Christa Smith</h6>
                                </div>
                            </div>
                        </div></div></div> -->



                </div>
            </div>
        </div><!-- end col-->
    </div><!--end row-->
    </div><!--end container-->





    <!-- <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-5 order-2 order-lg-1 mt-4 pt-2 mt-lg-0 pt-lg-0">
                    <div class="section-title me-lg-4">
                        <h1 class="title mb-3">Why Choose Us ?</h1>
                        <p class="para-desc text-muted">Purn Pay  offers its retailers numerous advantages over its competitors. Join today and fulfill your dreams of becoming a business owner.</p>
                    
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex align-items-center pt-4">
                                    <h2><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shield fea icon-m-md text-primary"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg></h2>
                                    <div class="ms-3">
                                        <h5>One Wallet</h5>
                                        <p class="text-muted mb-0">Purn Pay  has all the services under one common wallet, no need to maintain separate wallet for different services.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="d-flex align-items-center pt-4">
                                    <h2><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu fea icon-m-md text-primary"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg></h2>
                                    <div class="ms-3">
                                        <h5>Real Time Income</h5>
                                        <p class="text-muted mb-0">You get commission as soon as the transaction is done. No need to wait for the month end to get commission</p>
                                    </div>
                                </div>
                            </div>



                            <div class="col-12">
                                <div class="d-flex align-items-center pt-4">
                                    <h2><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu fea icon-m-md text-primary"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg></h2>
                                    <div class="ms-3">
                                        <h5>Performance</h5>
                                        <p class="text-muted mb-0">Purn Pay  has been developed using latest technology. It is far superior and advanced.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="d-flex align-items-center pt-4">
                                    <h2><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu fea icon-m-md text-primary"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg></h2>
                                    <div class="ms-3">
                                        <h5>Fully Secured</h5>
                                        <p class="text-muted mb-0">Purn Pay  is fully secured against all types of attacks. Your money is safe 24/7</p>
                                    </div>
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="d-flex align-items-center pt-4">
                                    <h2><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu fea icon-m-md text-primary"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg></h2>
                                    <div class="ms-3">
                                        <h5>Mini Bank</h5>
                                        <p class="text-muted mb-0">Opportunity to become digital banker of your area and provide almost all the banking services</p>
                                    </div>
                                </div>
                            </div>




                            
                            <div class="col-12 pt-4">
                                <a href="javascript:void(0)" class="btn btn-outline-primary">Install Now <i class="uil uil-angle-right-b"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-7 order-1 order-lg-2">
                    <div class="saas-feature-shape-right position-relative">
                        <img src="{{asset('web/images/saas/classic02.png')}}" class="img-fluid mx-auto d-block rounded shadow" alt="">
                    </div>
                </div>
            </div>-->
    </div>
</section>


<section class="">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4">Why Choose Us?</h4>
                    <p class="text-muted para-desc mb-0 mx-auto"><span class="text-primary fw-bold">Purn Pay
                        </span> offers its retailers numerous advantages over its competitors. Join today and
                        fulfill your dreams of becoming a business owner.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row mb-5">
            <div class="col-lg-3 col-md-4 mt-4 pt-2">
                <div
                    class="card features fea-primary rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                    <span class="h1 icon2 text-primary">
                        <i class="uil uil-chart-line"></i>
                    </span>
                    <div class="card-body p-0 content">
                        <h5>Hign Performance</h5>
                        <p class="para text-muted mb-0">High speed servers for optimum performance.</p>
                    </div>
                    <span class="big-icon text-center">
                        <i class="uil uil-chart-line"></i>
                    </span>
                </div>
            </div><!--end col-->

            <div class="col-lg-3 col-md-4 mt-4 pt-2">
                <div
                    class="card features fea-primary rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                    <span class="h1 icon2 text-primary">
                        <i class="uil uil-crosshairs"></i>
                    </span>
                    <div class="card-body p-0 content">
                        <h5>Fully Secured</h5>
                        <p class="para text-muted mb-0">Extremely secured servers to ensure full safety.</p>
                    </div>
                    <span class="big-icon text-center">
                        <i class="uil uil-crosshairs"></i>
                    </span>
                </div>
            </div><!--end col-->

            <div class="col-lg-3 col-md-4 mt-4 pt-2">
                <div
                    class="card features fea-primary rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                    <span class="h1 icon2 text-primary">
                        <i class="uil uil-airplay"></i>
                    </span>
                    <div class="card-body p-0 content">
                        <h5>Trusted Portal</h5>
                        <p class="para text-muted mb-0">10 years old portal with over 1 lac retailers.</p>
                    </div>
                    <span class="big-icon text-center">
                        <i class="uil uil-airplay"></i>
                    </span>
                </div>
            </div><!--end col-->

            <div class="col-lg-3 col-md-4 mt-4 pt-2">
                <div
                    class="card features fea-primary rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                    <span class="h1 icon2 text-primary">
                        <i class="uil uil-rocket"></i>
                    </span>
                    <div class="card-body p-0 content">
                        <h5>Latest Technology</h5>
                        <p class="para text-muted mb-0">Built on advanced technology for fast transactions.</p>
                    </div>
                    <span class="big-icon text-center">
                        <i class="uil uil-rocket"></i>
                    </span>
                </div>
            </div><!--end col-->

            <div class="col-lg-3 col-md-4 mt-4 pt-2">
                <div
                    class="card features fea-primary rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                    <span class="h1 icon2 text-primary">
                        <i class="uil uil-clock"></i>
                    </span>
                    <div class="card-body p-0 content">
                        <h5>Support</h5>
                        <p class="para text-muted mb-0">Dedicated team to solve any issue in no time.</p>
                    </div>
                    <span class="big-icon text-center">
                        <i class="uil uil-clock"></i>
                    </span>
                </div>
            </div><!--end col-->

            <div class="col-lg-3 col-md-4 mt-4 pt-2">
                <div
                    class="card features fea-primary rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                    <span class="h1 icon2 text-primary">
                        <i class="uil uil-users-alt"></i>
                    </span>
                    <div class="card-body p-0 content">
                        <h5>Digital Banker</h5>
                        <p class="para text-muted mb-0">Multiple banking services under one roof.</p>
                    </div>
                    <span class="big-icon text-center">
                        <i class="uil uil-users-alt"></i>
                    </span>
                </div>
            </div><!--end col-->

            <div class="col-lg-3 col-md-4 mt-4 pt-2">
                <div
                    class="card features fea-primary rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                    <span class="h1 icon2 text-primary">
                        <i class="uil uil-file-alt"></i>
                    </span>
                    <div class="card-body p-0 content">
                        <h5>One Wallet</h5>
                        <p class="para text-muted mb-0">Multiple services under one common wallet.</p>
                    </div>
                    <span class="big-icon text-center">
                        <i class="uil uil-file-alt"></i>
                    </span>
                </div>
            </div><!--end col-->

            <div class="col-lg-3 col-md-4 mt-4 pt-2">
                <div
                    class="card features fea-primary rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                    <span class="h1 icon2 text-primary">
                        <i class="uil uil-search"></i>
                    </span>
                    <div class="card-body p-0 content">
                        <h5>Real Time Income</h5>
                        <p class="para text-muted mb-0">Get commission as soon as the transaction is done.</p>
                    </div>
                    <span class="big-icon text-center">
                        <i class="uil uil-search"></i>
                    </span>
                </div>
            </div><!--end col-->


        </div><!--end row-->
    </div><!--end container-->


    <!--<div class="container mt-100 mt-60">
            <div class="rounded bg-primary bg-gradient p-lg-5 p-4">
                <div class="row align-items-end">
                    <div class="col-md-8">
                        <div class="section-title text-md-start text-center">
                            <h4 class="title mb-3 text-white title-dark">Join Purn Pay  Distributor</h4>
                            <p class="text-white-50 mb-0">Become Purn Pay  Distributor today and earn up to 50000 every month. </p>
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
</section>

@endsection
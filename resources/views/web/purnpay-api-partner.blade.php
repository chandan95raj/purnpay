@extends('web.app')

@section('content')
<section class="padding_200 d-table w-100" id="home">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-7">
                <div class="title-heading mt-4">
                    <h1 class="heading mb-3">Powerful <span class="text-primary fw-bold">REST APIs</span> for
                        Financial Services!</h1>
                    <p class="para-desc text-muted">PurnPay provides numerous APIs like Money transfer API,
                        Recharge API, Pancard API, AEPS API & many more to enhance the various business
                        transactions. It aims to enable smooth and hassle-free integration with any B2B or B2C
                        portal.</p>
                    <div class="mt-4 pt-2">
                        <a href="#lead_form" class="btn btn-primary m-1">Become API Partner</a>

                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-5 col-md-5 mt-4 pt-2 mt-sm-0 pt-sm-0">
                <img src="{{asset('web/images/web-img/api-partner/API-1.png')}}" alt="" width="100%">
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

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 text-center">
            <div class="section-title mb-4 pb-2">

                <h4 class="title mb-4">Explore awesome features</h4>
                <!-- <p class="text-muted para-desc mb-0 mx-auto">Start working with <span class="text-primary fw-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p> -->
            </div>
        </div><!--end col-->
    </div><!--end row-->

    <div class="row">
        <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
            <div
                class="card features feature-clean explore-feature p-4 px-md-3 border-0 rounded-md shadow text-center">
                <div class="icons text-primary text-center mx-auto">
                    <i class="uil uil-airplay d-block rounded h3 mb-0"></i>
                </div>

                <div class="card-body p-0 content">
                    <h5 class="mt-4 text-primary fw-bold">Powerful REST APIs</h5>
                    <p class="text-muted">Integrate banking and utility services into your applications with our
                        bundle of flexible APIs used by many big organizations.</p>


                </div>
            </div>
        </div><!--end col-->

        <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
            <div
                class="card features feature-clean explore-feature p-4 px-md-3 border-0 rounded-md shadow text-center">
                <div class="icons text-primary text-center mx-auto">
                    <i class="uil uil-clipboard-alt d-block rounded h3 mb-0"></i>
                </div>

                <div class="card-body p-0 content">
                    <h5 class="mt-4 text-primary fw-bold">Elastic Platform</h5>
                    <p class="text-muted">Scalable cloud platform that auto-scales to manage every kind of load so
                        that you get to enjoy uninterrupted transactions.</p>


                </div>
            </div>
        </div><!--end col-->

        <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
            <div
                class="card features feature-clean explore-feature p-4 px-md-3 border-0 rounded-md shadow text-center">
                <div class="icons text-primary text-center mx-auto">
                    <i class="uil uil-credit-card-search d-block rounded h3 mb-0"></i>
                </div>

                <div class="card-body p-0 content">
                    <h5 class="mt-4 text-primary fw-bold">Clear Documentation</h5>
                    <p class="text-muted">Get started quickly with clear docs, code samples and SDKs to guide you
                        throughout the implementation.</p>


                </div>
            </div>
        </div><!--end col-->

        <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
            <div
                class="card features feature-clean explore-feature p-4 px-md-3 border-0 rounded-md shadow text-center">
                <div class="icons text-primary text-center mx-auto">
                    <i class="uil uil-ruler-combined d-block rounded h3 mb-0"></i>
                </div>

                <div class="card-body p-0 content">
                    <h5 class="mt-4 text-primary fw-bold">Secure API</h5>
                    <p class="text-muted">Several verification levels to maximize the security of requests between
                        our API and your infrastructure to prevent frauds.</p>


                </div>
            </div>
        </div><!--end col-->

        <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
            <div
                class="card features feature-clean explore-feature p-4 px-md-3 border-0 rounded-md shadow text-center">
                <div class="icons text-primary text-center mx-auto">
                    <i class="uil uil-exposure-alt d-block rounded h3 mb-0"></i>
                </div>

                <div class="card-body p-0 content">
                    <h5 class="mt-4 text-primary fw-bold">Dedicated Support</h5>
                    <p class="text-muted">Meet your strict go-live schedules with our fast, helpful implementation
                        support via phone, chat or email.</p>


                </div>
            </div>
        </div><!--end col-->

        <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
            <div
                class="card features feature-clean explore-feature p-4 px-md-3 border-0 rounded-md shadow text-center">
                <div class="icons text-primary text-center mx-auto">
                    <i class="uil uil-clock d-block rounded h3 mb-0"></i>
                </div>

                <div class="card-body p-0 content">
                    <h5 class="mt-4 text-primary fw-bold">Comprehensive Dashboard</h5>
                    <p class="text-muted">A complete dashboard, your one stop solution to manage all the API
                        transactions at one place.</p>


                </div>
            </div>
        </div><!--end col-->
    </div><!--end row-->
</div>





<div class="container mt-100 mt-60">
    <div class="row align-items-center">
        <div class="col-lg-5 col-md-6">
            <img src="{{asset('web/images/web-img/api-partner/APIs-Available-for-Integration-Image.png')}}" class="img-fluid"
                alt="">
        </div><!--end col-->

        <div class="col-lg-7 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
            <div class="section-title ms-lg-5">
                <h4 class="title mb-4"><span class="text-primary fw-bold">APIs</span> Available for Integration
                </h4>

                <h5><i class="uil uil-arrow-circle-right text-primary me-1"></i>Banking Services </h5>
                <p class="text-muted para-desc ms-4 ps-2">Different financial services like Money Transfer, AEPS,
                    Cash Withdrawal, Cash Deposit etc., all APIs under one roof</p>
                <h5><i class="uil uil-arrow-circle-right text-primary me-1"></i>Utility Services</h5>
                <p class="text-muted para-desc ms-4 ps-2">Number of utility services like Bill Payment, Mobile or
                    DTH recharge, PAN Card issuance and a lot more.</p>
                <h5><i class="uil uil-arrow-circle-right text-primary me-1"></i>Verification APIs</h5>
                <p class="text-muted para-desc ms-4 ps-2">Now secured onboarding of merchants has been made easy by
                    different verification APIs like Bank Account or PAN Card verification.</p>
            </div>
        </div><!--end col-->
    </div><!--end row-->
</div>




<!-- <div class="container mt-100 mt-60">
    <div class="rounded bg-primary bg-gradient p-lg-5 p-4">
        <div class="row align-items-end">
            <div class="col-md-8">
                <div class="section-title text-md-start text-center">
                    <h4 class="title mb-3 text-white title-dark">Join PurnPay  Distributor</h4>
                    <p class="text-white-50 mb-0">Become PurnPay  Distributor today and earn up to 50000 every month. </p>
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
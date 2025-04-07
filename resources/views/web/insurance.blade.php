@extends('web.app')

@section('content')
<section class="padding_200 d-table w-100 overflow-hidden" id="home">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-7">
                <div class="title-heading mt-4">

                    <h1 class="heading mb-3"><span class="text-primary fw-bold">Insurance</span> – Wide range of
                        Insurance products</h1>
                    <p class="para-desc text-muted"><span class="text-primary fw-bold">PurnPay </span> has
                        integrated with top insurance providers in the country to enable a host of different
                        insurance products for all its partners with the maximum commission.</p>

                </div>
            </div><!--end col-->

            <div class="col-lg-5 col-md-5 mt-4 pt-2 mt-sm-0 pt-sm-0">
                <div class="classic-app-image position-relative">
                    <div class=" position-relative">
                        <img src="{{asset('web/images/jan-2022/Image-3.png')}}" class=" mx-auto d-block " width="100%" alt="">
                    </div>
                    <div class="app-images d-none d-md-block">

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

<style>
    #insure_box .card {
        border: 5px #2f55d4 solid !important;
        box-shadow: 0px 10px 10px -5px #ababab;
    }
</style>

<!-- Hero Start -->
<section class="bg-half-170 d-table w-100">
    <div class="container">
        <div class="row mt-5 justify-content-center" id="insure_box">
            <div class="col-lg-12">
                <div class="title-heading text-center">
                    <h1 class="heading title-dark mb-3">Wide range of Insurance products</h1>
                    <p class="para-desc mx-auto">PurnPay has integrated with top insurance providers in the country
                        to enable a host of different insurance products for all its partners with the maximum
                        commission.</p>

                    <div class="row mt-4 pt-2">
                        <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2">
                            <div class="card explore-feature border-0 rounded text-center bg-white">
                                <div class="card-body">
                                    <div class="icon rounded-circle shadow-lg d-inline-block">
                                        <img src="{{asset('web/images/insurance/health.svg')}}" class="avatar avatar-md-sm"
                                            alt="">
                                    </div>
                                    <div class="content mt-3">
                                        <h6 class="mb-0"><a href="javascript:void(0)" class="title text-dark">Health
                                                Insurance</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2">
                            <div class="card explore-feature border-0 rounded text-center bg-white">
                                <div class="card-body">
                                    <div class="icon rounded-circle shadow-lg d-inline-block">
                                        <img src="{{asset('web/images/insurance/term-life.svg')}}" class="avatar avatar-md-sm"
                                            alt="">
                                    </div>
                                    <div class="content mt-3">
                                        <h6 class="mb-0"><a href="javascript:void(0)" class="title text-dark">Term
                                                Life Insurance</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2">
                            <div class="card explore-feature border-0 rounded text-center bg-white">
                                <div class="card-body">
                                    <div class="icon rounded-circle shadow-lg d-inline-block">
                                        <img src="{{asset('web/images/insurance/family-health.svg')}}" class="avatar avatar-md-sm"
                                            alt="">
                                    </div>
                                    <div class="content mt-3">
                                        <h6 class="mb-0"><a href="javascript:void(0)" class="title text-dark">Home
                                                Secure Insurance</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2">
                            <div class="card explore-feature border-0 rounded text-center bg-white">
                                <div class="card-body">
                                    <div class="icon rounded-circle shadow-lg d-inline-block">
                                        <img src="{{asset('web/images/insurance/investment.svg')}}" class="avatar avatar-md-sm"
                                            alt="">
                                    </div>
                                    <div class="content mt-3">
                                        <h6 class="mb-0"><a href="javascript:void(0)" class="title text-dark">Vector
                                                Insurance</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2">
                            <div class="card explore-feature border-0 rounded text-center bg-white">
                                <div class="card-body">
                                    <div class="icon rounded-circle shadow-lg d-inline-block">
                                        <img src="{{asset('web/images/insurance/car.svg')}}" class="avatar avatar-md-sm" alt="">
                                    </div>
                                    <div class="content mt-3">
                                        <h6 class="mb-0"><a href="javascript:void(0)" class="title text-dark">4
                                                Wheeler Insurance</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2">
                            <div class="card explore-feature border-0 rounded text-center bg-white">
                                <div class="card-body">
                                    <div class="icon rounded-circle shadow-lg d-inline-block">
                                        <img src="{{asset('web/images/insurance/bike.svg')}}" class="avatar avatar-md-sm" alt="">
                                    </div>
                                    <div class="content mt-3">
                                        <h6 class="mb-0"><a href="javascript:void(0)" class="title text-dark">2
                                                Wheeler Insurance</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div> <!--end container-->
</section><!--end section-->
<div class="position-relative">
    <div class="shape overflow-hidden text-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- Hero End -->

<!-- Start -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card features fea-primary rounded p-4 bg-light position-relative overflow-hidden border-0">
                    <span class="h1 icon2 text-primary">
                        <i class="uil uil-briefcase"></i>
                    </span>
                    <div class="card-body p-0 content">
                        <h5>Fully Automated</h5>
                        <p class="para text-muted mb-0">Instant issuance of a policy to the customer which can be
                            printed or shared with the customer.</p>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="card features fea-primary rounded p-4 bg-light position-relative overflow-hidden border-0">
                    <span class="h1 icon2 text-primary">
                        <i class="uil uil-rocket"></i>
                    </span>
                    <div class="card-body p-0 content">
                        <h5>Paperless</h5>
                        <p class="para text-muted mb-0">Technology-driven paperless process. No need to take a
                            printout, fill the form, and upload it.</p>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 col-12 mt-4 mt-lg-0 pt-2 pt-lg-0">
                <div class="card features fea-primary rounded p-4 bg-light position-relative overflow-hidden border-0">
                    <span class="h1 icon2 text-primary">
                        <i class="uil uil-crosshairs"></i>
                    </span>
                    <div class="card-body p-0 content">
                        <h5>Easy Process</h5>
                        <p class="para text-muted mb-0">No medical checkups are needed for insurance. No need to
                            take your vehicle anywhere for inspection.</p>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6 mt-4 pt-2">
                <img src="{{asset('web/images/jan-2022/Image-4.png')}}" alt="" class="img-fluid">
            </div><!--end col-->

            <div class="col-lg-7 col-md-6 mt-4 pt-2">
                <div class="section-title ms-lg-5">
                    <h4 class="title mb-4">Vector Insurance</h4>
                    <p class="text-muted">Mosquito Disease Protection Policy (Vector Borne Disease). The product is
                        designed to cover 7 vector-borne diseases. Dengue, Malaria, Chikungunya, Japanese
                        Encephalitis, Kala Azar, Lymphatic Filariasis, Zika. Sum insured is Rs.10000 per year with a
                        premium as low as Rs.70</p>
                    <ul class="list-unstyled text-muted">
                        <li class="mb-1"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>No Pre-policy check-up
                            required</li>
                        <li class="mb-1"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>Simple Enrolment Process
                        </li>
                        <li class="mb-1"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>Claims paid on a benefits
                            basis irrespective of hospitalization expense</li>
                        <li class="mb-1"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>Simultaneous claims on the
                            existing Health Insurance Policy and Mosquito Disease Protection Policy can be made.
                        </li>
                    </ul>
                    <div class="mt-4">
                        <a href="#lead_form" class="btn btn-primary">Join Now <i
                                class="uil uil-angle-right-b align-middle"></i></a>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6 mt-4 pt-2 order-1 order-md-2">
                <img src="{{asset('web/images/jan-2022/Image-5.png')}}" alt="" class="img-fluid">
            </div><!--end col-->

            <div class="col-lg-7 col-md-6 mt-4 pt-2 order-2 order-md-1">
                <div class="section-title me-lg-5">
                    <h4 class="title mb-4">Motor Insurance</h4>
                    <p class="text-muted">Motor insurance is mandatory for all two-wheeler and four-wheeler
                        vehicles such as cars, bikes, scooters, trucks that are plying on the roads in India. Motor
                        insurance provides financial protection against physical damage or cover for natural
                        calamities and any loss or damages sustained by the policyholder in an unforeseen accident.
                    </p>
                    <ul class="list-unstyled text-muted">
                        <li class="mb-1"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>Complete online,
                            hassle-free process. Issue instant policies and earn.</li>
                        <li class="mb-1"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>Instant commission on
                            successful policy issuance.</li>
                        <li class="mb-1"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>Among the lowest premiums
                            in the market compared to other insurance companies.</li>
                        <li class="mb-1"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>Automated reminders to the
                            customers for policy renewals.</li>
                    </ul>
                    <div class="mt-4">
                        <a href="#lead_form" class="btn btn-primary">Join Now <i
                                class="uil uil-angle-right-b align-middle"></i></a>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container-fluid mt-100 mt-60">
        <div class="rounded py-5" style="background: url('{{asset('web/images/jan-2022/Image-6.jpg')}}') center center;">
            <div class="container py-md-5 py-3">
                <div class="row">
                    <div class="col-lg-6 col-md-7 col-12 offset-lg-6 offset-md-5">
                        <div class="card border-0">
                            <div class="card-body p-md-5 p-4 bg-white rounded">
                                <div class="section-title">
                                    <h4 class="title mb-4">Advantages</h4>
                                    <p class="text-muted para-desc mb-0"><span class="text-primary fw-bold">PurnPay
                                        </span> aggressively works towards
                                        generating better income opportunities for all its network partners.
                                        Insurance products such as four-wheeler, two-wheeler, and vector insurance
                                        are such initiatives under the PurnPay umbrella.</p>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-12 mt-4">
                                        <div class="d-flex align-items-center">
                                            <div class="icon text-center rounded-circle h4 text-primary me-2 mb-0">
                                                <i class="uil uil-umbrella"></i>
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="title text-dark mb-0">Numerous Insurance Products</h6>
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-md-6 col-12 mt-4">
                                        <div class="d-flex align-items-center">
                                            <div class="icon text-center rounded-circle h4 text-primary me-2 mb-0">
                                                <i class="uil uil-user"></i>
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="title text-dark mb-0">Target Different Customers</h6>
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-md-6 col-12 mt-4">
                                        <div class="d-flex align-items-center">
                                            <div class="icon text-center rounded-circle h4 text-primary me-2 mb-0">
                                                <i class="uil uil-money-bill"></i>
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="title text-dark mb-0">Maximum Commission</h6>
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-md-6 col-12 mt-4">
                                        <div class="d-flex align-items-center">
                                            <div class="icon text-center rounded-circle h4 text-primary me-2 mb-0">
                                                <i class="uil uil-bolt-alt"></i>
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="title text-dark mb-0">Fast & Smooth Process</h6>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->

                                <div class="mt-4">
                                    <!--<a href="javascript:void(0)" class="btn btn-primary">Protect your life <i class="uil uil-angle-right-b align-middle"></i></a> -->
                                </div>
                            </div><!--end div-->
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </div><!--end div-->
    </div><!--end container fluid-->

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4">Insurance Products</h4>
                    <p class="text-muted para-desc mb-0 mx-auto"><span class="text-primary fw-bold">PurnPay
                        </span> offers numerous and innovative insurance products for all its business partners so
                        that they can offer more products and target different customers.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            <a href="javascript:void(0)" class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="d-flex key-feature align-items-center p-3 rounded shadow">
                    <div class="icon text-center rounded-circle h4 text-primary me-3 mb-0">
                        <i class="uil uil-estate"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="title text-dark mb-0">2 Wheeler Insurance</h4>
                    </div>
                </div>
            </a><!--end col-->

            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <a href="javascript:void(0)" class="d-flex key-feature align-items-center p-3 rounded shadow">
                    <div class="icon text-center rounded-circle h4 text-primary me-3 mb-0">
                        <i class="uil uil-user-arrows"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="title text-dark mb-0">4 Wheeler Insurance</h4>
                    </div>
                </a>
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <a href="javascript:void(0)" class="d-flex key-feature align-items-center p-3 rounded shadow">
                    <div class="icon text-center rounded-circle h4 text-primary me-3 mb-0">
                        <i class="uil uil-user-circle"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="title text-dark mb-0">Vector Insurance</h4>
                    </div>
                </a>
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <a href="javascript:void(0)" class="d-flex key-feature align-items-center p-3 rounded shadow">
                    <div class="icon text-center rounded-circle h4 text-primary me-3 mb-0">
                        <i class="uil uil-car"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="title text-dark mb-0">Hospi Cash</h4>
                    </div>
                </a>
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <a href="javascript:void(0)" class="d-flex key-feature align-items-center p-3 rounded shadow">
                    <div class="icon text-center rounded-circle h4 text-primary me-3 mb-0">
                        <i class="uil uil-truck"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="title text-dark mb-0">Personal Accident</h4>
                    </div>
                </a>
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <a href="javascript:void(0)" class="d-flex key-feature align-items-center p-3 rounded shadow">
                    <div class="icon text-center rounded-circle h4 text-primary me-3 mb-0">
                        <i class="uil uil-chart-pie-alt"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="title text-dark mb-0">Home Secure</h4>
                    </div>
                </a>
            </div><!--end col-->


            <div class="col-12 mt-4 pt-2 text-center">
                <a href="#lead_form" class="btn btn-primary">Join Now <i
                        class="uil uil-angle-right-b align-middle"></i></a>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->


</section><!--end section-->
<!-- End -->
@endsection
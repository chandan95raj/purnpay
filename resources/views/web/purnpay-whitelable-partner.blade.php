@extends('web.app')

@section('content')
<section class="padding_200 border-bottom d-table w-100" id="home">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-7">
                <div class="title-heading mt-4">

                    <h1 class="heading mb-3">Opportunity to Create Your Brand in the <br><span
                            class="text-primary typewrite" data-period="2000" data-type="[ &quot;Industry!&quot;]"><span
                                class="wrap"></span></span></h1>
                    <p class="para-desc text-muted">PurnPay bring to you one of a kind business model wherein you
                        can have your own fintech portal with all the services and features developed for your
                        brand. </p>
                    <div class="mt-4">
                        <a href="#lead_form" class="btn btn-primary rounded"><i class="uil uil-store"></i> White
                            Label Partner</a>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-6 col-md-5 mt-4 pt-2 mt-sm-0 pt-sm-0">
                <div class="position-relative">
                    <img src="{{asset('web/images/web-img/whitelable-partner/Whitelabel-top-image.png')}}"
                        class="rounded img-fluid mx-auto d-block" alt="">
                    <!-- <div class="play-icon">
                            <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="play-btn lightbox">
                                <i class="mdi mdi-play text-primary rounded-circle bg-white shadow"></i>
                            </a>
                        </div> -->
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

<section class="section" style="padding:100px 0px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4">Advantages of <span class="text-primary fw-bold">PurnPay </span>
                        Whitelable Platform</h4>

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
                        <h5>Design & Development</h5>
                        <p class="text-muted mb-0">Our expert team takes very minimal time in developing your own
                            portal with your domain and logo.</p>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-md-4 col-12 mt-5">
                <div class="features">
                    <div class="image position-relative d-inline-block">
                        <i class="uil uil-vector-square h1 text-primary ps-3"></i>
                    </div>

                    <div class="content mt-4">
                        <h5>Portal Management </h5>
                        <p class="text-muted mb-0">A comprehensive backoffice to manage all day to day operations
                            like creating users, setting deals, managing communication etc. </p>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-md-4 col-12 mt-5">
                <div class="features">
                    <div class="image position-relative d-inline-block">
                        <i class="uil uil-file-search-alt h1 text-primary ps-3"></i>
                    </div>

                    <div class="content mt-4">
                        <h5>Android Application</h5>
                        <p class="text-muted mb-0">Your own android application hosted in play store through which
                            users can do transactions on the go.</p>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-md-4 col-12 mt-5">
                <div class="features">
                    <div class="image position-relative d-inline-block">
                        <i class="uil uil-airplay h1 text-primary ps-3"></i>
                    </div>

                    <div class="content mt-4">
                        <h5>Daily Reports</h5>
                        <p class="text-muted mb-0">Well-equipped back office which generates all the required
                            reports at the click of a button.</p>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-md-4 col-12 mt-5">
                <div class="features">
                    <div class="image position-relative d-inline-block">
                        <i class="uil uil-calendar-alt h1 text-primary ps-3"></i>
                    </div>

                    <div class="content mt-4">
                        <h5>Corporate Mail IDs</h5>
                        <p class="text-muted mb-0">Impactful communication with your retailers and distributors
                            through corporate mail ID of your domain.</p>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-md-4 col-12 mt-5">
                <div class="features">
                    <div class="image position-relative d-inline-block">
                        <i class="uil uil-clock h1 text-primary ps-3"></i>
                    </div>

                    <div class="content mt-4">
                        <h5>Marketing Support</h5>
                        <p class="text-muted mb-0">Marketing material for promotion of your brand in the market. A
                            well designed corporate kit of your brand.</p>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section>




<div class="container mt-75 mt-60">
    <div class="row align-items-center">
        <div class="col-lg-5 col-md-6">
            <img src="{{asset('web/images/web-img/whitelable-partner/Whitelabel-partner-2.png')}}" class="img-fluid" alt="">
        </div><!--end col-->

        <div class="col-lg-7 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
            <div class="section-title ms-lg-5">
                <h4 class="title mb-4">Why Choose <span class="text-primary fw-bold">PurnPay </span> Whitelable?
                </h4>
                <p class="text-muted">The unique and advanced platform is equipped with numbers of features and
                    services which sets it apart in the industry. This is one of the best platforms if you are
                    looking at developing your own fintech portal.</p>
                <ul class="list-unstyled mb-0 text-muted">
                    <li class="mb-0"><span class="text-primary h5 me-2"><i
                                class="uil uil-check-circle align-middle"></i></span>Platform is designed in such a
                        way that you can go live with your own portal within a month and start doing business in the
                        market</li>
                    <li class="mb-0"><span class="text-primary h5 me-2"><i
                                class="uil uil-check-circle align-middle"></i></span>Number of different financial
                        and utility services integrated in to one wallet with best commission structure in the
                        industry</li>
                    <li class="mb-0"><span class="text-primary h5 me-2"><i
                                class="uil uil-check-circle align-middle"></i></span>Most advanced and latest
                        technology so that 99% uptime can me maintained and users can do seamless transactions 24/7
                    </li>
                </ul>
            </div>
        </div><!--end col-->
    </div><!--end row-->
</div>



<div class="container ">
    <div class="row justify-content-center" style="padding:75px 0px 0 0;">
        <div class="col-12">
            <div class="section-title text-center mb-4 pb-2">

                <h4 class="title mb-4">How does it work?</h4>
                <!-- <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary fw-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p> -->
            </div>
        </div><!--end col-->
    </div><!--end row-->

    <div class="row">
        <div class="col-md-4 mt-4 pt-2">
            <div class="card features feature-clean work-process bg-transparent process-arrow border-0 text-center">
                <div class="icons text-primary text-center mx-auto">
                    <i class="uil uil-presentation-edit d-block rounded h3 mb-0"></i>
                </div>

                <div class="card-body">
                    <h5 class="text-dark">Domain & Logo</h5>
                    <p class="text-muted mb-0">The first step is to book desired domain and get the logo designed.
                        Our designer will help you with 2 – 3 logo options.</p>
                </div>
            </div>
        </div><!--end col-->

        <div class="col-md-4 mt-md-5 pt-md-3 mt-4 pt-2">
            <div class="card features feature-clean work-process bg-transparent process-arrow border-0 text-center">
                <div class="icons text-primary text-center mx-auto">
                    <i class="uil uil-airplay d-block rounded h3 mb-0"></i>
                </div>

                <div class="card-body">
                    <h5 class="text-dark">Technical Development</h5>
                    <p class="text-muted mb-0">Team will design the app and web according to the logo colors and
                        set up corporate mail ID for communication.</p>
                </div>
            </div>
        </div><!--end col-->

        <div class="col-md-4 mt-md-5 pt-md-5 mt-4 pt-2">
            <div class="card features feature-clean work-process bg-transparent d-none-arrow border-0 text-center">
                <div class="icons text-primary text-center mx-auto">
                    <i class="uil uil-image-check d-block rounded h3 mb-0"></i>
                </div>

                <div class="card-body">
                    <h5 class="text-dark">Go Live</h5>
                    <p class="text-muted mb-0">Hosting the application in server and play store. The entire process
                        from start to go live gets completed within 30 days.</p>
                </div>
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
@extends('web.app')

@section('content')
<style>
    .blog .card-img-top {
        height: 237px !important;
        object-fit: cover;
    }
</style>
<section class="padding_200 d-table w-100 overflow-hidden" id="home">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-7">
                <div class="title-heading mt-4">

                    <!--<h1 class="heading mb-3"><span class="text-primary fw-bold">AEPS</span> â€“ Aadhaar Enabled Payment Services</h1>-->
                    <h1 class="heading mb-3"><span class="text-primary fw-bold">Aadhar Enabled </span>Payment
                        System (AEPS Services)</h1>
                    <p class="para-desc text-muted"><span class="text-primary fw-bold">PurnPay </span> has
                        integrated with all the available banks to enable cash withdrawal and other AEPS services
                        for all its partners.</p>

                </div>
            </div><!--end col-->

            <div class="col-lg-5 col-md-5 mt-4 pt-2 mt-sm-0 pt-sm-0">
                <div class="classic-app-image position-relative">
                    <div class=" position-relative">
                        <img src="{{asset('web/images/services/AEPS-Top-Image.png')}}" class=" mx-auto d-block " width="100%"
                            alt="AEPS registration">
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

<section class="padding_head_below overflow-hidden">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">

                    <h2 class="title mb-4">AEPS Services in PurnPay </h2>
                    <p class="text-muted para-desc mx-auto mb-0">Customers can visit their nearest <span
                            class="text-primary fw-bold">PurnPay AEPS</span> agent and do all these transactions
                        using only their Aadhaar Number and Biometric Authentication.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row pb-5">
            <p class="text-left">What Services Included in Aadhar Enabled Payment System?</p>
            <div class="col-md-4 col-12 mt-4 pt-2">
                <div class="card text-center rounded border-0">
                    <div class="card-body">
                        <div class="p-3 bg-light rounded shadow d-inline-block">
                            <img src="{{asset('web/images/icon/art-and-design.svg')}}" class="avatar avatar-small"
                                alt="Balance Inquiry PurnPay ">
                        </div>
                        <div class="mt-4">
                            <h3><a href="javascript:void(0)" class="text-dark">Balance Inquiry: </a></h3>
                            <p class="text-muted mt-3 mb-0">AEPS Agent can check the balance of the customer simply
                                in less than a minute by using PurnPay portal or mobile application. We have the
                                best mobile App to do AEPS.</p>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-md-4 col-12 mt-4 pt-2">
                <div class="card text-center bg-primary bg-gradient rounded border-0">
                    <div class="card-body">
                        <div class="p-3 bg-light rounded shadow d-inline-block">
                            <img src="{{asset('web/images/icon/smartphone.svg')}}" class="avatar avatar-small"
                                alt="Cash Withdrawal - PurnPay ">
                        </div>
                        <div class="mt-4">
                            <h3><a href="javascript:void(0)" class="text-white title-dark">Aadhaar ATM: </a></h3>
                            <p class="text-white-50 mt-3 mb-0">Instead of searching for an ATM, AEPS Agents of
                                PurnPay can convert their own store into an ATM using this service. Customers can
                                withdraw money using their Aadhaar Number and finger print.</p>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-md-4 col-12 mt-4 pt-2">
                <div class="card text-center rounded border-0">
                    <div class="card-body">
                        <div class="p-3 bg-light rounded shadow d-inline-block">
                            <img src="{{asset('web/images/icon/clock.svg')}}" class="avatar avatar-small"
                                alt="Check Mini Statement - PurnPay ">
                        </div>
                        <div class="mt-4">
                            <h3><a href="javascript:void(0)" class="text-dark">Mini statement:</a></h3>
                            <p class="text-muted mt-3 mb-0">Checking the mini statement of a customer has never
                                been simpler. AEPS Agent will also get a commission every time he checks the mini
                                statement of the customer via AEPS.</p>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section>

<section class="section bg-light padding_head_below">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 order-2 order-md-1 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="section-title me-lg-5">
                    <h2 class="title mb-4">What is AEPS? </h2>
                    <p class="text-muted">Aadhaar Enabled Payment System(AEPS Service), is an Aadhaar based payment
                        solution which empowers bank users to carry out financial transactions (without any debit
                        card/credit card/ cheque book) using only their Aadhaar card, registered with their bank
                        account, and biometric authentication. AEPS agents and distributors can provide basic
                        banking services to their customers such as cash withdrawal, balance inquiry and obtaining a
                        mini statement. It is an initiative by NPCI (National Payments Corporation of India) to
                        support unbanked and underbanked sections of India.</p>

                    <p class="text-muted">At PurnPay , we not only add the AEPS Agent or AEPS Distributor to our
                        network, but also take steps to guide them in earning more. Anyone can join our network with
                        a simple AEPS Agent registration form that needs to be filled.</p>
                    <!-- <a href="javascript:void(0)" class="btn btn-outline-primary">Start Now <i class="uil uil-angle-right-b"></i></a>-->
                </div>
            </div><!--end col-->

            <div class="col-md-6 order-1 order-md-2">
                <img src="{{asset('web/images/services/What-is-AEPS.png')}}" class="img-fluid" alt="What is AEPS - PurnPay ">
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section>

<!-- Feature Start -->
<div class="container mt-60">
    <div class="row align-items-center">
        <div class="col-lg-7 col-md-6 order-2 order-md-1 mt-4 mt-sm-0 pt-2 pt-sm-0">
            <div class="section-title me-lg-5">
                <h2 class="title mb-4">How does it work?</h2>
                <p class="text-muted">Once the AEPS Agent registration is done, your PurnPay AEPS Agent login
                    id will be generated. The process of AEPS is very simple.</p>
                <ul class="list-unstyled text-muted">
                    <li class="mb-0"><span class="text-primary h5 me-2"><i
                                class="uil uil-check-circle align-middle"></i></span>The AEPS Agent connects
                        and installs a biometric device to their Computer or Smart phone.</li>
                    <li class="mb-0"><span class="text-primary h5 me-2"><i
                                class="uil uil-check-circle align-middle"></i></span>Agent inputs the Customer
                        Aadhaar number and the bank name.</li>
                    <li class="mb-0"><span class="text-primary h5 me-2"><i
                                class="uil uil-check-circle align-middle"></i></span>Agent selects the
                        transaction type: Cash withdrawal or Balance Inquiry.</li>
                    <li class="mb-0"><span class="text-primary h5 me-2"><i
                                class="uil uil-check-circle align-middle"></i></span>The customer then inputs
                        their thumb print (same as per Aadhaar) to authenticate the transaction.</li>
                    <li class="mb-0"><span class="text-primary h5 me-2"><i
                                class="uil uil-check-circle align-middle"></i></span>The customerâ€™s account
                        is debited and merchantâ€™s PurnPay wallet account is credited real time along with
                        additional commission amount.</li>
                    <li class="mb-0"><span class="text-primary h5 me-2"><i
                                class="uil uil-check-circle align-middle"></i></span>The AEPS Agent then
                        receives a transaction receipt and customer receives an SMS confirmation from bank.</li>
                </ul>
            </div>
        </div><!--end col-->

        <div class="col-lg-5 col-md-6 order-1 order-md-2">
            <img src="{{asset('web/images/services/How-does-it-work.png')}}" alt="How does AEPS Works - PurnPay" class="img-fluid">
        </div><!--end col-->
    </div><!--end row-->
</div><!--end container-->


<div class="container mt-60">
    <div class="row align-items-center">
        <div class="col-lg-6 col-md-6">
            <img src="{{asset('web/images/services/top-feature-AEPS.png')}}" class="img-fluid" alt="Top Aeps Features - PurnPay ">
        </div><!--end col-->

        <div class="col-lg-6 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
            <div class="section-title ms-lg-5">

                <!-- <a href="javascript:void(0)" class="mt-3 h6 text-primary">Find Out More <i class="uil uil-angle-right-b"></i></a> -->



                <h2 class="title mb-4">Top Features</h2>

                <ul class="list-unstyled text-muted">

                    <li class="mb-0"><span class="text-primary h5 me-2"><i
                                class="uil uil-check-circle align-middle"></i></span>Real Time Transaction
                        Settlement along with commission</li>

                    <li class="mb-0"><span class="text-primary h5 me-2"><i
                                class="uil uil-check-circle align-middle"></i></span>Safe & Secure system.</li>

                    <li class="mb-0"><span class="text-primary h5 me-2"><i
                                class="uil uil-check-circle align-middle"></i></span>No need to carry a Debit
                        or Credit card, Only the Aadhaar number and fingerprint authentication required. </li>

                    <li class="mb-0"><span class="text-primary h5 me-2"><i
                                class="uil uil-check-circle align-middle"></i></span>Easily withdraw money,
                        avoid long queues at the bank or ATM.</li>

                    <li class="mb-0"><span class="text-primary h5 me-2"><i
                                class="uil uil-check-circle align-middle"></i></span>Quick process, doesn't
                        take more than a minute to complete a transaction.</li>
                </ul>



            </div>
        </div><!--end col-->
    </div><!--end row-->
</div><!--end container-->

<div class="container mt-100 mt-60">
    <div class="row align-items-center">
        <div class="col-lg-7 col-md-6 order-2 order-md-1 mt-4 mt-sm-0 pt-2 pt-sm-0">
            <div class="section-title me-lg-5">
                <h2 class="title mb-4">Benefits to AEPS agent</h2>
                <!-- <p class="text-muted"></p> -->
                <ul class="list-unstyled text-muted">
                    <li class="mb-0"><span class="text-primary h5 me-2"><i
                                class="uil uil-check-circle align-middle"></i></span>Minimum Investment with
                        Maximum Return.</li>
                    <li class="mb-0"><span class="text-primary h5 me-2"><i
                                class="uil uil-check-circle align-middle"></i></span>Only requirements to set
                        up business, are a Smart phone or Computer (as per ease and availability) & Biometric
                        Device.</li>

                    <li class="mb-0"><span class="text-primary h5 me-2"><i
                                class="uil uil-check-circle align-middle"></i></span>Earn Attractive Commission
                        per transaction.</li>


                    <li class="mb-0"><span class="text-primary h5 me-2"><i
                                class="uil uil-check-circle align-middle"></i></span>Quick process, takes less
                        than a minute to complete the transaction.</li>

                    <li class="mb-0"><span class="text-primary h5 me-2"><i
                                class="uil uil-check-circle align-middle"></i></span>Full utilisation of cash
                        in hand.</li>

                    <li class="mb-0"><span class="text-primary h5 me-2"><i
                                class="uil uil-check-circle align-middle"></i></span>Increase in customer base
                        due to additional service provided.</li>


                </ul>


            </div>
        </div><!--end col-->

        <div class="col-lg-5 col-md-6 order-1 order-md-2">
            <img src="{{asset('web/images/services/Benefits-to-AEPS-Agents.png')}}" alt="Aeps Benefits - PurnPay " class="img-fluid">
        </div><!--end col-->
    </div><!--end row-->
</div><!--end container-->

<div class="container mt-100 mt-60">
    <div class="row justify-content-center">
        <div class="col-12 text-center">
            <div class="section-title mb-4 pb-2">
                <h2 class="title mb-4">Why <span class="text-primary fw-bold">PurnPay ?</span></h2>
            </div>
        </div><!--end col-->
    </div><!--end row-->

    <div class="row">
        <div class="col-md-4 col-12">
            <div class="features">
                <div class="image position-relative d-inline-block">
                    <i class="uil uil-airplay h1 text-primary ps-3"></i>
                </div>

                <div class="content mt-4">
                    <h4>Real Time Settlement:</h4>
                    <p class="text-muted mb-0">AEPS agents and Distributors get instant and real time
                        settlement on every transaction.</p>
                </div>
            </div>
        </div><!--end col-->

        <div class="col-md-4 col-12 mt-5 mt-sm-0">
            <div class="features">
                <div class="image position-relative d-inline-block">
                    <i class="uil uil-calendar-alt h1 text-primary ps-3"></i>
                </div>

                <div class="content mt-4">
                    <h4>Business Setup:</h4>
                    <p class="text-muted mb-0">Ease of doing the AEPS business setup with us, we will help you
                        every step of the way.</p>
                </div>
            </div>
        </div><!--end col-->


        <div class="col-md-4 col-12 mt-5 mt-sm-0">
            <div class="features">
                <div class="image position-relative d-inline-block">
                    <i class="uil uil-clock h1 text-primary ps-3"></i>
                </div>

                <div class="content mt-4">
                    <h4>Service Workforce:</h4>
                    <p class="text-muted mb-0">Trained and experienced service workforce to help your AEPS
                        business flourish.</p>
                </div>
            </div>
        </div><!--end col-->

        <div class="col-md-4 col-12 mt-5 mt-sm-0">
            <div class="features">
                <div class="image position-relative d-inline-block">
                    <i class="uil uil-credit-card h1 text-primary ps-3"></i>
                </div>

                <div class="content mt-4">
                    <h4>Transactions:</h4>
                    <p class="text-muted mb-0">Save time by conducting transactions through PurnPay Web Portal
                        or Mobile Application.</p>
                </div>
            </div>
        </div><!--end col-->

        <div class="col-md-4 col-12 mt-5 mt-sm-0">
            <div class="features">
                <div class="image position-relative d-inline-block">
                    <i class="uil uil-data-sharing h1 text-primary ps-3"></i>
                </div>

                <div class="content mt-4">
                    <h4>Seamless Process:</h4>
                    <p class="text-muted mb-0">Seamless process designed to reduce transaction time and effort
                        using PurnPay portal.</p>
                </div>
            </div>
        </div><!--end col-->

        <div class="col-md-4 col-12 mt-5 mt-sm-0">
            <div class="features">
                <div class="image position-relative d-inline-block">
                    <i class="uil uil-data-sharing h1 text-primary ps-3"></i>
                </div>

                <div class="content mt-4">
                    <h4>Zero Downtime: </h4>
                    <p class="text-muted mb-0">Multiple banks integrated in the back end to ensure service is
                        always up and running.</p>
                </div>
            </div>
        </div><!--end col-->
    </div><!--end row-->
</div><!--end container-->

<div class="container py-5">
    <div class="row align-items-center">
        <div class="col-lg-6 col-md-6 order-2 order-md-1 mt-4 mt-sm-0 pt-2 pt-sm-0">
            <div class="section-title">
                <h4 class="title mb-4">Activation Process </h4>
                <p class="text-muted">Any new or existing business partner can do AEPS free portal registration
                    with a simple documentation process. All you need to do is to submit your PAN Card and
                    Aadhar Card and fill the Aadhar Enable Payment System / Aeps registration form. Earn a
                    handsome income on every transaction!</p>
                <p class="text-muted">Things required to start AEPS Business?</p>
                <ul class="list-unstyled text-muted">
                    <li class="mb-0"><span class="text-primary h5 me-2"><i
                                class="uil uil-check-circle align-middle"></i></span>Smart Phone or Computer
                        with an active internet connection</li>
                    <li class="mb-0"><span class="text-primary h5 me-2"><i
                                class="uil uil-check-circle align-middle"></i></span>Biometric Device</li>
                </ul>

            </div>
        </div><!--end col-->

        <div class="col-lg-6 col-md-6 order-1 order-md-2">
            <img src="{{asset('web/images/hosting/deal-hend.svg')}}" class="img-fluid" alt="Aeps Activation Process - PurnPay ">
        </div><!--end col-->
    </div><!--end row-->
</div>

<section class="d-table w-100 overflow-hidden px-0 py-0 my-5 mb-0" id="blog_header">
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
            @endforeach<!--end col-->            
        </div><!--end row-->
    </div><!--end container-->
</section>
@endsection
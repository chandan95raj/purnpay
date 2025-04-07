@extends('web.app')

@section('content')
    <!-- Hero Start -->
    <section class="bg-half-170 d-table w-100 padding_200" id="home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-7">
                    <div class="title-heading mt-4">
                        <h1 class="heading mb-3"><span class="text-primary fw-bold">Zero</span> Balance Savings
                            Account</h1>
                        <p class="para-desc text-muted">Now open zero balance savings accounts for your customers and
                            earn commission on every new account!</p>
                        <div class="mt-4 pt-2">
                            <a href="#lead_form" class="btn btn-primary m-1">Join Now</a>

                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-5 col-md-5 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <img src="{{asset('web/images/jan-2022/Image-1.png')}}" alt="" class="img-fluid">
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Hero End -->

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
    <!-- Feature Start -->
    <section class="section pt-0 padding_class">
        <div class="container mt-100">
            <div class="row">
                <div class="col-md-4 col-12">
                    <div class="features text-center">
                        <div class="image position-relative d-inline-block">
                            <i class="uil uil-flip-h h2 text-primary ps-3"></i>
                        </div>

                        <div class="content mt-4">
                            <h5>Insant Activation</h5>
                            <p class="text-muted mb-0">You can open savings accounts for your customers instantly
                                through Aadhaar based EKYC of the customer.</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 col-12 mt-5 mt-sm-0">
                    <div class="features text-center">
                        <div class="image position-relative d-inline-block">
                            <i class="uil uil-minus-path h2 text-primary ps-3"></i>
                        </div>

                        <div class="content mt-4">
                            <h5>Paper Less</h5>
                            <p class="text-muted mb-0">Fully technology driven automated process, no need to take
                                printout of the form, fill and upload or sent it anywhere.</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 col-12 mt-5 mt-sm-0">
                    <div class="features text-center">
                        <div class="image position-relative d-inline-block">
                            <i class="uil uil-layers-alt h2 text-primary ps-3"></i>
                        </div>

                        <div class="content mt-4">
                            <h5>Web & App</h5>
                            <p class="text-muted mb-0">Now you can open accounts on the go as the service is available
                                in both the platforms â€“ Web and Android application.</p>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Feature End -->

    <!-- counter Start -->

    <!-- counter End -->

    <!-- Feature Start -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Key Features for Customers</h4>
                        <!-- <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary fw-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p> -->
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-md-4 col-12 mt-5">
                    <div class="features text-center">
                        <div class="image position-relative d-inline-block">
                            <i class="uil uil-edit-alt h2 text-primary ps-3"></i>
                        </div>

                        <div class="content mt-4">
                            <h5>Zero Balance Saving Account</h5>
                            <p class="text-muted mb-0">No requirement to maintain any Average Monthly Balance. No
                                amount is blocked in this account.</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 col-12 mt-5">
                    <div class="features text-center">
                        <div class="image position-relative d-inline-block">
                            <i class="uil uil-vector-square h2 text-primary ps-3"></i>
                        </div>

                        <div class="content mt-4">
                            <h5>Earn Up To 5% Interest*</h5>
                            <p class="text-muted mb-0">Earn an interest up to 5% per annum paid quarterly on balance
                                maintained in the account.</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 col-12 mt-5">
                    <div class="features text-center">
                        <div class="image position-relative d-inline-block">
                            <i class="uil uil-file-search-alt h2 text-primary ps-3"></i>
                        </div>

                        <div class="content mt-4">
                            <h5>Free Virtual Debit Card</h5>
                            <p class="text-muted mb-0">Choose your free virtual debit card from RuPay or VISA for
                                online shopping. You can also request a physical debit card.</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 col-12 mt-5">
                    <div class="features text-center">
                        <div class="image position-relative d-inline-block">
                            <i class="uil uil-airplay h2 text-primary ps-3"></i>
                        </div>

                        <div class="content mt-4">
                            <h5>Instant Account Activation</h5>
                            <p class="text-muted mb-0">Activate your account instantly with our 100% digital, safe and
                                secure account opening process with biometric EKYC.</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 col-12 mt-5">
                    <div class="features text-center">
                        <div class="image position-relative d-inline-block">
                            <i class="uil uil-calendar-alt h2 text-primary ps-3"></i>
                        </div>

                        <div class="content mt-4">
                            <h5>Banking On Mobile - 24/7</h5>
                            <p class="text-muted mb-0">Enjoy banking anytime, anywhere from your smartphone with NSDL
                                Jiffy App., without going to the bank branch.</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 col-12 mt-5">
                    <div class="features text-center">
                        <div class="image position-relative d-inline-block">
                            <i class="uil uil-calendar-alt h2 text-primary ps-3"></i>
                        </div>

                        <div class="content mt-4">
                            <h5>Free NEFT Fund Transfers</h5>
                            <p class="text-muted mb-0">NEFT transactions to other bank accounts are free, customer has
                                to pay 0 service charge on such transactions.</p>
                        </div>
                    </div>
                </div><!--end col-->


            </div><!--end row-->
        </div><!--end container-->


    </section><!--end section-->
    <!-- Feature End -->
    @endsection
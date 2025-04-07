@extends('web.app')

@section('content')
    <!-- Hero Start -->
    <section class="bg-half-170 d-table w-100 padding_class ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title-heading mt-4">
                        <h1 class="heading mb-3"><span class="text-primary fw-bold">EMI & Cash</span> Collection
                            Service</h1>
                        <p class="para-desc text-muted">Become cash or EMI collection center of your location and
                            increase your monthly income. Get commission on collecting cash or EMI installment for
                            various NBFCs and institutions.</p>
                    </div>

                    <!-- <div class="subcribe-form mt-4 pt-2">
                                <form>
                                    <input type="email" id="email" name="email" class="border bg-white rounded-pill" required placeholder="Email Address">
                                    <button type="submit" class="btn btn-pills btn-primary">Get Started</button>
                                </form>
                            </div>
                            
                            <div class="form-check mt-3">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">I Accept <a href="#" class="text-primary">Terms And Condition</a></label>
                            </div> -->
                </div>

                <div class="col-md-6">
                    <img src="{{asset('web/images/services/EMI-image-1.png')}}" alt="" width="100%">
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
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
    <div class="position-relative">
        <div class="shape overflow-hidden text-light">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- Hero End -->


    <section class=" bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">

                        <h4 class="title mb-4">Awesome Features of Cash Collection</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">Cash Collection service has numerous benefits
                            which makes it one among the <span class="text-primary fw-bold">best business
                                solutions.</span></p>
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
                            <h5 class="mt-4"><a href="javascript:void(0)" class="title text-dark">40+ Partners</a>
                            </h5>
                            <p class="text-muted">Customers and collection agents can deposit EMIs for 40+ partners at
                                your store and you get commission on every transaction.</p>

                            <!-- <a href="javascript:void(0)" class="text-primary">Read More <i class="uil uil-angle-right-b align-middle"></i></a> -->
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
                            <h5 class="mt-4"><a href="javascript:void(0)" class="title text-dark">24/7
                                    Operational</a></h5>
                            <p class="text-muted">Customers can deposit EMI against their loan whenever they want, no
                                need to wait at long ques in NBFCâ€™s offices.</p>


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
                            <h5 class="mt-4"><a href="javascript:void(0)" class="title text-dark">Increase
                                    Footfall</a></h5>
                            <p class="text-muted">With cash management services you enjoy more foot falls at your
                                store, it helps you in getting more revenue from other services.</p>


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
                            <h5 class="mt-4"><a href="javascript:void(0)" class="title text-dark">Seamless
                                    Settlement</a></h5>
                            <p class="text-muted">Whether it is outside of banking hours or on public holidays, cash
                                management services allow you to quickly convert physical cash into digital cash.</p>


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
                            <h5 class="mt-4"><a href="javascript:void(0)" class="title text-dark">Quick Fund
                                    Settlement</a></h5>
                            <p class="text-muted">The service is directly lined to partnerâ€™s server; the bill gets
                                quickly settled whenever any customer makes any cash deposit against any EMI.</p>


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
                            <h5 class="mt-4"><a href="javascript:void(0)" class="title text-dark">Safe & Secure</a>
                            </h5>
                            <p class="text-muted">Digital payments are conducted over encrypted and safe mechanisms,
                                thus ensuring conversion of cash from physical to digital remains genuinely secure.</p>


                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->




        <section class="padding_50 bg-light mt-0 mt-md-5" style="    background: #fff !important;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="title mb-4"><span class="text-primary fw-bold">EMI & Cash</span> Collection
                                Partners</h4>
                            <p class="text-muted">PurnPay has integrated with 70+ NBFCs, Financial Institutions and
                                E-Commerce companies for whom cash can be collected at PurnPay stores.</p>

                            <!-- <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary fw-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p> -->
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="owl-carousel">

                    <div> <img src="{{asset('web/images/emi/1.jpg')}}" class="" alt=""> </div>

                    <div> <img src="{{asset('web/images/emi/2.jpg')}}" class="" alt=""> </div>

                    <div> <img src="{{asset('web/images/emi/3.jpg')}}" class="" alt=""> </div>

                    <div> <img src="{{asset('web/images/emi/4.jpg')}}" class="" alt=""> </div>

                    <div> <img src="{{asset('web/images/emi/5.jpg')}}" class="" alt=""> </div>

                    <div> <img src="{{asset('web/images/emi/6.jpg')}}" class="" alt=""> </div>

                    <div> <img src="{{asset('web/images/emi/7.jpg')}}" class="" alt=""> </div>

                    <div> <img src="{{asset('web/images/emi/8.jpg')}}" class="" alt=""> </div>


                    <div> <img src="{{asset('web/images/emi/9.jpg')}}" class="" alt=""></div>

                    <div> <img src="{{asset('web/images/emi/10.jpg')}}" class="" alt=""></div>

                    <div> <img src="{{asset('web/images/emi/11.jpg')}}" class="" alt=""> </div>

                    <div> <img src="{{asset('web/images/emi/12.jpg')}}" class="" alt=""> </div>

                    <div> <img src="{{asset('web/images/emi/13.jpg')}}" class="" alt=""> </div>
                    <div> <img src="{{asset('web/images/emi/14.jpg')}}" class="" alt=""> </div>


                </div>
            </div><!--end container-->
        </section>




        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <img src="{{asset('web/images/services/EMI-image-2.png')}}" class="img-fluid rounded-md shadow-lg" alt="">
                </div><!--end col-->

                <div class="col-lg-7 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="section-title text-md-start text-center ms-lg-4">
                        <h4 class="title mb-4">Cash Deposit in ICICI Bank Accounts</h4>
                        <p class="text-muted mb-0 para-desc">A unique business opportunity by <span
                                class="text-primary fw-bold">PurnPay </span> wherein you can accept cash deposits for
                            ICICI Bank account holders and earn commission on every transaction.</p>

                        <div class="d-flex align-items-center text-start mt-4 pt-2">
                            <div class="text-primary h4 mb-0 me-3 p-3 rounded-md shadow bg-white">
                                <i class="uil uil-capture"></i>
                            </div>
                            <div class="flex-1">
                                <a href="javascript:void(0)" class="text-dark h6">Instant bank account top-up as soon
                                    as the transaction is done</a>
                            </div>
                        </div>

                        <div class="d-flex align-items-center text-start mt-4">
                            <div class="text-primary h4 mb-0 me-3 p-3 rounded-md shadow bg-white">
                                <i class="uil uil-file"></i>
                            </div>
                            <div class="flex-1">
                                <a href="javascript:void(0)" class="text-dark h6">Can deposit amount in bank 24/7. No
                                    fixed banking hours</a>
                            </div>
                        </div>

                        <div class="d-flex align-items-center text-start mt-4">
                            <div class="text-primary h4 mb-0 me-3 p-3 rounded-md shadow bg-white">
                                <i class="uil uil-credit-card-search"></i>
                            </div>
                            <div class="flex-1">
                                <a href="javascript:void(0)" class="text-dark h6">Instant commission on every
                                    transaction</a>
                            </div>
                        </div>



                        <div class="d-flex align-items-center text-start mt-4">
                            <div class="text-primary h4 mb-0 me-3 p-3 rounded-md shadow bg-white">
                                <i class="uil uil-folder-check"></i>
                            </div>
                            <div class="flex-1">
                                <a href="javascript:void(0)" class="text-dark h6">Fully secured, OTP is triggered on
                                    the mobile number</a>
                            </div>
                        </div>


                        <div class="d-flex align-items-center text-start mt-4">
                            <div class="text-primary h4 mb-0 me-3 p-3 rounded-md shadow bg-white">
                                <i class="uil uil-analysis"></i>
                            </div>
                            <div class="flex-1">
                                <a href="javascript:void(0)" class="text-dark h6">Free beneficiary name verification
                                    before transaction to ensure right transaction</a>
                            </div>
                        </div>


                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
@endsection
@extends('web.app')

@section('content')
    <section class="padding_200 d-table w-100 ">
        <div class="container">
            <div class="row mt-5 align-items-center">
                <div class="col-lg-7 col-md-7">
                    <div class="title-heading me-lg-4">
                        <!-- <h1 class="heading mb-3"><span class="text-primary fw-bold">Money Transfer Business</span> Join PurnPay  and earn up to 50,000 per month</h1> -->
                        <H1> Money Transfer Business</H1>
                        <p>Join PurnPay and earn up to 1 Lakh per month</p>
                        <p class="para-desc text-muted">PurnPay has introduced a Domestic <span class="fw-bold">Money
                                Transfer Business</span> opportunity for all its partners to assist customers who want
                            to transfer money online to their near ones. This unique business model aims at helping the
                            migrants, laborers, and underbanked population of India. Kick start your own agency to
                            provide <span class="fw-bold">money remittance service</span> to customers with PurnPay to
                            give a boost to your earnings.</p>
                        <div class="mt-4">
                            <a href="#lead_form" class="btn btn-primary mt-2 me-2"><i class="uil uil-envelope"></i>
                                Start your own Money Transfer Business</a>

                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-5 col-md-5 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <img src="{{asset('web/images/services/Money-Transfer-1.png')}}" alt="Money transfer services - Biznet" width="100%">
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


    <!-- Start -->
    <section class="padding_class border-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <!--<h2 class="title mb-4">Domestic <span class="text-primary fw-bold">Money Transfer </span>Service | Remittance Online</h2> -->
                        <H2> Domestic Money Transfer Service | Remittance Online</H2>
                        <p class="text-muted para-desc mb-0 mx-auto">Money Transfer is easy to start business. All you
                            need to do is to Sign up to PurnPay by uploading KYC. After verification is completed,
                            retailers can activate a <span class="fw-bold">Domestic Money Transfer Business</span> free
                            of cost.The service has numerous benefits which makes it a win-win for retailers as well as
                            customers.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-lg-4 col-md-6 mt-5">
                    <div class="d-flex features feature-clean">
                        <div class="icons text-primary text-center mx-auto">
                            <i class="uil uil-comment-verify d-block rounded h3 mb-0"></i>
                        </div>
                        <div class="flex-1 content ms-4">
                            <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark">Cash to Bank</a></h5>
                            <p class="text-muted mb-0">The sender need not have a bank account, just an active mobile
                                number to do a transaction.</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 mt-5">
                    <div class="d-flex features feature-clean">
                        <div class="icons text-primary text-center mx-auto">
                            <i class="uil uil-image d-block rounded h3 mb-0"></i>
                        </div>
                        <div class="flex-1 content ms-4">
                            <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark">High Limit</a></h5>
                            <p class="text-muted mb-0">A customer can transfer up to Rs.25,000 per month using a single
                                unique phone number.</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 mt-5">
                    <div class="d-flex features feature-clean">
                        <div class="icons text-primary text-center mx-auto">
                            <i class="uil uil-video d-block rounded h3 mb-0"></i>
                        </div>
                        <div class="flex-1 content ms-4">
                            <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark">Instant Transfer</a>
                            </h5>
                            <p class="text-muted mb-0"><span class="fw-bold">Transfer money</span> online to any bank
                                account in the country 24/7, irrespective of banking hours.</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 mt-5">
                    <div class="d-flex features feature-clean">
                        <div class="icons text-primary text-center mx-auto">
                            <i class="uil uil-database-alt d-block rounded h3 mb-0"></i>
                        </div>
                        <div class="flex-1 content ms-4">
                            <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark">Confirmation SMS</a>
                            </h5>
                            <p class="text-muted mb-0">Immediate confirmation to sender via SMS as soon as the
                                transaction is successfully completed</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 mt-5">
                    <div class="d-flex features feature-clean">
                        <div class="icons text-primary text-center mx-auto">
                            <i class="uil uil-users-alt d-block rounded h3 mb-0"></i>
                        </div>
                        <div class="flex-1 content ms-4">
                            <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark">Fully Secured</a></h5>
                            <p class="text-muted mb-0">Multiple security measures in place to ensure complete safety
                                from start to end of transaction.</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 mt-5">
                    <div class="d-flex features feature-clean">
                        <div class="icons text-primary text-center mx-auto">
                            <i class="uil uil-apps d-block rounded h3 mb-0"></i>
                        </div>
                        <div class="flex-1 content ms-4">
                            <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark">High Commission</a>
                            </h5>
                            <p class="text-muted mb-0">Get best commission in the industry on every transaction and
                                that too real time in the wallet.</p>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <!-- <div class="row justify-content-center">
                    <div class="col-12 mt-5">
                        <div class="text-center">
                            <a href="javascript:void(0)" class="btn btn-primary m-1">Get Started <i class="uil uil-angle-right-b"></i></a>
                            <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="btn btn-icon btn-pills btn-primary m-1 lightbox"><i data-feather="video" class="icons"></i></a><span class="fw-bold text-uppercase small align-middle ms-1">Watch Now</span>
                        </div>
                    </div>
                </div> end row-->
        </div><!--end container-->
    </section>

    <section class=" bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="{{asset('web/images/services/Money-Transfer-2.png')}}" class="img-fluid"
                        alt="Benefits of starting your online Money Transfer business - PurnPay ">
                </div><!--end col-->

                <div class="col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title ms-lg-5">
                        <h3 class="title mb-4">Benefits of starting your <span class="text-primary">online Money
                                Transfer</span> business</h3>

                        <ul class="list-unstyled text-muted">
                            <li class="mb-0"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Instant and real-time
                                commission on every transaction.</li>
                            <li class="mb-0"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Great Income opportunity
                                without any investment as Money Transfer Distributor.</li>
                            <li class="mb-0"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Money remittance service
                                will attract more customers to your outlet by improving your service portfolio.</li>
                            <li class="mb-0"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Save time conduct
                                transactions through PurnPay Mobile App or Web Portal.</li>

                        </ul>

                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section>

    <section class="">
        <div class="container mt-60">
            <div class="row align-items-center">
                <div class="col-md-6 order-1 order-md-2">
                    <img src="{{asset('web/images/Why-PurnPay-(2).png')}}" alt="Why Join PurnPay " class="img-fluid" class="img-fluid">
                </div><!--end col-->

                <div class="col-md-6 order-2 order-md-1">
                    <div class="section-title ms-lg-5">
                        <h4 class="title mb-4">Why <span class="text-primary fw-bold">PurnPay </span>?</h4>

                        <ul class="list-unstyled text-muted">
                            <li class="mb-0"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>PurnPay have the least
                                charges in the industry.</li>
                            <li class="mb-0"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Domestic Money transfer is
                                integrated with multiple banks in India to ensure 99.9% uptime. </li>
                            <li class="mb-0"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>The <span
                                    class="fw-bold">money transfer services franchise</span> associated with us gets
                                instant and real-time commission on every transaction credited to their PurnPay wallet.
                            </li>

                            <li class="mb-0"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Our secure, instant and
                                easy remittance service allows <span class="fw-cold">money transfer agents</span> to
                                send money
                                online to any bank account in India in a fast and seamless manner.. </li>

                            <li class="mb-0"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Our experienced service
                                personnel are equipped to handle all queries.</li>

                            <li class="mb-0"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Seamless process designed
                                to reduce transaction time and effort using our portal.</li>

                        </ul>

                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

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


        <div class="container mt-100 mt-60 mb-5">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">You Have Any <span class="text-primary fw-bold">Questions?</span></h4>

                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="container mt-50 mt-60">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-6">
                        <div class="accordion" id="accordionExample">





                            <div class="accordion-item rounded shadow">
                                <h2 class="accordion-header" id="headingOne-">
                                    <button class="accordion-button border-0 bg-light" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne-" aria-expanded="true"
                                        aria-controls="collapseOne-"> How much a Money Transfer Agent can earn in a
                                        Month?
                                    </button>
                                </h2>
                                <div id="collapseOne-" class="accordion-collapse border-0 collapse show"
                                    aria-labelledby="headingOne-" data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-muted bg-white">
                                        <p> Money transfer agent at rural, scattered and untapped markets, can fetch the
                                            money transfer agency about Rs 50,000 and more a month. PurnPay also guide
                                            and trains agents on how they can increase their earnings.</p>

                                    </div>
                                </div>
                            </div>





                            <div class="accordion-item rounded shadow">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button border-0 bg-light" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                                        aria-controls="collapseOne">What is the cost of a Money Transfer business Setup
                                        ?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse border-0 collapse"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-muted bg-white">
                                        <p> At PurnPay To start the domestic money transfer business/ money transfer
                                            agency, user requires only a smartphone with an internet connection or a
                                            computer system. So with Paynims hardly any cost is involved 0 system down
                                            time.</p>

                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item rounded shadow mt-2">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button border-0 bg-light collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        Who uses Money Transfer Service?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse border-0 collapse"
                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-muted bg-white">
                                        <p>Migrants, daily wage workers, who cannot spend an entire day to go to the
                                            bank to deposit or transfer money or who are unable to transfer money via
                                            internet banking as they are either not that technology friendly or are not
                                            having the means. </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item rounded shadow mt-2">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button border-0 bg-light collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        What types of transaction mode are available?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse border-0 collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-muted bg-white">
                                        <p> The Money Transfer agency can transfer money to any part of India with least
                                            charges in the industry. To transfer this money, Money transfer agents can
                                            use NEFT and IMPS mode to transfer it to any part within the borders of
                                            India.</p>

                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item rounded shadow mt-2">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button border-0 bg-light collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        How will I get transaction commission?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse border-0 collapse"
                                    aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-muted bg-white">
                                        <p>Real and on-time commission is granted to all our Domestic Money Transfer
                                            distributors on each transaction made. Once a money transfer is done, the
                                            decided percentage of commission will be instantly credited to agents
                                            PurnPay wallet.</p>
                                    </div>
                                </div>
                            </div>


                            <!-- <div class="accordion-item rounded shadow mt-2">
                                <h2 class="accordion-header" id="headingfive">
                                    <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                        How to become Money Transfer Agent?
                                    </button>
                                </h2>
                                <div id="collapsefive" class="accordion-collapse border-0 collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-muted bg-white">
                                        <p>Money Transfer is easy to start business. All you need to do is to Sign up to PurnPay  by uploading KYC. After verification is completed, retailer can activate Domestic Money Transfer account free of cost. </p>
                                    </div>
                                </div>
                            </div> -->



                            <div class="accordion-item rounded shadow mt-2">
                                <h2 class="accordion-header" id="headingsix">
                                    <button class="accordion-button border-0 bg-light collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false"
                                        aria-controls="collapsesix">
                                        How to check Application status?
                                    </button>
                                </h2>
                                <div id="collapsesix" class="accordion-collapse border-0 collapse"
                                    aria-labelledby="headingsix" data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-muted bg-white">
                                        <p>Status of Domestic Money Transfer Business ID can be reflected in the status
                                            column after application is made.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-item rounded shadow mt-2">
                                <h2 class="accordion-header" id="headingseven">
                                    <button class="accordion-button border-0 bg-light collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseseven" aria-expanded="false"
                                        aria-controls="collapseseven">
                                        How does a money transfer agency work?
                                    </button>
                                </h2>
                                <div id="collapseseven" class="accordion-collapse border-0 collapse"
                                    aria-labelledby="headingseven" data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-muted bg-white">
                                        <ul>
                                            <li>Customer hands over the cash to agent in franchise along with his/her
                                                mobile number, Beneficiary bank account number, Bank name & IFSC code.
                                            </li>
                                            <li>Agent Completes the transaction by entering details in the PurnPay
                                                portal</li>
                                            <li>Once the transaction is completed, the receiver gets the amount credited
                                                with the said amount and the sender gets a message of the same.</li>
                                            <li>Money transfer agent gets a handsome commission on the money transfer
                                                facility that has been availed by him to the customer.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>



                            <div class="accordion-item rounded shadow mt-2">
                                <h2 class="accordion-header" id="headingeight">
                                    <button class="accordion-button border-0 bg-light collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseeight" aria-expanded="false"
                                        aria-controls="collapseeight">
                                        What is the Transaction Fees?
                                    </button>
                                </h2>
                                <div id="collapseeight" class="accordion-collapse border-0 collapse"
                                    aria-labelledby="headingseven" data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-muted bg-white">
                                        <div class="">
                                            <table class="money_t_table">
                                                <tr>
                                                    <th>Amount</th>
                                                    <th>Customer Charge</th>
                                                </tr>

                                                <tr>
                                                    <td>Rs. 10 - 1000 </td>
                                                    <td>Flat charge with inclusive of taxes</td>
                                                </tr>

                                                <tr>
                                                    <td>Rs. 1001 - 5000 </td>
                                                    <td>1% of transaction amount (Including taxes)</td>
                                                </tr>

                                            </table>
                                        </div>
                                        <br>
                                        <p>Maximum Permissible Amount Per Transaction: Rs. 5000 <br>
                                            Maximum Permissible Amount per month per Sender: Rs. 25000</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item rounded shadow mt-2">
                                <h2 class="accordion-header" id="headingnine">
                                    <button class="accordion-button border-0 bg-light collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapsenine" aria-expanded="false"
                                        aria-controls="collapsenine">
                                        Benefits of DMT to Customers
                                    </button>
                                </h2>
                                <div id="collapsenine" class="accordion-collapse border-0 collapse"
                                    aria-labelledby="headingnine" data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-muted bg-white">
                                        <ul>
                                            <li>Transfer Funds to any destination within India instantly and even on
                                                Sundays.</li>
                                            <li>Available 24*7 on all bank holidays.</li>
                                            <li>Safe and Secure transaction.</li>
                                            <li>Transfer of Cash to Bank Account.</li>
                                            <li>Transfer upto Rs. 25,000 with a single phone number.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-5 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <img src="{{asset('web/images/illustrator/faq.svg')}}" alt="PurnPay  â€“ FAQs"">
                    </div><!--end col-->
                </div><!--end row-->
            </div>
        </div>

    </section>
@endsection

@extends('web.app')

@section('content')
<section class="padding_200 d-table w-100 overflow-hidden" id="home">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-7">
                <div class="title-heading mt-4">

                    <h1 class="heading mb-3"><span class="text-primary fw-bold">PurnPay MicroATM</span></h1>
                    <p class="para-desc text-muted">Convert your store into an <span
                            class="text-primary fw-bold">ALL BANK ATM!</span></p>
                    <p class="para-desc text-muted">It is one of a kind opportunity to convert you shop in to an
                        ATM by deploying <span class="text-primary fw-bold">PurnPay </span> Mini ATM machine and
                        earn commission on every transaction.
                    </p><a href="#lead_form" class="btn btn-primary mt-2 me-2"><i class="uil uil-envelope"></i>
                        Get Started</a>

                </div>
            </div><!--end col-->

            <div class="col-lg-5 col-md-5 mt-4 pt-2 mt-sm-0 pt-sm-0">
                <div class="classic-app-image position-relative">
                    <div class=" position-relative">
                        <img src="{{asset('web/images/products/Morefunlite.jpg')}}" class=" mx-auto d-block "
                            alt="Micro ATM - PurnPay " width="60%">
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

<section class="padding_class  overflow-hidden">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">

                    <h2 class="title mb-4">What is the use of Micro ATM machine? </h2>
                    <p class="text-muted para-desc mx-auto mb-0">Customers can visit their nearest <span
                            class="text-primary fw-bold">PurnPay agent</span> and do all these transactions using
                        their debit card just like in an ATM.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            <div class="col-md-4 col-12 mt-4 pt-2">
                <div class="card text-center rounded border-0">
                    <div class="card-body">
                        <div class="p-3 bg-light rounded shadow d-inline-block">
                            <img src="{{asset('web/images/icon/art-and-design.svg')}}" class="avatar avatar-small" alt="">
                        </div>
                        <div class="mt-4">
                            <h5><a href="javascript:void(0)" class="text-dark">Balance Inquiry: </a></h5>
                            <p class="text-muted mt-3 mb-0"> Agent can check the balance of the customer simply in
                                less than a minute by using PurnPay portal or mobile application and customerâ€™s
                                debit card.</p>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-md-4 col-12 mt-4 pt-2">
                <div class="card text-center bg-primary bg-gradient rounded border-0">
                    <div class="card-body">
                        <div class="p-3 bg-light rounded shadow d-inline-block">
                            <img src="{{asset('web/images/icon/smartphone.svg')}}" class="avatar avatar-small" alt="">
                        </div>
                        <div class="mt-4">
                            <h5><a href="javascript:void(0)" class="text-white title-dark">Cash Withdrawal: </a>
                            </h5>
                            <p class="text-white-50 mt-3 mb-0">Instead of searching for an ATM, Agents from PurnPay
                                can convert their own store into an ATM. Customers can withdraw money using only
                                their debit card.</p>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-md-4 col-12 mt-4 pt-2">
                <div class="card text-center rounded border-0">
                    <div class="card-body">
                        <div class="p-3 bg-light rounded shadow d-inline-block">
                            <img src="{{asset('web/images/icon/clock.svg')}}" class="avatar avatar-small"
                                alt="Miro ATM Transaction - PurnPay ">
                        </div>
                        <div class="mt-4">
                            <h5><a href="javascript:void(0)" class="text-dark">Sale Transaction:</a></h5>
                            <p class="text-muted mt-3 mb-0">The same device being used for cash withdrawal can also
                                be used as a POS terminal to accept payments from the customers through their debit
                                or credit cards</p>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->


</section>

<section class="section bg-light padding_200">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 order-2 order-md-1 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="section-title me-lg-5">
                    <h4 class="title mb-4">What is Micro ATM? </h4>
                    <p class="text-muted">Micro ATM or Mini ATM machine is a portable, handheld card swipe terminal
                        used to dispense cash, in locations where bank ATMs cannot reach. A Mini ATM operates as a
                        unique â€œBank-in-a Boxâ€, allowing customers to withdraw cash and know their balance. This
                        payment solution is aimed at taking branchless banking to the last mile. Micro ATM, just as
                        the name suggests, are smaller portable versions of ATMs and can help you boost your income
                        in minimal investment as the Micro ATM price is very less and earnings are high. </p>
                    <p>According to the data released, only 5% of the rural population has access to ATMs. This
                        leaves huge gap in the availability of ATM services in these areas. This is an initiative by
                        the government of India, as it is commercially viable to have more Micro ATMs rather than
                        having more ATMs.</p>

                    <!-- <a href="javascript:void(0)" class="btn btn-outline-primary">Start Now <i class="uil uil-angle-right-b"></i></a>-->
                </div>
            </div><!--end col-->

            <div class="col-md-6 order-1 order-md-2">
                <img src="{{asset('web/images/services/MATM-Top-image.png')}}" class="img-fluid"
                    alt="What is Micro ATM - PurnPay ">
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section>



<section class=" ">
    <div class="container mt-100 mt-60">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6 col-12 order-1 order-md-2">
                <img src="{{asset('web/images/products/MF919.jpg')}}" class="" alt="Micro ATM Features - PurnPay "
                    width="80%">
            </div><!--end col-->

            <div class="col-lg-7 col-md-6 col-12 order-2 order-md-1 mt-4 pt-2 mt-sm-0 pt-sm-0">
                <div class="section-title me-lg-4">
                    <!--<p class="text-primary h2 mb-3"><i class="uil uil-layer-group"></i></p>-->
                    <h4 class="title mb-3">Key Features of <span class="text-primary fw-bold">Micro ATM</span>
                        machine </h4>

                    <ul class="list-unstyled text-muted">
                        <li class="mb-0"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>PurnPay Micro ATM accepts
                            all Debit cards, be it Chip & Pin or Magnetic Swipe or NFC* (Near Field Communication).
                        </li>
                        <li class="mb-0"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>Using the PurnPay Micro
                            ATM, you can now accept debit cards as a mode of payment for your business.</li>
                        <li class="mb-0"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>Safe and secure
                            transaction with your trusted retailer and the PurnPay Micro ATM.</li>
                        <li class="mb-0"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>After the transaction is
                            completed a payment receipt is produced, which can further be printed or shared directly
                            via email or Whatsapp.</li>
                        <li class="mb-0"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>Real Time Commission on
                            each transaction in your PurnPay wallet.</li>
                        <li class="mb-0"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>Micro ATM price is very
                            less, enabling a high Return on Investment.</li>
                    </ul>

                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->


</section>



<section class="section">


    <!-- right content -->

    <div class="container mt-75 mt-60">


        <div class="title-heading text-center" style="padding:0px 0px 50px 0px">
            <h2 class="heading mb-3"><span class="text-primary fw-bold">Micro ATM</span> Machine Benefits</h2>
            <p>This service is a win-win for everyone as it offers numerous advantages to everyone be it the
                retailer or the customer.</p>
        </div>


        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <img src="{{asset('web/images/services/For-Retailers.png')}}" class="img-fluid shadow rounded" alt=""
                    width="Micro ATM Benefits for Retailers - PurnPay ">
            </div><!--end col-->

            <div class="col-lg-6 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="section-title ms-lg-5">
                    <h4 class="title mb-4">For <span class="text-primary fw-bold">Retailers</span></h4>

                    <ul class="list-unstyled text-muted">
                        <li class="mb-0"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>The Micro ATM Business
                            requires no extra setup, but it does ensure you an additional source of income.</li>
                        <li class="mb-0"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>PurnPay Micro ATM accepts
                            all Debit cards, be it Chip & Pin or Magnetic Swipe or NFC* (Near Field Communication).
                        </li>

                        <li class="mb-0"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>Get Maximum Utilization of
                            the cash at hand. High income at low investment.</li>

                        <li class="mb-0"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>After the transaction is
                            completed a payment receipt is produced, which can further be printed or shared directly
                            via email or Whatsapp.</li>

                        <li class="mb-0"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>An increase in the bouquet
                            of services offered to the customers will ensure an increase in number of customers.
                        </li>
                        <li class="mb-0"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>It is cost effective as
                            Micro ATM Price is very low and a smart tool for cash management at the store.</li>
                    </ul>
                    <a href="javascript:void(0)" class="h6 btn btn-primary mt-2 me-2">Join Now <i
                            class="uil uil-angle-right-b"></i></a>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div>

    <!-- right content -->


    <!-- left content -->

    <div class="container mt-100 mt-60">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-6 order-2 order-md-1 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="section-title me-lg-5">
                    <h4 class="title mb-4">For <span class="text-primary fw-bold">Customers</span></h4>

                    <ul class="list-unstyled text-muted">
                        <li class="mb-0"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>Eliminate the need to
                            travel long distances in search for ATMs to meet your cash needs.</li>
                        <li class="mb-0"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>No need to wait in long
                            queues in Banks and/or ATMs.</li>

                        <li class="mb-0"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>Safe and secure
                            transaction with your trusted retailer and the PurnPay Micro ATM machine.</li>

                        <li class="mb-0"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>Many a times after
                            reaching the Bank ATM, we come to know that it has either run out of cash or is closed
                            for repairs, no such problem will occur with the Micro ATM Machine.</li>

                        <li class="mb-0"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>Micro ATM Machine operates
                            24/7 and no issues of cash being stuck, and balance being cut at bank.</li>
                    </ul>
                    <a href="javascript:void(0)" class="h6 btn btn-primary mt-2 me-2">Join Now<i
                            class="uil uil-angle-right-b"></i></a>
                </div>
            </div><!--end col-->

            <div class="col-lg-5 col-md-6 order-1 order-md-2">
                <img src="{{asset('web/images/services/For-customers.png')}}" alt="Micro ATM Benefits for Customers - PurnPay "
                    width="100%">
            </div><!--end col-->
        </div><!--end row-->
    </div>

    <!-- left content -->

    <!-- right content -->

    <div class="container mt-60 padding_100">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <img src="{{asset('web/images/services/How-to-withdraw.png')}}" class="img-fluid "
                    alt="Withdraw Money From Micro ATM - PurnPay ">
            </div><!--end col-->

            <div class="col-lg-6 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="section-title ms-lg-5">
                    <h4 class="title mb-4">How to withdraw money from <span class="text-primary fw-bold">Micro
                            ATM</span> machine?</h4>


                    <ul class="list-unstyled text-muted">
                        <li class="mb-0"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>The customer reaches the
                            store along with his Debit card.</li>
                        <li class="mb-0"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>The store manager will
                            swipe your card along the PurnPay Micro ATM machine.</li>

                        <li class="mb-0"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>The Micro ATM Machine will
                            be connected to an Android phone, where the retailer will log into the PurnPay Mobile
                            Application and choose the Micro ATM Option.</li>

                        <li class="mb-0"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>The retailer will then
                            input the amount of cash to be withdrawn by the customer, which will be verified by the
                            customer.</li>


                        <li class="mb-0"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>The customer will enter
                            the PIN of the Debit card, and the transaction is done!</li>


                    </ul>

                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div>

    <!-- right content -->

    <!-- left content -->

    <div class="container padding_50 mt-60">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-6 order-2 order-md-1 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="section-title me-lg-5">
                    <h4 class="title mb-4">How to get <span class="text-primary fw-bold">Micro ATM</span> machine?
                    </h4>
                    <p class="text-muted">A form is required to be filled by you to become a PurnPay
                        Retailer/Distributor and these documents to be submitted for verification:</p>

                    <ul class="list-unstyled text-muted">
                        <li class="mb-0"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>Aadhaar Card</li>
                        <li class="mb-0"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>PAN Card</li>


                    </ul>

                    <p class="text-muted">To learn more about the Micro ATM price and registration and to partner
                        with PurnPay to start your own Micro ATM business immediately and hassle-free kindly fill
                        the form to register with us today. Once verification process is completed, we will get in
                        touch with you to dispatch your Micro ATM machine.</p>

                    <p class="text-muted">The money which is given in cash is credited to the PurnPay wallet of the
                        retailer, REAL TIME , along with the commission.</p>

                </div>
            </div><!--end col-->

            <div class="col-lg-5 col-md-6 order-1 order-md-2">
                <img src="{{asset('web/images/services/How-to-get-Micro-ATM-machine.png')}}" alt="Get PurnPay  Micro ATM"
                    width="100%">
            </div><!--end col-->
        </div><!--end row-->
    </div>

    <!-- left content -->

    <div class="container mt-100 mt-60">
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
                                    aria-controls="collapseOne-"> What is the cost of a Micro ATM Machine?
                                </button>
                            </h2>
                            <div id="collapseOne-" class="accordion-collapse border-0 collapse show"
                                aria-labelledby="headingOne-" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-muted bg-white">
                                    <p>PurnPay offers wide range of Micro ATM machines starting from Rs.1499/- to
                                        Rs.14999/- all incl. & refurbished price as Rs.599/- depending on the kind
                                        of machine the user is buying.</p>


                                </div>
                            </div>
                        </div>





                        <div class="accordion-item rounded shadow">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button border-0 bg-light" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                                    aria-controls="collapseOne">Which Service Can Be Offered By Micro ATM Machine?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse border-0 collapse"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-muted bg-white">
                                    <p> Agents can offer Cash withdrawal, Mini statement check, Balance Inquiry to
                                        customers without the long queues and the disappointment of cash being over
                                        at the ATM.</p>

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item rounded shadow mt-2">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button border-0 bg-light collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    How will the Micro ATM Agent get commission?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse border-0 collapse"
                                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-muted bg-white">
                                    <p>PurnPay offers instant and real time commission to its Micro ATM agents.
                                        This commission gets reflected in the wallet of your PurnPay portal
                                        immediately as you do a transaction on Micro ATM machine.
                                    </p>

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item rounded shadow mt-2">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button border-0 bg-light collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree">
                                    Why PurnPay Micro ATM?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse border-0 collapse"
                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-muted bg-white">
                                    <ul>
                                        <li>Handsome Commission structure for agents</li>
                                        <li>Lowest pricing structure of Micro ATM Machine </li>
                                        <li>Safety and security of transactions from Micro ATM Machine </li>
                                        <li>Real time commission on each transaction carried on Micro ATM Machine.
                                        </li>
                                        <li>Grievance Support all our customer queries regarding Micro ATM machine.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item rounded shadow mt-2">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button border-0 bg-light collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                    aria-expanded="false" aria-controls="collapseFour">
                                    What is the Time Duration for Micro Atm Installation at a Retail shop?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse border-0 collapse"
                                aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-muted bg-white">
                                    <p>Micro ATM reaches the user in 4-7 days after the order is placed. Within this
                                        time, the activation process of the Mini ATM machine takes place
                                        simultaneously. Once the Micro ATM has reached the customer, our team will
                                        train them regarding the process and they can start using it immediately!
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="accordion-item rounded shadow mt-2">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                   What is the Time Duration for Micro Atm Installation atÂ  a Retail shop?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse border-0 collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-muted bg-white">
                                    <p>The Micro ATM machine installation is a seamless process right from
       beginning of the order to the end.</p>
      <p>	As soon as the partner orders the Micro ATM machine, PurnPay  team
       dispatches the Micro ATM machine and it reaches the user in 4-7 days.</p>
      <p>	Within this time, the activation process of the Mini ATM machine takes place
       simultaneously. Once the Micro ATM has reached the customer, our team will
       train them regarding the process and they can start using it immediately!
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div><!--end col-->

                <div class="col-lg-5 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <img src="{{asset('web/images/illustrator/faq.svg')}}" alt="">
                </div><!--end col-->
            </div><!--end row-->
        </div>
    </div>

</section>
@endsection
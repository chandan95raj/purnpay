@extends('web.app')

@section('content')
<section class="bg-half-170 d-table w-100 padding_100">
    <div class="container">
        <div class="row mt-5 align-items-center">
            <div class="col-lg-7 col-md-7">
                <div class="title-heading me-lg-4">
                    <h1 class="heading mb-3">Payment Solutions<br><span class="text-primary"
                            style="font-size: 26px;">Collecting Payments was Never this Easy!</span> </h1>
                    <p class="para-desc text-muted">PurnPay brings to you not one or two but 4 different ways of
                        accepting payments form your customers at the click of a button.</p>
                    <div class="mt-4">
                        <a href="#lead_form" class="btn btn-primary mt-2 me-2"><i class="uil uil-envelope"></i>
                            Get Started</a>

                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-5 col-md-5 mt-4 pt-2 mt-sm-0 pt-sm-0">
                <img src="{{asset('web/images/services/Payment-Solution-top-image.png')}}" alt="" width="100%">
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

<section class="section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">

                    <h4 class="title mt-3 mb-4"><span class="text-primary fw-bold">PurnPay </span> Payment
                        Collection Solutions</h4>
                    <p class="text-muted para-desc mx-auto mb-0">One among the best solutions available in the
                        market for collecting payment against all your sales on the go with different modes of
                        payments.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div
                    class="card features feature-clean explore-feature p-4 px-md-3 border-0 rounded-md shadow text-center">
                    <div class="icons text-primary text-center mx-auto">
                        <i class="uil uil-envelope-lock d-block rounded h3 mb-0"></i>
                    </div>

                    <div class="card-body p-0 mt-4">
                        <h5>Lowest Charges</h5>
                        <p class="text-muted mb-0">Now collect payment from your customers free. Generate your own
                            QR code and get all payments at 0 cost.</p>

                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div
                    class="card features feature-clean explore-feature p-4 px-md-3 border-0 rounded-md shadow text-center">
                    <div class="icons text-primary text-center mx-auto">
                        <i class="uil uil-edit d-block rounded h3 mb-0"></i>
                    </div>

                    <div class="card-body p-0 mt-4">
                        <h5>Instant Activation</h5>
                        <p class="text-muted mb-0">All payment modes are activated as soon as you go live, instant
                            UPI code generation. The fastest way to collect payment.</p>

                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div
                    class="card features feature-clean explore-feature p-4 px-md-3 border-0 rounded-md shadow text-center">
                    <div class="icons text-primary text-center mx-auto">
                        <i class="uil uil-circle-layer d-block rounded h3 mb-0"></i>
                    </div>

                    <div class="card-body p-0 mt-4">
                        <h5>App and Web</h5>
                        <p class="text-muted mb-0">Collect payment on the go, all modes of payment collection are
                            available on both - web as well as android application.</p>

                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

</section>



<section class="padding_head_below">


    <!-- right content -->

    <div class="container mt-75 mt-60">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <img src="{{asset('web/images/services/Aadhaar-Pay.png')}}" width="80%" alt="">
            </div><!--end col-->

            <div class="col-lg-6 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="section-title ms-lg-5">
                    <h4 class="title mb-4">Aadhaar Pay</h4>
                    <p class="text-muted"><span class="text-primary fw-bold">Aadhaar Pay</span> is a payment
                        system which enables PurnPay retailers to collect payments from a customer using his Aadhaar
                        number and biometric authentication. As soon as the finger print is validated, the account
                        holder bank account is debited, and retailer gets the amount in his wallet instantly.</p>
                    <p class="text-muted">Features which makes it one of the best payment solutions.</p>
                    <ul class="list-unstyled text-muted">
                        <li class="mb-0"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>24/7 operability. No
                            dependence on banks.</li>
                        <li class="mb-0"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>Safest payment mode as its
                            based on biometric authentication</li>

                        <li class="mb-0"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>Instant top-up in wallet.
                            No delay in complete transaction cycle</li>

                        <li class="mb-0"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>Lower transaction charges
                            compared to debit or credit card</li>

                        <li class="mb-0"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>Cashless payment solution,
                            no need to carry any physical card.</li>

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
                    <h4 class="title mb-4">MPOS</h4>
                    <p class="text-muted"><span class="text-primary fw-bold">PurnPay MPOS</span> machine is a
                        solution for merchants who want to receive card payment anywhere, anytime, and who want to
                        extend additional services to their customers. It is also known as Mini Atm or Micro Atm a
                        terminal connected through Bluetooth to a mobile device and can read magnetic stripes,
                        contact less cards, and chip & pin cards.</p>
                    <ul class="list-unstyled text-muted">
                        <li class="mb-0"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>Accept card payments
                            (VISA/Master/Rupay Card).</li>
                        <li class="mb-0"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>Compatible with all
                            Android mobile devices.</li>

                        <li class="mb-0"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>Accept credit/debit card
                            payments anytime, anywhere with a Smartphone.</li>

                        <li class="mb-0"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>Retailers can start
                            accepting mobile payments instantly. Fast activation once successful KYC is done.</li>

                        <li class="mb-0"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>Card Data is encrypted by
                            M-POS reader before it is transmitted to the mobile app and the data are transmitted in
                            secure channel.</li>
                    </ul>
                    <a href="javascript:void(0)" class="h6 btn btn-primary mt-2 me-2">Join Now <i
                            class="uil uil-angle-right-b"></i></a>
                </div>
            </div><!--end col-->

            <div class="col-lg-5 col-md-6 order-1 order-md-2">
                <img src="{{asset('web/images/services/MPOS.png')}}" alt="" class="img-fluid">
            </div><!--end col-->
        </div><!--end row-->
    </div>

    <!-- left content -->

    <!-- right content -->

    <div class="container mt-100 mt-60">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <img src="{{asset('web/images/services/Payment-Link.png')}}" class="img-fluid shadow rounded" alt="">
            </div><!--end col-->

            <div class="col-lg-6 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="section-title ms-lg-5">
                    <h4 class="title mb-4">Payment Link</h4>
                    <p class="text-muted"><span class="text-primary fw-bold">Payment Link</span> is a request for
                        payment through a securely generated web link/url from PurnPay portal or application which
                        the recipient customers can click to make online payments instantly using different modes of
                        payments. This link can be shared across various communication channels like Email, SMS,
                        Whatsapp, social media, etc.</p>

                    <ul class="list-unstyled text-muted">
                        <li class="mb-0"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>Different modes of payment
                            options to choose from like â€“ debit card, credit card, internet banking, UPI, wallets
                            etc.</li>
                        <li class="mb-0"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>Instant and quick
                            transactions and real-time settlement in wallet. User can check status of any link
                            whenever he needs.</li>

                        <li class="mb-0"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>Different charges for
                            different payment modes. User can set the charge from his Back-office</li>

                        <li class="mb-0"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>Easy reconciliation and
                            accounting as all the reports are available at the click of a button.</li>


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
                    <h4 class="title mb-4">UPI & QR</h4>
                    <p class="text-muted"><span class="text-primary fw-bold">UPI - Unified Payments
                            Interface</span> is an instant real-time payment system developed by National Payments
                        Corporation of India facilitating inter-bank transactions. The interface is regulated by the
                        Reserve Bank of India and works by instantly transferring funds between two bank accounts on
                        a mobile platform. </p>
                    <p class="text-muted">The best part is that there is no need to enter bank account details such
                        as account number, IFSC code, while making the transfer. Only details required for funds
                        transfer is the VPA ID of customer or any UPI app.</p>
                    <ul class="list-unstyled text-muted">
                        <li class="mb-0"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>Zero charge on payment
                            collection through UPI or QR code</li>
                        <li class="mb-0"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>Instantly generate dynamic
                            QR for fixed amount and share it with the customer through Mail, Whatsapp, social media,
                            etc.</li>

                        <li class="mb-0"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>Customer can scan the QR
                            code from any UPI app like BHIM, Phonepe, Google Pay, Amazon Pay or any UPI enabled
                            bank.</li>

                        <li class="mb-0"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>Fastest way to collect
                            payment form the customer. Collect payment within a second from your customer.</li>

                        <li class="mb-0"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>Static QR code, which the
                            user can print and paste in his shop, which can be scanned though any UPI app and
                            instant payment can be made.</li>
                    </ul>
                    <a href="javascript:void(0)" class="h6 btn btn-primary mt-2 me-2">Join Now <i
                            class="uil uil-angle-right-b"></i></a>
                </div>
            </div><!--end col-->

            <div class="col-lg-5 col-md-6 order-1 order-md-2">
                <img src="{{asset('web/images/services/QR-Code.png')}}" alt="" class="img-fluid">
            </div><!--end col-->
        </div><!--end row-->
    </div>

    <!-- left content -->
</section>
@endsection
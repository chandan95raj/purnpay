@extends('web.app')

@section('content')
    <section class="section padding_200" id="courses">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4"><span class="text-primary fw-bold">Purnpay </span> - Shop</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Start shopping with <span
                                class="text-primary fw-bold">Purnpay .</span></p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 padding_25">
                    <div class="card courses-desc overflow-hidden rounded shadow border-0">
                        <div class="position-relative d-block overflow-hidden">
                            <img src="{{asset('web/images/products/UCube.jpg')}}" class="img-fluid rounded-top mx-auto" alt="">
                            <div class="overlay-work bg-dark"></div>
                            <a href="#" class="text-white h6 preview">Preview Now <i
                                    class="uil uil-angle-right-b align-middle"></i></a>
                        </div>

                        <div class="card-body">
                            <h5><a href="#" class="title text-dark fw-bold">MATM Feather Touch</a></h5>
                            <div class="text-warning">
                                <span class="mdi mdi-star"></span>
                                <span class="mdi mdi-star"></span>
                                <span class="mdi mdi-star"></span>
                                <span class="mdi mdi-star"></span>
                                <span class="mdi mdi-star-half"></span>
                                <span class="text-muted ps-2">31 Reviews</span>
                            </div>

                            <div class="fees d-flex justify-content-between">
                                <span class="price_dash">&#x20B9;<del>4,999.00</del></span>
                                <h4><span class="h6">&#x20B9;</span><b>4,499.00</b></h4>
                            </div>
                            <center><a href="javascript:;" data-bs-toggle="modal" data-bs-target="#myModal1"
                                    class="btn btn-primary">Enquire Now</a></center>
                        </div>
                    </div>
                </div><!--end col-->




                <! -- 2 -->

                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 padding_25">
                        <div class="card courses-desc overflow-hidden rounded shadow border-0">
                            <div class="position-relative d-block overflow-hidden">
                                <img src="{{asset('web/images/products/MosambeeQPOS.jpg')}}" class="img-fluid rounded-top mx-auto"
                                    alt="">
                                <div class="overlay-work bg-dark"></div>
                                <a href="#" class="text-white h6 preview">Preview Now <i
                                        class="uil uil-angle-right-b align-middle"></i></a>
                            </div>

                            <div class="card-body">
                                <h5><a href="#" class="title text-dark fw-bold">MATM Pro</a></h5>
                                <div class="text-warning">
                                    <span class="mdi mdi-star"></span>
                                    <span class="mdi mdi-star"></span>
                                    <span class="mdi mdi-star"></span>
                                    <span class="mdi mdi-star"></span>
                                    <span class="mdi mdi-star-half"></span>
                                    <span class="text-muted ps-2">17 Reviews</span>
                                </div>

                                <div class="fees d-flex justify-content-between">
                                    <span class="price_dash">&#x20B9;<del>4,999.00</del></span>
                                    <h4><span class="h6">&#x20B9;</span><b>2,999.00</b></h4>
                                </div>
                                <center><a href="javascript:;" data-bs-toggle="modal" data-bs-target="#myModal1"
                                        class="btn btn-primary">Enquire Now</a></center>
                            </div>
                        </div>
                    </div><!--end col-->


                    <!-- 3 -->


                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 padding_25">
                        <div class="card courses-desc overflow-hidden rounded shadow border-0">
                            <div class="position-relative d-block overflow-hidden">
                                <img src="{{asset('web/images/products/Morefunlite.jpg')}}" class="img-fluid rounded-top mx-auto"
                                    alt="">
                                <div class="overlay-work bg-dark"></div>
                                <a href="#" class="text-white h6 preview">Preview Now <i
                                        class="uil uil-angle-right-b align-middle"></i></a>
                            </div>

                            <div class="card-body">
                                <h5><a href="#" class="title text-dark fw-bold">MATM Lite</a></h5>
                                <div class="text-warning">
                                    <span class="mdi mdi-star"></span>
                                    <span class="mdi mdi-star"></span>
                                    <span class="mdi mdi-star"></span>
                                    <span class="mdi mdi-star"></span>
                                    <span class="mdi mdi-star-half"></span>
                                    <span class="text-muted ps-2">12 Reviews</span>
                                </div>

                                <div class="fees d-flex justify-content-between">
                                    <span class="price_dash">&#x20B9;<del>3,499.00</del></span>
                                    <h4><span class="h6">&#x20B9;</span><b>1,999.00</b></h4>
                                </div>
                                <center><a href="javascript:;" data-bs-toggle="modal" data-bs-target="#myModal1"
                                        class="btn btn-primary">Enquire Now</a></center>
                            </div>
                        </div>
                    </div><!--end col-->


                    <!-- 4 -->

                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 padding_25">
                        <div class="card courses-desc overflow-hidden rounded shadow border-0">
                            <div class="position-relative d-block overflow-hidden">
                                <img src="{{asset('web/images/products/BTPrinter.jpg')}}" class="img-fluid rounded-top mx-auto"
                                    alt="">
                                <div class="overlay-work bg-dark"></div>
                                <a href="#" class="text-white h6 preview">Preview Now <i
                                        class="uil uil-angle-right-b align-middle"></i></a>
                            </div>

                            <div class="card-body">
                                <h5><a href="#" class="title text-dark fw-bold">BT Printer</a></h5>
                                <div class="text-warning">
                                    <span class="mdi mdi-star"></span>
                                    <span class="mdi mdi-star"></span>
                                    <span class="mdi mdi-star"></span>
                                    <span class="mdi mdi-star"></span>
                                    <span class="mdi mdi-star-half"></span>
                                    <span class="text-muted ps-2">15 Reviews</span>
                                </div>

                                <div class="fees d-flex justify-content-between">
                                    <span class="price_dash">&#x20B9;<del>3,499.00</del></span>
                                    <h4><span class="h6">&#x20B9;</span><b>1,999.00</b></h4>
                                </div>
                                <center><a href="javascript:;" data-bs-toggle="modal" data-bs-target="#myModal1"
                                        class="btn btn-primary">Enquire Now</a></center>
                            </div>
                        </div>
                    </div><!--end col-->

                    <!-- 5 -->

                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 padding_25">
                        <div class="card courses-desc overflow-hidden rounded shadow border-0">
                            <div class="position-relative d-block overflow-hidden">
                                <img src="{{asset('web/images/products/BTAEPSPrinter.jpg')}}" class="img-fluid rounded-top mx-auto"
                                    alt="">
                                <div class="overlay-work bg-dark"></div>
                                <a href="#" class="text-white h6 preview">Preview Now <i
                                        class="uil uil-angle-right-b align-middle"></i></a>
                            </div>

                            <div class="card-body">
                                <h5><a href="#" class="title text-dark fw-bold">BT 2 in 1 Printer</a></h5>
                                <div class="text-warning">
                                    <span class="mdi mdi-star"></span>
                                    <span class="mdi mdi-star"></span>
                                    <span class="mdi mdi-star"></span>
                                    <span class="mdi mdi-star"></span>
                                    <span class="mdi mdi-star-half"></span>
                                    <span class="text-muted ps-2">20 Reviews</span>
                                </div>

                                <div class="fees d-flex justify-content-between">
                                    <span class="price_dash">&#x20B9;<del>4,999.00</del></span>
                                    <h4><span class="h6">&#x20B9;</span><b>4,499.00</b></h4>
                                </div>
                                <center><a href="javascript:;" data-bs-toggle="modal" data-bs-target="#myModal1"
                                        class="btn btn-primary">Enquire Now</a></center>
                            </div>
                        </div>
                    </div><!--end col-->

                    <!-- 6 -->

                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 padding_25">
                        <div class="card courses-desc overflow-hidden rounded shadow border-0">
                            <div class="position-relative d-block overflow-hidden">
                                <img src="{{asset('web/images/products/MF919.jpg')}}" class="img-fluid rounded-top mx-auto"
                                    alt="">
                                <div class="overlay-work bg-dark"></div>
                                <a href="#" class="text-white h6 preview">Preview Now <i
                                        class="uil uil-angle-right-b align-middle"></i></a>
                            </div>

                            <div class="card-body">
                                <h5><a href="#" class="title text-dark fw-bold">MATM All in One</a></h5>
                                <div class="text-warning">
                                    <span class="mdi mdi-star"></span>
                                    <span class="mdi mdi-star"></span>
                                    <span class="mdi mdi-star"></span>
                                    <span class="mdi mdi-star"></span>
                                    <span class="mdi mdi-star-half"></span>
                                    <span class="text-muted ps-2">19 Reviews</span>
                                </div>

                                <div class="fees d-flex justify-content-between">
                                    <span class="price_dash">&#x20B9;<del>13,999.00</del></span>
                                    <h4><span class="h6">&#x20B9;</span><b>12,499.00</b></h4>
                                </div>
                                <center><a href="javascript:;" data-bs-toggle="modal" data-bs-target="#myModal1"
                                        class="btn btn-primary">Enquire Now</a></center>
                            </div>
                        </div>
                    </div><!--end col-->

                    <!-- 7 -->

                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 padding_25">
                        <div class="card courses-desc overflow-hidden rounded shadow border-0">
                            <div class="position-relative d-block overflow-hidden">
                                <img src="{{asset('web/images/products/MF220.jpg')}}" class="img-fluid rounded-top mx-auto"
                                    alt="">
                                <div class="overlay-work bg-dark"></div>
                                <a href="#" class="text-white h6 preview">Preview Now <i
                                        class="uil uil-angle-right-b align-middle"></i></a>
                            </div>

                            <div class="card-body">
                                <h5><a href="#" class="title text-dark fw-bold">MATM All in One Pro</a></h5>
                                <div class="text-warning">
                                    <span class="mdi mdi-star"></span>
                                    <span class="mdi mdi-star"></span>
                                    <span class="mdi mdi-star"></span>
                                    <span class="mdi mdi-star"></span>
                                    <span class="mdi mdi-star-half"></span>
                                    <span class="text-muted ps-2">23 Reviews</span>
                                </div>

                                <div class="fees d-flex justify-content-between">
                                    <span class="price_dash">&#x20B9;<del>16,999.00</del></span>
                                    <h4><span class="h6">&#x20B9;</span><b>15,499.00</b></h4>
                                </div>
                                <center><a href="javascript:;" data-bs-toggle="modal" data-bs-target="#myModal1"
                                        class="btn btn-primary">Enquire Now</a></center>
                            </div>
                        </div>
                    </div><!--end col-->





            </div><!--end row-->
        </div><!--end container-->


    </section>
@endsection

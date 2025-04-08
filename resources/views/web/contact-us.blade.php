@extends('web.app')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Hero Start -->
    <section class="bg-half bg-light d-table w-100" style="background: url('{{asset('web/images/contact-detail.jpg')}}') center center;">
        <div class="bg-overlay bg-overlay-white"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level">
                        <h4 class="title">Contact Us</h4>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="breadcrumb bg-white rounded shadow mb-0">
                                    <li class="breadcrumb-item"><a href="index.html">Purn Pay</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div> <!--end col-->
            </div><!--end row-->
        </div> <!--end container-->
    </section><!--end section-->
    <!-- Hero End -->

    <div class="container mt-100 mt-60">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0 order-2 order-md-1">
                <div class="card custom-form rounded border-0 shadow p-4">
                    <form id="maincontact" action="{{ url('save-contactform') }}" method="post"
                    enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Your Name <span class="text-danger">*</span></label>
                                    <div class="form-icon position-relative">
                                        <i data-feather="user" class="fea icon-sm icons"></i>
                                        <input name="name" id="name" type="text" class="form-control ps-5"
                                            placeholder="Name">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                    <div class="form-icon position-relative">
                                        <i data-feather="mail" class="fea icon-sm icons"></i>
                                        <input name="email" id="email" type="email" class="form-control ps-5"
                                            placeholder="Email">
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">Phone</label>
                                    <div class="form-icon position-relative">
                                        <i data-feather="book" class="fea icon-sm icons"></i>
                                        <input name="mobile" id="mobile" class="form-control ps-5"
                                            placeholder="Phone">
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">Comments <span class="text-danger">*</span></label>
                                    <div class="form-icon position-relative">
                                        <i data-feather="message-circle" class="fea icon-sm icons clearfix"></i>
                                        <textarea name="message" id="message" rows="4" class="form-control ps-5" placeholder="Message"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" id="submit" name="send" class="btn btn-primary">Send
                                        Message</button>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </form>
                </div><!--end custom-form-->
            </div><!--end col-->

            <div class="col-lg-7 col-md-6 order-1 order-md-2">
                <div class="title-heading ms-lg-4">
                    <!-- <h4 class="mb-4">Contact Details</h4>
                            <h6 class="">We are never too far â€“<br>call us, mail us or drop at the office.</h6> -->
                    <h4 class="mb-4">HEAD OFFICE</h4>
                    <p class="text-muted">
                        PURNTECH RETAIL FINLIFE INDIA (OPC)Pvt. Ltd. 2-a/3, Front Side,<br>
                        Asaf Ali Road,Ajmeri Gate Extn.<br>
                        New Delhi,Delhi- 110002</p>
                    <div class="d-flex contact-detail align-items-center mt-3">
                        <div class="icon">
                            <i data-feather="mail" class="fea icon-m-md text-dark me-3"></i>
                        </div>
                        <div class="flex-1 content">
                            <h6 class="title fw-bold mb-0">Email</h6>
                            <a href="/cdn-cgi/l/email-protection#3f5c5c7f4f4a4d514f5e46115c5052"
                                class="text-primary"><span class="__cf_email__"
                                    data-cfemail="7d1e1e3d0d080f130d1c04531e1210">[email&#160;protected]</span></a>
                        </div>
                    </div>

                    <div class="d-flex contact-detail align-items-center mt-3">
                        <div class="icon">
                            <i data-feather="phone" class="fea icon-m-md text-dark me-3"></i>
                        </div>
                        <div class="flex-1 content">
                            <h6 class="title fw-bold mb-0">Phone</h6><a href="tel:9460978726"
                                class="text-primary">9460978726</a>



                        </div>
                    </div>

                    <div class="d-flex contact-detail align-items-center mt-3">
                        <div class="icon">
                            <i data-feather="map-pin" class="fea icon-m-md text-dark me-3"></i>
                        </div>
                        <div class="flex-1 content ">
                            <h6 class="title fw-bold mb-0">Location</h6>
                            <a href="https://g.page/PurnPay.com ?share" data-type="iframe"
                                class="video-play-icon text-primary lightbox" target="_blank">View on Google map</a>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
    </section><!--end section-->
    <!-- End contact -->


    <div class="container" style="padding: 50px;">
        <div class="row">
            <div class="col-lg-5 col-md-7  mt-4 pt-2">
                <div class="title-heading ms-lg-4">
                    <!-- <h4 class="mb-4">Contact Details</h4>
                            <h6 class="">We are never too far â€“<br>call us, mail us or drop at the office.</h6> -->
                    <!--<h4 class="mb-4">AHMEDABAD</h4>-->
                    <!--<p class="text-muted">-->
                    <!--    Paynims Technolgy Private Limited<br>-->
                    <!--    3-Hari Har Park, <br>-->
                    <!--    Nr. Old High Court Under Bridge,<br>-->
                    <!--    Navrangpura,Ahmedabad â€“ 380009-->
                    <!--    </p>-->



                    <!--<div class="d-flex contact-detail align-items-center mt-3">-->
                    <!--    <div class="icon">-->
                    <!--        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail fea icon-m-md text-dark me-3"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>-->
                    <!--    </div>-->
                    <!--    <div class="flex-1 content">-->
                    <!--        <h6 class="title fw-bold mb-0">Email</h6>-->
                    <!--        <a href="mailto:amd@vkvclick.com" class="text-primary">amd@vkvclick.com</a>-->
                    <!--    </div>-->
                    <!--</div>-->




                    <!--<div class="d-flex contact-detail align-items-center mt-3">-->
                    <!--    <div class="icon">-->
                    <!--        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone fea icon-m-md text-dark me-3"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>-->
                    <!--    </div>-->
                    <!--    <div class="flex-1 content">-->
                    <!--        <h6 class="title fw-bold mb-0">Phone</h6>-->
                    <!--        <a href="tel:02261392222" class="text-primary">022-61392222</a>-->
                    <!--    </div>-->
                    <!--</div>-->

                    <br>

                    <div class="title-heading padding_50">
                        <h6><span class="text-primary">Branch</span> Office</h6>
                        <h4 class="">Patna</h4>
                        <p class="text-muted">PurnPay - PURNTECH RETAIL FINLIFE INDIA (OPC)Pvt. Ltd.<br>Shanta
                            Enclave,Gola Road<br> Patna, <br>Bihar â€“ 801503</p>
                    </div>
                    <br>

                    <div class="title-heading padding_50">
                        <h6><span class="text-primary">Partner</span> Office</h6>
                        <h4 class="">GULAK FIN</h4>
                        <p class="text-muted">GULAK FIN SOLUTIONS Pvt. Ltd.<br>Shop No.109, Farm Complex Near Moomal
                            Photostate<br>Sriganga Nagar, Suratgarh,<br>Rajasthan, India, 335804
                        </p>
                    </div>


                </div>
            </div><!--end col-->

            <div class="col-lg-7 col-md-5 ps-md-3 pe-md-3 mt-4 pt-2">
                <div class="card map map-height-two rounded map-gray border-0">
                    <div class="card-body p-0">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.514660588234!2d77.22403837409485!3d28.644304783548506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd23f80465c5%3A0xe62b709790c68d0b!2sAsaf%20Ali%20Rd%2C%20Kamla%20Market%2C%20Ajmeri%20Gate%2C%20Delhi!5e0!3m2!1sen!2sin!4v1706517062426!5m2!1sen!2sin"
                            style="border:0" class="rounded" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div>

    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            function capitalizeEachWord(str) {
                return str.replace(/\b\w/g, function(char) {
                    return char.toUpperCase();
                });
            }
            $('#maincontact').submit(function(e) {
                // Prevent the default form submission
                e.preventDefault();
                // Get form data
                var formData = new FormData($(this)[0]);

                // Make an Ajax request
                $.ajax({
                    url: $(this).attr('action'),
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        var usernameValue = $('input[name="name"]').val();
                        var capitalizedValue = capitalizeEachWord(usernameValue);
                        if (data.success === true) {
                            $('#maincontact')[0].reset();
                            Swal.fire({
                                icon: 'success',
                                title: capitalizedValue +
                                    '<br> Your Message has been sent',
                                showConfirmButton: true
                            });
                        } else {
                            alert('Something went wrong!');
                        }
                    },
                    error: function(error) {
                        // Parse the JSON response
                        var responseJSON = error.responseJSON;

                        // Check if there are errors
                        if (responseJSON && responseJSON.errors) {
                            var errorMessages = Object.values(responseJSON.errors);

                            // Flatten the array of error messages
                            var flattenedErrorMessages = errorMessages.reduce((acc, curr) => acc
                                .concat(curr), []);
                            // Display the error messages
                            Swal.fire({
                                icon: 'error',
                                title: 'Validation Errors',
                                html: flattenedErrorMessages.join('<br>')
                            });
                        } else {
                            // If there are no specific errors, show a generic error message
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'An error occurred'
                            });
                        }
                    }
                });
            });
           
        });
    </script>
    @endsection
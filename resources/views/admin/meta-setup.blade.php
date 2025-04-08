<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Meta Setup</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Meta Setup</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div
                class="d-flex flex-wrap justify-content-lg-between justify-content-center align-items-center p-4 border-bottom">
                <div>
                    <h3 class="mb-2 mb-lg-0">Add Meta</h3>
                </div>
            </div>

            <div class="card-body">
                <form id="metaForm">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label class="form-label mb-0" for="page_name">Page Name</label>
                                <input type="text" class="form-control page_name" name="page_name"
                                    value="Homepage">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label class="form-label mb-0" for="page_name">Page Route</label>
                                <input type="text" class="form-control page_route" name="page_route"
                                    value="http://127.0.0.1:8000/">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label class="form-label mb-0" for="meta_title">Meta Title</label>
                                <input type="text" class="form-control meta_title" name="meta_title"
                                    value="No.1 Money Transfer Services Franchise in India | NextGen Payout Services for Businesses | Home ">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label class="form-label mb-0" for="meta_description">Meta Description</label>
                                <input type="text" class="form-control meta_description" name="meta_description"
                                    value="Purn Pay  is No.1 money transfer franchise in India. We offer instant and real-time commission on every transaction. Choose Purn Pay for your payout services for business.">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label class="form-label mb-0" for="meta_keywords">Meta Keywords</label>
                                <input type="text" class="form-control meta_keywords" name="meta_keywords"
                                    value="Purnpay, AEPS, API, EMI &amp; Cash Collection, Money Transfer, Payment Solutions, Pancard Agent,  Pre-Paid Cards, , M-ATM, Utility Services,  Insurance,  Bank Account">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label class="form-label mb-0" for="meta_url">Meta Url</label>
                                <input type="text" class="form-control meta_url" name="meta_url"
                                    value="https://purnpay.com/">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label class="form-label mb-0" for="org_schema">Organization Schema</label>
                                <textarea class="form-control" name="org_schema" rows="8"><script type='application/ld+json'>{'@context': 'https://schema.org','@type': 'Organization','name': 'PurnPay Home','logo': 'https://purnpay.com/web/images/PurnPay-logo-header.png','url': 'https://purnpay.com','address': {'@type": 'PostalAddress','streetAddress': '2-a/3,Front Side, Asaf Ali Road, Ajmeri Gate Extn.','addressLocality': 'Central Delhi','addressRegion': 'Delhi','postalCode': '110002','addressCountry': 'India'},'sameAs': ['https://www.facebook.com/purnpay.com/']}</script>
                                </textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label class="form-label mb-0" for="business_schema">Local Business Schema</label>
                                <textarea class="form-control" name="business_schema" rows="8"><script type='application/ld+json'>{"@context":"http://schema.org/","@type": "LocalBusiness","@id": "","name": "PurnPay","image": "https://purnpay.com/web/images/PurnPay-logo-header.png","telephone": "91 9460978726","url": "https://purnpay.com", "address": {"@type": "PostalAddress","streetAddress": "2-a/3,Front Side, Asaf Ali Road, Ajmeri Gate Extn.","addressLocality": "Central Delhi","addressRegion": "Delhi","postalCode": "110002", "addressCountry": "India"},"openingHoursSpecification": [{"@type": "OpeningHoursSpecification","dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],"opens": "09:00","closes": "20:00"},{"@type": "OpeningHoursSpecification","dayOfWeek": ["Sunday"],"opens": "10:00","closes": "19:00"}],"sameAs": ["https://www.facebook.com/purnpay.com/"]}</script>
                                </textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label class="form-label mb-0" for="rating_schema">Aggregate Rating Schema</label>
                                <textarea class="form-control" name="rating_schema" rows="5"><script type='application/ld+json'>{"@context":"http://schema.org/","@type": "Product","name": "Purn Pay","aggregateRating": { "@type": "AggregateRating","ratingValue" : "4.9","ratingCount" : "129","reviewCount" : "129"}}</script>
                                </textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                {{-- <label class="form-label mb-0" for="meta_type">Meta Type</label> --}}
                                <input type="hidden" class="form-control meta_type" name="meta_type" value="website">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                {{-- <label class="form-label mb-0" for="site_name">Site Name</label> --}}
                                <input type="hidden" class="form-control site_name" name="site_name" value="PurnPay">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                {{-- <label class="form-label mb-0" for="meta_image">Meta Image</label> --}}
                                <input type="hidden" class="form-control meta_image" name="meta_image"
                                    value="https://purnpay.com/web/images/PurnPay-Favicon.png">
                            </div>
                        </div>

                    </div>
                    <div class="mt-3 mt-lg-0">
                        <button type="submit"
                            class="btn btn-primary btn-label waves-effect waves-light rounded-pill add-news-btn"><i
                                class="ri-survey-line label-icon align-middle rounded-pill fs-16 me-2"></i>
                            Add Meta</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--end col-->
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>SR No.</th>
                                <th>Page Name</th>
                                <th>Page Route</th>
                                <th>headerdata</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($metadata as $index => $m)
                                <tr>
                                    <td>{{ $index + 1 }}.</td>
                                    <td>{{ $m->page_name }}</td>
                                    <td style="text-transform: lowercase !important;">{{ $m->page_route }}</td>
                                    {{-- <td>{{ json_encode($m->headerdata, JSON_PRETTY_PRINT) }}</td> --}}
                                    <td>
                                        @foreach ($m->headerdata as $key => $value)
                                            <strong>{{ ucfirst(str_replace('_', ' ', $key)) }}:</strong>
                                            {{ $value }} <br>
                                        @endforeach
                                    </td>
                                    <td>
                                        <a href="{{ route('meta.edit', $m->id) }}" class="btn btn-warning">Edit</a>
                                        <a href="javascript:void(0);" class="btn btn-danger deleteMeta"
                                            data-id="{{ $m->id }}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
</div>

<script>
    $(document).ready(function() {
        $("#metaForm").on("submit", function(e) {
            e.preventDefault();

            $.ajax({
                url: "{{ route('store.meta') }}",
                type: "POST",
                data: $(this).serialize(),
                success: function(response) {
                    if (response.status === "success") {
                        Swal.fire({
                            icon: "success",
                            title: "Success",
                            html: response.message
                        }).then(() => {
                            location.reload();
                            $("#metaForm")[0].reset();
                        });
                    }
                },
                error: function(xhr) {
                    Swal.fire({
                        icon: "error",
                        title: "Error",
                        html: xhr.responseText
                    });
                }
            });
        });
        // Delete button event listener
        $(document).on("click", ".deleteMeta", function(e) {
            e.preventDefault();

            var metaId = $(this).data("id"); // Get Meta ID
            var deleteUrl = "/meta/delete/" + metaId; // Laravel Route

            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    // If user confirms, send AJAX request
                    $.ajax({
                        url: deleteUrl,
                        type: "DELETE",
                        data: {
                            _token: "{{ csrf_token() }}" // CSRF token for security
                        },
                        success: function(response) {
                            Swal.fire("Deleted!", "Your meta has been deleted.",
                                "success");
                            location.reload(); // Reload page after deletion
                        },
                        error: function() {
                            Swal.fire("Error!", "Something went wrong!", "error");
                        }
                    });
                }
            });
        });
    });
</script>

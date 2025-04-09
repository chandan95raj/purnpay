<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Blog</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Blog</li>
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
                    <h3 class="mb-2 mb-lg-0">Add Blog</h3>
                </div>
            </div>

            <div class="card-body">
                <form enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="form-group mb-3">
                                <label class="form-label mb-0" for="ns_title">Blog Title</label>
                                <input type="text" class="form-control ns_title" name="ns_title"
                                    placeholder="Enter Blog title">
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label mb-0" for="ns_img">Blog Image</label>
                                <input type="file" class="form-control ns_img" name="ns_img" id="newsImageInput">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div id="imagePreview" class="mb-3">
                            </div>
                        </div>                                              
                        <div class="col-lg-8">
                            <div class="form-group mb-3">
                                <label class="form-label mb-0" for="meta_title">Meta Title</label>
                                <input type="text" class="form-control meta_title" name="meta_title"
                                    placeholder="PurnPay - Blog  or ( same as blog title)">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group mb-3">
                                <label class="form-label mb-0" for="blog-date">Blog Date</label>
                                <input type="date" class="form-control ns_date" onfocus="this.showPicker()" id="newsDate">
                            </div>
                        </div> 
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label class="form-label mb-0" for="meta_description">Meta Description</label>
                                <input type="text" class="form-control meta_description" name="meta_description"
                                    placeholder="Purn Pay  is No.1 money transfer franchise in India. We offer instant and real-time commission on every transaction. Choose Purn Pay for your payout services for business.">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label class="form-label mb-0" for="meta_keywords">Meta Keywords</label>
                                <input type="text" class="form-control meta_keywords" name="meta_keywords"
                                    placeholder="Purnpay, AEPS, API, EMI &amp; Cash Collection, Money Transfer, Payment Solutions, Pancard Agent,  Pre-Paid Cards, , M-ATM, Utility Services,  Insurance,  Bank Account">
                            </div>
                        </div>
                        
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label class="form-label mb-0" for="org_schema">Organization Schema</label>
                                <textarea class="form-control org_schema" name="org_schema" rows="8"><script type='application/ld+json'>{'@context': 'https://schema.org','@type': 'Organization','name': 'PurnPay Blog','logo': 'https://purnpay.com/web/images/PurnPay-logo-header.png','url': 'https://purnpay.com','address': {'@type": 'PostalAddress','streetAddress': '2-a/3,Front Side, Asaf Ali Road, Ajmeri Gate Extn.','addressLocality': 'Central Delhi','addressRegion': 'Delhi','postalCode': '110002','addressCountry': 'India'},'sameAs': ['https://www.facebook.com/purnpay.com/']}</script>
                                </textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label class="form-label mb-0" for="business_schema">Local Business Schema</label>
                                <textarea class="form-control business_schema" name="business_schema" rows="8"><script type='application/ld+json'>{"@context":"http://schema.org/","@type": "LocalBusiness","@id": "","name": "PurnPay","image": "https://purnpay.com/web/images/PurnPay-logo-header.png","telephone": "91 9460978726","url": "https://purnpay.com", "address": {"@type": "PostalAddress","streetAddress": "2-a/3,Front Side, Asaf Ali Road, Ajmeri Gate Extn.","addressLocality": "Central Delhi","addressRegion": "Delhi","postalCode": "110002", "addressCountry": "India"},"openingHoursSpecification": [{"@type": "OpeningHoursSpecification","dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],"opens": "09:00","closes": "20:00"},{"@type": "OpeningHoursSpecification","dayOfWeek": ["Sunday"],"opens": "10:00","closes": "19:00"}],"sameAs": ["https://www.facebook.com/purnpay.com/"]}</script>
                                </textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label class="form-label mb-0" for="rating_schema">Aggregate Rating Schema</label>
                                <textarea class="form-control rating_schema" name="rating_schema" rows="5"><script type='application/ld+json'>{"@context":"http://schema.org/","@type": "Product","name": "Purn Pay","aggregateRating": { "@type": "AggregateRating","ratingValue" : "4.9","ratingCount" : "129","reviewCount" : "129"}}</script>
                                </textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                {{-- <label class="form-label mb-0" for="page_name">Page Name</label> --}}
                                <input type="hidden" class="form-control page_name" name="page_name"
                                    value="Blog Details">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                {{-- <label class="form-label mb-0" for="meta_url">Meta Url</label> --}}
                                <input type="hidden" class="form-control meta_url" name="meta_url"
                                    value="https://purnpay.com/">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                {{-- <label class="form-label mb-0" for="meta_type">Meta Type</label> --}}
                                <input type="hidden" class="form-control meta_type" name="meta_type" value="website">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                {{-- <label class="form-label mb-0" for="site_name">Site Name</label> --}}
                                <input type="hidden" class="form-control site_name" name="site_name" value="PurnPay">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                {{-- <label class="form-label mb-0" for="meta_image">Meta Image</label> --}}
                                <input type="hidden" class="form-control meta_image" name="meta_image"
                                    value="https://purnpay.com/web/images/PurnPay-Favicon.png">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <label class="form-label mb-0" for="ns_desc">Blog Description (Blog)</label>
                                <div id="editor-container" class="ns_desc" style="height: 300px;"></div>
                            </div>
                        </div>                        
                    </div>
                    <div class="mt-3 mt-lg-0">
                        <button type="submit"
                            class="btn btn-primary btn-label waves-effect waves-light rounded-pill add-news-btn"><i
                                class="ri-survey-line label-icon align-middle rounded-pill fs-16 me-2"></i>
                            Add Blog</button>
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
            <div class="row align-items-center p-4 border-bottom">
                <div class="col-lg-6">
                    <h3 class="mb-2 mb-lg-0">Blog List</h3>
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>SR No.</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="news-list">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
</div>
<!-- removeNotificationModal -->
<div id="deleteModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="NotificationModalbtn-close"></button>
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                        colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px">
                    </lord-icon>
                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <h4>Are you sure ?</h4>
                        <p class="text-muted mx-4 mb-0">Are you sure you want to delete ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete
                        It!</button>
                </div>
            </div>

        </div>
    </div>
</div>
<script>

    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#newsImageInput").on("change", function () {
        const file = this.files[0]; // Selected file
        const previewContainer = $("#imagePreview");

            // Clear any previous preview
            previewContainer.html("");

            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    // Create an image element
                    const img = $("<img>")
                        .attr("src", e.target.result)
                        .attr("alt", "Image Preview")
                        .css({
                            height: "138px",
                            objectFit: "cover",
                            border: "1px solid #ccc",
                            borderRadius: "5px",
                        });

                    // Append the image to the preview container
                    previewContainer.append(img);
                };
                reader.readAsDataURL(file); // Read the file as a Data URL
            }
        });

        $(document).on('click', '.add-news-btn', function(event) {
            event.preventDefault();
            const nstitle = $(".ns_title").val();
            const nsdate = $(".ns_date").val();

            const page_name = $(".page_name").val();
            const meta_title = $(".meta_title").val();
            const meta_description = $(".meta_description").val();
            const meta_keywords = $(".meta_keywords").val();
            const meta_url = $(".meta_url").val();
            const meta_type = $(".meta_type").val();
            const site_name = $(".site_name").val();
            const meta_image = $(".meta_image").val();
            const org_schema = $(".org_schema").val();
            const business_schema = $(".business_schema").val();
            const rating_schema = $(".rating_schema").val();


            const nsdesc = $(".ql-editor").html();
            const nsimg = $(".ns_img")[0].files[0];

            // FormData object create karein
            const formData = new FormData();
            formData.append('nstitle', nstitle);
            formData.append('nsdate', nsdate);
            formData.append('nsdesc', nsdesc);
            formData.append('nsimg', nsimg);

            formData.append('page_name', page_name);
            formData.append('meta_title', meta_title);
            formData.append('meta_description', meta_description);
            formData.append('meta_keywords', meta_keywords);
            formData.append('meta_url', meta_url);
            formData.append('meta_type', meta_type);
            formData.append('site_name', site_name);
            formData.append('meta_image', meta_image);
            formData.append('org_schema', org_schema);
            formData.append('business_schema', business_schema);
            formData.append('rating_schema', rating_schema);

            $.ajax({
                type: "POST",
                url: "{{ url('/save-blog-data') }}",
                data: formData,
                processData: false,
                contentType: false,
                async: false,
                success: function(res) {
                    Swal.fire({
                        icon: res.status == true ? "success" : "error",
                        title: res.status == true ? "Success" : "Error",
                        html: res.message,
                        position: "top-end",
                        showConfirmButton: false, 
                        timer: 1500, 
                        timerProgressBar: true
                    }).then(() => {
                        if (res.status == true) {
                            location.reload(); 
                        }
                    });
                },
                error: function(err) {
                    Swal.fire({
                        icon: "error",
                        title: "Error",
                        html: err.responseJSON.message
                    });
                }
            });            
        });

        function loadNewsList() {
            $.get("{{ url('load-blog') }}", function(res) {
                $('#example').DataTable().destroy();
                if (res.status==true) {
                    $.each(res.data, function(key, value) {
                        $('.news-list').append(
                            `<tr>
                                <td>${key+1}.</td>
                                <td>
                                    <img src="{{asset('admin/uploads')}}/${value.ns_img}" width="80" height="80" class="rounded" />
                                </td>
                                <td>${value.ns_title.length > 80 ? value.ns_title.slice(0, 80) + "..." : value.ns_title}</td>
                                <td>${new Date(value.created_at).toLocaleDateString('en-GB', { day: '2-digit', month: 'short', year: 'numeric' })}</td>
                                <td>
                                    <a href="{{ url('/edit-blog') }}/${value.ns_id}" class="btn btn-success edit-btn">
                                    <i class="ri-edit-box-line"></i>
                                </a>
                                    <button data-id="${value.ns_id}" data-bs-toggle="modal" type="button"
                                        class="btn btn-danger delete-btn">
                                        <i class="ri-delete-bin-5-line"></i>
                                    </button>
                                </td>
                            </tr>`
                        )
                    });
                    $('#example').DataTable();
                }
                else{
                    Swal.fire({
                        icon: "error",
                        title: "Error",
                        html: res.message
                    });
                }
                
            }).fail(function(err) {
                console.log(err);
            });
        }
        loadNewsList();

        $(document).on('click', '.delete-btn', function() {
            const id = $(this).attr('data-id');
            $('#deleteModal').modal('show');
            $(document).on('click', '#delete-notification', function() {
                $.post("{{ url('delete-blog') }}", {
                    id: id
                }, function(res) {
                    $('#deleteModal').modal('hide');
                    Swal.fire({
                        icon: "success",
                        title: "success",
                        html: "Blog Deleted Successfully",
                        position: "top-end",
                        showConfirmButton: false, 
                        timer: 1500, 
                        timerProgressBar: true
                    }).then(() => {
                        location.reload();
                    });
                }).fail(function(err) {
                    alert(err.responseJSON.message);
                });
            });
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Define custom toolbar options
        const toolbarOptions = [
            [{
                header: [1, 2, 3, false]
            }], // Dropdown for headers (h1, h2, h3)
            ['bold', 'italic', 'underline', 'strike'], // Bold, italic, underline, strike-through
            [{
                list: 'ordered'
            }, {
                list: 'bullet'
            }], // Ordered and unordered lists
            [{
                script: 'sub'
            }, {
                script: 'super'
            }], // Subscript, superscript
            [{
                indent: '-1'
            }, {
                indent: '+1'
            }], // Outdent/Indent
            [{
                align: []
            }], // Text alignment
            ['link', 'image', 'video'], // Insert link, image, video
            ['blockquote', 'code-block'], // Blockquote and code block
            [{
                color: []
            }, {
                background: []
            }], // Text color and background color
            ['clean'], // Remove formatting
        ];

        // Initialize Quill with the custom toolbar
        const quill = new Quill('#editor-container', {
            theme: 'snow',
            modules: {
                toolbar: toolbarOptions,
            },
        });

        // Sync Quill content with the hidden textarea
        const textarea = document.getElementById('ns_desc');
        quill.on('text-change', () => {
            textarea.value = quill.root.innerHTML;
        });
    });
</script>

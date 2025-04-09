<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Update Blog</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Update Blog</li>
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
                    <h3 class="mb-2 mb-lg-0">Update Blog</h3>
                </div>
            </div>

            <div class="card-body">
                <form id="updateNews" enctype="multipart/form-data">
                    @csrf
                    @foreach ($news as $value)
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="form-group mb-3">
                                <input type="hidden" class="form-control ns_id" name="ns_id"
                                    value="{{$value->ns_id}}">
                                <label class="form-label mb-0" for="ns_title">Blog Title</label>
                                <input type="text" class="form-control ns_title" name="ns_title"
                                    value="{{$value->ns_title}}">
                            </div>
                            <div class="form-group mb-3">
                                <div class="form-label">Blog Image</div>
                                <input type="file" class="form-control ns_img" name="ns_img" id="newsImageInput">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div id="imagePreview" class="mb-3">
                                <img src="{{ asset('admin/uploads/' . $value->ns_img) }}" style=" height:138px;objectFit: cover;border: 1px solid #ccc;borderRadius: 5px" alt="">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="form-group mb-3">
                                <label class="form-label mb-0" for="meta_title">Meta Title</label>
                                <input type="text" class="form-control meta_title" name="meta_title"
                                    value="{{ $value->headerdata['meta_title'] ?? '' }}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group mb-3">
                                <label class="form-label mb-0" for="blog-date">Blog Date</label>
                                <input type="date" class="form-control ns_date" onfocus="this.showPicker()" name="ns_date" value="{{ \Carbon\Carbon::parse($value->created_at)->format('Y-m-d') }}" id="newsDate">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label class="form-label mb-0" for="meta_description">Meta Description</label>
                                <input type="text" class="form-control meta_description" name="meta_description"
                                    value="{{ $value->headerdata['meta_description'] ?? '' }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label class="form-label mb-0" for="meta_keywords">Meta Keywords</label>
                                <input type="text" class="form-control meta_keywords" name="meta_keywords"
                                    value="{{ $value->headerdata['meta_keywords'] ?? '' }}">
                            </div>
                        </div>
                        
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label class="form-label mb-0" for="org_schema">Schema</label>
                                <textarea class="form-control org_schema" name="org_schema" rows="5">{{ $value->headerdata['org_schema'] ?? '' }}</textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label class="form-label mb-0" for="business_schema">Schema</label>
                                <textarea class="form-control business_schema" name="business_schema" rows="5">{{ $value->headerdata['business_schema'] ?? '' }}</textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label class="form-label mb-0" for="rating_schema">Schema</label>
                                <textarea class="form-control rating_schema" name="rating_schema" rows="5">{{ $value->headerdata['rating_schema'] ?? '' }}</textarea>
                            </div>
                        </div>
                        
                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <label class="form-label mb-0" for="ns_desc">Blog Description (Blog)</label>
                                <div id="editor-container" class="ns_desc" style="height: 300px;">
                                    {!!$value->ns_desc!!}
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <div class="mt-3 mt-lg-0">
                        <button type="submit"
                            class="btn btn-primary btn-label waves-effect waves-light rounded-pill update-news-btn"><i
                                class="ri-survey-line label-icon align-middle rounded-pill fs-16 me-2"></i>
                            Update Blog</button>
                    </div>
                    @endforeach
                </form>
            </div>
        </div>
    </div>
    <!--end col-->
</div>
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('submit', '#updateNews', function(event) {
            event.preventDefault();
            const formData = new FormData(document.getElementById('updateNews'));
            formData.append('ns_desc', $(".ql-editor").html()); 
            $.ajax({
                url: "{{ url('update-blog-data') }}",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(res) {                   
                    if (res.status) {
                        Swal.fire({
                        icon: "success",
                        title: "Success",
                        html: res.message,
                        position: "top-end",
                        showConfirmButton: false, 
                        timer: 1500, 
                        timerProgressBar: true
                        }).then(() => {
                            if (res.status == true) {
                                window.location.href = "{{ url('/manage-blog') }}";
                            }
                        });
                    } else {
                        alert("Failed to update. Please try again.");
                    }
                },
                error: function(err) {
                    console.error(err);
                    alert("An error occurred while updating the record.");
                }
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

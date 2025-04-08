<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Meta Update</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Meta Update</li>
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
                    <h3 class="mb-2 mb-lg-0">Update Meta</h3>
                </div>
            </div>
            <div class="card-body">
                <form id="editMetaForm">
                    @csrf
                    <input type="hidden" id="meta_id" name="meta_id" value="{{ $meta->id }}">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label class="form-label mb-0">Page Name</label>
                                <input type="text" class="form-control" name="page_name" value="{{ $meta->page_name }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label class="form-label mb-0">Page Route</label>
                                <input type="text" class="form-control" name="page_route" value="{{ $meta->page_route }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label class="form-label mb-0">Meta Title</label>
                                <input type="text" class="form-control" name="meta_title" value="{{ $meta->headerdata['meta_title'] ?? '' }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label class="form-label mb-0">Meta Description</label>
                                <input type="text" class="form-control" name="meta_description" value="{{ $meta->headerdata['meta_description'] ?? '' }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label class="form-label mb-0">Meta Keywords</label>
                                <input type="text" class="form-control" name="meta_keywords" value="{{ $meta->headerdata['meta_keywords'] ?? '' }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label class="form-label mb-0">Meta URL</label>
                                <input type="text" class="form-control" name="meta_url" value="{{ $meta->headerdata['meta_url'] ?? '' }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label class="form-label mb-0">Organization Schema</label>
                                <textarea class="form-control" name="org_schema" rows="8">{{ $meta->headerdata['org_schema'] ?? '' }}</textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label class="form-label mb-0">Local Business Schema</label>
                                <textarea class="form-control" name="business_schema" rows="8">{{ $meta->headerdata['business_schema'] ?? '' }}</textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label class="form-label mb-0">Aggregate Rating Schema</label>
                                <textarea class="form-control" name="rating_schema" rows="5">{{ $meta->headerdata['rating_schema'] ?? '' }}</textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Meta</button>
                    <a href="{{ url()->previous() }}" class="btn btn-warning">Back</a>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
   $(document).ready(function () {
    $("#editMetaForm").submit(function (e) {
        e.preventDefault(); // Default form submit behavior ko roke

        var meta_id = $("#meta_id").val(); // Meta ID lein
        var formData = new FormData(this); // FormData use karein

        $.ajax({
            url: "/meta/update/" + meta_id,
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"), // CSRF Token bhejein
            },
            success: function (response) {
                Swal.fire({
                    icon: "success",
                    title: "Success",
                    text: response.success,
                });
            },
            error: function (xhr) {
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: "Something went wrong!",
                });
            },
        });
    });
});

</script>
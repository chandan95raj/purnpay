<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Dashboard</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="flex-grow-1">
            <h4 class="fs-16 mb-2">Categories</h4>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card card-animate">
            <div class="card-body">
                <a href="{{ url('/manage-blog') }}" class="d-flex align-items-center">
                    <div class="flex-grow-1 overflow-hidden">
                        <h5 class="fw-medium text-muted text-truncate mb-0">
                            Blog</h5>
                    </div>
                    <div class="avatar-sm flex-shrink-0">
                        <span class="avatar-title bg-soft-primary rounded fs-3">
                            <i class="ri-survey-line text-primary"></i>
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card card-animate">
            <div class="card-body">
                <a href="{{ url('/manage-contacts') }}" class="d-flex align-items-center">
                    <div class="flex-grow-1 overflow-hidden">
                        <h5 class="fw-medium text-muted text-truncate mb-0">
                            Contact Messages</h5>
                    </div>
                    <div class="avatar-sm flex-shrink-0">
                        <span class="avatar-title bg-soft-success rounded fs-3">
                            <i class="ri-message-3-line text-success"></i>
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card card-animate">
            <div class="card-body">
                <a href="{{ url('/meta-setup') }}" class="d-flex align-items-center">
                    <div class="flex-grow-1 overflow-hidden">
                        <h5 class="fw-medium text-muted text-truncate mb-0">
                            Meta Setup</h5>
                    </div>
                    <div class="avatar-sm flex-shrink-0">
                        <span class="avatar-title bg-soft-primary rounded fs-3">
                            <i class="ri-list-check text-primary"></i>
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

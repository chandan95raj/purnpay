<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Contact Messages</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Contact Messages</li>
                </ol>
            </div>

        </div>
    </div>
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
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Date</th>
                                <th>Message</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cont_msgs as $msg)
                                <?php
                                    $createdAt = $msg->created_at;
                                    $dateObj = new DateTime($createdAt);
                                    $formattedDate = $dateObj->format('d-m-Y');
                                ?>
                                <tr>
                                    <td>{{ $loop->iteration }} . </td>
                                    <td>{{ $msg->name }}</td>
                                    <td style="text-transform: lowercase !important">{{ $msg->email }}</td>
                                    <td>{{ $msg->mobile }}</td>
                                    <td>{{ $formattedDate }}</td>
                                    <td>
                                        <textarea class="form-control" rows="3" disabled>{{ $msg->message }}</textarea>
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
@extends('web.app')

@section('content')

<style>
    .blog .card-img-top {
        height: 237px !important;
        object-fit: cover;
    }
</style>

<section class=" d-table w-100 overflow-hidden px-0 pt-5 my-5 mb-0" id="blog_header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 col-md-12 text-center ">
                <div class="title-heading mt-4">
                    <h4 class="heading "><span class="text-primary fw-bold">Blogs</span></h4>
                    <!--<p class="para-desc text-muted"><span class="text-primary fw-bold">PurnPay </span> has integrated with all the available banks to enable cash withdrawal and other AEPS services for all its partners.</p>-->

                </div>
            </div><!--end col-->

        </div><!--end row-->
    </div><!--end container-->
</section>

<section class="blogs_main mb-3">
    <div class="container pt-lg-5">
        <div class="row">
            @foreach ($allblog as $value)
            <div class="col-lg-4 col-md-6 mb-4 pb-2">
                <div class="card blog blog-primary rounded border-0 shadow overflow-hidden">
                    <a href="{{url('/blog-details')}}/{{$value->ns_id}}">
                        <div class="position-relative">
                            <img src="{{ asset('admin/uploads/' . $value->ns_img) }}"
                                class="card-img-top" alt="...">
                            <div class="overlay rounded-top"></div>
                        </div>
                    </a>
                    <div class="card-body content">
                        <h5><a href="{{url('/blog-details')}}/{{$value->ns_id}}" class="card-title title text-dark">{!! Str::words($value->ns_title, 6, '...') !!}</a></h5>
                        <div class="post-meta d-flex justify-content-between mt-3">
                            <a href="{{url('/blog-details')}}/{{$value->ns_id}}" class="text-muted readmore">Read More <i
                                    class="uil uil-angle-right-b align-middle"></i></a>
                        </div>
                    </div>
                    <div class="author">
                        <!--<small class="user d-block"><i class="uil uil-user"></i> Calvin Carlo</small>-->
                        <small class="date"><i class="uil uil-calendar-alt"></i>{{ \Carbon\Carbon::parse($value->created_at)->format('d M Y') }}</small>
                    </div>
                </div>
            </div><!--end col-->
            @endforeach
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
@endsection
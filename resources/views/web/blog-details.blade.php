@extends('web.app')

@section('content')
    <style>
        .blog-main-img img{
            height: 300px;
            object-fit: cover;
        }
    </style>
    <section class=" d-table w-100 overflow-hidden px-0 pt-5 my-5 mb-0" id="blog_header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 text-center ">
                    <div class="title-heading">
                        <h4 class="heading "><span class="text-primary fw-bold">Blogs Details</span></h4>
                    </div>
                </div><!--end col-->

            </div><!--end row-->
        </div><!--end container-->
    </section>

    <section class="blogs_main mb-3">
        <div class="container pt-lg-4">
            <div class="text-center blog-main-img">
                <img src="{{ asset('admin/uploads/' . $singleblog->ns_img) }}" style="width: auto !important" class="shadow-md rounded" alt="{{ $singleblog->ns_title }}">
            </div>
            <h3 class="my-3">{{ $singleblog->ns_title }}
            </h3>
            <div>
                {!! $singleblog->ns_desc !!}
            </div>
        </div>
    </section>
@endsection

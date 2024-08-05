@extends('admin.layouts.master')
@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                <h4 class="mb-sm-0">Product Details</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                        <li class="breadcrumb-item active">Product Details</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row gx-lg-5">
                        <div class="col-xl-4 col-md-8 mx-auto">
                            <div class="product-img-slider sticky-side-div">
                                <div class="swiper product-nav-slider mt-2">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="nav-slide-item">
                                                <img src="{{ asset('storage/' . $model->image) }}" width="250px" alt="" class="img-fluid  d-block" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end swiper nav slide -->
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-xl-8">
                            <div class="mt-xl-0 mt-5">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <h3 class="">ID : {{ $model->id }}</h3>
                                        <h class="fs-14">Tên bài viết</h4>
                                        <h4>{{ $model->title }}</h4>
                                        <div class="hstack fs-14 flex-wrap">
                                            <div class="vr"></div>
                                            <div class="fs-14">Created_at : <span class="text-body fw-medium">{{ $model->created_at }}</span></div>
                                        </div>
                                        <div class="hstack  flex-wrap">
                                            <div class="vr"></div>
                                            <div class="fs-14">Updated_at : <span class="text-body fw-medium">{{ $model->updated_at }}</span></div>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div>
                                            <a href="apps-ecommerce-add-product.html" class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="ri-pencil-fill align-bottom"></i></a>
                                        </div>
                                    </div>
                                </div>


                                <div class="mt-4 text-muted">
                                    <h5 class="fs-14">Nội dung</h5>
                                    <p>{{ $model->body }}</p>
                                </div> 
                                <!-- end card body -->
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

</div>
@endsection
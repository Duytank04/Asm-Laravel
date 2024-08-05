@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                    <h4 class="mb-sm-0">Cập nhật thể loại</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Projects</a></li>
                            <li class="breadcrumb-item active">Cập nhật thể loại</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->
        <form action="{{ route('admin.categories.update', $model->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label" for="project-title-input">Tên thể loại</label>
                                <input type="text" name="name" value="{{ $model->name }}" class="form-control" id="name"
                                    placeholder="Tên thể loại...">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="project-thumbnail-img">Ảnh thể loại</label>
                                <input class="form-control" name="image" id="image" type="file"
                                    accept="image/png, image/gif, image/jpeg">
                            </div>
                            <div class="swiper product-nav-slider mt-2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="nav-slide-item">
                                            <img src="{{\Storage::url($model->image)}}" alt="" width="150px" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                    <div class="text-end mb-4">
                        <button type="submit" class="btn btn-success w-sm">Sửa thể loại</button>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </form>

    </div>
@endsection

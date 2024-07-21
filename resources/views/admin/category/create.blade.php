@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                    <h4 class="mb-sm-0">Create Project</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Projects</a></li>
                            <li class="breadcrumb-item active">Create Project</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->
        <form action="{{ route('admin.categorys.store') }}" method="POST" enctype="multipart/form-data" >
            @csrf
            <div class="row">
                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label" for="project-title-input">Tên thể loại</label>
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Tên thể loại...">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="project-thumbnail-img">Ảnh thể loại</label>
                                <input class="form-control" name="images" id="images" type="file"
                                    accept="image/png, image/gif, image/jpeg">
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->


                    <!-- end card -->
                    <div class="text-end mb-4">
                        <button type="submit" class="btn btn-secondary w-sm">Danh sách thể loại</button>
                        <button type="submit" class="btn btn-success w-sm">Thêm thể loại</button>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </form>

    </div>
@endsection

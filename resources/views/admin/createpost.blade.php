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

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="project-title-input">Tiêu đề</label>
                            <input type="text" class="form-control" id="project-title-input"
                                placeholder="Enter project title">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="project-thumbnail-img">Ảnh</label>
                            <input class="form-control" id="project-thumbnail-img" type="file"
                                accept="image/png, image/gif, image/jpeg">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Project Description</label>
                            <div id="ckeditor-classic">
                                <textarea class="col-12" placeholder="Nội dung" name="" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3 mb-lg-0">
                                    <label for="choices-priority-input" class="form-label">Thể loại</label>
                                    <select class="form-select" data-choices data-choices-search-false
                                        id="choices-priority-input">
                                        {{-- @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach --}}
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->

                <div class="card">
                </div>
                <!-- end card -->
                <div class="text-end mb-4">
                    <a href="" class="btn btn-success w-sm">Create</a>
                </div>
            </div>
            <!-- end col -->
            <!-- end col -->
        </div>
        <!-- end row -->

    </div>
@endsection

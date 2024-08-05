@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                    <h4 class="mb-sm-0">Thêm bài viết</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Bài viết</a></li>
                            <li class="breadcrumb-item active">Thêm bài viết</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label" for="project-title-input">Tên bài viết</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    placeholder="Tên bài viết">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="project-title-input">Tiêu đề ngắn</label>
                                <input type="text" class="form-control" id="content" name="content"
                                    placeholder="Tiêu đề ngắn">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Nội dung</label>
                                <div id="ckeditor-classic">
                                    <textarea class="col-12" placeholder="Nội dung" name="body" id="body" cols="30" rows="10"></textarea>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="project-thumbnail-img">Ảnh</label>
                                <input class="form-control" name="image" id="image" type="file"
                                    accept="image/png, image/gif, image/jpeg">
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-3 mb-lg-0">
                                        <label for="choices-priority-input" class="form-label">Thể loại</label>
                                        <select class="form-select" data-choices data-choices-search-false
                                            id="category_id" name="category_id">
                                            @foreach ($categories as $id => $name)
                                                <option value="{{ $id }}">{{ $name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end mb-4">
                                <button type="submit" class="btn btn-success w-sm">Thêm bài viết</button>
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end row -->
                </form>
            </div>
            <!-- end col -->
            <!-- end col -->
        </div>
        <!-- end row -->

    </div>
@endsection

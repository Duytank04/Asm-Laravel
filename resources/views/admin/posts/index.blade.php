@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                    <h4 class="mb-sm-0">Orders</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                            <li class="breadcrumb-item active">Orders</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card" id="orderList">
                    <div class="card-header border-0">
                        <div class="row align-items-center gy-3">
                            <div class="col-sm">
                                <h5 class="card-title mb-0"></h5>
                            </div>
                            <div class="col-sm-auto">
                                <div class="d-flex gap-1 flex-wrap">
                                    <a href="{{ route('admin.posts.create') }}" class="btn btn-success add-btn"
                                        id="create-btn"><i class="ri-add-line align-bottom me-1"></i>Thêm mới bài viết</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body border border-dashed border-end-0 border-start-0">
                        <h5 class="card-title mb-0">Bài viết</h5>
                    </div>
                    <div class="card-body pt-0">
                        <div>
                            <ul class="nav nav-tabs nav-tabs-custom nav-success mb-3" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active All py-3" data-bs-toggle="tab" id="All" href="#home1"
                                        role="tab" aria-selected="true">
                                        <i class="ri-store-2-fill me-1 align-bottom"></i> All
                                    </a>
                                </li>
                            </ul>

                            <div class="table-responsive table-card mb-1">
                                <table class="table table-nowrap align-middle" id="orderTable">
                                    <thead class="text-muted table-light">
                                        <tr class="text-uppercase">
                                            <th data-sort="id">ID Thể loại</th>
                                            <th data-sort="customer_name">Tên bài viết</th>
                                            <th data-sort="product_name">Tiêu đề ngắn</th>
                                            <th data-sort="product_name">Nội dung</th>
                                            <th data-sort="product_name">Ảnh</th>
                                            <th data-sort="product_name">Thể loại</th>
                                            <th data-sort="product_name">Thời gian tạo</th>
                                            <th data-sort="product_name">Thời gian cập nhật</th>
                                            <th data-sort="city">Hành động</th>
                                        </tr>
                                    </thead>
                                    @foreach ($posts as $item)
                                        <tbody class="list form-check-all">
                                            <tr>
                                                <td class="customer_name">{{ $item->id }}</td>
                                                <td class="product_name">{{ $item->title }}</td>
                                                <td class="product_name">{{ $item->content }}</td>
                                                <td class="product_name">
                                                    <textarea name="" id="" cols="50" rows="5">{{ $item->body }}</textarea>
                                                </td>
                                                <td class="product_name"><img src="{{ \Storage::url($item->image) }}"
                                                        alt="" width="50px"></td>
                                                <td class="product_name">{{ $item->category->name }}</td>
                                                <td class="product_name">{{ $item->created_at }}</td>
                                                <td class="product_name">{{ $item->updated_at }}</td>

                                                <td>
                                                    <ul class="list-inline hstack gap-2 mb-0">
                                                        <li class="list-inline-item" data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                            <a href="{{ route('admin.posts.show', $item->id) }}"
                                                                class="text-primary d-inline-block">
                                                                <i class="ri-eye-fill fs-16"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item edit" data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                            <a href="{{ route('admin.posts.edit', $item->id) }}"
                                                                class="text-primary d-inline-block ">
                                                                <i class="ri-pencil-fill fs-16"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item" data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                            <a class="text-danger d-inline-block "
                                                                href="{{ route('admin.posts.destroy', $item->id) }}"
                                                                onclick="return confirm('Bạn chắc chắn muốn xóa')">
                                                                <i class="ri-delete-bin-5-fill fs-16"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                            </div>
                            <div class="d-flex justify-content-end">
                                <div class="pagination-wrap hstack gap-2">
                                    <a class="page-item pagination-prev disabled" href="#">
                                        Previous
                                    </a>
                                    <ul class="pagination listjs-pagination mb-0"></ul>
                                    <a class="page-item pagination-next" href="#">
                                        Next
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--end col-->
        </div>
        <!--end row-->

    </div>
@endsection

@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                    <h4 class="mb-sm-0">Chi tiết thể loại</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Thể loại</a></li>
                            <li class="breadcrumb-item active">Chi tiết thể loại</li>
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
                            <div class="product-content mt-5">
                                <h5 class="fs-14 mb-3">Chi tiết thể loại</h5>
                                <nav>
                                    <ul class="nav nav-tabs nav-tabs-custom nav-success" id="nav-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="nav-speci-tab" data-bs-toggle="tab" href="#nav-speci" role="tab" aria-controls="nav-speci" aria-selected="true">Chi tiết</a>
                                        </li>
                                    </ul>
                                </nav>
                                <div class="tab-content border border-top-0 p-4" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-speci" role="tabpanel" aria-labelledby="nav-speci-tab">
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row" style="width: 200px;">ID</th>
                                                        <td>{{ $model->id }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Tên thể loại</th>
                                                        <td>{{ $model->name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Ảnh thể loại</th>
                                                        <td>
                                                            <img src="{{ asset('storage/' . $model->image) }}" width="100px" alt=""
                                                            class="img-fluid d-block" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Created_at</th>
                                                        <td>{{ $model->created_at }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Updated_at</th>
                                                        <td>{{ $model->updated_at }}</td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
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


@extends('client.layouts.master')

@section('content')
    <!-- categories-area -->
    <section class="categories-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title section-title-two text-center mb-30">
                        <h2 class="title">Danh mục của chúng tôi</h2>
                        <p>Bơ Nâu Và Đường Nâu Vị Caramelly Tốt, Viền Giòn Phần Nhân Dày Và Mềm Và Những Vũng Nhỏ Tan Chảy
                        </p>
                    </div>
                </div>
            </div>
            @foreach ($categories as $category)
                <div class="categories-item-wrap ">
                    <div class="row justify-content-center">
                        <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                            <div class="categories-item">
                                <div class="categories-img">
                                    <a href="blog.html"><img src="themeclient/assets/img/images/categories_img01.png"
                                            alt=""></a>
                                </div>
                                <div class="  categories-content">
                                    <a href="">{{ $category->name  }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="categories-shape-wrap">
            <img src="themeclient/assets/img/images/categories_shape01.png" alt="">
            <img src="themeclient/assets/img/images/categories_shape02.png" alt="">
        </div>
    </section>
    <!-- categories-area-end -->

    <!-- recipe-area -->
    <section class="recipe-area pt-70 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-wrap mb-30">
                        <div class="section-title">
                            <h2 class="title">Bí quyết tốt nhất hàng tuần</h2>
                        </div>
                        <div class="view-all-btn">
                            <a href="blog.html" class="link-btn">Xem tất cả
                                <span class="svg-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10" fill="none">
                                        <path
                                            d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z"
                                            fill="currentColor" />
                                        <path
                                            d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                        <div class="section-title-line"></div>
                    </div>
                </div>
            </div>
            @foreach ($categories as $category)
                @foreach ($category->posts as $post)
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="ta-horizontal-post">
                                <div class="horizontal-post-thumb">
                                    <a href="blog-details.html"><img src="themeclient/assets/img/blog/recipe_img02.jpg"
                                            alt=""></a>
                                </div>
                                <div class="horizontal-post-content">
                                    <a href="blog.html" class="post-tag">{{ $category->name }}</a>
                                    <h2 class="post-title"><a href="">{{ $post->title }}</a></h2>
                                    <div class="blog-post-meta">
                                        <ul class="list-wrap">
                                            <li><i class="flaticon-user"></i>by<a href="author.html">Admin</a></li>
                                            <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
    </section>
    <!-- recipe-area-end -->
@endsection

@section('title')
    Blog - Zaira
@endsection

@extends('client.layouts.master')

@section('content')
    <main class="fix">

        <!-- breadcrumb-area -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-content">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Trang chủ</a></li>
                                    <li class="breadcrumb-item" aria-current="page"><a href="{{ url('/') }}">Bài viết</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-end -->

        <!-- blog-details-area -->
        <section class="blog-details-area pt-60 pb-60">
            <div class="container">
                <div class="author-inner-wrap">
                    <div class="row justify-content-center">
                        <div class="col-70">
                            <div class="blog-details-wrap">
                                <div class="blog-details-content">
                                    <div class="blog-details-content-top">
                                        @foreach ($categories as $category)
                                            <a href="{{ url('category', [$category->id]) }}"class="post-tag">{{ $category->name }}</a>
                                        @endforeach
                                        <h2 class="title">{{ $post->title }}</h2>
                                        <div class="bd-content-inner">
                                            <div class="blog-post-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-user"></i><a href="">Admin</a>
                                                    </li>
                                                    <li><i class="flaticon-calendar"></i>{{ $post->created_at }}</li>
                                                </ul>
                                            </div>
                                            <div class="blog-details-social">
                                                <ul class="list-wrap">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-details-thumb">
                                        <img src="{{ asset('storage/' . $post->image) }}"
                                            alt="">
                                    </div>
                                    <p class="first-info">{{ $post->body }}</p>
                                </div>
                        
                            </div>
                        </div>
                        <div class="col-30">
                            <div class="sidebar-wrap">
                                <div class="sidebar-widget">
                                    <div class="sidebar-search">
                                        <form action="#">
                                            <input type="text" placeholder="Search . . .">
                                            <button type="submit"><i class="flaticon-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="sidebar-widget sidebar-widget-two">
                                    <div class="widget-title mb-30">
                                        <h6 class="title">Danh mục</h6>
                                        <div class="section-title-line"></div>
                                    </div>
                                    @foreach ($categories as $category)
                                        <div class="sidebar-categories">
                                            <ul class="list-wrap">
                                                <li class="category-item">
                                                    <a href="{{ url('category', [$category->id]) }}"
                                                        data-background="{{ asset('themeclient/assets/img/images/t_cat_img01.jpg') }}">
                                                        <span
                                                            class="post-tag post-tag-three ">{{ $category->name }}</span>
                                                        <span class="right-arrow">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                                fill="none">
                                                                <path
                                                                    d="M1.72308 16L0 14.2769L11.8154 2.46154H1.23077V0H16V14.7692H13.5385V4.18462L1.72308 16Z"
                                                                    fill="currentcolor"></path>
                                                                <path
                                                                    d="M1.72308 16L0 14.2769L11.8154 2.46154H1.23077V0H16V14.7692H13.5385V4.18462L1.72308 16Z"
                                                                    fill="currentcolor"></path>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-details-area-end -->

    </main>
@endsection

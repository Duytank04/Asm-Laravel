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
                                    <li class="breadcrumb-item active" aria-current="page">Bài viết</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-end -->

        <!-- blog-area -->
        <section class="blog-area pt-60 pb-60">
            <div class="container">
                <div class="author-inner-wrap">
                    <div class="row justify-content-center">
                        <div class="col-70">
                            <div class="weekly-post-item-wrap">
                                <div class="weekly-post-item-wrap">
                                    @foreach ($listpost as $post)
                                        <div class="weekly-post-item post-item">
                                            <div class="weekly-post-thumb">
                                                <a href="{{ url('post', [$post->id]) }}"><img src="{{ asset('storage/' . $post->image) }}" alt=""></a>
                                            </div>
                                            <div class="weekly-post-content">
                                                <a href="{{ url('category', [$category->id]) }}" class="post-tag">{{ $category->name }}</a>
                                                <h3 class="post-title"><a href="{{ url('post', [$post->id]) }}">{{ $post->title }}</a></h3>
                                                <div class="blog-post-meta">
                                                    <ul class="list-wrap">
                                                        <li class="date"><i
                                                                class="fi fi-rr-calendar"></i>{{ $post->created_at }}</li>
                                                    </ul>
                                                </div>
                                                <p>{{ $post->content }}</p>
                                                <div class="view-all-btn">
                                                    <a href="{{ url('post', [$post->id]) }}" class="link-btn">Xem thêm
                                                        <span class="svg-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10">
                                                                <path fill="none"
                                                                    d="M1.07692 1010 8.92381.738462 1.53846.769231 1.07692 10Z" />
                                                                <path fill="currentColor"
                                                                    d="M1.07692 1010 8.92381.738462 1.53846.769231 1.07692 10Z" />
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="pagination-wrap mt-60">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination list-wrap">
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-30">
                            <div class="sidebar-wrap">
                                <div class="sidebar-widget">
                                    <div class="sidebar-search">
                                        <form action="#">
                                            <input type="text" placeholder="Tìm kiếm ở đây . . .">
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
                                                        <span class="post-tag post-tag-three ">{{ $category->name }}</span>
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
    </main>
@endsection

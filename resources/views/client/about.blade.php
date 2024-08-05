@section('title')
About - Zaira
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
                                <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Về chúng tôi</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->

    <!-- about-area -->
    <section class="about-area pt-80 pb-80">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-7 col-md-10 order-0 order-lg-2">
                    <div class="about-img">
                        <div class="left-img">
                            <img src="themeclient/assets/img/images/about_img01.jpg" alt="">
                            <img src="themeclient/assets//img/images/about_img02.jpg" alt="">
                        </div>
                        <div class="right-img">
                            <img src="themeclient/assets/img/images/about_img03.jpg" alt="">
                        </div>
                        <img src="themeclient/assets/img/images/about_shape.png" alt="" class="shape">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="about-content">
                        <div class="section-title-five">
                            <span class="sub-title">CHÚNG TA LÀ AI</span>
                            <h2 class="title">Chúng tôi xây dựng cầu nối giữa các công ty và khách hàng</h2>
                        </div>
                        <span>Nó đã trở nên phổ biến vào những năm 1960 với việc phát hành các tờ Letraset có chứa các đoạn văn Lorem Ipsum</span>
                        <p>trở nên phổ biến vào những năm 1960 với việc phát hành các tờ Letraset có chứa các đoạn văn Lorem Ipsum, và gần đây hơn là với phần mềm xuất bản trên máy tính để bàn như Aldus PageMaker.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-area-end -->

</main>
@endsection

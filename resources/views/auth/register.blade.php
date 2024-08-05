@section('title')
    Register - Zaira
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
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Register</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-end -->
        <!-- contact-area -->
        <section class="contact-area pt-80 pb-50">
            <div class="container">
                <div class="contact-info-wrap">
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-lg-6">
                            <div class="contact-info-item">
                                <div class="icon">
                                    <img src="themeclient/assets/img/icon/contact_icon01.svg" alt="">
                                </div>
                                <div class="content">
                                    <h5 class="title">Location</h5>
                                    <p>2118 Thornridge Cir. Syracuse</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="contact-info-item">
                                <div class="icon">
                                    <img src="themeclient/assets/img/icon/contact_icon02.svg" alt="">
                                </div>
                                <div class="content">
                                    <h5 class="title">E-mail</h5>
                                    <p>Info@ghoradimgmail.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="contact-info-item">
                                <div class="icon">
                                    <img src="themeclient/assets/img/icon/contact_icon03.svg" alt="">
                                </div>
                                <div class="content">
                                    <h5 class="title">Phone</h5>
                                    <p>+123 98598 000, +123 8855 2222</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-10">
                            <div class="contact-img">
                                <img src="themeclient/assets/img/images/about_img03.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-form">
                                <h4 class="title">Welcome to Zaira</h4>
                                <p>Please sign-in to your account</p>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form id="contact-form" action="{{ route('register') }}" method="POST">
                                    @csrf
                                    <div class="form-grp">
                                        <label for="exampleFormControlTextarea1" class="form-label">Tên đăng kí</label>
                                        <input type="text" id="name" name="name"
                                            placeholder="Enter your Username">
                                    </div>
                                    <div class="form-grp">
                                        <label for="exampleFormControlTextarea1" class="form-label">Email</label>
                                        <input type="email" id="email" name="email" placeholder="Enter your E-mail">
                                    </div>
                                    <div class="form-grp">
                                        <label for="exampleFormControlTextarea1" class="form-label">Mật khẩu</label>
                                        <input type="password" id="password" name="password"
                                            placeholder="Enter your Password">
                                    </div>
                                    <div class="form-grp">
                                        <label for="exampleFormControlTextarea1" class="form-label">Nhập lại mật
                                            khẩu</label>
                                        <input type="password" id="password_confirmation" name="password_confirmation"
                                            placeholder="Enter your Password">
                                    </div>
                                    <button type="submit" class="btn btn-two">Đăng kí</button>
                                    <div class="content">
                                        <p>Already have an account ? |<a href="{{ url('login') }}"> Sign in instead</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area-end -->

        <!-- newsletter-area -->
        <section class="newsletter-area-three">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="newsletter-wrap-three">
                            <div class="newsletter-content">
                                <h2 class="title">Get Our Latest News & Update</h2>
                            </div>
                            <div class="newsletter-form">
                                <form action="#">
                                    <div class="form-grp">
                                        <input type="text" placeholder="Name">
                                    </div>
                                    <div class="form-grp">
                                        <input type="email" placeholder="E-mail">
                                    </div>
                                    <button type="submit" class="btn">Submit Now</button>
                                </form>
                            </div>
                            <div class="newsletter-social">
                                <h4 class="title">Follow Us:</h4>
                                <ul class="list-wrap">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- newsletter-area-end -->

    </main>
@endsection

@section('title')
Login - Zaira
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
                                    <li class="breadcrumb-item active" aria-current="page">Login</li>
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
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="contact-form">
                            <h4 class="title">Welcome to Zaira</h4>
                            <p>Please sign-in to your account</p>
                            <form id="contact-form" action="https://themegenix.net/html/zaira/themeclient/assets/mail.php"
                                method="POST">
                                <div class="form-grp">
                                    <label for="exampleFormControlTextarea1" class="form-label">Username</label>
                                    <input type="text" name="name" placeholder="Enter your username">
                                </div>
                                <div class="form-grp">
                                    <label for="exampleFormControlTextarea1" class="form-label">Password</label>
                                    <input type="text" name="password" placeholder="............">
                                </div>
                                <button type="submit" class="title btn btn-two">Sign in</button>
                                <div>
                                    <p >New on our platform ? |<a href="{{ url('/register') }}"> Create an account</a></p>
                                </div>
                            </form>
                            <p class="ajax-response mb-0"></p>
                        </div>
                    </div>
                </div>
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
                </div>
            </div>
        </section>
        <!-- contact-area-end -->

    </main>
@endsection

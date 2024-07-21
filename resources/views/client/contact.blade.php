@section('title')
Contact - Zaira
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
                                    <li class="breadcrumb-item active" aria-current="page">Contact With Us</li>
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
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="contact-img">
                            <img src="themeclient/assets/img/images/contact_img.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-form">
                            <h4 class="title">Drop Us a Message</h4>
                            <p>Have a question? Need help? Don't hesitate, drop us a line</p>
                            <form id="contact-form" action="https://themegenix.net/html/zaira/themeclient/assets/mail.php"
                                method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input type="text" name="name" placeholder="Name*">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input type="email" name="email" placeholder="E-mail*">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-grp">
                                    <input type="number" name="phone" placeholder="Phone*">
                                </div>
                                <div class="form-grp">
                                    <textarea name="message" placeholder="Message*"></textarea>
                                </div>
                                <button type="submit" class="btn btn-two">Submit Now</button>
                            </form>
                            <p class="ajax-response mb-0"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area-end -->

        <!-- contact-map -->
        <div class="contact-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.332792000835!2d144.96011341744386!3d-37.805673299999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sbd!4v1685027435635!5m2!1sen!2sbd"
                allowfullscreen loading="lazy"></iframe>
        </div>
        <!-- contact-map-end -->

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
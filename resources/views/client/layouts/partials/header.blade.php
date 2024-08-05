<div id="header-fixed-height"></div>
<div class="header-top-wrap">
    <div class="container-fluid p-0">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="header-top-menu">
                    <ul class="list-wrap">
                        <li><a href="contact.html">Diễn đàn</a></li>
                        <li><a href="{{ url('/about') }}">Về chúng tôi</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="header-top-social">
                    <h5 class="title">Theo dõi chúng tôi</h5>
                    <ul class="list-wrap">
                        <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="sticky-header" class="menu-area">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-12">
                <div class="menu-wrap">
                    <div class="row align-items-center g-0">
                        <div class="col-xl-5">
                            <div class="header-left-side">
                                <div class="offcanvas-toggle">
                                    <a href="javascript:void(0)" class="menu-tigger">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                                <div class="navbar-wrap main-menu d-none d-xl-flex">
                                    <ul class="navigation">
                                        <li class="active menu-item-has-children"><a href="#">Trang chủ</a>
                                            <ul class="sub-menu">
                                                <li class="active"><a href="{{ url('/') }}">Trang chủ</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#">Danh mục</a>
                                            <ul class="sub-menu">
                                                @foreach ($categories as $category)
                                                    <li><a
                                                            href="{{ url('category', [$category->id]) }}">{{ $category->name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li><a href="{{ url('/about') }}">Về chúng tôi</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4">
                            <div class="logo text-center">
                                <a href="{{ url('/') }}"><img
                                        src="{{ asset('themeclient/assets/img/logo/logo.png') }}" alt="Logo"></a>
                            </div>
                            <div class="logo d-none text-center">
                                <a href="{{ url('/') }}"><img
                                        src="{{ asset('themeclient/assets/img/logo/w_logo.png') }}" alt="Logo"></a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-9 col-md-8">
                            <div class="header-right-side">
                                <div class="header-search-wrap">
                                    <form action="#">
                                        <input type="text" placeholder="Tìm kiếm ở đây...">
                                        <button type="submit"><i class="flaticon-search"></i></button>
                                    </form>
                                </div>
                                <div class="header-action d-none d-md-block">
                                    <ul class="list-wrap">
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf                    
                                                <button type="submit" >Đăng xuất</button>
                                        </form>
                                        <li class="header-sine-in">
                                            @if (Auth::check())
                                                <a href="{{ url('/register') }}"><i class="flaticon-user">{{ Auth::user()->name }}</i></a>
                                            @else
                                                <a href="{{ url('/login') }}"><i class="flaticon-user"></i></a>
                                            @endif
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                </div>

                <!-- Mobile Menu  -->
                <div class="mobile-menu">
                    <nav class="menu-box">
                        <div class="close-btn"><i class="fas fa-times"></i></div>
                        <div class="nav-logo">
                            <a href="{{ url('/') }}"><img
                                    src="{{ asset('themeclient/assets/img/logo/logo.png') }}" alt="Logo"></a>
                        </div>
                        <div class="nav-logo d-none">
                            <a href="{{ url('/') }}"><img
                                    src="{{ asset('themeclient/assets/img/logo/w_logo.png') }}" alt="Logo"></a>
                        </div>
                        <div class="mobile-search">
                            <form action="#">
                                <input type="text" placeholder="Tìm kiếm ở đây...">
                                <button><i class="flaticon-search"></i></button>
                            </form>
                        </div>
                        <div class="menu-outer">
                            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                        </div>
                        <div class="social-links">
                            <ul class="clearfix list-wrap">
                                <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="menu-backdrop"></div>
                <!-- End Mobile Menu -->

            </div>
        </div>
    </div>
</div>

<!-- offCanvas-area -->
<div class="offCanvas-wrap">
    <div class="offCanvas-body">
        <div class="offCanvas-toggle">
            <span></span>
            <span></span>
        </div>
        <div class="offCanvas-content">
            <div class="offCanvas-logo logo">
                <a href="{{ url('/') }}" class="logo-dark"><img
                        src="{{ asset('themeclient/assets/img/logo/logo.png') }}" alt="Logo"></a>
                <a href="{{ url('/') }}" class="logo-light"><img
                        src="{{ asset('themeclient/assets/img/logo/w_logo.png') }}" alt="Logo"></a>
            </div>
            <p>Lập luận ủng hộ việc sử dụng văn bản phụ sẽ như thế này: Nếu bạn sử dụng bất kỳ nội dung thực nào</p>
            <ul class="offCanvas-instagram list-wrap">
                <li><a href="{{ asset('themeclient/assets/img/blog/hr_post01.jpg') }}" class="popup-image"><img
                            src="{{ asset('themeclient/assets/img/blog/hr_post01.jpg') }}" alt="img"></a></li>
                <li><a href="{{ asset('themeclient/assets/img/blog/hr_post02.jpg') }}" class="popup-image"><img
                            src="{{ asset('themeclient/assets/img/blog/hr_post02.jpg') }}" alt="img"></a></li>
                <li><a href="{{ asset('themeclient/assets/img/blog/hr_post03.jpg') }}" class="popup-image"><img
                            src="{{ asset('themeclient/assets/img/blog/hr_post03.jpg') }}" alt="img"></a></li>
                <li><a href="{{ asset('themeclient/assets/img/blog/hr_post04.jpg') }}" class="popup-image"><img
                            src="{{ asset('themeclient/assets/img/blog/hr_post04.jpg') }}" alt="img"></a></li>
                <li><a href="{{ asset('themeclient/assets/img/blog/hr_post05.jpg') }}" class="popup-image"><img
                            src="{{ asset('themeclient/assets/img/blog/hr_post05.jpg') }}" alt="img"></a></li>
                <li><a href="{{ asset('themeclient/assets/img/blog/hr_post06.jpg') }}" class="popup-image"><img
                            src="{{ asset('themeclient/assets/img/blog/hr_post06.jpg') }}" alt="img"></a></li>
            </ul>
        </div>
        <div class="offCanvas-contact">
            <h4 class="title">Get In Touch</h4>
            <ul class="offCanvas-contact-list list-wrap">
                <li><i class="fas fa-envelope-open"></i><a href="mailto:info@webmail.com">info@webmail.com</a>
                </li>
                <li><i class="fas fa-phone"></i><a href="tel:88899988877">888 999 888 77</a></li>
                <li><i class="fas fa-map-marker-alt"></i> Phạm Văn Đồng, Cầu Giấy, Hà Nội</li>
            </ul>
            <ul class="offCanvas-social list-wrap">
                <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
                <li><a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="javascript:void(0)"><i class="fab fa-youtube"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<div class="offCanvas-overlay"></div>
<!-- offCanvas-area-end -->

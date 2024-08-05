<div class="navbar-brand-box">
    <!-- Dark Logo-->
    <a href="{{ url('admin') }}" class="logo logo-dark">
        <span class="logo-sm">
            <img src=" {{ asset('themeadmin/assets/images/logo-sm.png ')}}" alt="" height="22">
        </span>
        <span class="logo-lg">
            <img src=" {{ asset('themeadmin/assets/images/logo-dark.png ')}}" alt="" height="17">
        </span>
    </a>
    <!-- Light Logo-->
    <a href="{{ url('admin') }}" class="logo logo-light">
        <span class="logo-sm">
            <img src=" {{ asset('themeadmin/assets/images/logo-sm.png ')}}" alt="" height="22">
        </span>
        <span class="logo-lg">
            <img src=" {{ asset('themeadmin/assets/images/logo-light.png ')}}" alt="" height="17">
        </span>
    </a>
    <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
        id="vertical-hover">
        <i class="ri-record-circle-line"></i>
    </button>
</div>
<div class="dropdown sidebar-user m-1 rounded">
    <div class="dropdown-menu dropdown-menu-end">
        <!-- item-->
        <h6 class="dropdown-header">Welcome Anna!</h6>
        <a class="dropdown-item" href="pages-profile.html"><i
                class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span
                class="align-middle">Profile</span></a>
        <a class="dropdown-item" href="pages-profile-settings.html"><span
                class="badge bg-success-subtle text-success mt-1 float-end">New</span><i
                class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span
                class="align-middle">Settings</span></a>
        <a class="dropdown-item" href="auth-lockscreen-basic.html"><i
                class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Lock
                screen</span></a>
        <a class="dropdown-item" href="auth-logout-basic.html"><i
                class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle"
                data-key="t-logout">Logout</span></a>
    </div>
</div>
<div id="scrollbar">
    <div class="container-fluid">
        <div id="two-column-menu">
        </div>
        <ul class="navbar-nav" id="navbar-nav">
            <li class="menu-title"><span data-key="t-menu">Menu</span></li>
            <li class="nav-item">
                <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="sidebarApps">
                    <i class="ri-apps-2-line"></i> <span data-key="t-apps">Apps</span>
                </a>
                <div class="collapse menu-dropdown" id="sidebarApps">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="#sidebarEcommerce" class="nav-link" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="sidebarEcommerce"
                                data-key="t-ecommerce">
                                Quản lý bài viết 
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarEcommerce">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ url('admin/posts') }}" class="nav-link"
                                            data-key="t-orders">
                                            Bài viết </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="collapse menu-dropdown" id="sidebarEcommerce">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ url('admin/posts/create') }}" class="nav-link"
                                            data-key="t-orders">
                                            Thêm bài viết </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="#sidebarProjects" class="nav-link" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="sidebarProjects"
                                data-key="t-projects">
                                Quản lý thể loại
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarProjects">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ url('admin/categories') }}" class="nav-link"
                                            data-key="t-list"> Thể loại
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="collapse menu-dropdown" id="sidebarProjects">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ url('admin/categories/create') }}" class="nav-link"
                                            data-key="t-list"> Thêm thể loại
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li> <!-- end Dashboard Menu -->
        </ul>
    </div>
    <!-- Sidebar -->
</div>
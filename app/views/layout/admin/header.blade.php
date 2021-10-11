<!-- Topbar Start -->
<div class="navbar-custom">
    <ul class="list-unstyled topnav-menu float-right mb-0">
        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown"
                href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <img src="{{PUBLIC_PATH}}image/{{isset($_SESSION['auth']) ? $_SESSION['auth']['avatar'] : 'avatar_empty.jfif'}}" alt="user-image" class="rounded-circle">
                <span class="pro-user-name ml-1">
                    {{isset($_SESSION['auth']) ? $_SESSION['auth']['name'] : 'User'}} <i class="mdi mdi-chevron-down"></i>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                <!-- item-->
                <div class="dropdown-item noti-title">
                    <h5 class="m-0 text-white">
                        Xin chào !
                    </h5>
                </div>
                <!-- item-->
                <a href="{{BASE_URL}}admin/profile" class="dropdown-item notify-item">
                    <i class="fe-user"></i>
                    <span>Tài khoản của tôi</span>
                </a>
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="fe-settings"></i>
                    <span>Cài đặt</span>
                </a>
                <!-- item-->
                <a href="{{BASE_URL}}admin/security" class="dropdown-item notify-item">
                    <i class="fe-lock"></i>
                    <span>Bảo mật</span>
                </a>
                <div class="dropdown-divider"></div>
                <!-- item-->
                <a href="{{BASE_URL}}logout" class="dropdown-item notify-item">
                    <i class="fe-log-out"></i>
                    <span>Đăng xuất</span>
                </a>
            </div>
        </li>

        <li class="dropdown notification-list">
            <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                <i class="fe-settings noti-icon"></i>
            </a>
        </li>


    </ul>

    <!-- LOGO -->
    <div class="logo-box">
        <a href="{{BASE_URL}}" class="logo text-center">
            <span class="logo-lg">
                <img src="{{PUBLIC_PATH}}image/logo.png" alt="" height="50">
                <!-- <span class="logo-lg-text-light">Upvex</span> -->
            </span>
            <span class="logo-sm">
                <!-- <span class="logo-sm-text-dark">X</span> -->
                <img src="{{PUBLIC_PATH}}image/logo.png" alt="" height="58">
            </span>
        </a>
    </div>

    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
        <li>
            <button class="button-menu-mobile waves-effect waves-light">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </li>
    </ul>
</div>
<!-- end Topbar -->

<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li class="menu-title">v1</li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="la la-dashboard"></i>
                        <span class="badge badge-info badge-pill float-right">2</span>
                        <span>Tổng Quát</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);">
                        <i class="la la-cube"></i>
                        <span>Quản Trị</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{BASE_URL}}admin/san-pham">Sản phẩm</a>
                        </li>
                        <li>
                            <a href="{{BASE_URL}}admin/bai-viet">Bài Viết</a>
                        </li>
                        <li>
                            <a href="{{BASE_URL}}admin/chu-de">Chủ Đề</a>
                        </li>
                    </ul>
                </li>

                <li class="menu-title mt-2">v2</li>
                <li>
                    <a href="javascript: void(0);">
                        <i class="la la-map"></i>
                        <span>Thùng rác</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{BASE_URL}}admin/trash/bai-viet">Bài viết</a>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->

<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->
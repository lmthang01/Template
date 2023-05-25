<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Form - srtdash</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="../srtdash/assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="../srtdash/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../srtdash/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../srtdash/assets/css/themify-icons.css">
    <link rel="stylesheet" href="../srtdash/assets/css/metisMenu.css">
    <link rel="stylesheet" href="../srtdash/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../srtdash/assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="../srtdash/assets/css/typography.css">
    <link rel="stylesheet" href="../srtdash/assets/css/default-css.css">
    <link rel="stylesheet" href="../srtdash/assets/css/styles.css">
    <link rel="stylesheet" href="../srtdash/assets/css/editstyles.css">
    <link rel="stylesheet" href="../srtdash/assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="../srtdash/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!-- Preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- Preloader area end -->
    <!-- Page container area start -->
    <div class="page-container">
        <!-- Sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <!-- Logo -->
                <div class="logo">
                    <a href="index.html"><img src="../srtdash/assets/images/icon/logo.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <!-- Khách hàng -->
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true">
                                <i class="ti-user"></i><span>Khách hàng</span></a>
                                <ul class="collapse">
                                    <li><a href="">Khách hàng</a></li>
                                    <li><a href="">Liên hệ với khách hàng</a></li>
                                    <li><a href="">List khách hàng</a></li>
                                </ul>
                            </li>

                            <!-- Kinh doanh -->
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true">
                                <i class="fa fa-briefcase"></i><span>Kinh doanh</span></a>
                                <ul class="collapse">
                                    <li class="active"><a href="../View/transaction.php">Giao dịch với khách hàng</a></li>
                                    <li><a href="../View/order.php">Đơn hàng</a></li>
                                    <li><a href="../View/contract.php">Hợp đồng bán ra</a></li>
                                </ul>
                            </li>
                            
                            <!-- Báo cáo -->
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-bar-chart" aria-hidden="true"></i> <span>Báo cáo</span></a>
                                <ul class="collapse">
                                    <li><a href="">Biểu đồ</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Sidebar menu area end -->

        <!-- Main content area start -->
        <div class="main-content">
            <!-- Header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- Nav and Search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left nav-btn-click">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div>
                    </div>
                    <!-- Profile info & Task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            
                            <!-- Zoom -->
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>

                            <!-- Notify -->
                            <li class="dropdown">
                                <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
                                    <span>2</span>
                                </i>
                                <div class="dropdown-menu bell-notify-box notify-box">
                                    <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
                                    <div class="nofity-list">
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                            <div class="notify-text">
                                                <p>You have Changed Your Password</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                            <div class="notify-text">
                                                <p>New Commetns On Post</p>
                                                <span>30 Seconds ago</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
                                            <div class="notify-text">
                                                <p>Some special like you</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                            <div class="notify-text">
                                                <p>New Commetns On Post</p>
                                                <span>30 Seconds ago</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
                                            <div class="notify-text">
                                                <p>Some special like you</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                            <div class="notify-text">
                                                <p>You have Changed Your Password</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                            <div class="notify-text">
                                                <p>You have Changed Your Password</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <!-- Message -->
                            <li class="dropdown">
                                <i class="fa fa-envelope-o dropdown-toggle" data-toggle="dropdown"><span>3</span></i>
                                <div class="dropdown-menu notify-box nt-enveloper-box">
                                    <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
                                    <div class="nofity-list">
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="../srtdash/assets/images/author/author-img1.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="../srtdash/assets/images/author/author-img2.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">When you can connect with me...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="../srtdash/assets/images/author/author-img3.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">I missed you so much...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="../srtdash/assets/images/author/author-img4.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Your product is completely Ready...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="../srtdash/assets/images/author/author-img2.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="../srtdash/assets/images/author/author-img1.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="../srtdash/assets/images/author/author-img3.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <!-- Setting -->
                            <li class="settings-btn">
                                <i class="ti-settings"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Header area end -->

            <!-- Page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="../View/transaction.php">Home</a></li>
                                <li><span>Kinh doanh</span></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Profile Info -->
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="../srtdash/assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Hà Trung Nghĩa<i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item profile-option" href="#">Hướng dẫn sử dụng</a>
                                <a class="dropdown-item profile-option" href="#">Thông tin cá nhân</a>
                                <a class="dropdown-item profile-option" href="#">Cài đặt Email</a>
                                <a class="dropdown-item profile-option" href="#">Hòm thư</a>
                                <a class="dropdown-item profile-option" href="#">Trợ giúp</a>
                                <a class="dropdown-item profile-option" href="#">Thoát</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page title area end -->

            <div class="main-content-inner">
                <div class="row">
                    <div class="col-lg-12 col-ml-12">
                        <div class="row">
                            <!-- Tiêu đề -->
                            <div class="col-12 mt-5">
                                <div class="card card-header-main">
                                    <div class="card-body">
                                        <div class="card-header-order">
                                            <h4 class="header-title header-title-main">Chi tiết giao dịch</h4>
                                            <div class="btn-group-head-order">
                                                <a href="../View/editTransaction.php">
                                                    <button type="button" class="btn btn-addorder btn-back">Sửa</button>
                                                </a>
                                                <a href="../View/transaction.php">
                                                    <button type="button" class="btn btn-addorder btn-back">Trở về</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End -->
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="row form-group">
                                                    <div class="col-sm-4">
                                                        <label for="example-text-input" class="col-form-label input-label"><strong>Tên giao dịch:</strong></label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="col-form-label input-label">Tư vấn lộ trình</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-sm-4">
                                                        <label for="example-text-input" class="col-form-label input-label"><strong>Người giao việc:</strong></label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="col-form-label input-label">Hà Trung Nghĩa</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-sm-4">
                                                        <label for="example-text-input" class="col-form-label input-label"><strong>Người phụ trách:</strong></label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="col-form-label input-label">Lê Minh Thắng</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-sm-4">
                                                        <label for="example-text-input" class="col-form-label input-label"><strong>Ngày bắt đầu:</strong></label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="col-form-label input-label">16/05/2023 18:24:00</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-sm-4">
                                                        <label for="example-text-input" class="col-form-label input-label"><strong>Ngày kết thúc:</strong></label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="col-form-label input-label">16/05/2023 23:59:00</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-sm-4">
                                                        <label for="example-text-input" class="col-form-label input-label"><strong>Ngày hoàn thành:</strong></label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="col-form-label input-label">16/05/2023 18:28:38</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-sm-4">
                                                        <label for="example-text-input" class="col-form-label input-label"><strong>Loại giao dịch:</strong></label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="col-form-label input-label">Gọi điện thoại</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-sm-4">
                                                        <label for="example-text-input" class="col-form-label input-label"><strong>Trạng thái:</strong></label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="col-form-label input-label">Đã hoàn thành</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="row form-group">
                                                    <div class="col-sm-4">
                                                        <label for="example-text-input" class="col-form-label input-label"><strong>Mức ưu tiên:</strong></label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="col-form-label input-label">3</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-sm-4">
                                                        <label for="example-text-input" class="col-form-label input-label"><strong>Số ngày nhắc việc:</strong></label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="col-form-label input-label">...</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-sm-4">
                                                        <label for="example-text-input" class="col-form-label input-label"><strong>Mô tả:</strong></label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="col-form-label input-label">Tư vấn lộ trình học toeic mục tiêu 600+</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-sm-4">
                                                        <label for="example-text-input" class="col-form-label input-label"><strong>Đánh giá:</strong></label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="col-form-label input-label">...</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-sm-4">
                                                        <label for="example-text-input" class="col-form-label input-label"><strong>Người liên hệ:</strong></label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="col-form-label input-label">...</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-sm-4">
                                                        <label for="example-text-input" class="col-form-label input-label"><strong>Chức vụ:</strong></label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="col-form-label input-label">...</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-sm-4">
                                                        <label for="example-text-input" class="col-form-label input-label"><strong>Kết quả:</strong></label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="col-form-label input-label">...</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-sm-4">
                                                        <label for="example-text-input" class="col-form-label input-label"><strong>Địa chỉ giao dịch:</strong></label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="col-form-label input-label">...</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>© Copyright 2018. All right reserved.</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
    <div class="offset-area">
        <div class="offset-close"><i class="ti-close"></i></div>
        <ul class="nav offset-menu-tab">
            <li><a class="active" data-toggle="tab" href="#activity">Activity</a></li>
            <li><a data-toggle="tab" href="#settings">Settings</a></li>
        </ul>
        <div class="offset-content tab-content">
            <div id="activity" class="tab-pane fade in show active">
                <div class="recent-activity">
                    <div class="timeline-task">
                        <div class="icon bg1">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Added</h4>
                            <span class="time"><i class="ti-time"></i>7 Minutes Ago</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>You missed you Password!</h4>
                            <span class="time"><i class="ti-time"></i>09:20 Am</span>
                        </div>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="fa fa-bomb"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Member waiting for you Attention</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="ti-signal"></i>
                        </div>
                        <div class="tm-title">
                            <h4>You Added Kaji Patha few minutes ago</h4>
                            <span class="time"><i class="ti-time"></i>01 minutes ago</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg1">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Ratul Hamba sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Hello sir , where are you, i am egerly waiting for you.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="fa fa-bomb"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="ti-signal"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                </div>
            </div>
            <div id="settings" class="tab-pane fade">
                <div class="offset-settings">
                    <h4>General Settings</h4>
                    <div class="settings-list">
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Notifications</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch1" />
                                    <label for="switch1">Toggle</label>
                                </div>
                            </div>
                            <p>Keep it 'On' When you want to get all the notification.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show recent activity</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch2" />
                                    <label for="switch2">Toggle</label>
                                </div>
                            </div>
                            <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show your emails</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch3" />
                                    <label for="switch3">Toggle</label>
                                </div>
                            </div>
                            <p>Show email so that easily find you.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show Task statistics</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch4" />
                                    <label for="switch4">Toggle</label>
                                </div>
                            </div>
                            <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Notifications</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch5" />
                                    <label for="switch5">Toggle</label>
                                </div>
                            </div>
                            <p>Use checkboxes when looking for yes or no answers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="../srtdash/assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="../srtdash/assets/js/popper.min.js"></script>
    <script src="../srtdash/assets/js/bootstrap.min.js"></script>
    <script src="../srtdash/assets/js/owl.carousel.min.js"></script>
    <script src="../srtdash/assets/js/metisMenu.min.js"></script>
    <script src="../srtdash/assets/js/jquery.slimscroll.min.js"></script>
    <script src="../srtdash/assets/js/jquery.slicknav.min.js"></script>

    <!-- others plugins -->
    <script src="../srtdash/assets/js/plugins.js"></script>
    <script src="../srtdash/assets/js/scripts.js"></script>
</body>

</html>

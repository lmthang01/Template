<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Liên hệ với khách hàng</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="../../srtdash/assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="../../srtdash/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../srtdash/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../srtdash/assets/css/themify-icons.css">
    <link rel="stylesheet" href="../../srtdash/assets/css/metisMenu.css">
    <link rel="stylesheet" href="../../srtdash/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../srtdash/assets/css/slicknav.min.css">
    <!-- amcharts css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="../../srtdash/assets/css/typography.css">
    <link rel="stylesheet" href="../../srtdash/assets/css/default-css.css">
    <link rel="stylesheet" href="../../srtdash/assets/css/styles.css">
    <link rel="stylesheet" href="../../srtdash/assets/css/responsive.css">
    <link rel="stylesheet" href="../../srtdash/assets/css/editstyles.css">
    <!-- modernizr css -->
    <script src="../../srtdash/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="../../View/index.php"><img src="../../srtdash/assets/images/icon/logo.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                           
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-table"></i>
                                    <span>Khách hàng</span></a>
                                <ul class="collapse">
                               
                                    <li class="active"><a href="../../View/customer.php">Khách hàng</a></li>
                                    <li class="active"><a href="../../View/Lienhe/personcontact.php">Liên hệ với khách hàng</a></li>
                                    <li class="active"><a href="../../View/List/listcustomer.php">Danh sách khách hàng</a></li>
                                </ul>
                            </li>
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-table"></i>
                                    <span>Kinh doanh</span></a>
                                <ul class="collapse">
                               
                                    <li class="active"><a href="../addnewOrder.php">Giao dịch với đơn hàng</a></li>
                                    <li class="active"><a href="../../View/customer.php">Đơn hàng</a></li>
                                    <li class="active"><a href="../../View/customer.php">Hợp đồng bán ra</a></li>
                                </ul>
                            </li>
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-table"></i>
                                    <span>Báo cáo</span></a>
                                <ul class="collapse">
                               
                                    <li class="active"><a href="../../View/customer.php">Biểu đồ</a></li>
                                 
                                </ul>
                            <li><a href="maps.html"><i class="ti-map-alt"></i> <span>Bản đồ</span></a></li>
                            <li><a href="invoice.html"><i class="ti-receipt"></i> <span>Invoice Summary</span></a></li>
                          
                            
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <form action="#">
                                <input type="text" name="search" placeholder="Tìm kiếm..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
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
                            <li class="dropdown">
                                <i class="fa fa-envelope-o dropdown-toggle" data-toggle="dropdown"><span>3</span></i>
                                <div class="dropdown-menu notify-box nt-enveloper-box">
                                    <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
                                    <div class="nofity-list">
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="../../srtdash/assets/images/author/author-img1.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="../../srtdash/assets/images/author/author-img2.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">When you can connect with me...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="../../srtdash/assets/images/author/author-img3.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">I missed you so much...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="../../srtdash/assets/images/author/author-img4.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Your product is completely Ready...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="../../srtdash/assets/images/author/author-img2.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="../../srtdash/assets/images/author/author-img1.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="../../srtdash/assets/images/author/author-img3.jpg" alt="image">
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
                            <li class="settings-btn">
                                <i class="ti-settings"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Liên hệ với khách hàng</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="../../View/index.php">Nhà</a></li>
                                <li><span>Cập nhật liên hệ</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile  pull-right">
                            <img class="avatar user-thumb" src="../../srtdash/assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Huỳnh Nhật Trường <i class="fa fa-angle-down"></i></h4>
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
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                <div class="col-lg-12">
                        <div class="row">
                  
                            <!-- Form nhập thông tin liên hệ start-->
                            <div class="col-12 mt-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-header-order">
                                            <h4 class="header-title">Cập nhật liên hệ</h4>
                                            <div class="btn-group-head-order">
                                                <button type="button" class="btn btn-addorder"><i class="fa fa-floppy-o" aria-hidden="true"></i><span>Cập nhật</span></button>
                                                <!-- <button type="button" class="btn btn-addorder"><i class="fa fa-plus-circle" aria-hidden="true"></i><span>Lưu và sinh hợp đồng</span></button> -->
                                                <button onclick="window.location.href='../../View/Lienhe/personcontact.php'" type="button" class="btn btn-addorder btn-back">Trở về</button>
                                            </div>
                                        </div>
                                        <p class="text-muted font-14">Vui lòng điền thông tin cần thiết vào form bên dưới. Các trường có dấu <code>*</code> là bắt buộc phải điền.</p>
                                        
                                        <div class="row">
                                            

                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label">Người liên hệ</label>
                                                    <input class="form-control" type="text" value="Huỳnh Nhật Trường" id="example-text-input">
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-search-input" class="col-form-label">Khách hàng</label>
                                                    <input class="form-control" type="text" value="Hà Trung Nghĩa" id="example-text-input">
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-form-label">Chức vụ</label>
                                                    <select class="form-control">
                                                        <option>---Chọn chức vụ--</option>
                                                        <option>Giám đốc</option>
                                                        <option>Phó giám đốc</option>
                                                        <option>Trưởng phòng kỹ thuật</option>
                                                        <option>Thu mua</option>
                                                    </select>
                                                </div> 
                                                <div class="form-group">
                                                    <label for="example-email-input" class="col-form-label">Email</label>
                                                    <input class="form-control" type="email" value="truong@gmail.com" id="example-email-input">
                                                </div>
                                                        
                                            </div>

                                            <div class="col-6 ">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label">Địa chỉ liên hệ</label>
                                                    <input type="text" class="form-control" id="example-text-input" value="Xuân Khánh - Ninh Kiều - Cần Thơ">
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-form-label">Giới tính</label>
                                                    <select class="form-control">
                                                        <!-- <option>Chọn giới tính</option> -->
                                                        <option>Nam</option>
                                                        <option>Nữ</option>
                                                    </select>
                                                </div>                                      
                                                <div class="form-group">
                                                    <label for="example-tel-input" class="col-form-label">Số điện thoại</label>
                                                    <input class="form-control" type="tel" value="0988222666" id="example-tel-input">
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-date-input" class="col-form-label">Ngày sinh</label>
                                                    <input class="form-control" type="date" value="2001-01-01" id="example-date-input">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Form nhập thông tin hàng hóa end -->
                        </div>
                    </div>
                   
                </div>
                
            </div>

            <div class="main-content-inner">
                <div class="row">
                    <!-- data table start -->
                    <div class="col-12 ">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Chọn khách hàng</h4>
                                
                                <div class="data-tables">
                                    <table id="dataTable" class="text-center">
                                        <thead class="bg-light text-capitalize">
                                            <tr>
                                                <th>MÃ KHÁCH HÀNG</th>
                                                <th>TÊN KHÁCH HÀNG</th>
                                                <th>ĐỊA CHỈ</th>
                                                <th>ĐIỆN THOẠI</th>
                                                <th>MÃ SỐ THUẾ</th>
                                                <th>SỐ TK</th>                                                
                                                <th>GHI CHÚ</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>KH0522</td>
                                                <td>Hà Trung Nghĩa</td>
                                                <td>Tiền Giang</td>
                                                <td>0827423388</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                                                       
                                            </tr>
                                       
                                        </tbody>
                                        <tbody>
                                            <tr>
                                                <td colspan="7"><button onclick="window.location.href='../../View/Lienhe/updatecontact.php'" type="button" class="btn btn-ligh ">Chọn khách hàng </button></td> 

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- data table end -->
                    
                    
                </div>
            </div>
            
        </div>
            
        </div>
        <!-- main content area end -->
          <!-- footer area start-->
        
          <footer>
           
           <div class="footer-area">
               <p>© Copyright 2018. All right reserved. Template by <a href="https://colorlib.com/wp/">Colorlib</a>.</p>
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
   <script src="../../srtdash/assets/js/vendor/jquery-2.2.4.min.js"></script>
   <!-- bootstrap 4 js -->
   <script src="../../srtdash/assets/js/popper.min.js"></script>
   <script src="../../srtdash/assets/js/bootstrap.min.js"></script>
   <script src="../../srtdash/assets/js/owl.carousel.min.js"></script>
   <script src="../../srtdash/assets/js/metisMenu.min.js"></script>
   <script src="../../srtdash/assets/js/jquery.slimscroll.min.js"></script>
   <script src="../../srtdash/assets/js/jquery.slicknav.min.js"></script>

   <!-- Start datatable js -->
   <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
   <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
   <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
   <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
   <!-- others plugins -->
   <script src="../../srtdash/assets/js/plugins.js"></script>
   <script src="../../srtdash/assets/js/scripts.js"></script>
</body>

</html>

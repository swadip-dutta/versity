<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Starlight Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="{{ asset('admin/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/lib/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/lib/rickshaw/rickshaw.min.css') }}" rel="stylesheet">

    <!-- jquery-ui.css -->
    <link rel="stylesheet" href="{{ asset('admin/css/jquery-ui.css') }}">
    <!-- metisMenu.min.css -->
    <link rel="stylesheet" href="{{ asset('admin/css/metisMenu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/slick-theme.css') }}">

    {{-- owl.carousel --}}
    <!-- owl.carousel.2.0.0-beta.2.4 css -->
    <link rel="stylesheet" href="{{ asset('admin/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/swiper.min.css') }}">


    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/starlight.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/styles.css') }}">

    <script src="{{ asset('admin/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="sl-logo"><a style="text-transform: capitalize;"
            href="{{ route('UserEdit', Auth::user()->id) }}"><i class="icon ion-android-star-outline"></i>
            {{ Auth::user()->role->name }}</a></div>
    <div class="sl-sideleft">
        <div class="input-group input-group-search">
            <input type="search" name="search" class="form-control" placeholder="Search">
            <span class="input-group-btn">
                <button class="btn"><i class="fa fa-search"></i></button>
            </span><!-- input-group-btn -->
        </div><!-- input-group -->

        <label class="sidebar-label">Navigation</label>
        <div class="sl-sideleft-menu">
            <a href="{{ route('home') }}" class="sl-menu-link @yield('home')">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-ios-home tx-22"></i>
                    <span class="menu-item-label">Dashboard</span>
                </div><!-- menu-item -->
            </a>
            <!-- sl-menu-link -->
            <a href="#" class="sl-menu-link @yield('exam')">
                <div class="sl-menu-item">
                    <i class="fas fa-pen-square"></i>
                    <i style="font-weight: 600" class="menu-item-icon fa fa-edit tx-20"></i>
                    <span class="menu-item-label">Exam</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <ul class="sl-menu-sub nav flex-column">

                <?php 
                if (Auth::user()->role_name == 1 || Auth::user()->role_name == 3 || Auth::user()->category_id == 1) {        
                ?>
                <li class="nav-item @yield('exam')"><a href="{{ route('ClassOne') }}"
                        class="nav-link @yield('examO')">Class One</a></li>
                <?php   
            }
            ?>

                <?php 
                if (Auth::user()->role_name == 1 || Auth::user()->role_name == 3 || Auth::user()->category_id == 2) {        
                ?>
                <li class="nav-item @yield('exam')"><a href="{{ route('ClassTwo') }}"
                        class="nav-link @yield('examT')">Class Two</a></li>
                <?php
            }
            ?>

                <?php 
                if (Auth::user()->role_name == 1 || Auth::user()->role_name == 3 || Auth::user()->category_id == 3) {        
                ?>
                <li class="nav-item @yield('exam')"><a href="{{ route('ClassThree') }}"
                        class="nav-link @yield('examTH')">Class Three</a></li>
                <?php
            }
            ?>

                <?php 
                if (Auth::user()->role_name == 1 || Auth::user()->role_name == 3 || Auth::user()->category_id == 4) {        
                ?>
                <li class="nav-item @yield('exam')"><a href="{{ route('ClassFour') }}"
                        class="nav-link @yield('examFR')">Class Four</a></li>
                <?php
            }
            ?>

                <?php 
                if (Auth::user()->role_name == 1 || Auth::user()->role_name == 3 || Auth::user()->category_id == 5) {        
                ?>
                <li class="nav-item @yield('exam')"><a href="{{ route('ClassFive') }}"
                        class="nav-link @yield('examFV')">Class Five</a></li>
                <?php
            }
            ?>
            </ul>
            <!-- sl-menu-link -->

            <?php 
                if (Auth::user()->role_name == 1 || Auth::user()->role_name == 3) {        
                ?>

            <a href="#"
                class="sl-menu-link @yield('add_books') @yield('view_category') @yield('edit_category') @yield('add_category') @yield('create_exam')">
                <div class="sl-menu-item">
                    <i class="menu-item-icon fa fa-plus-circle tx-20"></i>
                    <span class="menu-item-label">Create & View</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <?php
        }
        ?>



            <ul class="sl-menu-sub nav flex-column">
                <li class="nav-item @yield('view_category') @yield('edit_category') @yield('add_category')"><a
                        href="{{ route('ViewCategory') }}"
                        class="nav-link @yield('view_category') @yield('edit_category') @yield('add_category')">View
                        Class Category</a>
                </li>
                <li class="nav-item @yield('add_books')"><a href="{{ route('AddBooks') }}"
                        class="nav-link @yield('add_books')">Add Books</a></li>
                <li class="nav-item @yield('create_exam')"><a href="{{ route('CreateExam') }}"
                        class="nav-link @yield('create_exam')">Create Exam</a></li>
            </ul>
            <a href="#" class="sl-menu-link @yield('all_class') @yield('add_class')">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon fa fa-book tx-24"></i>
                    <span class="menu-item-label">Classes</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <ul class="sl-menu-sub nav flex-column">
                <?php 
                if (Auth::user()->role_name == 1 || Auth::user()->role_name == 3) {        
                ?>
                <li class="nav-item @yield('add_class')"><a href="{{ route('AddClasses') }}"
                        class="nav-link @yield('add_class')">Add Class</a></li>
                <?php
            }
            ?>
                <li class="nav-item @yield('all_class')"><a href="{{ route('AllClasses') }}"
                        class="nav-link @yield('all_class')">View Class</a></li>

            </ul>
            <a href="#" class="sl-menu-link @yield('all_book')">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon fa fa-graduation-cap tx-24"></i>
                    <span style="margin-left: 16px" class="menu-item-label">Libary</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <ul class="sl-menu-sub nav flex-column">
                <li class="nav-item @yield('all_book')"><a href="{{ route('AllBooks') }}"
                        class="nav-link @yield('all_book')">Books</a></li>
            </ul>


            <?php 
            if (Auth::user()->role_name == 1 || Auth::user()->role_name == 2 || Auth::user()->role_name == 3) {
            ?>


            <a href="" class="sl-menu-link">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon fa fa-building tx-20"></i>
                    <span class="menu-item-label">Faculty</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <ul class="sl-menu-sub nav flex-column">
                <li class="nav-item"><a href="{{ route('FacultyList') }}" class="nav-link">Faculty
                        Members</a></li>
            </ul>

            <?php   
        }
        ?>

            <!-- sl-menu-link -->

            <a href="#" class="sl-menu-link">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon fa fa-exclamation-triangle tx-24"></i>
                    <span style="margin-left: 16px" class="menu-item-label">Notice</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <ul class="sl-menu-sub nav flex-column">
                <li class="nav-item"><a href="{{ route('AllNotice') }}" class="nav-link">All Notice</a>
                </li>
                <?php 
                if (Auth::user()->role_name == 1 || Auth::user()->role_name == 3) {        
                ?>
                <li class="nav-item"><a href="{{ route('AddNotice') }}" class="nav-link">Add Notice</a>
                </li>
                <?php
                }
                ?>

            </ul>
            <!-- sl-menu-link -->


            <?php 

        if (Auth::user()->role_name == 1) {

        ?>
            <a href="{{ route('Role') }}" class="role sl-menu-link @yield('role')">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon fa fa-cogs tx-24"></i>
                    <span class="menu-item-label">Role</span>
                </div><!-- menu-item -->
            </a>

            <?php
            
        }
        
        
        ?>


            <a href="{{ route('ZoomList') }}" class="sl-menu-link @yield('zoom')">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon fa fa-play tx-22"></i>
                    <span class="menu-item-label">Zoom</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->


        </div><!-- sl-sideleft-menu -->

        <br>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    {{-- Inline Css Sart --}}

    <style>
        /* .sl-menu-sub .nav-link:active {
 color: #343a40;
 background-color: #e9ecef;
   } */

        /* .sl-menu-sub .nav-link.active {
 color: #343a40;
 background-color: #e9ecef; */
        }

    </style>



    {{-- Inline Css End --}}






    <!-- ########## START: HEAD PANEL ########## -->
    <div class="sl-header">
        <div class="sl-header-left">
            <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i
                        class="icon ion-navicon-round"></i></a></div>
            <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i
                        class="icon ion-navicon-round"></i></a></div>
        </div><!-- sl-header-left -->
        <div class="sl-header-right">
            <nav class="nav">
                <div class="dropdown">
                    <a href="" style="margin-right: 8px;" class="nav-link nav-link-profile" data-toggle="dropdown">
                        <span class="logged-name"><span
                                class="hidden-md-down">{{ Auth::user()->name }}</span></span>
                        <img src="{{ asset('Pro_images/' . Auth::user()->id . '/' . Auth::user()->images) }}"
                            class="wd-32 rounded-circle" alt="{{ Auth::user()->name }}">
                    </a>
                    <div class="dropdown-menu dropdown-menu-header wd-200">
                        <ul class="list-unstyled user-profile-nav">
                            <li><a href="{{ route('UserEdit', Auth::user()->id) }}"><i
                                        class="icon ion-ios-person-outline"></i> Edit Profile</a></li>

                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                        class="icon ion-power"></i>{{ __('Sign Out') }}</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div><!-- dropdown-menu -->
                </div><!-- dropdown -->
            </nav>
            {{-- <div class="navicon-right">
                <a id="btnRightMenu" href="" class="pos-relative">
                    <i class="icon ion-ios-bell-outline"></i>
                    <!-- start: if statement -->
                    <span class="square-8 bg-danger"></span>
                    <!-- end: if statement -->
                </a>
            </div><!-- navicon-right --> --}}
        </div><!-- sl-header-right -->
    </div><!-- sl-header -->
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
    <div class="sl-sideright">
        <ul class="nav nav-tabs nav-fill sidebar-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" role="tab" href="#messages">Messages (2)</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" role="tab" href="#notifications">Notifications (8)</a>
            </li>
        </ul><!-- sidebar-tabs -->

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane pos-absolute a-0 mg-t-60 active" id="messages" role="tabpanel">
                <div class="media-list">
                    <!-- loop starts here -->
                    <a href="" class="media-list-link">
                        <div class="media">
                            <img src="../img/img3.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="media-body">
                                <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Donna Seay</p>
                                <span class="d-block tx-11 tx-gray-500">2 minutes ago</span>
                                <p class="tx-13 mg-t-10 mg-b-0">A wonderful serenity has taken possession of my entire
                                    soul, like these sweet mornings of spring.</p>
                            </div>
                        </div><!-- media -->
                    </a>
                    <!-- loop ends here -->
                    <a href="" class="media-list-link">
                        <div class="media">
                            <img src="../img/img4.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="media-body">
                                <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Samantha Francis</p>
                                <span class="d-block tx-11 tx-gray-500">3 hours ago</span>
                                <p class="tx-13 mg-t-10 mg-b-0">My entire soul, like these sweet mornings of spring.
                                </p>
                            </div>
                        </div><!-- media -->
                    </a>
                    <a href="" class="media-list-link">
                        <div class="media">
                            <img src="../img/img7.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="media-body">
                                <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Robert Walker</p>
                                <span class="d-block tx-11 tx-gray-500">5 hours ago</span>
                                <p class="tx-13 mg-t-10 mg-b-0">I should be incapable of drawing a single stroke at the
                                    present moment...</p>
                            </div>
                        </div><!-- media -->
                    </a>
                    <a href="" class="media-list-link">
                        <div class="media">
                            <img src="../img/img5.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="media-body">
                                <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Larry Smith</p>
                                <span class="d-block tx-11 tx-gray-500">Yesterday, 8:34pm</span>

                                <p class="tx-13 mg-t-10 mg-b-0">When, while the lovely valley teems with vapour around
                                    me, and the meridian sun strikes...</p>
                            </div>
                        </div><!-- media -->
                    </a>
                    <a href="" class="media-list-link">
                        <div class="media">
                            <img src="../img/img3.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="media-body">
                                <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Donna Seay</p>
                                <span class="d-block tx-11 tx-gray-500">Jan 23, 2:32am</span>
                                <p class="tx-13 mg-t-10 mg-b-0">A wonderful serenity has taken possession of my entire
                                    soul, like these sweet mornings of spring.</p>
                            </div>
                        </div><!-- media -->
                    </a>
                </div><!-- media-list -->
                <div class="pd-15">
                    <a href=""
                        class="btn btn-secondary btn-block bd-0 rounded-0 tx-10 tx-uppercase tx-mont tx-medium tx-spacing-2">View
                        More Messages</a>
                </div>
            </div><!-- #messages -->

            <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="notifications" role="tabpanel">
                <div class="media-list">
                    <!-- loop starts here -->
                    <a href="" class="media-list-link read">
                        <div class="media pd-x-20 pd-y-15">
                            <img src="../img/img8.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="media-body">
                                <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth
                                        Bungaos</strong> tagged you and 18 others in a post.</p>
                                <span class="tx-12">October 03, 2017 8:45am</span>
                            </div>
                        </div><!-- media -->
                    </a>
                    <!-- loop ends here -->
                    <a href="" class="media-list-link read">
                        <div class="media pd-x-20 pd-y-15">
                            <img src="../img/img9.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="media-body">
                                <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa
                                        Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The
                                        Social Network</strong></p>
                                <span class="tx-12">October 02, 2017 12:44am</span>
                            </div>
                        </div><!-- media -->
                    </a>
                    <a href="" class="media-list-link read">
                        <div class="media pd-x-20 pd-y-15">
                            <img src="../img/img10.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="media-body">
                                <p class="tx-13 mg-b-0 tx-gray-700">20+ new items added are for sale in your <strong
                                        class="tx-medium tx-gray-800">Sale Group</strong></p>
                                <span class="tx-12">October 01, 2017 10:20pm</span>
                            </div>
                        </div><!-- media -->
                    </a>
                    <a href="" class="media-list-link read">
                        <div class="media pd-x-20 pd-y-15">
                            <img src="../img/img5.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="media-body">
                                <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius
                                        Erving</strong> wants to connect with you on your conversation with <strong
                                        class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
                                <span class="tx-12">October 01, 2017 6:08pm</span>
                            </div>
                        </div><!-- media -->
                    </a>
                    <a href="" class="media-list-link read">
                        <div class="media pd-x-20 pd-y-15">
                            <img src="../img/img8.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="media-body">
                                <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth
                                        Bungaos</strong> tagged you and 12 others in a post.</p>
                                <span class="tx-12">September 27, 2017 6:45am</span>
                            </div>
                        </div><!-- media -->
                    </a>
                    <a href="" class="media-list-link read">
                        <div class="media pd-x-20 pd-y-15">
                            <img src="../img/img10.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="media-body">
                                <p class="tx-13 mg-b-0 tx-gray-700">10+ new items added are for sale in your <strong
                                        class="tx-medium tx-gray-800">Sale Group</strong></p>
                                <span class="tx-12">September 28, 2017 11:30pm</span>
                            </div>
                        </div><!-- media -->
                    </a>
                    <a href="" class="media-list-link read">
                        <div class="media pd-x-20 pd-y-15">
                            <img src="../img/img9.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="media-body">
                                <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa
                                        Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The
                                        Great Pyramid</strong></p>
                                <span class="tx-12">September 26, 2017 11:01am</span>
                            </div>
                        </div><!-- media -->
                    </a>
                    <a href="" class="media-list-link read">
                        <div class="media pd-x-20 pd-y-15">
                            <img src="../img/img5.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="media-body">
                                <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius
                                        Erving</strong> wants to connect with you on your conversation with <strong
                                        class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
                                <span class="tx-12">September 23, 2017 9:19pm</span>
                            </div>
                        </div><!-- media -->
                    </a>
                </div><!-- media-list -->
            </div><!-- #notifications -->

        </div><!-- tab-content -->
    </div><!-- sl-sideright -->
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="index.html">{{ Auth::user()->role->name }}</a>
            <span class="breadcrumb-item active">Dashboard</span>
            <a style="margin-left: 846px;" href="">How To Use?</a>
        </nav>


        @yield('content')


        <footer class="sl-footer">
            <div class="footer-left" style="margin-left: 210px;">
                <div class="mg-b-2">Copyright &copy; 2017. Starlight. All Rights Reserved.</div>
                <div>Made by $H.</div>
            </div>
            <div class="footer-right d-flex align-items-center">
                <span class="tx-uppercase mg-r-10">Share:</span>
                <a target="_blank" class="pd-x-5"
                    href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/starlight"><i
                        class="fa fa-facebook tx-20"></i></a>
                <a target="_blank" class="pd-x-5"
                    href="https://twitter.com/home?status=Starlight,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/starlight"><i
                        class="fa fa-twitter tx-20"></i></a>
            </div>
        </footer>
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
    <script src="{{ asset('admin/js/vendor/jquery-2.2.4.min.js') }}"></script>

    <script src="{{ asset('admin/lib/jquery/jquery.js') }}"></script>
    <script src="{{ asset('admin/lib/popper.js/popper.js') }}"></script>
    <script src="{{ asset('admin/lib/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('admin/lib/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('admin/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>
    <script src="{{ asset('admin/lib/jquery.sparkline.bower/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('admin/lib/d3/d3.js') }}"></script>
    <script src="{{ asset('admin/lib/rickshaw/rickshaw.min.js') }}"></script>
    <script src="{{ asset('admin/lib/chart.js/Chart.js') }}"></script>
    <script src="{{ asset('admin/lib/Flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('admin/lib/Flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('admin/lib/Flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('admin/lib/flot-spline/jquery.flot.spline.js') }}"></script>

    <script src="{{ asset('admin/js/starlight.js') }}"></script>
    <script src="{{ asset('admin/js/ResizeSensor.js') }}"></script>
    <script src="{{ asset('admin/js/dashboard.js') }}"></script>



    <script src="{{ asset('admin/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('admin/js/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('admin/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('admin/js/swiper.min.js') }}"></script>


    <!-- scrollup.js -->
    <script src="{{ asset('admin/js/scrollup.js') }}"></script>
    <!-- isotope.pkgd.min.js -->
    <script src="{{ asset('admin/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('admin/js/metisMenu.min.js') }}"></script>
    <!-- mailchimp.js -->
    <script src="{{ asset('admin/js/mailchimp.js') }}"></script>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="{{ asset('admin/js/slick.min.js') }}"></script>



    <!-- jquery-ui.min.js -->
    <script src="{{ asset('admin/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('admin/js/scripts.js') }}"></script>
</body>

</html>

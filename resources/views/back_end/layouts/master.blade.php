<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>IB - @yield('title')</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('back_end/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('back_end/css/all.min.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>

    <!-- Template CSS -->

    <link rel="stylesheet" href="{{ asset('back_end/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('back_end/css/components.css') }}">
</head>

<body>
<div id="app">
    <div class="main-wrapper">
        <div class="navbar-bg"></div>

        <!-- Top side title bar  -->
        <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                    <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                </ul>
                <div class="search-element">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                    <div class="search-backdrop"></div>
                    <div class="search-result">
                        <div class="search-header">
                            Histories
                        </div>
                        <div class="search-item">
                            <a href="#">How to hack NASA using CSS</a>
                            <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                        </div>
                        <div class="search-item">
                            <a href="#">Kodinger.com</a>
                            <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                        </div>
                        <div class="search-item">
                            <a href="#"></a>
                            <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                        </div>
                        <div class="search-header">
                            Result
                        </div>
                        <div class="search-item">
                            <a href="#">
                                <img class="mr-3 rounded" width="30" src="../assets/img/products/product-3-50.png" alt="product">
                                oPhone S9 Limited Edition
                            </a>
                        </div>
                        <div class="search-item">
                            <a href="#">
                                <img class="mr-3 rounded" width="30" src="../assets/img/products/product-2-50.png" alt="product">
                                Drone X2 New Gen-7
                            </a>
                        </div>
                        <div class="search-item">
                            <a href="#">
                                <img class="mr-3 rounded" width="30" src="../assets/img/products/product-1-50.png" alt="product">
                                Headphone Blitz
                            </a>
                        </div>
                        <div class="search-header">
                            Projects
                        </div>
                        <div class="search-item">
                            <a href="#">
                                <div class="search-icon bg-danger text-white mr-3">
                                    <i class="fas fa-code"></i>
                                </div>
                                 Admin Template
                            </a>
                        </div>
                        <div class="search-item">
                            <a href="#">
                                <div class="search-icon bg-primary text-white mr-3">
                                    <i class="fas fa-laptop"></i>
                                </div>
                                Create a new Homepage Design
                            </a>
                        </div>
                    </div>
                </div>
            </form>
            <ul class="navbar-nav navbar-right">
                <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
                    <div class="dropdown-menu dropdown-list dropdown-menu-right">
                        <div class="dropdown-header">Messages
                            <div class="float-right">
                                <a href="#">Mark All As Read</a>
                            </div>
                        </div>
                        <div class="dropdown-list-content dropdown-list-message">
                            <a href="#" class="dropdown-item dropdown-item-unread">
                                <div class="dropdown-item-avatar">
                                    <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle">
                                    <div class="is-online"></div>
                                </div>
                                <div class="dropdown-item-desc">
                                    <b>Kusnaedi</b>
                                    <p>Hello, Bro!</p>
                                    <div class="time">10 Hours Ago</div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item dropdown-item-unread">
                                <div class="dropdown-item-avatar">
                                    <img alt="image" src="../assets/img/avatar/avatar-2.png" class="rounded-circle">
                                </div>
                                <div class="dropdown-item-desc">
                                    <b>Dedik Sugiharto</b>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                    <div class="time">12 Hours Ago</div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item dropdown-item-unread">
                                <div class="dropdown-item-avatar">
                                    <img alt="image" src="../assets/img/avatar/avatar-3.png" class="rounded-circle">
                                    <div class="is-online"></div>
                                </div>
                                <div class="dropdown-item-desc">
                                    <b>Agung Ardiansyah</b>
                                    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    <div class="time">12 Hours Ago</div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item">
                                <div class="dropdown-item-avatar">
                                    <img alt="image" src="../assets/img/avatar/avatar-4.png" class="rounded-circle">
                                </div>
                                <div class="dropdown-item-desc">
                                    <b>Ardian Rahardiansyah</b>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                                    <div class="time">16 Hours Ago</div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item">
                                <div class="dropdown-item-avatar">
                                    <img alt="image" src="../assets/img/avatar/avatar-5.png" class="rounded-circle">
                                </div>
                                <div class="dropdown-item-desc">
                                    <b>Alfa Zulkarnain</b>
                                    <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                    <div class="time">Yesterday</div>
                                </div>
                            </a>
                        </div>
                        <div class="dropdown-footer text-center">
                            <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </li>
                <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
                    <div class="dropdown-menu dropdown-list dropdown-menu-right">
                        <div class="dropdown-header">Notifications
                            <div class="float-right">
                                <a href="#">Mark All As Read</a>
                            </div>
                        </div>
                        <div class="dropdown-list-content dropdown-list-icons">
                            <a href="#" class="dropdown-item dropdown-item-unread">
                                <div class="dropdown-item-icon bg-primary text-white">
                                    <i class="fas fa-code"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    Template update is available now!
                                    <div class="time text-primary">2 Min Ago</div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                                    <div class="time">10 Hours Ago</div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item">
                                <div class="dropdown-item-icon bg-success text-white">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                                    <div class="time">12 Hours Ago</div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item">
                                <div class="dropdown-item-icon bg-danger text-white">
                                    <i class="fas fa-exclamation-triangle"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    Low disk space. Let's clean it!
                                    <div class="time">17 Hours Ago</div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white">
                                    <i class="fas fa-bell"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    Welcome to Dr. template!
                                    <div class="time">Yesterday</div>
                                </div>
                            </a>
                        </div>
                        <div class="dropdown-footer text-center">
                            <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </li>
                <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <img alt="image" src="{{ asset('back_end/img/avatar/avatar-1.png') }}" class="rounded-circle mr-1">
                        <div class="d-sm-none d-lg-inline-block">Hi, Dr. Mamun</div></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-title">Logged in 5 min ago</div>
                        <a href="" class="dropdown-item has-icon">
                            <i class="far fa-user"></i> Profile
                        </a>
                        <a href="" class="dropdown-item has-icon">
                            <i class="fas fa-bolt"></i> Activities
                        </a>
                        <a href="" class="dropdown-item has-icon">
                            <i class="fas fa-cog"></i> Settings
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item has-icon text-danger">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>

        <!-- Left side navigation bar for navigate -->
        <div class="main-sidebar">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="">Incredible Bangladesh</a>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="">IB</a>
                </div>
                <ul class="sidebar-menu">
                    <li class="nav-item dropdown active">
                        <a href="#" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                    </li>
                    <li class="menu-header">E-Commerce Component</li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Product Manage</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{{route('e-com.products')}}">All Products</a></li>
                            <li><a class="nav-link" href="{{route('e-com.product')}}">Add Product</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>E-Com Accessories</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="">Invoice Center</a></li>
                        </ul>
                    </li>
                    <li class="menu-header">Incredible Bangladesh</li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Why I.B</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{{ route('why.incredible') }}">Add Why</a></li>
                        </ul>
                    </li>

                    <li class="menu-header">Travel Packages</li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Travel Category</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{{ route('travel.categories') }}">All Categories</a></li>
                            <li><a class="nav-link" href="{{ route('travel.category') }}">Add Category</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Travel Packages</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{{ route('travel.packages') }}">All Packages</a></li>
                            <li><a class="nav-link" href="{{ route('travel.package') }}">Add Package</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Packages Schedule</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{{ route('travel.schedules') }}">All Schedules</a></li>
                            <li><a class="nav-link" href="{{ route('travel.schedule') }}">Add Schedule</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Reserve Request</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{{ route('travel.packages') }}">All Request</a></li>
                            <li><a class="nav-link" href="{{ route('travel.package') }}">Denied Request</a></li>
                        </ul>
                    </li>


                    <li class="menu-header">Blog Section</li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Blog Post</span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('travel.blogs') }}">All Blogs</a></li>
                            <li><a href="{{ route('travel.blog') }}">Add Blog</a></li>
                            <li><a href="{{ route('travel.blog-review') }}">Review Blogs</a></li>
                        </ul>
                    </li>
                </ul>
            </aside>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            @includeWhen(!request()->is('dashboard'),'back_end.partials.jumbotron')

            @yield('content')
        </div>

        <!-- Footer section started from here-->
        <footer class="main-footer">
        </footer>
    </div>
</div>

<!-- General JS Scripts -->
<script src="{{ asset('back_end/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{ asset('back_end/vendor/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
<script>
    $('#lfm').filemanager('image')
</script>


<script src="{{ asset('back_end/vendor/popper.js') }}"></script>
<script src="{{ asset('back_end/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('back_end/js/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('back_end/js/moment.js') }}"></script>
<script src="{{ asset('back_end/js/stisla.js') }}"></script>
<script src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>
<script>
    $('#packageScheduleTable').DataTable({
        processing: true,
        bInfo: false,
        lengthChange: false
    })
</script>

<!-- Template JS File -->
<script src="{{ asset('back_end/js/scripts.js') }}"></script>
<script src="{{ asset('back_end/js/custom.js') }}"></script>




</body>
</html>

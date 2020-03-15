<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">

    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>IB - @yield('title')</title>
    <!--    ---------------------------------------------
                Style Sheets
    -----------------------------------------------------    -->
    <link rel="stylesheet" href="{{ asset('front_end/css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/css/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/css/ion.rangeSlider.css') }}"/>
    <link rel="stylesheet" href="{{ asset('front_end/css/ion.rangeSlider.skinFlat.css') }}"/>
    <link rel="stylesheet" href="{{ asset('back_end/css/justifiedGallery.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/css/colorbox.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/css/intlTelInput.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/css/main.css') }}">
</head>

<body class="ib-front-main-body">

<!-- Start Header Area -->
<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="index.html"><img src="{{ asset('front_end/img/fav.png') }}" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item {{ request()->is('/') ? 'active' : '' }}"><a class="nav-link" href="{{ route('travel.home') }}">Home</a></li>
                        <li class="nav-item {{ request()->is('blog') ? 'active' : '' }}"><a class="nav-link" href="{{ route('travel.tour-blog') }}">Travel Blog</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true"
                               aria-expanded="false">Tours</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{ route('all.daily') }}">Day Tour</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('all.feature') }}">Feature Tour</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('all.upcoming') }}">Upcoming Tour</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('all.awesome') }}">Awesome Holiday</a></li>
                            </ul>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true"
                               aria-expanded="false">Reservation</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="">Hotel & Resort</a></li>
                                <li class="nav-item"><a class="nav-link" href="">Bus Ticket</a></li>
                                <li class="nav-item"><a class="nav-link" href="">Ship Ticket</a></li>
                                <li class="nav-item"><a class="nav-link" href="">Train Ticket</a></li>
                                <li class="nav-item"><a class="nav-link" href="">Air Ticket</a></li>
                                <li class="nav-item"><a class="nav-link" href="">Car Rent</a></li>
                                <li class="nav-item"><a class="nav-link" href="">Visa Support</a></li>
                            </ul>
                        </li>
                        <li class="nav-item {{ request()->is('guide') ? 'active' : '' }}"><a class="nav-link" href="{{ route('travel.guide') }}">Guide</a></li>
                        <li class="nav-item {{ request()->is('login') ? 'active' : '' }}"><a class="nav-link" href="{{ route('login') }}"><i class="fa fa-sign-in mr-1"></i>
                                @if(\Illuminate\Support\Facades\Auth::check())
                                    {{ \Illuminate\Support\Facades\Auth::user()->name }}
                                @else
                                    Login
                                @endif
                            </a>
                        </li>

                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item"><a href="#" class="cart"><span class="ti-bag"></span></a></li>
                        <li class="nav-item">
                            <button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="search_input" id="search_input_box">
        <div class="container">
            <form class="d-flex justify-content-between">
                <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                <button type="submit" class="btn"></button>
                <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
            </form>
        </div>
    </div>
</header>
<!-- End Header Area -->


@includeWhen(request()->is('/'),'front_end.partials.jumbotron')
@includeWhen(!request()->is('/'),'front_end.partials.common_jumbotron')


@yield('content')

<!-- start footer Area -->
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="ib-footer-logo">
                    <img src="{{ asset('front_end/img/fav.png') }}" alt="" srcset="" width="70">
                </div>
                <div class="ib-footer-address mt-4">
                    <ul>
                        <li>
                            <i class="fa fa-map-marker"></i>
                            6265 Brockport Spencerport Road, Brockport New York-14420, USA.
                        </li>
                        <li>
                            <i class="fa fa-mobile-phone"></i>
                            +172 22 555888999
                        </li>
                        <li>
                            <i class="fa fa-envelope"></i>
                            support@incrediblebangladesh.com
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col">
                <h6 class="">Quick Link</h6>
                <div class="ib-footer-nav mb-4">
                    <a href="#" class="d-block">About Us</a>
                    <a href="#" class="d-block">Contact Us</a>
                    <a href="#" class="d-block">Privacy Policy</a>
                    <a href="#" class="d-block">Terms & Conditions</a>
                </div>
                <h6 class="">Portfolio</h6>
                <div class="do-footer-portfolio do-separator-1">
                    <img class="mb-1" src="{{ asset('front_end/img/footer/port1.jpg') }}" alt="" srcset="" height="55px"
                         width="89">
                    <img class="mb-1" src="{{ asset('front_end/img/footer/port2.jpg') }}" alt="" srcset="" height="55px"
                         width="89">
                    <img class="mb-1" src="{{ asset('front_end/img/footer/port2.jpg') }}" alt="" srcset="" height="55px"
                         width="89">
                    <img class="mb-1" src="{{ asset('front_end/img/footer/port1.jpg') }}" alt="" srcset="" height="55px"
                         width="89">
                </div>
            </div>

            <div class="col">
                <h6 class="">Connect with us</h6>
                <div class="ib-footer-social mb-4">
                    <a href="#" target="_blank" class="mr-1"><i
                            class="ib-footer-icon fa fa-facebook-square"></i></a>
                    <a href="#" target="_blank" class="mr-1"><i
                            class="ib-footer-icon fa fa-twitter-square"></i></a>
                    <a href="#" target="_blank" class="mr-1"><i
                            class="ib-footer-icon fa fa-youtube-square"></i></a>
                    <a href="#" target="_blank" class="mr-1"><i
                            class="ib-footer-icon fa fa-instagram"></i></a>
                </div>
                <h6 class="">Affiliation</h6>
                <div class="do-footer-affiliation">
                    <img class="mr-1" src="{{ asset('front_end/img/footer/iso.png') }}" alt="" srcset="" width="65"
                         height="34">
                    <img class="mr-1" src="{{ asset('front_end/img/footer/cmmi.png') }}" alt="" srcset="" width="65"
                         height="34">
                    <img class="mr-1" src="{{ asset('front_end/img/footer/iso.png') }}" alt="" srcset="" width="65"
                         height="34">
                    <img class="mr-1 mt-1" src="{{ asset('front_end/img/footer/cmmi.png') }}" alt="" srcset=""
                         width="65"
                         height="34">

                </div>
            </div>
            <div class="col">
                <h6 class="">We accept</h6>
                <div class="do-footer-payment mb-4">
                    <i class="ib-footer-icon fa fa-cc-visa "></i>
                    <i class="ib-footer-icon fa fa-cc-mastercard"></i>
                    <i class="ib-footer-icon fa fa-cc-amex"></i>
                    <i class="ib-footer-icon fa fa-cc-paypal"></i>
                </div>
                <h6 class="">Content Protection</h6>
                <div class="do-footer-content do-separator-1">
                    {{--                    <a href="//www.dmca.com/Protection/Status.aspx?ID=ea885985-915b-452b-96a5-cd475eb84e06"--}}
                    {{--                       title="DMCA.com Protection Status" class="dmca-badge"> <img--}}
                    {{--                            src="https://images.dmca.com/Badges/dmca-badge-w150-2x1-03.png?ID=ea885985-915b-452b-96a5-cd475eb84e06"--}}
                    {{--                            alt="DMCA.com Protection Status"/></a>--}}
                    {{--                    <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"></script>--}}
                    <p class="text-justify mt-2" style="font-size: 13px">
                        A DMCA Badge is a seal of protection placed on your website that deters thieves from
                        stealing your content. With a registered badge, you have access to the tools, resources, and
                        support to swiftly take down any website that steals your content.
                    </p>
                </div>
            </div>
        </div>
        <div class="row mt-5" style="border-top: 1px solid #757575">
            <p class="ib-copyright pt-1">Design & Developed by BD
                SOFT IT - {{ date("Y") }}</p>
        </div>
    </div>
</footer>
<!-- End footer Area -->

<script src="{{ asset('front_end/js/vendor/jquery-2.2.4.min.js') }}"></script>
<script src="{{ asset('back_end/js/jquery.justifiedGallery.js')}}"></script>
<script src="{{ asset('front_end/js/jquery.colorbox-min.js') }}"></script>
<script>
    $('#gallery').justifiedGallery({
        rowHeight: 160,
        maxRowHeight: null,
        margins: 5,
        border: 0,
        rel: 'group1',
        lastRow: 'nojustify',
        captions: true,
        randomize: false,
        // sizeRangeSuffixes: {
        //     lt100: '_t',
        //     lt240: '_m',
        //     lt320: '_n',
        //     lt500: '',
        //     lt640: '_z',
        //     lt1024: '_b'
        // }
    }).on('jg.complete', function () {
        $(this).find('a').colorbox({
            maxWidth: '80%',
            maxHeight: '80%',
            opacity: 0.8,
            transition: 'elastic',
            current: '',

        });
    });
</script>
<script src="{{ asset('front_end/js/vendor/popper.js') }}"></script>
<script src="{{ asset('front_end/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('front_end/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('front_end/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('front_end/js/jquery.sticky.js') }}"></script>
<script src="{{ asset('front_end/js/nouislider.min.js') }}"></script>
<script src="{{ asset('front_end/js/countdown.js') }}"></script>
<script src="{{ asset('front_end/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('front_end/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('front_end/js/jquery.mousewheel.min.js') }}"></script>
<script src="{{ asset('front_end/js/intlTelInput.js') }}"></script>
<script src="{{ asset('front_end/js/main.js') }}"></script>
<script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
        utilsScript: "../front_end/js/utils.js",
    });
</script>
<script>
    let owl = $('.owl-carousel');
    owl.owlCarousel({
        stagePadding: 144,
        responsiveClass:true,
        loop:true,
        margin:10,
        responsive:{
            0:{
                items:1
            },
            600:{
              items:1
            },
            1000:{
                items:1
            }
        }
    });
    owl.on('mousewheel', '.owl-stage', function (e) {
        if (e.deltaY>0) {
            owl.trigger('next.owl');
        } else {
            owl.trigger('prev.owl');
        }
        e.preventDefault();
    });
</script>
</body>
</html>

<!DOCTYPE html>
<html dir="rtl" lang="en">

<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="StudyPress | Education & Courses HTML Template" />
    <meta name="keywords" content="academy, course, education, education html theme, elearning, learning," />
    <meta name="author" content="ThemeMascot" />

    <!-- Page Title -->
    <title>StudyPress | Education & Courses HTML Template</title>

    <!-- Favicon and Touch Icons -->
    <link href="{{ asset('home/images/favicon.png') }}" rel="shortcut icon" type="image/png">
    <link href="{{ asset('home/images/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link href="{{ asset('home/images/apple-touch-icon-72x72.png') }}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{ asset('home/images/apple-touch-icon-114x114.png') }}" rel="apple-touch-icon" sizes="114x114">
    <link href="{{ asset('home/images/apple-touch-icon-144x144.png') }}" rel="apple-touch-icon" sizes="144x144">

    <!-- Stylesheet -->
    <link href="{{ asset('home/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('home/css/animate.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('home/css/javascript-plugins-bundle.css') }}" rel="stylesheet" />

    <!-- CSS | menuzord megamenu skins -->
    {{-- <link href="{{ asset('home/js/menuzord/css/menuzord.css') }}" rel="stylesheet" /> --}}
    <link href="{{ asset('home/js/menuzord/css/menuzord-rtl.css') }}" rel="stylesheet" />

    <!-- CSS | Main style file -->
    <link href="{{ asset('home/css/style-main.css') }}" rel="stylesheet" type="text/css">
    <link id="menuzord-menu-skins" href="{{ asset('home/css/menuzord-skins/menuzord-rounded-boxed.css') }}"
        rel="stylesheet" />

    <!-- CSS | Responsive media queries -->
    <link href="{{ asset('home/css/responsive.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->

    <!-- CSS | Theme Color -->
    <link href="{{ asset('home/css/colors/theme-skin-color-set1.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('home/css/bootstrap-rtl.min.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('home/css/style-main-rtl.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('home/css/style-main-rtl-extra.css') }}" rel="stylesheet" type="text/css">
    <!-- external javascripts -->
    <script src="{{ asset('home/js/jquery.js') }}"></script>
    <script src="{{ asset('home/js/popper.min.js') }}"></script>
    <script src="{{ asset('home/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('home/js/javascript-plugins-bundle.js') }}"></script>
    <script src="{{ asset('home/js/menuzord/js/menuzord.js') }}"></script>

    <!-- <link href="{{ asset('home/css/style.css') }}" rel="stylesheet" type="text/css"> -->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
    <style>
        li.mega-menu-item a.mega-menu-link:before {
            margin: 0 0 0 6px;
        }

        li.mega-menu-item-has-children>a.mega-menu-link>span.mega-indicator {
            float: left;

            &:after {
                margin: 0 6px 0 0;
            }
        }

        >li.mega-menu-item>a.mega-menu-link,
        ul.mega-sub-menu a.mega-menu-link,
        ul.mega-sub-menu h4.mega-block-title,
        li.mega-menu-megamenu>ul.mega-sub-menu li.mega-menu-column>ul.mega-sub-menu>li.mega-menu-item>a.mega-menu-link {
            text-align: right;
        }

        >li.mega-menu-tabbed>ul.mega-sub-menu {
            >li.mega-menu-item>ul.mega-sub-menu {
                left: 0;
            }

            >li.mega-menu-item>a.mega-menu-link {
                float: right;
            }

            >li.mega-menu-item.mega-menu-item-has-children>a.mega-menu-link>span.mega-indicator {
                float: left;

                &:after {
                    content: $arrow_left;
                }
            }
        }

        >li.mega-menu-megamenu>ul.mega-sub-menu>li.mega-menu-item {
            float: right;
        }

        li.mega-menu-item-has-children li.mega-menu-item-has-children>a.mega-menu-link>span.mega-indicator,
        &.mega-menu-accordion>li.mega-menu-item-has-children>a.mega-menu-link>span.mega-indicator {
            float: left;
        }

        .header-nav-col-row{
            position: fixed;
top: 0;
left: 0;
background: white;
width: 100%;
margin: 0;
        }
        a.showhide {
            position: fixed;
left: 25px;
top: 25px
        }
    </style>
</head>

<body class="rtl tm-container-1340px has-side-panel side-panel-right">
    <div class="side-panel-body-overlay"></div>
    <div id="side-panel-container" class="dark" data-tm-bg-img="{{ asset('home/images/side-push-bg.jpg') }}">
        <div class="side-panel-wrap">
            <div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i
                        class="fa fa-times side-panel-trigger-icon"></i></a></div>
            <img class="logo mb-50" src="{{ asset('home/images/logo-wide.png') }}" alt="Logo">
            <p>Our motive is to help the poor, helpless and orphan children all over the world.</p>
            <div class="widget">
                <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Latest News</h4>
                <div class="latest-posts">
                    <article class="post clearfix pb-0 mb-10">
                        <a class="post-thumb" href="#"><img src="https://placehold.it/75x75" alt=""></a>
                        <div class="post-right">
                            <h5 class="post-title mt-0"><a href="#">Sustainable Construction</a></h5>
                            <p>Lorem ipsum dolor...</p>
                        </div>
                    </article>
                    <article class="post clearfix pb-0 mb-10">
                        <a class="post-thumb" href="#"><img src="https://placehold.it/75x75" alt=""></a>
                        <div class="post-right">
                            <h5 class="post-title mt-0"><a href="#">Industrial Coatings</a></h5>
                            <p>Lorem ipsum dolor...</p>
                        </div>
                    </article>
                    <article class="post clearfix pb-0 mb-10">
                        <a class="post-thumb" href="#"><img src="https://placehold.it/75x75" alt=""></a>
                        <div class="post-right">
                            <h5 class="post-title mt-0"><a href="#">Storefront Installations</a></h5>
                            <p>Lorem ipsum dolor...</p>
                        </div>
                    </article>
                </div>
            </div>

            <div class="widget">
                <h5 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Contact Info</h5>
                <div class="tm-widget-contact-info contact-info-style1 contact-icon-theme-colored1">
                    <ul>
                        <li class="contact-name">
                            <div class="icon"><i class="flaticon-contact-037-address"></i></div>
                            <div class="text">John Doe</div>
                        </li>
                        <li class="contact-phone">
                            <div class="icon"><i class="flaticon-contact-042-phone-1"></i></div>
                            <div class="text"><a href="tel:+510-455-6735">+510-455-6735</a></div>
                        </li>
                        <li class="contact-email">
                            <div class="icon"><i class="flaticon-contact-043-email-1"></i></div>
                            <div class="text"><a href="mailto:info@yourdomain.com">info@yourdomain.com</a></div>
                        </li>
                        <li class="contact-address">
                            <div class="icon"><i class="flaticon-contact-047-location"></i></div>
                            <div class="text">3982 Browning Lane Carolyns Circle, California</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="wrapper" class="clearfix">
        <!-- Header -->
        <header id="header" class="header header-layout-type-header-2rows">

            <div class="header-nav tm-enable-navbar-hide-on-scroll" style="">
                <div class="header-nav-wrapper navbar-scrolltofixed">
                    <div class="menuzord-container header-nav-container">
                        <div class="container position-relative">
                            <div class="row header-nav-col-row">
                                <div class="col-sm-auto align-self-center">
                                    <a class="menuzord-brand site-brand" href="index-mp-layout1.html">
                                        <img class="logo-default logo-1x"
                                            src="{{ asset('home/images/logo-wide.png') }}" alt="Logo">
                                        <img class="logo-default logo-2x retina"
                                            src="{{ asset('home/images/logo-wide@2x.png') }}" alt="Logo">
                                    </a>
                                </div>
                                <div class="col-sm-auto ms-auto pr-0 align-self-center">
                                    <nav id="top-primary-nav" class="menuzord theme-color1 pull-left flip menuzord-responsive" data-effect="slide"
                                        data-animation="none" data-align="right">
                                        <ul id="main-nav" class="menuzord-menu">
                                            <li class="active menu-item">
                                                <a href="#">Home</a>
                                                <div class="megamenu megamenu-fullwidth megamenu-position-left">
                                                    <div class="megamenu-row">
                                                        <div class="col3">
                                                            <ul class="list-unstyled list-dashed">
                                                                <li class="menu-item">
                                                                    <a class="tm-submenu-title"
                                                                        href="#"><span>All Main
                                                                            Layouts</span></a>
                                                                    <ul class="list-unstyled">
                                                                        <li><a href="index-mp-layout1.html">index
                                                                                Multipage Layout1</a></li>
                                                                        <li><a href="index-mp-layout2.html">index
                                                                                Multipage Layout2</a></li>
                                                                        <li><a href="index-mp-layout3.html">index
                                                                                Multipage Layout3</a></li>
                                                                        <li><a href="index-mp-layout4.html">index
                                                                                Multipage Layout4</a></li>
                                                                        <li><a href="index-mp-layout5.html">index
                                                                                Multipage Layout5</a></li>
                                                                        <li><a href="index-mp-layout6.html">index
                                                                                Multipage Layout6</a></li>
                                                                        <li><a href="index-mp-layout7.html">index
                                                                                Multipage Layout7</a></li>
                                                                        <li><a href="index-mp-layout8.html">index
                                                                                Multipage Layout8</a></li>
                                                                        <li><a href="index-mp-layout9.html">index
                                                                                Multipage Layout9</a></li>
                                                                        <li><a href="index-mp-layout10.html">index
                                                                                Multipage Layout10</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col3">
                                                            <ul class="list-unstyled list-dashed">
                                                                <li class="menu-item">
                                                                    <a class="tm-submenu-title"
                                                                        href="#"><span>Single Layouts</span></a>
                                                                    <ul class="list-unstyled">
                                                                        <li><a href="index-sp-layout1.html">index
                                                                                Single Layout1</a></li>
                                                                        <li><a href="index-sp-layout2.html">index
                                                                                Single Layout2</a></li>
                                                                        <li><a href="index-sp-layout3.html">index
                                                                                Single Layout3</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col3">
                                                            <ul class="list-unstyled list-dashed">
                                                                <li class="menu-item">
                                                                    <a class="tm-submenu-title"
                                                                        href="#"><span>RTL Layouts</span> <span
                                                                            class="badge bg-danger">New</span></a>
                                                                    <ul class="list-unstyled">
                                                                        <li><a href="index-rtl-mp-layout1.html">RTL
                                                                                Layout1</a></li>
                                                                        <li><a href="index-rtl-mp-layout2.html">RTL
                                                                                Layout2</a></li>
                                                                        <li><a href="index-rtl-mp-layout3.html">RTL
                                                                                Layout3</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col3">
                                                            <ul class="list-unstyled list-dashed">
                                                                <li class="menu-item">
                                                                    <a class="tm-submenu-title"
                                                                        href="#"><span>Dark Layouts</span> <span
                                                                            class="badge bg-danger">New</span></a>
                                                                    <ul class="list-unstyled">
                                                                        <li><a href="index-dark-mp-layout1.html">Dark
                                                                                Layout1</a></li>
                                                                        <li><a href="index-dark-mp-layout2.html">Dark
                                                                                Layout2</a></li>
                                                                        <li><a href="index-dark-mp-layout3.html">Dark
                                                                                Layout3</a></li>
                                                                        <li class=""><a
                                                                                class=" tm-submenu-title"
                                                                                href="#"><span>Boxed
                                                                                    Layouts</span></a></li>
                                                                        <li><a href="index-boxed-mp-layout1.html">Boxed
                                                                                Multipage</a></li>
                                                                        <li><a href="index-boxed-sp-layout1.html">Boxed
                                                                                Single</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#">Hot</a>
                                                <div class="megamenu megamenu-fullwidth megamenu-position-left">
                                                    <div class="megamenu-row">
                                                        <div class="col3">
                                                            <ul class="list-unstyled list-dashed">
                                                                <li class="menu-item">
                                                                    <ul class="list-unstyled">
                                                                        <li class=""><a
                                                                                class=" tm-submenu-title"
                                                                                href="#"><span>Split
                                                                                    Slider</span> <span
                                                                                    class="badge bg-danger">New</span></a>
                                                                        </li>
                                                                        <li><a
                                                                                href="index-hot-slider-split-home-layout1.html">Slider
                                                                                Split Home Layout1</a></li>
                                                                        <li><a
                                                                                href="index-hot-slider-split-home-layout2.html">Slider
                                                                                Split Home Layout2</a></li>
                                                                        <li class=""><a
                                                                                class=" tm-submenu-title"
                                                                                href="#"><span>Fullpage
                                                                                    Slider</span> <span
                                                                                    class="badge bg-danger">New</span></a>
                                                                        </li>
                                                                        <li><a
                                                                                href="index-hot-slider-fullpage-home.html">Slider
                                                                                Fullpage Home Layout</a></li>
                                                                        <li class=""><a
                                                                                class=" tm-submenu-title"
                                                                                href="#"><span>PagePiling
                                                                                    Slider</span> <span
                                                                                    class="badge bg-danger">New</span></a>
                                                                        </li>
                                                                        <li><a
                                                                                href="index-hot-slider-pagepiling-home.html">Slider
                                                                                PagePiling Home Layout</a></li>
                                                                        <li class=""><a
                                                                                class=" tm-submenu-title"
                                                                                href="#"><span>Magazine
                                                                                    Layouts</span></a></li>
                                                                        <li><a href="index-hot-magazine-home.html">Magazine
                                                                                Home Layout</a></li>
                                                                        <li class=""><a
                                                                                class=" tm-submenu-title"
                                                                                href="#"><span>Vertical
                                                                                    Nav</span></a></li>
                                                                        <li><a
                                                                                href="index-vertical-nav-mp-layout1.html">Vertical
                                                                                Nav Layout1</a></li>
                                                                        <li><a
                                                                                href="index-vertical-nav-sp-layout1.html">Vertical
                                                                                Nav Layout1</a></li>
                                                                        <li class=""><a
                                                                                class=" tm-submenu-title"
                                                                                href="#"><span>Menu Full
                                                                                    Page</span></a></li>
                                                                        <li><a href="index-menu-full-page-mp.html">Menu
                                                                                Full Page Multi</a></li>
                                                                        <li><a href="index-menu-full-page-sp.html">Menu
                                                                                Full Page Single</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col3">
                                                            <ul class="list-unstyled list-dashed">
                                                                <li class="menu-item">
                                                                    <a class="tm-submenu-title"
                                                                        href="#"><span>Portfolio Layouts</span>
                                                                        <span class="badge bg-danger">New</span></a>
                                                                    <ul class="list-unstyled">
                                                                        <li><a
                                                                                href="index-hot-portfolio-presentation-layout1.html">Portfolio
                                                                                Presentation Layout1</a></li>
                                                                        <li><a
                                                                                href="index-hot-portfolio-presentation-layout2.html">Portfolio
                                                                                Presentation Layout2</a></li>
                                                                        <li><a
                                                                                href="index-hot-portfolio-presentation-layout3.html">Portfolio
                                                                                Presentation Layout3</a></li>
                                                                        <li><a
                                                                                href="index-hot-portfolio-presentation-layout4.html">Portfolio
                                                                                Presentation Layout4</a></li>
                                                                        <li><a
                                                                                href="index-hot-portfolio-presentation-layout5.html">Portfolio
                                                                                Presentation Layout5</a></li>
                                                                        <li><a
                                                                                href="index-hot-portfolio-presentation-layout6.html">Portfolio
                                                                                Presentation Layout6</a></li>
                                                                        <li><a
                                                                                href="index-hot-portfolio-presentation-layout7.html">Portfolio
                                                                                Presentation Layout7</a></li>
                                                                        <li><a
                                                                                href="index-hot-portfolio-presentation-layout8.html">Portfolio
                                                                                Presentation Layout8</a></li>
                                                                        <li><a
                                                                                href="index-hot-portfolio-presentation-layout9.html">Portfolio
                                                                                Presentation Layout9</a></li>
                                                                        <li><a
                                                                                href="index-hot-portfolio-presentation-layout10.html">Portfolio
                                                                                Presentation Layout10</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col3">
                                                            <ul class="list-unstyled list-dashed">
                                                                <li class="menu-item">
                                                                    <a class="tm-submenu-title"
                                                                        href="#"><span>Home Variations</span>
                                                                        <span class="badge bg-danger">New</span></a>
                                                                    <ul class="list-unstyled">
                                                                        <li><a
                                                                                href="index-home-variation-appointment-form-style1.html">Home
                                                                                Appointment Layout1</a></li>
                                                                        <li><a
                                                                                href="index-home-variation-appointment-form-style2.html">Home
                                                                                Appointment Layout2</a></li>
                                                                        <li><a
                                                                                href="index-home-variation-appointment-form-style3.html">Home
                                                                                Appointment Layout3</a></li>
                                                                        <li><a
                                                                                href="index-home-variation-appointment-form-style4.html">Home
                                                                                Appointment Layout4</a></li>
                                                                        <li><a
                                                                                href="index-home-variation-appointment-form-style5.html">Home
                                                                                Appointment Layout5</a></li>
                                                                        <li><a
                                                                                href="index-home-variation-appointment-form-style6.html">Home
                                                                                Appointment Layout6</a></li>
                                                                        <li><a
                                                                                href="index-home-variation-appointment-form-style7.html">Home
                                                                                Appointment Layout7</a></li>
                                                                        <li><a
                                                                                href="index-home-variation-html5-video.html">Home
                                                                                HTML5 Video Layout</a></li>
                                                                        <li><a
                                                                                href="index-home-variation-maximageslider-style1.html">Home
                                                                                Maximage Slider Layout</a></li>
                                                                        <li><a
                                                                                href="index-home-variation-youtube-video-bg.html">Home
                                                                                Youtube Video Bg Layout</a></li>
                                                                        <li><a
                                                                                href="index-home-variation-typed-text.html">Home
                                                                                Typed Slider Layout</a></li>
                                                                        <li><a
                                                                                href="index-home-variation-swiper-slider1.html">Home
                                                                                Swiper Slider Layout1</a></li>
                                                                        <li><a
                                                                                href="index-home-variation-swiper-slider2.html">Home
                                                                                Swiper Slider Layout2</a></li>
                                                                        <li><a
                                                                                href="index-home-variation-swiper-slider3.html">Home
                                                                                Swiper Slider Layout3</a></li>
                                                                        <li><a
                                                                                href="index-home-variation-swiper-slider4.html">Home
                                                                                Swiper Slider Layout4</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col3">
                                                            <ul class="list-unstyled list-dashed">
                                                                <li class="menu-item">
                                                                    <a class="tm-submenu-title"
                                                                        href="#"><span>Home Variations</span>
                                                                        <span class="badge bg-danger">New</span></a>
                                                                    <ul class="list-unstyled">
                                                                        <li><a
                                                                                href="index-home-variation-bg-static.html">Home
                                                                                Bg Static Layout</a></li>
                                                                        <li><a
                                                                                href="index-home-variation-bg-image-parallax.html">Home
                                                                                Image Parallax Layout</a></li>
                                                                        <li><a
                                                                                href="index-home-variation-owl-animated-slider.html">Home
                                                                                Owl Animated Slider</a></li>
                                                                        <li><a
                                                                                href="index-home-variation-owl-animated-slider-fullscreen.html">Home
                                                                                Owl Animated Slider Fullscreel</a></li>
                                                                        <li><a
                                                                                href="index-home-variation-owl-carousel.html">Home
                                                                                Owl Carousel Layout</a></li>
                                                                        <li><a
                                                                                href="index-home-variation-owl-carousel-fullscreen.html">Home
                                                                                Owl Carousel Fullscreen</a></li>
                                                                        <li><a
                                                                                href="index-home-variation-owl-carousel-text-rotator.html">Home
                                                                                Owl Carousel Text Rotator</a></li>
                                                                        <li class=""><a
                                                                                class=" tm-submenu-title"
                                                                                href="#"><span>Parallax
                                                                                    Layouts</span></a></li>
                                                                        <li><a
                                                                                href="index-hot-parallax-home-layout1.html">Parallax
                                                                                Home Layout1</a></li>
                                                                        <li><a
                                                                                href="index-hot-parallax-home-layout2.html">Parallax
                                                                                Home Layout2</a></li>
                                                                        <li><a
                                                                                href="index-hot-personal-home-layout1.html">Personal
                                                                                Home Layout1</a></li>
                                                                        <li><a
                                                                                href="index-hot-personal-home-layout2.html">Personal
                                                                                Home Layout2</a></li>
                                                                        <li><a
                                                                                href="index-hot-personal-home-layout3.html">Personal
                                                                                Home Layout3</a></li>
                                                                        <li><a
                                                                                href="index-hot-personal-home-layout4.html">Personal
                                                                                Home Layout4</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="menu-item"><a href="#">Features</a>
                                                <ul class="dropdown">
                                                    <li><a href="page-preloader.html">Preloaders</a></li>
                                                    <li><a href="#">Header</a>
                                                        <ul class="dropdown">
                                                            <li><a href="#">Header 2 Rows</a>
                                                                <ul class="dropdown">
                                                                    <li><a href="page-header-style-2rows.html">Header 2
                                                                            Rows Style1</a></li>
                                                                    <li><a href="page-header-style-2rows-style2.html">Header
                                                                            2 Rows Style2</a></li>
                                                                    <li><a href="page-header-style-2rows-style3.html">Header
                                                                            2 Rows Style3</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="page-header-style-3rows.html">Header 3
                                                                    Rows</a></li>
                                                            <li><a href="#">Floating <span
                                                                        class="badge bg-danger">Header</span></a>
                                                                <ul class="dropdown">
                                                                    <li><a
                                                                            href="page-header-style-floating-2rows-style1.html">Floating
                                                                            Style1</a></li>
                                                                    <li><a
                                                                            href="page-header-style-floating-2rows-style2.html">Floating
                                                                            Style2</a></li>
                                                                    <li><a
                                                                            href="page-header-style-floating-2rows-style3.html">Floating
                                                                            Style3</a></li>
                                                                    <li><a
                                                                            href="page-header-style-floating-2rows-style4.html">Floating
                                                                            Style4</a></li>
                                                                    <li><a
                                                                            href="page-header-style-floating-2rows-style5.html">Floating
                                                                            Style5</a></li>
                                                                    <li><a
                                                                            href="page-header-style-floating-2rows-style6.html">Floating
                                                                            Style6</a></li>
                                                                    <li><a
                                                                            href="page-header-style-floating-2rows-style7.html">Floating
                                                                            Style7</a></li>
                                                                    <li><a
                                                                            href="page-header-style-floating-2rows-style8.html">Floating
                                                                            Style8</a></li>
                                                                    <li><a
                                                                            href="page-header-style-floating-2rows-style9.html">Floating
                                                                            Style9</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="#">BG White <span
                                                                        class="badge bg-danger">Header </span></a>
                                                                <ul class="dropdown">
                                                                    <li><a
                                                                            href="page-header-style-floating-2rows-white-style1.html">BG
                                                                            White Style1</a></li>
                                                                    <li><a
                                                                            href="page-header-style-floating-2rows-white-style2.html">BG
                                                                            White Style2</a></li>
                                                                    <li><a
                                                                            href="page-header-style-floating-2rows-white-style3.html">BG
                                                                            White Style3</a></li>
                                                                    <li><a
                                                                            href="page-header-style-floating-2rows-white-style4.html">BG
                                                                            White Style4</a></li>
                                                                    <li><a
                                                                            href="page-header-style-floating-2rows-white-style5.html">BG
                                                                            White Style5</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="#">Transparent <span
                                                                        class="badge bg-danger">Header </span></a>
                                                                <ul class="dropdown">
                                                                    <li><a
                                                                            href="page-header-style-floating-1row-transparent-bg-dark.html">Transparent
                                                                            Style1</a></li>
                                                                    <li><a
                                                                            href="page-header-style-floating-1row-transparent-bg-white.html">Transparent
                                                                            Style2</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="#">Modern <span
                                                                        class="badge bg-danger">Header </span></a>
                                                                <ul class="dropdown">
                                                                    <li><a href="page-header-style-modern-style1.html">Modern
                                                                            Style1</a></li>
                                                                    <li><a href="page-header-style-modern-style2.html">Modern
                                                                            Style2</a></li>
                                                                    <li><a href="page-header-style-modern-style3.html">Modern
                                                                            Style3</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Form</a>
                                                        <ul class="dropdown">
                                                            <li><a href="page-form-request-a-quote.html">Request a
                                                                    Quote Form</a></li>
                                                            <li><a href="#">Contact</a>
                                                                <ul class="dropdown">
                                                                    <li><a href="page-contact1.html">Contact Style1</a>
                                                                    </li>
                                                                    <li><a href="page-contact1-recaptcha.html">Contact
                                                                            Style1 Recaptcha</a></li>
                                                                    <li><a href="page-contact2.html">Contact Style2</a>
                                                                    </li>
                                                                    <li><a href="page-contact2-recaptcha.html">Contact
                                                                            Style2 Recaptcha</a></li>
                                                                    <li><a href="page-contact3.html">Contact Style3</a>
                                                                    </li>
                                                                    <li><a href="page-contact3-recaptcha.html">Contact
                                                                            Style3 Recaptcha</a></li>
                                                                    <li><a href="page-contact4.html">Contact Style4</a>
                                                                    </li>
                                                                    <li><a href="page-contact4-recaptcha.html">Contact
                                                                            Style4 Recaptcha</a></li>
                                                                    <li><a href="page-contact5.html">Contact Style5</a>
                                                                    </li>
                                                                    <li><a href="page-contact5-recaptcha.html">Contact
                                                                            Style5 Recaptcha</a></li>
                                                                    <li><a href="page-contact6.html">Contact Style6</a>
                                                                    </li>
                                                                    <li><a href="page-contact6-recaptcha.html">Contact
                                                                            Style6 Recaptcha</a></li>
                                                                    <li><a href="page-contact7.html">Contact Style7</a>
                                                                    </li>
                                                                    <li><a href="page-contact7-recaptcha.html">Contact
                                                                            Style7 Recaptcha</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="#">Login/Register Form</a>
                                                                <ul class="dropdown">
                                                                    <li><a href="#">Login/Register</a>
                                                                        <ul class="dropdown">
                                                                            <li><a
                                                                                    href="page-form-login-register-style1.html">Login/Register
                                                                                    style 1</a></li>
                                                                            <li><a
                                                                                    href="page-form-login-register-style2.html">Login/Register
                                                                                    style 2</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li><a href="#">Login</a>
                                                                        <ul class="dropdown">
                                                                            <li><a href="page-form-login-style1.html">Login
                                                                                    style 1</a></li>
                                                                            <li><a href="page-form-login-style2.html">Login
                                                                                    style 2</a></li>
                                                                            <li><a href="page-form-login-style3.html">Login
                                                                                    style 3</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li><a href="#">Register</a>
                                                                        <ul class="dropdown">
                                                                            <li><a
                                                                                    href="page-form-register-style1.html">Register
                                                                                    style 1</a></li>
                                                                            <li><a
                                                                                    href="page-form-register-style2.html">Register
                                                                                    style 2</a></li>
                                                                            <li><a
                                                                                    href="page-form-register-style3.html">Register
                                                                                    style 3</a></li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="page-form-subscribe.html"> Subscribe Form</a>
                                                            </li>
                                                            <li><a href="#">Appointment Form</a>
                                                                <ul class="dropdown">
                                                                    <li><a href="page-form-appointment-style1.html">Appointment
                                                                            style 1</a></li>
                                                                    <li><a href="page-form-appointment-style2.html">Appointment
                                                                            style 2</a></li>
                                                                    <li><a href="page-form-appointment-style3.html">Appointment
                                                                            style 3</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="#">Job Apply Form</a>
                                                                <ul class="dropdown">
                                                                    <li><a href="page-form-job-apply-style1.html">Job
                                                                            Apply style 1</a></li>
                                                                    <li><a href="page-form-job-apply-style2.html">Job
                                                                            Apply style 2</a></li>
                                                                    <li><a href="page-form-job-apply-style3.html">Job
                                                                            Apply style 3</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="#">Quick Contact Form</a>
                                                                <ul class="dropdown">
                                                                    <li><a href="page-form-quick-contact-style1.html">Quick
                                                                            Contact style 1</a></li>
                                                                    <li><a href="page-form-quick-contact-style2.html">Quick
                                                                            Contact style 2</a></li>
                                                                    <li><a href="page-form-quick-contact-style3.html">Quick
                                                                            Contact style 3</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Page Title <span
                                                                class="badge bg-danger">New</span></a>
                                                        <ul class="dropdown">
                                                            <li><a href="page-title-text-left.html">Text Left</a></li>
                                                            <li><a href="page-title-text-center.html">Text Center</a>
                                                            </li>
                                                            <li><a href="page-title-text-right.html">Text Right</a>
                                                            </li>
                                                            <li><a href="page-title-mini-version.html">Mini Version</a>
                                                            </li>
                                                            <li><a href="page-title-big-version.html">Big Version</a>
                                                            </li>
                                                            <li><a href="page-title-extra-big-version.html">Extra Big
                                                                    Version</a></li>
                                                            <li><a href="page-title-bg-white.html">Bg White</a></li>
                                                            <li><a href="page-title-bg-image.html">Bg Image</a></li>
                                                            <li><a href="page-title-bg-image-parallax.html">Bg Image
                                                                    Parallax</a></li>
                                                            <li><a href="page-title-bg-video-local.html">Bg Video</a>
                                                            </li>
                                                            <li><a href="page-title-bg-video-youtube.html">Bg Video
                                                                    Youtube</a></li>
                                                            <li><a href="page-title-full-transparent.html">Full
                                                                    Transparent</a></li>
                                                            <li><a href="page-title-overlay-white.html">Overlay
                                                                    White</a></li>
                                                            <li><a href="page-title-overlay-dark.html">Overlay Dark</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Side Push Panel</a>
                                                        <ul class="dropdown">
                                                            <li><a href="page-side-push-panel-left-overlay.html">Left
                                                                    Overlay</a></li>
                                                            <li><a href="page-side-push-panel-left-push.html">Left
                                                                    Push</a></li>
                                                            <li><a href="page-side-push-panel-right-overlay.html">Right
                                                                    Overlay</a></li>
                                                            <li><a href="page-side-push-panel-right-push.html">Right
                                                                    Push</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Paypal Form <span
                                                                class="badge bg-danger">New</span></a>
                                                        <ul class="dropdown">
                                                            <li><a href="#">Donation Onetime</a>
                                                                <ul class="dropdown">
                                                                    <li><a
                                                                            href="page-form-paypal-donate-onetime-style1.html">Style1</a>
                                                                    </li>
                                                                    <li><a
                                                                            href="page-form-paypal-donate-onetime-style2.html">Style2</a>
                                                                    </li>
                                                                    <li><a
                                                                            href="page-form-paypal-donate-onetime-style3.html">Style3</a>
                                                                    </li>
                                                                    <li><a
                                                                            href="page-form-paypal-donate-onetime-style4.html">Style4</a>
                                                                    </li>
                                                                    <li><a
                                                                            href="page-form-paypal-donate-onetime-style5.html">Style5</a>
                                                                    </li>
                                                                    <li><a
                                                                            href="page-form-paypal-donate-onetime-style6.html">Style6</a>
                                                                    </li>
                                                                    <li><a
                                                                            href="page-form-paypal-donate-onetime-style7.html">Style7</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="#">Donation Recurring</a>
                                                                <ul class="dropdown">
                                                                    <li><a
                                                                            href="page-form-paypal-donate-recurring-style1.html">Style1</a>
                                                                    </li>
                                                                    <li><a
                                                                            href="page-form-paypal-donate-recurring-style2.html">
                                                                            Style2</a></li>
                                                                    <li><a
                                                                            href="page-form-paypal-donate-recurring-style3.html">Style3</a>
                                                                    </li>
                                                                    <li><a
                                                                            href="page-form-paypal-donate-recurring-style4.html">Style4</a>
                                                                    </li>
                                                                    <li><a
                                                                            href="page-form-paypal-donate-recurring-style5.html">Style5</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="#">Both Onetime/Recurring</a>
                                                                <ul class="dropdown">
                                                                    <li><a
                                                                            href="page-form-paypal-donate-both-onetime-recurring-style1.html">Style1</a>
                                                                    </li>
                                                                    <li><a
                                                                            href="page-form-paypal-donate-both-onetime-recurring-style2.html">Style2</a>
                                                                    </li>
                                                                    <li><a
                                                                            href="page-form-paypal-donate-both-onetime-recurring-style3.html">Style3</a>
                                                                    </li>
                                                                    <li><a
                                                                            href="page-form-paypal-donate-both-onetime-recurring-style4.html">Style4</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="#">Order Payment</a>
                                                                <ul class="dropdown">
                                                                    <li><a
                                                                            href="page-form-paypal-order-style1.html">Style1</a>
                                                                    </li>
                                                                    <li><a
                                                                            href="page-form-paypal-order-style2.html">Style2</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="page-form-paypal-cart-style1.html">Cart
                                                                    Payment</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Footer</a>
                                                        <ul class="dropdown">
                                                            <li><a href="#">Footer Dark</a>
                                                                <ul class="dropdown">
                                                                    <li><a href="page-footer-dark-style1.html#footer">Footer
                                                                            Dark One</a></li>
                                                                    <li><a href="page-footer-dark-style2.html#footer">Footer
                                                                            Dark Two</a></li>
                                                                    <li><a href="page-footer-dark-style3.html#footer">Footer
                                                                            Dark Three</a></li>
                                                                    <li><a href="page-footer-dark-style4.html#footer">Footer
                                                                            Dark Four</a></li>
                                                                    <li><a href="page-footer-dark-style5.html#footer">Footer
                                                                            Dark Five</a></li>
                                                                    <li><a href="page-footer-dark-style6.html#footer">Footer
                                                                            Dark Six</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item"><a href="#">Pages</a>
                                                <ul class="dropdown">
                                                    <li><a href="#">About</a>
                                                        <ul class="dropdown">
                                                            <li><a href="page-about1.html">About Style1</a></li>
                                                            <li><a href="page-about2.html">About Style2</a></li>
                                                            <li><a href="page-about3.html">About Style3</a></li>
                                                            <li><a href="page-about4.html">About Style4</a></li>
                                                            <li><a href="page-about5.html">About Style5</a></li>
                                                            <li><a href="page-about6.html">About Style6</a></li>
                                                            <li><a href="page-about7.html">About Style7</a></li>
                                                            <li><a href="page-about8.html">About Style8</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#home">Courses</a>
                                                        <ul class="dropdown">
                                                            <li><a href="page-course-grid.html">Course Grid</a></li>
                                                            <li><a href="page-course-list.html">Course List</a></li>
                                                            <li><a href="page-courses-accounting-technologies.html">Course
                                                                    Details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#home">Teachers</a>
                                                        <ul class="dropdown">
                                                            <li><a href="page-teachers-style1.html">Teachers style
                                                                    1</a></li>
                                                            <li><a href="page-teachers-style2.html">Teachers style
                                                                    2</a></li>
                                                            <li><a href="page-teachers-details.html">Teachers
                                                                    Details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Team</a>
                                                        <ul class="dropdown">
                                                            <li><a href="page-team-grid.html">Team Grid</a></li>
                                                            <li><a href="page-team-carousel.html">Team Carousel</a>
                                                            </li>
                                                            <li><a href="page-team-details.html">Team Details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Services</a>
                                                        <ul class="dropdown">
                                                            <li><a href="page-services1.html">Services Style1</a></li>
                                                            <li><a href="page-services2.html">Services Style2</a></li>
                                                            <li><a href="page-service-details.html">Services
                                                                    Details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Portfolio</a>
                                                        <ul class="dropdown">
                                                            <li><a href="portfolio-grid-4col.html">Portfolio Grid</a>
                                                            </li>
                                                            <li><a href="portfolio-tiles-4col.html">Portfolio Tiles</a>
                                                            </li>
                                                            <li><a href="portfolio-details-image.html">Portfolio
                                                                    Details - Image</a></li>
                                                            <li><a href="portfolio-details-image-gallery.html">Portfolio
                                                                    Details - Image Gallery</a></li>
                                                            <li><a href="portfolio-details-video-gallery.html">Portfolio
                                                                    Details - Video Gallery</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Appointment</a>
                                                        <ul class="dropdown">
                                                            <li><a href="page-form-appointment-style1.html">Appointment
                                                                    Style1</a></li>
                                                            <li><a href="page-form-appointment-style2.html">Appointment
                                                                    Style2</a></li>
                                                            <li><a href="page-form-appointment-style3.html">Appointment
                                                                    Style3</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">FAQ</a>
                                                        <ul class="dropdown">
                                                            <li><a href="page-faq-style1.html">FAQ Style1</a></li>
                                                            <li><a href="page-faq-style2.html">FAQ Style2</a></li>
                                                            <li><a href="page-faq-style3.html">FAQ Style3</a></li>
                                                            <li><a href="page-faq-style4.html">FAQ Style4</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Calender</a>
                                                        <ul class="dropdown">
                                                            <li><a href="page-calender1.html">Calender Style1</a></li>
                                                            <li><a href="page-calender2.html">Calender Style2</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Gallery <span
                                                                class="badge bg-danger">New</span></a>
                                                        <ul class="dropdown">
                                                            <li><a href="page-gallery.html">Gallery</a></li>
                                                            <li><a href="page-gallery-3col.html">3 Columns</a></li>
                                                            <li><a href="page-gallery-3col-masonry.html">3 Columns
                                                                    Masonry</a></li>
                                                            <li><a href="page-gallery-3col-masonry-tiles.html">3
                                                                    Columns Masonry Tiles</a></li>
                                                            <li><a href="page-gallery-4col.html">4 Columns</a></li>
                                                            <li><a href="page-gallery-4col-masonry.html">4 Columns
                                                                    Masonry</a></li>
                                                            <li><a href="page-gallery-4col-masonry-tiles.html">4
                                                                    Columns Masonry Tiles</a></li>
                                                            <li><a href="page-gallery-variations-grid.html">Variations
                                                                    Grid</a></li>
                                                            <li><a href="page-gallery-variations-masonry.html">Variations
                                                                    Grid Masonry</a></li>
                                                            <li><a href="page-gallery-variations-masonry-tiles.html">Variations
                                                                    Grid Masonry Tiles</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Job <span
                                                                class="badge bg-danger">New</span></a>
                                                        <ul class="dropdown">
                                                            <li><a href="page-job-list.html">Job List</a></li>
                                                            <li><a href="page-job-details-style1.html">Job Details
                                                                    Style1</a></li>
                                                            <li><a href="page-job-details-style2.html">Job Details
                                                                    Style2</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Events</a>
                                                        <ul class="dropdown">
                                                            <li><a href="#">Events Calendar</a>
                                                                <ul class="dropdown">
                                                                    <li><a
                                                                            href="page-events-calendar-style1-daygrid-views.html">Calendar
                                                                            Style1</a></li>
                                                                    <li><a
                                                                            href="page-events-calendar-style2-google-calendar.html">Calendar
                                                                            Style2</a></li>
                                                                    <li><a
                                                                            href="page-events-calendar-style3-list-views.html">Calendar
                                                                            Style3</a></li>
                                                                    <li><a
                                                                            href="page-events-calendar-style4-natural-height.html">Calendar
                                                                            Style4</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="#">Events Grid</a>
                                                                <ul class="dropdown">
                                                                    <li><a href="page-events-grid-2column.html">Grid
                                                                            2column</a></li>
                                                                    <li><a href="page-events-grid-3column.html">Grid
                                                                            3column</a></li>
                                                                    <li><a href="page-events-grid-4column.html">Grid
                                                                            4column</a></li>
                                                                    <li><a href="page-events-grid-left-sidebar.html">Grid
                                                                            Left Sidebar</a></li>
                                                                    <li><a href="page-events-grid-right-sidebar.html">Grid
                                                                            Right Sidebar</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="#">Events List</a>
                                                                <ul class="dropdown">
                                                                    <li><a href="page-events-list-vertical-slide.html">List
                                                                            Vertical Slide</a></li>
                                                                    <li><a href="page-events-list-left-sidebar.html">List
                                                                            Left Sidebar</a></li>
                                                                    <li><a href="page-events-list-right-sidebar.html">List
                                                                            Right Sidebar</a></li>
                                                                    <li><a href="page-events-list-no-sidebar.html">List
                                                                            No Sidebar</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="#">Events Details</a>
                                                                <ul class="dropdown">
                                                                    <li><a href="page-events-details-style1.html">Details
                                                                            Style1</a></li>
                                                                    <li><a href="page-events-details-style2.html">Details
                                                                            Style2</a></li>
                                                                    <li><a href="page-events-details-style3.html">Details
                                                                            Style3</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Page 404</a>
                                                        <ul class="dropdown">
                                                            <li><a href="page-404-style1.html">Style1</a></li>
                                                            <li><a href="page-404-style2.html">Style2</a></li>
                                                            <li><a href="page-404-style3.html">Style3</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Under Construction</a>
                                                        <ul class="dropdown">
                                                            <li><a
                                                                    href="page-under-construction-style1.html">Style1</a>
                                                            </li>
                                                            <li><a
                                                                    href="page-under-construction-style2.html">Style2</a>
                                                            </li>
                                                            <li><a
                                                                    href="page-under-construction-style3.html">Style3</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Coming Soon</a>
                                                        <ul class="dropdown">
                                                            <li><a href="page-coming-soon-style1.html">Style1</a></li>
                                                            <li><a href="page-coming-soon-style2.html">Style2</a></li>
                                                            <li><a href="page-coming-soon-style3.html">Style3</a></li>
                                                            <li><a href="page-coming-soon-style4.html">Style4</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item"><a href="javascript:void(0)">News</a>
                                                <ul class="dropdown">
                                                    <li><a href="#">News Classic</a>
                                                        <ul class="dropdown">
                                                            <li><a href="news-classic-both-sidebar.html">Both
                                                                    Sidebar</a></li>
                                                            <li><a href="news-classic-left-thumbs.html">Left Thumb</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">News Grid</a>
                                                        <ul class="dropdown">
                                                            <li><a href="news-grid-2-column.html">Grid 2 Columns</a>
                                                            </li>
                                                            <li><a href="news-grid-3-column.html">Grid 3 Columns</a>
                                                            </li>
                                                            <li><a href="news-grid-4-column.html">Grid 4 Columns</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">News Isotope</a>
                                                        <ul class="dropdown">
                                                            <li><a href="news-isotope-2-column.html">Isotope 2
                                                                    Columns</a></li>
                                                            <li><a href="news-isotope-3-column.html">Isotope 3
                                                                    Columns</a></li>
                                                            <li><a href="news-isotope-4-column.html">Isotope 4
                                                                    Columns</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">News Masonry</a>
                                                        <ul class="dropdown">
                                                            <li><a href="news-masonry-2-column.html">Masonry 2
                                                                    Columns</a></li>
                                                            <li><a href="news-masonry-3-column.html">Masonry 3
                                                                    Columns</a></li>
                                                            <li><a href="news-masonry-4-column.html">Masonry 4
                                                                    Columns</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">News Single</a>
                                                        <ul class="dropdown">
                                                            <li><a href="news-single-left-sidebar.html">Left
                                                                    Sidebar</a></li>
                                                            <li><a href="news-single-right-sidebar.html">Right
                                                                    Sidebar</a></li>
                                                            <li><a href="news-single-both-sidebar.html">Both
                                                                    Sidebar</a></li>
                                                            <li><a href="news-single-no-sidebar.html">No Sidebar</a>
                                                            </li>
                                                            <li><a href="news-single-disqus-comments.html">Disqus
                                                                    Comment</a></li>
                                                            <li><a href="news-single-facebook-comments.html">Facebook
                                                                    Comment</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="news-timeline.html">News Vertical Timeline</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item">
                                                <a href="javascript:void(0)">Shop</a>
                                                <div class="megamenu megamenu-fullwidth megamenu-position-left">
                                                    <div class="megamenu-row">
                                                        <div class="col4">
                                                            <div class="widget">
                                                                <h4 class="widget-title">Latest Products</h4>
                                                                <ul class="product_list_widget">
                                                                    <li class="mb-20">
                                                                        <div class="product-left">
                                                                            <a class="p-0"
                                                                                href="shop-product-details.html">
                                                                                <img width="120" height="120"
                                                                                    src="images/shop/product.jpg"
                                                                                    class="thumbnail" alt="">
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-right">
                                                                            <a class="product-title p-0"
                                                                                href="shop-product-details.html">Beanie
                                                                                with Logo</a>
                                                                            <span class="amount"><span
                                                                                    class="currencySymbol">£</span>11.05</span>
                                                                        </div>
                                                                    </li>
                                                                    <li class="mb-20">
                                                                        <div class="product-left">
                                                                            <a class="p-0"
                                                                                href="shop-product-details.html">
                                                                                <img width="120" height="120"
                                                                                    src="images/shop/product2.jpg"
                                                                                    class="thumbnail" alt="">
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-right">
                                                                            <a class="product-title p-0"
                                                                                href="shop-product-details.html">WordPress
                                                                                Pennant</a>
                                                                            <del>
                                                                                <span class="amount"><span
                                                                                        class="currencySymbol">£</span>20.00</span>
                                                                            </del>
                                                                            <ins>
                                                                                <span class="amount"><span
                                                                                        class="currencySymbol">£</span>18.00</span>
                                                                            </ins>
                                                                    </li>
                                                                    <li class="mb-20">
                                                                        <div class="product-left">
                                                                            <a class="p-0"
                                                                                href="shop-product-details.html">
                                                                                <img width="120" height="120"
                                                                                    src="images/shop/product.jpg"
                                                                                    class="thumbnail" alt="">
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-right">
                                                                            <a class="product-title p-0"
                                                                                href="shop-product-details.html">Hoodie
                                                                                with Zipper</a>
                                                                            <span class="amount"><span
                                                                                    class="currencySymbol">£</span>11.05</span>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col5">
                                                            <h4 class="mt-10 text-gray">Up to 21% off on all products!
                                                            </h4>
                                                            <img class="img-fullwidth"
                                                                src="images/shop/portfolio-big1.jpg" alt="">
                                                        </div>
                                                        <div class="col3">
                                                            <ul class="list-unstyled list-dashed">
                                                                <li>
                                                                    <a class="tm-submenu-title"
                                                                        href="#"><span>Shop Ready!</span></a>
                                                                </li>
                                                                <li><a href="shop-home-layout1.html">Shop Home Layout1
                                                                    </a></li>
                                                                <li><a href="shop-home-layout2.html">Shop Home Layout2
                                                                    </a></li>
                                                                <li><a href="shop-home-layout3.html">Shop Home Layout3
                                                                    </a></li>
                                                                <li><a href="shop-products.html">Products</a></li>
                                                                <li><a href="shop-products-sidebar.html">Products With
                                                                        Sidebar</a></li>
                                                                <li><a href="shop-product-details.html">Product
                                                                        Details</a></li>
                                                                <li><a href="shop-cart.html">Cart</a></li>
                                                                <li><a href="shop-checkout.html">Checkout</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#">Shortcodes</a>
                                                <div class="megamenu megamenu-fullwidth megamenu-position-left">
                                                    <div class="megamenu-row">
                                                        <div class="col3">
                                                            <ul class="list-unstyled list-dashed">
                                                                <li class="menu-item">
                                                                    <a class="tm-submenu-title"
                                                                        href="#"><span>Built-in Shortcodes
                                                                            (16)</span> <span
                                                                            class="badge bg-danger">New</span></a>
                                                                    <ul class="list-unstyled">
                                                                        <li><a href="shortcode-accordion.html"><i
                                                                                    class="fa fa-list-ul"></i>
                                                                                Accordion</a></li>
                                                                        <li><a href="shortcode-alerts.html"><i
                                                                                    class="fa fa-exclamation-circle"></i>
                                                                                Alerts</a></li>
                                                                        <li><a href="shortcode-animations.html"><i
                                                                                    class="fa fa-magic"></i>
                                                                                Animations</a></li>
                                                                        <li><a
                                                                                href="shortcode-background-video-html5.html"><i
                                                                                    class="fas fa-video"></i>
                                                                                Background Video - HTML5</a></li>
                                                                        <li><a
                                                                                href="shortcode-background-video-youtube.html"><i
                                                                                    class="fab fa-youtube"></i>
                                                                                Background Video - Youtube</a></li>
                                                                        <li><a
                                                                                href="shortcode-before-after-slider.html"><i
                                                                                    class="fa fa-window-restore"></i>
                                                                                Before After Slider</a></li>
                                                                        <li><a href="shortcode-blockquotes.html"><i
                                                                                    class="fa fa-quote-right"></i>
                                                                                Blockquotes</a></li>
                                                                        <li><a
                                                                                href="shortcode-box-gradient-effect.html"><i
                                                                                    class="fas fa-fill-drip"></i> Box
                                                                                Gradient</a></li>
                                                                        <li><a
                                                                                href="shortcode-button-groups-and-dropdowns.html"><i
                                                                                    class="fa fa-link"></i> Buttons
                                                                                groups & Dropdowns</a></li>
                                                                        <li><a href="shortcode-buttons.html"><i
                                                                                    class="fa fa-link"></i> Buttons</a>
                                                                        </li>
                                                                        <li><a href="shortcode-call-to-actions.html"><i
                                                                                    class="fa fa-plus-square"></i> Call
                                                                                To Actions</a></li>
                                                                        <li><a href="shortcode-charts.html"><i
                                                                                    class="fas fa-chart-pie"></i>
                                                                                Charts</a></li>
                                                                        <li><a href="shortcode-clients.html"><i
                                                                                    class="fas fa-briefcase"></i>
                                                                                Clients Logo</a></li>
                                                                        <li><a href="shortcode-columns-grids.html"><i
                                                                                    class="fas fa-columns"></i> Columns
                                                                                Grids</a></li>
                                                                        <li><a
                                                                                href="shortcode-timer-final-countdown.html"><i
                                                                                    class="fas fa-stopwatch-20"></i>
                                                                                Countdown - Final</a></li>
                                                                        <li><a href="shortcode-timer-flipclock.html"><i
                                                                                    class="fab fa-creative-commons-zero"></i>
                                                                                Countdown - Flipclock</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col3">
                                                            <ul class="list-unstyled list-dashed">
                                                                <li class="menu-item">
                                                                    <a class="tm-submenu-title"
                                                                        href="#"><span>Built-in Shortcodes
                                                                            (16)</span> <span
                                                                            class="badge bg-danger">New</span></a>
                                                                    <ul class="list-unstyled">
                                                                        <li><a
                                                                                href="shortcode-timer-slick-circular.html"><i
                                                                                    class="fas fa-stopwatch-20"></i>
                                                                                Countdown- Slick Circular</a></li>
                                                                        <li><a
                                                                                href="shortcode-custom-columns-holder.html"><i
                                                                                    class="fas fa-columns"></i> Custom
                                                                                Columns Holder</a></li>
                                                                        <li><a href="shortcode-datetime-datepair.html"><i
                                                                                    class="far fa-calendar-plus"></i>
                                                                                Datepair</a></li>
                                                                        <li><a
                                                                                href="shortcode-datetime-datepicker.html"><i
                                                                                    class="far fa-calendar-check"></i>
                                                                                Datepicker</a></li>
                                                                        <li><a
                                                                                href="shortcode-datetime-timepicker.html"><i
                                                                                    class="far fa-clock"></i> Date
                                                                                Timepicker</a></li>
                                                                        <li><a href="shortcode-divider.html"><i
                                                                                    class="fas fa-sort-amount-up"></i>
                                                                                Divider</a></li>
                                                                        <li><a href="shortcode-dropcaps.html"><i
                                                                                    class="fas fa-closed-captioning"></i>
                                                                                Dropcaps</a></li>
                                                                        <li><a href="shortcode-flickr-feed.html"><i
                                                                                    class="fas fa-rss"></i> Flickr
                                                                                Feed</a></li>
                                                                        <li><a href="shortcode-flipbox.html"><i
                                                                                    class="fab fa-flipboard"></i>
                                                                                Flipbox</a></li>
                                                                        <li><a href="shortcode-forms.html"><i
                                                                                    class="fab fa-wpforms"></i>
                                                                                Forms</a></li>
                                                                        <li><a href="shortcode-funfacts.html"><i
                                                                                    class="fas fa-fire-alt"></i>
                                                                                Funfacts</a></li>
                                                                        <li><a href="shortcode-iconbox.html"><i
                                                                                    class="fas fa-atom"></i> Icon
                                                                                Box</a></li>
                                                                        <li><a href="shortcode-image-box.html"><i
                                                                                    class="far fa-images"></i> Image
                                                                                Box</a></li>
                                                                        <li><a href="shortcode-instagram-feed.html"><i
                                                                                    class="fab fa-instagram"></i>
                                                                                Instagram Feed</a></li>
                                                                        <li><a href="shortcode-labels-badges.html"><i
                                                                                    class="fas fa-certificate"></i>
                                                                                Labels Badges</a></li>
                                                                        <li><a href="shortcode-listgroup-panels.html"><i
                                                                                    class="fas fa-tags"></i> Listgroup
                                                                                Panels</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col3">
                                                            <ul class="list-unstyled list-dashed">
                                                                <li class="menu-item">
                                                                    <a class="tm-submenu-title"
                                                                        href="#"><span>Built-in Shortcodes
                                                                            (16)</span> <span
                                                                            class="badge bg-danger">New</span></a>
                                                                    <ul class="list-unstyled">
                                                                        <li><a href="shortcode-lists.html"><i
                                                                                    class="fas fa-list"></i> List</a>
                                                                        </li>
                                                                        <li><a href="shortcode-maps.html"><i
                                                                                    class="fas fa-map-marked"></i>
                                                                                Map</a></li>
                                                                        <li><a href="shortcode-media-embed.html"><i
                                                                                    class="fas fa-code"></i> Media
                                                                                Embed</a></li>
                                                                        <li><a href="shortcode-modal-bootstrap.html"><i
                                                                                    class="fas fa-bullhorn"></i> Modal
                                                                                - Bootstrap</a></li>
                                                                        <li><a href="shortcode-modal-lightbox.html"><i
                                                                                    class="fas fa-lightbulb"></i> Modal
                                                                                Lightbox</a></li>
                                                                        <li><a href="shortcode-navigation.html"><i
                                                                                    class="fas fa-tasks"></i>
                                                                                Navigation</a></li>
                                                                        <li><a href="shortcode-odometer.html"><i
                                                                                    class="fas fa-tachometer-alt"></i>
                                                                                Odometer</a></li>
                                                                        <li><a href="shortcode-owl-carousel.html"><i
                                                                                    class="fas fa-images"></i> Owl
                                                                                Carousel</a></li>
                                                                        <li><a href="shortcode-pagination.html"><i
                                                                                    class="fas fa-ellipsis-h"></i>
                                                                                Pagination</a></li>
                                                                        <li><a href="shortcode-piechart.html"><i
                                                                                    class="fas fa-chart-pie"></i>
                                                                                Piechart</a></li>
                                                                        <li><a href="shortcode-pricing-table.html"><i
                                                                                    class="fas fa-microchip"></i>
                                                                                Pricing Table</a></li>
                                                                        <li><a href="shortcode-progressbar.html"><i
                                                                                    class="fas fa-sliders-h"></i>
                                                                                Progressbar</a></li>
                                                                        <li><a href="shortcode-responsive.html"><i
                                                                                    class="fas fa-tablet-alt"></i>
                                                                                Responsive</a></li>
                                                                        <li><a href="shortcode-separator.html"><i
                                                                                    class="fas fa-object-ungroup"></i>
                                                                                Separator</a></li>
                                                                        <li><a href="shortcode-sitemap.html"><i
                                                                                    class="fas fa-sitemap"></i>
                                                                                Sitemap</a></li>
                                                                        <li><a href="shortcode-slick-slider.html"><i
                                                                                    class="fas fa-images"></i> Slick
                                                                                Slider</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col3">
                                                            <ul class="list-unstyled list-dashed">
                                                                <li class="menu-item">
                                                                    <a class="tm-submenu-title"
                                                                        href="#"><span>Built-in Shortcodes
                                                                            (16)</span> <span
                                                                            class="badge bg-danger">New</span></a>
                                                                    <ul class="list-unstyled">
                                                                        <li><a href="shortcode-sliders.html"><i
                                                                                    class="fas fa-images"></i>
                                                                                Sliders</a></li>
                                                                        <li><a href="shortcode-smoothscrolling.html"><i
                                                                                    class="fa fa-binoculars"></i>
                                                                                Smoothscrolling</a></li>
                                                                        <li><a href="shortcode-styled-icons.html"><i
                                                                                    class="fab fa-facebook-square"></i>
                                                                                Styled Icons</a></li>
                                                                        <li><a href="shortcode-subscribe.html"><i
                                                                                    class="fa fa-user-plus"></i>
                                                                                Subscribe</a></li>
                                                                        <li><a href="shortcode-tables.html"><i
                                                                                    class="fas fa-icons"></i>
                                                                                Tables</a></li>
                                                                        <li><a href="shortcode-tabs.html"><i
                                                                                    class="fa fa-indent"></i> Tabs</a>
                                                                        </li>
                                                                        <li><a href="shortcode-testimonials.html"><i
                                                                                    class="fas fa-user-shield"></i>
                                                                                Testimonials</a></li>
                                                                        <li><a href="shortcode-textblock.html"><i
                                                                                    class="fa fa-bold"></i>
                                                                                Textblock</a></li>
                                                                        <li><a
                                                                                href="shortcode-thumbnails-carousels.html"><i
                                                                                    class="fab fa-buffer"></i>
                                                                                Thumbnails Carousels</a></li>
                                                                        <li><a href="shortcode-title.html"><i
                                                                                    class="fas fa-heading"></i>
                                                                                Title</a></li>
                                                                        <li><a href="shortcode-vertical-timeline.html"><i
                                                                                    class="fas fa-grip-vertical"></i>
                                                                                Timeline - Vertical</a></li>
                                                                        <li><a href="shortcode-twitter.html"><i
                                                                                    class="fab fa-twitter-square"></i>
                                                                                Twitter</a></li>
                                                                        <li><a href="shortcode-typography.html"><i
                                                                                    class="fas fa-font"></i>
                                                                                Typography</a></li>
                                                                        <li><a href="shortcode-video-play-btn.html"><i
                                                                                    class="fas fa-play-circle"></i>
                                                                                Video Play Btn</a></li>
                                                                        <li><a href="shortcode-widgets.html"><i
                                                                                    class="fa fa-gift"></i> Widgets</a>
                                                                        </li>
                                                                        <li><a href="shortcode-working-process.html"><i
                                                                                    class="fas fa-network-wired"></i>
                                                                                Working Process</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="col-sm-auto align-self-center nav-side-icon-parent">
                                    <ul class="list-inline nav-side-icon-list">
                                        <li class="hidden-mobile-mode"><a href="#" id="top-nav-search-btn"><i
                                                    class="search-icon fa fa-search"></i></a></li>
                                        <li class="hidden-mobile-mode">
                                            <div class="top-nav-mini-cart-icon-container">
                                                <div class="top-nav-mini-cart-icon-contents">
                                                    <a class="mini-cart-icon" href="shop-cart.html"
                                                        title="View your shopping cart">
                                                        <img src="{{ asset('home/images/shopping-cart.png') }}"
                                                            width="25" alt="cart"><span
                                                            class="items-count">1</span> <span
                                                            class="cart-quick-info">1 item - <span
                                                                class="amount"><span
                                                                    class="currencySymbol">&pound;</span>18.00</span></span>
                                                    </a>
                                                    <div class="dropdown-content">
                                                        <ul class="cart_list product_list_widget">
                                                            <li class="mini_cart_item">
                                                                <a href="#"
                                                                    class="remove remove_from_cart_button"
                                                                    aria-label="Remove this item"
                                                                    data-product_id="18832" data-cart_item_key="#"
                                                                    data-product_sku="woo-beanie">&times;</a>
                                                                <a href="#"> <img class="attachment-thumbnail"
                                                                        src="images/shop/product.jpg" width="300"
                                                                        height="300" alt="" />Beanie</a>
                                                                <span class="quantity">1 &times; <span class="amount">
                                                                        <span
                                                                            class="currencySymbol">&pound;</span>18.00</span></span>
                                                            </li>
                                                        </ul>
                                                        <p class="total"> <strong>Subtotal:</strong> <span
                                                                class="woocommerce-Price-amount amount"><span
                                                                    class="currencySymbol">&pound;</span>18.00</span>
                                                        </p>
                                                        <div class="buttons cart-action-buttons">
                                                            <div class="row">
                                                                <div class="col-6 pe-0"><a href="shop-cart.html"
                                                                        class="btn btn-theme-colored2 btn-block btn-sm wc-forward">View
                                                                        Cart</a></div>
                                                                <div class="col-6 ps-1"><a href="shop-checkout.html"
                                                                        class="btn btn-theme-colored1 btn-block btn-sm checkout wc-forward">Checkout</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="hidden-mobile-mode">
                                            <div id="side-panel-trigger" class="side-panel-trigger">
                                                <a href="#">
                                                    <div class="hamburger-box">
                                                        <div class="hamburger-inner"></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div id="top-nav-search-form" class="clearfix">
                                        <form action="#" method="GET">
                                            <input type="text" name="s" value=""
                                                placeholder="Type and Press Enter..." autocomplete="off" />
                                        </form>
                                        <a href="#" id="close-search-btn"><i class="fa fa-times"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-block d-xl-none">
                                <div class="col-12">
                                    <nav id="top-primary-nav-clone"
                                        class="menuzord d-block d-xl-none default menuzord-color-default menuzord-border-boxed menuzord-responsive"
                                        data-effect="slide" data-animation="none" data-align="right">
                                        <ul id="main-nav-clone"
                                            class="menuzord-menu menuzord-right menuzord-indented scrollable">
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Start main-content -->
        <div class="main-content-area">
            <!-- Section: home -->
            <section id="home" class="divider parallax fullscreen" data-parallax-ratio="0.6"
                data-tm-bg-img="{{ asset('home/images/bg/bg1.jpg') }}">
                <div class="d-flex align-items-center flex-column justify-content-center h-100">
                    <div class="container pt-150 pb-150">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="pb-50 pt-30">
                                    <h3 class="">Best Treatment Here</h3>
                                    <h1 class="">Health Care Solution</h1>
                                    <p class="">Every day we bring hope to millions of children in the
                                        world's<br> hardest places as a sign of God's unconditional love. </p>
                                    <a class="btn btn-theme-colored1 btn-round" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: welcome -->
            <section id="welcome" class="divider layer-overlay overlay-white-3 parallax" data-parallax-ratio="0.1"
                data-tm-bg-img="images/bg/bg10.jpg">
                <div class="container pt-150 pb-150">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-7">
                                <h2 class="font-size-36 mt-0 text-black">World Famous Heart Hospital</h2>
                                <p class="lead text-black">One of the world's leading hospitals providing safe &amp;
                                    compassionate care at its best for everyone with cheapest medical cost. Molestias
                                    deserunt nisi repellat cumque quo</p>
                                <a class="btn btn-theme-colored1 btn-round" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: Services -->
            <section id="services" class="divider parallax layer-overlay overlay-white-8" data-parallax-ratio="0.1"
                data-tm-bg-img="images/bg/bg17.jpg">
                <div class="container pt-150 pb-150">
                    <div class="section-title text-center">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="text-uppercase title">Special <span
                                        class="text-theme-colored font-weight-300"> Services</span></h2>
                                <p class="text-uppercase text-black">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit tenetur.</p>
                            </div>
                        </div>
                    </div>
                    <div class="section-content">
                        <div class="row multi-row-clearfix">
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="icon-box left media"> <a href="#"
                                        class="media-left float-start flip"><i
                                            class="icon-ambulance14 text-theme-colored"></i></a>
                                    <div class="media-body">
                                        <h5 class="media-heading heading">Emergency Care</h5>
                                        <p class="text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Cum consectetur sit ullam perspiciatis, deserunt.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="icon-box left media"> <a href="#"
                                        class="media-left float-start flip"><i
                                            class="icon-illness text-theme-colored"></i></a>
                                    <div class="media-body">
                                        <h5 class="media-heading heading">Operation Theatre</h5>
                                        <p class="text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Cum consectetur sit ullam perspiciatis, deserunt.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="icon-box left media"> <a href="#"
                                        class="media-left float-start flip"><i
                                            class="icon-hospital35 text-theme-colored"></i></a>
                                    <div class="media-body">
                                        <h5 class="media-heading heading">Blood Test</h5>
                                        <p class="text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Cum consectetur sit ullam perspiciatis, deserunt.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: Experts -->
            <section id="experts" class="divider parallax layer-overlay overlay-white-6"
                data-parallax-ratio="0.1" data-tm-bg-img="images/bg/bg2.jpg">
                <section class="">
                    <div class="container">
                        <div class="section-title">
                            <div class="row justify-content-md-center">
                                <div class="col-md-8">
                                    <div class="text-center mb-60">
                                        <div
                                            class="tm-sc-section-title section-title section-title-style1 text-center">
                                            <div class="title-wrapper">
                                                <h2 class="title icon-bottom"> <span class="">Our </span>
                                                    <span class="text-theme-colored1">Doctors</span>
                                                </h2>
                                                <div class="title-seperator-line"></div>
                                                <div class="paragraph">
                                                    <p>Explore Our Completed Services! Consectetur adipiscing elitt elit
                                                        tellus, luctus pulvinar dapibus leoconsectetur luctus nec.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div
                                        class="tm-sc-staff tm-sc-staff-carousel staff-style3-modern owl-dots-light-skin owl-dots-center">
                                        <!-- Isotope Gallery Grid -->
                                        <div id="staff-holder-945632"
                                            class="owl-carousel owl-theme tm-owl-carousel-4col" data-nav="true"
                                            data-autoplay="true" data-loop="true" data-duration="6000"
                                            data-smartspeed="300" data-margin="30" data-stagepadding="0">
                                            <!-- the loop -->
                                            <div class="tm-carousel-item">
                                                <div class="tm-staff">
                                                    <div class="staff-inner">
                                                        <div class="box-hover-effect">
                                                            <div class="staff-header effect-wrapper">
                                                                <div class="thumb">
                                                                    <img src="images/team/t1.jpg"
                                                                        class="img-fullwidth" alt="" />
                                                                </div>
                                                                <div class="overlay-shade shade-white"></div>
                                                                <div class="icons-holder icons-holder-middle">
                                                                    <div class="icons-holder-inner">
                                                                        <ul
                                                                            class="styled-icons icon-theme-colored1 icon-circled icon-xl">
                                                                            <li><a class="styled-icons-item"
                                                                                    target="_blank"
                                                                                    href="#"><i
                                                                                        class="fa fa-link"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="staff-content">
                                                                <h5 class="name"><a href="#">Maria Angel</a>
                                                                </h5>
                                                                <div class="speciality">Dentist</div>
                                                                <ul class="contact-info"></ul>
                                                                <div class="staff-working-hours">
                                                                    <ul class="working-hours">
                                                                        <li class="clearfix">
                                                                            <span>Monday - Friday</span>
                                                                            <div class="value">8.00 - 17.00</div>
                                                                        </li>
                                                                        <li class="clearfix">
                                                                            <span>Saturday</span>
                                                                            <div class="value">9.00 - 16.00</div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <ul
                                                                    class="styled-icons icon-dark icon-theme-colored1 icon-circled icon-sm">
                                                                    <li><a class="styled-icons-item" target="_blank"
                                                                            href="#"><i
                                                                                class="fab fa-facebook"></i></a></li>
                                                                    <li><a class="styled-icons-item" target="_blank"
                                                                            href="#"><i
                                                                                class="fab fa-instagram"></i></a></li>
                                                                    <li><a class="styled-icons-item" target="_blank"
                                                                            href="#"><i
                                                                                class="fab fa-linkedin"></i></a></li>
                                                                    <li><a class="styled-icons-item" target="_blank"
                                                                            href="#"><i
                                                                                class="fab fa-skype"></i></a></li>
                                                                </ul>
                                                                <div class="staff-btn">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tm-carousel-item">
                                                <div class="tm-staff">
                                                    <div class="staff-inner">
                                                        <div class="box-hover-effect">
                                                            <div class="staff-header effect-wrapper">
                                                                <div class="thumb">
                                                                    <img src="images/team/t2.jpg"
                                                                        class="img-fullwidth" alt="" />
                                                                </div>
                                                                <div class="overlay-shade shade-white"></div>
                                                                <div class="icons-holder icons-holder-middle">
                                                                    <div class="icons-holder-inner">
                                                                        <ul
                                                                            class="styled-icons icon-theme-colored1 icon-circled icon-xl">
                                                                            <li><a class="styled-icons-item"
                                                                                    target="_blank"
                                                                                    href="#"><i
                                                                                        class="fa fa-link"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="staff-content">
                                                                <h5 class="name"><a href="#">Jason Jack</a>
                                                                </h5>
                                                                <div class="speciality">Cardiologist</div>
                                                                <ul class="contact-info"></ul>
                                                                <div class="staff-working-hours">
                                                                    <ul class="working-hours">
                                                                        <li class="clearfix">
                                                                            <span>Monday - Friday</span>
                                                                            <div class="value">8.00 - 17.00</div>
                                                                        </li>
                                                                        <li class="clearfix">
                                                                            <span>Saturday</span>
                                                                            <div class="value">9.00 - 16.00</div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <ul
                                                                    class="styled-icons icon-dark icon-theme-colored1 icon-circled icon-sm">
                                                                    <li><a class="styled-icons-item" target="_blank"
                                                                            href="#"><i
                                                                                class="fab fa-facebook"></i></a></li>
                                                                    <li><a class="styled-icons-item" target="_blank"
                                                                            href="#"><i
                                                                                class="fab fa-instagram"></i></a></li>
                                                                    <li><a class="styled-icons-item" target="_blank"
                                                                            href="#"><i
                                                                                class="fab fa-linkedin"></i></a></li>
                                                                    <li><a class="styled-icons-item" target="_blank"
                                                                            href="#"><i
                                                                                class="fab fa-skype"></i></a></li>
                                                                </ul>
                                                                <div class="staff-btn">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tm-carousel-item">
                                                <div class="tm-staff">
                                                    <div class="staff-inner">
                                                        <div class="box-hover-effect">
                                                            <div class="staff-header effect-wrapper">
                                                                <div class="thumb">
                                                                    <img src="images/team/t3.jpg"
                                                                        class="img-fullwidth" alt="" />
                                                                </div>
                                                                <div class="overlay-shade shade-white"></div>
                                                                <div class="icons-holder icons-holder-middle">
                                                                    <div class="icons-holder-inner">
                                                                        <ul
                                                                            class="styled-icons icon-theme-colored1 icon-circled icon-xl">
                                                                            <li><a class="styled-icons-item"
                                                                                    target="_blank"
                                                                                    href="#"><i
                                                                                        class="fa fa-link"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="staff-content">
                                                                <h5 class="name"><a href="#">Eliz
                                                                        Thopper</a></h5>
                                                                <div class="speciality">Cardiologist</div>
                                                                <ul class="contact-info"></ul>
                                                                <div class="staff-working-hours">
                                                                    <ul class="working-hours">
                                                                        <li class="clearfix">
                                                                            <span>Monday - Friday</span>
                                                                            <div class="value">8.00 - 17.00</div>
                                                                        </li>
                                                                        <li class="clearfix">
                                                                            <span>Saturday</span>
                                                                            <div class="value">9.00 - 16.00</div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <ul
                                                                    class="styled-icons icon-dark icon-theme-colored1 icon-circled icon-sm">
                                                                    <li><a class="styled-icons-item" target="_blank"
                                                                            href="#"><i
                                                                                class="fab fa-facebook"></i></a></li>
                                                                    <li><a class="styled-icons-item" target="_blank"
                                                                            href="#"><i
                                                                                class="fab fa-instagram"></i></a></li>
                                                                    <li><a class="styled-icons-item" target="_blank"
                                                                            href="#"><i
                                                                                class="fab fa-linkedin"></i></a></li>
                                                                    <li><a class="styled-icons-item" target="_blank"
                                                                            href="#"><i
                                                                                class="fab fa-skype"></i></a></li>
                                                                </ul>
                                                                <div class="staff-btn">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tm-carousel-item">
                                                <div class="tm-staff">
                                                    <div class="staff-inner">
                                                        <div class="box-hover-effect">
                                                            <div class="staff-header effect-wrapper">
                                                                <div class="thumb">
                                                                    <img src="images/team/t4.jpg"
                                                                        class="img-fullwidth" alt="" />
                                                                </div>
                                                                <div class="overlay-shade shade-white"></div>
                                                                <div class="icons-holder icons-holder-middle">
                                                                    <div class="icons-holder-inner">
                                                                        <ul
                                                                            class="styled-icons icon-theme-colored1 icon-circled icon-xl">
                                                                            <li><a class="styled-icons-item"
                                                                                    target="_blank"
                                                                                    href="#"><i
                                                                                        class="fa fa-link"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="staff-content">
                                                                <h5 class="name"><a href="#">Jason
                                                                        Thomas</a></h5>
                                                                <div class="speciality">Neurologiest</div>
                                                                <ul class="contact-info">
                                                                </ul>
                                                                <div class="staff-working-hours">
                                                                    <ul class="working-hours">
                                                                        <li class="clearfix">
                                                                            <span>Monday - Friday</span>
                                                                            <div class="value">8.00 - 17.00</div>
                                                                        </li>
                                                                        <li class="clearfix">
                                                                            <span>Saturday</span>
                                                                            <div class="value">9.00 - 16.00</div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <ul
                                                                    class="styled-icons icon-dark icon-theme-colored1 icon-circled icon-sm">
                                                                    <li><a class="styled-icons-item" target="_blank"
                                                                            href="#"><i
                                                                                class="fab fa-facebook"></i></a></li>
                                                                    <li><a class="styled-icons-item" target="_blank"
                                                                            href="#"><i
                                                                                class="fab fa-instagram"></i></a></li>
                                                                    <li><a class="styled-icons-item" target="_blank"
                                                                            href="#"><i
                                                                                class="fab fa-linkedin"></i></a></li>
                                                                    <li><a class="styled-icons-item" target="_blank"
                                                                            href="#"><i
                                                                                class="fab fa-skype"></i></a></li>
                                                                </ul>
                                                                <div class="staff-btn">
                                                                    <div class="clearfix"></div>
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
                </section>

                <!-- Section: blog -->
                <section id="blog" class="divider parallax layer-overlay overlay-white-4"
                    data-parallax-ratio="0.1" data-tm-bg-img="images/bg/bg14.jpg">
                    <div class="container pt-90">
                        <div class="section-title">
                            <div class="row justify-content-md-center">
                                <div class="col-md-8">
                                    <div class="text-center mb-60">
                                        <div
                                            class="tm-sc-section-title section-title section-title-style1 text-center">
                                            <div class="title-wrapper">
                                                <h2 class="title icon-bottom"> <span class="">Our </span>
                                                    <span class="text-theme-colored1">Latest</span> News
                                                </h2>
                                                <div class="title-seperator-line"></div>
                                                <div class="paragraph">
                                                    <p>Explore Our Completed Services! Consectetur adipiscing elitt elit
                                                        tellus, luctus pulvinar dapibus leoconsectetur luctus nec.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- Isotope Gallery Grid -->
                                    <div id="gallery-holder-618422"
                                        class="isotope-layout masonry grid-3 gutter-15 clearfix lightgallery-lightbox">
                                        <div class="isotope-layout-inner">
                                            <div class="isotope-item isotope-item-sizer"></div>
                                            <!-- Isotope Item Start -->
                                            <div class="isotope-item">
                                                <div class="isotope-item-inner">
                                                    <div
                                                        class="tm-sc-blog tm-sc-blog-masonry blog-style1-current-theme mb-lg-30">
                                                        <article
                                                            class="post type-post status-publish format-standard has-post-thumbnail">
                                                            <div class="entry-header">
                                                                <div class="post-thumb lightgallery-lightbox">
                                                                    <div class="post-thumb-inner">
                                                                        <div class="thumb"> <img
                                                                                src="images/blog/b1.jpg"
                                                                                alt="Image" /></div>
                                                                    </div>
                                                                </div>
                                                                <a class="link" href="#"><i
                                                                        class="fa fa-link"></i></a>
                                                            </div>
                                                            <div class="entry-content">
                                                                <h5 class="entry-title"><a href="#"
                                                                        rel="bookmark">Capitalize on low hanging fruit
                                                                        to identify a ballpark test</a></h5>
                                                                <div class="entry-meta mt-0">
                                                                    <span
                                                                        class="mb-10 text-gray-darkgray mr-10 font-size-13"><i
                                                                            class="far fa-calendar-alt mr-10 text-theme-colored"></i>
                                                                        Jul 20, 2019</span>
                                                                    <span
                                                                        class="mb-10 text-gray-darkgray mr-10 font-size-13"><i
                                                                            class="far fa-comments mr-10 text-theme-colored"></i>
                                                                        214 Comments</span>
                                                                </div>

                                                                <div class="post-excerpt">
                                                                    <div class="mascot-post-excerpt">Lorem ipsum dolor
                                                                        sit amet, consectetur adipisi cing elit.
                                                                        Molestias eius illum libero dolor nobis....
                                                                    </div>
                                                                </div>
                                                                <div class="post-btn-readmore"> <a href="#"
                                                                        class="btn btn-plain-text-with-arrow"> View
                                                                        Details </a></div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </article>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Isotope Item End -->

                                            <!-- Isotope Item Start -->
                                            <div class="isotope-item">
                                                <div class="isotope-item-inner">
                                                    <div
                                                        class="tm-sc-blog tm-sc-blog-masonry blog-style1-current-theme mb-lg-30">
                                                        <article
                                                            class="post type-post status-publish format-standard has-post-thumbnail">
                                                            <div class="entry-header">
                                                                <div class="post-thumb lightgallery-lightbox">
                                                                    <div class="post-thumb-inner">
                                                                        <div class="thumb"> <img
                                                                                src="images/blog/b2.jpg"
                                                                                alt="Image" /></div>
                                                                    </div>
                                                                </div>
                                                                <a class="link" href="#"><i
                                                                        class="fa fa-link"></i></a>
                                                            </div>
                                                            <div class="entry-content">
                                                                <h5 class="entry-title"><a href="#"
                                                                        rel="bookmark">Capitalize on low hanging fruit
                                                                        to identify a ballpark test</a></h5>
                                                                <div class="entry-meta mt-0">
                                                                    <span
                                                                        class="mb-10 text-gray-darkgray mr-10 font-size-13"><i
                                                                            class="far fa-calendar-alt mr-10 text-theme-colored"></i>
                                                                        Jul 20, 2019</span>
                                                                    <span
                                                                        class="mb-10 text-gray-darkgray mr-10 font-size-13"><i
                                                                            class="far fa-comments mr-10 text-theme-colored"></i>
                                                                        214 Comments</span>
                                                                </div>

                                                                <div class="post-excerpt">
                                                                    <div class="mascot-post-excerpt">Lorem ipsum dolor
                                                                        sit amet, consectetur adipisi cing elit.
                                                                        Molestias eius illum libero dolor nobis....
                                                                    </div>
                                                                </div>
                                                                <div class="post-btn-readmore"> <a href="#"
                                                                        class="btn btn-plain-text-with-arrow"> View
                                                                        Details </a></div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </article>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Isotope Item End -->

                                            <!-- Isotope Item Start -->
                                            <div class="isotope-item">
                                                <div class="isotope-item-inner">
                                                    <div
                                                        class="tm-sc-blog tm-sc-blog-masonry blog-style1-current-theme mb-lg-30">
                                                        <article
                                                            class="post type-post status-publish format-standard has-post-thumbnail">
                                                            <div class="entry-header">
                                                                <div class="post-thumb lightgallery-lightbox">
                                                                    <div class="post-thumb-inner">
                                                                        <div class="thumb"> <img
                                                                                src="images/blog/b3.jpg"
                                                                                alt="Image" /></div>
                                                                    </div>
                                                                </div>
                                                                <a class="link" href="#"><i
                                                                        class="fa fa-link"></i></a>
                                                            </div>
                                                            <div class="entry-content">
                                                                <h5 class="entry-title"><a href="#"
                                                                        rel="bookmark">Capitalize on low hanging fruit
                                                                        to identify a ballpark test</a></h5>
                                                                <div class="entry-meta mt-0">
                                                                    <span
                                                                        class="mb-10 text-gray-darkgray mr-10 font-size-13"><i
                                                                            class="far fa-calendar-alt mr-10 text-theme-colored"></i>
                                                                        Jul 20, 2019</span>
                                                                    <span
                                                                        class="mb-10 text-gray-darkgray mr-10 font-size-13"><i
                                                                            class="far fa-comments mr-10 text-theme-colored"></i>
                                                                        214 Comments</span>
                                                                </div>

                                                                <div class="post-excerpt">
                                                                    <div class="mascot-post-excerpt">Lorem ipsum dolor
                                                                        sit amet, consectetur adipisi cing elit.
                                                                        Molestias eius illum libero dolor nobis....
                                                                    </div>
                                                                </div>
                                                                <div class="post-btn-readmore"> <a href="#"
                                                                        class="btn btn-plain-text-with-arrow"> View
                                                                        Details </a></div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </article>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Isotope Item End -->
                                        </div>
                                    </div>
                                    <!-- End Isotope Gallery Grid -->
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
        </section>
    </div>
    <!-- end main-content -->

    <!-- Footer -->
    <footer id="footer" class="footer layer-overlay overlay-dark-9" data-tm-bg-img="images/bg/bg2.jpg">
        <div class="footer-widget-area">
            <div class="container pt-90 pb-60">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="tm-widget-contact-info contact-info-style1 contact-icon-theme-colored1">
                            <div class="thumb">
                                <img alt="Logo" src="{{ asset('home/images/logo-wide-white.png') }}">
                            </div>
                            <div class="description">203, Envato Labs, Behind Alis Steet, Melbourne,
                                Australia.immersion along the information close the loop on focusing</div>
                        </div>
                        <ul class="styled-icons icon-dark icon-theme-colored1 icon-rounded clearfix">
                            <li><a class="social-link" href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a class="social-link" href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="social-link" href="#"><i class="fab fa-youtube"></i></a></li>
                            <li><a class="social-link" href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="widget">
                            <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Latest News
                            </h4>
                            <div class="latest-posts">
                                <article class="post clearfix pb-0 mb-20">
                                    <a class="post-thumb" href="#"><img src="https://placehold.it/75x75"
                                            alt=""></a>
                                    <div class="post-right">
                                        <h5 class="post-title mt-0"><a href="#">Sustainable Construction</a>
                                        </h5>
                                        <span class="post-date">
                                            <time class="entry-date" datetime="2020-05-15T06:10:26+00:00">April 15,
                                                2020</time>
                                        </span>
                                    </div>
                                </article>
                                <article class="post clearfix pb-0 mb-20">
                                    <a class="post-thumb" href="#"><img src="https://placehold.it/75x75"
                                            alt=""></a>
                                    <div class="post-right">
                                        <h5 class="post-title mt-0"><a href="#">Industrial Coatings</a></h5>
                                        <span class="post-date">
                                            <time class="entry-date" datetime="2020-05-15T06:10:26+00:00">April 15,
                                                2020</time>
                                        </span>
                                    </div>
                                </article>
                                <article class="post clearfix pb-0 mb-20">
                                    <a class="post-thumb" href="#"><img src="https://placehold.it/75x75"
                                            alt=""></a>
                                    <div class="post-right">
                                        <h5 class="post-title mt-0"><a href="#">Storefront Installations</a>
                                        </h5>
                                        <span class="post-date">
                                            <time class="entry-date" datetime="2020-05-15T06:10:26+00:00">April 15,
                                                2020</time>
                                        </span>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="widget widget_nav_menu">
                            <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Services</h4>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Attorneys</a></li>
                                <li><a href="#">Practice Arears</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="widget">
                            <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Opening Hours
                            </h4>
                            <div class="opening-hours border-dark">
                                <ul>
                                    <li class="clearfix"> <span> Friday - Saturday : </span>
                                        <div class="value float-end flip"> 10.00 am - 6.00 pm </div>
                                    </li>
                                    <li class="clearfix"> <span> Monday - Thusday :</span>
                                        <div class="value float-end flip"> 8.00 am - 9.00 pm </div>
                                    </li>
                                    <li class="clearfix"> <span> Sunday : </span>
                                        <div class="value float-end flip"> Closed </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom" data-tm-bg-color="#2A2A2A">
                <div class="container">
                    <div class="row pt-20 pb-20">
                        <div class="col-sm-6">
                            <div class="footer-paragraph">
                                © 2020 ThemeMascot. All Rights Reserved.
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="footer-paragraph text-right">
                                Site Template
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    </div>
    <!-- end wrapper -->

    <!-- Footer Scripts -->
    <!-- JS | Custom script for all pages -->
    <script src="{{ asset('home/js/custom.js') }}"></script>


    <script>

    </script>
</body>

</html>

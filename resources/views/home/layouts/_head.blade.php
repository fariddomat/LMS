<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- Page Title -->
    <title>{{ setting('site_title') }}</title>

    <!-- Favicon and Touch Icons -->
    <link href="{{ asset('logo.png') }}" rel="shortcut icon" type="image/png">
    <link href="{{ asset('logo.png') }}" rel="apple-touch-icon">
    <link href="{{ asset('logo.png') }}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{ asset('logo.png') }}" rel="apple-touch-icon" sizes="114x114">
    <link href="{{ asset('logo.png') }}" rel="apple-touch-icon" sizes="144x144">

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

    <!-- CSS | Theme Color -->
    <link href="{{ asset('home/css/colors/theme-skin-color-set1.css') }}" rel="stylesheet" type="text/css">


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

        .header-nav-col-row {
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

        span svg.w-5{
            max-width: 40px;
        }
        .course-item .course-thumb .price{
            left: unset;
            right: -3px;
        }
        .lg-css3.lg-fade .lg-item.lg-current{
            left: 0;
        }
    </style>

    @yield('styles')
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
<style>
    *{
        font-family: 'Amiri'
    }
    h4, h5, h6, .h4, .h5, .h6 .h1, .h2, .h3, h1, h2, h3 {
        font-family: 'Amiri'
    }
    .menuzord.theme-color1 .menuzord-menu > li.active > a, .menuzord.theme-color1 .menuzord-menu > li:hover > a, .menuzord.theme-color1 .menuzord-menu ul.dropdown li:hover > a {
  background: var(--theme-color2);
  color: #fff;
}

@media only screen and (max-width: 500px) {

/* retina */
.ttt{
    display: none !important;
}

}
</style>
</head>

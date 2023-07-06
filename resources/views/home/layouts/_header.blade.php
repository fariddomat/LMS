<!-- Header -->
<header id="header" class="header header-layout-type-header-2rows" style="  z-index: 10000;
position: relative;">

    <div class="header-nav tm-enable-navbar-hide-on-scroll" style="">
        <div class="header-nav-wrapper navbar-scrolltofixed">
            <div class="menuzord-container header-nav-container">
                <div class="container position-relative">
                    <div class="row header-nav-col-row">
                        <div class="col-sm-auto ms-auto align-self-center">
                            <a class="menuzord-brand site-brand" href="{{ route('home') }}">
                                <img class="logo-default logo-1x "
                                    src="{{ asset('logo.webp') }}" alt="Logo">
                                    <span class="ttt">
                                    {{ setting('site_name') }}

                                    </span>
                                <img class="logo-default logo-2x retina"
                                    src="{{ asset('logo.webp') }}" alt="Logo">
                            </a>
                        </div>
                        <div class="col-sm-auto ms-auto pr-0 align-self-center">
                            <nav id="top-primary-nav"
                                class="menuzord theme-color1 pull-left flip menuzord-responsive"
                                data-effect="slide" data-animation="none" data-align="right">
                                <ul id="main-nav" class="menuzord-menu">
                                    <li class="{{ Request::is('/') ? 'active' : '' }}  menu-item">
                                        <a href="{{ route('home') }}">الرئيسية</a>
                                    </li>

                                    <li class="{{ Request::is('whoiam') ? 'active' : '' }} menu-item">
                                        <a href="{{ route('whoiam') }}">من أنا؟</a>
                                    </li>
                                    <li class="{{ Request::is('service*') ? 'active' : '' }} menu-item">
                                        <a href="{{ route('services.index') }}">خدماتنا</a>
                                    </li>
                                    <li class="{{ Request::is('academy*') ? 'active' : '' }} menu-item">
                                        <a href="{{ route('academy.index') }}">الأكاديمية</a>
                                    </li>
                                    <li class="{{ Request::is('posts*') ? 'active' : '' }} menu-item">
                                        <a href="{{ route('posts.index') }}">المدونة</a>
                                    </li>
                                    <li class="{{ Request::is('contactPage') ? 'active' : '' }} menu-item">
                                        <a href="{{ route('contactPage') }}">اتصل بنا</a>
                                    </li>
                                    @auth
                                    @if (Auth::user()->hasRole('user'))

                                    <li class="{{ Request::is('profiles*') ? 'active' : '' }}  menu-item">
                                        <a href="{{ route('profiles.index') }}">الملف الشخصي</a>
                                    </li>
                                    @endif
                                    @endauth
                                    {{-- <li class="{{ Request::is('integrativeMedicine') ? 'active' : '' }} menu-item">
                                        <a href="{{ route('integrativeMedicine') }}">الطب التكاملي</a>
                                    </li> --}}
                                    <li class="{{ Request::is('login') ? 'active' : '' }} menu-item">
                                        <a href="{{ route('login') }}">دخول</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        {{-- <div class="col-sm-auto align-self-center nav-side-icon-parent">
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
                        </div> --}}
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

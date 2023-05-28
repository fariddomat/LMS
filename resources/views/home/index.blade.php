@extends('home.layouts._app')

@section('content')
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
                            <h2 class="text-uppercase title">Special <span class="text-theme-colored font-weight-300">
                                    Services</span></h2>
                            <p class="text-uppercase text-black">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit tenetur.</p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row multi-row-clearfix">
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="icon-box left media"> <a href="#" class="media-left float-start flip"><i
                                        class="icon-ambulance14 text-theme-colored"></i></a>
                                <div class="media-body">
                                    <h5 class="media-heading heading">Emergency Care</h5>
                                    <p class="text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Cum consectetur sit ullam perspiciatis, deserunt.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="icon-box left media"> <a href="#" class="media-left float-start flip"><i
                                        class="icon-illness text-theme-colored"></i></a>
                                <div class="media-body">
                                    <h5 class="media-heading heading">Operation Theatre</h5>
                                    <p class="text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Cum consectetur sit ullam perspiciatis, deserunt.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="icon-box left media"> <a href="#" class="media-left float-start flip"><i
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
        <section id="experts" class="divider parallax layer-overlay overlay-white-6" data-parallax-ratio="0.1"
            data-tm-bg-img="images/bg/bg2.jpg">
            <section class="">
                <div class="container">
                    <div class="section-title">
                        <div class="row justify-content-md-center">
                            <div class="col-md-8">
                                <div class="text-center mb-60">
                                    <div class="tm-sc-section-title section-title section-title-style1 text-center">
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
                                    <div id="staff-holder-945632" class="owl-carousel owl-theme tm-owl-carousel-4col"
                                        data-nav="true" data-autoplay="true" data-loop="true" data-duration="6000"
                                        data-smartspeed="300" data-margin="30" data-stagepadding="0">
                                        <!-- the loop -->
                                        <div class="tm-carousel-item">
                                            <div class="tm-staff">
                                                <div class="staff-inner">
                                                    <div class="box-hover-effect">
                                                        <div class="staff-header effect-wrapper">
                                                            <div class="thumb">
                                                                <img src="images/team/t1.jpg" class="img-fullwidth"
                                                                    alt="" />
                                                            </div>
                                                            <div class="overlay-shade shade-white"></div>
                                                            <div class="icons-holder icons-holder-middle">
                                                                <div class="icons-holder-inner">
                                                                    <ul
                                                                        class="styled-icons icon-theme-colored1 icon-circled icon-xl">
                                                                        <li><a class="styled-icons-item" target="_blank"
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
                                                                        href="#"><i class="fab fa-facebook"></i></a>
                                                                </li>
                                                                <li><a class="styled-icons-item" target="_blank"
                                                                        href="#"><i
                                                                            class="fab fa-instagram"></i></a></li>
                                                                <li><a class="styled-icons-item" target="_blank"
                                                                        href="#"><i class="fab fa-linkedin"></i></a>
                                                                </li>
                                                                <li><a class="styled-icons-item" target="_blank"
                                                                        href="#"><i class="fab fa-skype"></i></a>
                                                                </li>
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
                                                                <img src="images/team/t2.jpg" class="img-fullwidth"
                                                                    alt="" />
                                                            </div>
                                                            <div class="overlay-shade shade-white"></div>
                                                            <div class="icons-holder icons-holder-middle">
                                                                <div class="icons-holder-inner">
                                                                    <ul
                                                                        class="styled-icons icon-theme-colored1 icon-circled icon-xl">
                                                                        <li><a class="styled-icons-item" target="_blank"
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
                                                                        href="#"><i class="fab fa-facebook"></i></a>
                                                                </li>
                                                                <li><a class="styled-icons-item" target="_blank"
                                                                        href="#"><i
                                                                            class="fab fa-instagram"></i></a></li>
                                                                <li><a class="styled-icons-item" target="_blank"
                                                                        href="#"><i class="fab fa-linkedin"></i></a>
                                                                </li>
                                                                <li><a class="styled-icons-item" target="_blank"
                                                                        href="#"><i class="fab fa-skype"></i></a>
                                                                </li>
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
                                                                <img src="images/team/t3.jpg" class="img-fullwidth"
                                                                    alt="" />
                                                            </div>
                                                            <div class="overlay-shade shade-white"></div>
                                                            <div class="icons-holder icons-holder-middle">
                                                                <div class="icons-holder-inner">
                                                                    <ul
                                                                        class="styled-icons icon-theme-colored1 icon-circled icon-xl">
                                                                        <li><a class="styled-icons-item" target="_blank"
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
                                                                        href="#"><i class="fab fa-facebook"></i></a>
                                                                </li>
                                                                <li><a class="styled-icons-item" target="_blank"
                                                                        href="#"><i
                                                                            class="fab fa-instagram"></i></a></li>
                                                                <li><a class="styled-icons-item" target="_blank"
                                                                        href="#"><i class="fab fa-linkedin"></i></a>
                                                                </li>
                                                                <li><a class="styled-icons-item" target="_blank"
                                                                        href="#"><i class="fab fa-skype"></i></a>
                                                                </li>
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
                                                                <img src="images/team/t4.jpg" class="img-fullwidth"
                                                                    alt="" />
                                                            </div>
                                                            <div class="overlay-shade shade-white"></div>
                                                            <div class="icons-holder icons-holder-middle">
                                                                <div class="icons-holder-inner">
                                                                    <ul
                                                                        class="styled-icons icon-theme-colored1 icon-circled icon-xl">
                                                                        <li><a class="styled-icons-item" target="_blank"
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
                                                                        href="#"><i class="fab fa-facebook"></i></a>
                                                                </li>
                                                                <li><a class="styled-icons-item" target="_blank"
                                                                        href="#"><i
                                                                            class="fab fa-instagram"></i></a></li>
                                                                <li><a class="styled-icons-item" target="_blank"
                                                                        href="#"><i class="fab fa-linkedin"></i></a>
                                                                </li>
                                                                <li><a class="styled-icons-item" target="_blank"
                                                                        href="#"><i class="fab fa-skype"></i></a>
                                                                </li>
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
            <section id="blog" class="divider parallax layer-overlay overlay-white-4" data-parallax-ratio="0.1"
                data-tm-bg-img="images/bg/bg14.jpg">
                <div class="container pt-90">
                    <div class="section-title">
                        <div class="row justify-content-md-center">
                            <div class="col-md-8">
                                <div class="text-center mb-60">
                                    <div class="tm-sc-section-title section-title section-title-style1 text-center">
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
                                                                    <div class="thumb"> <img src="images/blog/b1.jpg"
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
                                                                    <div class="thumb"> <img src="images/blog/b2.jpg"
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
                                                                    <div class="thumb"> <img src="images/blog/b3.jpg"
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
            </section>
    </div>
@endsection

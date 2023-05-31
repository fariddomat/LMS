@extends('home.layouts._app')

@section('content')
    <!-- Start main-content -->
    <div class="main-content-area">
        <!-- Section: page title -->
        <section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center"
            data-tm-bg-img="{{ asset('home/images/bg/bg1.jpg') }}" style="margin-top: 100px">
            <div class="container pt-50 pb-50">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="title">Service Details</h2>
                            <nav class="breadcrumbs" role="navigation" aria-label="Breadcrumbs">
                                <div class="breadcrumbs">
                                    <span class="active">{{ $service->title }}</span>
                                    <span><i class="fa fa-angle-right"></i></span>
                                    <span><a href="{{ route('services.index') }}">الخدمات</a></span>
                                    <span><i class="fa fa-angle-right"></i></span>
                                    <span><a href="{{ route('home') }}" rel="home">الرئيسية</a></span>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Section: Service details -->
        <section>
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="sidebar">
                                <div class="tm-sidebar-nav-menu-style2">
                                    <div class="widget widget_nav_menu">
                                        <ul>
                                            @foreach ($services as $item)
                                                <li class="@if ($service->id == $item->id) active @endif"><a
                                                        href="{{ route('services.show', $item->title) }}">{{ $item->title }}</a>
                                                </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </div>
                                <div class="widget widget_text text-center">
                                    <div class="textwidget">
                                        <div class="section-typo-light bg-theme-colored1 mb-md-40 p-30 pt-40 pb-40"> <img
                                                class="size-full wp-image-800 aligncenter"
                                                src="{{ asset('home/images/headphone-128.png') }}" alt="intreon" />
                                            <h4>Online Help!</h4>
                                            <h5>+(123) 456-78-90</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget widget-brochure-box clearfix">
                                    <a class="brochure-box brochure-box-theme-colored1" href="#">
                                        <i class="far fa-file-word brochure-icon"></i>
                                        <h5 class="text">Download PDF</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <img alt="images" src="{{ $service->image_path }}" />
                            <h3 class="mt-20 mb-10">{{ $service->title }}</h3>
                            <p class="lead">{{ $service->main_title }}</p>
                            <p>{{ $service->brief }}</p>
                            <div class="row mb-20 mt-20">

                            </div>
                            <div class="container">
                                <div class="section-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="tm-sc-gallery tm-sc-gallery-grid gallery-style1-basic">
                                                <!-- Isotope Filter -->
                                                <div class="isotope-layout-filter filter-style-4 text-left cat-filter-default text-center"
                                                    data-link-with="gallery-holder-618422">
                                                    <a class="active" data-filter="*">الصور</a>
                                                </div>
                                                <!-- End Isotope Filter -->

                                                <!-- Isotope Gallery Grid -->
                                                <div id="gallery-holder-618422"
                                                    class="isotope-layout masonry grid-3 gutter-15 clearfix lightgallery-lightbox">
                                                    <div class="isotope-layout-inner">
                                                        <div class="isotope-item isotope-item-sizer"></div>
                                                        @foreach ($service->sliderImages as $sliderImage)
                                                            <!-- Isotope Item Start -->
                                                            <div class="isotope-item cat1">
                                                                <div class="isotope-item-inner">
                                                                    <div class="tm-gallery">
                                                                        <div class="tm-gallery-inner">
                                                                            <div class="thumb">
                                                                                <a href="#">
                                                                                    <img width="672" height="448"
                                                                                        src="{{ $sliderImage->image_path }}"
                                                                                        class="" alt="images" />
                                                                                </a>
                                                                            </div>
                                                                            <div class="tm-gallery-content-wrapper">
                                                                                <div class="tm-gallery-content">
                                                                                    <div class="tm-gallery-content-inner">
                                                                                        <div class="icons-holder-inner">
                                                                                            <div
                                                                                                class="styled-icons icon-dark icon-circled icon-theme-colored1">
                                                                                                <a class="lightgallery-trigger styled-icons-item"
                                                                                                    data-exthumbimage="{{ $sliderImage->image_path }}"
                                                                                                    data-src="{{ $sliderImage->image_path }}"
                                                                                                    title=""
                                                                                                    href="{{ $sliderImage->image_path }}"><i
                                                                                                        class="fa fa-plus"></i></a>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Isotope Item End -->
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <!-- End Isotope Gallery Grid -->
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

    </div>
    <!-- end main-content -->
@endsection
@extends('home.layouts._app')

@section('content')
    <!-- Start main-content -->
    <div class="main-content-area">
        <!-- Section: home -->
        <section id="home" class="divider parallax fullscreen" data-parallax-ratio="0.6"
            data-tm-bg-img="{{ asset('home/images/bg/bg1.jpg') }}?v={{ setting('cover_time') }}">
            <div class="d-flex align-items-center flex-column justify-content-center h-100">
                <div class="container pt-150 pb-150">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="pb-50 pt-30">
                                <h3 class="">{!! setting('cover1_text') !!}</h3>
                                <h1 class="">{!! setting('cover2_text') !!}</h1>
                                <h4 class="">{!! setting('cover3_text') !!} </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: welcome -->
        <section id="welcome"  class="divider parallax layer-overlay overlay-white-4" data-parallax-ratio="0.1"
        data-tm-bg-img="{{ asset('home/images/bg/about.png') }}">
            <div class="container pt-150 pb-150">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-7">
                            <p class="lead text-black">{!! $about->about_me !!}</p>
                            <a href="{{ route('whoiam') }}" target="_self"
                                class="btn btn-dark btn-theme-colored1 btn-sm btn-block mt-15 mb-20"> قراءة المزيد </a>

                        </div>
                        <div class="col-md-5">
                            <img src="{{ asset('dr.webp') }}" alt=""
                                style="border: 4px solid white;
                            border-radius: 25px;">
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="divider parallax " data-parallax-ratio="0.1" data-tm-bg-img="{{ asset('home/images/bg/video.png') }}"
            style="background-color: #202C45; justify-content: center">
            <div class="col-md-12"
                style="margin: 85px;
        padding: 0;
        box-shadow: 5px 10px 10px 7px rgba(0, 0, 0, 0.35);
        -webkit-box-shadow: 5px 10px 10px 7px rgba(0, 0, 0, 0.35);
        -moz-box-shadow: 5px 10px 10px 7px rgba(0, 0, 0, 0.35); width: auto;">
                {!! setting('home_video') !!}
            </div>
        </section>

        <section class="divider parallax layer-overlay overlay-white-4" style="background-color: white">
            <h2 class="lead"
                style="margin: 0 auto;
            width: 100%;
            text-align: center;
            position: relative;
            z-index: 5000;
            color: #dea3a7;
            font-weight: 600;
            font-size: 2.7rem; margin-top: 50px ">
                تعريف رحلة التشافي</h2>
            <img src="{{ asset('t.jpg') }}" alt="">
        </section>

        <!-- Section: Services -->
        <section id="services" class="divider parallax layer-overlay overlay-white-8" data-parallax-ratio="0.1"
            data-tm-bg-img="{{ asset('home/images/bg/service.png') }}">
            <div class="container pt-150 pb-150">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-uppercase title"> <span class="text-theme-colored font-weight-300">
                                    خدماتنا</span></h2>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row multi-row-clearfix">
                        @foreach ($services_count as $service)
                            <div class="col-md-6 col-lg-6 col-xl-4">
                                <div class="tm-sc-services services-style-current-theme5">
                                    <div class="tm-service">
                                        <div class="thumb">
                                            <img src="{{ $service->image_path }}" alt="image">
                                            <a href="{{ route('services.show', $service->title) }}"
                                                class="icon bg-theme-colored1"><i class="fa fa-plus-square"></i></a>
                                        </div>
                                        <div class="content">
                                            <h4 class="mt-0 mb-15">{{ $service->title }}</h4>
                                            <p>{{ $service->main_title }}</p>
                                            <a href="{{ route('services.show', $service->title) }}" target="_self"
                                                class="btn btn-dark btn-theme-colored1 btn-sm btn-block mt-15 mb-20"> قراءة
                                                المزيد </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Staff -->
        <section class="divider parallax layer-overlay overlay-white-4" data-parallax-ratio="0.1"
        data-tm-bg-img="{{ asset('home/images/bg/trainers.jpg') }}">
            <div class="container">
                <div class="section-title">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="mb-60">
                                <div class="tm-sc tm-sc-section-title section-title">
                                    <div class="title-wrapper">
                                        <h2 class="text-uppercase line-bottom line-bottom-theme-colored1">المدربين <span
                                                class="text-theme-colored1">الخاصين بنا</span></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row" style="justify-content: center">
                        @foreach ($trainers as $trainer)
                            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                                <div class="staff-item mb-lg-40">
                                    <div class="staff-thumb"> <img alt="img"
                                            src="{{ asset('trainers/images/' . $trainer->img) }}" class="w-100">
                                    </div>
                                    <div class="staff-content">
                                        <h4 class="staff-name text-theme-colored1 mt-0">{{ $trainer->first_name }}
                                            {{ $trainer->last_name }} - <small>{{ $trainer->title }}</small>
                                        </h4>
                                        <h5>{{ $trainer->qout }}</h5>
                                        <p class="mb-20">
                                            {{ $trainer->about }}
                                        </p>
                                        <div class="staff-social-part">
                                            <ul
                                                class="styled-icons icon-dark icon-theme-colored2 icon-sm icon-circled float-start mt-10">
                                                @if ($trainer->facebook != '')
                                                    <li><a class="social-link" href="{{ $trainer->facebook }}"><i
                                                                class="fab fa-facebook"></i></a>
                                                    </li>
                                                @endif
                                                @if ($trainer->twitter != '')
                                                    <li><a class="social-link" href="{{ $trainer->twitter }}"><i
                                                                class="fab fa-twitter"></i></a>
                                                    </li>
                                                @endif
                                                @if ($trainer->instagram != '')
                                                    <li><a class="social-link" href="{{ $trainer->instagram }}"><i
                                                                class="fab fa-instagram"></i></a>
                                                    </li>
                                                @endif
                                                @if ($trainer->whatsapp != '')
                                                    <li><a class="social-link" href="{{ $trainer->whatsapp }}"><i
                                                                class="fab fa-whatsapp"></i></a>
                                                    </li>
                                                @endif
                                            </ul>
                                            {{-- <a class="btn btn-theme-colored2 btn-xs p-10 float-end" href="#">view
                                        details</a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>


        <!-- Section: blog -->
        <section id="blog" class="divider parallax layer-overlay overlay-white-4" data-parallax-ratio="0.1"
            data-tm-bg-img="{{ asset('home/images/bg/posts.jpg') }}">
            <div class="container pt-90">
                <div class="section-title">
                    <div class="row justify-content-md-center">
                        <div class="col-md-8">
                            <div class="text-center mb-60">
                                <div class="tm-sc-section-title section-title section-title-style1 text-center">
                                    <div class="title-wrapper">
                                        <h2 class="title icon-bottom"> <span class="">آخر </span> المقالات
                                        </h2>
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
                                    @foreach ($posts as $post)
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
                                                                            src="{{ $post->image_path }}"
                                                                            alt="Image" /></div>
                                                                </div>
                                                            </div>
                                                            <a class="link"
                                                                href="{{ route('posts.show', $post->slug) }}"><i
                                                                    class="fa fa-link" style="color: white"></i></a>
                                                        </div>
                                                        <div class="entry-content">
                                                            <h5 class="entry-title"><a
                                                                    href="{{ route('posts.show', $post->slug) }}"
                                                                    rel="bookmark">{{ $post->title }}</a></h5>
                                                            <div class="entry-meta mt-0">
                                                                <span
                                                                    class="mb-10 text-gray-darkgray mr-10 font-size-13"><i
                                                                        class="far fa-calendar-alt mr-10 text-theme-colored"></i>
                                                                    {{ $post->created_at->diffForHumans() }}</span>
                                                                <span
                                                                    class="mb-10 text-gray-darkgray mr-10 font-size-13"><i
                                                                        class="far fa-user mr-10 text-theme-colored"></i>
                                                                    {{ $post->author_name }}</span>
                                                            </div>

                                                            <div class="post-excerpt">
                                                                <div class="mascot-post-excerpt">{!! Str::limit($post->description, 150) !!}
                                                                </div>
                                                            </div>
                                                            <div class="post-btn-readmore"> <a
                                                                    href="{{ route('posts.show', $post->slug) }}"
                                                                    class="btn btn-plain-text-with-arrow"> عرض التفاصيل
                                                                </a>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </article>
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
        </section>

    </div>
@endsection

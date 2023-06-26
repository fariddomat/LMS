@extends('home.layouts._app')

@section('content')
    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: page title -->
        <section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center"
            data-tm-bg-img="{{ asset('home/images/bg/bg1.jpg') }}?v={{ setting('cover_time') }}"
            style="margin-top: 100px; background-size: cover;">
            <div class="container pt-50 pb-50">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="title">{{ $course->title }}</h2>
                            <nav class="breadcrumbs" role="navigation" aria-label="Breadcrumbs">
                                <div class="breadcrumbs">
                                    <span class="active">{{ $course->title }}</span>
                                    <span><i class="fa fa-angle-right"></i></span>
                                    <span><a href="{{ route('courses.index') }}">الدورات</a></span>
                                    <span><i class="fa fa-angle-right"></i></span>
                                    <span><a href="{{ route('home') }}" rel="home">الرئيسية</a></span>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Course -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="order-2 col-md-8 blog-float-end">
                        <div class="single-service">
                            <img src="{{ $course->thumbnail_url }}" alt="">
                            <h3 class="text-theme-colored line-bottom text-theme-colored">{{ $course->title }}</h3>
                            <ul class="review_text list-inline">
                                <li class="font-size-16"><span class="text-theme-color-2">السعر :</span>
                                    {{ $course->price }} ريال سعودي</li>
                                <li>
                                    <div class="star-rating" title="Rated 5 out of 5"><span style="width: 100%;">5</span>
                                    </div>
                                </li>
                            </ul>
                            <h5><em>مدة الدورة: {{ $course->duration }}</em></h5>
                            <h5>عدد الدروس: {{ $course->lessons->count() }}</h5>
                            <p>{{ $course->description }}</p>
                            @auth
                                <div class="row">
                                    @if ($course->user)
                                        @foreach ($course->lessons as $index=> $lesson)
                                            <a href="{{ route('lessons.show', $lesson->id) }}"><div class="bg-light d-flex border-bottom p-15 mb-20">
                                                <div class="flex-shrink-0">
                                                    <i class="pe-7s-play text-theme-colored font-size-24 mt-1 me-3" style="  border: 1px solid #233fae;
                                                    border-radius: 50%;
                                                    padding: 5px 3px 5px 5px;
                                                    color: #233fae;"></i>
                                                </div>
                                                <div class="flex-shrink-1">
                                                    <h5 class="mt-0 mb-0">الدرس {{ $index+1 }}: {{ $lesson->title }} </h5>
                                                    <p>{{ $lesson->description }}</p>
                                                    <h6>المدة: [{{ $lesson->duration }}]</h6>
                                                </div>
                                            </div></a>
                                        @endforeach
                                    @else
                                        false
                                    @endif
                                </div>
                            @else
                                <div class="col-md-12 ">

                                    <a class="btn btn-dark btn-block   btn-theme-colored2  text-uppercase text-white"
                                        href="{{ route('enrollments.create') }}">اشترك الآن</a>
                                </div>
                            @endauth


                        </div>
                    </div>
                    <div class="order-1 col-sm-12 col-md-4">
                        <div class="sidebar sidebar-left mt-sm-30 ml-40">
                            <div class="tm-sidebar-nav-menu-style2">
                                <h4 class="widget-title line-bottom">قائمة <span class="text-theme-color-2">الدورات</span>
                                </h4>
                                <div class="widget widget_nav_menu">
                                    <ul>
                                        @foreach ($courses as $item)
                                            <li class="@if ($item->id == $course->id) active @endif"><a
                                                    href="{{ route('courses.show', $item->title) }}">{{ $item->title }}</a>
                                            </li>
                                        @endforeach

                                    </ul>
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

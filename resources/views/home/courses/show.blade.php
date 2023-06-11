@extends('home.layouts._app')

@section('content')
    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: page title -->
        <section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center"
            data-tm-bg-img="{{ asset('home/images/bg/bg1.jpg') }}?v={{ setting('cover_time') }}" style="margin-top: 100px; background-size: cover;">
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
                                    {{ $course->price }}</li>
                                <li>
                                    <div class="star-rating" title="Rated 4.50 out of 5"><span
                                            style="width: 90%;">4.50</span></div>
                                </li>
                            </ul>
                            <h5><em>مدة الدورة: {{ $course->duration }}</em></h5>
                            <p>{{ $course->description }}</p>

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

                                        <li class="@if ($item->id == $course->id)
                                            active
                                        @endif"><a href="{{ route('courses.show', $item->title) }}">{{$item->title}}</a></li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                            <div class="widget">
                                <h4 class="widget-title line-bottom">Opening <span class="text-theme-color-2">Hours</span>
                                </h4>
                                <div class="opening-hours">
                                    <ul class="list-border">
                                        <li class="clearfix"> <span> Mon - Tues : </span>
                                            <div class="value float-end"> 6.00 am - 10.00 pm </div>
                                        </li>
                                        <li class="clearfix"> <span> Wednes - Thurs :</span>
                                            <div class="value float-end"> 8.00 am - 6.00 pm </div>
                                        </li>
                                        <li class="clearfix"> <span> Fri : </span>
                                            <div class="value float-end"> 3.00 pm - 8.00 pm </div>
                                        </li>
                                        <li class="clearfix"> <span> Sun : </span>
                                            <div class="value float-end"> Colosed </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget border-1px p-30">
                                <h5 class="widget-title text-theme-colored1">Contact Us</h5>
                                <form id="quick_contact_form" name="quick_contact_form" class="quick-contact-form"
                                    action="includes/quickcontact.php" method="post">
                                    <div class="mb-3">
                                        <input name="form_email" class="form-control" type="text"
                                            placeholder="Enter Email">
                                    </div>
                                    <div class="mb-3">
                                        <textarea name="form_message" class="form-control" placeholder="Enter Message" rows="3"></textarea>
                                    </div>
                                    <div class="mb-3 tm-sc-button">
                                        <input name="form_botcheck" class="form-control" type="hidden" value="">
                                        <button type="submit" class="btn btn-theme-colored1 btn-sm"
                                            data-loading-text="Please wait..."> Send Message </button>
                                    </div>
                                </form>

                                <!-- Quick Contact Form Validation-->
                                <script>
                                    (function($) {
                                        $("#quick_contact_form").validate({
                                            submitHandler: function(form) {
                                                var form_btn = $(form).find('button[type="submit"]');
                                                var form_result_div = '#form-result';
                                                $(form_result_div).remove();
                                                form_btn.before(
                                                    '<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>'
                                                    );
                                                var form_btn_old_msg = form_btn.html();
                                                form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                                                $(form).ajaxSubmit({
                                                    dataType: 'json',
                                                    success: function(data) {
                                                        if (data.status === 'true') {
                                                            $(form).find('.form-control').val('');
                                                        }
                                                        form_btn.prop('disabled', false).html(form_btn_old_msg);
                                                        $(form_result_div).html(data.message).fadeIn('slow');
                                                        setTimeout(function() {
                                                            $(form_result_div).fadeOut('slow')
                                                        }, 6000);
                                                    }
                                                });
                                            }
                                        });
                                    })(jQuery);
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end main-content -->
@endsection

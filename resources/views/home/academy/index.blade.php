@extends('home.layouts._app')

@section('content')
    <!-- Start main-content -->
    <div class="main-content-area">
        <!-- Section: page title -->
        {{-- <section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center"
            data-tm-bg-img="{{ asset('home/images/bg/bg1.jpg') }}?v={{ setting('cover_time') }}"
            style="margin-top: 95px; background-size: cover;">
            <div class="container pt-50 pb-50">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="title">أكاديمية مدربي العافية الشمولية</h2>

                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        <!-- Section: about -->
        <section id="academy">
            <div class="container" style="padding-top: 95px;">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="row" style="justify-content: center">
                            <img src="{{ asset('academylogo.png') }}" style="width: auto" alt="">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <h3 class=" mt-0 mt-sm-30 mb-2" style=" color: #375651 !important;"> الأكاديمية <img
                                src="{{ asset('academyheart.png') }}" alt=""></h3>
                        <h2 class="text-theme-colored2 mt-0">{!! $academy->ar_title !!} </h2>
                        <h2 class="text-theme-colored2 mt-0">{!! $academy->en_title !!}</h2>
                        <p class="font-weight-600">{!! $academy->header !!}</p>
                        <p class="mt-20">{!! $academy->about !!}
                        </p>
                        <div class="col-md-12 text-center">

                            <a class="btn btn-dark btn-theme-colored3 btn-sm text-uppercase mt-30"
                                href="{{ route('courses.index') }}">الدورات</a>

                            @if (!Auth::user())
                                <a class="btn btn-dark btn-block btn-sm btn-theme-colored3 text-uppercase  mt-30"
                                    href="{{ route('profiles.create') }}">سجل الآن</a>

                                <a class="btn btn-dark btn-block btn-sm   btn-theme-colored2  text-uppercase mt-30"
                                    href="{{ route('login') }}">دخول</a>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- Section: About -->
        <section class="z-index-1" id="academy2">
            <div class="container">
                <div class="section-content">

                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="title text-theme-colored2 mt-0 mb-20">أكاديمية هوليستك لتدريب مدربين العافية
                                الشمولية
                            </h2>
                            <span
                                style="margin-top: 50px; float: right;
                                width: 100%;
                                text-align: right;"><span
                                    class="dot"></span>
                                <span class="dot"></span>
                                <span class="dot"></span></span>
                            <div class="row"
                                style="
                                background: #fff;
                                padding: 50px 0px;
                                box-shadow: 12px 12px 6px -6px rgba(0, 0, 0, 0.35);
                                -webkit-box-shadow: 12px 12px 6px -6px rgba(0, 0, 0, 0.35);
                                -moz-box-shadow: 12px 12px 6px -6px rgba(0, 0, 0, 0.35);
                              ">
                                <div class="col-md-12" style="padding: 0 75px">
                                    {!! $academy->content !!}
                                </div>
                            </div>
                            <span style="  float: left; margin-top: 10px"><span class="dot"></span>
                                <span class="dot"></span>
                                <span class="dot"></span></span>




                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="z-index-1">
            <div class="container">
                <div class="section-content">
                    {{-- 3 --}}
                    <div class="row" style="margin-bottom: 75px ;background: #fff;">
                        <div class="col-md-4">
                            <div class="col-md-12 academy3 m-3" style="background: #375651">
                                <img src="{{ asset('') }}" alt="">
                                <h2>التأصيل والتجذير</h2>
                                <h4 style="text-align: justify;padding: 0 25px;">نتعهد بإرشاد الطلبة حتى يصيروا
                                    معالجين شموليين وليفهموا ثم يعالجوا العوامل التي توجّه فهم العملاء وجودة حياتهم
                                    من خلال تبيُن ذواتهم الباطنية والبدء بالعلاج من الجذور</h4>
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="col-md-12 academy3 m-3" style="background: #f4a3a5">
                                <img src="{{ asset('') }}" alt="">
                                <h2>التوازن</h2>
                                <h4 style="text-align: justify;padding: 0 25px;">يقدّر مدربونا ويؤمنون بأن ممالك
                                    الذات
                                    الثلاث ينبغي أن تتواجد وتندمج معاً بتناغم إذا ما أراد المرء تحقيق ذاته الأعلى
                                    والأصدق. يفهمون الجانب متعدد الأبعاد من العافية، والذي يتضمن: البدنية والعقلية
                                    والشعورية والاجتماعية والثقافية والروحية، ويشجعون الضيوف على أن يكونوا منتبهين
                                    إلى
                                    التصرفات الدقيقة التي تحمل أثراً مستمراً على صحتهم الكُلية.</h4>
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="col-md-12 academy3 m-3" style="background: #f9bb76">
                                <img src="{{ asset('') }}" alt="">
                                <h2>الإتساع</h2>
                                <h4 style="text-align: justify;padding: 0 25px;">سيرأس مدربونا رحلة العملاء نحو
                                    العودة
                                    من العوامل الخارجية التي شوّشت صورتهم الداخلية، وسيعملون على إعادة إطلاق الذات
                                    الداخلية الأصلية بتعبيرها الأصدق والأقوى لتكون فوانيس تضيء مسيرتهم الجديدة
                                    كلياً.
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Section: Funfacts -->
        <section class="" style="background: #f4a3a5">
            <div class="container pt-100 pb-100">
                <div class="section-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-lg-3 col-xl-3">
                                <div class="funfact-item text-center mb-md-60">
                                    <i class="funfact-icon fa fa-user-plus text-theme-colored1"></i>
                                    <h2 class="text-white title font-weight-600 mb-0">الطلاب<h2>
                                            <h2 data-animation-duration="2000" data-value="{{ $profiles }}"
                                                class="text-white counter animate-number mt-0 mb-10">0</h2>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 col-xl-3">
                                <div class="funfact-item text-center mb-md-60">
                                    <i class="funfact-icon fa fa-indent text-theme-colored1"></i>
                                    <h2 class="text-white title font-weight-600 mb-0">الدورات<h2>
                                            <h2 data-animation-duration="2000" data-value="{{ $courses }}"
                                                class="text-white counter animate-number mt-0 mb-10">0</h2>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 col-xl-3">
                                <div class="funfact-item text-center mb-sm-60">
                                    <i class="funfact-icon fas fa-list text-theme-colored1"></i>
                                    <h2 class="text-white title font-weight-600 mb-0">الدروس<h2>
                                            <h2 data-animation-duration="2000" data-value="{{ $lessons }}"
                                                class="text-white counter animate-number mt-0 mb-10">0</h2>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 col-xl-3">
                                <div class="funfact-item text-center">
                                    <i class="fa fa-quote-right funfact-icon text-theme-colored1"></i>
                                    <h2 class="text-white title font-weight-600 mb-0">الخدمات<h2>
                                            <h2 data-animation-duration="2000"
                                                data-value="{{ $services_count->count() }}"
                                                class="text-white counter animate-number mt-0 mb-10">0</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Section: About -->
        <section class="z-index-1" id="about4">
            <div class="container">
                <div class="section-content">

                    <div class="row">
                        <div class="col-md-12 text-center">

                            <div class="row">
                                <div class="col-md-12">
                                    <h1 class="title text-left text-theme-colored2 mt-0" style="color: #375651">من نحن
                                    </h1>

                                    <span
                                        style="margin-top: 50px; float: right;
                                    width: 100%;
                                    text-align: right;"><span
                                            class="dot"></span>
                                        <span class="dot"></span>
                                        <span class="dot"></span></span>
                                    <div class="row"
                                        style="
                                    background: #fff;
                                    padding: 50px 0px;
                                    box-shadow: 12px 12px 6px -6px rgba(0, 0, 0, 0.35);
                                    -webkit-box-shadow: 12px 12px 6px -6px rgba(0, 0, 0, 0.35);
                                    -moz-box-shadow: 12px 12px 6px -6px rgba(0, 0, 0, 0.35);
                                  ">
                                        <div class="col-md-12" style="padding: 0 75px">
                                            {!! $academy->who_are_we !!}
                                        </div>
                                    </div>
                                    <span style="  float: left; margin-top: 10px"><span class="dot"></span>
                                        <span class="dot"></span>
                                        <span class="dot"></span></span>

                                </div>
                                <section class="z-index-1">
                                    <div class="container">
                                        <div class="section-content">
                                            {{-- 3 --}}
                                            <div class="row" style="margin-bottom: 75px ;">
                                                <div class="col-md-4">
                                                    <div class="col-md-12 academy3 m-3"
                                                        style="background: #375651;min-height: 350px !important;padding-top: 50px;">

                                                        <h2>فلسفتنا</h2>
                                                        <h3 style="text-align: justify;padding: 0 25px;">
                                                            {!! $academy->phylosofy !!}</h3>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="col-md-12 academy3 m-3"
                                                        style="background: #f4a3a5;min-height: 350px !important;padding-top: 50px;">
                                                        <h2>رسالتنا</h2>
                                                        <h3 style="text-align: justify;padding: 0 25px;">
                                                            {!! $academy->message !!}</h3>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="col-md-12 academy3 m-3"
                                                        style="background: #f9bb76;min-height: 350px !important;padding-top: 50px;">
                                                        <h2>رؤيتنا</h2>
                                                        <h3 style="text-align: justify;padding: 0 25px;">
                                                            {!! $academy->vision !!}
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </section>
                            </div>

                            <hr>
                            <div class="row mt-20">
                                <div class="col-md-12">
                                    <h1 class="title text-left text-theme-colored1 mt-0">من هو مدرب العافية الشمولية</h1>
                                    <span
                                        style="margin-top: 50px; float: right;
                                width: 100%;
                                text-align: right;"><span
                                            class="dot"></span>
                                        <span class="dot"></span>
                                        <span class="dot"></span></span>
                                    <div class="row"
                                        style="
                                background: #fff;
                                padding: 50px 0px;
                                box-shadow: 12px 12px 6px -6px rgba(0, 0, 0, 0.35);
                                -webkit-box-shadow: 12px 12px 6px -6px rgba(0, 0, 0, 0.35);
                                -moz-box-shadow: 12px 12px 6px -6px rgba(0, 0, 0, 0.35);
                              ">
                                        <div class="col-md-12" style="padding: 0 75px">
                                            {!! $academy->how_is !!}
                                        </div>
                                    </div>

                                    <span style="  float: left; margin-top: 10px"><span class="dot"></span>
                                        <span class="dot"></span>
                                        <span class="dot"></span></span>
                                </div>
                            </div>
                            <div class="row mt-20">
                                <div class="col-md-12">
                                    <h1 class="title text-left  text-theme-colored1 mt-3" style="margin-top: 50px">أهداف
                                        الأكاديمية</h1>
                                    <span
                                        style="margin-top: 50px; float: right;
                                width: 100%;
                                text-align: right;"><span
                                            class="dot"></span>
                                        <span class="dot"></span>
                                        <span class="dot"></span></span>
                                    <div class="row"
                                        style="
                                background: #fff;
                                padding: 50px 0px;
                                box-shadow: 12px 12px 6px -6px rgba(0, 0, 0, 0.35);
                                -webkit-box-shadow: 12px 12px 6px -6px rgba(0, 0, 0, 0.35);
                                -moz-box-shadow: 12px 12px 6px -6px rgba(0, 0, 0, 0.35);
                              ">
                                        <div class="col-md-12" style="padding: 0 75px">
                                            {!! $academy->goals !!}
                                        </div>
                                    </div>

                                    <span style="  float: left; margin-top: 10px"><span class="dot"></span>
                                        <span class="dot"></span>
                                        <span class="dot"></span></span>
                                </div>
                            </div>

                            <div class="row mt-20">
                                <div class="col-md-12">
                                    <h1 class="title text-left  text-theme-colored1 mt-0">أساسيات المنهج</h1>
                                    <span
                                        style="margin-top: 50px; float: right;
                                width: 100%;
                                text-align: right;"><span
                                            class="dot"></span>
                                        <span class="dot"></span>
                                        <span class="dot"></span></span>
                                    <div class="row"
                                        style="
                                background: #fff;
                                padding: 50px 0px;
                                box-shadow: 12px 12px 6px -6px rgba(0, 0, 0, 0.35);
                                -webkit-box-shadow: 12px 12px 6px -6px rgba(0, 0, 0, 0.35);
                                -moz-box-shadow: 12px 12px 6px -6px rgba(0, 0, 0, 0.35);
                              ">
                                        <div class="col-md-12" style="padding: 0 75px">
                                            {!! $academy->essential !!}
                                        </div>
                                    </div>

                                    <span style="  float: left; margin-top: 10px"><span class="dot"></span>
                                        <span class="dot"></span>
                                        <span class="dot"></span></span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section style="background: #fff">
            <div class="container">
                <div class="section-title">
                    <div class="row">
                        <div class="col-md-4" style="text-align: center">
                            <div class="row" style="justify-content: center; ">
                                <div class="row"
                                    style="justify-content: center;  justify-content: center;
                                padding-left: 8px;
                                padding-bottom: 18px;">
                                    <span class="dot" style="padding-left: 5px;"></span>
                                </div>
                                <div class=""
                                    style="margin-left: 25px ;border-left: 3px solid #f4a3a5;
                                height: 35px;
                                width: 0px;">
                                </div>
                            </div>
                            <h3 class="title text-theme-colored2 mt-0">طريقة التعليم</h3>
                            <div class="row" style="justify-content: center;">
                                <div class=""
                                    style="margin-left: 25px ;border-left: 3px solid #f4a3a5;
                                height: 35px;
                                width: 0px;">
                                </div>
                            </div>
                            <div
                                style="background-size: cover ;background-image: url({{ asset('ICONBG.png') }}) ;padding-top: 40px;
height: 400px;">
                                <img src="{{ asset('ICON1.png') }}" style="max-width: 80px" alt="">
                                {!! $academy->education_way !!}
                            </div>
                        </div>
                        <div class="col-md-4" style="text-align: center">
                            <div class="row" style="justify-content: center; ">
                                <div class="row"
                                    style="justify-content: center;  justify-content: center;
                                padding-left: 8px;
                                padding-bottom: 18px;">
                                    <span class="dot" style="padding-left: 5px;"></span>
                                </div>
                                <div class=""
                                    style="margin-left: 25px ;border-left: 3px solid #f4a3a5;
                                height: 35px;
                                width: 0px;">
                                </div>
                            </div>
                            <h3 class="title text-theme-colored2 mt-0">مدة الدراسة </h3>
                            <div class="row" style="justify-content: center;">
                                <div class=""
                                    style="margin-left: 25px ;border-left: 3px solid #f4a3a5;
                                height: 35px;
                                width: 0px;">
                                </div>
                            </div>
                            <div
                                style="background-size: cover ;background-image: url({{ asset('ICONBG2.png') }}) ;padding-top: 40px;
height: 400px;">
                                <img src="{{ asset('ICON2.png') }}" style="max-width: 80px" alt="">
                                {!! $academy->education_period !!}
                            </div>
                        </div>
                        <div class="col-md-4" style="text-align: center">
                            <div class="row" style="justify-content: center; ">
                                <div class="row"
                                    style="justify-content: center;  justify-content: center;
                                padding-left: 8px;
                                padding-bottom: 18px;">
                                    <span class="dot" style="padding-left: 5px;"></span>
                                </div>
                                <div class=""
                                    style="margin-left: 25px ;border-left: 3px solid #f4a3a5;
                                height: 35px;
                                width: 0px;">
                                </div>
                            </div>
                            <h3 class="title text-theme-colored2 mt-0">رسوم الدراسة </h3>
                            <div class="row" style="justify-content: center;">
                                <div class=""
                                    style="margin-left: 25px ;border-left: 3px solid #f4a3a5;
                                height: 35px;
                                width: 0px;">
                                </div>
                            </div>
                            <div
                                style="background-size: cover ;background-image: url({{ asset('ICONBG.png') }}) ;padding-top: 40px;
height: 400px;">
                                <img src="{{ asset('ICON3.png') }}" style="max-width: 80px" alt="">
                                {!! $academy->education_fee !!}
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 75px ; margin-top: 75px">

                        <div class="col-md-6 ">
                            <div class="col-md-12 academy3 m-3"
                                style="background: #f4a3a5;min-height: 400px !important;padding-top: 50px;">
                                <h2 style="color: #fff">شروط القبول</h2>
                                <h3 style="text-align: justify;padding: 0 25px;">
                                    {!! $academy->accept_condition !!}</h3>
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="col-md-12 academy3 m-3"
                                style="background: #f9bb76;min-height: 400px !important;padding-top: 50px;">
                                <h2 style="color:#fff">شروط التخرج</h2>
                                <h3 style="text-align: justify;padding: 0 25px;">
                                    {!! $academy->graduation_condition !!}
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- Section: Staff -->
                    <div class="row" style="text-align: center">
                        {!! $academy->footer !!}
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="mb-60">
                                <div class="tm-sc tm-sc-section-title section-title">
                                    <div class="title-wrapper">
                                        <h2 class="text-uppercase line-bottom line-bottom-theme-colored1">أعضاء
                                            <span class="text-theme-colored1">هيئة التدريس </span>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row" style="justify-content: center">
                        @foreach ($trainers as $trainer)
                            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                <div class="staff-item mb-lg-40" style="margin-top: 115px;margin-bottom: 25px;">
                                    <div class="staff-thumb"
                                        style="  position: relative;
                                top: -110px;"> <img
                                            alt="img" src="{{ asset('trainers/images/' . $trainer->img) }}"
                                            class="w-100 rounded"
                                            style="border-radius: 50% !important;border: 1px solid #f9bf7f;
                                            padding: 3px;">
                                    </div>
                                    <div class="staff-content" style="min-height: 250px;">
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
        <!-- Start Divider -->
        <section class="" style="  background: #EFBB76;">
            <div class="container pt-15 pb-15">
                <div class="section-content">
                    <h2 class="title text-theme-colored1 mt-20 mb-20 text-center">الاعتمادات العالمية
                    </h2>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="tm-sc tm-sc-clients tm-sc-clients-carousel owl-dots-light-skin owl-dots-center">
                                <div class="owl-carousel owl-theme tm-owl-carousel-5col" data-autoplay="true"
                                    data-loop="true" data-duration="6000" data-smartspeed="300" data-margin="30"
                                    data-stagepadding="0" data-laptop="4">
                                    <div class="item"> <a target="_blank"> <img src='{{ asset('supporters/1.png') }}'
                                                alt='Image' style="height: 120px !important;" /> </a></div>
                                    <div class="item"> <a target="_blank"> <img src='{{ asset('supporters/2.png') }}'
                                                alt='Image' style="height: 120px !important;" /> </a></div>
                                    <div class="item"> <a target="_blank"> <img src='{{ asset('supporters/3.png') }}'
                                                alt='Image' style="height: 120px !important;" /> </a></div>
                                    <div class="item"> <a target="_blank"> <img src='{{ asset('supporters/4.png') }}'
                                                alt='Image' style="height: 120px !important;" /> </a></div>
                                    <div class="item"> <a target="_blank"> <img src='{{ asset('supporters/5.png') }}'
                                                alt='Image' style="height: 120px !important;" /> </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Start Divider -->
        <section class="" style="  background: #FEF6EC; padding-top: 50px; padding-bottom: 50px">
            <div class="container pt-15 pb-15">
                <div class="section-content">
                    <h2 class="title text-theme-colored1 mt-20 mb-20 text-center">شهادة الاعتماد لموقع الأكاديمية
                    </h2>
                    <div class="row" style="justify-content: center;">
                        <div class="vl"
                            style="border-left: 3px solid #f4a3a5;
                        height: 100px;
                        width: auto;">
                        </div>
                    </div>
                    <div class="row" style="justify-content: center;">

                        <img src="{{ asset('home/images/academy.png') }}" alt="">

                    </div>
                </div>
            </div>
        </section>


    </div>
    <!-- end main-content -->
@endsection

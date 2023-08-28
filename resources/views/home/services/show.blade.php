@extends('home.layouts._app')

@section('styles')
    <style>
        .pink {
            background: #EAA2A1;
            padding: 50px 25px;
            color: #fff;
            font-family: 'Janna';
            font-weight: bold;
            font-size: 20px;
            text-align: center;
        }

        .academy3 {
            min-height: 950px !important;
        }

        @media only screen and (max-width: 550px) {
            .ttitle {
                font-size: 46px !important;
            }

            .p-mobile{
                padding-left: 25px !important;
                padding-right: 25px !important;
            }

            .academy3{
                min-height: auto !important;
            }
        }
    </style>
@endsection
@section('content')
    <!-- Start main-content -->
    <div class="main-content-area">
        <!-- Section: page title -->
        <section class="page-title pt-50" style="background: #375651">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="title" style="font-size: 64px;
                            color: #e0e1da;">
                                {{ $service->id }}<br>{{ $service->title }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>






        @if ($service->id == 1)

            <!-- Section: Service details -->
            <section id="service3" style="background: #fefef2">
                <div class="container">
                    <div class="section-content">
                        <div class="row">
                            {{-- <div class="col-lg-3">
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
                            </div>
                        </div> --}}
                            <div class="col-lg-12">
                                <div class="row" style="justify-content: center">
                                    <img src="{{ asset('icon/services/1/5.png') }}" style="max-width: 80px" alt="">
                                    <form action="{{ route('orderservices.create') }}" method="get"
                                        style="  width: auto;">
                                        <input type="hidden" name="service_id" value="{{ $service->id }}">
                                        <button type="submit" class="btn btn-dark btn-theme-colored3 text-uppercase"> أطلب
                                            الخدمة
                                            الآن</button>
                                    </form>
                                    <img src="{{ asset('icon/services/1/5.png') }}" style="max-width: 80px" alt="">
                                </div>
                                @if ($service->index_image != '')
                                    <div class="row" style="justify-content: center"> <img alt=""
                                            src="{{ asset($service->index_image) }}"
                                            style="max-height:450px; width: auto" />
                                    </div>
                                @endif
                                <p>{!! $service->brief !!}</p>
                                <div class="row mb-20 mt-20">

                                </div>
                                @if ($service->sliderImages->count() > 0)
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
                                                                                            <img width="672"
                                                                                                height="448"
                                                                                                src="{{ $sliderImage->image_path }}"
                                                                                                class=""
                                                                                                alt="images" />
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="tm-gallery-content-wrapper">
                                                                                        <div class="tm-gallery-content">
                                                                                            <div
                                                                                                class="tm-gallery-content-inner">
                                                                                                <div
                                                                                                    class="icons-holder-inner">
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
                                @endif

                                @foreach ($service->sections as $section)
                                    @if (!$section->header)
                                        <div class="row" style="margin-top: 50px">
                                            <div class="col-md-12 col-lg-12 col-xl-12">
                                                <p>{!! $section->content !!}</p>
                                            </div>
                                            <div class="col-md-12 col-lg-12 col-xl-12">
                                                @if ($section->image)
                                                    <div class="">
                                                        <div class="effect-wrapper">
                                                            <div class="thumb">
                                                                <img class="" src="{{ asset($section->image) }}"
                                                                    alt="" style="width: auto !important;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    @else
                                        <div class="entry-content" style="margin-top: 75px">
                                            <blockquote
                                                class="tm-sc-blockquote blockquote-style6  border-left-theme-colored quote-icon-theme-colored">
                                                <p>{!! $section->content !!}</cite></footer>
                                            </blockquote>
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-xl-12">
                                            @if ($section->image)
                                                <div class="row" style="justify-content: center;text-align: center;">
                                                    <div class="effect-wrapper">
                                                        <div class="thumb">
                                                            <img class="" src="{{ asset($section->image) }}"
                                                                alt="" style="width: auto !important;">
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <section id="service3">
                <div class="container">
                    <div class="section-content">
                        <div class="row pr-100 pl-100 p-mobile" style="justify-content: center">
                            <h2 class="ttitle" style="color: #EAA2A1; font-size: 64px; text-align: center">الاستشارة الفردية</h2>
                            <h5 class="pink">الرحلة الفردية الشمولية مع د.ريهام، مبنية على علوم الطب الوظيفي الشمولي
                                ﻟﻌﻼج ﺟﺬور اﻻﺿﻄﺮاﺑﺎت اﻟﺠﺴﺪﻳﺔ واﻟﻨﻔﺴﻴﺔ، وﺣﻜﻤﺔ اﻟﻄﺐ اﻻﻳﻮرﻓﻴﺪي وﻋﻠﻮم ﺟﺬور
                                .اﻷﻣﺮاض اﻟﺸﻌﻮرﻳﺔ وﻓﻨﻮن اﻟﻜﻮﺗﺸﻨﺞ اﻟﻌﺎﻃﻔﻲ واﻟﺮوﺣﺎﻧﻲ<br>
                                اﻟﺪﻣﺞ ﺑﻴﻦ ﻋﻠﻮم ﻣﺨﺘﻠﻔﺔ وأدوات ﻛﺜﻴﺮة ﻳﺴﻤﺢ ﻟﻠﻔﺮد أن ﻳﻌﻴﺶ ﺗﺠﺮﺑﺔ ﺗﺸﺎﻓﻲ ﺷﻤﻮﻟﻲ
                                ﻟﻠﺠﺴﺪ واﻟﻘﻠﺐ واﻟﻨﻔﺲ ﻓﻲ ﻣﻜﺎن واﺣﺪ وﺧﻄﺔ واﺿﺤﺔ ﻟﺮﺣﻠﺘﻪ اﻟﻔﺮدﻳﺔ ﻣﺒﻨﻴﺔ ﻋﻠﻰ اﺣﺘﻴﺎﺟﻪ
                                .ﻟﺘﺤﻘﻴﻖ أﻋﻠﻰ ﻣﺴﺘﻮﻳﺎت اﻟﻌﺎﻓﻴﺔ ﺑﺈذن اﻟﻠﻪ</h5>

                        </div>
                        {{-- <div class="row">
                        <img src="{{ asset('icon/services/1/6.png') }}" style="max-width: 250px" alt="">
                            <img src="{{ asset('icon/services/1/6.png') }}" style="max-width: 250px" alt="">
                    </div> --}}

                        <div class="row mt-100" style="justify-content: center">
                            <h2 class="ttitle" style="color: #EAA2A1; font-size: 64px; text-align: center">خطوات رحلة التشافي الشمولي</h2>
                            <img src="{{ asset('icon/services/1/7.png') }}" alt="">

                        </div>
                    </div>
                </div>
            </section>
            <section class="z-index-1">
                <div class="container">
                    <div class="section-content">
                        {{-- 3 --}}
                        <div class="row" style="margin-bottom: 75px ;background: #fff;">
                            <div class="col-lg-4">
                                <div class="col-md-12 academy3 m-3" style="background: #375651">
                                    <img src="{{ asset('icon/x1.png') }}" alt="" style="  height: 150px;">
                                    <h2 style="font-size: 46px;
                                    min-height: 115px;">
                                        التأصيل والتجذير</h2>
                                    <h4 style="text-align: justify;padding: 0 25px; font-family: 'Janna'">
                                        ﻛﺴﺮ اﻟﺘﻜﻴﻒ ﻣﻊ اﻷﻧﻤﺎط واﻟﻤﻌﺘﻘﺪات
                                        اﻟﺘﻲ ﺗﻌﻴﻖ اﻟﻮﺻﻮل إﻟﻰ اﻟﻮﻋﻲ
                                        اﻷﻋﻠﻰ واﻹﻣﻜﺎﻧﻴﺎت اﻟﻜﺎﻣﻠﺔ<br>
                                        .<br>
                                        ﻋﺰﻳﺰ اﻟﺘﻮازن اﻟﻌﺼﺒﻲ ﻟﻸﻣﺎن ،
                                        واﻟﺘﻌﺎﻃﻒ اﻟﺬاﺗﻲ ﻟﺮﺣﻠﺔ ﻣﺒﻨﻴﺔ ﻋﻠﻲ
                                        .اﻟﺤﺐ وﻟﻴﺲ اﻟﺨﻮف
                                    </h4>
                                </div>
                            </div>
                            <div class="col-lg-4 ">
                                <div class="col-md-12 academy3 m-3" style="background: #f4a3a5">
                                    <img src="{{ asset('icon/x2.png') }}" alt="" style="  height: 150px;">
                                    <h2 style="font-size: 46px;
                                    min-height: 115px;">
                                        مـــوازنــة الجسد والمشاعر</h2>
                                    <h4 style="text-align: justify;padding: 0 25px; font-family: 'Janna'">
                                        ﺗﺸﺨﻴﺺ اﻹﺿﻄﺮاب اﻟﻤﻬﻴﻤﻦ ﻋﻨﺪ
                                        اﻟﺸﺨﺺ واﻟﺤﺼﻮل ﻋﻠﻰ ﺧﻄﺔ ﻓﺮدﻳﺔ
                                        ﺗﺸﻤﻞ اﻟﻤﻜﻤﻼت اﻟﻼزﻣﺔ واﻟﺘﻮﺻﻴﺎت
                                        اﻟﻐﺬاﺋﻴﺔ اﻟﻤﺨﺘﺼﺔ وﻧﻤﻂ اﻟﺤﻲ اﻟﻼزم
                                        وأي ﺗﻮﺻﻴﺎت أﺧﺮى ﻟﺘﻮﺟﻴﻪ اﻟﻔﺮد ﻓﻲ
                                        رﺣﻠﺘﻪ اﻟﻔﺮﻳﺪة ﻟﺘﻌﺰﻳﺰ ﻋﺎﻓﻴﺔ وﺗﺸﺎﻓﻲ
                                        اﻟﻔﺮد ﻓﻲ ﻫﺬه اﻟﺮﺣﻠﺔ<br>
                                        .<br>
                                        ﺣﻞ ّ اﻟﺼﺮاﻋﺎت اﻟﺸﻌﻮرﻳﺔ اﻟﺪاﺧﻠﻴﺔ
                                        واﻟﺼﺮاﻋﺎت اﻟﺠﺴﺪﻳﺔ اﻟﺘﻲ ﺗﺴﺒﺐ
                                        اﻻﺿﻄﺮاﺑﺎت واﻻﺧﺘﻼﻻت ﺑﺎﺳﺘﺨﺪام:<br>
                                        اﻟﺮوﺗﻴﻦ اﻟﻴﻮﻣﻲ وﻳﺸﻤﻞ اﻟﺤﺮﻛﺔ،
                                        .اﻟﺘﻐﺬﻳﺔ، اﻟﻨﻮم وﻣﻮازﻧﺔ اﻟﻤﺸﺎﻋﺮ
                                    </h4>
                                </div>
                            </div>
                            <div class="col-lg-4 ">
                                <div class="col-md-12 academy3 m-3" style="background: #f9bb76">
                                    <img src="{{ asset('icon/x3.png') }}" alt="" style="  height: 150px;">
                                    <h2 style="font-size: 46px;
                                    min-height: 115px;">
                                        الإتســـاع</h2>
                                    <h4 style="text-align: justify;padding: 0 25px; font-family: 'Janna'">
                                        ﻋﻨﺪﻣﺎ ﻧﻮﻟﺪ ﻓﻲ اﻟﺤﻴﺎة، ﻧﻮﻟﺪ
                                        ﻣﻨﺴﺠﻤﻴﻦ وﻣﺘﺼﻠﻴﻦ ﺑﻌﻘﻠﻨﺎ وﺟﺴﺪﻧﺎ
                                        وروﺣﻨﺎ وﻓﻲ ﺗﻨﺎﻏﻢ ﺗﺎم ﻣﻌﻬﺎ، وﺑﺬوات
                                        أﺻﻠﻴﺔ وﺗﻌﺎﺑﻴﺮ ﻏﻴﺮ ﻣﺮوﺿﺔ، ﻓﺘﻜﻮن ﻟﻨﺎ
                                        ﺣﺮﻳﺔ اﻟﺒﻜﺎء واﻟﻨﻮم واﻷﻛﻞ وﻓﻘًﺎ
                                        ﻟﺤﺎﺟﺎﺗﻨﺎ اﻟﺸﻌﻮرﻳﺔ واﻟﺒﺪﻧﻴﺔ اﻟﺤﻘﻴﻘﻴﺔ،
                                        وﻧﻜﻮن ﻣﻨﺴﺠﻤﻴﻦ ﻣﻊ ﺣﻘﻴﻘﺘﻨﺎ. وﻣﻊ
                                        ﺗﻘﺪﻣﻨﺎ ﻓﻲ اﻟﺴﻦ، ﻧﺘﻌﻠﻢ أن ﻧﺮوض
                                        ﺗﻌﺎﺑﻴﺮﻧﺎ اﻟﺠﺎﻣﺤﺔ، وأﻻ ﻧﻘﻮل أو ﻧﻔﻌﻞ
                                        إﻻ اﻟﻤﻘﺒﻮل اﺟﺘﻤﺎﻋﻴًﺎ، وأن ﻧﺘﺼﺮف
                                        اﻟﺘﺼﺮﻓﺎت اﻟﺘﻲ ﺗﺴﺎﻋﺪﻧﺎ ﻋﻠﻰ اﻟﺘﻘﺪُم
                                        أو ﻧﻴﻞ اﻟﺤﻈﻮة ﻓﻲ ﻋﻼﻗﺎﺗﻨﺎ ﻣﻊ
                                        اﻵﺧﺮﻳﻦ. ﻛﻞ ﻣﺎ اﻧﻔﺼﻠﻨﺎ أﻛﺜﺮ ﻋﻦ ذواﺗﻨﺎ
                                        اﻷﺻﻠﻴﺔ وﺻﻮﺗﻨﺎ اﻟﺤﻘﻴﻘﻲ، ﻧﺸﻌﺮ ﺑﻬﺬا
                                        اﻻﺧﺘﻼل ﺑﻴﻦ ﻋﻘﻮﻟﻨﺎ وأﺟﺴﺎدﻧﺎ وأرواﺣﻨﺎ
                                        .وﻳﺒﺪأ اﻷﻟﻢ ﺑﻐﺰو أﺑﺪاﻧﻨﺎ<br>
                                        ﻟﻴﺴﺖ اﻟﺤﻴﻠﺔ ﻫﻨﺎ أن ﻧﺘﺨﻠﺺ ﻣﻦ ﻛﻞ ﻣﺎ
                                        ﺗﻌﻠﻤﻨﺎه ﻟﻨﺘﺴﻖ ﻣﻊ ﻣﺠﺘﻤﻌﺎﺗﻨﺎ وﻧﺆدي
                                        دورﻧﺎ ﺑﺎﻋﺘﺒﺎرﻧﺎ ﺑﺎﻟﻐﻴﻦ ﻓﻴﻬﺎ، ﺑﻞ أن
                                        ﻧﺘﺬﻛﺮ ﺣﻘﻴﻘﺘﻨﺎ وﻧﺪﻣﺠﻬﺎ ﺑﺤﻴﻮاﺗﻨﺎ
                                    </h4>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <h5 class="pink HOLISM">
                                ﺣﺎﻟﻤﺎ ﻳﺮﺟﻊ اﻟﺸﺨﺺ إﻟﻰ ﺷﻌﻮره ﺑﺎﻟﻌﺎﻓﻴﺔ واﻟﺘﻨﺎﻏﻢ اﻟﺸﻌﻮري، ﻳﻨﻌﻄﻒ ﻃﺒﻴﻌﻴﺎ ً ﻧﺎﺣﻴﺔ اﻟﺘﺠﻠّﻲ
                                وازدﻫﺎر ﺟﻮﻫﺮه وﻏﺎﻳﺘﻪ ﻓﻲ اﻟﺤﻴﺎة. ﻳﺤﺪث اﻛﺘﺸﺎف اﻟﺬات ﻃﺒﻴﻌﻴﺎ ً ﻋﻨﺪﻣﺎ ﻳﺒﻠﻎ اﻟﺠﺴﺪ واﻟﻌﻘﻞ
                                ﺣﺎﻟﺔ ﻣﻦ اﻟﻌﺎﻓﻴﺔ، وﻳﺴﺎﻋﺪ اﻛﺘﺸﺎف ﻏﺎﻳﺔ اﻟﺤﻴﺎة اﻟﻔﺮد ﻋﻠﻰ إﺑﻄﺎء ﻋﻤﻠﻴﺔ اﻟﺘﻘﺪم ﻓﻲ اﻟﺴﻦ
                                واﻟﺘﻤﺘﻊ ﺑﻤﺰﻳﺪ ﻣﻦ أﺳﺒﺎب اﻟﻌﻴِش.

                            </h5>
                            <div class="row" style="justify-content: center">
                                <img src="{{ asset('icon/services/services/5.png') }}" alt=""
                                    style="max-width: 80px">
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        @endif

        @if ($service->id == 2)

            <!-- Section: Service details -->
            <section id="service3" style="background: #fef6ec">
                <div class="container">
                    <div class="section-content">
                        <div class="row">
                            {{-- <div class="col-lg-3">
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
                            </div>
                        </div> --}}
                            <div class="col-lg-12">
                                <div class="row" style="justify-content: center">
                                    <img src="{{ asset('icon/services/1/5.png') }}" style="max-width: 80px"
                                        alt="">
                                    <form action="{{ route('orderservices.create') }}" method="get"
                                        style="  width: auto;">
                                        <input type="hidden" name="service_id" value="{{ $service->id }}">
                                        <button type="submit" class="btn btn-dark btn-theme-colored3 text-uppercase">
                                            أطلب
                                            الخدمة
                                            الآن</button>
                                    </form>
                                    <img src="{{ asset('icon/services/1/5.png') }}" style="max-width: 80px"
                                        alt="">
                                </div>
                                @if ($service->index_image != '')
                                    <div class="row" style="justify-content: center"> <img alt=""
                                            src="{{ asset($service->index_image) }}"
                                            style="max-height:450px; width: auto" />
                                    </div>
                                @endif
                                <p>{!! $service->brief !!}</p>
                                <div class="row mb-20 mt-20">

                                </div>
                                @if ($service->sliderImages->count() > 0)
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
                                                                                            <img width="672"
                                                                                                height="448"
                                                                                                src="{{ $sliderImage->image_path }}"
                                                                                                class=""
                                                                                                alt="images" />
                                                                                        </a>
                                                                                    </div>
                                                                                    <div
                                                                                        class="tm-gallery-content-wrapper">
                                                                                        <div class="tm-gallery-content">
                                                                                            <div
                                                                                                class="tm-gallery-content-inner">
                                                                                                <div
                                                                                                    class="icons-holder-inner">
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
                                @endif

                                @foreach ($service->sections as $section)
                                    @if (!$section->header)
                                        <div class="row" style="margin-top: 50px">
                                            <div class="col-md-12 col-lg-12 col-xl-12">
                                                <p>{!! $section->content !!}</p>
                                            </div>
                                            <div class="col-md-12 col-lg-12 col-xl-12">
                                                @if ($section->image)
                                                    <div class="">
                                                        <div class="effect-wrapper">
                                                            <div class="thumb">
                                                                <img class="" src="{{ asset($section->image) }}"
                                                                    alt="" style="width: auto !important;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    @else
                                        <div class="entry-content" style="margin-top: 75px">
                                            <blockquote
                                                class="tm-sc-blockquote blockquote-style6  border-left-theme-colored quote-icon-theme-colored">
                                                <p>{!! $section->content !!}</cite></footer>
                                            </blockquote>
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-xl-12">
                                            @if ($section->image)
                                                <div class="row" style="justify-content: center;text-align: center;">
                                                    <div class="effect-wrapper">
                                                        <div class="thumb">
                                                            <img class="" src="{{ asset($section->image) }}"
                                                                alt="" style="width: auto !important;">
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <section id="service3">
                <div class="container">
                    <div class="section-content">
                        <div class="row pr-100 pl-100 p-mobile" style="justify-content: center">
                            <h2 class="ttitle" style="color: #EAA2A1; font-size: 64px; text-align: center">جلسات التنفس</h2>
                            <h5 class="pink">التنفس الواعي المتصل نستشعر من خلاله القوة الشفائية المذهلة من خلال شفاء
                                عقلنا الباطن والشعوري</h5>

                        </div>
                        {{-- <div class="row">
                        <img src="{{ asset('icon/services/1/6.png') }}" style="max-width: 250px" alt="">
                            <img src="{{ asset('icon/services/1/6.png') }}" style="max-width: 250px" alt="">
                    </div> --}}


                    </div>
                </div>
            </section>
            <section class="z-index-1">
                <div class="container">
                    <div class="section-content">
                        <div class="row">
                            <h2 class="ttitle" style="color: #EAA2A1; font-size: 64px; text-align: center">فوائد جلسات التنفس</h2>
                            <h4 class="HOLISM" style="font-family: Janna; text-align: center">وﺑﻤﻤﺎرﺳﺔ اﻟﺘﻤﺮﻳﻨﺎت، ﻧﺤﺼﻞ ﻓﻲ
                                ﻛﻞ ﻣﺮة ﻋﻠﻰ ﻗﺪر أﻛﺒﺮ ﻣﻦ اﻟﺤﺮﻳﺔ واﻟﺴﻼم واﻹدراك
                                اﻟﺪاﺧﻠﻲ واﻟﻨﺠﺎح ﻓﻲ أﻫﺪاﻓﻨﺎ</h4>
                        </div>
                        <div class="row" style="margin-bottom: 75px ; margin-top: 75px">

                            <div class="col-lg-6 ">
                                <div class="col-md-12 academy3 m-3"
                                    style="background: #f4a3a5;min-height: 250px !important;padding-top: 50px;">
                                    <h3 style="text-align: justify;padding: 0 25px;font-family: Janna; text-align: center">
                                        اﻟﺘﺠﺮﺑــــــﺔ اﻟﺒﺪﻧﻴـــــــﺔ<br>
                                        ﻟﻠﻮﻋـــــﻲ اﻟﻤﺘﺴـــــﻊ
                                    </h3>
                                </div>
                            </div>
                            <div class="col-lg-6 ">
                                <div class="col-md-12 academy3 m-3"
                                    style="background: #f9bb76;min-height: 250px !important;padding-top: 50px;">
                                    <h3 style="text-align: justify;padding: 0 25px; font-family: Janna; color:#375651 ;">

                                        ﺗﻐﻴﻴـــﺮ اﻷﻓﻜـــﺎر اﻟﺴﻠﺒﻴـــﺔ اﻟﺘﻲ
                                        أدرﺟﻬــــــﺎ اﻟﻨـــــــﺎس ﻋﻦ اﻟﺤﻴـــــﺎة
                                        ﺣﺘﻰ ﺗﻨﺤﻞ ّ اﻷﻧﻤﺎط اﻟﺘﻲ ﺧُﻠﻘﺖ
                                        ﻓـــــــﻲ اﻟﺠﺴــــــــﺪ واﻟﻌﻘـــــــــــﻞ
                                    </h3>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </section>
            <section id="service3" style="background: #fef6ec">
                <div class="container">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-6">
                                <h3
                                    style="font-size: 36px;
                                font-family: Janna; color: #375651">
                                    اﻟﺘﻨﻔﺲ اﻟﻌﻼﺟﻲ ﻫﻮ أﻛﺜﺮ اﻟﻄﺮق
                                    اﻟﻄﺒﻴﻌﻴﺔ ﻟﻠﺘﺨﻠﺺ ﻣﻦ اﻟﻤﻌﺘﻘﺪات
                                    اﻟﻘﺪﻳﻤﺔ ﻏﻴﺮ اﻟﻮاﻋﻴﺔ وإدﺧﺎل اﻟﻤﺰﻳﺪ
                                    ﻣﻦ اﻟﺴﻜﻴﻨﺔ واﻟﺜﻘﺔ واﻟﻤﺘﻌﺔ إﻟﻰ
                                    أﺟﺴﺎدﻛﻢ<br><br>
                                    اﻟﺠﻠﺴﺔ ﻫﻲ وﺳﻴﻠﺔ ﻟﺘﺤﺴﻴﻦ ﺟﻮدة
                                    أﻓﻜﺎرﻧﺎ واﻟﺘﺤﺮر ﻣﻦ أﻧﻤﺎط اﻟﻼوﻋﻲ ﻣﻦ
                                    .أﺟﻞ ﺗﺤﺴﻴﻦ ﺣﻴﺎﺗﻨﺎ
                                </h3>
                            </div>
                            <div class="col-md-6"><img src="{{ asset('icon/services/2/4.png') }}" alt=""></div>
                        </div>

                    </div>
                </div>
            </section>
            <section>
                <div class="row" style="justify-content: center">
                    <img src="{{ asset('icon/services/services/5.png') }}" alt="" style="max-width: 80px">
                </div>
            </section>
        @endif

        @if ($service->id == 3)
            <section id="service3">
                <div class="container">
                    <div class="section-content">
                        <div class="row" style="justify-content: center">
                            <img src="{{ asset('icon/services/1/5.png') }}" style="max-width: 80px" alt="">
                            <form action="{{ route('orderservices.create') }}" method="get" style="  width: auto;">
                                <input type="hidden" name="service_id" value="{{ $service->id }}">
                                <button type="submit" class="btn btn-dark btn-theme-colored3 text-uppercase">
                                    أطلب
                                    الخدمة
                                    الآن</button>
                            </form>
                            <img src="{{ asset('icon/services/1/5.png') }}" style="max-width: 80px" alt="">
                        </div>
                        <div class="row pt-100 pr-100 pl-100 p-mobile" style="justify-content: center">
                            <div class="col-md-6">
                                <h2 class="Janna HOLISM">رﺣﻠﺔ إﻟﻰ اﻹﺗﺴﺎق ﺑﻴﻦ اﻟﻌﻘﻞ واﻷﻣﻌﺎء
                                    واﻟﻘﻠﺐ</h2>
                                <h2 class="Janna LOVE"
                                    style="font-size: 46px;
                                margin: 25px 0;
                                font-weight: bold; ">
                                    هل تعلم؟
                                </h2>
                                <h5 class="Janna HOLISM" style="  font-size: 18px;">
                                    اﻟﻜﺜﻴﺮ ﻣﻦ ﺗﺤﺪﻳﺎت أﻳﺎﻣﻨﺎ اﻟﻤﻌﺎﺻﺮة ﺗﻌﻮد إﻟﻰ أﻧﻨﺎ ﻻ ﻧﻨﺼﺖ
                                    إﻻ ﻟﻠﺪﻣﺎغ اﻟﺬي ﻓﻲ رأﺳﻨﺎ، ﺑﻴﻨﻤﺎ ﻻ ﻧﺘﻮاﺻﻞ أﺑﺪا ً ﻣﻊ
                                    دﻣﺎﻏﻲ: أﻣﻌﺎﺋﻨﺎ وﻗﻠﺒﻨﺎ!<br><br>
                                    دﻣﺎغ اﻟﺮأس ﻣﺴﺆول ﻋﻦ اﻟﺘﻔﻜﻴﺮ وﺧﻠﻖ اﻟﻤﻌﺎﻧﻲ، ﺑﻴﻨﻤﺎ ً
                                    دﻣﺎغ اﻟﻘﻠﺐ ﻣﺴﺆول ﻋﻦ ﻣﻌﺎﻟﺠﺔ اﻟﻤﺸﺎﻋﺮ واﻟﺘﻮاﺻﻞ ﻃﺎﻗﻴﺎ
                                    ﻣﻊ اﻵﺧﺮﻳﻦ. ﻋﻨﺪﻣﺎ ﻧﻌﺎﻧﻲ ﺻﺮاﻋﺎ ً ﺑﻴﻦ اﻟﻌﻘﻞ واﻟﻘﻠﺐ، ﺗﻈﻬﺮ
                                    ﻣﺸﻜﻼت ﻛﺜﻴﺮة ﻓﻲ أﻣﻌﺎﺋﻨﺎ، ﺣﻴﺚ أن أﻣﻌﺎءﻧﺎ ﺗﺤﺘﺎج إﻟﻰ
                                    اﻟﻤﺤﺎﻓﻈﺔ ﻋﻠﻰ ﺷﻌﻮر ﺛﺎﺑﺖ ﺑﺎﻟﻬﻮﻳﺔ وﺗﺤﺎﻟﻒ ﺗﺎم ﺑﻴﻦ اﻟﻌﻘﻞ
                                    واﻟﻘﻠﺐ
                                </h5>
                            </div>
                            <div class="col-md-6">
                                <img src="{{ asset('icon/services/3/1.png') }}" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <section>

                <div class="container">
                    <div class="section-content">
                        <div class="row" style="margin-bottom: 75px ;">
                            <div class="col-lg-4">
                                <div class="col-md-12 academy3 m-3"
                                    style="background: #375651;min-height:950px ;padding-top: 50px;">
                                    <img src="{{ asset('icon/N1.png') }}" style="  max-height: 75px;" alt="">
                                    <h2
                                        style="min-height: 130px;
                                padding-top: 25px;
                                font-size: 38px;">
                                        رحلة<br> خسارة الوزن</h2>
                                    <h3 class="Janna"
                                        style="text-align: right;padding: 0 25px;font-size: 18px !important;">
                                        رﺣﻠﺔ اﻟﺘﺨﻠﻲ اﻟﺠﻤﺎﻋﻴﺔ<br><br>
                                        ﺧﺴﺎرة اﻟﻮزن ﻣﻌﺎﻧﺎة ﻳﻮاﺟﻬﻬﺎ اﻟﻜﺜﻴﺮون
                                        .ﻓﻲ ﻋﺼﺮﻧﺎ اﻟﺤﺪﻳﺚ<br><br>
                                        وﻣﺎ ﻻ ﻳﻌﺮﻓﻪ اﻟﻨﺎس، ﻫﻮ أن ﺧﺴﺎرة
                                        اﻟﻮزن ﻋﻤﻠﻴﺔ ﺗﻠﻘﺎﺋﻴﺔ ﺗﺤﺪث ﺣﺎﻟﻤﺎ
                                        ﻳﺘﺨﻠﻰ اﻟﻤﺮء ﻋﻤﺎ ﻳﻨﺒﻐﻲ أن ﻳﻐﺎدر
                                        ﺟﺴﺪه وﻋﻘﻠﻪ<br><br>
                                        رﺣﻠﺔ إﻟﻰ اﻟﺘﺨﻠﻲ ﻋﻦ: <br><br>
                                        اﻷﻃﻌﻤﺔ اﻟﺘﻲ ﺗﺴﺒﺐ اﻻﻟﺘﻬﺎﺑﺎت
                                        اﻟﺪاﺧﻠﻴﺔ<br><br>
                                        اﻟﻬﺮﻣﻮﻧﺎت اﻟﻤﻀﻄﺮﺑﺔ اﻟﻤﺨﺰﻧﺔ ﻓﻲ
                                        اﻟﺠﺴﺪ<br><br>
                                        اﻟﺴﻤﻮم اﻟﻤﺘﺮاﻛﻤﺔ ﻓﻲ اﻷﻧﺴﺠﺔ
                                        اﻟﺪﻫﻨﻴﺔ واﻟﻜﺒﺪ<br><br>
                                        ﻣﺸﺎﻋﺮ اﻟﻄﻔﻮﻟﺔ اﻟﻤﺘﻌﻠﻘﺔ ﺑﺎﻟﺨﻮف
                                        واﻟﺼﺪﻣﺎت ﻏﻴﺮ اﻟﻤﻌﺎﻟَﺠﺔ<br><br>
                                        اﻟﻤﺴﺆوﻟﻴﺎت اﻟﺘﻲ آن أوان ﺗﺴﻠﻴﻤﻬﺎ
                                        ﻷﺷﺨﺎص آﺧﺮﻳﻦ ﻗﺪ ﺗﺨﺼﻬﻢ</h3>
                                </div>
                            </div>
                            <div class="col-lg-4 ">
                                <div class="col-md-12 academy3 m-3"
                                    style="background: #f4a3a5;min-height: 950px ;padding-top: 50px;">

                                    <img src="{{ asset('icon/N2.png') }}" style="  max-height: 75px;" alt="">
                                    <h2
                                        style="min-min-min-height: 130px;
                                padding-top: 25px;
                                font-size: 38px;">
                                        رحلة التوازن ما بين العقل والقلب والجهاز الهضمي</h2>
                                    <h3 class="Janna"
                                        style="text-align: right;padding: 0 25px;font-size: 18px !important;">
                                        ﺑﺮﻧﺎﻣﺞ اﻟﺘﻨﺎﻏﻢ رﺣﻠﺔ ﺷﻔﺎء ﻗﺎﺋﻤﺔ ﻋﻠﻰ
                                        اﻟﻄﺐ اﻟﺸﻤﻮﻟﻲ ﻟﻤﺴﺎﻋﺪة اﻟﻨﺎس ﻋﻠﻰ
                                        ﺗﺤﻘﻴﻖ ﻋﺎﻓﻴﺘﻬﻢ اﻟﺸﻤﻮﻟﻴﺔ ﻣﻦ ﺧﻼل
                                        ﻓﻬﻢ اﻟﻌﻼﻗﺔ ﺑﻴﻦ ﻋﻘﻮﻟﻬﻢ وﻗﻠﻮﺑﻬﻢ
                                        وأﻣﻌﺎﺋﻬﻢ، وذﻟﻚ ﻹﺣﺮاز ﺗﻮازن ﺷﻤﻮﻟﻲ
                                        ﻓﻲ ﻋﺎﻟﻤﻬﻢ، وﺷﻌﻮر ٍ أﻋﻠﻰ ﺑﺎﻟﻌﺎﻓﻴﺔ<br><br>
                                        ﻓﻲ ﻫﺬا اﻟﺒﺮﻧﺎﻣﺞ، ﺳﻨﺴﺨّﺮ اﻟﻌﺪﻳﺪ ﻣﻦ
                                        أدوات اﻟﺤﻜﻤﺔ اﻷﻳﻮرﻓﻴﺪﻳﺔ اﻟﻘﺪﻳﻤﺔ
                                        واﻟﺪﻟﻴﻞ اﻟﻌﻠﻤﻲ اﻟﺤﺪﻳﺚ اﻟﻘﺎﻃﻊ
                                        اﻟﻤﺴﺘﻤﺪ ﻣﻦ اﻟﻄﺐ اﻟﻮﻇﻴﻔﻲ
                                        واﻟﺘﺪﺧﻼت ﻓﻲ أﺳﻠﻮب اﻟﺤﻴﺎة ﻟﻤﺴﺎﻋﺪة
                                        اﻟﻨﺎس ﻋﻠﻰ ﻓﻬﻢ وﺗﻄﺒﻴﻖ اﻟﺨﻄﻮات
                                        اﻟﺘﺤﻮﻳﻠﻴﺔ اﻟﻘﻮﻳﺔ رﻏﻢ ﺑﺴﺎﻃﺘﻬﺎ ﻓﻲ
                                        رﺣﺘﻠﻬﻢ إﻟﻰ اﻟﻌﺎﻓﻴﺔ<br><br>
                                        اﻟﺮﺣﻠﺔ إﻟﻰ اﻟﻌﺎﻓﻴﺔ ﻫﻲ رﺣﻠﺔ إﻟﻰ
                                        اﻟﺘﺤﺎﻟﻒ ﺑﻴﻦ اﻷﻣﻌﺎء واﻟﺪﻣﺎغ واﻟﻘﻠﺐ،
                                        وﻫﺬا اﻟﺘﺤﺎﻟﻒ ﻳﺴﺎﻋﺪ اﻟﻨﺎس ﻓﻲ
                                        اﻟﺘﻮاﺻﻞ ﻣﻊ ذواﺗﻬﻢ ﻋﻠﻰ ﻣﺴﺘﻮى
                                        أﻋﻤﻖ، وﻓﻲ اﻟﺘﻮاﺻﻞ ﻣﻊ اﻟﺤﻴﺎة
                                        واﻟﺘﻨﺎﻏﻢ ﻣﻌﻬﺎ ﺑﺴﻬﻮﻟﺔ
                                    </h3>
                                </div>
                            </div>
                            <div class="col-lg-4 ">
                                <div class="col-md-12 academy3 m-3"
                                    style="background: #f9bb76;min-height: 950px ;padding-top: 50px;">
                                    <img src="{{ asset('icon/N3.png') }}" style="  max-height: 75px;" alt="">
                                    <h2
                                        style="min-min-height: 130px;
                                padding-top: 25px;
                                font-size: 38px;">
                                        رحلة الجمال <br>الذي لا يشيخ</h2>
                                    <h3 class="Janna"
                                        style="text-align: right;padding: 0 25px; font-size: 18px !important;">
                                        رﺣﻠﺔ إﻟﻰ ﺟﻤﺎل أﺑﺪيّ، وﺑﻬﺎء ﻣﺸﻊ،
                                        .وﺣﻴﺎة ﺳﺤﺮﻳﺔ<br><br>
                                        ﺗﻮاﺻﻠﻲ ﻣﻊ ﺟﻮﻫﺮك اﻷﻧﺜﻮي<br><br>
                                        ﺗﻨﺎﻏﻤﻲ ﻣﻊ ﻓﺼﻮﻟﻚ<br><br>
                                        ﺳﻴﺰﻫﺮ وﺟﻮدك<br><br>
                                        ًوﻳﺸﻊ ّ ﺟﻤﺎﻟﻚ<br><br>

                                    </h3>
                                    <h3 class="Janna"
                                        style="font-size: 42px;
                            margin-top: 50px;">قريبـــاً
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="justify-content: center">
                            <img src="{{ asset('icon/services/services/5.png') }}" alt=""
                                style="max-width: 80px">
                        </div>
                    </div>
                </div>
            </section>
        @endif

        @auth
            <section id="service3">
                <div class="container">
                    <div class="section-content">
                        <div class="row">
                            <div class="row">
                                <h3>تقييم الخدمة</h3>
                                <form action="{{ route('services.rating') }}" method="POST">
                                    @csrf
                                    @include('layouts._error')
                                    <input type="hidden" name="service_id" value="{{ $service->id }}">
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                                    <fieldset class="rating2">
                                        <input class="rating2" type="radio" id="star5" name="rating"
                                            value="5" />
                                        <label for="star5">5 stars</label>
                                        <input class="rating2" type="radio" id="star4" name="rating"
                                            value="4" />
                                        <label for="star4">4 stars</label>
                                        <input class="rating2" type="radio" id="star3" name="rating"
                                            value="3" />
                                        <label for="star3">3 stars</label>
                                        <input class="rating2" type="radio" id="star2" name="rating"
                                            value="2" />
                                        <label for="star2">2 stars</label>
                                        <input class="rating2" type="radio" id="star1" name="rating"
                                            value="1" />
                                        <label for="star1">1 star</label>
                                    </fieldset>
                                    <textarea name="review" class="form-control">{{ old('review') }}</textarea>

                                    <button type="submit"
                                        class="btn btn-dark btn-theme-colored3 text-uppercase mt-20">إرسال</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endauth
    </div>
    <!-- end main-content -->
@endsection

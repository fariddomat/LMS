@extends('home.layouts._app')
@section('styles')
    <!-- timeline-horizontal-vertical -->
    <link href="{{ asset('home/js/timeline-horizontal-vertical/css/timeline-horizontal-vertical-rtl.css') }}" rel="stylesheet"
        type="text/css">
    <script src="{{ asset('home/js/timeline-horizontal-vertical/js/timeline-horizontal-vertical.min.js') }}"></script>
    <script src="{{ asset('home/js/timeline-horizontal-vertical/js/custom.js') }}"></script>

    <style>
        #above {
            padding-top: 200px
        }

        #tintro {
            padding-right: 100px;
        }

        @media only screen and (max-width: 500px) {
            #above {
                padding-top: 125px
            }

            #tintro {
                padding-right: 10px;
            }

            #container {
                padding-top: 25px !important;
            }

            .col-md-5>img {
                margin-top: 0px !important;
            }

            #goal {
                padding: 15px;
            }

            .imground {
                justify-content: center !important;
                margin-top: 50px !important;
                margin-bottom: 25px !important;
            }

            .afterimg {
                padding-right: 15px !important;
                margin-right: 0px !important;
                margin-bottom: 50px !important;
            }

        }

        @media only screen and (max-width: 770px) {
            .imground {
                justify-content: center !important;
                margin-top: 50px !important;
                margin-bottom: 25px !important;
            }

            .afterimg {
                padding-right: 15px !important;
                margin-right: 0px !important;
                margin-bottom: 50px !important;
            }

        }
        @media only screen and (max-width: 1200px) {

            .floatimg {
                position: static !important;
                margin-top: 50px !important;
            }
        }

        @media only screen and (max-width: 990px) {
            #tintro {
                padding-right: 35px;
            }
        }
    </style>
@endsection
@section('content')
    <!-- Start main-content -->
    <div class="main-content-area">

        <!-- Section: page title -->
        {{-- <section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center"
            data-tm-bg-img="{{ asset('home/images/bg/bg1.jpg') }}?v={{ setting('cover_time') }}" style="margin-top: 95px; background-size: cover;">
            <div class="container pt-50 pb-50">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="title">رحلتي إلى هوليستك</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        <section id="above" style="">
            <section id="welcome" class=" " style="">
                <div id="container" class="container pt-150 pb-50 mb-50"
                    style="  padding-left: 25px;
            padding-right: 25px;background: #f8f4ed">
                    <div class="section-content">
                        <div class="row">
                            <div id="tintro" class="col-md-7" style="">
                                <h2 class="text-theme-colored2">د. ريهـــــام قـــــراش</h2>
                                <img src="{{ asset('icon/tour/about.png') }}" alt="">
                                <div class="">
                                    <a href="{{ route('whoiam') }}" target="_self"
                                        class="btn btn-dark btn-theme-colored2 btn-sm btn-block mt-15 mb-20"> قراءة المزيد
                                    </a>
                                </div>

                            </div>
                            <div class="col-md-5">
                                <img src="{{ asset('dr.webp') }}" alt=""
                                    style="border: 4px solid white; margin-top: -200px;
                           ">
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </section>



        <section id="homeVideo" class="divider parallax pt-50 pb-100" style="justify-content: center; background: #fff">
            <h2 style="  direction: ltr; color:#375651;
            ;
         width: 70%;margin: 45px auto;">رحلـة العافيـة
                الشموليـة
                <span style="  float: right;"><span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span></span>
            </h2>
            <div class="col-md-12 video"
                style=" ;
        padding: 0;
        box-shadow: 5px 10px 10px 7px rgba(0, 0, 0, 0.35);
        -webkit-box-shadow: 5px 10px 10px 7px rgba(0, 0, 0, 0.35);
        -moz-box-shadow: 5px 10px 10px 7px rgba(0, 0, 0, 0.35); width: 70%; text-align:center;margin: 45px auto;">
                {!! setting('who_video') !!}
            </div>
            <div style="direction: ltr;width: 70%;margin: 45px auto;">

                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span></span>
            </div>
        </section>


        <section class=" pt-100 pb-100" style="justify-content: center; text-align: center;background: #ffa0a2; ">
            <h2 style="font-size: 60px;color: #ffece6;">قصتــي</h2>
            <h2 style="font-size: 50px;color: #ffece6;">مابين الطب التقليدي والبديل والتكاملي</h2>
        </section>


        <section class="">
            <div class="container" style="padding-top: 0px; padding-bottom: 0px ;position: relative;
            top: -25px;">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="">
                            <div class="">
                                <div class="timeline__items">
                                    @foreach ($whoiams as $index => $whoiam)
                                        <div class="timeline__item" style="@if($index==8)
                                          margin-top: -50px !important;
                                        @endif">
                                            <div class="timeline__content">
                                                @if ($index == 0)
                                                    <div class="row" style="justify-content: center">
                                                        <img src="{{ asset('icon/tour2/top.png') }}"
                                                            style="max-width: 110px" alt="">
                                                    </div>
                                                @endif
                                                @if ($whoiam->start_date)
                                                    <div
                                                        style="display: flex;
                                                            align-items: center;
                                                            justify-content: center;">
                                                        <h4
                                                            style="background: #ffa0a2;
                                                        padding: 22px;
                                                        border-radius: 50%;
                                                        width: 95px;
                                                        height: 95px;margin-bottom: 0;margin-top: 0px ;color:#fff">
                                                            {{ date('Y', strtotime($whoiam->start_date)) }} -
                                                            {{ date('Y', strtotime($whoiam->end_date)) }}
                                                        </h4>


                                                    </div>
                                                    <div class="row" style="  justify-content: center;">

                                                        <img src="{{ asset('icon/tour/1.png') }}" alt=""
                                                            style="  width: 60px;">
                                                    </div>
                                                @endif
                                                @if ($whoiam->image == null)
                                                    <div class="col-md-12"
                                                        style="background: #375651;padding: 25px 50px; margin-top: 50px;">
                                                        <h4>{{ $whoiam->title }}</h4>
                                                        <p>{!! $whoiam->content !!}</p>
                                                    </div>
                                                @else
                                                    <div class="row">
                                                        @if ($index % 2 == 0)
                                                            @if ($index == 6)
                                                                <div class="row"
                                                                    style="background: #375651; padding-left: 0">
                                                                    <div class="col-md-7" style="  align-self: center;">
                                                                        <h4>{{ $whoiam->title }}</h4>
                                                                        <p>{!! $whoiam->content !!}</p>
                                                                    </div>
                                                                    <div class="col-md-5"
                                                                        style="align-self: center; padding-left: 0">
                                                                        <div class="thumb"
                                                                            style="display: flex;
                                                                    align-items: center;
                                                                    justify-content: center;">
                                                                            <img src="{{ asset($whoiam->image) }}"
                                                                                alt=""
                                                                                style="border: 2px solid #eaeae2;
                                                                    padding: 2px; padding-left: 0; width: 100%">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @elseif ($index == 8)
                                                                <div class="col-md-4" style="  align-self: center;">
                                                                    <h4>{{ $whoiam->title }}</h4>
                                                                    <p>{!! $whoiam->content !!}</p>
                                                                </div>
                                                                <div class="col-md-8" style="align-self: center;">
                                                                    <div class="thumb "
                                                                        style="display: flex;
                                                                    align-items: center;
                                                                    justify-content: center;">
                                                                        <img src="{{ asset($whoiam->image) }}"
                                                                            alt=""
                                                                            style="border: 2px solid #eaeae2;
                                                                    padding: 2px;">
                                                                    </div>
                                                                </div>
                                                            @else
                                                                <div class="col-md-6" style="  align-self: center;">
                                                                    <h4>{{ $whoiam->title }}</h4>
                                                                    <p>{!! $whoiam->content !!}</p>
                                                                </div>
                                                                <div class="col-md-6" style="align-self: center;">
                                                                    <div class="thumb"
                                                                        style="display: flex;
                                                                    align-items: center;
                                                                    justify-content: center;">
                                                                        <img src="{{ asset($whoiam->image) }}"
                                                                            alt=""
                                                                            style="border: 2px solid #eaeae2;
                                                                    padding: 2px;">
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        @else
                                                            @if ($index == 1)
                                                                <div class="col-md-4"
                                                                    style="align-self: center;padding-left: 0px;
                                                                         z-index: 5555;">
                                                                    <div id="" class="thumb imground"
                                                                        style="display: flex;
                                                                            align-items: center;
                                                                            justify-content: left;">
                                                                        @if ($index == 1 || $index == 7 || $index == 9)
                                                                            <img src="{{ asset($whoiam->image) }}"
                                                                                alt=""
                                                                                style="border: 2px solid #eaeae2;
                                                                        padding: 2px;border-radius: 50%;height: 300px;">
                                                                        @else
                                                                            <img src="{{ asset($whoiam->image) }}"
                                                                                alt=""
                                                                                style="height: 250px; border: 2px solid #eaeae2;
                                                                        padding: 2px;">
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8 afterimg"
                                                                    style="align-self: center; padding-right: 0px;
                                                                        margin-right: -35px;
                                                                        z-index: 2;">
                                                                    @if ($index == 1)
                                                                        <div style="padding: 10px">
                                                                            <div class="row"
                                                                                style="background: #375651;padding-right: 35px;">
                                                                                <h4>
                                                                                    {{ $whoiam->title }}
                                                                                </h4>
                                                                                <p>{!! $whoiam->content !!}</p>
                                                                            </div>
                                                                        </div>
                                                                    @else
                                                                        <div class="row">
                                                                            <h4>
                                                                                {{ $whoiam->title }}
                                                                            </h4>
                                                                            <p>{!! $whoiam->content !!}</p>
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            @elseif ($index == 7)
                                                                <div class="row"
                                                                    style="align-self: center;padding-left: 0px;
                                                                         z-index: 5555; text-align: center">
                                                                    <div class="thumb "
                                                                        style="display: flex;
                                                                            align-items: center;
                                                                            justify-content: center;">
                                                                        @if ($index == 1 || $index == 7 || $index == 9)
                                                                            <img src="{{ asset($whoiam->image) }}"
                                                                                alt=""
                                                                                style="border: 2px solid #eaeae2;
                                                                        padding: 2px;border-radius: 50%;height: 300px;">
                                                                        @else
                                                                            <img src="{{ asset($whoiam->image) }}"
                                                                                alt=""
                                                                                style="height: 250px; border: 2px solid #eaeae2;
                                                                        padding: 2px;">
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="row afterimg"
                                                                    style="align-self: center; padding-right: 0px;
                                                                        margin-right: -35px;
                                                                        z-index: 2; text-align: center; justify-content: center">

                                                                    <div class="col-md-5">
                                                                        <h4>
                                                                            {{ $whoiam->title }}
                                                                        </h4>
                                                                        <p>{!! $whoiam->content !!}</p>
                                                                    </div>
                                                                </div>
                                                            @else
                                                                <div class="col-md-6" style="align-self: center;">
                                                                    <div class="thumb"
                                                                        style="display: flex;
                                                                align-items: center;
                                                                justify-content: center;">
                                                                        @if ($index == 9)
                                                                            <img src="{{ asset($whoiam->image) }}"
                                                                                alt=""
                                                                                style="border: 2px solid #eaeae2;
                                                                            padding: 2px;border-radius: 50%;height: 250px; position: relative; top: -80px;left: -120px;" class="floatimg">
                                                                        @else
                                                                            <img src="{{ asset($whoiam->image) }}"
                                                                                alt=""
                                                                                style="height: 250px; border: 2px solid #eaeae2;
                                                                            padding: 2px;">
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6" style="align-self: center;">
                                                                    @if ($index == 1)
                                                                        <div style="padding: 10px">
                                                                            <div class="row"
                                                                                style="background: #375651">
                                                                                <h4>
                                                                                    {{ $whoiam->title }}
                                                                                </h4>
                                                                                <p>{!! $whoiam->content !!}</p>
                                                                            </div>
                                                                        </div>
                                                                    @else
                                                                        <div class="row">
                                                                            <h4>
                                                                                {{ $whoiam->title }}
                                                                            </h4>
                                                                            <p>{!! $whoiam->content !!}</p>
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            @endif
                                                        @endif
                                                    </div>
                                                @endif

                                                @if ($index == 4)
                                                    <div class="row" style="justify-content: center">
                                                        <img src="{{ asset('icon/tour2/lineDot.png') }}"
                                                            style="max-width: 70px" alt="">
                                                    </div>
                                                    <div class="row" style="justify-content: center">
                                                        <img src="{{ asset('icon/tour2/1.png') }}"
                                                            style="max-width: 300px" alt="">
                                                    </div>

                                                    <div class="row" style="justify-content: center">
                                                        <img src="{{ asset('icon/tour2/line.png') }}"
                                                            style="max-width: 70px; max-height: 50px" alt="">
                                                    </div>
                                                @endif
                                                @if ($index == 6)
                                                    <div class="row" style="justify-content: center">
                                                        <img src="{{ asset('icon/tour2/line.png') }}"
                                                            style="max-width: 70px; max-height: 50px" alt="">
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="welcome" class="divider layer-overlay overlay-white-3 parallax">
            <div class="container pt-0 pb-150">
                <div class="section-content">
                    <div class="row" id="goal">
                        <div class="row" style="justify-content: center">
                            <img src="{{ asset('icon/tour/2.png') }}" alt="" style="width: 75px">
                        </div>
                        <div class="col-md-12"
                            style="border: #4a5a73 3px solid;
                    border-radius: 25px;
                    padding: 15px 25px; background: #375651;">
                            <p class="lead text-black">{!! $about->goals !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end main-content -->
@endsection

@extends('home.layouts._app')
@section('styles')
    <!-- timeline-horizontal-vertical -->
    <link href="{{ asset('home/js/timeline-horizontal-vertical/css/timeline-horizontal-vertical-rtl.css') }}" rel="stylesheet"
        type="text/css">
    <script src="{{ asset('home/js/timeline-horizontal-vertical/js/timeline-horizontal-vertical.min.js') }}"></script>
    <script src="{{ asset('home/js/timeline-horizontal-vertical/js/custom.js') }}"></script>
@endsection
@section('content')
    <!-- Start main-content -->
    <div class="main-content-area">

        <!-- Section: page title -->
        <section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center"
            data-tm-bg-img="{{ asset('home/images/bg/bg1.jpg') }}?v={{ setting('cover_time') }}" style="margin-top: 100px; background-size: cover;">
            <div class="container pt-50 pb-50">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="title">من أنا؟</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="welcome" class="divider layer-overlay overlay-white-3 parallax" data-parallax-ratio="0.1"
            data-tm-bg-img="{{ asset('home/images/bg/bg2.jpg') }}">
            <div class="container pt-150 pb-150">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-7">
                            <p class="lead text-black">{!! $about->about_me !!}</p>
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
        <section  class="divider parallax " style="background-color: #202C45; justify-content: center">
            <div class="col-md-12"
            style="margin: 85px;
        padding: 0;
        box-shadow: 5px 10px 10px 7px rgba(0, 0, 0, 0.35);
        -webkit-box-shadow: 5px 10px 10px 7px rgba(0, 0, 0, 0.35);
        -moz-box-shadow: 5px 10px 10px 7px rgba(0, 0, 0, 0.35); width: auto;">
            {!! setting('who_video') !!}
        </div>
        </section>
        <section class="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tm-timeline-horizontal-vertical" data-tm-mode="vertical"
                            data-tm-vertical-start-position="right" data-tm-vertical-trigger="250px">
                            <div class="timeline__wrap">

                                <div class="timeline__items">
                                    @foreach ($whoiams as $whoiam)
                                        <div class="timeline__item">
                                            <div class="timeline__content">
                                                @if ($whoiam->start_date)
                                                    <div
                                                        style="display: flex;
                                            align-items: center;
                                            justify-content: center;">
                                                        <h4>{{ date('Y', strtotime($whoiam->start_date)) }} -
                                                            {{ date('Y', strtotime($whoiam->end_date)) }}</h4>
                                                    </div>
                                                @endif
                                                <div class="thumb"
                                                    style="display: flex;
                                            align-items: center;
                                            justify-content: center;">
                                                    <img src="{{ asset($whoiam->image) }}" alt="">
                                                </div>
                                                <h4>{{ $whoiam->title }}</h4>
                                                <p>{!! $whoiam->content !!}</p>

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

        <section id="welcome" class="divider layer-overlay overlay-white-3 parallax" >
        <div class="container pt-150 pb-150">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12" style="border: #4a5a73 3px solid;
                    border-radius: 25px;
                    padding: 15px 25px;">
                        <p class="lead text-black">{!! $about->goals !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    <!-- end main-content -->
@endsection

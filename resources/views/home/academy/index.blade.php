@extends('home.layouts._app')

@section('content')
    <!-- Start main-content -->
    <div class="main-content-area">
        <!-- Section: page title -->
        <section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center"
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
        </section>

        <!-- Section: about -->
        <section data-tm-bg-img="{{ asset('home/images/pattern/p6.png') }}">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h3 class="text-gray mt-0 mt-sm-30 mb-2">مرحبا بك في</h3>
                        <h2 class="text-theme-colored2 mt-0">{!! $academy->ar_title !!} </h2>
                        <h2 class="text-theme-colored2 mt-0">{!! $academy->en_title !!}</h2>
                        <p class="font-weight-600">{!! $academy->header !!}</p>
                        <p class="mt-20">{!! $academy->about !!}
                        </p>
                    </div>
                    <div class="col-md-4">
                        <div class="row" style="justify-content: center">
                            <img src="{{ asset('logo.webp') }}" style="width: auto" alt="">
                        </div>
                        {{-- <img src="{{ asset('logo-lg.png') }}" alt=""> --}}
                    </div>

                    <div class="col-md-12 text-center">

                        <a class="btn btn-dark btn-theme-colored1 text-uppercase mt-30"
                            href="{{ route('courses.index') }}">الدورات</a>

                        @if (!Auth::user())
                            <a class="btn btn-dark btn-block  btn-theme-colored2 text-uppercase text-white mt-30"
                                href="{{ route('profiles.create') }}">سجل الآن</a>
                        @endif
                    </div>
                    @if (!Auth::user())
                        <div class="col-md-12 text-center">
                            <p style="margin-top: 25px">لديك حساب بالفعل؟</p>

                            <a class="btn btn-dark btn-block   btn-theme-colored3  text-uppercase text-white"
                                href="{{ route('login') }}">دخول</a>
                        </div>
                    @endif
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
              <div class="owl-carousel owl-theme tm-owl-carousel-5col" data-autoplay="true" data-loop="true" data-duration="6000" data-smartspeed="300" data-margin="30" data-stagepadding="0" data-laptop="4">
                <div class="item"> <a target="_blank"> <img src='{{ asset('supporters/1.png') }}' alt='Image' style="height: 120px !important;" /> </a></div>
                <div class="item"> <a target="_blank"> <img src='{{ asset('supporters/2.png') }}' alt='Image' style="height: 120px !important;" /> </a></div>
                <div class="item"> <a target="_blank"> <img src='{{ asset('supporters/3.png') }}' alt='Image' style="height: 120px !important;" /> </a></div>
                <div class="item"> <a target="_blank"> <img src='{{ asset('supporters/4.png') }}' alt='Image' style="height: 120px !important;" /> </a></div>
                <div class="item"> <a target="_blank"> <img src='{{ asset('supporters/5.png') }}' alt='Image' style="height: 120px !important;" /> </a></div>
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
        <div class="row" style="justify-content: center; margin-top:35px">

            <img src="{{ asset('home/images/academy.png') }}" alt="">

        </div>
      </div>
    </div>
  </section>
        <!-- Section: Funfacts -->
        <section class="layer-overlay overlay-theme-colored2-9 bg-no-repeat bg-pos-center-center"
            data-tm-bg-img="{{ asset('home/images/bg/about.jpg') }}">
            <div class="container pt-100 pb-100">
                <div class="section-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-lg-3 col-xl-3">
                                <div class="funfact-item text-center mb-md-60">
                                    <i class="funfact-icon fa fa-user-plus text-theme-colored1"></i>
                                    <h2 data-animation-duration="2000" data-value="{{ $profiles }}"
                                        class="text-white counter animate-number mt-0 mb-10">0</h2>
                                    <p class="text-white title font-weight-600 mb-0">الطلاب</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 col-xl-3">
                                <div class="funfact-item text-center mb-md-60">
                                    <i class="funfact-icon fa fa-indent text-theme-colored1"></i>
                                    <h2 data-animation-duration="2000" data-value="{{ $courses }}"
                                        class="text-white counter animate-number mt-0 mb-10">0</h2>
                                    <p class="text-white title font-weight-600 mb-0">الدورات</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 col-xl-3">
                                <div class="funfact-item text-center mb-sm-60">
                                    <i class="funfact-icon fas fa-list text-theme-colored1"></i>
                                    <h2 data-animation-duration="2000" data-value="{{ $lessons }}"
                                        class="text-white counter animate-number mt-0 mb-10">0</h2>
                                    <p class="text-white title font-weight-600 mb-0">الدروس</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 col-xl-3">
                                <div class="funfact-item text-center">
                                    <i class="fa fa-quote-right funfact-icon text-theme-colored1"></i>
                                    <h2 data-animation-duration="2000" data-value="{{ $services_count->count() }}"
                                        class="text-white counter animate-number mt-0 mb-10">0</h2>
                                    <p class="text-white title font-weight-600 mb-0">الخدمات</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: About -->
        <section class="z-index-1" data-tm-bg-img="{{ asset('home/images/pattern/p6.png') }}">
            <div class="container">
                <div class="section-content">

                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="title text-theme-colored2 mt-0 mb-20">أكاديمية هوليستك لتدريب مدربين العافية الشمولية
                            </h2>
                            <div class="row">
                                <div class="col-md-12" style="padding: 0 75px">
                                    {!! $academy->content !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="title text-left text-theme-colored2 mt-0">من نحن</h3>
                                    {!! $academy->who_are_we !!}
                                </div>
                                <div class="col-md-6"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"></div>
                                <div class="col-md-6">
                                    <h3 class="title text-left text-theme-colored2 mt-0">فلسفتنا</h3>
                                    {!! $academy->phylosofy !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="title text-left text-theme-colored2 mt-0">رؤيتنا</h3>
                                    {!! $academy->vision !!}
                                </div>
                                <div class="col-md-6"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"></div>
                                <div class="col-md-6">
                                    <h3 class="title text-left text-theme-colored2 mt-0">رسالتنا</h3>
                                    {!! $academy->message !!}
                                </div>
                            </div>
                            <hr>
                            <div class="row mt-20">
                                <div class="col-md-12">
                                    <h3 class="title text-theme-colored2 mt-0">من هو مدرب العافية الشمولية</h3>
                                    {!! $academy->how_is !!}
                                </div>
                            </div>
                            <hr>
                            <div class="row mt-20">
                                <div class="col-md-12">
                                    <h3 class="title text-left  text-theme-colored2 mt-0">أهداف الأكاديمية</h3>
                                    {!! $academy->goals !!}
                                </div>
                            </div>

                            <hr>
                            <div class="row mt-20">
                                <div class="col-md-12">
                                    <h3 class="title text-left  text-theme-colored2 mt-0">أساسيات المنهج</h3>
                                    {!! $academy->essential !!}
                                </div>
                            </div>
                            <hr>
                            <div class="row mt-20">
                                <div class="col-md-12">
                                    <h3 class="title text-left  text-theme-colored2 mt-0">طريقة التعليم</h3>
                                    {!! $academy->education_way !!}
                                </div>
                            </div>
                            <hr>
                            <div class="row mt-20">
                                <div class="col-md-12">
                                    <h3 class="title text-left  text-theme-colored2 mt-0">مدة الدراسة </h3>
                                    {!! $academy->education_period !!}
                                </div>
                            </div>
                            <hr>
                            <div class="row mt-20">
                                <div class="col-md-12">
                                    <h3 class="title text-left  text-theme-colored2 mt-0">شروط التخرج</h3>
                                    {!! $academy->graduation_condition !!}
                                </div>
                            </div>
                            <hr>
                            <div class="row mt-20">
                                <div class="col-md-12">
                                    <h3 class="title text-left  text-theme-colored2 mt-0">شروط القبول </h3>
                                    {!! $academy->accept_condition !!}
                                </div>
                            </div>
                            <hr>
                            <div class="row mt-20">
                                <div class="col-md-12">
                                    <h3 class="title text-left  text-theme-colored2 mt-0">رسوم الدراسة </h3>
                                    {!! $academy->education_fee !!}
                                </div>
                            </div>
                                <!-- Section: Staff -->

                            <hr>
                            {!! $academy->footer !!}
                            <a class="btn btn-dark btn-theme-colored1 text-uppercase mt-30"
                                href="{{ route('courses.index') }}">الدورات</a>
                                @if (!Auth::user())
                                <a class="btn btn-dark btn-block  btn-theme-colored2 text-uppercase text-white mt-30"
                                href="{{ route('profiles.create') }}">سجل الآن</a>
                                @endif

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="divider parallax layer-overlay overlay-white-4" data-parallax-ratio="0.1"
        data-tm-bg-img="{{ asset('home/images/bg/trainers.jpg') }}">
            <div class="container">
                <div class="section-title">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="mb-60">
                                <div class="tm-sc tm-sc-section-title section-title">
                                    <div class="title-wrapper">
                                        <h2 class="text-uppercase line-bottom line-bottom-theme-colored1">أعضاء  <span
                                                class="text-theme-colored1">هيئة التدريس </span></h2>
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

    </div>
    <!-- end main-content -->
@endsection

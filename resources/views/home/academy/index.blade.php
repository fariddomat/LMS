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
                            <h2 class="title">الأكاديمية</h2>

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
                        <h2 class="text-theme-colored2 mt-0">أكاديمية العافية الشمولية </h2>
                        <h2 class="text-theme-colored2 mt-0">Holistic Wellness Coaching Academy</h2>
                        <p class="font-weight-600">يسعدنا الإعلان عن أكاديمية هوليستك</p>
                        <p class="mt-20">أول أكاديمية لتدريب مختصين في العافية الشمولية وجودة الحياة باللغة العربية ومعتمدة
                            .
                            <br>
                            يسعدنا الآن توفير بعض التفاصيل التي تهمكم لبدء رحلتكم كمدربين في العافية الشمولية ✍🏻
                        </p>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('logo-lg.png') }}" alt="">
                    </div>
                    <div class="col-md-12 text-center">

                    <a class="btn btn-dark btn-theme-colored1 text-uppercase mt-30"
                    href="{{ route('courses.index') }}">الدورات</a>
                <a class="btn btn-dark btn-block  btn-theme-colored2 text-uppercase text-white mt-30"
                    href="{{ route('profiles.create') }}">سجل الآن</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Funfacts -->
        <section class="layer-overlay overlay-theme-colored2-9 bg-no-repeat bg-pos-center-center"
            data-tm-bg-img="{{ asset('home/images/bg/bg2.jpg') }}">
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
                            <p class="mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam modi
                                consequuntur maxime voluptates earum illo sunt, veritatis maiores doloribus ut id, nostrum.
                                Temporibus odit quas illum eos dolores itaque facilis omnis beatae saepe eum. Odit labore
                                vel temporibus quasi.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam modi consequuntur maxime
                                voluptates earum illo sunt, veritatis maiores doloribus ut id, nostrum. Temporibus odit quas
                                illum eos dolores itaque facilis omnis beatae saepe eum. Odit labore vel temporibus.</p>
                            <a class="btn btn-dark btn-theme-colored1 text-uppercase mt-30"
                                href="{{ route('courses.index') }}">الدورات</a>
                            <a class="btn btn-dark btn-block  btn-theme-colored2 text-uppercase text-white mt-30"
                                href="{{ route('profiles.create') }}">سجل الآن</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
    <!-- end main-content -->
@endsection

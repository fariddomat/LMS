@extends('home.layouts._app')

@section('content')
    <!-- Start main-content -->
    <div class="main-content">


        <!-- Section: Experts Details -->
        <section style="margin-top: 50px">
            <div class="container">
                <div class="section-content">
                    <div class="row justify-content-md-center">
                        <div class="col-md-8">

                            <h4 class="line-bottom">الملف الشخصي:</h4>
                            @if ($profile->status == 'pending')
                            <div class="bg-success text-white d-flex border-bottom p-15 mb-20">
                                <div class="flex-shrink-0">
                                    <i class="pe-7s-lock text-theme-colored font-size-24 mt-1 me-3"></i>
                                </div>
                                <div class="flex-shrink-1">
                                    <p>أكمل إعداد ملفك الشخصي بتسديد رسوم الحساب والتي قدرها 800 ريال</p>
                                    <form action="{{ route('tap.payment') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-light">تسديد الآن</button>
                                    </form>
                                </div>
                            </div>
                            @elseif ($profile->status=='paid')
                            <div class="bg-success text-white d-flex border-bottom p-15 mb-20 pt-30">
                                <div class="flex-shrink-0">
                                    <i class="pe-7s-book text-theme-colored font-size-24 mt-1 me-3"></i>
                                </div>
                                <div class="flex-shrink-1">
                                    <p>سنقوم بدراسة طلبك الآن، شكرا لتأكيد التسجيل</p>

                                </div>
                            </div>
                            @endif
                            <h3 class="mt-0">الاسم بالكامل: {{ $profile->full_name }}</h3>
                            <div class="bg-light d-flex border-bottom p-15 mb-20">
                                <div class="flex-shrink-0">
                                    <i class="pe-7s-pen text-theme-colored font-size-24 mt-1 me-3"></i>
                                </div>
                                <div class="flex-shrink-1">
                                    <h5 class="mt-0 mb-0">معلومات عني:</h5>
                                    <p>{{ $profile->about }}</p>
                                </div>
                            </div>
                            <div class="bg-light d-flex border-bottom p-15 mb-20">
                                <div class="flex-shrink-0">
                                    <i class="fa fa-phone text-theme-colored font-size-24 mt-1 me-3"></i>
                                </div>
                                <div class="flex-shrink-1">
                                    <h5 class="mt-0 mb-0">معلومات التواصل:</h5>
                                    <p><span>الجوال:</span> <a
                                            href="tel:+{{ $profile->mobile }}">{{ $profile->mobile }}</a><br><span>البريد
                                            الإلكتروني:</span> <a
                                            href="mailto:{{ $profile->email }}">{{ $profile->email }}</a></p>
                                </div>
                            </div>

                            <div class="bg-light d-flex border-bottom p-15 mb-20">
                                <div class="flex-shrink-0">
                                    <i class="fa fa-map-marker text-theme-colored font-size-24 mt-1 me-3"></i>
                                </div>
                                <div class="flex-shrink-1">
                                    <h5 class="mt-0 mb-0">العنوان:</h5>
                                    <p>{{ $profile->address }}</p>
                                </div>
                            </div>
                            <ul class="styled-icons icon-dark icon-theme-colored2 icon-circled icon-sm">
                                <li><a class="styled-icons-item" target="_blank" href="#"><i
                                            class="fab fa-facebook"></i></a></li>
                                <li><a class="styled-icons-item" target="_blank" href="#"><i
                                            class="fab fa-instagram"></i></a></li>
                                <li><a class="styled-icons-item" target="_blank" href="#"><i
                                            class="fab fa-linkedin"></i></a></li>
                                <li><a class="styled-icons-item" target="_blank" href="#"><i
                                            class="fab fa-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- end main-content -->
@endsection

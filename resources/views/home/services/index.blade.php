@extends('home.layouts._app')

@section('content')
    <!-- Start main-content -->
    <div class="main-content-area">
        <!-- Section: page title -->
        <section class="page-title pt-50" style="background: #375651">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <img src="{{ asset('icon/services/services/1.png') }}" alt="" style="max-width: 115px;">
                            <h2 class="title" style="font-size: 64px;
                            color: #e0e1da;">الخدمــات</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Services -->
        <section id="services" class="" style="background: #fef6ec">
            <div class="container">
                <div class="section-content">
                    <div class="row" style="justify-content: center">
                    <img src="{{ asset('icon/services/services/6.png') }}" alt="" style="  max-width: 100px;
                    margin-bottom: 50px;">
                    </div>
                    <div class="row">
                        @foreach ($services as $index=>$service)

                        <div class="col-md-6 col-lg-6 col-xl-4">
                            <div class="tm-sc-services services-style-current-theme5" style="background: #fff">
                                <div class="tm-service" style="border: unset;">
                                    <div class="content" style="  min-height: 350px;">
                                        <h2 style="color: #375651;">{{ $index+1 }}</h2>
                                        <h4 class="mt-0 mb-15" style="font-size: 40px; color: #375651;"><b>{{ $service->title }}</b></h4>
                                        @if ($service->id != 3)

                                        <p style="font-family: 'Janna'; color: #375651;">
                                            @if ($service->price > 0)
                                            سعر الخدمة: {{ $service->price }} SAR
                                            @else
                                            <br>
                                            @endif
                                        </p>
                                        @endif
                                        <a href="{{ route('services.show', $service->title) }}" target="_self"
                                            class="btn btn-dark btn-theme-colored2 btn-sm btn-block mt-15 mb-20" style="color: #375651;font-family: 'Janna'"> قراءة المزيد عن الخدمة </a>
                                    </div>
                                    <div class="thumb">
                                        <img src="{{ $service->image_path }}" alt="image">
                                        {{-- <a href="{{ route('services.show', $service->title) }}" class="icon bg-theme-colored1"><i
                                                class="fa fa-plus-square"></i></a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="row" style="justify-content: center">
                <img src="{{ asset('icon/services/services/5.png') }}" alt="" style="max-width: 80px"></div>
        </section>
        <!-- End Divider -->
    </div>
    <!-- end main-content -->
@endsection

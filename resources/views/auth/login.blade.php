@extends('home.layouts._app')

@section('content')
    <!-- Start main-content -->
    <div class="main-content">


        <section>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-md-push-3">
                        <form name="reg-form" class="register-form" method="post" action="{{ route('login') }}">
                            @csrf
                            <div class="icon-box mb-0 p-0">
                                <a href="#" class="icon icon-bordered icon-rounded icon-sm pull-left mb-0 mr-10">
                                    <i class="pe-7s-users"></i>
                                </a>
                                <h4 class="text-gray pt-10 mt-0 mb-30">تسجيل الدخول</h4>
                            </div>
                            <hr>
                            <p class="text-gray">أدخل معلوماتك الشخصية للوصول إلى حسابك الشخصي.</p>

                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="email" class="">البريد الالكتروني</label>

                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="password" class="">كلمة السر</label>

                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-dark btn-block mt-15" type="submit">دخول</button>
                            </div>


                    <div class="col-md-12">
                        <p style="margin-top: 25px">ليس لديك حساب بعد؟</p>

                                <a class="btn btn-dark btn-block   btn-theme-colored3  text-uppercase text-white"
                                href="{{ route('profiles.create') }}">إنشاء حساب</a>
                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end main-content -->
@endsection

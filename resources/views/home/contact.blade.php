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
                              <h2 class="title">اتصل بنا</h2>

                          </div>
                      </div>
                  </div>
              </div>
          </section>

          <!-- Divider: Contact -->
          <section class="divider">
              <div class="container pb-70">
                  <div class="row">
                      <div class="col-lg-5 mb-30">
                          <img class="img-fullwidth mb-30" src="{{ asset('home/images/bg/bg1.jpg') }}" alt="images">
                          <p>{{setting('site_about')}}</p>
                          <div class="tm-sc-unordered-list list-style2">
                              <ul>
                                  <li><strong>رقم الهاتف:</strong> <a href="tel:{{setting('site_phone')}}">{{setting('site_phone')}}</a></li>
                                  <li><strong>البريد الالكتروني:</strong> <a
                                          href="mailto:{{setting('site_email')}}">{{setting('site_email')}}</a></li>
                                  <li><strong>الموضوع:</strong>{{setting('site_address')}}A</li>
                              </ul>
                          </div>
                          <ul class="styled-icons icon-dark icon-sm icon-circled mt-30">
                              <li><a href="#" data-tm-bg-color="#3B5998"><i class="fab fa-facebook"></i></a></li>
                              <li><a href="#" data-tm-bg-color="#02B0E8"><i class="fab fa-twitter"></i></a></li>
                              <li><a href="#" data-tm-bg-color="#4C75A3"><i class="fab fa-vk"></i></a></li>
                              <li><a href="#" data-tm-bg-color="#D9CCB9"><i class="fab fa-instagram"></i></a></li>
                              <li><a href="#" data-tm-bg-color="#D71619"><i class="fab fa-google-plus"></i></a></li>
                              <li><a href="#" data-tm-bg-color="#A4CA39"><i class="fab fa-android"></i></a></li>
                              <li><a href="#" data-tm-bg-color="#4C75A3"><i class="fab fa-vk"></i></a></li>
                          </ul>
                      </div>
                      <div class="col-lg-7">
                          <h2 class="mt-0 mb-0">هل ترغب بالاستفسار عن شيء؟</h2>
                          <p class="font-size-20">تواصل معنا مباشرة!</p>

                          <!-- Google reCAPTCHA -->
                          {{-- <script src="https://www.google.com/recaptcha/api.js"></script> --}}

                          <!-- Contact Form -->
                          <form id="contact_form" name="contact_form" class=""
                              action="{{ route('contact') }}" method="post">
                              @csrf
                              <div class="row">
                                @include('layouts._error')
                              </div>
                              <div class="row">
                                  <div class="col-sm-6">
                                      <div class="mb-3">
                                          <label>الاسم <small>*</small></label>
                                          <input name="name" value="{{ old('name') }}" class="form-control" type="text"
                                              placeholder="ادخل اسمك بالكامل">
                                      </div>
                                  </div>
                                  <div class="col-sm-6">
                                      <div class="mb-3">
                                          <label>البريد الالكتروني <small>*</small></label>
                                          <input name="email"  value="{{ old('email') }}"  class="form-control required email" type="email"
                                              placeholder="ادخل بريدك الالكرتوني">
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-sm-6">
                                      <div class="mb-3">
                                          <label>عنوان الرسالة </label>
                                          <input name="subject"  value="{{ old('subject') }}"  class="form-control required" type="text"
                                              placeholder="أدخل العنوان">
                                      </div>
                                  </div>
                                  <div class="col-sm-6">
                                      <div class="mb-3">
                                          <label>رقم الهاتف  <small>*</small></label>
                                          <input name="mobile"  value="{{ old('mobile') }}"  class="form-control" type="text"
                                              placeholder="أدخل رقم الهاتف">
                                      </div>
                                  </div>
                              </div>

                              <div class="mb-3">
                                  <label>الرسالة <small>*</small></label>
                                  <textarea name="message" class="form-control required" rows="5" placeholder="أدخل رسالتك هنا">{{ old('message') }}</textarea>
                              </div>
                              <div class="mb-3">
                                  {{-- <div class="g-recaptcha" data-sitekey="6LcFfhAUAAAAAM-OQbebKGpCxrT_-xkr_rEVXCfu"></div> --}}
                              </div>
                              <div class="mb-3">
                                  {{-- <input name="form_botcheck" class="form-control" type="hidden" value="" /> --}}
                                  <button type="submit"
                                      class="btn btn-flat btn-theme-colored1 text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px"
                                      data-loading-text="Please wait...">إرسال</button>

                              </div>
                          </form>



                      </div>
                  </div>
              </div>
          </section>

      </div>
      <!-- end main-content -->
  @endsection

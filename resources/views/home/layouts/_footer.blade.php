 <!-- Footer -->
 <footer id="footer" class="footer layer-overlay" >
    <div class="footer-widget-area">
        <div class="container pt-90 pb-60">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="tm-widget-contact-info contact-info-style1 contact-icon-theme-colored1">
                        <div class="thumb">
                            <img alt="Logo" src="{{ asset('logo-lg.png') }}">
                        </div>
                        <div class="description">{!! setting('site_about') !!}</div>
                    </div>
                    <ul class="styled-icons icon-dark icon-theme-colored1 icon-rounded clearfix">

                    </ul>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="widget widget_nav_menu">
                        <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">خدماتنا</h4>
                        <ul>
                            @foreach ($services_count as $service)

                            <li><a href="{{ route('services.show', $service->title) }}">{{ $service->title }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="widget">
                        <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">الدورات التدريبية
                        </h4>
                        <div class="opening-hours border-dark">
                            <ul>

                            @foreach ($courses_count as $course)

                            <li><a href="{{ route('courses.show', $course->title) }}">{{ $course->title }}</a></li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom" data-tm-bg-color="#FEF6EC">
            <div class="container">
                <div class="row pt-20 pb-20">
                    <div class="col-sm-6">
                        <div class="footer-paragraph">
                            © 2023. All Rights Reserved.
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="footer-paragraph text-right">
                            By <a href="https://Joudtech.sa/">Joudtech</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="{{ asset('home/js/custom.js') }}"></script>


<script></script>
<script id="dsq-count-scr" src="//holistichealth-sa.disqus.com/count.js" async></script>
     @extends('layouts._noty')
@stack('scripts')

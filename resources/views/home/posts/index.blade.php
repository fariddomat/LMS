@extends('home.layouts._app')

@section('styles')
    <style>
        .postt {
            background: #fff9f3de;
            padding: 75px;
            margin-bottom: 50px;
        }

        @media only screen and (max-width: 990px) {
            h2.text-theme-colored2 {
                color: #EAA2A1 !important;
                font-size: 42px !important;
            }

            .postt {
                padding: 75px 5px;
            }

            .post-btn-readmore {
                margin-bottom: 28px;
            }

            .post-btn-readmore.btn {
                margin-top: 0 !important;
            }

            .entry-content {
                padding: 0 15px !important;
            }

        }
    </style>
@endsection
@section('content')
    <!-- Start main-content -->
    <div class="main-content-area">

        <!-- Section: page title -->
        <section class="page-title " style="margin-top: 95px; background-size: cover;">
            <div class="container pt-50 pb-0">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12">

                            <h2 class="text-theme-colored2" style="  font-size: 64px;">
                                <img src="{{ asset('icon/blog/1.png') }}" alt=""
                                    style="  height: 75px;
                                margin-top: -33px;">
                                المدونــة
                                <img src="{{ asset('icon/blog/2.png') }}" alt=""
                                    style="  height: 100px;
                                margin-right: -15px;">
                            </h2>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class=" bg-img-center parallax" data-tm-bg-img="{{ asset('icon/blog/bg.jpg') }}"
            style="background-size: cover;">
            <div class="container">
                <div class="">
                    <!-- Isotope Gallery Grid -->
                    <div class=" clearfix">
                        <div class="">
                            {{-- integrateive --}}
                            <div class="postt">
                                <div class=" col-md-12">
                                    <div class="row">
                                        <div class="col-md-6 text-theme-colored1">
                                            <div class="entry-content" style="  padding: 0 35px;">
                                                <h2 class="text-theme-colored1"><a href="{{ route('integrativeMedicine') }}"
                                                        rel="bookmark" class="text-theme-colored1"
                                                        style="color: #375651 !important; font-size: 42px;">الطب الشمولي</a>
                                                </h2>

                                                <img src="{{ asset('icon/blog/4.png') }}"
                                                    style="height: 10px;margin: 25px 0;" alt="">
                                                <div class="">
                                                    <div>
                                                        <h5 class="text-theme-colored1" style="color: #375651 !important;">
                                                            اﺣﺘﺮم ﺟﺴﺪك ﻟﻴﺤﺘﺮﻣﻚ، واﻓﻬﻤﻪ ﻟﻴﻔﻬﻤﻚ" ، ﺑﻬﺬه ﻟﻌﺒﺎرة
                                                            ﻳﻠﺨﺺ ﺳﻘﺮاط، اﻟﻔﻴﻠﺴﻮف واﻟﺤﻜﻴﻢ اﻟﻴﻮﻧﺎﻧﻲ، ﻓﻜﺮة اﻟﻄﺐ
                                                            اﻟﺸﻤﻮﻟﻲ، وﻳﺸﻴﺮ إﻟﻰ ﻗﺪرة أﺟﺴﺎدﻧﺎ اﻟﻬﺎﺋﻠﺔ ﻋﻠﻰ ﺷﻔﺎء
                                                            ﻧﻔﺴﻬﺎ، وﻟﻜﻨﻨﺎ ﻓﻲ ﻛﺜﻴﺮ ﻣﻦ اﻟﻤﺮات، ﻧﻘﻒ ﻓﻲ وﺟﻬﻬﺎ
                                                            وﻧﻤﻨﻌﻬﺎ ﻣﻦ ﻣﻤﺎرﺳﺔ ﻣﻨﺎﻋﺘﻬﺎ وﻗﺪراﺗﻬﺎ اﻟﻜﺎﻣﻨﺔ. وذﻟﻚ
                                                            ﺑﺘﺮﻛﻴﺰﻧﺎ ﻋﻠﻰ اﻟﻄﺐ اﻟﺘﻘﻠﻴﺪي واﻟﻌﻘﺎﻗﻴﺮ اﻟﺘﻲ ﺗﻨﺎﻣﻰ ﺳﻮﻗﻬﺎ
                                                            ﻓﻲ اﻟﻌﻘﺪﻳﻦ اﻷﺧﻴﺮﻳﻦ ﺑﺸﻜﻞ ﻣﺮﻋﺐ، إﻻ أﻧﻪ ﻣﻦ ﺣﺴﻦ اﻟﺤﻆ،
                                                            ازداد ﺑﺎﻟﻤﻘﺎﺑﻞ ﻋﺪد اﻷﺷﺨﺎص اﻟﺬﻳﻦ ﻳﺮﻏﺒﻮن ﺑﺮﺣﻠﺔ ﺷﻔﺎء
                                                            .ﻛﺎﻣﻠﺔ ﻟﻠﺠﺴﺪ واﻟﺮوح واﻟﻌﻘﻞ، رﺣﻠﺔ ﺷﻔﺎء ﻣﺴﺘﺪاﻣﺔ وراﺳﺨﺔ</h5>
                                                    </div>
                                                </div>
                                                <div class="post-btn-readmore"> <a href="{{ route('integrativeMedicine') }}"
                                                        class="btn  btn-dark btn-block    btn-theme-colored2  text-uppercase mt-30"
                                                        style="color: #375651 !important;">قراءة المزيد </a>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="entry-header">
                                                <div class="post-thumb lightgallery-lightbox">
                                                    <div class="post-thumb-inner">
                                                        <div class="thumb">
                                                            <span class="badge"
                                                                style="position: absolute;
                                                top: 0;
                                                right: 0;
                                                z-index: 100;"><i
                                                                    class="fas fa-thumbtack"
                                                                    style="font-size: 25px;
                                                        padding-top: 15px;
                                                        padding-right: 15px;"></i></span>
                                                            <img src="{{ asset('icon/blog/post.jpg') }}" alt="Image" />
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            @foreach ($posts as $post)
                                <!-- Isotope Item Start -->
                                <div class="postt">
                                    <div class=" col-md-12">
                                        <div class="row">
                                            <div class="col-md-6 text-theme-colored1">
                                                <div class="entry-content" style="  padding: 0 35px;">
                                                    <h2 class="text-theme-colored1"><a
                                                            href="{{ route('posts.show', $post->slug) }}" rel="bookmark"
                                                            class="text-theme-colored1"
                                                            style="color: #375651 !important; font-size: 42px;">{{ $post->title }}</a>
                                                    </h2>
                                                    <div class="entry-meta mt-0 mb-0">
                                                        <span class="mb-10 text-gray-darkgray mr-0 font-size-13"><i
                                                                class="far fa-calendar-alt mr-0 text-theme-colored1"></i>
                                                            {{ $post->created_at->diffForHumans() }}</span>
                                                        <span class="mb-10 text-gray-darkgray mr-10 font-size-13"><i
                                                                class="far fa-user mr-10 text-theme-colored1"></i>
                                                            {{ $post->author_name }}</span>
                                                    </div>

                                                    <img src="{{ asset('icon/blog/4.png') }}"
                                                        style="height: 10px;margin: 25px 0;" alt="">

                                                    <div class="">
                                                        <div>
                                                            <h5 class="text-theme-colored1"
                                                                style="color: #375651 !important;">
                                                                {!! $post->description !!}</h5>
                                                        </div>
                                                    </div>
                                                    <div class="post-btn-readmore"> <a
                                                            href="{{ route('integrativeMedicine') }}"
                                                            class="btn  btn-dark btn-block    btn-theme-colored2  text-uppercase mt-30"
                                                            style="color: #375651 !important;">قراءة المزيد </a>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="entry-header">
                                                    <div class="post-thumb lightgallery-lightbox">
                                                        <div class="post-thumb-inner">
                                                            <div class="thumb">
                                                                <span class="badge"
                                                                    style="position: absolute;
                                                    top: 0;
                                                    right: 0;
                                                    z-index: 100;"><i
                                                                        class="fas fa-thumbtack"
                                                                        style="font-size: 25px;
                                                            padding-top: 15px;
                                                            padding-right: 15px;"></i></span>
                                                                <img src="{{ $post->image_path }}" alt="Image" />
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
                        <div class="row">
                            <div class="col-md-12 text-center">
                                {{ $posts->links() }}
                            </div>
                        </div>
                    </div>
                    <!-- End Isotope Gallery Grid -->
                </div>
            </div>
            <div class="row" style="justify-content: center">
                <img src="{{ asset('icon/blog/3.png') }}" alt=""
                    style="  width: 80px;
                margin-top: -80px;">
            </div>
        </section>
    </div>
    <!-- end main-content -->
@endsection

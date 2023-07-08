@extends('home.layouts._app')
@section('styles')
    <script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>

    <style>
        #canvas-container {
            position: relative;
            display: inline-block;
        }

        #canvas {
            display: block;
        }

        #video-controls {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px;
        }

        #video-controls i {
            font-size: 24px;
            color: #333;
            cursor: pointer;
            margin: 0 10px;
        }

        #progress-bar {
            flex-grow: 1;
            background-color: #ccc;
            height: 5px;
            margin: 0 10px;
            position: relative;
            cursor: pointer;
        }

        #progress-bar .progress {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            background-color: #4CAF50;
            width: 0;
        }

        #volume-control {
            display: flex;
            align-items: center;
            margin-left: 10px;
        }

        #volume-control i {
            font-size: 18px;
            color: #333;
            cursor: pointer;
            margin-right: 5px;
        }

        #volume-control input[type="range"] {
            width: 80px;
        }
    </style>
@endsection
@push('scripts')
    <script src="{{ asset('home/playerjs.js') }}"></script>
    <script>
        // var player = new Playerjs({id:"player", file:"/lessons/video/{{ $lesson->id }}"});
    </script>
    <script>
        document.addEventListener("contextmenu", (event) => {
            event.preventDefault();
        });
    </script>

    <script>
   // Get the video element, canvas element, and icons
const video = document.getElementById('video');
const canvas = document.getElementById('canvas');
const playIcon = document.getElementById('play-icon');
const pauseIcon = document.getElementById('pause-icon');
const backwardIcon = document.getElementById('backward-icon');
const forwardIcon = document.getElementById('forward-icon');
const progressBar = document.getElementById('progress-bar');
const progress = document.querySelector('#progress-bar .progress');
const volumeIcon = document.getElementById('volume-icon');
const volumeRange = document.getElementById('volume-range');
const ctx = canvas.getContext('2d');

let isPlaying = false;

// When the video is loaded, render the first frame and set up event listeners
video.addEventListener('loadeddata', () => {
    // Set the canvas size to match the video dimensions
    canvas.width = video.videoWidth;
    canvas.height = video.videoHeight;

    // Render the first frame on the canvas
    render();

    // Set up event listeners
    playIcon.addEventListener('click', playVideo);
    pauseIcon.addEventListener('click', pauseVideo);
    backwardIcon.addEventListener('click', seekBackward);
    forwardIcon.addEventListener('click', seekForward);
    progressBar.addEventListener('click', seekProgress);
    volumeIcon.addEventListener('click', toggleMute);
    volumeRange.addEventListener('input', changeVolume);
});

// Play video function
function playVideo() {
    isPlaying = true;
    video.play();
    playIcon.style.display = 'none';
    pauseIcon.style.display = 'block';
    render();
}

// Pause video function
function pauseVideo() {
    isPlaying = false;
    video.pause();
    playIcon.style.display = 'block';
    pauseIcon.style.display = 'none';
}

// Seek backward function
function seekBackward() {
    video.currentTime -= 5; // Adjust the time as needed
}

// Seek forward function
function seekForward() {
    video.currentTime += 5; // Adjust the time as needed
}

// Seek progress function
function seekProgress(event) {
    const progressWidth = progressBar.clientWidth;
    const clickX = event.offsetX;
    const seekTime = (clickX / progressWidth) * video.duration;
    video.currentTime = seekTime;
}

// Toggle mute function
function toggleMute() {
    video.muted = !video.muted;
    updateVolumeIcon();
}

// Change volume function
function changeVolume() {
    video.volume = volumeRange.value;
    updateVolumeIcon();
}

// Update volume icon based on muted and volume values
function updateVolumeIcon() {
    if (video.muted || video.volume === 0) {
        volumeIcon.classList.remove('fa-volume-up');
        volumeIcon.classList.add('fa-volume-mute');
    } else {
        volumeIcon.classList.remove('fa-volume-mute');
        volumeIcon.classList.add('fa-volume-up');
    }
}

// Render function to draw frames on the canvas
function render() {
    if (isPlaying) {
        // Draw the current frame of the video on the canvas
        ctx.drawImage(video, 0, 0, canvas.width, canvas.height);
        updateProgressBar();
        requestAnimationFrame(render);
    }
}

// Update progress bar based on current video time
function updateProgressBar() {
    const progressWidth = (video.currentTime / video.duration) * 100;
    progress.style.width = `${progressWidth}%`;
}

    </script>
@endpush
@section('content')
    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: page title -->
        <section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center"
            data-tm-bg-img="{{ asset('home/images/bg/bg1.jpg') }}?v={{ setting('cover_time') }}"
            style="margin-top: 95px; background-size: cover;">
            <div class="container pt-50 pb-50">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="title">{{ $lesson->title }}</h2>
                            <nav class="breadcrumbs" role="navigation" aria-label="Breadcrumbs">
                                <div class="breadcrumbs">
                                    <span class="active">{{ $lesson->title }}</span>
                                    <span><i class="fa fa-angle-right"></i></span>
                                    <span><a href="{{ route('home') }}" rel="home">الرئيسية</a></span>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Course -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="order-2 col-md-8 blog-float-end">
                        <div class="single-service">
                            {{-- <video src="{{ $lesson->video }}" style="width: 100%;"></video> --}}
                            <div id="player"></div>
                            <video id="video" controls controls  style="display: none">

                                <source src="/lessons/video/{{ $lesson->id }}" type="video/mp4">
                            </video>
                            <div class="canvas-container" style="background-size: cover; background-image: url({{ $lesson->course->thumbnail_url }}); ">
                                <canvas id="canvas"
                                    style=" display: block;
                            margin: 0 auto; width:100%"></canvas>

                            </div>
                            <div id="video-controls">
                                <i id="forward-icon" class="fas fa-forward"></i>
                                <i id="play-icon" class="fas fa-play"></i>
                                <i id="pause-icon" class="fas fa-pause" style="display: none"></i>
                                <i id="backward-icon" class="fas fa-backward"></i>
                                <div id="progress-bar">
                                    <div class="progress"></div>
                                </div>
                                <div id="volume-control">
                                    <i id="volume-icon" class="fas fa-volume-up"></i>
                                    <input type="range" id="volume-range" min="0" max="1" step="0.1"
                                        value="1">
                                </div>
                            </div>
                            <h3 class="text-theme-colored line-bottom text-theme-colored">{{ $lesson->title }}</h3>

                            <h5><em>المدة : {{ $lesson->duration }}</em></h5>
                            <p>{{ $lesson->description }}</p>




                        </div>
                    </div>
                    <div class="order-1 col-sm-12 col-md-4">
                        <div class="sidebar sidebar-left mt-sm-30 ml-40">
                            <div class="tm-sidebar-nav-menu-style2">
                                <h4 class="widget-title line-bottom">قائمة <span class="text-theme-color-2">الدروس</span>
                                </h4>
                                <div class="widget widget_nav_menu">
                                    <ul>
                                        @foreach ($lessons as $item)
                                            <li class="@if ($item->id == $lesson->id) active @endif"><a
                                                    href="{{ route('lessons.show', $item->id) }}">{{ $item->title }}</a>
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <!-- end main-content -->
@endsection

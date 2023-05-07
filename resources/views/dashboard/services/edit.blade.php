@extends('layouts.dashboard')
@section('styles')
<link rel="stylesheet" href="{{asset('dashboard/css/imageDeleteBtn.css')}}">
@endsection

@push('scripts')
<script src="{{asset('dashboard/js/image_preview.js')}}"></script>
<script>
        $(function () {
            $("#delete-index-img").on("click", function () {
                $("#index-img").attr("src", "");
                $(".img-wrap").hide();
                $(".logo").val(null);
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr("content");
                $.ajax({
                    url: "{{route('dashboard.services.destroy', $service->id)}}",
                    type: "DELETE",
                    data: { _token: CSRF_TOKEN },
                    dataType: "JSON",
                    success: function (data) {
                        //done.
                    },
                });
            });
        });
</script>
@endpush
@section('content')
    <main class="main">

        <!-- Breadcrumb -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a>Edit</a></li>
            <li class="breadcrumb-item"><a href="{{ route('dashboard.tags.index') }}">Tags</a></li>
            <li class="breadcrumb-item"><a href="">Admin</a>
            </li>
            <li class="breadcrumb-item active">Dashboard</li>

        </ol>

        <div class="container-fluid">

            <div class="animated fadeIn">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Service</h4>
                        </div>
                        <div class="card-block">
                            <form action="{{ route('dashboard.services.update', $service->id) }}" method="post" enctype="multipart/form-data">
                                @csrf()
                                {{ method_field('put') }}
                                @include('layouts._error')

                                <div class="form-group mb-3">
                                    <label for="title" class="form-label">Title in Arabic</label>
                                    <input type="text" name="title" class="form-control" value="{{ $service->title }}" dir="rtl">
                                </div>


                                <div class="form-group mb-3">
                                    <label for="main_title" class="form-label">Main Title in Arabic</label>
                                    <input type="text" name="main_title" class="form-control" value="{{ $service->main_title }}" dir="rtl">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="index_name" class="form-label">Index Name in Arabic</label>
                                    <input type="text" name="index_name" class="form-control" value="{{ $service->index_name }}" dir="rtl">
                                </div>

                                <div class="form-group mb-3">
                                    <label>Index Image</label>
                                    <input type="file" name="index_image" class="form-control logo">
                                </div>

                                <div class="form-group mb-3">
                                @if($service->index_image)
                                <div class="img-wrap">
                                    <span id="delete-index-img" class="close" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">&times;</span>
                                    <img id="index-img" src="{{ asset($service->index_image) }}" style="width: 300px;" class="img-thumbnail logo-preview" alt="">
                                </div>
                                @else
                                <img src="" style="width: 300px; display: none;" class="img-thumbnail logo-preview" alt="">
                                @endif
                                </div>

                                <div class="form-group mb-3">
                                    <label for="brief" class="form-label">Brief in Arabic</label>
                                    <textarea class="form-control" id="brief" name="brief" rows="5" dir="rtl">{{ $service->brief }}</textarea>
                                </div>


                                <div class="form-group mb-3">
                                    <label for="icon_class" class="form-label">Icon Class</label>
                                    <input type="text" name="icon_class" class="form-control" value="{{ $service->icon_class }}">
                                </div>

                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id="showed" name="showed" {{ $service->showed  == 1 ? 'checked' : '' }}>
                                    <label class="form-check-label" for="showed">
                                      Showed
                                    </label>
                                </div>


                                <div class="form-group mb-3">
                                    <label>Image</label>
                                    <input type="file" name="image" class="form-control image">
                                </div>

                                <div class="form-group mb-3">
                                    <img src="{{ asset($service->image) }}" style="width: 300px;" class="img-thumbnail image-preview" alt="">
                                </div>

                                <div class="form-group mb-3">
                                    <button type="submit" class="btn btn-primary"><i class="fas fa-pencil-alt"></i> Update </button>
                                    <a href="{{route('dashboard.sliderImages.index', $service->id)}}" class="btn btn-primary"> Slider Images </a>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @endsection

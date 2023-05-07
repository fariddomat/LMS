@extends('layouts.dashboard')
@section('title', 'Update Image')
@section('servicesActive', 'active')

@push('scripts')
    <script src="{{ asset('dashboard/js/image_preview.js') }}"></script>
@endpush

@section('content')

    <main class="main">

        <!-- Breadcrumb -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a>Edit</a></li>
            <li class="breadcrumb-item"><a href="{{ route('dashboard.sliderImages.index', $service->id) }}">sliderImages</a></li>
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
                            <form action="{{ route('dashboard.sliderImages.update', $image->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf()
                                @method('PUT')


                                <div class="form-group mb-3">
                                    <label>Image</label>
                                    <input type="file" name="image" class="form-control image">
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id="showed"
                                        name="showed" {{ $image->showed == 1 ? 'checked' : '' }}>
                                    <label class="form-check-label" for="showed">
                                        Showed
                                    </label>
                                </div>

                                <div class="form-group mb-3">
                                    <img src="{{ asset($image->image) }}" style="width: 300px;"
                                        class="img-thumbnail image-preview" alt="">
                                </div>

                                <div class="form-group mb-3">
                                    <button type="submit" class="btn btn-primary"><i class="fas fa-pencil-alt"></i> Update
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection

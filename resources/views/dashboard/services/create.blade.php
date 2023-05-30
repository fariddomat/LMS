@extends('layouts.dashboard')

@push('scripts')

<script src="{{asset('dashboard/js/image_preview.js')}}"></script>
@endpush
@section('content')
    <main class="main">

        <!-- Breadcrumb -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a>Create</a></li>
            <li class="breadcrumb-item"><a href="{{ route('dashboard.services.index') }}">services</a></li>
            <li class="breadcrumb-item"><a href="">Admin</a>
            </li>
            <li class="breadcrumb-item active">Dashboard</li>

        </ol>

        <div class="container-fluid">

            <div class="animated fadeIn">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-header">
                            <h4>إضافة خدمة</h4>
                        </div>
                        <div class="card-block">
                            <form action="{{ route('dashboard.services.store') }}" method="post" enctype="multipart/form-data">
                                @csrf()
                                @include('layouts._error')
                                <div class="form-group mb-3">
                                    <label for="title" class="form-label">العنوان</label>
                                    <input type="text" name="title" class="form-control" value="{{ old('ar.title') }}" dir="rtl">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="main_title" class="form-label">العنوان الرئيسي </label>
                                    <input type="text" name="main_title" class="form-control" value="{{ old('ar.main_title') }}" dir="rtl">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="index_name" class="form-label">اسم الفهرس</label>
                                    <input type="text" name="index_name" class="form-control" value="{{ old('ar.index_name') }}" dir="rtl">
                                </div>

                                <div class="form-group mb-3">
                                    <label>صورة الفهرس</label>
                                    <input type="file" name="index_image" class="form-control logo">
                                </div>

                                <div class="form-group mb-3">
                                    <img src="" style="width: 300px; display: none;" class="img-thumbnail logo-preview" alt="">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="brief" class="form-label">مختصر</label>
                                    <textarea class="form-control" id="brief" name="brief" rows="5" dir="rtl">{{ old('ar.brief') }}</textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="icon_class" class="form-label">Icon Class</label>
                                    <input type="text" name="icon_class" class="form-control" value="{{ old('icon_class') }}">
                                </div>

                                <div class="form-check mb-3">
                                    <label class="form-check-label" for="showed">
                                      عرض
                                    </label>
                                    <input class="form-check-input" style="margin-right: 50px" type="checkbox" value="1" id="showed" name="showed" {{ old('showed') == '1' ? 'checked' : '' }}>
                                </div>

                                <div class="form-group mb-3">
                                    <label>الصورة</label>
                                    <input type="file" name="image" class="form-control image">
                                </div>

                                <div class="form-group mb-3">
                                    <img src="" style="width: 300px; display: none;" class="img-thumbnail image-preview" alt="">
                                </div>

                                <div class="form-group mb-3">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> إضافة </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @endsection

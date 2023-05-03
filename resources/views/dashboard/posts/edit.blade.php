@extends('layouts.dashboard')


@push('scripts')
    <script type="text/javascript">
        var imageGalleryBrowseUrl = "{{ route('dashboard.imageGallery.browser') }}";
        var imageGalleryUploadUrl = "{{ route('dashboard.imageGallery.uploader') }}";
    </script>

<script src="{{asset('dashboard/js/image_preview.js')}}"></script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('dashboard/js/blog.js') }}"></script>

@endpush

@section('content')
    <main class="main">

        <!-- Breadcrumb -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a>Edit</a></li>
            <li class="breadcrumb-item"><a href="{{ route('dashboard.posts.index') }}">posts</a></li>
            <li class="breadcrumb-item"><a href="">Admin</a>
            </li>
            <li class="breadcrumb-item active">Dashboard</li>

        </ol>

        <div class="container-fluid">

            <div class="animated fadeIn">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Post</h4>
                        </div>
                        <div class="card-block">
                            <form action="{{ route('dashboard.posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Published </label>
                                           <input type="checkbox" value="{{ old('published', $post->published) }}" @if ($post->published==1)
                                           checked
                                           @endif name='published'>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" class="form-control" name="title" value="{{ old('title', $post->title) }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" class="form-control" id="description" rows="10" required>{{ old('description', $post->description) }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="introduction">introduction</label>
                                    <textarea name="introduction" class="form-control" id="introduction" rows="10" required>{{ old('introduction', $post->introduction) }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="content_table">content_table</label>
                                    <textarea name="content_table" class="form-control" id="content_table" rows="10" required>{{ old('content_table',$post->content_table) }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="first_paragraph">first_paragraph</label>
                                    <textarea name="first_paragraph" class="form-control" id="first_paragraph" rows="10" required>{{ old('first_paragraph', $post->first_paragraph) }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="author_name">author_name</label>
                                    <input type="text" name="author_name" class="form-control" id="author_name" value="{{ old('author_name', $post->author_name) }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="author_title">author_title</label>
                                    <input type="text" name="author_title" class="form-control" id="author_title" value="{{ old('author_title', $post->author_title) }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="category_id" class="">{{ __('Category') }}</label>

                                        <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror">
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}" {{ old('category_id',$post->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                            @endforeach
                                        </select>

                                        @error('category_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Tags</label>
                                            <select class="select2 form-control" name="tags[]" multiple>
                                                @foreach($tags as $tag)
                                                    <option value="{{ $tag->id }}" {{ in_array($tag->id, old('tags', $post->tags->pluck('id')->toArray())) ? 'selected' : '' }}>
                                                        {{ $tag->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info btn-fill pull-right">Update Post</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @endsection
    @push('scripts')
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
    @endpush

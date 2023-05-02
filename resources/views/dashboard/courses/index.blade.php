@extends('layouts.dashboard')

@section('content')
    <main class="main">

        <!-- Breadcrumb -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a>create</a></li>
            <li class="breadcrumb-item"><a href="{{ route('dashboard.courses.index') }}">courses</a></li>
            <li class="breadcrumb-item"><a href="">Admin</a>
            </li>
            <li class="breadcrumb-item active">Dashboard</li>

        </ol>

        <div class="container-fluid">

            <div class="animated fadeIn">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">List of Courses</h3>
                          <div class="card-tools">
                            <a href="{{ route('dashboard.courses.create') }}" class="btn btn-success btn-sm">Create Course</a>
                          </div>
                        </div>
                        <div class="card-body">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($courses as $course)
                                <tr>
                                  <td>{{ $course->id }}</td>
                                  <td>{{ $course->title }}</td>
                                  <td>{{ $course->description }}</td>
                                  <td>
                                    @if ($course->thumbnail_url)
                                      <img src="{{ $course->thumbnail_url }}" alt="{{ $course->title }}" width="64" height="64">
                                    @else
                                      <img src="{{ asset('images/course-placeholder.png') }}" alt="{{ $course->title }}" width="64" height="64">
                                    @endif
                                  </td>
                                  <td>{{ $course->price }}</td>
                                  <td>
                                    <div class="btn-group" style="  display: block;">
                                      <a href="{{ route('dashboard.courses.show', $course->id) }}" class="btn btn-info btn-sm">View</a>
                                      <a href="{{ route('dashboard.courses.edit', $course->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                      <form action="{{ route('dashboard.courses.destroy', $course->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this course?')">Delete</button>
                                      </form>
                                    </div>
                                  </td>
                                </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </main>
    @endsection

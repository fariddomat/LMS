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
                            <h3 class="card-title">{{ $course->title }}</h3>
                        </div>
                        <div class="card-body">
                            <a href="{{ route('dashboard.lessons.create', $course->id) }}" class="btn btn-primary mb-3">
                                Add Lesson
                            </a>
                            @if($course->lessons->isEmpty())
                            <p>No lessons found.</p>
                            @else
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Duration</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($course->lessons as $lesson)
                                    <tr>
                                        <td>{{ $lesson->title }}</td>
                                        <td>{{ $lesson->duration }}</td>
                                        <td>
                                            <a href="{{ route('dashboard.lessons.show', $lesson->id) }}" class="btn btn-sm btn-success">
                                                View
                                            </a>
                                            <a href="{{ route('dashboard.lessons.edit', $lesson->id) }}" class="btn btn-sm btn-primary">
                                                Edit
                                            </a>
                                            <form action="{{ route('dashboard.lessons.destroy', $lesson->id) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this lesson?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection

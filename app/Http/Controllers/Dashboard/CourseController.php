<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('dashboard.courses.index', compact('courses'));
    }

    public function create()
    {
        return view('dashboard.courses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'duration' => 'required',
            'price' => 'required|numeric'
        ]);

        Course::create($request->all());

        return redirect()->route('dashboard.courses.index')->with('success', 'Course created successfully.');
    }

    public function edit(Course $course)
    {
        return view('dashboard.courses.edit', compact('course'));
    }

    public function update(Request $request, Course $course)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'duration' => 'required',
            'price' => 'required|numeric'
        ]);

        $course->update($request->all());

        return redirect()->route('dashboard.courses.index')->with('success', 'Course updated successfully.');
    }

    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('dashboard.courses.index')->with('success', 'Course deleted successfully.');
    }
}

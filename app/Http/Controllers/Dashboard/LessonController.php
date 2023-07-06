<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Support\Facades\Storage;

class LessonController extends Controller
{
    public function index()
    {
        $lessons = Lesson::all();
        return view('dashboard.lessons.index', compact('lessons'));
    }

    public function show(Course $course)
    {
        $lessons = $course->lessons;
        return view('dashboard.lessons.index', compact('lessons'));
    }

    public function create(Course $course)
    {
        // dd($course);
        return view('dashboard.lessons.create', compact('course'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'duration' => 'required',
            'video' => 'required|mimetypes:video/mp4,video/webm,video/quicktime|max:100000000',
        ]);

        $lesson = new Lesson();
        $lesson->title = $validated['title'];
        $lesson->description = $validated['description'];
        $lesson->duration = $validated['duration'];
        // $lesson->video_path = $validated['video']->store('videos', 'public');
        $lesson->course_id = $request->course_id;


        // Save the video file
        if ($request->hasFile('video')) {
            $file = $request->file('video');
            // $fileName = $file->getClientOriginalName();
            $filename = uniqid(). '.' .\File::extension($file->getClientOriginalName());
            $path = $file->storeAs('public/lessons', $filename.'.mp4', ['disk' => 'public']);

            // Set the video file path for the lesson
            $lesson->video_path = $path;
        }

        $lesson->save();

        $course = Course::findOrFail($request->course_id);
        return response()->json([
            'success' => true,
            'message' => 'Lesson created successfully.',
            'redirect_url' => route('dashboard.courses.show', $course)
        ]);
        // return redirect()->route('dashboard.courses.show', $course)->with('success', 'Lesson created successfully.');
    }

    public function edit(Course $course, Lesson $lesson)
    {
        return view('dashboard.lessons.edit', compact('course', 'lesson'));
    }

    public function update(Request $request, Course $course, Lesson $lesson)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $lesson->title = $validated['title'];
        $lesson->description = $validated['description'];

        $lesson->save();

        return redirect()->route('dashboard.courses.show', $lesson->course_id)->with('success', 'Lesson updated successfully.');
    }

    public function destroy(Course $course, Lesson $lesson)
    {
        $course = Course::findOrFail($lesson->course_id);
        Storage::disk('public')->delete('public/lessons/' . $lesson->video_path);
        $lesson->delete();
        return redirect()->route('dashboard.courses.show', $course)->with('success', 'Lesson deleted successfully.');
    }
}

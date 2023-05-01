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

    public function create(Course $course)
    {
        return view('dashboard.lessons.create', compact('course'));
    }

    public function store(Request $request, Course $course)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'duration' => 'required',
            'video' => 'required|mimetypes:video/mp4,video/webm,video/quicktime|max:100000',
        ]);

        $lesson = new Lesson();
        $lesson->title = $validated['title'];
        $lesson->description = $validated['description'];
        $lesson->duration = $validated['duration'];
        $lesson->video_path = $validated['video']->store('videos', 'public');
        $lesson->course()->associate($course);
        $lesson->save();

        return redirect()->route('dashboard.courses.show', $course)->with('success', 'Lesson created successfully.');
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
            'duration' => 'required',
            'video' => 'nullable|mimetypes:video/mp4,video/webm,video/quicktime|max:100000',
        ]);

        $lesson->title = $validated['title'];
        $lesson->description = $validated['description'];
        $lesson->duration = $validated['duration'];

        if ($validated['video']) {
            Storage::disk('public')->delete($lesson->video_path);
            $lesson->video_path = $validated['video']->store('videos', 'public');
        }

        $lesson->save();

        return redirect()->route('dashboard.courses.show', $course)->with('success', 'Lesson updated successfully.');
    }

    public function destroy(Course $course, Lesson $lesson)
    {
        Storage::disk('public')->delete($lesson->video_path);
        $lesson->delete();

        return redirect()->route('dashboard.courses.show', $course)->with('success', 'Lesson deleted successfully.');
    }
}

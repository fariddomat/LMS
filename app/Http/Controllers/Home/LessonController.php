<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{

    public function show($id)
    {
        $lesson = Lesson::findOrFail($id);
        $lessons = Lesson::where('course_id',$lesson->course_id)->get();
        return view('home.lessons.show', compact('lesson', 'lessons'));
    }

}

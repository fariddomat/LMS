<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\ContactForm;
use App\Models\Post;
use App\Models\About;
use App\Models\Enrollment;
use App\Models\Faq;
use App\Models\IntegrativeMedicine;
use App\Models\Lesson;
use App\Models\Service;
use App\Models\Trainer;
use App\Models\WhoIAm;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $posts = Post::where('published', true)->latest()->limit(3)->get();
        $about = About::firstOrFail();
        return view('home.index', compact('posts', 'about'));
    }

    public function contact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        ContactForm::create($request->all());

        return redirect()->back();
    }

    public function contactPage()
    {
        return view('home.contact');
    }

    public function whoiam()
    {

        $about = About::firstOrFail();
        $whoiams = WhoIAm::all();
        return view('home.whoiam', compact('whoiams', 'about'));
    }
    public function integrativeMedicines()
    {
        $integrativeMedicines = IntegrativeMedicine::orderBy('created_at')->get();
        return view('home.integrativeMedicine', compact('integrativeMedicines'));
    }

    public function faqs()
    {
        $faqs = Faq::orderBy('created_at', 'asc')->get();
        // dd($faqs);
        return view('home.faqs', compact('faqs'));
    }

    public function video($file)
    {
        $lesson = Lesson::findOrFail($file);
        $enrollment=Enrollment::where('course_id',$lesson->course_id)
            ->where('user_id', auth()->id())
            ->firstOrFail();
        $videoPath = public_path($lesson->video_path);
        // Generate a unique token for each video request
    $token = md5($file . time());

    \Cache::put($token, $file, now()->addSeconds(5));
        $headers = [
            'Content-Type' => 'video/mp4',
            'Content-Disposition' => 'inline',
            'X-Accel-Buffering' => 'no',
            'Cache-Control' => 'no-cache, no-store, must-revalidate',
            'Pragma' => 'no-cache',
            'Expires' => '0',
            'X-Video-Token' => $token
        ];


        return response()->stream(function () use ($videoPath) {
            $stream = fopen($videoPath, 'rb');
            fpassthru($stream);
        }, 200, $headers);
    }
}

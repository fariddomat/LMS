<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\ContactForm;
use App\Models\Post;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $posts=Post::latest()->limit(3)->get();
        return view('home.index', compact('posts'));
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
}

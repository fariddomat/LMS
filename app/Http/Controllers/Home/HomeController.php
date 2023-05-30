<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\ContactForm;
use Illuminate\Http\Request;

class HomeController extends Controller
{
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

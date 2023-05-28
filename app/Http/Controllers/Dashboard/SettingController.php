<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\LogSystem;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Session;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
class SettingController extends Controller
{

    public function cover()
    {
        return view('dashboard.settings.cover');
    }

    public function change_cover(Request $request)
    {

        setting($request->all())->save();
        if ($request->cover3) {
            $image_path = public_path("home/images/3.jpg");
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $request->cover3->move(public_path('/home/images'), '3.jpg');
        }
        if ($request->cover2) {
            $image_path = public_path("home/images/2.jpg");
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $request->cover2->move(public_path('/home/images'), '2.jpg');
        }
        if ($request->cover1) {
            $image_path = public_path("home/images/1.jpg");
            // dd($image_path);
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $request->cover1->move(public_path('/home/images'), '1.jpg');
        }
        return redirect()->back();
    }


    public function logs()
    {
        $logs = LogSystem::latest()->paginate(50);
        return view('dashboard.settings.logs', compact('logs'));
    }

    public function settingsText()
    {
        return view('dashboard.settings.settings');
    }

    public function settings(Request $request)
    {
        setting($request->all())->save();

        session()->flash('success', 'Successfully added !');
        return redirect()->back();
    }

    public function social()
    {
        return view('dashboard.settings.social');
    }

    public function changePassword()
    {
        $user = Auth::user();
        return view('dashboard.settings.changePassword')->with([
            'user' => $user
        ]);
    }

    public function changePass(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
        User::find(auth()->user()->id)->update(['password' => Hash::make($request->new_password)]);

        return redirect()->route('admin.home');
    }




}

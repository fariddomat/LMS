<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('home.profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'full_name'=> 'required',
            'mobile'=> 'required',
            'email'=> 'required|email|unique:profiles,email,',
            'password'=> 'required|confirmed',
            'birth_date'=> 'required',
            'address'=> 'required',
            'type'=> 'required',
            'about'=> 'required',
            'why'=> 'required',
        ]);
        $request->merge(['password'=>bcrypt($request->password)]);
        $profile=Profile::create($request->except('password_confirmation'));


        $user = User::create([
            'name' => $profile->full_name,
            'email' => $profile->email,
            'password' => $profile->password,
        ]);
        $user->attachRoles([2]);
        session()->flash('success','تم الحفظ بنجاح !');
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=Auth::user();
        if(!$user)
            abort(403);
        $profile=Profile::where('email', $user->email)->firstOrFail();
        return view('home.profile.show', compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

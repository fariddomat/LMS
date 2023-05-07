<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::paginate(50);
        return view('dashboard.services.index', compact('services'));
    }

    public function create()
    {
        return view('dashboard.services.create');
    }

    public function store(Request $request)
    {

        $rules = [
            'title' => ['required'],
            'brief' => ['required'],
            'main_title' => ['required'],
            'index_name' => ['required'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp'],
            'index_image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp'],
            'icon_class' => ['required'],
            'showed' => ['nullable'],
        ];
        $validatedData = $request->validate($rules);

        $service = new Service();
        $service->title = $validatedData['title'];
        $service->brief = $validatedData['brief'];
        $service->main_title = $validatedData['main_title'];
        $service->index_name = $validatedData['index_name'];
        $service->icon_class = $validatedData['icon_class'];
        if ($request->has('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $service->image = $image->storeAs('photos/services', $filename);
        }
        if ($request->has('index_image')) {
            $indexImage = $request->file('index_image');
            $filename = $indexImage->getClientOriginalName();
            $service->index_image = $indexImage->storeAs('photos/services/index', $filename);
        }
        $service->showed  = $request->has('showed') ? 1 : 0;
        $service->slug = Str::slug($request->input('title'));
        $service->save();
        session()->flash('success', 'Service Added Successfully');
        return redirect()->route('dashboard.services.index');
    }

    public function edit(Service $service)
    {
        return view('dashboard.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $rules = [
            'title' => ['required'],
            'brief' => ['required'],
            'main_title' => ['required'],
            'index_name' => ['required'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp'],
            'index_image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp'],
            'icon_class' => ['required'],
            'showed' => ['nullable'],
        ];
        $validatedData = $request->validate($rules);

        $service->title = $validatedData['title'];
        $service->brief = $validatedData['brief'];
        $service->main_title = $validatedData['main_title'];
        $service->index_name = $validatedData['index_name'];
        $service->icon_class = $validatedData['icon_class'];
        if ($request->has('image')) {
            Storage::disk('local')->delete($service->image);
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $service->image = $image->storeAs('photos/services', $filename);
        }
        if ($request->has('index_image')) {
            Storage::disk('local')->delete($service->index_image);
            $indexImage = $request->file('index_image');
            $filename = $indexImage->getClientOriginalName();
            $service->index_image = $indexImage->storeAs('photos/services/index', $filename);
        }
        $service->showed  = $request->has('showed') ? 1 : 0;
        $service->slug = Str::slug($request->input('title'));
        $service->save();
        session()->flash('success', 'Service Updated Successfully');
        return redirect()->route('dashboard.services.index');
    }

    public function destroy(Service $service)
    {
        if ($service->index_image) {
            Storage::disk('local')->delete($service->index_image);
            $service->index_image = null;
            $service->save();
        }
    }
}
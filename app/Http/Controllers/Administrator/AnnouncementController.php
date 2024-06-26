<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function index()
    {
        $data = Banner::all();

        return view("administrator.announcement.index", compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate(rules: [
            'title' => ['required'],
            'image' => ['required', 'mimes:jpg,jpeg,png,svg', 'max:2048'],
            'description' => ['required']
        ]);

        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(public_path('announcement'), $imageName);

        $banner = new Banner();
        $banner->title = $request->title;
        $banner->image = $imageName;
        $banner->description = $request->description;
        $banner->save();

        return redirect()->route('administrator.announcement');
    }
}

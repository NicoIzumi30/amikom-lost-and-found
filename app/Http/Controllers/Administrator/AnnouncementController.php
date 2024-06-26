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
            'image' => ['required', 'mimes:jpg,jpeg,png,svg'],
            'description' => ['required']
        ]);

        $imageName = time() . '.' . $request->image->extension();

        $request->image->storeAs('announcement', $imageName, 'public');

        $banner = new Banner();
        $banner->title = $request->title;
        $banner->image = $imageName;
        $banner->description = $request->description;
        $banner->save();

        return redirect()->route('administrator.announcement.index');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => ['required'],
            'image' => ['nullable', 'mimes:jpg,jpeg,svg,png'],
            'description' => ['required']
        ]);

        $banner = Banner::findOrFail($id);

        $banner->title = $request->title;
        $banner->description = $request->description;

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => ['mimes:jpg,jpeg,svg,png'],
            ]);

            $oldImagePath = public_path('storage/announcement/' . $banner->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('announcement', $imageName, 'public');
            $banner->image = $imageName;
        }

        $banner->save();

        return redirect()->route('administrator.announcement.index');
    }

    public function destroy($id)
    {
        Banner::find($id)->delete();
        return redirect()->route('administrator.announcement.index');
    }
}

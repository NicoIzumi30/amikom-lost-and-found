<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AnnouncementController extends Controller
{
    public function index()
    {
        $data = Banner::latest()->get();

        return view("administrator.announcement.index", compact('data'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required'],
            'image' => ['required', 'mimes:jpg,jpeg,png,svg'],
            'description' => ['required']
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors('Failed to create Announcement');
        }
        $imageName = time() . '.' . $request->image->extension();

        $request->image->storeAs('announcement', $imageName, 'public');
        Banner::create([
            'title' => $request->title,
            'image' => $imageName,
            'description' => $request->description
        ]);

        return to_route('administrator.announcement.index')->withSuccess('Announcement has been created');
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required'],
            'image' => ['nullable', 'mimes:jpg,jpeg,svg,png'],
            'description' => ['required']
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors('Failed to update Announcement');
        }
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

        return to_route('administrator.announcement.index')->withSuccess('Announcement has been updated');;
    }

    public function destroy($id)
    {
        Banner::find($id)->delete();
        return to_route('administrator.announcement.index')->withSuccess('Announcement has been deleted');;
    }
}

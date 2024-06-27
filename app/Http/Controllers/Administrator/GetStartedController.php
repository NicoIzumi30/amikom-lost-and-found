<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\GetStarted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GetStartedController extends Controller
{
    public function index()
    {
        $data = GetStarted::all();
        return view("administrator.getStarted.index", compact('data'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required'],
            'image' => ['required', 'mimes:jpg,jpeg,svg,png'],
            'description' => ['required']
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors('Failed to create Get Started');
        }
        $imageName = time() . '.' . $request->image->extension();

        $request->image->storeAs('get-started', $imageName, 'public');

        GetStarted::create([
            'title' => $request->title,
            'image' => $imageName,
            'description' => $request->description
        ]);

        return redirect()->route('administrator.getStarted.index')->withSuccess('Get Started has been created');
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required'],
            'image' => ['nullable', 'mimes:jpg,jpeg,svg,png'],
            'description' => ['required']
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors('Failed to update Get Started');
        }
        $getStarted = GetStarted::findOrFail($id);

        $getStarted->title = $request->title;
        $getStarted->description = $request->description;

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => ['mimes:jpg,jpeg,svg,png'],
            ]);

            $oldImagePath = public_path('storage/get-started/' . $getStarted->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('get-started', $imageName, 'public');
            $getStarted->image = $imageName;
        }

        $getStarted->save();

        return redirect()->route('administrator.getStarted.index')->withSuccess('Get Started has been updated');;
    }

    public function destroy($id)
    {
        GetStarted::find($id)->delete();

        return redirect()->route('administrator.getStarted.index')->withSuccess('Get Started has been deleted');;
    }
}

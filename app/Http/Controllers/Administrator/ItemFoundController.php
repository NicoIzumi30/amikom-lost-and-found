<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\ItemFound;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemFoundController extends Controller
{
    public function index()
    {
        $data = ItemFound::latest()->get();
        return view("administrator.itemFound.index", compact('data'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_id' => ['required'],
            'title' => ['required', 'max:255'],
            'description' => ['required', 'max:255'],
            'location' => ['required', 'max:255'],
            'image' => ['required', 'mimes:jpg,jpeg,png,svg'],
            'no_tlp' => ['required', 'min:8', 'max:16'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors('Failed to create ItemFound');
        }
        $imageName = time() . '.' . $request->image->extension();

        $request->image->storeAs('item-found', $imageName, 'public');

        ItemFound::create([
            'user_id' => Auth::user()->id,
            'category_id' => $request->category,
            'title' => $request->title,
            'description' => $request->description,
            'location' => $request->location,
            'image' => $imageName,
            'status' => 'belum',
            'no_tlp' => $request->no_tlp

        ]);

        return to_route('')->withSuccess('ItemFound has been created');
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'user_id'=>['required'],
            'category_id' => ['required'],
            'title' => ['required', 'max:255'],
            'description' => ['required', 'max:255'],
            'location' => ['required', 'max:255'],
            'image' => ['nullable', 'mimes:jpg,jpeg,png,svg'],
            'status' => ['required'],
            'no_tlp' => ['required', 'min:8', 'max:16'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors('Failed to update ItemFound');
        }
        $itemFound = ItemFound::findOrFail($id);
        $itemFound->user_id = $request->user_id;//hidden input di blade
        $itemFound->category_id = $request->category_id;
        $itemFound->title = $request->title;
        $itemFound->description = $request->description;
        $itemFound->location = $request->location;
        $itemFound->status = $request->status;
        $itemFound->no_tlp = $request->no_tlp;
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => ['mimes:jpg,jpeg,svg,png'],
            ]);

            $oldImagePath = public_path('storage/item-found/' . $itemFound->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('item-found', $imageName, 'public');
            $itemFound->image = $imageName;
        }

        $itemFound->save();

        return to_route('')->withSuccess('ItemFound has been updated');
    }

    public function destroy($id)
    {
        ItemFound::findOrFail($id)->delete();
        return to_route('')->withSuccess('ItemFound has been deleted');
    }
}

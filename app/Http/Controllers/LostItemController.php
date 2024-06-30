<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\LostItem;

class LostItemController extends Controller
{
    public function index()
    {

        return view('main/lostItems/index');
    }
    public function create()
    {
        return view('main/lostItems/create');
    }
    public function edit()
    {
        return view('main/lostItems/edit');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_id' => ['required'],
            'title' => ['required', 'max:255'],
            'description' => ['required', 'max:255'],
            'image' => ['nullable', 'mimes:jpg,png,jpeg,svg'],
            'no_tlp' => ['required', 'min:8', 'max:16']
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors('Failed to create LostItem');
        }
        $imageName = time() . '.' . $request->image->extension();

        $request->image->storeAs('lost-item', $imageName, 'public');

        LostItem::create([
            'user_id' => Auth::user()->id,
            'category_id' => $request->category_id,
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName,
            'status' => 'belum',
            'no_tlp' => $request->no_tlp
        ]);

        return to_route('')->withSuccess('LostItem has been created');
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => ['required'],
            'category_id' => ['required'],
            'title' => ['required', 'max:255'],
            'description' => ['required', 'max:255'],
            'image' => ['nullable', 'mimes:jpg,png,jpeg,svg'],
            'status' => ['required'],
            'no_tlp' => ['required', 'min:8', 'max:16']
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors('Failed to update LostItem');
        }
        $lostItem = LostItem::findOrFail($id);
        $lostItem->user_id = $request->user_id; //hidden input di blade
        $lostItem->category_id = $request->category_id;
        $lostItem->title = $request->title;
        $lostItem->description = $request->description;
        $lostItem->status = $request->status;
        $lostItem->no_tlp = $request->no_tlp;
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => ['mimes:jpg,jpeg,svg,png'],
            ]);

            $oldImagePath = public_path('storage/item-found/' . $lostItem->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('lost-item', $imageName, 'public');
            $lostItem->image = $imageName;
        }

        $lostItem->save();

        return to_route('')->withSuccess('ItemFound has been updated');
    }

    public function destroy($id)
    {
        LostItem::findOrFail($id)->delete();
        return to_route('')->withSuccess('ItemFound has been deleted');
    }
}

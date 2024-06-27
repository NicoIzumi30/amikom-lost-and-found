<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ItemFound;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemFoundController extends Controller
{
    public function index()
    {
        return view("administrator.itemFound.index");
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_id' => ['required'],
            'title' => ['required', 'max:255'],
            'description' => ['required', 'max:255'],
            'location' => ['required', 'max:255'],
            'image' => ['nullable', 'mimes:jpg,jpeg,png,svg'],
            'status' => ['required'],
            'no_tlp' => ['required', 'min:8', 'max:16'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors('Failed to create ItemFound');
        }
        $imageName = time() . '.' . $request->image->extension();

        $request->image->storeAs('item-found', $imageName, 'public');

        ItemFound::create([
            
            'category_id' => $request->category,
            'title' => $request->title,
            'description' => $request->description,
            'location' => $request->location,
            'image' => $imageName,
            'status' => $request->status,
            'no_tlp' => $request->no_tlp

        ]);
    }
}

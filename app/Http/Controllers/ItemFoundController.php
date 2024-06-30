<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\ItemFound;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ItemFoundController extends Controller
{
    public function index()
    {
        $data = ItemFound::latest()->get();
        $categories = Category::all();
        return view('main/itemFound/index', [
            'data' => $data,
            'categories' => $categories,
        ]);
    }

    public function detail($slug)
    {
        $data = ItemFound::where('slug', $slug)->first();
        return view('main/itemFound/detailItem', ['data' => $data]);
    }
    public function category($slug){
        $category = Category::where('slug', $slug)->first();
        $data = ItemFound::where('category_id', $category->id)->get();
        $categories = Category::all();
        return view('main/itemFound/index', [
            'data' => $data,
            'categories' => $categories,
            'category_id' => $category->id
        ]);
    } 
    public function create()
    {
        $categories = Category::all();
        return view('main.itemFound.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_id' => ['required'],
            'title' => ['required', 'max:255'],
            'description' => ['required'],
            'location' => ['required', 'max:255'],
            'image' => ['required', 'mimes:jpg,jpeg,png,svg'],
            'no_tlp' => ['required', 'min:8', 'max:16'],
        ]);

        if ($validator->fails()) {
            dd($validator->errors());
            //  return redirect()->back()->withErrors('Failed to create ItemFound');
        }
        $imageName = time() . '.' . $request->image->extension();

        $request->image->storeAs('item-found', $imageName, 'public');

        ItemFound::create([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'description' => $request->description,
            'category_id'=>$request->category_id,
            'location' => $request->location,
            'slug'=>Str::of($request->title),
            'image' => $imageName,
            'status' => 'belum',
            'no_tlp' => $request->no_tlp

        ]);

        return to_route('itemFound')->withSuccess('ItemFound has been created');
    }


    public function edit($slug)
    {
        $categories = Category::all();
        $data = ItemFound::where('slug', $slug)->first();
        return view('main/itemFound/edit', compact('data','categories'));   
    }

    public function update(Request $request, $slug)
    {
        $validator = Validator::make($request->all(), [
           'category_id' => ['required'],
            'title' => ['required', 'max:255'],
            'description' => ['required'],
            'location' => ['required', 'max:255'],
            'image' => ['nullable', 'mimes:jpg,jpeg,png,svg'],
            'no_tlp' => ['required', 'min:8', 'max:16'],
            'status' => ['required'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors('Failed to update ItemFound');
        }
        $itemFound = ItemFound::where('slug', $slug)->first();
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
            if ($itemFound->image !== null) {
                $oldImagePath = public_path('storage/item-found/' . $itemFound->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('item-found', $imageName, 'public');
            $itemFound->image = $imageName;
        }
        $itemFound->save();

        return to_route('history.itemFound')->withSuccess('ItemFound has been updated');
    }

    public function destroy($id)
    {
        $itemFound=ItemFound::findOrFail($id);
        abort_if(Auth::user()->id != $itemFound->user_id, 401);
        if($itemFound->image !== null){
            $oldImagePath = public_path('storage/item-found/'.$itemFound->image);
            if(file_exists($oldImagePath)){
                unlink($oldImagePath);
            }
        }
        $itemFound->delete();
        return to_route('history.itemFound')->withSuccess('ItemFound has been deleted');
    }
}

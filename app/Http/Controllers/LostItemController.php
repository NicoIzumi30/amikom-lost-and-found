<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\LostItem;
use Illuminate\Support\Str;

class LostItemController extends Controller
{
    public function index()
    {
        $lostitems = LostItem::latest()->get();
        $categories = Category::all();
        return view('main/lostItems/index', [
            'lostitems' => $lostitems,
            'categories' => $categories,
        ]);
    }
    public function category($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $lostitems = LostItem::where('category_id', $category->id)->get();
        $categories = Category::all();
        return view('main/lostItems/index', [
            'lostitems' => $lostitems,
            'categories' => $categories,
            'category_id' => $category->id
        ]);
    }
    public function create()
    {
        $categories = Category::all();
        return view('main/lostItems/create', compact('categories'));
    }
    public function edit($slug)
    {
        $lostitem = LostItem::where('slug', $slug)->first();
        abort_if(Auth::user()->id != $lostitem->user_id, 401);
        $categories = Category::all();
        return view('main/lostItems/edit', compact('lostitem', 'categories'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'postingan' => ['required'],
            'image' => ['nullable', 'mimes:jpg,png,jpeg,svg'],
            'no_tlp' => ['required', 'min:8', 'max:16'],
            'category_id' => ['required', 'exists:App\Models\Category,id'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors('Failed to create LostItem');
        }
        $data = [
            'user_id' => Auth::user()->id,
            'category_id' => $request->category_id,
            'slug' => Str::of($request->postingan)->words(4, ''),
            'postingan' => $request->postingan,
            'status' => 'belum',
            'no_tlp' => $request->no_tlp
        ];
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => ['mimes:jpg,jpeg,svg,png'],
            ]);
            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('lostItems', $imageName, 'public');
            $data['image'] = $imageName;
        }
        

        LostItem::create($data);
        return to_route('lostItems')->withSuccess('Postingan berhasil di upload');
    }

    public function update(Request $request, $slug)
    {
        $validator = Validator::make($request->all(), [
            'category_id' => ['required'],
            'postingan' => ['required'],
            'image' => ['nullable', 'mimes:jpg,png,jpeg,svg'],
            'status' => ['required'],
            'no_tlp' => ['required', 'min:8', 'max:16']
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors('Data gagal di update');
        }
        $lostItem = LostItem::where('slug', $slug)->first();
        $lostItem->category_id = $request->category_id;
        $lostItem->postingan = $request->postingan;
        $lostItem->status = $request->status;
        $lostItem->no_tlp = $request->no_tlp;
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => ['mimes:jpg,jpeg,svg,png'],
            ]);
            if ($lostItem->image !== null) {
                $oldImagePath = public_path('storage/lostItems/' . $lostItem->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('lostItems', $imageName, 'public');
            $lostItem->image = $imageName;
        }

        $lostItem->save();

        return to_route('history')->withSuccess('Data berhasil di update');
    }

    public function destroy($id)
    {
        $lostitem = LostItem::findOrFail($id);
        abort_if(Auth::user()->id != $lostitem->user_id, 401);
        if ($lostitem->image !== null) {
            $oldImagePath = public_path('storage/lostItems/' . $lostitem->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }
        $lostitem->delete();
        return to_route('history')->withSuccess('Data berhasil dihapus');
    }
}

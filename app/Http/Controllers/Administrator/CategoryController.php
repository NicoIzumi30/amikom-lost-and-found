<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use ParagonIE\ConstantTime\Base64;


class CategoryController extends Controller
{
    public function index()
    {
        $data = Category::latest()->get();
        return view("administrator.category.index", compact('data'));
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'category_name' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors('Failed to create Category');
        }

        $slug = Category::createUniqueSlug($request->category_name);
        Category::create([
            'category_name' => $request->category_name,
            'slug' => $slug
        ]);

        return to_route('administrator.category.index')->withSuccess('Category has been created');
    }

    public function update(Request $request, $slug)
    {
        $validator = Validator::make($request->all(), [
            'category_name' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors('Failed to update Category');
        }

        $category = Category::where('slug', $slug)->first();
        $id = $category->id;
        $slug = Category::createUniqueSlug($request->category_name, $id);
        $category->update([
            'category_name' => $request->category_name,
            'slug' => $slug
        ]);

        return redirect()->route('administrator.category.index')->withSuccess('Category has been updated');
    }

    public function destroy($slug)
    {
        $deleted = Category::where('slug', $slug)->first();
        abort_if(Auth::user()->role != 'admin', 401);
        $deleted->delete();

        return redirect()->route('administrator.category.index')->withSuccess('Category has been deleted');
    }
}

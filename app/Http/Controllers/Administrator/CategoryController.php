<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view("administrator.category.index", [
            'categories' => $categories
        ]);
    }

    public function store()
    {

    }
}

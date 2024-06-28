<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        return view("administrator.category.index");
    }

    public function store()
    {

    }
}

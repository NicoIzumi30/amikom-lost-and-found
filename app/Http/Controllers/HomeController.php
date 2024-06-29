<?php

namespace App\Http\Controllers;

use App\Models\ItemFound;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $itemfound = ItemFound::latest()->get();
        return view('main.home.index',compact('itemfound'));
    }
}

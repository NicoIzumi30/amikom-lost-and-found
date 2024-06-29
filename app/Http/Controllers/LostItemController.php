<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LostItemController extends Controller
{
    public function index() {
        return view('home');
    }
}

<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GetStartedController extends Controller
{
    public function index() {
        return view("administrator.getStarted.index");
    }
}

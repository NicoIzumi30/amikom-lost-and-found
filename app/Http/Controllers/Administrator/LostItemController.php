<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LostItemController extends Controller
{
    public function index(){
        return view("administrator.lostItem.index");
    }
}

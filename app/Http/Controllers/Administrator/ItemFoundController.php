<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItemFoundController extends Controller
{
    public function index(){
        return view("administrator.itemFound.index");
    }
}

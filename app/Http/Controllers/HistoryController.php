<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index(){

        return view("main.history.index ");
    } 
    public function item_found(){

        return view("main.history.itemFound ");
    } 
}

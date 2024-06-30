<?php

namespace App\Http\Controllers;
use App\Models\LostItem;

use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index(){
        $lostitems = LostItem::all();
        return view("main.history.index",[
                  'lostitems' => $lostitems
        ]);
    } 
    public function item_found(){

        return view("main.history.itemFound ");
    } 
}

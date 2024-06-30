<?php

namespace App\Http\Controllers;
use App\Models\LostItem;
use App\Models\ItemFound;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HistoryController extends Controller
{
    public function index(){
        $lostitems = LostItem::latest()->get();
        return view("main.history.index ",compact('lostitems'));
    }

    public function item_found()
    {
        $finduser = Auth::user();
        $data = $finduser->itemFounds()->get();
        return view("main.history.itemFound ",compact('data'));
    }
}

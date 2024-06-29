<?php

namespace App\Http\Controllers\Administrator;

use App\Models\LostItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class LostItemController extends Controller
{
    public function index()
    {
        $data = LostItem::latest()->get();
        return view("administrator.lostItem.index", compact('data'));
    }

    public function destroy($id)
    {
        LostItem::findOrFail($id)->delete();
        return to_route('')->withSuccess('ItemFound has been deleted');
    }
}

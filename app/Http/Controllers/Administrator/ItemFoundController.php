<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\ItemFound;

class ItemFoundController extends Controller
{
    public function index()
    {
        $data = ItemFound::latest()->get();
        return view("administrator.itemFound.index", compact('data'));
    }

    public function destroy($id)
    {
        ItemFound::findOrFail($id)->delete();
        return to_route('')->withSuccess('ItemFound has been deleted');
    }
}

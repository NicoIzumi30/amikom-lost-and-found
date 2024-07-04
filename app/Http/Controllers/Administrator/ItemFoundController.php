<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\ItemFound;
use Illuminate\Support\Facades\Auth;

class ItemFoundController extends Controller
{
    public function index()
    {
        $data = ItemFound::latest()->get();
        return view("administrator.itemFound.index", compact('data'));
    }

    public function destroy($slug)
    {
        $deleted= ItemFound::where('slug', $slug)->first();
         abort_if(Auth::user()->role != 'admin', 401);
        if ($deleted->image !== null) {
            $oldImagePath = public_path('storage/item-found/' . $deleted->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }
        $deleted->delete();
        return to_route('administrator.itemFound.index')->withSuccess('ItemFound has been deleted');
    }
}

<?php

namespace App\Http\Controllers\Administrator;

use App\Models\LostItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class LostItemController extends Controller
{
    public function index()
    {
        $data = LostItem::latest()->get();
        return view("administrator.lostItem.index", compact('data'));
    }

    public function destroy($slug)
    {
        $deleted  = LostItem::where('slug', $slug)->first();
        abort_if(Auth::user()->role != 'admin', 401);
        if ($deleted->image !== null) {
            $oldImagePath = public_path('storage/lostItems/' . $deleted->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }
        $deleted->delete();
        return to_route('administrator.lostItems.index')->withSuccess('ItemFound has been deleted');
    }
}

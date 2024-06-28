<?php

namespace App\Http\Controllers;

use App\Models\ItemFound;
use App\Models\LoginLog;
use App\Models\LostItem;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $usercount = User::all()->count();
        $lostcount = LostItem::all()->count();
        $foundcount = ItemFound::all()->count();
        $datalog = LoginLog::all();
        return view("administrator.dashboard.index",compact('usercount','lostcount','foundcount','datalog'));
    }
}

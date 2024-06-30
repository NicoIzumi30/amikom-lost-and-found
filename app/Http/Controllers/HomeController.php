<?php

namespace App\Http\Controllers;

use App\Models\ItemFound;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $currentHour = date('G');
        $greeting = '';

        if ($currentHour >= 5 && $currentHour < 12) {
            $greeting = "Selamat Pagi";
        } elseif ($currentHour >= 12 && $currentHour < 18) {
            $greeting = "Selamat Siang";
        } elseif ($currentHour >= 18 && $currentHour < 22) {
            $greeting = "Selamat Sore";
        } else {
            $greeting = "Selamat Malam";
        }
        $itemfound = ItemFound::latest()->get();
        return view('main.home.index',[
            'itemfound' => $itemfound,
            'greeting' => $greeting
        ]);
    }
}

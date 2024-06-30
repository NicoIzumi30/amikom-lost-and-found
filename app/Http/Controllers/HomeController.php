<?php

namespace App\Http\Controllers;

use App\Models\ItemFound;
use Illuminate\Http\Request;
use App\Models\Banner;

class HomeController extends Controller
{
    public function index() {
        $currentHour = date('G');
        $greeting = '';

        if ($currentHour >= 5 && $currentHour < 12) {
            $greeting = "Selamat Pagi";
        } elseif ($currentHour >= 12 && $currentHour < 15) {
            $greeting = "Selamat Siang";
        } elseif ($currentHour >= 15 && $currentHour < 18) {
            $greeting = "Selamat Sore";
        } else {
            $greeting = "Selamat Malam";
        }
        $itemfound = ItemFound::latest()->take(6)->get();
        $banners = Banner::latest()->take(3)->get();
        return view('main.home.index',[
            'itemfound' => $itemfound,
            'greeting' => $greeting,
            'banners' => $banners
        ]);
    }
    public function detail_banner($id){
        $banner = Banner::findOrFail($id);
        return view('main.home.detailBanner',[
            'banner' => $banner
        ]);
    } 
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OnboardingController extends Controller
{
    public function index(){
        return view('main.onboarding.index');
    } 
    public function onboarding() {
        return view('main.onboarding.onboardscreen');
    }
}

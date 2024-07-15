<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index() {
        $setting = Setting::first();
        return view('administrator.setting.index', compact('setting'));
    }
    public function update(Request $request) {
        $setting = Setting::first();
        $request->validate([
            'company_name' => ['required', 'string', 'max:255'],
            'application_name' => ['required', 'string', 'max:64'],
            'application_description' => ['required', 'string', 'max:255'],
            'application_theme' => ['required', 'string', 'max:16'],
            'permitted_email' => ['required', 'string', 'max:255'],
        ]);
        $setting->company_name = $request->company_name;
        $setting->application_name = $request->application_name;
        $setting->application_description = $request->application_description;
        $setting->application_theme = $request->application_theme;
        $setting->permitted_email = $request->permitted_email;
        if ($request->hasFile('logo')) {
            $request->validate([
                'logo' => ['mimes:jpg,jpeg,svg,png'],
            ]);

            if ($setting->company_logo !== null) {
                $oldImagePath = public_path('storage/logo/' . $setting->company_logo);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            $imageName = time() . '.' . $request->logo->extension();
            $request->logo  ->storeAs('logo', $imageName, 'public');
            $setting->company_logo = $imageName;
        }
        $setting->save();
        return redirect()->back()->withSuccess('Setting has been updated');;
    }
}

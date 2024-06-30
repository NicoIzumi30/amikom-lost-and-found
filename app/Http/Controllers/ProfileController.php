<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index() {
        return view('main.profile.index');
    }
    public function update(Request $request)
    {
        $id = auth()->user()->id;
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:16'],
            'image' => ['nullable', 'mimes:jpg,jpeg,svg,png']
            // 'image' => ['nullable'],
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors('Update Profile Gagal');
        }
        $user = User::findOrFail($id);

        $user->name = $request->name;
        $user->phone_number = $request->phone_number;

    if ($request->hasFile('image')) {
            $request->validate([
                'image' => ['mimes:jpg,jpeg,svg,png'],
            ]);

            if ($user->image !== null) {
                $oldImagePath = public_path('storage/users/' . $user->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('users', $imageName, 'public');
            $user->image = $imageName;
        }
        $user->save();
        return redirect()->route('profile')->withSuccess('Profile has been updated');
    }

    public function change_password(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        if (!Hash::check($request->current_password, Auth::user()->password)) {
            return back()->withErrors('Password gagal di update');
        }
        Auth::user()->update([
            'password' => Hash::make($request->new_password),
        ]);

        return redirect()->route('profile')->with('success', 'Password berhasil di update');
    }
}

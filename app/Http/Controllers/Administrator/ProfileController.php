<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function index()
    {
        $data = auth()->user();
        return view('administrator.profile.index', compact('data'));
    }
    public function update(Request $request)
    {
        $id = auth()->user()->id;
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', Rule::unique('users', 'email')->ignore($id), 'max:64'],
            'phone_number' => ['required', 'string', 'max:16'],
            'image' => ['nullable', 'mimes:jpg,jpeg,svg,png'],
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors('Failed to update Profile');
        }
        $user = User::findOrFail($id);

        $user->name = $request->name;
        $user->email = $request->email;
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
        return to_route('administrator.profile.index')->withSuccess('Profile has been updated');
        ;
    }
}

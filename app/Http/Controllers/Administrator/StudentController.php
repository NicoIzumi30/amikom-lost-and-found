<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function index()
    {
        $students = User::where("role","student")->get();
        return view('administrator.students.index',['students'=> $students]);
    }
    public function update(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', Rule::unique('users', 'email')->ignore($id), 'max:64'],
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors('Failed to update student');
        }
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return to_route('administrator.students.index')->withSuccess('Student has been updated');
    }
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('administrator.students.index')->withSuccess('Student has been deleted');
    }
}

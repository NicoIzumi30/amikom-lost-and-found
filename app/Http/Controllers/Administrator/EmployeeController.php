<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = User::where("role", "employee")->get();
        return view("administrator.employee.index", [
            "employees" => $employees
        ]);
    }
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls',
        ]);

        $file = $request->file('file');
        $spreadsheet = IOFactory::load($file->getPathName());
        $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);

        foreach ($sheetData as $index => $row) {
            // Skip the header row
            if ($index == 1) {
                continue;
            }

            User::create([
                'name'         => $row['A'],
                'nik'          => $row['B'],
                'phone_number' => $row['C'],
                'email'        => null,
                'role'         => "employee",
                'password'     => Hash::make($row['B']),
            ]);
        }

        return back()->with('success', 'Users Imported Successfully');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'nik' => ['required', 'string', Rule::unique('users', 'nik'), 'max:32'],
            'phone_number' => ['required', 'min:8', 'max:16'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors('Failed to create employee');
        }
        User::create([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'password' => bcrypt($request->nik),
            'role' => "employee"
        ]);
        return to_route('administrator.employees.index')->withSuccess('Employee has been created');
    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'nik' => ['required', 'string', Rule::unique('users', 'nik')->ignore($id), 'max:32'],
            'phone_number' => ['required', 'min:8', 'max:16'],
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors('Failed to update employee');
        }
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->nik = $request->nik;
        $user->phone_number = $request->phone_number;
        $user->save();
        return to_route('administrator.employees.index')->withSuccess('Employee has been updated');
    }
    public function reset_password($id)
    {
        $user = User::findOrFail($id);
        $user->password = bcrypt($user->nik);
        $user->save();
        return to_route('administrator.employees.index')->withSuccess('Employee password has been reset');
    }
    public function destroy($id)
    {
        User::find($id)->delete();
        return to_route('administrator.employees.index')->withSuccess('Employee has been deleted');
    }
}

<?php

namespace App\Http\Controllers\Administrator;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\User;

class EmployeeController extends Controller
{
    public function index(){
        $employees = User::where("role","employee")->get();
        return view("administrator.employee.index",[
            "employees"=> $employees
        ]);
    } 
}

<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;

class AdminEmployeeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Employee - Human Resources";
        $viewData["employees"] = Employee::all();
        return view(view: 'employee.index')->with(key: "viewData", value: $viewData);
    }
}
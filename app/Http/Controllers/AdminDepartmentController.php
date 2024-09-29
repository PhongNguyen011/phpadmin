<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class AdminDepartmentController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Department - Human Resources";
        $viewData["departments"] = Department::all();
        return view(view: 'department.index')->with(key: "viewData", value: $viewData);
    }
}
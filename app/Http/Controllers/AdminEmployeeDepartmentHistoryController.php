<?php

namespace App\Http\Controllers;

use App\Models\EmployeeDepartmentHistory;
use Illuminate\Http\Request;

class AdminEmployeeDepartmentHistoryController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Employee Department History - Human Resources";
        $viewData["employeedepartmenthistories"] = EmployeeDepartmentHistory::all();
        return view(view: 'employeedepartmenthistory.index')->with(key: "viewData", value: $viewData);
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Shift;
use Illuminate\Http\Request;

class AdminShiftController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Shift - Human Resources";
        $viewData["shifts"] = Shift::all();
        return view(view: 'shift.index')->with(key: "viewData", value: $viewData);
    }
}
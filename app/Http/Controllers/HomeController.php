<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Human Resources";
        return view(view: 'home.index')->with(key: "viewData", value: $viewData);
    }
}
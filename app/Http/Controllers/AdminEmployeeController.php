<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;

class AdminEmployeeController extends Controller
{
    public function index(Request $request)
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Employee - Human Resource";

        if ($request->has('search')) {
            $search = $request->query('search');
            $viewData['employees'] = Employee::where('BusinessEntityID', $search)->get();
        } else {
            $viewData['employees'] = Employee::all();
        }
        return view(view: 'employee.index')->with(key: "viewData", value: $viewData);
    }
    public function store(Request $request)
    {
        $request->validate([
            'NationalIDNumber' => 'required|string|max:255',
            'LoginID' => 'required|string|max:255',
            'JobTitle' => 'required|string|max:255',
            'BirthDate' => 'required|string|max:255',
            'Gender' => 'required|string|max:255',
            'HireDate' => 'required|string|max:255',
        ]);

        Employee::create($request->all());

        return redirect()->route('employee.index')->with('success', 'Thêm Nhân Viên Mới thành công!');
    }
    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return redirect()->route('employee.index')->with('success', 'Employee deleted successfully.');
    }
    public function show($BusinessEntityID)
    {
        $viewData = [];
        $employee = Employee::findOrFail(id: $BusinessEntityID);

        $viewData["title"] = "Admin - Employee Detail - Human Resource";
        return view(view: 'employee.show', data: compact('employee'))->with(key: "viewData", value: $viewData);
    }
    
}

<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Models\EmployeeDepartmentHistory;
use Carbon\Carbon;

class AdminDepartmentController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Department - Human Resources";
        $viewData["departments"] = Department::all();
        return view(view: 'department.index')->with(key: "viewData", value: $viewData);
    }
    public function store(Request $request)
    {
        $request->validate([
            'Name' => 'required|string|max:255',
            'GroupName' => 'required|string|max:255',
        ]);
    
        Department::create($request->all());
    
        return redirect()->route('department.index')->with('success', 'Tạo phòng ban thành công!');
    }
    public function destroy($id)
    {
        $employee = Department::findOrFail($id);
        $employee->delete();
        return redirect()->route('department.index')->with('success', 'Employee deleted successfully.');
    }
    public function edit($DepartmentID)
    {
        $viewData = [];
        $viewData['title'] = "Admin Page - Department - Human Resources";
        $department = Department::findOrFail($DepartmentID);
        return view('department.edit', compact('department'))->with('viewData', $viewData);
    }

    public function update(Request $request, $DepartmentID)
    {
        $request->validate([
            'Name' => 'required|max:255',
            'GroupName' => 'required|max:255',
        ]);

        $department = Department::findOrFail($DepartmentID);
        $department->setName($request->input('Name'));
        $department->setGroupName($request->input('GroupName'));
        $department->setModifiedDate(Carbon::now());

        $department->save();

        return redirect()->route('department.index')->with('success', 'Cập nhật phòng ban thành công.');
    }
    public function show($DepartmentID)
    {
        $viewData = [];
        $viewData["title"] = "";
        
        $department = Department::findOrFail($DepartmentID);
        $employees = EmployeeDepartmentHistory::where('DepartmentID', $DepartmentID)->with('employee')->get();

        $viewData["title"] = "Admin - Department Detail - Human Resource";
        return view('department.show', compact('department', 'employees'))->with('viewData', $viewData);
    }
}

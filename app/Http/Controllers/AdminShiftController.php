<?php

namespace App\Http\Controllers;

use App\Models\Shift;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AdminShiftController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Shift - Human Resources";
        $viewData["shifts"] = Shift::all();
        return view(view: 'shift.index')->with(key: "viewData", value: $viewData);
    }
    public function store(Request $request)
    {
        $request->validate([
            'Name' => 'required|string|max:255',
            'StartTime' => 'required',
            'EndTime' => 'required',
        ]);
    
        Shift::create($request->all());
    
        return redirect()->route('shift.index')->with('success', 'Thêm Ca Làm Mới thành công!');
    }
    public function destroy($id)
    {
        $employee = shift::findOrFail($id);
        $employee->delete();
        return redirect()->route('shift.index')->with('success', 'shift deleted successfully.');
    }
    public function edit($ShiftID)
    {
        $viewData = [];
        $viewData['title'] = "Admin Page - Shift - Human Resources";
        $shift = Shift::findOrFail($ShiftID);
        return view('shift.edit', compact('shift'))->with('viewData', $viewData);
    }

    public function update(Request $request, $ShiftID)
    {
        // Xác thực dữ liệu
        $request->validate([
            'Name' => 'required|max:255',
            'StartTime' => 'required|date_format:H:i:s',
            'EndTime' => 'required|date_format:H:i:s|after:StartTime', 
        ]);
        

        // Tìm và cập nhật shift
        $shift = Shift::findOrFail($ShiftID);
        $shift->setName($request->input('Name'));
        $shift->setStartTime($request->input('StartTime'));
        $shift->setEndTime($request->input('EndTime'));
        $shift->setModifiedDate(Carbon::now());

        $shift->save();

        return redirect()->route('shift.index')->with('success', 'Cập nhật ca làm việc thành công.');
    }
}
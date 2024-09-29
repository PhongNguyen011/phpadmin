<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");

Route::get(
    '/employee',
    'App\Http\Controllers\AdminEmployeeController@index'
)
    ->name("employee.index");

// Route::post(
//     "/admin/employee/store",
//     "App\Http\Controllers\Admin\AdminEmployeeController@store"
// )
//     ->name("admin.employee.store");

Route::get(
    '/department',
    'App\Http\Controllers\AdminDepartmentController@index'
)
    ->name("department.index");

Route::get(
    '/shift',
    'App\Http\Controllers\AdminShiftController@index'
)
    ->name("shift.index");

Route::get(
    '/employeedepartmenthistory',
    'App\Http\Controllers\AdminEmployeeDepartmentHistoryController@index'
)
    ->name("employeedepartmenthistory.index");

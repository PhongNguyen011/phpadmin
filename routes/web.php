<?php

use App\Http\Controllers\AdminDepartmentController;
use App\Http\Controllers\AdminEmployeeController;
use App\Http\Controllers\AdminShiftController;
use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");

Route::get(
    '/employee',
    'App\Http\Controllers\AdminEmployeeController@index'
)
    ->name("employee.index");

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


Route::post('/department/store', [AdminDepartmentController::class, 'store'])->name('department.store');
Route::post('/employee/store', [AdminEmployeeController::class, 'store'])->name('employee.store');
Route::post('/shift/store', [AdminShiftController::class, 'store'])->name('shift.store');
Route::get('/employee', [AdminEmployeeController::class, 'index'])->name('employee.index');
Route::delete('/employee/{id}', [AdminEmployeeController::class, 'destroy'])->name('employee.destroy');
Route::delete('/department/{id}', [AdminDepartmentController::class, 'destroy'])->name('department.destroy');
Route::delete('/shift/{id}', [AdminShiftController::class, 'destroy'])->name('shift.destroy');
Route::get(
    '/employee/{BusinessEntityID}/show',
    'App\Http\Controllers\AdminEmployeeController@show'
)
    ->name("employee.show");
    Route::get('/departments/{DepartmentID}/edit', [AdminDepartmentController::class, 'edit'])->name('department.edit');
    Route::put('/department/{id}', [AdminDepartmentController::class, 'update'])->name('department.update');   
    Route::get('/shifts/{ShiftID}/edit', [AdminShiftController::class, 'edit'])->name('shift.edit');
    Route::put('/shifts/{id}', [AdminShiftController::class, 'update'])->name('shift.update');
    Route::get(
        '/department/{DepartmentID}/show',
        'App\Http\Controllers\AdminDepartmentController@show'
    )
        ->name("department.show");


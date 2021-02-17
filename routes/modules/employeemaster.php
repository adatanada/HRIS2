<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeMasterController;


Route::group(['prefix' => 'payroll'], function () {
    Route::get('/', [EmployeeMasterController::class, 'index'])->name('home');
    Route::get('/employee', [EmployeeMasterController::class, 'employee'])->name('employee');
    Route::get('/employee/create', [EmployeeMasterController::class, 'employee_create'])->name('employee.create');
    Route::post('/employee/save', [EmployeeMasterController::class, 'employee_save'])->name('employee.save');

});
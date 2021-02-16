<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeMasterController;

Route::group(['prefix' => 'Payroll'], function () {
    Route::get('/Employee', [EmployeeMasterController::class, 'Index'])->name('employee');  
    Route::get('/Employee/Transaction/{iD?}', [EmployeeMasterController::class, 'Form'])->name('employee.form');   
    Route::post('/Employee/Save/{iD?}', [EmployeeMasterController::class, 'Save'])->name('employee.save');
    Route::get('/Employee/Delete/{iD}', [EmployeeMasterController::class, 'Delete'])->name('employee.delete');
});
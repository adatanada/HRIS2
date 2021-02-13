<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeMasterController;

Route::group(['prefix' => 'Employee'], function () {
    Route::get('/', [LoanController::class, 'index'])->name('employee');
    Route::get('/Create', [LoanController::class, 'Create'])->name('employee.create');
    Route::get('/Update/{id}', [LoanController::class, 'Update'])->name('employee.update');
    Route::post('/Save/{id}/{type}', [LoanController::class, 'Save'])->name('employee.save');
});


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoanTypeController;

Route::group(['prefix' => 'Payroll'], function () {
    Route::get('/LoanType', [LoanTypeController::class, 'Index'])->name('loantype');
    Route::get('/LoanType/Create/{iD?}', [LoanTypeController::class, 'Form'])->name('loantype.create');
    Route::get('/LoanType/Update/{iD?}', [LoanTypeController::class, 'Form'])->name('loantype.update');
    Route::post('/LoanType/Save/{iD?}', [LoanTypeController::class, 'Save'])->name('loantype.Save');
    Route::get('/LoanType/Delete/{iD}', [LoanTypeController::class, 'Delete'])->name('loantype.delete');
});
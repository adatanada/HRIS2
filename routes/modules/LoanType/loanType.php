<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoanTypeController;


Route::group(['prefix' => 'Payroll'], function () {
    Route::get('/LoanType', [LoanTypeController::class, 'Index'])->name('loantype');
    Route::get('/LoanType/Create', [LoanTypeController::class, 'Create'])->name('loantype.create');
    Route::get('/LoanType/Update/id', [LoanTypeController::class, 'Update'])->name('loantype.update');
    Route::post('/LoanType/Save/{id?}', [LoanTypeController::class, 'Save'])->name('loantype.save');
});
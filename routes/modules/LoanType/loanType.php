<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoanTypeController;


Route::group(['prefix' => 'LoanType'], function () {
    Route::get('/', [LoanTypeController::class, 'Index'])->name('loantype');
    Route::get('/Create', [LoanTypeController::class, 'Create'])->name('loantype.create');
    Route::get('/Update/{id}', [LoanTypeController::class, 'Update'])->name('loantype.update');
    Route::post('/Save/id/{type}', [LoanTypeController::class, 'Save'])->name('loantype.save');
});
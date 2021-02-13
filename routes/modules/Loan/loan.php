<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoanController;

Route::group(['prefix' => 'Loan'], function () {
    Route::get('/', [LoanController::class, 'index'])->name('loan');
    Route::get('/Create', [LoanController::class, 'Create'])->name('loan.create');
    Route::get('/Update/{id}', [LoanController::class, 'Update'])->name('loan.update');
    Route::post('/Save/{id}/{type}', [LoanController::class, 'Save'])->name('loan.save');
});


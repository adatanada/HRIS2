<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContributionController;

Route::group(['prefix' => 'Payroll'], function () {
    Route::get('/Contribution/{type}', [ContributionController::class, 'Index'])->name('contribution');    
    Route::get('/Contribution/Transaction/{type}/{iD?}', [ContributionController::class, 'Form'])->name('contribution.form');       
    Route::get('/Contribution/Delete/{iD}', [ContributionController::class, 'Delete'])->name('contribution.delete');
    Route::post('/Contribution/Save/{iD?}', [ContributionController::class, 'Save'])->name('contribution.Save');
});
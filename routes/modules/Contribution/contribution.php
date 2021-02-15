<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContributionController;


Route::group(['prefix' => 'Contribution'], function () {
    Route::get('/{type}', [ContributionController::class, 'index'])->name('contribution');
    Route::get('/Create/{type}', [ContributionController::class, 'Create'])->name('contribution.create');
    Route::get('/Update/{id}/{type}', [ContributionController::class, 'Update'])->name('contribution.update');
    Route::post('/Save/{id}/{type}', [ContributionController::class, 'Save'])->name('contribution.save');
});

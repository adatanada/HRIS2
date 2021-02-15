<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ContributionController;
use App\Http\Controllers\LoanTypeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


foreach (glob(__DIR__ . "/modules/*.php") as $filename) {
    include $filename;
}


Route::group(['prefix' => 'Payroll'], function () {
    Route::get('/LoanType', [LoanTypeController::class, 'Index'])->name('loantype');
    Route::get('/LoanType/Create/{iD?}', [LoanTypeController::class, 'Form'])->name('loantype.create');
    Route::get('/LoanType/Update/{iD?}', [LoanTypeController::class, 'Form'])->name('loantype.update');
    Route::post('/LoanType/Save/{iD?}', [LoanTypeController::class, 'Save'])->name('loantype.Save');
    Route::get('/LoanType/Delete/{iD}', [LoanTypeController::class, 'Delete'])->name('loantype.delete');
});


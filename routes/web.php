<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DepartmentController;

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

Route::get('/payroll', [HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'department'], function () {
    Route::get('/department', [DepartmentController::class, 'department'])->name('department');
});


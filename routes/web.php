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

foreach(glob(__DIR__ , "/modules/*.php") as $filename) {
    include $filename;
}

Route::group(['prefix' => 'payroll'], function () {
    Route::get('/', [DepartmentController::class, 'index'])->name('home');
    Route::get('/department', [DepartmentController::class, 'department'])->name('department');
    Route::get('/department/add', [DepartmentController::class, 'department_add'])->name('department.add');
    Route::post('/department/save', [DepartmentController::class, 'department_save'])->name('department.save');
});


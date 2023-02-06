<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Model\Company;
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

Route::get('/company', [HomeController::class, 'index']);
Route::get('create-data', [HomeController::class, 'add'])->name('create-data');
Route::post('create', [HomeController::class, 'store'])->name('create-test');
Route::get('edit/{id}', [HomeController::class, 'edit'])->name('edit');
Route::post('update/{id}', [HomeController::class, 'update'])->name('update');
Route::get('delete/{id}', [HomeController::class, 'delete'])->name('delete');
Route::get('/', function () {
    return view('companies.welcome');
});




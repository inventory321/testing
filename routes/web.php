<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/custdashboard', [RegsController::class, 'store1'])->name('customer_dashboard');
Route::get('/riderdashboard', [RegsController::class, 'store1'])->name('rider_dashboard');
Route::get('/dashboard', [RegsController::class, 'store1'])->name('staff_dashboard');

require __DIR__.'/auth.php';

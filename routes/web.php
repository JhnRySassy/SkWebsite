<?php

use Illuminate\Support\Facades\Route;
use App\Models\Admin;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('admins/index', [AuthController::class, 'index'])->name('admins/index');
Route::post('/admins/index', [AuthController::class, 'indexPost'])->name('admins/index');
Route::get('admins/register', [AuthController::class, 'register']) ->name('admins/register');
Route::post('/admins/register', [AuthController::class, 'registerPost']) ->name('admins/register');
Route::get('admins/dashboard', [AuthController::class, 'dashboard'])->name('admins/dashboard');

// Route::resource('login', AuthController::class);
// Route::resource('signup', AuthController::class);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\HomeController;

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
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::post('/signin', [AuthController::class, 'signin'])->name('signin');
Route::post('/signup', [AuthController::class, 'signup'])->name('signup');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//khi đang đăng nhập không được phép đến trang này
Route::middleware(['logged'])->group(function () {
    Route::get('/dang-nhap', [AuthController::class, 'login'])->name('login');
    Route::get('/dang-ky', [AuthController::class, 'register'])->name('register');
});
//đăng nhập rồi mới cho vào
Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [DashboardController::class, 'index'])->name('admin');
    Route::get('/admin/thong-ke', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
});

Route::fallback(function () {
    return response()->view('404', [], 404);
});
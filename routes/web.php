<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Master\UserController;
use App\Http\Controllers\RegisterController;

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
    return view('user.dashboard.home');
});

Route::get('/profile', function(){
    return view('user.dashboard.profile');
});

Route::get('/about', function(){
    return view('user.dashboard.about');
});

Route::get('/product', function(){
    return view('user.dashboard.product');
});

Route::get('/testimonial', function(){
    return view('user.dashboard.testimonial');
});
Route::get('/galery', function(){
    return view('user.dashboard.galery');
});
Route::get('/email', function(){
    return view('generate.email.register_email');
});

Route::get('/biodata', [BiodataController::class, 'index'])->middleware('auth');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::post('logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/admin', [AdminController::class, 'index'])->middleware('auth');

Route::get('/admin/alumni', [AlumniController::class, 'index'])->middleware('auth');

// Admin routes
// Auth
// Route::prefix('login')->group(function () {
//     Route::get('/', [AuthController::class, 'admin']);
//     Route::post('/', [AuthController::class, 'login']);
//     Route::post('/logout', [AuthController::class, 'logout']);
// });

//admin
// Route::prefix('admin')->group(function () {
//     Route::get('/', [AdminController::class, 'index']);
//     Route::post('/', [UserController::class, 'store']);
//     Route::get('/', [AdminController::class, 'alumni']);
// }); 




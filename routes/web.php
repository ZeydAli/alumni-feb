<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Master\UserController;

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

Route::get('/contact', function(){
    return view('user.dashboard.contact');
});

Route::get('/testimonial', function(){
    return view('user.dashboard.testimonial');
});
Route::get('/galery', function(){
    return view('user.dashboard.galery');
});
Route::get('/register', function(){
    return view('register');
});
Route::get('/email', function(){
    return view('generate.email.register_email');
});


// Admin routes
// Auth
Route::prefix('login')->group(function () {
    Route::get('/', [AuthController::class, 'admin']);
    Route::post('/', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout']);
});


//admin
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index']);
    Route::post('/', [UserController::class, 'store']);
    Route::get('/', [AdminController::class, 'alumni']);
}); 




<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PesanController;
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
    return view('dashboards.index');
});


Route::prefix('dashboards')->group(function () {
    Route::get('/index', [DashboardController::class, 'index'])->name('dashboards.index');
    Route::get('/about', [DashboardController::class, 'about'])->name('dashboards.about');
    Route::get('/seni', [DashboardController::class, 'seni'])->name('dashboards.seni');
    Route::get('/blog', [DashboardController::class, 'blog'])->name('dashboards.blog');
    Route::get('/kontak', [DashboardController::class, 'kontak'])->name('dashboards.kontak');
});

Route::get('/blogs', function () {
    return view('blogs');
});


Route::resource('admins', AdminController::class)->middleware('auth');


Route::get('dashboards/blogs', [BlogController::class, 'index'])->name('blog');
Route::resource('blogs', BlogController::class);
Route::get('/home', function () {
    return view('dashboards.index');
});

Route::post('/login', [LoginController::class, 'auth'])->name('auth');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('store');

Route::post('/kontak', [DashboardController::class, 'store'])->name('dashboards.store');

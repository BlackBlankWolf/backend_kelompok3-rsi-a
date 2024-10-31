<?php

use App\Http\Controllers\CalculatorBMI;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::controller(DataController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
 
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

Route::get('/',[DashboardController::class,'index'])->name('dashboard');

Route::get('/calculatorBMI',[CalculatorBMI::class,'calculator'])->name('calculatorBMI');

// Route::middleware(['auth', 'user-access:user'])->group(function () {
//     Route::get('/home', [DashboardController::class, 'index'])->name('home');
//     Route::get('/profile', [UserController::class, 'userprofile'])->name('profile');
// });
 
// //Admin Routes List
// Route::middleware(['auth', 'user-access:admin'])->group(function () {
//     Route::get('/admin/home', [DashboardController::class, 'adminHome'])->name('admin/home');
 
//     Route::get('/admin/profile', [AdminController::class, 'profilepage'])->name('admin/profile');
 

// });

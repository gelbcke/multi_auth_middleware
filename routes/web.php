<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Auth::routes();

// Client Routes List
Route::middleware(['auth', 'user-access:client'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'clientHome'])->name('home');
});
// End Client

// Users (employee) Routes List
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/user/home', [HomeController::class, 'userHome'])->name('user.home');
});
// End Users

// Manager Routes List
Route::middleware(['auth', 'user-access:manager'])->group(function () {
  
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});
// End Manager

// Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});
// End Admin
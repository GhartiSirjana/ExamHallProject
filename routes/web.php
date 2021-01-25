<?php

use App\Http\Controllers\addcollegecontroller;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SeatManagementController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';




Route::get('/registration', [RegisterController::class, 'index'])->name('register.index');
Route::post('/store', [RegisterController::class, 'store'])->name('register.store');

Route::get('/loginindex', [RegisterController::class, 'loginIndex'])->name('form.login');
Route::post('/adminlogin', [RegisterController::class, 'login'])->name('form.login');

Route::get('/home', [SeatManagementController::class, 'index'])->name('home');
Route::get('/seat-test', [SeatManagementController::class, 'seatTest'])->name('examhallproject.seatmanagement');



Route::get('/addcollege' , [addcollegecontroller::class , 'index'])->name('college.createcollege');



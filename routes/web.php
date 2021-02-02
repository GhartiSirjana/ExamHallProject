<?php

use App\Http\Controllers\addcollegecontroller;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ExammanagementController;
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



Route::get('/showcollege' , [addcollegecontroller::class , 'show'])->name('college.showcollege');
Route::get('/college_delete/{id}' , [addcollegecontroller::class , 'destroy']);
Route::get('/createcollege' , [addcollegecontroller::class , 'create'])->name('college.createcollege');
Route::post('/college_submit' , [addcollegecontroller::class , 'store'])->name('college.createcollege');
Route::get('/editcollege/{id}' , [addcollegecontroller::class , 'edit'])->name('college.editcollege');
Route::post('/updatecollege/{id}' , [addcollegecontroller::class , 'update'])->name('college.editcollege');




Route::get('/showexam' , [ExammanagementController::class , 'show'])->name('exammanagement.showexam');
Route::get('/exam_delete/{id}' , [ExammanagementController::class , 'destroy']);
Route::get('/createexam' , [ExammanagementController::class , 'create'])->name('exammanagement.createexam');
Route::post('/exam_submit' , [ExammanagementController::class , 'store'])->name('exammanagement.createexam');
Route::get('/editexam/{id}' , [ExammanagementController::class , 'edit'])->name('exammanagement.editexam');
Route::post('/updateexam/{id}' , [ExammanagementController::class , 'update'])->name('exammanagement.editexam');
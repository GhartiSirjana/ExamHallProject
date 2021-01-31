<?php

use App\Http\Controllers\Auth\RegisteredUserController;

use App\Http\Controllers\FacultyController;
use App\Http\Controllers\LoginController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SeatallocationController;
use App\Http\Controllers\SeatManagementController;
use App\Http\Controllers\SubjectController;

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

Route::get('/seatarrangement', function () {
    return view('seatarrangement.seatarrangement_create');
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

Route::get('/faculty_show',[FacultyController::class, 'show'])->name('faculty.faculty_show');
Route::get('/faculty_delete/{id}',[FacultyController::class, 'destroy']);
Route::get('/faculty_create',[FacultyController::class, 'create'])->name('faculty.faculty_create');
Route::post('/faculty_submit',[FacultyController::class, 'store'])->name('faculty.faculty_create');
Route::get('/faculty_edit/{id}', [FacultyController::class, 'edit'])->name('faculty.faculty_edit');
Route::post('faculty_update/{id}', [FacultyController::class, 'update'])->name('faculty.faculty_edit');


Route::get('/subject_show',[SubjectController::class, 'show'])->name('subject.subject_show');
Route::get('/subject_delete/{id}',[SubjectController::class, 'destroy']);
Route::get('/subject_create',[SubjectController::class, 'create'])->name('subject.subject_create');
Route::post('/subject_submit',[SubjectController::class, 'store'])->name('subject.subject_create');
Route::get('/subject_edit/{id}', [SubjectController::class, 'edit'])->name('subject.subject_edit');
Route::post('subject_update/{id}', [SubjectController::class, 'update'])->name('subject.subject_edit');

Route::get('/seatallocation_show',[SeatallocationController::class, 'show'])->name('seatallocation.seatallocation_show');
Route::get('/seatallocation_delete/{id}',[SeatallocationController::class, 'destroy']);
Route::get('/seatallocation_create', [SeatallocationController::class, 'create'])->name('seatallocation.seatallocation_create');
Route::post('/seatallocation_submit',[SeatallocationController::class, 'store'])->name('seatallocation.seatallocation_create');
Route::get('/seatallocation_edit/{id}',[SeatallocationController::class, 'edit'])->name('seatallocation.seatallocation_edit');
Route::post('/seatallocation_update/{id}',[SeatallocationController::class, 'update'])->name('seatallocation.seatallocation_edit');



<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;


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

Route::get('login', [LoginController::class, 'index'])->name('form.login');

Route::get('/faculty_show',[FacultyController::class, 'show'])->name('faculty.faculty_show');
Route::get('/faculty_delete/{id}',[FacultyController::class, 'destroy'])->name('faculty.faculty_show');
Route::get('/faculty_create',[FacultyController::class, 'create'])->name('faculty.faculty_create');
Route::post('/faculty_submit',[FacultyController::class, 'store'])->name('faculty.faculty_create');
Route::get('/faculty_edit/{id}', [FacultyController::class, 'edit'])->name('faculty.faculty_edit');
Route::post('faculty_update/{id}', [FacultyController::class, 'update'])->name('faculty.faculty_edit');

<?php

use App\Http\Controllers\addcollegecontroller;
use App\Http\Controllers\ExammanagementController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\BlockController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\LoginController;

use App\Http\Controllers\SeatallocationController;
use App\Http\Controllers\SeatManagementController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\FloorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoommanagmentController;
use App\Http\Controllers\StaffManageController;

use App\Http\Controllers\StudentManageController;
use App\Models\Department;
use App\Models\exammanagement;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';




Route::get('/registration', [RegisterController::class, 'index'])->name('register.index');
Route::post('/store', [RegisterController::class, 'store'])->name('register.store');
// Route for the Login
Route::get('/loginindex', [RegisterController::class, 'loginIndex'])->name('form.loginhome');

// Route for the layout Admin
Route::post('/adminlogin', [RegisterController::class, 'login'])->name('form.login');


// Route for the Dashboard
Route::resource('/dashboard', DashboardController::class);

// Resource route for department
Route::resource('departments', DepartmentController::class);


// Resource Route for the Faculties
Route::resource('faculties', FacultyController::class); // faculties.index, 


// // Route for the Staff Management
Route::resource('staff', StaffManageController::class);

// Resource route for Student
Route::resource('student', StudentManageController::class);

// Resource route for Subjects
Route::resource('subjects', SubjectController::class);

// Resource route for the Seatallocation
Route::resource('seatallocations', SeatallocationController::class);

// Resources route for the College
Route::resource('colleges', addcollegecontroller::class);

// Resources Route for the Room
Route::resource('room', RoommanagmentController::class);
// Route::get('room-block', [RoommanagmentController::class, 'block'])->name('roommanagement.block');
// Route::get('room-floor', [RoommanagmentController::class, 'floor'])->name('roommanagement.floor');
// Route::get('room-block', [RoommanagmentController::class, 'block'])->name('roommanagement.block');

//Resource route for the exam 
Route::resource('exam', ExammanagementController::class);

Route::resource('faculties', FacultyController::class); // faculties.index, faculties.show, faculties.store

//Resource route for the block 
Route::resource('block', BlockController::class);

//Resource route for the floor 
Route::resource('floor', FloorController::class);



Route::get('/frontend', function () {
    return view('homepage.frontend');
});

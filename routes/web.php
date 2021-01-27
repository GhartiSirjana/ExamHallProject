<?php

use App\Http\Controllers\addcollegecontroller;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\DepartmentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StaffManageController;
use App\Http\Controllers\StudentManageController;

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
// Route for the Login
Route::get('/loginindex', [RegisterController::class, 'loginIndex'])->name('form.login');

// Route for the layout Admin
Route::post('/adminlogin', [RegisterController::class, 'login'])->name('form.login');


// Route for the Seat Management
Route::get('/staff-test', [StaffManageController::class, 'staffindex'])->name('examhallproject.staffmanagement');

// Add the details of the staff
Route::get('/staff-add', [StaffManageController::class, 'staffadd'])->name('examhallproject.staffadd');
Route::post('/staff-store', [StaffManageController::class, 'store'])->name('examhallproject.staffstore');

// show the data in the staff-test
Route::get('staffget', [StaffManageController::class, 'show'])->name('examhallproject.staffget');

// delete the staff details
Route::get('/delete/{id}', [StaffManageController::class, 'destroy'])->name('examhallproject.staffdelete');

// edit the staff details
Route::get('staff-edit/{id}', [StaffManageController::class, 'edit'])->name('examhallproject.editstaff');
Route::post('staff-update/{id}', [StaffManageController::class, 'update'])->name('examhallproject.staffupdate');

// To show the staff details
Route::get('staff-show/{id}', [StaffManageController::class, 'show'])->name('examhallproject.showstaff');




// Department Management
Route::get('/department', [DepartmentController::class, 'departmentIndex'])->name('examhallproject.department');

// Add the Details of the Department
Route::get('/department-add', [DepartmentController::class, 'departAdd'])->name('examhallproject.departmentadd');
Route::post('/department-store', [DepartmentController::class, 'departStore'])->name('examhallproject.departmentstore');

// Department edit
Route::get('/department-edit/{id}', [DepartmentController::class, 'edit'])->name('examhallproject.departmentedit');
Route::get('/department-update/{id}', [DepartmentController::class, 'update'])->name('examhallproject.departmentupdate');

// Department delete
Route::get('/department-delete/{id}', [DepartmentController::class, 'destroy'])->name('examhallproject.departmentdelete');

// Student Management
Route::get('student', [StudentManageController::class, 'studentIndex'])->name('examhallproject.student');

// Student details Add
Route::get('student-add', [StudentManageController::class, 'studentAdd'])->name('examhallproject.studentadd');































Route::get('/addcollege' , [addcollegecontroller::class , 'index'])->name('college.createcollege');




Route::get('/addcollege' , [addcollegecontroller::class , 'index'])->name('college.createcollege');



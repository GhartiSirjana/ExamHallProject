<?php

use App\Http\Controllers\addcollegecontroller;
use App\Http\Controllers\ExammanagementController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\LoginController;

use App\Http\Controllers\SeatallocationController;
use App\Http\Controllers\SeatManagementController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\DepartmentController;
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

// Route::get('/seatarrangement', function () {
//     return view('seatarrangement.seatarrangement_create');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';




Route::get('/registration', [RegisterController::class, 'index'])->name('register.index');
Route::post('/store', [RegisterController::class, 'store'])->name('register.store');
// Route for the Login
Route::get('/loginindex', [RegisterController::class, 'loginIndex'])->name('form.login');

// Route for the layout Admin
Route::post('/adminlogin', [RegisterController::class, 'login'])->name('form.login');


// Route for the Dashboard
Route::resource('/dashboard', DashboardController::class);

// Resource route for department
Route::resource('departments', DepartmentController::class);

// Student Management
Route::get('student', [StudentManageController::class, 'studentIndex'])->name('examhallproject.student');

// Student details Add
Route::get('student-add', [StudentManageController::class, 'studentAdd'])->name('examhallproject.studentadd');

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
Route::resource('college', addcollegecontroller::class);

// Route::get('/addcollege' , [addcollegecontroller::class , 'index'])->name('college.createcollege');




Route::get('/addcollege' , [addcollegecontroller::class , 'index'])->name('college.createcollege');


Route::resource('faculties', FacultyController::class); // faculties.index, faculties.show, faculties.store









Route::get('/showcollege' , [addcollegecontroller::class , 'show'])->name('college.showcollege');
Route::get('/college_delete/{id}' , [addcollegecontroller::class , 'destroy']);
Route::get('/createcollege' , [addcollegecontroller::class , 'create'])->name('college.createcollege');
Route::post('/college_submit' , [addcollegecontroller::class , 'store'])->name('college.store');
Route::get('/editcollege/{id}' , [addcollegecontroller::class , 'edit'])->name('college.editcollege');
Route::post('/updatecollege/{id}' , [addcollegecontroller::class , 'update'])->name('college.editcollege');




Route::get('/showexam' , [ExammanagementController::class , 'show'])->name('exammanagement.showexam');
Route::get('/exam_delete/{id}' , [ExammanagementController::class , 'destroy']);
Route::get('/createexam' , [ExammanagementController::class , 'create'])->name('exammanagement.createexam');
Route::post('/exam_submit' , [ExammanagementController::class , 'store'])->name('exammanagement.createexam');
Route::get('/editexam/{id}' , [ExammanagementController::class , 'edit'])->name('exammanagement.editexam');
Route::post('/updateexam/{id}' , [ExammanagementController::class , 'update'])->name('exammanagement.editexam');




Route::get('/showroom' , [RoommanagmentController::class , 'show'])->name('roommanagement.showroom');
Route::get('/room_delete/{id}' , [RoommanagmentController::class , 'destroy']);
Route::get('/addroom' , [RoommanagmentController::class , 'create'])->name('roommanagement.addroom');
Route::post('/room_submit' , [RoommanagmentController::class , 'store'])->name('roommanagement.addroom');
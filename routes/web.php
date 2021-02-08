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
<<<<<<< HEAD
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoommanagmentController;
=======
>>>>>>> e2e73e301a57d5938010a089445e302f82384049
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

// Route::get('/seatarrangement', function () {
//     return view('seatarrangement.seatarrangement_create');
// });

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


// Route for the Dashboard
Route::resource('dashboard', DashboardController::class);

// Resource route for department
Route::resource('departments', DepartmentController::class);

<<<<<<< HEAD
// Student Management
Route::get('student', [StudentManageController::class, 'studentIndex'])->name('examhallproject.student');

// Student details Add
Route::get('student-add', [StudentManageController::class, 'studentAdd'])->name('examhallproject.studentadd');














=======
// Resource Route for the Faculties
Route::resource('faculties', FacultyController::class); // faculties.index, 
>>>>>>> e2e73e301a57d5938010a089445e302f82384049


// // Route for the Staff Management
Route::resource('staff', StaffManageController::class);


// Resource route for Student
Route::resource('student', StudentManageController::class);













Route::get('/addcollege' , [addcollegecontroller::class , 'index'])->name('college.createcollege');


<<<<<<< HEAD
Route::resource('faculties', FacultyController::class); // faculties.index, faculties.show, faculties.store
=======


Route::get('/addcollege' , [addcollegecontroller::class , 'index'])->name('college.createcollege');


>>>>>>> e2e73e301a57d5938010a089445e302f82384049

Route::resource('subjects', SubjectController::class);

// Route::get('/subject_show',[SubjectController::class, 'show'])->name('subject.subject_show');
// Route::get('/subject_delete/{id}',[SubjectController::class, 'destroy']);
// Route::get('/subject_create',[SubjectController::class, 'create'])->name('subject.subject_create');
// Route::post('/subject_submit',[SubjectController::class, 'store'])->name('subject.subject_create');
// Route::get('/subject_edit/{id}', [SubjectController::class, 'edit'])->name('subject.subject_edit');
// Route::post('subject_update/{id}', [SubjectController::class, 'update'])->name('subject.subject_edit');

Route::resource('seatallocations', SeatallocationController::class);
// Route::get('/seatallocation_show',[SeatallocationController::class, 'show'])->name('seatallocation.seatallocation_show');
// Route::get('/seatallocation_delete/{id}',[SeatallocationController::class, 'destroy']);
// Route::get('/seatallocation_create', [SeatallocationController::class, 'create'])->name('seatallocation.seatallocation_create');
// Route::post('/seatallocation_submit',[SeatallocationController::class, 'store'])->name('seatallocation.seatallocation_create');
// Route::get('/seatallocation_edit/{id}',[SeatallocationController::class, 'edit'])->name('seatallocation.seatallocation_edit');
// Route::post('/seatallocation_update/{id}',[SeatallocationController::class, 'update'])->name('seatallocation.seatallocation_edit');




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
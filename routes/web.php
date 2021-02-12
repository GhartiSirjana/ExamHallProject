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
use App\Http\Controllers\StaffManageController;
use App\Http\Controllers\StudentManageController;
use App\Models\Department;

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

// Resource Route for the Faculties
Route::resource('faculties', FacultyController::class); // faculties.index, 


// // Route for the Staff Management
Route::resource('staff', StaffManageController::class);


// Resource route for Student
Route::resource('student', StudentManageController::class);

// Resource route for seatallocation
Route::resource('seatallocations', SeatallocationController::class);

// Resource route for subject
Route::resource('subjects', SubjectController::class);


// Get faculties by department id
Route::get('department-faculties/{department_id}', function($department_id) {
    $department = Department::find($department_id);
    if($department) {
        return response()->json($department->faculties);
    }
    return response()->json([]);
});







Route::get('/addcollege' , [addcollegecontroller::class , 'index'])->name('college.createcollege');




Route::get('/addcollege' , [addcollegecontroller::class , 'index'])->name('college.createcollege');




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
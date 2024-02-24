<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{AdminController,
    CollegeController,
    ClassroomController,
    SectionController ,
    StudentController,
    DoctorController,
    PromotionController,
    GraduatedController,

    CourseController,
    DoctorCollegeController,
    SettingController,
    ExamScheduleController,
    AjaxController,
    FeedbackCourseController,
    SearchController,
    StudyScheduleController,

    ProfileController
};
use App\Http\Livewire\Calendar;
use App\Models\Event;

use App\Http\Controllers\Auth\AdminAuthController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


define('PAGENATOR_COUNT', 15);


Route::get('dashboard/admin', function () {
    return view('index');
})->middleware(['auth:admin'])->name('dashboard.admin');





Route::middleware(['auth:admin'])->group(function () {


Route::resource('admins',AdminController::class);
Route::resource('colleges',CollegeController::class);
Route::resource('classrooms',ClassroomController::class);
Route::resource('sections',SectionController::class);
Route::resource('students',StudentController::class);
Route::resource('doctors',DoctorController::class);
Route::resource('promotion',PromotionController::class);
Route::resource('graduated',GraduatedController::class);

Route::resource('course',CourseController::class);
Route::resource('doctors_college',DoctorCollegeController::class);
Route::resource('setting',SettingController::class);
Route::resource('examsschedule',ExamScheduleController::class);
Route::resource('studyschedule',StudyScheduleController::class);





// Livewire::component('calendar', Calendar::class);


Route::controller(ProfileController::class)->group(function() {  
    Route::get('adminprofile','admin');
    Route::post('updateadminprofile/{id}','updateadmin')->name('updateadminprofile');
});


Route::controller(SettingController::class)->group(function() {  
    Route::get('setting','index');
    Route::post('setting_update','update');
});

Route::controller(AjaxController::class)->group(function() {  
Route::get('getcourse/{id}','GetCourse');
});




Route::controller(SearchController::class)->group(function() {  
    Route::get('search_receipt','SearchReceipt');
    });

// Route::controller(ExamScheduleController::class)->group(function() {  
          
// Route::get('schedule/{classroom_id}/{college_id}','showschedule');

// });

});



Route::get('/classes/{id}', [SectionController::class , 'getclasses'])->name('classes');
Route::get('/getsection/{id}', [SectionController::class , 'getsection'])->name('getsection');

// ////////////////////////////////logout adminP///////////////////////////////////////////
Route::post('/logout/admin', [AdminAuthController::class, 'destroy'])->middleware('auth:admin')->name('admin.logout');
/////////////////////////////////logout admin/////////////////////////////////////////////




require __DIR__.'/auth.php';

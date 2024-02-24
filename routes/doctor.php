<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\Auth\DoctorController;

use App\Http\Controllers\Doctor\QuizzeController;
use App\Http\Controllers\Doctor\QuestionController;
use App\Http\Controllers\Doctor\LibraryController;
use App\Http\Controllers\Doctor\DoctorCollegeController;

/*
|--------------------------------------------------------------------------
| Doctor Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('dashboard/doctor', function () {
    return view('dashboard_doctor.index');
})->middleware(['auth:doctor'])->name('dashboard.doctor');



Route::group(['middleware' => 'auth:doctor'], function(){
    Route::resource('quizzes',QuizzeController::class);
    Route::resource('questions',QuestionController::class);

    Route::controller(DoctorCollegeController::class)->group(function() {  
             Route::get('my_class','index');
    });
    

    Route::controller(LibraryController::class)->group(function() {  
     Route::get('library_index', 'index')->name('library_index');
     Route::post('library_store', 'store')->name('library_store');
     Route::get('library_create', 'create')->name('library_create');
});





   Route::get('student_quizze/{id}',[QuizzeController::class,'student_quizze'])->name('student.quizze');

   Route::post('repeat_quizze', [QuizzeController::class,'repeat_quizze'])->name('repeat.quizze');

});







// /////////////////////////////////////// logout student /////////////////////////////////////////////////////////////////

Route::post('logout/doctor', [DoctorController::class, 'destroy'])->middleware('auth:doctor')->name('doctor.logout');


//#############################################################################################




require __DIR__.'/auth.php';
<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Auth\StudentController;

use App\Http\Controllers\Student\ExamController;
use App\Http\Controllers\Student\ExamScheduleStudentController;  
 


use App\Http\Controllers\Doctor\LibraryController;  

Route::get('dashboard/student', function () {
    return view('dashboard_student.index');
})->middleware(['auth:student'])->name('dashboard.student');




Route::resource('student_exams', ExamController::class);


Route::controller(LibraryController::class)->group(function() {  
    
    Route::get('librarytostudent', 'ShowToStudent')->name('librarytostudent');
    Route::get('viewcourse/{id}', 'ViewCourse')->name('viewcourse');
    


});



Route::controller(ExamScheduleStudentController::class)->group(function() {  
    Route::get('examschedule', 'index');
});

// /////////////////////////////////////// logout student /////////////////////////////////////////////////////////////////

Route::post('logout/student', [StudentController::class, 'destroy'])->middleware('auth:student')->name('student.logout');


//#############################################################################################




require __DIR__.'/auth.php';

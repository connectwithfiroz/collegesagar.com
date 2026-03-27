<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\CollegeController;
use App\Http\Controllers\Admin\AdminprofileController;


Route::get('/login', [AdminHomeController::class, 'index'])->name('admin-login');
Route::post('/login', [AdminHomeController::class, 'login_post']);
Route::get('logout', [AdminHomeController::class, 'logout'])->name('admin.logout');

Route::group(['middleware' => 'admin'], function () {

    Route::get('/dashboard', [AdminHomeController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/student-enquiries', [AdminHomeController::class, 'studentEnquiries'])->name('admin.student.enquiries');

    Route::get('/student-enquiries-data', [AdminHomeController::class, 'studentEnquiriesData'])->name('admin.student.enquiries.data');

    Route::get('/student-enquiries-export', [AdminHomeController::class, 'exportStudentEnquiries'])->name('admin.student.enquiries.export');



    /*Admin Profile */

    Route::get('/admin-profile', [AdminprofileController::class, 'adminprofile'])->name('admin-profile');
    Route::post('/profile-update', [AdminprofileController::class, 'profileupdate'])->name('admin-profile-update');
    Route::post('/change-password', [AdminprofileController::class, 'changepassword'])->name('admin-change-password');

    Route::name('admin.')->group(function () {
        Route::resource('colleges', CollegeController::class);
        Route::get('/college-data', [CollegeController::class, 'collegeData'])->name('colleges.data');

        Route::get('admin/colleges/{college}/courses', [CollegeController::class, 'courses'])
            ->name('colleges.courses');

        Route::post('admin/colleges/{college}/courses', [CollegeController::class, 'storeCourses'])
            ->name('colleges.courses.store');
    });

});

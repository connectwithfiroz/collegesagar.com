<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminBannerController;
use App\Http\Controllers\Admin\AdminBlogController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminTestimonialController;
use App\Http\Controllers\Admin\AdminFaqController;
use App\Http\Controllers\Admin\AdminprofileController;
use App\Http\Controllers\Admin\DonationController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ProductController;


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

});

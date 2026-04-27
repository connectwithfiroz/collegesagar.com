<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\ScholarshipApplicationController;

require __DIR__ . "/dev.php";
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/colleges', [HomeController::class, 'colleges'])->name('colleges');


Route::get('/admission', [HomeController::class, 'admission'])->name('admission');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacy_policy');
Route::get('/scholarship', [HomeController::class, 'scholarship'])->name('scholarship');
Route::get('/student-support', [HomeController::class, 'studentSupport'])->name('student_support');
Route::get('/terms-condition', [HomeController::class, 'termsCondition'])->name('terms_condition');
Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::post('/contact/send', [HomeController::class, 'sendMail'])->name('contact.send');
Route::post('/submit-scholarship', [HomeController::class, 'submitScholarship'])->name('submit_scholarship');


// Route::post('/submit-scholarship', [ScholarshipApplicationController::class, 'store']);


Route::get('/college/{slug}', [HomeController::class, 'collegeDetails'])
    ->name('college.show');

// pending
// Route::get('/best-colleges-for-{course}', [HomeController::class, 'course'])
//     ->name('course.list');
Route::get('/best-colleges-for-{slug}-in-india', [HomeController::class, 'bestColleges'])->where('slug', '[A-Za-z0-9\-]+');
Route::get('/{slug}-colleges', [HomeController::class, 'collegeByCourseAndSpecification'])->where('slug', '[A-Za-z0-9\-]+');

Route::get('/{course}-{specialization}-colleges', [HomeController::class, 'specialization'])
    ->name('course.specialization');
Route::get('/ajax/colleges', [HomeController::class, 'ajaxColleges'])
    ->name('ajax.colleges');


Route::get('/apply-now', [HomeController::class, 'applyNowFrom'])
    ->name('apply.now_form');
Route::post('/apply-now', [HomeController::class, 'applyNow'])
    ->name('apply.now');
Route::get('/ajax/specializations', [HomeController::class, 'getSpecializations'])
    ->name('ajax.specializations');
Route::get('/career-guide', [HomeController::class, 'careerGuide'])
    ->name('career.guide');

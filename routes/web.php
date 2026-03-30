<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\ScholarshipApplicationController;

require __DIR__."/dev.php";
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

Route::post('/contact/send', [HomeController::class, 'sendMail'])->name('contact.send');
Route::post('/submit-scholarship', [HomeController::class, 'submitScholarship'])->name('submit_scholarship');


// Route::post('/submit-scholarship', [ScholarshipApplicationController::class, 'store']);


Route::get('/college/{slug}', [HomeController::class, 'collegeDetails'])
    ->name('college.show');
<?php

use App\Http\Controllers\ApplicantsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\VacancyController;

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

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::get('/', [PagesController::class, 'index'])->name('pages.index');
Route::get('/about', [PagesController::class, 'about'])->name('pages.about');
Route::get('/services', [PagesController::class, 'services'])->name('pages.services');
Route::get('/contact', [PagesController::class, 'contact'])->name('pages.contact');
Route::get('/apply', [PagesController::class, 'apply'])->name('pages.apply');
Route::get('/vacancies', [PagesController::class, 'vacancies'])->name('pages.vacancies');

Route::get('/applicants', [ApplicantsController::class, 'index'])->name('applicants.index');

Route::post('/contact-send', [ContactController::class, 'sendEmail'])->name('contact.send');
Route::resource('/jobs', JobController::class);
Route::post('apply-job', [JobApplicationController::class, 'store'])->name('apply.store');


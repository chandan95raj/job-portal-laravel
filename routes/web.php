<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WebController;

// website routes

Route::get('/',[WebController::class,'indexView']);
Route::get('/jobs',[WebController::class,'jobsView']);
Route::get('/job-detail',[WebController::class,'jobDetailView']);
Route::get('/browse-category',[WebController::class,'browseCategoryView']);
Route::get('/browse-job',[WebController::class,'browseJobView']);
Route::get('/candidate',[WebController::class,'candidateView']);
Route::get('/contact',[WebController::class,'contactView']);
Route::get('/employer',[WebController::class,'employerView']);
Route::get('/employer-detail',[WebController::class,'employerDetailView']);
Route::get('/resume-detail',[WebController::class,'resumeDetailView']);
Route::get('/signup',[WebController::class,'signupView']);

// Admin routes

Route::get('/admin',[AdminController::class,'indexView']);
Route::get('/admin/add-job',[AdminController::class,'addJobView']);
Route::get('/admin/change-password',[AdminController::class,'changePasswordView']);
Route::get('/admin/create-company',[AdminController::class,'createCompanyView']);
Route::get('/admin/create-resume',[AdminController::class,'createResumeView']);
Route::get('/admin/manage-job',[AdminController::class,'manageJobView']);
Route::get('/admin/manage-resume',[AdminController::class,'manageResumeView']);
Route::get('/admin/profile-settings',[AdminController::class,'profileSettingsView']);
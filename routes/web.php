<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aastha Capital Finance - Public Website Routes
|
*/

// Main Pages
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/loan-calculator', [PageController::class, 'calculator'])->name('calculator');
Route::get('/privacy-policy', [PageController::class, 'privacy'])->name('privacy');
Route::get('/terms-and-conditions', [PageController::class, 'terms'])->name('terms');

// Loan Pages
Route::get('/loans', [PageController::class, 'loans'])->name('loans');
Route::get('/loans/personal-loan', [PageController::class, 'personalLoan'])->name('loans.personal');
Route::get('/loans/business-loan', [PageController::class, 'businessLoan'])->name('loans.business');
Route::get('/loans/car-loan', [PageController::class, 'carLoan'])->name('loans.car');
Route::get('/loans/education-loan', [PageController::class, 'educationLoan'])->name('loans.education');
Route::get('/loans/unsecured-loan', [PageController::class, 'unsecuredLoan'])->name('loans.unsecured');
Route::get('/loans/home-loan', [PageController::class, 'homeLoan'])->name('loans.home');

// Lead/Loan Request Form Submission
Route::post('/loan-request', [PageController::class, 'submitLoanRequest'])->name('loan_request');

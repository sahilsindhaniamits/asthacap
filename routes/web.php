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

// ============================================================
// ADMIN PANEL ROUTES
// ============================================================
use App\Http\Controllers\Admin\DasboardController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PlanController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\HomeController as MainHomeController;

// User loan request (from old site popup form)
Route::post('/user/loan-request', [HomeController::class, 'loan_request'])->name('user.loan_request');

// Auth routes
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);

// Admin Routes
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', [DasboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/profile', [DasboardController::class, 'profile'])->name('admin.profile');
    Route::post('/profile/update', [DasboardController::class, 'profileUpdate'])->name('admin.profile.update');
    Route::get('/logout', function(){ Auth::logout(); return redirect('/login'); })->name('admin.logout');

    // Leads / Loan Requests
    Route::get('/leads', [DasboardController::class, 'enquiry'])->name('admin.loan_request');
    Route::get('/loan-requests', [DasboardController::class, 'loan_request'])->name('admin.loan_requests');
    Route::post('/lead-delete', [DasboardController::class, 'lead_delete'])->name('admin.lead_delete');
    Route::post('/lead-edit', [DasboardController::class, 'lead_edit'])->name('admin.lead_edit');
    Route::get('/lead-details/{id}', [DasboardController::class, 'get_lead_details'])->name('admin.lead_details');
    Route::post('/lead-approve', [DasboardController::class, 'lead_approve'])->name('admin.lead_approve');
    Route::post('/enquiry-status', [DasboardController::class, 'update_enquiry'])->name('admin.enquiry_status');
    Route::get('/export-excel', [DasboardController::class, 'export_excel'])->name('admin.export_excel');

    // Approved Leads
    Route::get('/approved-leads', [DasboardController::class, 'all_approved_leads'])->name('admin.loan_request_approved');
    Route::post('/edit-approve-lead', [DasboardController::class, 'edit_approved_submit'])->name('admin.edit_approve_lead.submit');
    Route::post('/approve-lead-details', [DasboardController::class, 'approve_lead_details'])->name('admin.approve_lead_details');

    // Sanction Letter
    Route::get('/sanction', [DasboardController::class, 'sanctio_letter_page'])->name('admin.sanction_page');
    Route::get('/edit-sanction', [DasboardController::class, 'edit_sanctio_letter_page'])->name('admin.edit_sanction_page');
    Route::post('/create-sanction', [DasboardController::class, 'create_sanction_letter'])->name('admin.create_sanction');
    Route::get('/view-pdf', [DasboardController::class, 'view_pdf'])->name('admin.view_pdf');
    Route::get('/print-sanction', [DasboardController::class, 'print_sanction_pdf'])->name('admin.print_sanction_pdf');

    // Users
    Route::get('/users', [DasboardController::class, 'users'])->name('admin.users');
    Route::get('/user/{user_id}/network', [DasboardController::class, 'userNetwork'])->name('admin.user.network');
    Route::get('/user/{user_id}/plans', [DasboardController::class, 'userPlans'])->name('admin.user.plans');

    // Messages
    Route::get('/message/create', [DasboardController::class, 'send_message'])->name('admin.message.create');
    Route::post('/message/send', [DasboardController::class, 'send_message_user'])->name('admin.message.send');

    // Plans
    Route::resource('plan', PlanController::class)->names('admin.plan');

    // Banners
    Route::resource('banner', BannerController::class)->names('admin.banner');

    // Settings
    Route::get('/setting', [SettingController::class, 'index'])->name('admin.setting');
    Route::post('/setting', [SettingController::class, 'store'])->name('admin.setting.store');

    // Transactions
    Route::get('/transaction/deposit', [TransactionController::class, 'deposit'])->name('admin.transaction.deposit');
    Route::get('/transaction/withdrawl', [TransactionController::class, 'withdrawl'])->name('admin.transaction.withdrawl');
    Route::post('/transaction/update', [TransactionController::class, 'update'])->name('admin.transaction.update');
});

// Check loan status (public)
Route::post('/check-status', [DasboardController::class, 'check_status'])->name('check_status');

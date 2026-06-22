<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DasboardController;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Admin panel routes for Aastha Capital / Prime Finance India
| Prefix: /admin | Name prefix: admin.
|
*/

// Admin Authentication
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Protected Admin Routes
Route::middleware(['auth'])->group(function () {

    // Dashboard
    Route::get('/', [DasboardController::class, 'index'])->name('dashboard');

    // All Leads (Loan Requests)
    Route::get('/leads', [DasboardController::class, 'loan_request'])->name('loan_request');
    Route::get('/loan-request/{id}/details', [DasboardController::class, 'get_lead_details'])->name('lead_details');
    Route::post('/loan-request/edit', [DasboardController::class, 'lead_edit'])->name('lead_edit');
    Route::post('/loan-request/delete', [DasboardController::class, 'lead_delete'])->name('lead_delete');
    Route::post('/loan-request/approve', [DasboardController::class, 'lead_approve'])->name('lead_approve');
    Route::get('/leads/export', [DasboardController::class, 'export_excel'])->name('export_excel');

    // Approved Leads
    Route::get('/approved', [DasboardController::class, 'all_approved_leads'])->name('loan_request_approved');
    Route::get('/approved/details', [DasboardController::class, 'approve_lead_details'])->name('edit_approve_lead');
    Route::post('/approved/edit', [DasboardController::class, 'edit_approved_submit'])->name('edit_approve_lead.submit');

    // PDF Letters
    Route::get('/pdf/approval', [DasboardController::class, 'view_pdf'])->name('view_pdf');
    Route::get('/sanction-letter/create', [DasboardController::class, 'sanctio_letter_page'])->name('sanction_page');
    Route::post('/sanction-letter/store', [DasboardController::class, 'create_sanction_letter'])->name('create.sanction_letter');
    Route::get('/sanction-letter/edit', [DasboardController::class, 'edit_sanctio_letter_page'])->name('edit_sanction_page');
    Route::get('/sanction-letter/print', [DasboardController::class, 'print_sanction_pdf'])->name('print_sanction_page');

    // Profile
    Route::get('/profile', [DasboardController::class, 'profile'])->name('profile');
    Route::post('/profile', [DasboardController::class, 'profileUpdate'])->name('profile.update');

    // SMS Messages
    Route::get('/message/create', [DasboardController::class, 'send_message'])->name('message.create');
    Route::post('/message/send', [DasboardController::class, 'send_message_user'])->name('message.send');

    // Check Status API
    Route::post('/check-status', [DasboardController::class, 'check_status'])->name('check_status');
});

<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

// Lead Form Submission
Route::post('/submit-lead', [\App\Http\Controllers\LeadController::class, 'store'])->name('lead.store');


// Authentication Routes
Auth::routes();

// Admin Panel Routes
Route::prefix('admin')->as('admin.')->middleware(['auth','admin'])->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\DasboardController::class, 'index'])->name('dashboard');
    Route::get('profile', [\App\Http\Controllers\Admin\DasboardController::class, 'profile'])->name('profile');
    Route::get('enquiry', [\App\Http\Controllers\Admin\DasboardController::class, 'loan_request'])->name('loan_request');
    Route::post('enquiry/update', [\App\Http\Controllers\Admin\DasboardController::class, 'update_enquiry'])->name('enquiry_status');
    Route::get('loan-request/{id}/details', [\App\Http\Controllers\Admin\DasboardController::class, 'get_lead_details'])->name('get_lead_details');
    Route::post('loan-request/edit', [\App\Http\Controllers\Admin\DasboardController::class, 'lead_edit'])->name('lead_edit');
    Route::post('loan-request/delete', [\App\Http\Controllers\Admin\DasboardController::class, 'lead_delete'])->name('lead_delete');
    Route::post('loan-request/approve', [\App\Http\Controllers\Admin\DasboardController::class, 'lead_approve'])->name('lead_approve');
    Route::get('loan-request/approved', [\App\Http\Controllers\Admin\DasboardController::class, 'all_approved_leads'])->name('loan_request_approved');
    Route::get('leads/excel', [\App\Http\Controllers\Admin\DasboardController::class, 'export_excel'])->name('export_excel');
    Route::get('pdf', [\App\Http\Controllers\Admin\DasboardController::class, 'approval_pdf'])->name('pdf');
    Route::get('generate-pdf/', [\App\Http\Controllers\Admin\DasboardController::class, 'generatePDF'])->name('generate_pdf');
    Route::get('view-pdf/', [\App\Http\Controllers\Admin\DasboardController::class, 'view_pdf'])->name('view_pdf');
    Route::get('create-sanction-letter/', [\App\Http\Controllers\Admin\DasboardController::class, 'sanctio_letter_page'])->name('sanction_page');
    Route::get('edit-sanction-letter/', [\App\Http\Controllers\Admin\DasboardController::class, 'edit_sanctio_letter_page'])->name('edit_sanction_page');
    Route::get('print-sanction-letter/', [\App\Http\Controllers\Admin\DasboardController::class, 'print_sanction_pdf'])->name('print_sanction_page');
    Route::post('submit-sanction-letter/', [\App\Http\Controllers\Admin\DasboardController::class, 'create_sanction_letter'])->name('create.sanction_letter');
    Route::get('edit/approved-lead', [\App\Http\Controllers\Admin\DasboardController::class, 'approve_lead_details'])->name('edit_approve_lead');
    Route::post('edit/approved-lead/submit', [\App\Http\Controllers\Admin\DasboardController::class, 'edit_approved_submit'])->name('edit_approve_lead.submit');
    Route::get('send-message', [\App\Http\Controllers\Admin\DasboardController::class, 'send_message'])->name('message.create');
    Route::post('message-generate', [\App\Http\Controllers\Admin\DasboardController::class, 'send_message_user'])->name('message.send');

    Route::any('logout', function () {
        \Illuminate\Support\Facades\Auth::logout();
        return redirect()->route('login');
    })->name('logout');

    Route::post('profile', [\App\Http\Controllers\Admin\DasboardController::class, 'profileUpdate'])->name('profile.update');
    Route::get('settings', [\App\Http\Controllers\Admin\SettingController::class,'index'])->name('setting');
    Route::any('setting', [\App\Http\Controllers\Admin\SettingController::class,'settings'])->name('setting.create');

    Route::get('users', [\App\Http\Controllers\Admin\DasboardController::class, 'users'])->name('users');
    Route::get('user/{user_id}/network', [\App\Http\Controllers\Admin\DasboardController::class, 'userNetwork'])->name('user.network');
    Route::get('user/{user_id}/plans', [\App\Http\Controllers\Admin\DasboardController::class, 'userPlans'])->name('user.plans');

    Route::resource('plan', \App\Http\Controllers\Admin\PlanController::class);
    Route::resource('banner', \App\Http\Controllers\Admin\BannerController::class);
    Route::resource('category', \App\Http\Controllers\Admin\CategoryController::class);

    Route::post('storage/upload/{type}', [\App\Http\Controllers\StorageController::class, 'uploadImage'])->name('storage.upload');

    Route::get('transaction/recharge', [\App\Http\Controllers\Admin\TransactionController::class, 'depositRequests'])->name('transaction.deposit');
    Route::get('transaction/withdrawl', [\App\Http\Controllers\Admin\TransactionController::class, 'withdrawlRequests'])->name('transaction.withdrawl');
    Route::post('transaction/withdrawl/{transaction_id}/accept', [\App\Http\Controllers\Admin\TransactionController::class, 'withdrawlAccept'])->name('transaction.withdrawl.accept');
    Route::post('transaction/withdrawl/{transaction_id}/reject', [\App\Http\Controllers\Admin\TransactionController::class, 'withdrawlReject'])->name('transaction.withdrawl.reject');
    Route::any('transaction/deposit/{transaction_id}/accept', [\App\Http\Controllers\Admin\TransactionController::class, 'depositAccept'])->name('transaction.deposit.accept');
    Route::post('transaction/deposit/{transaction_id}/reject', [\App\Http\Controllers\Admin\TransactionController::class, 'depositReject'])->name('transaction.deposit.reject');
});

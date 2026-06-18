<?php

use App\Http\Controllers\Admin\PlanController;
use App\Http\Controllers\Admin\SettingController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|a
*/

Route::get('/', function () {
    return redirect()->route('home');
});
Route::fallback(function () {
    return redirect()->route('home');
});
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('service');
})->name('services');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/loan-status', function () {
    return view('loan_status');
})->name('loan_status');

Route::get('/personal', function () {
    return view('personal');
})->name('personal');

Route::get('/secure', function () {
    return view('secure');
})->name('secure');

Route::get('/business', function () {
    return view('business');
})->name('business');

Route::get('/property', function () {
    return view('property');
})->name('property');

Route::get('/doctor', function () {
    return view('doctor');
})->name('doctor');

Route::get('/policy', function () {
    return view('policy');
})->name('policy');

Route::get('/car', function () {
    return view('car');
})->name('car');

Route::get('/construction', function () {
    return view('construction');
})->name('construction');

Route::get('/education', function () {
    return view('education');
})->name('education');

Route::get('/project', function () {
    return view('project');
})->name('project');

Route::get('/test', function () {
    return view('test');
})->name('test');

Route::get('/user/dashboard', [\App\Http\Controllers\User\HomeController::class, 'dashboard'])->name('user.dashboard.home'); 

Auth::routes();
 Route::get('/home', [App\Http\Controllers\User\HomeController::class, 'index'])->name('home');
 Route::get('check-status', [\App\Http\Controllers\Admin\DasboardController::class, 'check_status'])->name('check_status');
  Route::post('/loan-reuqest', [App\Http\Controllers\User\HomeController::class, 'loan_request'])->name('loan_request');
  
 Route::post('/enquiry-submit', [App\Http\Controllers\User\HomeController::class, 'submit_enquiry']);
 Route::get('profile/team-reports', [\App\Http\Controllers\User\HomeController::class, 'team_page'])->name('profile.team');
 Route::get('user/withdraw-details', [\App\Http\Controllers\User\HomeController::class, 'withdraw_method'])->name('user.withdraw-method');
 Route::get('/login', [\App\Http\Controllers\User\HomeController::class, 'showloginform'])->name('login');   
 Route::get('/register', [\App\Http\Controllers\User\HomeController::class,'registerform'])->name('user.register');
 Route::get('/withdraw_cards', [\App\Http\Controllers\User\HomeController::class,'withdraw_cards'])->name('user.cards');  
 Route::get('/user/invite', [\App\Http\Controllers\User\HomeController::class,'invite'])->name('user.invite');  
 Route::get('/user/profile', [\App\Http\Controllers\User\HomeController::class,'info'])->name('user.info');  
 Route::get('/user/address-check', [\App\Http\Controllers\User\HomeController::class,'address_check'])->name('user.acheck');  
 Route::get('/user/all-orders', [\App\Http\Controllers\User\HomeController::class,'all_orders'])->name('user.allorders');  
 Route::get('/online', [\App\Http\Controllers\HomeController::class,'online'])->name('online');  
 Route::get('/promotion-rewards', [\App\Http\Controllers\HomeController::class,'promotion'])->name('promotion');  
 Route::get('/company-profile', [\App\Http\Controllers\HomeController::class,'company'])->name('company');  
 Route::get('/vip-events', [\App\Http\Controllers\HomeController::class,'vip_events'])->name('vip');  
 Route::get('/tutorial', [\App\Http\Controllers\HomeController::class,'tutorial'])->name('tutorial');  
 Route::get('/beginner', [\App\Http\Controllers\HomeController::class,'beginner'])->name('beginner');  
 Route::get('/announcement', [\App\Http\Controllers\HomeController::class,'announcement'])->name('announcement');  
  
  
 Route::get('/user/select-address', [\App\Http\Controllers\User\HomeController::class,'select_address'])->name('user.select');  
 Route::post('/reset-password', [\App\Http\Controllers\User\HomeController::class,'reset_password'])->name('user.reset'); 
 Route::post('/check-username', [\App\Http\Controllers\User\HomeController::class,'check_username'])->name('check.username'); 
  Route::post('/check-code', [\App\Http\Controllers\User\HomeController::class,'check_code'])->name('check.code'); 
 Route::post('/delete-address', [\App\Http\Controllers\User\HomeController::class,'delete_card'])->name('user.delete_card');  
Route::post('/withdraw-details', [\App\Http\Controllers\User\HomeController::class,'add_withdraw_details'])->name('user.withdraw.details');  
Route::post('/withdraw-cards', [\App\Http\Controllers\User\HomeController::class,'add_withdraw'])->name('user.withdraw.cards');  
  
 Route::any('/login-user', [\App\Http\Controllers\User\HomeController::class,'login'])->name('submit.login');    
 Route::post('/submit-register', [\App\Http\Controllers\User\HomeController::class,'register'])->name('register');   
 Route::any('/grab-money', [App\Http\Controllers\User\HomeController::class, 'grabpage'])->name('user.grab.page');
 Route::any('/grab-value', [App\Http\Controllers\User\HomeController::class, 'generate_order'])->name('user.order');
 Route::any('/grab-earn', [App\Http\Controllers\User\HomeController::class, 'grab_value'])->name('user.earn');
//  Route::any('/order', [App\Http\Controllers\User\HomeController::class,'user_order'])->name('user.order');

Route::middleware(['auth', 'user'])->namespace('\App\Http\Controllers\User')->group(function () {
   
    Route::any('plan/{plan_id}/buy', [\App\Http\Controllers\User\PlanController::class, 'buy'])->name('plan.buy');

    Route::any('network', [\App\Http\Controllers\User\HomeController::class, 'network'])->name('network');
    Route::any('plans', [\App\Http\Controllers\User\HomeController::class, 'plans'])->name('plans');

    Route::any('profile', [\App\Http\Controllers\User\HomeController::class, 'profile'])->name('profile');
    Route::get('profile/edit', [\App\Http\Controllers\User\HomeController::class, 'editProfile'])->name('profile.edit');
    Route::post('profile/edit', [\App\Http\Controllers\User\HomeController::class, 'editProfileSave'])->name('profile.edit');

    Route::get('profile/bank', [\App\Http\Controllers\User\HomeController::class, 'editBank'])->name('profile.bank');
     Route::get('profile/team-reports', [\App\Http\Controllers\User\HomeController::class, 'team_page'])->name('profile.team');
    Route::post('profile/bank', [\App\Http\Controllers\User\HomeController::class, 'editBankSave'])->name('profile.bank');

    Route::any('logout', [\App\Http\Controllers\User\HomeController::class, 'logout'])->name('logout');

    Route::prefix('wallet')->as('wallet.')->namespace('\App\Http\Controllers\User')->group(function () {
        Route::get('/', [\App\Http\Controllers\User\TransactionController::class, 'index'])->name('index');
        Route::get('transactions', [\App\Http\Controllers\User\TransactionController::class, 'index'])->name('transactions');
        Route::get('add-money', [\App\Http\Controllers\User\TransactionController::class, 'addMoney'])->name('add-money');
        Route::post('get-transaction-token', [\App\Http\Controllers\User\TransactionController::class, 'getTransactionToken'])->name('get-transaction-token');
        Route::post('add-money', [\App\Http\Controllers\User\TransactionController::class, 'addMoneySubmit'])->name('add-money');
        Route::get('withdraw-money', [\App\Http\Controllers\User\TransactionController::class, 'withdraw_page'])->name('withdraw-money');
         Route::post('withdraw-money', [\App\Http\Controllers\User\TransactionController::class, 'withdrawSubmit'])->name('submitwithdraw-money');
    });
});


Route::prefix('admin')->as('admin.')->namespace('\App\Http\Controllers\Admin')->middleware(['auth','admin'])->group(function () {
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
        Auth::logout();
        return redirect()->route('login');
    })->name('logout');

    Route::post('profile', [\App\Http\Controllers\Admin\DasboardController::class, 'profileUpdate'])->name('profile');
    Route::get('settings', [\App\Http\Controllers\Admin\SettingController::class,'index'])->name('setting');
     Route::any('setting', [\App\Http\Controllers\Admin\SettingController::class,'settings'])->name('setting.create');

    Route::get('users', [\App\Http\Controllers\Admin\DasboardController::class, 'users'])->name('users');

    Route::get('user/{user_id}/network', [\App\Http\Controllers\Admin\DasboardController::class, 'userNetwork'])->name('user.network');

    Route::get('user/{user_id}/plans', [\App\Http\Controllers\Admin\DasboardController::class, 'userPlans'])->name('user.plans');

    Route::resource('plan', PlanController::class);
    Route::resource('banner', BannerController::class);
     Route::resource('category', CategoryController::class);

    Route::post('storage/upload/{type}', [\App\Http\Controllers\StorageController::class, 'uploadImage'])->name('storage.upload');

    Route::get('transaction/recharge', [\App\Http\Controllers\Admin\TransactionController::class, 'depositRequests'])->name('transaction.deposit');
    Route::get('transaction/withdrawl', [\App\Http\Controllers\Admin\TransactionController::class, 'withdrawlRequests'])->name('transaction.withdrawl');

    Route::post('transaction/withdrawl/{transaction_id}/accept', [\App\Http\Controllers\Admin\TransactionController::class, 'withdrawlAccept'])->name('transaction.withdrawl.accept');
    Route::post('transaction/withdrawl/{transaction_id}/reject', [\App\Http\Controllers\Admin\TransactionController::class, 'withdrawlReject'])->name('transaction.withdrawl.reject');

    Route::any('transaction/deposit/{transaction_id}/accept', [\App\Http\Controllers\Admin\TransactionController::class, 'depositAccept'])->name('transaction.deposit.accept');
    Route::post('transaction/deposit/{transaction_id}/reject', [\App\Http\Controllers\Admin\TransactionController::class, 'depositReject'])->name('transaction.deposit.reject');
});

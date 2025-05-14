<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard-saas', [App\Http\Controllers\HomeController::class, 'dashboardSaas'])->name('dashboard-saas');
Route::get('/apps-filemanager', [App\Http\Controllers\HomeController::class, 'appsFilemanager'])->name('apps-filemanager');
Route::get('/auth-confirm-mail', [App\Http\Controllers\HomeController::class, 'authConfirmMail'])->name('auth-confirm-mail');
Route::get('/auth-confirm-mail-2', [App\Http\Controllers\HomeController::class, 'authConfirmMail2'])->name('auth-confirm-mail-2');
Route::get('/auth-email-verification', [App\Http\Controllers\HomeController::class, 'authEmailVerification'])->name('auth-email-verification');
Route::get('/auth-email-verification-2', [App\Http\Controllers\HomeController::class, 'authEmailVerification2'])->name('auth-email-verification-2');
Route::get('/auth-lock-screen', [App\Http\Controllers\HomeController::class, 'authLockScreen'])->name('auth-lock-screen');
Route::get('/auth-lock-screen-2', [App\Http\Controllers\HomeController::class, 'authLockScreen2'])->name('auth-lock-screen-2');
Route::get('/auth-login', [App\Http\Controllers\HomeController::class, 'authLogin'])->name('auth-login');
Route::get('/auth-login-2', [App\Http\Controllers\HomeController::class, 'authLogin2'])->name('auth-login-2');
Route::get('/auth-recoverpw', [App\Http\Controllers\HomeController::class, 'authRecoverpw'])->name('auth-recoverpw');
Route::get('/auth-recoverpw-2', [App\Http\Controllers\HomeController::class, 'authRecoverpw2'])->name('auth-recoverpw-2');
Route::get('/auth-register', [App\Http\Controllers\HomeController::class, 'authRegister'])->name('auth-register');
Route::get('/auth-register-2', [App\Http\Controllers\HomeController::class, 'authRegister2'])->name('auth-register-2');
Route::get('/auth-two-step-verification', [App\Http\Controllers\HomeController::class, 'authTwoStepVerification'])->name('auth-two-step-verification');
Route::get('/auth-two-step-verification-2', [App\Http\Controllers\HomeController::class, 'authTwoStepVerification2'])->name('auth-two-step-verification-2');
Route::get('/blog-details', [App\Http\Controllers\HomeController::class, 'blogDetails'])->name('blog-details');
Route::get('/blog-grid', [App\Http\Controllers\HomeController::class, 'blogGrid'])->name('blog-grid');
Route::get('/blog-list', [App\Http\Controllers\HomeController::class, 'blogList'])->name('blog-list');
Route::get('/calendar', [App\Http\Controllers\HomeController::class, 'calendar'])->name('calendar');
Route::get('/calendar-full', [App\Http\Controllers\HomeController::class, 'calendarFull'])->name('calendar-full');
Route::get('/candidate-list', [App\Http\Controllers\HomeController::class, 'candidateList'])->name('candidate-list');
Route::get('/candidate-overview', [App\Http\Controllers\HomeController::class, 'candidateOverview'])->name('candidate-overview');
Route::get('/charts-apex', [App\Http\Controllers\HomeController::class, 'chartsApex'])->name('charts-apex');
Route::get('/charts-chartjs', [App\Http\Controllers\HomeController::class, 'chartsChartjs'])->name('charts-chartjs');
Route::get('/charts-echart', [App\Http\Controllers\HomeController::class, 'chartsEchart'])->name('charts-echart');
Route::get('/charts-flot', [App\Http\Controllers\HomeController::class, 'chartsFlot'])->name('charts-flot');
Route::get('/charts-knob', [App\Http\Controllers\HomeController::class, 'chartsKnob'])->name('charts-knob');
Route::get('/charts-sparkline', [App\Http\Controllers\HomeController::class, 'chartsSparkline'])->name('charts-sparkline');
Route::get('/charts-tui', [App\Http\Controllers\HomeController::class, 'chartsTui'])->name('charts-tui');
Route::get('/chat', [App\Http\Controllers\HomeController::class, 'chat'])->name('chat');
Route::get('/contacts-grid', [App\Http\Controllers\HomeController::class, 'contactsGrid'])->name('contacts-grid');
Route::get('/contacts-list', [App\Http\Controllers\HomeController::class, 'contactsList'])->name('contacts-list');
Route::get('/contacts-profile', [App\Http\Controllers\HomeController::class, 'contactsProfile'])->name('contacts-profile');
Route::get('/crypto-buy-sell', [App\Http\Controllers\HomeController::class, 'cryptoBuySell'])->name('crypto-buy-sell');
Route::get('/crypto-exchange', [App\Http\Controllers\HomeController::class, 'cryptoExchange'])->name('crypto-exchange');
Route::get('/crypto-ico-landing', [App\Http\Controllers\HomeController::class, 'cryptoIcoLanding'])->name('crypto-ico-landing');
Route::get('/crypto-kyc-application', [App\Http\Controllers\HomeController::class, 'cryptoKycApplication'])->name('crypto-kyc-application');
Route::get('/crypto-lending', [App\Http\Controllers\HomeController::class, 'cryptoLending'])->name('crypto-lending');
Route::get('/crypto-orders', [App\Http\Controllers\HomeController::class, 'cryptoOrders'])->name('crypto-orders');
Route::get('/crypto-wallet', [App\Http\Controllers\HomeController::class, 'cryptoWallet'])->name('crypto-wallet');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/dashboard-blog', [App\Http\Controllers\HomeController::class, 'dashboardBlog'])->name('dashboard-blog');
Route::get('/dashboard-crypto', [App\Http\Controllers\HomeController::class, 'dashboardCrypto'])->name('dashboard-crypto');
Route::get('/dashboard-job', [App\Http\Controllers\HomeController::class, 'dashboardJob'])->name('dashboard-job');
Route::get('/dashboard-saas', [App\Http\Controllers\HomeController::class, 'dashboardSaas'])->name('dashboard-saas');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

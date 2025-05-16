<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Platform\UserController;
use App\Http\Controllers\Platform\EmployerController;

Route::get('/dashboard-saas', [App\Http\Controllers\HomeController::class, 'dashboardSaas'])->name('dashboard-saas');
Route::get('/apps-filemanager', [App\Http\Controllers\HomeController::class, 'appsFilemanager'])->name('apps-filemanager');
Route::get('/auth-confirm-mail', [App\Http\Controllers\HomeController::class, 'authConfirmMail'])->name('auth-confirm-mail');
Route::get('/auth-confirm-mail-2', [App\Http\Controllers\HomeController::class, 'authConfirmMail2'])->name('auth-confirm-mail-2');
Route::get('/auth-email-verification', [App\Http\Controllers\HomeController::class, 'authEmailVerification'])->name('auth-email-verification');
Route::get('/auth-email-verification-2', [App\Http\Controllers\HomeController::class, 'authEmailVerification-2'])->name('auth-email-verification-2');
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
Route::get('/ecommerce-add-product', [App\Http\Controllers\HomeController::class, 'ecommerceAddProduct'])->name('ecommerce-add-product');
Route::get('/ecommerce-cart', [App\Http\Controllers\HomeController::class, 'ecommerceCart'])->name('ecommerce-cart');
Route::get('/ecommerce-checkout', [App\Http\Controllers\HomeController::class, 'ecommerceCheckout'])->name('ecommerce-checkout');
Route::get('/ecommerce-customers', [App\Http\Controllers\HomeController::class, 'ecommerceCustomers'])->name('ecommerce-customers');
Route::get('/ecommerce-orders', [App\Http\Controllers\HomeController::class, 'ecommerceOrders'])->name('ecommerce-orders');
Route::get('/ecommerce-product-detail', [App\Http\Controllers\HomeController::class, 'ecommerceProductDetail'])->name('ecommerce-product-detail');
Route::get('/ecommerce-products', [App\Http\Controllers\HomeController::class, 'ecommerceProducts'])->name('ecommerce-products');
Route::get('/ecommerce-shops', [App\Http\Controllers\HomeController::class, 'ecommerceShops'])->name('ecommerce-shops');
Route::get('/email-inbox', [App\Http\Controllers\HomeController::class, 'emailInbox'])->name('email-inbox');
Route::get('/email-read', [App\Http\Controllers\HomeController::class, 'emailRead'])->name('email-read');
Route::get('/email-template-alert', [App\Http\Controllers\HomeController::class, 'emailTemplateAlert'])->name('email-template-alert');
Route::get('/email-template-basic', [App\Http\Controllers\HomeController::class, 'emailTemplateBasic'])->name('email-template-basic');
Route::get('/email-template-billing', [App\Http\Controllers\HomeController::class, 'emailTemplateBilling'])->name('email-template-billing');
Route::get('/form-advanced', [App\Http\Controllers\HomeController::class, 'formAdvanced'])->name('form-advanced');
Route::get('/form-editors', [App\Http\Controllers\HomeController::class, 'formEditors'])->name('form-editors');
Route::get('/form-elements', [App\Http\Controllers\HomeController::class, 'formElements'])->name('form-elements');
Route::get('/form-layouts', [App\Http\Controllers\HomeController::class, 'formLayouts'])->name('form-layouts');
Route::get('/form-mask', [App\Http\Controllers\HomeController::class, 'formMask'])->name('form-mask');
Route::get('/form-repeater', [App\Http\Controllers\HomeController::class, 'formRepeater'])->name('form-repeater');
Route::get('/form-uploads', [App\Http\Controllers\HomeController::class, 'formUploads'])->name('form-uploads');
Route::get('/form-validation', [App\Http\Controllers\HomeController::class, 'formValidation'])->name('form-validation');
Route::get('/form-wizard', [App\Http\Controllers\HomeController::class, 'formWizard'])->name('form-wizard');
Route::get('/form-xeditable', [App\Http\Controllers\HomeController::class, 'formXeditable'])->name('form-xeditable');
Route::get('/icons-boxicons', [App\Http\Controllers\HomeController::class, 'iconsBoxicons'])->name('icons-boxicons');
Route::get('/icons-dripicons', [App\Http\Controllers\HomeController::class, 'iconsDripicons'])->name('icons-dripicons');
Route::get('/icons-fontawesome', [App\Http\Controllers\HomeController::class, 'iconsFontawesome'])->name('icons-fontawesome');
Route::get('/icons-materialdesign', [App\Http\Controllers\HomeController::class, 'iconsMaterialDesign'])->name('icons-materialdesign');
Route::get('/invoices-detail', [App\Http\Controllers\HomeController::class, 'invoicesDetail'])->name('invoices-detail');
Route::get('/invoices-list', [App\Http\Controllers\HomeController::class, 'invoicesList'])->name('invoices-list');
Route::get('/job-apply', [App\Http\Controllers\HomeController::class, 'jobApply'])->name('job-apply');
Route::get('/job-categories', [App\Http\Controllers\HomeController::class, 'jobCategories'])->name('job-categories');
Route::get('/job-details', [App\Http\Controllers\HomeController::class, 'jobDetails'])->name('job-details');
Route::get('/job-grid', [App\Http\Controllers\HomeController::class, 'jobGrid'])->name('job-grid');
Route::get('/job-list', [App\Http\Controllers\HomeController::class, 'jobList'])->name('job-list');
Route::get('/layouts-boxed', [App\Http\Controllers\HomeController::class, 'layoutsBoxed'])->name('layouts-boxed');
Route::get('/layouts-colored-sidebar', [App\Http\Controllers\HomeController::class, 'layoutsColoredSidebar'])->name('layouts-colored-sidebar');
Route::get('/layouts-compact-sidebar', [App\Http\Controllers\HomeController::class, 'layoutsCompactSidebar'])->name('layouts-compact-sidebar');
Route::get('/layouts-hori-boxed-width', [App\Http\Controllers\HomeController::class, 'layoutsHoriHoxedWidth'])->name('layouts-hori-boxed-width');
Route::get('/layouts-hori-colored-header', [App\Http\Controllers\HomeController::class, 'layoutsHoriColoredHeader'])->name('layouts-hori-colored-header');
Route::get('/layouts-hori-preloader', [App\Http\Controllers\HomeController::class, 'layoutsHoriPreloader'])->name('layouts-hori-preloader');
Route::get('/layouts-hori-scrollable', [App\Http\Controllers\HomeController::class, 'layoutsHoriScrollable'])->name('layouts-hori-scrollable');
Route::get('/layouts-hori-topbar-light', [App\Http\Controllers\HomeController::class, 'layoutsHoriTopbarLight'])->name('layouts-hori-topbar-light');
Route::get('/layouts-horizontal', [App\Http\Controllers\HomeController::class, 'layoutsHorizontal'])->name('layouts-horizontal');
Route::get('/layouts-icon-sidebar', [App\Http\Controllers\HomeController::class, 'layoutsIconSidebar'])->name('layouts-icon-sidebar');
Route::get('/layouts-light-sidebar', [App\Http\Controllers\HomeController::class, 'layoutsLightSidebar'])->name('layouts-light-sidebar');
Route::get('/layouts-preloader', [App\Http\Controllers\HomeController::class, 'layoutsPreloader'])->name('layouts-preloader');
Route::get('/layouts-scrollable', [App\Http\Controllers\HomeController::class, 'layoutsScrollable'])->name('layouts-scrollable');
Route::get('/layouts-vertical', [App\Http\Controllers\HomeController::class, 'layoutsVertical'])->name('layouts-vertical');
Route::get('/maps-google', [App\Http\Controllers\HomeController::class, 'mapsGoogle'])->name('maps-google');
Route::get('/maps-leaflet', [App\Http\Controllers\HomeController::class, 'mapsLeaflet'])->name('maps-leaflet');
Route::get('/maps-vector', [App\Http\Controllers\HomeController::class, 'mapsVector'])->name('maps-vector');
Route::get('/pages-404', [App\Http\Controllers\HomeController::class, 'pages404'])->name('pages-404');
Route::get('/pages-500', [App\Http\Controllers\HomeController::class, 'pages500'])->name('pages-500');
Route::get('/pages-comingsoon', [App\Http\Controllers\HomeController::class, 'pagesComingsoon'])->name('pages-comingsoon');
Route::get('/pages-faqs', [App\Http\Controllers\HomeController::class, 'pagesFaqs'])->name('pages-faqs');
Route::get('/pages-maintenance', [App\Http\Controllers\HomeController::class, 'pagesMaintenance'])->name('pages-maintenance');
Route::get('/pages-pricing', [App\Http\Controllers\HomeController::class, 'pagesPricing'])->name('pages-pricing');
Route::get('/pages-starter', [App\Http\Controllers\HomeController::class, 'pagesStarter'])->name('pages-starter');
Route::get('/pages-timeline', [App\Http\Controllers\HomeController::class, 'pagesTimeline'])->name('pages-timeline');
Route::get('/projects-create', [App\Http\Controllers\HomeController::class, 'projectsCreate'])->name('projects-create');
Route::get('/projects-grid', [App\Http\Controllers\HomeController::class, 'projectsGrid'])->name('projects-grid');
Route::get('/projects-list', [App\Http\Controllers\HomeController::class, 'projectsList'])->name('projects-list');
Route::get('/projects-overview', [App\Http\Controllers\HomeController::class, 'projectsOverview'])->name('projects-overview');
Route::get('/tables-basic', [App\Http\Controllers\HomeController::class, 'tablesBasic'])->name('tables-basic');
Route::get('/tables-datatable', [App\Http\Controllers\HomeController::class, 'tablesDatatable'])->name('tables-datatable');
Route::get('/tables-editable', [App\Http\Controllers\HomeController::class, 'tablesEditable'])->name('tables-editable');
Route::get('/tables-responsive', [App\Http\Controllers\HomeController::class, 'tablesResponsive'])->name('tables-responsive');
Route::get('/tasks-create', [App\Http\Controllers\HomeController::class, 'tasksCreate'])->name('tasks-create');
Route::get('/tasks-kanban', [App\Http\Controllers\HomeController::class, 'tasksKanban'])->name('tasks-kanban');
Route::get('/tasks-list', [App\Http\Controllers\HomeController::class, 'tasksList'])->name('tasks-list');
Route::get('/ui-alerts', [App\Http\Controllers\HomeController::class, 'uiAlerts'])->name('ui-alerts');
Route::get('/ui-buttons', [App\Http\Controllers\HomeController::class, 'uiButtons'])->name('ui-buttons');
Route::get('/ui-cards', [App\Http\Controllers\HomeController::class, 'uiCards'])->name('ui-cards');
Route::get('/ui-carousel', [App\Http\Controllers\HomeController::class, 'uiCarousel'])->name('ui-carousel');
Route::get('/ui-colors', [App\Http\Controllers\HomeController::class, 'uiColors'])->name('ui-colors');
Route::get('/ui-dropdowns', [App\Http\Controllers\HomeController::class, 'uiDropdowns'])->name('ui-dropdowns');
Route::get('/ui-general', [App\Http\Controllers\HomeController::class, 'uiGeneral'])->name('ui-general');
Route::get('/ui-grid', [App\Http\Controllers\HomeController::class, 'uiGrid'])->name('ui-grid');
Route::get('/ui-images', [App\Http\Controllers\HomeController::class, 'uiImages'])->name('ui-images');
Route::get('/ui-lightbox', [App\Http\Controllers\HomeController::class, 'uiLightbox'])->name('ui-lightbox');
Route::get('/ui-modals', [App\Http\Controllers\HomeController::class, 'uiModals'])->name('ui-modals');
Route::get('/ui-notifications', [App\Http\Controllers\HomeController::class, 'uiNotifications'])->name('ui-notifications');
Route::get('/ui-offcanvas', [App\Http\Controllers\HomeController::class, 'uiOffcanvas'])->name('ui-offcanvas');
Route::get('/ui-placeholders', [App\Http\Controllers\HomeController::class, 'uiPlaceholders'])->name('ui-placeholders');
Route::get('/ui-progressbars', [App\Http\Controllers\HomeController::class, 'uiProgressbars'])->name('ui-progressbars');
Route::get('/ui-rangeslider', [App\Http\Controllers\HomeController::class, 'uiRangeslider'])->name('ui-rangeslider');
Route::get('/ui-rating', [App\Http\Controllers\HomeController::class, 'uiRating'])->name('ui-rating');
Route::get('/ui-session-timeout', [App\Http\Controllers\HomeController::class, 'uiSessionTimeout'])->name('ui-session-timeout');
Route::get('/ui-sweet-alert', [App\Http\Controllers\HomeController::class, 'uiSweetAlert'])->name('ui-sweet-alert');
Route::get('/ui-tabs-accordions', [App\Http\Controllers\HomeController::class, 'uiTabsAccordions'])->name('ui-tabs-accordions');
Route::get('/ui-toasts', [App\Http\Controllers\HomeController::class, 'uiToasts'])->name('ui-toasts');
Route::get('/ui-typography', [App\Http\Controllers\HomeController::class, 'uiTypography'])->name('ui-typography');
Route::get('/ui-utilities', [App\Http\Controllers\HomeController::class, 'uiUtilities'])->name('ui-utilities');
Route::get('/ui-video', [App\Http\Controllers\HomeController::class, 'uiVideo'])->name('ui-video');
Route::get('/welcome', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome');
Route::get('/yajra-datatable', [App\Http\Controllers\HomeController::class, 'yajraDatatable'])->name('yajra-datatable');


//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::prefix('platform')
    ->middleware(['auth', 'role:platform_owner'])
    ->name('platform.')
    ->group(function () {
        Route::resource('users', UserController::class)->except(['create', 'store']);
    });



Route::prefix('platform')
    ->middleware(['auth', 'role:platform_owner'])
    ->name('platform.')
    ->group(function () {
        Route::resource('employers', EmployerController::class);
    });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

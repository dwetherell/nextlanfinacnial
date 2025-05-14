<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if (view()->exists($request->path())) {
            return view($request->path());
        }
        return abort(404);
    }

    public function root()
    {
        return view('index');
    }

    /*Language Translation*/
    public function lang($locale)
    {
        if ($locale) {
            App::setLocale($locale);
            Session::put('lang', $locale);
            Session::save();
            return redirect()->back()->with('locale', $locale);
        } else {
            return redirect()->back();
        }
    }


    public function updateProfile(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email'],
            'avatar' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:1024'],
        ]);

        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');

        if ($request->file('avatar')) {
            $avatar = $request->file('avatar');
            $avatarName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatarPath = public_path('/images/');
            $avatar->move($avatarPath, $avatarName);
            $user->avatar = '/images/' . $avatarName;
        }

        $user->update();
        if ($user) {
            Session::flash('message', 'User Details Updated successfully!');
            Session::flash('alert-class', 'alert-success');
            return response()->json([
                'isSuccess' => true,
                'Message' => "User Details Updated successfully!"
            ], 200); // Status code here
        } else {
            Session::flash('message', 'Something went wrong!');
            Session::flash('alert-class', 'alert-danger');
            return response()->json([
                'isSuccess' => true,
                'Message' => "Something went wrong!"
            ], 200); // Status code here
        }
    }

    public function updatePassword(Request $request, $id)
    {
        $request->validate([
            'current_password' => ['required', 'string'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {
            return response()->json([
                'isSuccess' => false,
                'Message' => "Your Current password does not matches with the password you provided. Please try again."
            ], 200); // Status code
        } else {
            $user = User::find($id);
            $user->password = Hash::make($request->get('password'));
            $user->update();
            if ($user) {
                Session::flash('message', 'Password updated successfully!');
                Session::flash('alert-class', 'alert-success');
                return response()->json([
                    'isSuccess' => true,
                    'Message' => "Password updated successfully!"
                ], 200); // Status code here
            } else {
                Session::flash('message', 'Something went wrong!');
                Session::flash('alert-class', 'alert-danger');
                return response()->json([
                    'isSuccess' => true,
                    'Message' => "Something went wrong!"
                ], 200); // Status code here
            }
        }
    }



    /* Testing Only */
    public function dashboardSaas()
    {
        return view('dashboard-saas');
    }

    public function appsFilemanager()
    {
        return view('apps-filemanager');
    }

    public function authConfirmMail()
    {
        return view('auth-confirm-mail');
    }

    public function authConfirmMail2()
    {
        return view('auth-confirm-mail-2');
    }

    public function authEmailVerification()
    {
        return view('auth-email-verification');
    }

    public function authEmailVerification2()
    {
        return view('auth-email-verification-2');
    }

    public function authLockScreen()
    {
        return view('auth-lock-screen');
    }

    public function authLockScreen2()
    {
        return view('auth-lock-screen-2');
    }

    public function authLogin()
    {
        return view('auth-login');
    }

    public function authLogin2()
    {
        return view('auth-login-2');
    }

    public function authRecoverpw()
    {
        return view('auth-recoverpw');
    }

    public function authRecoverpw2()
    {
        return view('auth-recoverpw-2');
    }

    public function authRegister()
    {
        return view('auth-register');
    }

    public function authRegister2()
    {
        return view('auth-register-2');
    }

    public function authTwoStepVerification()
    {
        return view('auth-two-step-verification');
    }

    public function authTwoStepVerification2()
    {
        return view('auth-two-step-verification-2');
    }

    public function blogDetails()
    {
        return view('blog-details');
    }

    public function blogGrid()
    {
        return view('blog-grid');
    }

    public function blogList()
    {
        return view('blog-list');
    }

    public function calendar()
    {
        return view('calendar');
    }

    public function calendarFull()
    {
        return view('calendar-full');
    }

    public function candidateList()
    {
        return view('candidate-list');
    }

    public function candidateOverview()
    {
        return view('candidate-overview');
    }

    public function chartsApex()
    {
        return view('charts-apex');
    }

    public function chartsChartjs()
    {
        return view('charts-chartjs');
    }

    public function chartsEchart()
    {
        return view('charts-echart');
    }

    public function chartsFlot()
    {
        return view('charts-flot');
    }

    public function chartsKnob()
    {
        return view('charts-knob');
    }

    public function chartsSparkline()
    {
        return view('charts-sparkline');
    }

    public function chartsTui()
    {
        return view('charts-tui');
    }

    public function chat()
    {
        return view('chat');
    }

    public function contactsGrid()
    {
        return view('contacts-grid');
    }

    public function contactsList()
    {
        return view('contacts-list');
    }

    public function contactsProfile()
    {
        return view('contacts-profile');
    }

    public function cryptoBuySell()
    {
        return view('crypto-buy-sell');
    }

    public function cryptoExchange()
    {
        return view('crypto-exchange');
    }

    public function cryptoIcoLanding()
    {
        return view('crypto-ico-landing');
    }

    public function cryptoKycApplication()
    {
        return view('crypto-kyc-application');
    }

    public function cryptoLending()
    {
        return view('crypto-lending');
    }

    public function cryptoOrders()
    {
        return view('crypto-orders');
    }

    public function cryptoWallet()
    {
        return view('crypto-wallet');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function dashboardBlog()
    {
        return view('dashboard-blog');
    }

    public function dashboardCrypto()
    {
        return view('dashboard-crypto');
    }

    public function dashboardJob()
    {
        return view('dashboard-job');
    }

    public function ecommerceAddProduct()
    {
        return view('ecommerce-add-product');
    }

    public function ecommerceCart()
    {
        return view('ecommerce-cart');
    }

    public function ecommerceCheckout()
    {
        return view('ecommerce-checkout');
    }

    public function ecommerceCustomers()
    {
        return view('ecommerce-customers');
    }

    public function ecommerceOrders()
    {
        return view('ecommerce-orders');
    }

    public function ecommerceProductDetail()
    {
        return view('ecommerce-product-detail');
    }

    public function ecommerceProducts()
    {
        return view('ecommerce-products');
    }

    public function ecommerceShops()
    {
        return view('ecommerce-shops');
    }

    public function emailInbox()
    {
        return view('email-inbox');
    }

    public function emailRead()
    {
        return view('email-read');
    }

    public function emailTemplateAlert()
    {
        return view('email-template-alert');
    }

    public function emailTemplateBasic()
    {
        return view('email-template-basic');
    }

    public function emailTemplateBilling()
    {
        return view('email-template-billing');
    }

    public function formAdvanced()
    {
        return view('form-advanced');
    }

    public function formEditors()
    {
        return view('form-editors');
    }

    public function formElements()
    {
        return view('form-elements');
    }

    public function formLayouts()
    {
        return view('form-layouts');
    }

    public function formMask()
    {
        return view('form-mask');
    }

    public function formRepeater()
    {
        return view('form-repeater');
    }

    public function formUploads()
    {
        return view('form-uploads');
    }

    public function formValidation()
    {
        return view('form-validation');
    }

    public function formWizard()
    {
        return view('form-wizard');
    }

    public function formXeditable()
    {
        return view('form-xeditable');
    }

    public function iconsBoxicons()
    {
        return view('icons-boxicons');
    }

    public function iconsDripicons()
    {
        return view('icons-dripicons');
    }

    public function iconsFontawesome()
    {
        return view('icons-fontawesome');
    }

    public function iconsMaterialdesign()
    {
        return view('icons-materialdesign');
    }

    public function invoicesDetail()
    {
        return view('invoices-detail');
    }

    public function invoicesList()
    {
        return view('invoices-list');
    }

    public function jobApply()
    {
        return view('job-apply');
    }

    public function jobCategories()
    {
        return view('job-categories');
    }

    public function jobDetails()
    {
        return view('job-details');
    }

    public function jobGrid()
    {
        return view('job-grid');
    }

    public function jobList()
    {
        return view('job-list');
    }

    public function layoutsBoxed()
    {
        return view('layouts-boxed');
    }

    public function layoutsColoredSidebar()
    {
        return view('layouts-colored-sidebar');
    }

    public function layoutsCompactSidebar()
    {
        return view('layouts-compact-sidebar');
    }

    public function layoutsHoriBoxedWidth()
    {
        return view('layouts-hori-boxed-width');
    }

    public function layoutsHoriColoredHeader()
    {
        return view('layouts-hori-colored-header');
    }

    public function layoutsHoriPreloader()
    {
        return view('layouts-hori-preloader');
    }

    public function layoutsHoriScrollable()
    {
        return view('layouts-hori-scrollable');
    }

    public function layoutsHoriTopbarLight()
    {
        return view('layouts-hori-topbar-light');
    }

    public function layoutsHorizontal()
    {
        return view('layouts-horizontal');
    }

    public function layoutsIconSidebar()
    {
        return view('layouts-icon-sidebar');
    }

    public function layoutsLightSidebar()
    {
        return view('layouts-light-sidebar');
    }

    public function layoutsPreloader()
    {
        return view('layouts-preloader');
    }

    public function layoutsScrollable()
    {
        return view('layouts-scrollable');
    }

    public function layoutsVertical()
    {
        return view('layouts-vertical');
    }

    public function mapsGoogle()
    {
        return view('maps-google');
    }

    public function mapsLeaflet()
    {
        return view('maps-leaflet');
    }

    public function mapsVector()
    {
        return view('maps-vector');
    }

    public function pages404()
    {
        return view('pages-404');
    }

    public function pages500()
    {
        return view('pages-500');
    }

    public function pagesComingsoon()
    {
        return view('pages-comingsoon');
    }

    public function pagesFaqs()
    {
        return view('pages-faqs');
    }

    public function pagesMaintenance()
    {
        return view('pages-maintenance');
    }

    public function pagesPricing()
    {
        return view('pages-pricing');
    }

    public function pagesStarter()
    {
        return view('pages-starter');
    }

    public function pagesTimeline()
    {
        return view('pages-timeline');
    }

    public function projectsCreate()
    {
        return view('projects-create');
    }

    public function projectsGrid()
    {
        return view('projects-grid');
    }

    public function projectsList()
    {
        return view('projects-list');
    }

    public function projectsOverview()
    {
        return view('projects-overview');
    }

    public function tablesBasic()
    {
        return view('tables-basic');
    }

    public function tablesDatatable()
    {
        return view('tables-datatable');
    }

    public function tablesEditable()
    {
        return view('tables-editable');
    }

    public function tablesResponsive()
    {
        return view('tables-responsive');
    }

    public function tasksCreate()
    {
        return view('tasks-create');
    }

    public function tasksKanban()
    {
        return view('tasks-kanban');
    }

    public function tasksList()
    {
        return view('tasks-list');
    }

    public function uiAlerts()
    {
        return view('ui-alerts');
    }

    public function uiButtons()
    {
        return view('ui-buttons');
    }

    public function uiCards()
    {
        return view('ui-cards');
    }

    public function uiCarousel()
    {
        return view('ui-carousel');
    }

    public function uiColors()
    {
        return view('ui-colors');
    }

    public function uiDropdowns()
    {
        return view('ui-dropdowns');
    }

    public function uiGeneral()
    {
        return view('ui-general');
    }

    public function uiGrid()
    {
        return view('ui-grid');
    }

    public function uiImages()
    {
        return view('ui-images');
    }

    public function uiLightbox()
    {
        return view('ui-lightbox');
    }

    public function uiModals()
    {
        return view('ui-modals');
    }

    public function uiNotifications()
    {
        return view('ui-notifications');
    }

    public function uiOffcanvas()
    {
        return view('ui-offcanvas');
    }

    public function uiPlaceholders()
    {
        return view('ui-placeholders');
    }

    public function uiProgressbars()
    {
        return view('ui-progressbars');
    }

    public function uiRangeslider()
    {
        return view('ui-rangeslider');
    }

    public function uiRating()
    {
        return view('ui-rating');
    }

    public function uiSessionTimeout()
    {
        return view('ui-session-timeout');
    }

    public function uiSweetAlert()
    {
        return view('ui-sweet-alert');
    }

    public function uiTabsAccordions()
    {
        return view('ui-tabs-accordions');
    }

    public function uiToasts()
    {
        return view('ui-toasts');
    }

    public function uiTypography()
    {
        return view('ui-typography');
    }

    public function uiUtilities()
    {
        return view('ui-utilities');
    }

    public function uiVideo()
    {
        return view('ui-video');
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function yajraDatatable()
    {
        return view('yajra-datatable');
    }




}

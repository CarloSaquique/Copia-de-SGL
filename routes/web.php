<?php

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Foundation\Auth\EmailVerificationRequest;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/test', [App\Http\Controllers\Controller::class, 'test']);
Route::get('/test-db', [App\Http\Controllers\Controller::class, 'testDb']);
Route::get('/test-mail', [App\Http\Controllers\Controller::class, 'testMail']);
Route::get('/test-factura/{id}', [App\Http\Controllers\Controller::class, 'testFactura']);
Route::post('/test-delete', [App\Http\Controllers\Controller::class, 'testDelete']);

Route::get('/guide', [App\Http\Controllers\Controller::class, 'guide']);

Auth::routes();

Route::post('/register', [App\Http\Controllers\UsersController::class, 'register']);

Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/clear', [App\Http\Controllers\TestController::class, 'clear']);

Route::middleware(['auth','verified','role:super-admin|admin|operator|accounting|storer|deliver|client'])->group(function () {
    //Admin
    Route::get('/admin-index', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
    Route::get('/admin-orders-store', [App\Http\Controllers\AdminController::class, 'ordersStore']);
    Route::post('/admin-role-asign', [App\Http\Controllers\AdminController::class, 'roleAsign']);
    Route::get('/admin-index-courier', [App\Http\Controllers\AdminController::class, 'indexCourier']);
    Route::get('/admin-order-courier/{id}', [App\Http\Controllers\AdminController::class, 'orderCourier']);
    Route::post('/admin-order-confirm', [App\Http\Controllers\AdminController::class, 'orderConfirm']);
    Route::get('/admin-tracking-index', [App\Http\Controllers\AdminController::class, 'trackingIndex']);
    Route::post('/admin-tracking-asign', [App\Http\Controllers\AdminController::class, 'trackingAsign']);
    Route::get('/admin-payment-index', [App\Http\Controllers\AdminController::class, 'paymentIndex']);
    //Promo
    Route::get('/promo-index', [App\Http\Controllers\PromoController::class, 'index']);
    Route::post('/promo-add', [App\Http\Controllers\PromoController::class, 'add']);
    //Product
    Route::get('/product-index', [App\Http\Controllers\ProductController::class, 'index']);
    Route::post('/product-add', [App\Http\Controllers\ProductController::class, 'add']);
});

//Tracking
Route::post('/track', [App\Http\Controllers\TrackingController::class, 'track']);
Route::post('/tracking-update', [App\Http\Controllers\TrackingController::class, 'update']);
Route::get('/tracking-index', [App\Http\Controllers\TrackingController::class, 'index']);
Route::get('/tracking-add', function() {return view('tracking.add');});
Route::post('/tracking-add', [App\Http\Controllers\TrackingController::class, 'add']);
Route::get('/tracking-update/{id}', [App\Http\Controllers\TrackingController::class, 'updateView']);
Route::post('/tracking-update', [App\Http\Controllers\TrackingController::class, 'update']);

// Billing
Route::get('/upload-invoice', [App\Http\Controllers\BillingController::class, 'index']);
Route::get('/upload-invoice/{id}', [App\Http\Controllers\BillingController::class, 'uploadFromOrder']);
Route::post('/upload-invoice', [App\Http\Controllers\BillingController::class, 'upload']);
Route::get('/show-invoice/{id}', [App\Http\Controllers\BillingController::class, 'loadInvoice']);
Route::post('/delete-invoice', [App\Http\Controllers\BillingController::class, 'deleteInvoice']);

//Cotizadores
// Nacional
Route::get('/national-quoter-index', [App\Http\Controllers\NationalQuoterController::class, 'index']);
Route::post('/national-quoter-quotation', [App\Http\Controllers\NationalQuoterController::class, 'quotation']);
Route::post('/national-quoter-order', [App\Http\Controllers\NationalQuoterController::class, 'quotationOrder']);
Route::get('/national-quoter-order-index', [App\Http\Controllers\NationalQuoterController::class, 'quotationOrderIndex']);
Route::post('/national-quoter-osc', [App\Http\Controllers\NationalQuoterController::class, 'quotationOSC']);
Route::post('/national-quoter-finish', [App\Http\Controllers\NationalQuoterController::class, 'quotationFinish']);
Route::get('/national-quoter-generate-osc/{id?}', [App\Http\Controllers\NationalQuoterController::class, 'oscPdf']);



// Miami
Route::get('/miami-quoter-index', [App\Http\Controllers\MiamiQuoterController::class, 'index']);
Route::post('/miami-quoter-quotation', [App\Http\Controllers\MiamiQuoterController::class, 'quotation']);
Route::post('/miami-quoter-order', [App\Http\Controllers\MiamiQuoterController::class, 'quotationOrder']);
Route::get('/miami-quoter-order-index', [App\Http\Controllers\MiamiQuoterController::class, 'quotationOrderIndex']);
Route::post('/miami-quoter-osc', [App\Http\Controllers\MiamiQuoterController::class, 'order']);
Route::post('/miami-quoter-finish', [App\Http\Controllers\MiamiQuoterController::class, 'finish']);
Route::get('/miami-quoter-generate-osc/{id?}', [App\Http\Controllers\MiamiQuoterController::class, 'oscPdf']);

//China
Route::get('/china-quoter-index', [App\Http\Controllers\ChinaQuoterController::class, 'index']);
Route::post('/china-quoter-quotation', [App\Http\Controllers\ChinaQuoterController::class, 'quotation']);
Route::post('/china-quoter-order', [App\Http\Controllers\ChinaQuoterController::class, 'quotationOrder']);
Route::get('/china-quoter-order-index', [App\Http\Controllers\ChinaQuoterController::class, 'quotationOrderIndex']);
Route::post('/china-quoter-osc', [App\Http\Controllers\ChinaQuoterController::class, 'order']);
Route::post('/china-quoter-finish', [App\Http\Controllers\ChinaQuoterController::class, 'finish']);
Route::get('/china-quoter-generate-osc/{id?}', [App\Http\Controllers\ChinaQuoterController::class, 'oscPdf']);


//Home
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Store
Route::get('/store-index', [App\Http\Controllers\StoreController::class, 'index']);
Route::get('/cat', [App\Http\Controllers\StoreController::class, 'cat']);

//Footer
Route::get('/about-us', function() {return view('footer.aboutUs');});
Route::get('/our-history', function() {return view('footer.ourHistory');});
Route::get('/work-with-us', function() {return view('footer.workWithUs.index');});
Route::get('/work-with-us/category/{id}',  [App\Http\Controllers\HomeController::class, 'workWithUsCategory']);
Route::get('/work-with-us/job/{id}',  [App\Http\Controllers\HomeController::class, 'workWithUsJob']);
Route::get('/refund-form', function() {return view('footer.refundForm');});
Route::get('/claim-form', function() {return view('footer.claimForm');});
Route::get('/deposit-form', function() {return view('footer.depositForm');});
Route::get('/refund-politics', function() {return view('footer.refundPolitics');});
Route::get('/deposit-politics', function() {return view('footer.depositPolitics');});
Route::get('/payment-instructive', function() {return view('footer.paymentInstructive');});

// MailForms
Route::post('/refund-form', [App\Http\Controllers\MailController::class, 'refundForm']);
Route::post('/claim-form', [App\Http\Controllers\MailController::class, 'claimForm']);
Route::post('/deposit-form', [App\Http\Controllers\MailController::class, 'depositForm']);

Route::middleware(['auth','verified','role:super-admin|admin|operator|accounting|storer|deliver|client'])->group(function () {
    //Promo
    // Route::post('/promo-check', [App\Http\Controllers\PromoController::class, 'check']);
    //Store

    // Route::post('/store-cart-add', [App\Http\Controllers\StoreController::class, 'cartAdd']);
    // Route::get('/store-product-show/{link}', [App\Http\Controllers\StoreController::class, 'productShow']);
    // Route::get('/store-product-search/{search}', [App\Http\Controllers\StoreController::class, 'productSearch']);
    // Route::get('/store-cart-index', [App\Http\Controllers\StoreController::class, 'cartIndex']);
    // Route::post('/store-buy', [App\Http\Controllers\StoreController::class, 'buy']);
    //Users
    // Route::post('/address-add', [App\Http\Controllers\UsersController::class, 'addressAdd']);


    Route::get('/profile', [App\Http\Controllers\UsersController::class, 'profile']);
    Route::get('/locker', [App\Http\Controllers\UsersController::class, 'locker']);
    Route::get('/membership', [App\Http\Controllers\UsersController::class, 'membership']);
    Route::get('/user-orders', [App\Http\Controllers\UsersController::class, 'orders']);
    Route::get('/user-order/{id}', [App\Http\Controllers\UsersController::class, 'order']);

    Route::post('/rate-us', [App\Http\Controllers\HomeController::class, 'rateUs']);
    // Route::get('/claim-form', function() {return view('footer.claimForm');});
});



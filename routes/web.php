<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebController::class, 'indexView']);
Route::get('/about-us', [WebController::class, 'aboutUsView']);
Route::get('/purnpay-retailer', [WebController::class, 'purnpayRetailerView']);
Route::get('/purnpay-distributor', [WebController::class, 'purnpayDistributorView']);
Route::get('/purnpay-whitelable-partner', [WebController::class, 'purnpayWhitelablePartnerView']);
Route::get('/purnpay-api-partner', [WebController::class, 'purnpayApiPartnerView']);
Route::get('/aadhar-enabled-payment-system', [WebController::class, 'aadharEnabledPaymentSystemView']);
Route::get('/emi-and-cash-collection', [WebController::class, 'emiAndCashCollectionView']);
Route::get('/money-transfer', [WebController::class, 'moneyTransferView']);
Route::get('/payment-solutions', [WebController::class, 'paymentSolutionsView']);
Route::get('/become-pancard-agent', [WebController::class, 'becomePancardAgentView']);
Route::get('/pre-paid-cards', [WebController::class, 'prePaidCardsView']);
Route::get('/micro-atm', [WebController::class, 'microAtmView']);
Route::get('/multi-recharge-distributorship', [WebController::class, 'multiRechargeDistributorshipView']);
Route::get('/insurance', [WebController::class, 'insuranceView']);
Route::get('/bank-account', [WebController::class, 'bankAccountView']);
Route::get('/shop', [WebController::class, 'shopView']);
Route::get('/blog', [WebController::class, 'blogView']);
Route::get('/blog-details', [WebController::class, 'blogDetailsView']);
Route::get('/contact-us', [WebController::class, 'contactUsView']);
Route::get('/applynew', [WebController::class, 'applynewView']);
Route::get('/terms-and-conditions', [WebController::class, 'termsConditionsView']);
Route::get('/privacy-policy', [WebController::class, 'privacyPolicyView']);
Route::post('/save-contactform', [WebController::class, 'saveData'])->name('save-contactform');

// Admin routes
Route::get('/adm',[AdminController::class,'signinView']);
Route::post('login-check',[AdminController::class,'verifyLogin']);
Route::get('/dashboard',[AdminController::class,'dashboardView']);
Route::get('/manage-blog',[AdminController::class,'mBlogView']);
Route::post('save-blog-data',[AdminController::class,'saveBlogDataAjax']);
Route::get('/load-blog',[AdminController::class,'loadBlogAjax']);
Route::get('/edit-blog/{ns_id}',[AdminController::class,'editBlog']);
Route::post('/update-blog-data',[AdminController::class,'updateBlogDataAjax']);
Route::post('/delete-blog',[AdminController::class,'deleteBlogAjax']);
Route::get('/manage-contacts',[AdminController::class,'manageContacts']);
Route::get('/meta-setup',[AdminController::class,'metaSetup']);
Route::post('/store-meta', [AdminController::class, 'store'])->name('store.meta');
Route::get('/meta/edit/{id}', [AdminController::class, 'edit'])->name('meta.edit');
Route::post('/meta/update/{id}', [AdminController::class, 'update'])->name('meta.update');
Route::delete('/meta/delete/{id}', [AdminController::class, 'destroy'])->name('meta.destroy');
Route::get('/adminlogout',[AdminController::class,'adminLogout']);
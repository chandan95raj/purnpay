<?php

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
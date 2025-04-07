<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    //index
    public function indexView()
    {
        return view('web.index');
    }

    //about-us
    public function aboutUsView()
    {
        return view('web.about-us');
    }

    //purnpay-retailer
    public function purnpayRetailerView()
    {
        return view('web.purnpay-retailer');
    }

    //purnpay-distributor
    public function purnpayDistributorView()
    {
        return view('web.purnpay-distributor');
    }

    //purnpay-whitelable-partner
    public function purnpayWhitelablePartnerView()
    {
        return view('web.purnpay-whitelable-partner');
    }

    //purnpay-api-partner
    public function purnpayApiPartnerView()
    {
        return view('web.purnpay-api-partner');
    }

    //aadhar-enabled-payment-system
    public function aadharEnabledPaymentSystemView()
    {
        return view('web.aadhar-enabled-payment-system');
    }

    //emi-and-cash-collection
    public function emiAndCashCollectionView()
    {
        return view('web.emi-and-cash-collection');
    }

    //money-transfer
    public function moneyTransferView()
    {
        return view('web.money-transfer');
    }

    //payment-solutions
    public function paymentSolutionsView()
    {
        return view('web.payment-solutions');
    }

    //become-pancard-agent
    public function becomePancardAgentView()
    {
        return view('web.become-pancard-agent');
    }

    //pre-paid-cards
    public function prePaidCardsView()
    {
        return view('web.pre-paid-cards');
    }

    //micro-atm
    public function microAtmView()
    {
        return view('web.micro-atm');
    }

    //multi-recharge-distributorship
    public function multiRechargeDistributorshipView()
    {
        return view('web.multi-recharge-distributorship');
    }

    //insurance
    public function insuranceView()
    {
        return view('web.insurance');
    }

    //bank-account
    public function bankAccountView()
    {
        return view('web.bank-account');
    }

    //shop
    public function shopView()
    {
        return view('web.shop');
    }

    //blog
    public function blogView()
    {
        return view('web.blog');
    }

    //blog-details
    public function blogDetailsView()
    {
        return view('web.blog-details');
    }

    //contact-us
    public function contactUsView()
    {
        return view('web.contact-us');
    }

    //applynew
    public function applynewView()
    {
        return view('web.applynew');
    }

    //terms-and-conditions
    public function termsConditionsView()
    {
        return view('web.terms-and-conditions');
    }

    //privacy-policy
    public function privacyPolicyView()
    {
        return view('web.privacy-policy');
    }
}

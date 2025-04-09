<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Contact;
use App\Models\Enquiry;
use App\Models\MetaTag;
use Illuminate\Http\Request;

class WebController extends Controller
{
    //index
    public function indexView()
    {
        $meta = MetaTag::where('page_route',url('/'))->where('status','active')->first();
        $headerdata =  $meta->headerdata ?? [];
        return view('web.index',compact('headerdata'));
    }

    //about-us
    public function aboutUsView()
    {
        $meta = MetaTag::where('page_route',url('/about-us'))->where('status','active')->first();
        $headerdata =  $meta->headerdata ?? [];
        return view('web.about-us',compact('headerdata'));
    }

    //purnpay-retailer
    public function purnpayRetailerView()
    {
        $meta = MetaTag::where('page_route',url('/purnpay-retailer'))->where('status','active')->first();
        $headerdata =  $meta->headerdata ?? [];
        return view('web.purnpay-retailer',compact('headerdata'));
    }

    //purnpay-distributor
    public function purnpayDistributorView()
    {
        $meta = MetaTag::where('page_route',url('/purnpay-distributor'))->where('status','active')->first();
        $headerdata =  $meta->headerdata ?? [];
        return view('web.purnpay-distributor',compact('headerdata'));
    }

    //purnpay-whitelable-partner
    public function purnpayWhitelablePartnerView()
    {
        $meta = MetaTag::where('page_route',url('/purnpay-whitelable-partner'))->where('status','active')->first();
        $headerdata =  $meta->headerdata ?? [];
        return view('web.purnpay-whitelable-partner',compact('headerdata'));
    }

    //purnpay-api-partner
    public function purnpayApiPartnerView()
    {
        $meta = MetaTag::where('page_route',url('/purnpay-api-partner'))->where('status','active')->first();
        $headerdata =  $meta->headerdata ?? [];
        return view('web.purnpay-api-partner',compact('headerdata'));
    }

    //aadhar-enabled-payment-system
    public function aadharEnabledPaymentSystemView()
    {
        $meta = MetaTag::where('page_route',url('/aadhar-enabled-payment-system'))->where('status','active')->first();
        $headerdata =  $meta->headerdata ?? [];
        $allblog = Blog::where('ns_delete', '!=', '1')->orderBy('created_at','ASC')->get()->take(3);
        return view('web.aadhar-enabled-payment-system',compact('headerdata','allblog'));
    }

    //emi-and-cash-collection
    public function emiAndCashCollectionView()
    {
        $meta = MetaTag::where('page_route',url('/emi-and-cash-collection'))->where('status','active')->first();
        $headerdata =  $meta->headerdata ?? [];
        return view('web.emi-and-cash-collection',compact('headerdata'));
    }

    //money-transfer
    public function moneyTransferView()
    {
        $meta = MetaTag::where('page_route',url('/money-transfer'))->where('status','active')->first();
        $headerdata =  $meta->headerdata ?? [];
        return view('web.money-transfer',compact('headerdata'));
    }

    //payment-solutions
    public function paymentSolutionsView()
    {
        $meta = MetaTag::where('page_route',url('/payment-solutions'))->where('status','active')->first();
        $headerdata =  $meta->headerdata ?? [];
        return view('web.payment-solutions',compact('headerdata'));
    }

    //become-pancard-agent
    public function becomePancardAgentView()
    {
        $meta = MetaTag::where('page_route',url('/become-pancard-agent'))->where('status','active')->first();
        $headerdata =  $meta->headerdata ?? [];
        $allblog = Blog::where('ns_delete', '!=', '1')->orderBy('created_at','ASC')->get()->take(3);
        return view('web.become-pancard-agent',compact('headerdata','allblog'));
    }

    //pre-paid-cards
    public function prePaidCardsView()
    {
        $meta = MetaTag::where('page_route',url('/pre-paid-cards'))->where('status','active')->first();
        $headerdata =  $meta->headerdata ?? [];
        return view('web.pre-paid-cards',compact('headerdata'));
    }

    //micro-atm
    public function microAtmView()
    {
        $meta = MetaTag::where('page_route',url('/micro-atm'))->where('status','active')->first();
        $headerdata =  $meta->headerdata ?? [];
        return view('web.micro-atm',compact('headerdata'));
    }

    //multi-recharge-distributorship
    public function multiRechargeDistributorshipView()
    {
        $meta = MetaTag::where('page_route',url('/multi-recharge-distributorship'))->where('status','active')->first();
        $headerdata =  $meta->headerdata ?? [];
        return view('web.multi-recharge-distributorship',compact('headerdata'));
    }

    //insurance
    public function insuranceView()
    {
        $meta = MetaTag::where('page_route',url('/insurance'))->where('status','active')->first();
        $headerdata =  $meta->headerdata ?? [];
        return view('web.insurance',compact('headerdata'));
    }

    //bank-account
    public function bankAccountView()
    {
        $meta = MetaTag::where('page_route',url('/bank-account'))->where('status','active')->first();
        $headerdata =  $meta->headerdata ?? [];
        return view('web.bank-account',compact('headerdata'));
    }

    //shop
    public function shopView()
    {
        $meta = MetaTag::where('page_route',url('/shop'))->where('status','active')->first();
        $headerdata =  $meta->headerdata ?? [];
        return view('web.shop',compact('headerdata'));
    }

    //blog
    public function blogView()
    {
        $meta = MetaTag::where('page_route',url('/blog'))->where('status','active')->first();
        $headerdata =  $meta->headerdata ?? [];
        $allblog = Blog::where('ns_delete', '!=', '1')->orderBy('created_at','ASC')->get();
        return view('web.blog',compact('headerdata','allblog'));
    }

    //blog-details
    public function blogDetailsView($ns_id)
    {
        $singleblog = Blog::where('ns_delete', '!=', '1')->where('ns_id', '=', $ns_id)->first();
        $headerdata =  $singleblog->headerdata ?? [];
        return view('web.blog-details',compact('headerdata','singleblog'));
    }

    //contact-us
    public function contactUsView()
    {
        $meta = MetaTag::where('page_route',url('/contact-us'))->where('status','active')->first();
        $headerdata =  $meta->headerdata ?? [];
        return view('web.contact-us',compact('headerdata'));
    }

    //applynew
    public function applynewView()
    {
        $meta = MetaTag::where('page_route',url('/applynew'))->where('status','active')->first();
        $headerdata =  $meta->headerdata ?? [];
        return view('web.applynew',compact('headerdata'));
    }

    //terms-and-conditions
    public function termsConditionsView()
    {
        $meta = MetaTag::where('page_route',url('/terms-and-conditions'))->where('status','active')->first();
        $headerdata =  $meta->headerdata ?? [];
        return view('web.terms-and-conditions',compact('headerdata'));
    }

    //privacy-policy
    public function privacyPolicyView()
    {
        $meta = MetaTag::where('page_route',url('/privacy-policy'))->where('status','active')->first();
        $headerdata =  $meta->headerdata ?? [];
        return view('web.privacy-policy',compact('headerdata'));
    }

    public function saveData(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string',
                'mobile' => 'required|numeric|digits:10',
                'email' => 'required|email',
                'message' => 'required|string'
            ],
            [
                'name.required' => ' Name is required!',
                'name.string' => 'Invalid Name!',
                'message.required' => 'Message is required!',
                'message.string' => 'Invalid message!',
                'email.required' => 'Email is required!',
                'email.email' => 'Invalid email',
                'mobile.required' => 'Mobile number is required!',
                'mobile.numeric' => 'Invalid mobile number!',
                'mobile.digits' => 'Mobile number must be 10 digit!',
            ]
        );
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->mobile = $request->input('mobile');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');
        $result = $contact->save();
        if ($result) {
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false]);
    }

    public function saveJoinData(Request $request)
    {

        $request->validate(
            [
                'name' => 'required|string',
                'mobile' => 'required|numeric|digits:10',
                'email' => 'required|email',
                'position' => 'required|in:retailer,distributor,super distributor,whitelable partner,api'
            ],
            [
                'name.required' => ' Name is required!',
                'name.string' => 'Invalid Name!',
                'position.required' => 'Join as Position is required!',
                'email.required' => 'Email is required!',
                'email.email' => 'Invalid email',
                'mobile.required' => 'Mobile number is required!',
                'mobile.numeric' => 'Invalid mobile number!',
                'mobile.digits' => 'Mobile number must be 10 digit!',
            ]
        );
        $contact = new Enquiry();
        $contact->name = $request->input('name');
        $contact->mobile = $request->input('mobile');
        $contact->email = $request->input('email');
        $contact->type = $request->input('position');
        $result = $contact->save();
        if ($result) {
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false]);
    }
}

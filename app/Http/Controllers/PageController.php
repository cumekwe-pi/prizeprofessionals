<?php

namespace App\Http\Controllers;
use App\Mail\ContactForm;
use App\Mail\RequestQuote;
use App\Mail\ClaimPrize;
use App\Mail\BecomePartner;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Validator;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function partners()
    {
        return view('pages.partners');
    }

    public function requestQuote()
    {
        return view('pages.request-quote');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function claimPrize()
    {
        return view('pages.claim-prize');
    }

    public function prizeSourcing()
    {
        return view('pages.prize-sourcing');
    }

    public function prizeFulfillment()
    {
        return view('pages.prize-fulfillment');
    }

    public function winnerManagement()
    {
        return view('pages.winner-management');
    }

    public function privacyPolicy()
    {
        return view('pages.privacy');
    }

    public function terms()
    {
        return view('pages.terms');
    }

    public function cookies()
    {
        return view('pages.cookies');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function postContact(Request $request)
    {
        try
        {
            $rules = [
                'customer_name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'how_can_we_help' => 'required',
               
            ];
    
            $customMessages = [
                'customer_name.required' => 'Please tell us your name',
                'email.required' => 'Please give us your email address',
                'phone.required' => 'Please give us your phone number',
                'how_can_we_help.required' => 'Please let us know how we can help'
            ];
    
            $data['customer_name'] = $request->input('customer_name');
            $data['email'] = $request->input('email');
            $data['phone'] = $request->input('phone');
            $data['how_can_we_help'] = $request->input('how_can_we_help');
            $data['can_email'] = $request->input('can_email');
    
           $validator = $this->validate($request, $rules, $customMessages);
           $mailed = Mail::to('charles@promotionsinteractive.com')->send(new ContactForm($data));
        
            if (Mail::failures()) {
                return redirect()->route('contact',["#contact_form"])->with('fail','Sorry something went wrong! Please try again later');
            }
            return redirect()->route('contact',["#contact_form"])->with('success','Thank you for contacting us!. We will be in touch shortly.');
        }
        catch(Exception $ex)
        {

        }
    }

    public function postRequestQuote(Request $request)
    {
        try
        {
            $rules = [
                'customer_name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'details' => 'required',
               
            ];

            $customMessages = [
                'customer_name.required' => 'Please tell us your name',
                'email.required' => 'Please give us your email address',
                'phone.required' => 'Please give us your phone number',
                'details.required' => 'Please let us know how we can help'
            ];

            $data['customer_name'] = $request->input('customer_name');
            $data['email'] = $request->input('email');
            $data['phone'] = $request->input('phone');
            $data['details'] = $request->input('details');
            $data['can_email'] = $request->input('can_email');
            $validator = $this->validate($request, $rules, $customMessages);
            Mail::to('charles@promotionsinteractive.com')->send(new RequestQuote($data));
            if (Mail::failures()) {
                return redirect()->route('requestQuote',["#request_quote_form"])->with('fail','Sorry something went wrong! Please try again later');
            }
            return redirect()->route('requestQuote',["#request_quote_form"])->with('success','Thank you for contacting us!. We will be in touch shortly.');
        }
        catch(Exception $ex)
        {

        }
    }

    public function postClaimPrize(Request $request)
    {
        try
        {
            $rules = [
                'customer_name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'prize_campaign' => 'required',
                'winning_code' => 'required',
            ];

            $customMessages = [
                'customer_name.required' => 'Please tell us your name',
                'email.required' => 'Please give us your email address',
                'phone.required' => 'Please give us your phone number',
                'prize_campaign.required' => 'Please tell us the Prize campaign',
                'winning_code' => 'Please enter the winning code'
            ];

     
            $data['customer_name'] = $request->input('customer_name');
            $data['email'] = $request->input('email');
            $data['phone'] = $request->input('phone');
            $data['prize_campaign'] = $request->input('prize_campaign');
            $data['winning_code'] = $request->input('winning_code');
            $data['can_email'] = $request->input('can_email');

            $this->validate($request, $rules, $customMessages);

            Mail::to('charles@promotionsinteractive.com')->send(new ClaimPrize($data));
            if (Mail::failures()) {
                return redirect()->route('claimPrize',["#claim_prize"])->with('fail','Sorry something went wrong! Please try again later');
            }
            return redirect()->route('claimPrize',["#claim_prize"])->with('success','Thank you for contacting us!. We will be in touch shortly.');
        }
        catch(Exception $ex)
        {

        }
    }

    public function postPartnerForm(Request $request)
    {
        try
        {
            $rules = [
                'customer_name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'how_can_we_help' => 'required',
               
            ];
    
            $customMessages = [
                'customer_name.required' => 'Please tell us your name',
                'email.required' => 'Please give us your email address',
                'phone.required' => 'Please give us your phone number',
                'how_can_we_help.required' => 'Please let us know how we can help'
            ];

           // $validator = $this->validate($request, $rules, $customMessages);
           $validator = Validator::make($request->all(), $rules,$customMessages);

            if($validator->fails()){
                return redirect()->route('partners',["#become_partner"])->withErrors($validator)->withInput();
            }
            $data['customer_name'] = $request->input('customer_name');
            $data['email'] = $request->input('email');
            $data['phone'] = $request->input('phone');
            $data['how_can_we_help'] = $request->input('how_can_we_help');
            $data['can_email'] = $request->input('can_email');
            $mailed = Mail::to('charles@promotionsinteractive.com')->send(new BecomePartner($data));

            if (Mail::failures()) {
                return redirect()->route('partners',["#become_partner"])->with('fail','Sorry something went wrong! Please try again later');
            }
            return redirect()->route('partners',["#become_partner"])->with('success','Thank you for contacting us!. We will be in touch shortly.');
        }
        catch(Exception $ex)
        {

        }
    }
}

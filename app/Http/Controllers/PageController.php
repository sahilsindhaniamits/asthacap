<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoanRequest;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function calculator()
    {
        return view('pages.calculator');
    }

    public function privacy()
    {
        return view('pages.privacy');
    }

    public function terms()
    {
        return view('pages.terms');
    }

    public function loans()
    {
        return view('pages.loans.index');
    }

    public function personalLoan()
    {
        return view('pages.loans.personal');
    }

    public function businessLoan()
    {
        return view('pages.loans.business');
    }

    public function carLoan()
    {
        return view('pages.loans.car');
    }

    public function educationLoan()
    {
        return view('pages.loans.education');
    }

    public function unsecuredLoan()
    {
        return view('pages.loans.unsecured');
    }

    public function homeLoan()
    {
        return view('pages.loans.home-loan');
    }

    /**
     * Handle loan request / lead form submission.
     * Stores lead in loan_requests table.
     */
    public function submitLoanRequest(Request $request)
    {
        $data = $request->all();

        // Prevent duplicate submissions by phone
        if (!empty(LoanRequest::where('phone', $data['phone'])->first())) {
            return redirect()->back()->with('error', 'This phone number already exists in our system.');
        }

        // Prevent duplicate submissions by Aadhaar (if provided)
        if (!empty($data['aadhar_number']) && !empty(LoanRequest::where('aadhar_number', $data['aadhar_number'])->first())) {
            return redirect()->back()->with('error', 'This Aadhaar number already exists in our system.');
        }

        $data['ip_address'] = $request->getClientIp();
        $data['lead_token'] = 'ACF' . rand(1000000000, 9999999999);

        LoanRequest::create($data);

        return redirect()->back()->with('success', 'Your loan request has been submitted successfully! Our team will contact you within 24 hours.');
    }
}

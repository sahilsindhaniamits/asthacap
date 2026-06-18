<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}

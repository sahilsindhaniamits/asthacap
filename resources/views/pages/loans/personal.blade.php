@extends('layouts.app')

@section('title', 'Personal Loan - Aastha Capital Finance')
@section('meta_description', 'Get a Personal Loan up to ₹25 Lakhs with competitive interest rates starting 10.5% p.a. Quick approval, minimal documents. Apply now at Aastha Capital Finance.')

@section('content')
@include('pages.loans.partials.loan-content', [
    'loanTitle' => 'Personal Loan',
    'loanCategory' => 'Personal Finance',
    'loanDescription' => 'Fulfill your personal aspirations — whether it\'s a dream wedding, vacation, medical emergency, or home renovation. Get instant approval with minimal paperwork.',
    'gradientClass' => 'bg-indigo-600',
    'gradientBgClass' => 'bg-gradient-to-r from-indigo-500 to-purple-500',
    'gradientCardClass' => 'gradient-card-1',
    'accentTextClass' => 'text-indigo-300',
    'iconClass' => 'fas fa-user',
    'loanAmount' => 'Up to ₹25 Lakhs',
    'interestRate' => 'Quick Approval',
    'tenure' => 'Up to 5 Years',
    'processing' => '24 Hours',
    'features' => [
        ['icon' => 'fas fa-bolt', 'title' => 'Instant Approval', 'description' => 'Get approved within 24 hours with our fast-track processing system.'],
        ['icon' => 'fas fa-file-alt', 'title' => 'Minimal Documents', 'description' => 'Just basic KYC and income proof. No excessive paperwork needed.'],
        ['icon' => 'fas fa-percentage', 'title' => 'Low Interest', 'description' => 'Competitive rates starting from 10.5% p.a. based on your credit profile.'],
        ['icon' => 'fas fa-calendar-alt', 'title' => 'Flexible Tenure', 'description' => 'Choose repayment period from 12 to 60 months as per your comfort.'],
        ['icon' => 'fas fa-money-bill-wave', 'title' => 'No Collateral', 'description' => 'Completely unsecured loan. No need to pledge any asset or property.'],
        ['icon' => 'fas fa-mobile-alt', 'title' => 'Online Process', 'description' => 'Apply from anywhere. Complete digital process from application to disbursement.'],
    ],
    'eligibility' => [
        'Indian citizen aged 21-58 years',
        'Salaried or self-employed individual',
        'Minimum monthly income of ₹25,000',
        'At least 1 year of work experience',
        'Good credit score (650+)',
        'Valid bank account and address proof',
    ],
    'documents' => [
        'PAN Card & Aadhaar Card',
        'Last 3 months salary slips',
        'Last 6 months bank statements',
        'Passport size photographs',
        'Address proof (utility bill/rent agreement)',
        'Employment/business proof',
    ],
    'faqs' => [
        ['question' => 'What is the maximum personal loan amount I can get?', 'answer' => 'You can get a personal loan of up to ₹25 Lakhs depending on your income, credit score, and repayment capacity. The exact amount is determined after assessing your application.'],
        ['question' => 'How quickly will I receive the loan amount?', 'answer' => 'Once your application is approved, the loan amount is typically disbursed within 24-48 hours directly to your bank account.'],
        ['question' => 'Can I prepay my personal loan?', 'answer' => 'Yes, you can prepay your personal loan after 6 months of regular EMI payments. Prepayment charges may apply as per the loan agreement terms.'],
        ['question' => 'What credit score do I need for a personal loan?', 'answer' => 'A credit score of 650 or above is generally required. However, a higher score (750+) can help you get better interest rates and higher loan amounts.'],
        ['question' => 'Can I apply for a personal loan if I am self-employed?', 'answer' => 'Yes, self-employed individuals can apply for a personal loan. You will need to provide ITR for the last 2 years and business financial statements.'],
    ]
])
@endsection

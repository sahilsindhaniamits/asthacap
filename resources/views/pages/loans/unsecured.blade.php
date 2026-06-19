@extends('layouts.app')

@section('title', 'Unsecured Loan - Aastha Capital Finance')
@section('meta_description', 'Get an Unsecured Loan up to ₹20 Lakhs with no collateral required. Based on your credit score and income. Quick approval at Aastha Capital Finance.')

@section('content')
@include('pages.loans.partials.loan-content', [
    'loanTitle' => 'Unsecured Loan',
    'loanCategory' => 'Collateral-Free Finance',
    'loanDescription' => 'No assets to pledge? No problem! Get funds purely based on your creditworthiness and income. Zero collateral, minimal documentation, and lightning-fast processing.',
    'gradientClass' => 'bg-pink-600',
    'gradientBgClass' => 'bg-gradient-to-r from-pink-500 to-purple-500',
    'gradientCardClass' => 'gradient-card-5',
    'accentTextClass' => 'text-pink-300',
    'iconClass' => 'fas fa-shield-alt',
    'loanAmount' => 'Up to ₹20 Lakhs',
    'interestRate' => 'No Collateral',
    'tenure' => 'Up to 5 Years',
    'processing' => '24 Hours',
    'features' => [
        ['icon' => 'fas fa-lock-open', 'title' => 'No Collateral', 'description' => 'Absolutely no asset or property pledge required. Your signature is enough.'],
        ['icon' => 'fas fa-bolt', 'title' => 'Instant Processing', 'description' => 'Application to disbursement in as fast as 24 hours with digital verification.'],
        ['icon' => 'fas fa-star', 'title' => 'Credit Score Based', 'description' => 'Loan amount and rate determined by your credit history and repayment track record.'],
        ['icon' => 'fas fa-file-alt', 'title' => 'Minimal Paperwork', 'description' => 'Just identity proof, income documents, and bank statements — that\'s all you need.'],
        ['icon' => 'fas fa-redo', 'title' => 'Flexible Usage', 'description' => 'Use the funds for any purpose — personal, medical, travel, renovation, or debt consolidation.'],
        ['icon' => 'fas fa-wallet', 'title' => 'Pre-approved Offers', 'description' => 'Existing customers with good track record get pre-approved loan offers at special rates.'],
    ],
    'eligibility' => [
        'Indian citizen aged 23-55 years',
        'Salaried professional with 2+ years experience',
        'Minimum monthly income of ₹30,000',
        'Credit score of 700 or above',
        'Stable employment with reputed organization',
        'No defaults or overdue on existing loans',
    ],
    'documents' => [
        'PAN Card & Aadhaar Card',
        'Last 3 months salary slips',
        'Last 6 months bank statements',
        'Form 16 / ITR (last 2 years)',
        'Employment letter/ID card',
        'Current address proof',
    ],
    'faqs' => [
        ['question' => 'How is an unsecured loan different from a personal loan?', 'answer' => 'An unsecured loan is essentially a type of personal loan where no collateral is needed. The key differentiator is that approval is heavily based on your credit score and income stability rather than assets.'],
        ['question' => 'What credit score do I need?', 'answer' => 'A minimum credit score of 700 is required for unsecured loans. Higher scores (750+) can qualify you for larger amounts and better interest rates.'],
        ['question' => 'Why are interest rates higher for unsecured loans?', 'answer' => 'Since no collateral is pledged, the lender takes higher risk. This risk is reflected in slightly higher interest rates compared to secured loans. However, our rates are still very competitive.'],
        ['question' => 'Can I increase my unsecured loan limit later?', 'answer' => 'Yes, after regular repayment of 6+ EMIs, you may be eligible for a top-up loan or limit enhancement based on your repayment history and updated income.'],
        ['question' => 'What happens if I default on an unsecured loan?', 'answer' => 'Defaults negatively impact your credit score and may lead to legal recovery proceedings. We recommend contacting us immediately if you face repayment difficulties — we offer restructuring options.'],
    ]
])
@endsection

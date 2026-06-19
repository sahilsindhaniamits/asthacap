@extends('layouts.app')

@section('title', 'Home Loan - Aastha Capital Finance')
@section('meta_description', 'Get a Home Loan up to ₹5 Crore with interest rates starting 8.5% p.a. and tenure up to 30 years. Buy, construct, or renovate. Apply at Aastha Capital Finance.')

@section('content')
@include('pages.loans.partials.loan-content', [
    'loanTitle' => 'Home Loan',
    'loanCategory' => 'Property Finance',
    'loanDescription' => 'Make your dream home a reality. Whether you\'re buying a new property, constructing a house, or renovating an existing one — we offer long-tenure home loans at attractive rates.',
    'gradientClass' => 'bg-orange-600',
    'gradientBgClass' => 'bg-gradient-to-r from-orange-500 to-amber-500',
    'gradientCardClass' => 'gradient-card-6',
    'accentTextClass' => 'text-orange-300',
    'iconClass' => 'fas fa-home',
    'loanAmount' => 'Up to ₹5 Crore',
    'tenure' => 'Up to 30 Years',
    'processing' => '5-7 Days',
    'features' => [
        ['icon' => 'fas fa-rupee-sign', 'title' => 'High Loan Amount', 'description' => 'Get up to ₹5 Crore financing covering up to 90% of property value.'],
        ['icon' => 'fas fa-calendar-alt', 'title' => 'Long Tenure', 'description' => 'Repay comfortably over up to 30 years, keeping your EMI affordable.'],
        ['icon' => 'fas fa-percentage', 'title' => 'Best Terms', 'description' => 'Among the most affordable home loan options with flexible repayment terms.'],
        ['icon' => 'fas fa-home', 'title' => 'All Property Types', 'description' => 'Flat, villa, plot, under-construction, resale — all property types covered.'],
        ['icon' => 'fas fa-hand-holding-usd', 'title' => 'Tax Benefits', 'description' => 'Save tax under Section 80C (principal) and Section 24 (interest) of IT Act.'],
        ['icon' => 'fas fa-exchange-alt', 'title' => 'Balance Transfer', 'description' => 'Switch your existing home loan to us for better rates and top-up options.'],
    ],
    'eligibility' => [
        'Indian citizen aged 23-65 years',
        'Salaried or self-employed individual',
        'Minimum monthly income of ₹30,000',
        'Good credit score (700+)',
        'Property should be in an approved area',
        'Age at loan maturity should not exceed 70 years',
    ],
    'documents' => [
        'PAN Card & Aadhaar Card',
        'Income proof (salary slips/ITR for 3 years)',
        'Last 12 months bank statements',
        'Property documents (agreement, title deed, approvals)',
        'Property valuation report',
        'Passport photos and address proof',
    ],
    'faqs' => [
        ['question' => 'What is the maximum home loan amount I can get?', 'answer' => 'You can get a home loan of up to ₹5 Crore, typically covering 75-90% of the property value depending on the loan amount slab and your eligibility.'],
        ['question' => 'Can I get a home loan for an under-construction property?', 'answer' => 'Yes, we provide home loans for under-construction properties. The disbursement happens in stages linked to construction milestones, and you pay pre-EMI interest until full disbursement.'],
        ['question' => 'What tax benefits do I get on a home loan?', 'answer' => 'You can claim deduction up to ₹1.5 Lakh on principal repayment under Section 80C and up to ₹2 Lakh on interest payment under Section 24(b) of the Income Tax Act.'],
        ['question' => 'Can I transfer my existing home loan?', 'answer' => 'Yes, we offer home loan balance transfer with attractive interest rates. You can also avail a top-up loan on the transferred amount for additional fund requirements.'],
        ['question' => 'Is home insurance mandatory with the loan?', 'answer' => 'While not always mandatory, we strongly recommend property insurance to protect your investment. Some lenders may require it as part of the loan terms.'],
    ]
])
@endsection

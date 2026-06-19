@extends('layouts.app')

@section('title', 'Business Loan - Aastha Capital Finance')
@section('meta_description', 'Get a Business Loan up to ₹50 Lakhs for expansion, working capital, or equipment purchase. Fast approval, flexible terms. Apply at Aastha Capital Finance.')

@section('content')
@include('pages.loans.partials.loan-content', [
    'loanTitle' => 'Business Loan',
    'loanCategory' => 'Business Finance',
    'loanDescription' => 'Fuel your business growth with capital for expansion, inventory purchase, equipment, or working capital needs. Flexible repayment options designed for entrepreneurs.',
    'gradientClass' => 'bg-cyan-600',
    'gradientBgClass' => 'bg-gradient-to-r from-cyan-500 to-blue-500',
    'gradientCardClass' => 'gradient-card-2',
    'accentTextClass' => 'text-cyan-300',
    'iconClass' => 'fas fa-briefcase',
    'loanAmount' => 'Up to ₹50 Lakhs',
    'interestRate' => 'Fast Processing',
    'tenure' => 'Up to 7 Years',
    'processing' => '48 Hours',
    'features' => [
        ['icon' => 'fas fa-chart-line', 'title' => 'Growth Capital', 'description' => 'Get funds to expand your business, open new branches, or scale operations.'],
        ['icon' => 'fas fa-cogs', 'title' => 'Equipment Financing', 'description' => 'Purchase machinery, technology, or equipment needed for your business.'],
        ['icon' => 'fas fa-boxes', 'title' => 'Inventory Funding', 'description' => 'Stock up on inventory for seasonal demands or bulk purchase discounts.'],
        ['icon' => 'fas fa-hand-holding-usd', 'title' => 'Working Capital', 'description' => 'Manage day-to-day operational expenses and cash flow gaps smoothly.'],
        ['icon' => 'fas fa-file-invoice', 'title' => 'Flexible Repayment', 'description' => 'Customize your EMI schedule to align with your business cash flow cycles.'],
        ['icon' => 'fas fa-tachometer-alt', 'title' => 'Fast Processing', 'description' => 'Get approval within 48 hours so your business never misses an opportunity.'],
    ],
    'eligibility' => [
        'Business operational for at least 2 years',
        'Minimum annual turnover of ₹10 Lakhs',
        'Business owner aged 25-65 years',
        'Valid GST registration (if applicable)',
        'Good business credit history',
        'Profitable business with ITR filed',
    ],
    'documents' => [
        'Business registration documents',
        'Last 2 years ITR with computation',
        'Last 12 months bank statements',
        'GST returns (last 1 year)',
        'KYC documents of all directors/partners',
        'Business financial statements (P&L, Balance Sheet)',
    ],
    'faqs' => [
        ['question' => 'What types of businesses are eligible?', 'answer' => 'All types of businesses including sole proprietorships, partnerships, LLPs, private limited companies, and self-employed professionals are eligible for our business loan.'],
        ['question' => 'Can I use the loan for multiple business purposes?', 'answer' => 'Yes, you can use the business loan for any legitimate business purpose including expansion, working capital, equipment purchase, inventory, renovation, or hiring.'],
        ['question' => 'Is collateral required for a business loan?', 'answer' => 'For loans up to ₹20 Lakhs, no collateral is required. For higher amounts, collateral security may be needed depending on the business profile and loan amount.'],
        ['question' => 'How is the interest rate determined?', 'answer' => 'The interest rate is based on factors like business vintage, turnover, profitability, credit score, and the loan amount requested. Better profiles get lower rates.'],
        ['question' => 'Can a new business get a loan?', 'answer' => 'Businesses need to be operational for at least 2 years. For newer businesses, you may explore our personal loan option or provide additional collateral for consideration.'],
    ]
])
@endsection

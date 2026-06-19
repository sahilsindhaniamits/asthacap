@extends('layouts.app')

@section('title', 'Education Loan - Aastha Capital Finance')
@section('meta_description', 'Get an Education Loan up to ₹75 Lakhs for studies in India or abroad. Covers tuition, hostel, and living expenses. Apply at Aastha Capital Finance.')

@section('content')
@include('pages.loans.partials.loan-content', [
    'loanTitle' => 'Education Loan',
    'loanCategory' => 'Education Finance',
    'loanDescription' => 'Don\'t let finances hold back your academic dreams. Our education loans cover tuition fees, hostel charges, books, equipment, and living expenses for studies in India or abroad.',
    'gradientClass' => 'bg-emerald-600',
    'gradientBgClass' => 'bg-gradient-to-r from-emerald-500 to-cyan-500',
    'gradientCardClass' => 'gradient-card-4',
    'accentTextClass' => 'text-emerald-300',
    'iconClass' => 'fas fa-graduation-cap',
    'loanAmount' => 'Up to ₹75 Lakhs',
    'tenure' => 'Up to 15 Years',
    'processing' => '3-5 Days',
    'features' => [
        ['icon' => 'fas fa-globe', 'title' => 'India & Abroad', 'description' => 'Financing for courses in India as well as top universities across the world.'],
        ['icon' => 'fas fa-book', 'title' => 'Complete Coverage', 'description' => 'Covers tuition fees, hostel, books, equipment, travel, and living expenses.'],
        ['icon' => 'fas fa-pause-circle', 'title' => 'Moratorium Period', 'description' => 'No EMI during study period. Start repayment only after course completion.'],
        ['icon' => 'fas fa-percentage', 'title' => 'Tax Benefits', 'description' => 'Get tax deduction on interest paid under Section 80E of Income Tax Act.'],
        ['icon' => 'fas fa-university', 'title' => 'All Courses Covered', 'description' => 'Engineering, MBA, Medical, Law, Arts, Sciences — all recognized courses eligible.'],
        ['icon' => 'fas fa-handshake', 'title' => 'Co-applicant Support', 'description' => 'Parents or guardians can be co-applicants to strengthen the application.'],
    ],
    'eligibility' => [
        'Indian citizen with confirmed admission',
        'Student aged 18-35 years',
        'Admission to recognized institution in India/abroad',
        'Co-applicant (parent/guardian) with stable income',
        'Good academic record',
        'Collateral for loans above ₹7.5 Lakhs (abroad studies)',
    ],
    'documents' => [
        'Admission letter from institution',
        'Mark sheets of all previous qualifications',
        'KYC documents of student and co-applicant',
        'Income proof of co-applicant',
        'Cost of study certificate/fee structure',
        'Passport & visa (for abroad studies)',
    ],
    'faqs' => [
        ['question' => 'When do I start repaying the education loan?', 'answer' => 'You get a moratorium period covering the course duration plus 6-12 months after completion. EMI payments begin only after this period ends, giving you time to find employment.'],
        ['question' => 'Is collateral required for education loans?', 'answer' => 'For loans up to ₹7.5 Lakhs for studies in India, no collateral is needed. For higher amounts or abroad studies, collateral like property may be required.'],
        ['question' => 'Can I get a loan for studying abroad?', 'answer' => 'Yes, we provide education loans for studying abroad at recognized universities worldwide. Loan amounts can go up to ₹75 Lakhs for premier international institutions.'],
        ['question' => 'What courses are covered under education loan?', 'answer' => 'All UGC/AICTE recognized courses in India and courses at recognized international universities are covered — including engineering, MBA, medical, law, arts, and vocational courses.'],
        ['question' => 'Can the loan cover living expenses?', 'answer' => 'Yes, the education loan covers tuition fees, hostel/accommodation, books, equipment, travel expenses, and reasonable living costs during the study period.'],
    ]
])
@endsection

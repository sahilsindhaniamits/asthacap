@extends('layouts.app')

@section('title', 'Car Loan - Aastha Capital Finance')
@section('meta_description', 'Get a Car Loan with up to 100% on-road financing at interest rates starting 8.5% p.a. New and used car loans available. Apply at Aastha Capital Finance.')

@section('content')
@include('pages.loans.partials.loan-content', [
    'loanTitle' => 'Car Loan',
    'loanCategory' => 'Vehicle Finance',
    'loanDescription' => 'Drive your dream car home today! Whether it\'s a brand new sedan or a pre-owned SUV, we offer up to 100% on-road price financing with affordable EMIs.',
    'gradientClass' => 'bg-amber-600',
    'gradientBgClass' => 'bg-gradient-to-r from-amber-500 to-red-500',
    'gradientCardClass' => 'gradient-card-3',
    'accentTextClass' => 'text-amber-300',
    'iconClass' => 'fas fa-car',
    'loanAmount' => '100% On-Road',
    'interestRate' => 'Same Day Approval',
    'tenure' => 'Up to 7 Years',
    'processing' => '24 Hours',
    'features' => [
        ['icon' => 'fas fa-percentage', 'title' => '100% Financing', 'description' => 'Get up to 100% of the on-road price financed. Zero or minimal down payment options.'],
        ['icon' => 'fas fa-car-side', 'title' => 'New & Used Cars', 'description' => 'Financing available for brand new cars as well as pre-owned vehicles up to 5 years old.'],
        ['icon' => 'fas fa-rupee-sign', 'title' => 'Low EMIs', 'description' => 'Affordable monthly installments with interest rates starting from just 8.5% per annum.'],
        ['icon' => 'fas fa-clock', 'title' => 'Same Day Approval', 'description' => 'Get your car loan approved on the same day. Drive home your dream car without waiting.'],
        ['icon' => 'fas fa-exchange-alt', 'title' => 'Balance Transfer', 'description' => 'Transfer your existing car loan to us for better rates and save on interest costs.'],
        ['icon' => 'fas fa-shield-alt', 'title' => 'Insurance Assistance', 'description' => 'We help you get the best car insurance deals along with your car loan.'],
    ],
    'eligibility' => [
        'Indian citizen aged 21-65 years',
        'Salaried or self-employed individual',
        'Minimum monthly income of ₹20,000',
        'Good credit score (650+)',
        'Valid driving license',
        'Stable employment or business for 1+ year',
    ],
    'documents' => [
        'PAN Card & Aadhaar Card',
        'Last 3 months salary slips / ITR',
        'Last 6 months bank statements',
        'Vehicle quotation/proforma invoice',
        'Driving license copy',
        'Address proof and passport photos',
    ],
    'faqs' => [
        ['question' => 'Can I get 100% financing for a new car?', 'answer' => 'Yes, for select models and based on your income and credit profile, we offer up to 100% on-road price financing for new cars. Some cases may require a 5-10% down payment.'],
        ['question' => 'Do you offer loans for used cars?', 'answer' => 'Yes, we provide loans for pre-owned cars up to 5 years old. The maximum financing for used cars is typically 80-90% of the car\'s current market value.'],
        ['question' => 'What is the maximum tenure for a car loan?', 'answer' => 'The maximum tenure is 7 years (84 months) for new cars. For used cars, the maximum tenure depends on the age of the vehicle at the time of application.'],
        ['question' => 'Can I transfer my existing car loan?', 'answer' => 'Yes, we offer car loan balance transfer facility. If you have an existing car loan at a higher interest rate, you can transfer it to us and save on interest.'],
        ['question' => 'Is insurance mandatory with a car loan?', 'answer' => 'Yes, comprehensive car insurance is mandatory for the entire loan tenure. We can assist you in getting the best insurance deal at competitive premiums.'],
    ]
])
@endsection

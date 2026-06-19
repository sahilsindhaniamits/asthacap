@extends('layouts.app')

@section('title', 'Our Loan Services - Aastha Capital Finance')
@section('meta_description', 'Explore all loan types offered by Aastha Capital Finance - Personal Loan, Business Loan, Car Loan, Education Loan, Unsecured Loan, and Home Loan.')

@section('content')

<!-- Page Header -->
<section class="position-relative overflow-hidden" style="padding-top:8rem;padding-bottom:5rem;">
    <div class="position-absolute top-0 start-0 w-100 h-100 gradient-hero"></div>
    <div class="orb" style="width:250px;height:250px;background:#06b6d4;top:20%;left:5%;"></div>
    <div class="container position-relative text-center" style="z-index:2;">
        <span class="badge-glass text-info mb-3">Our Services</span>
        <h1 class="display-5 fw-bold text-white mb-3">Loan Solutions for <span class="gradient-text">Every Need</span></h1>
        <p class="text-muted-custom mx-auto" style="max-width:600px;">From personal aspirations to business growth, we offer a wide range of loan products with competitive rates and flexible terms.</p>
    </div>
</section>


<!-- Loan Types Grid -->
<section class="section-padding section-dark">
    <div class="orb" style="width:350px;height:350px;background:#6366f1;top:10%;right:0;"></div>
    <div class="container position-relative" style="z-index:2;">
        <div class="row g-4">
            <!-- Personal Loan -->
            <div class="col-md-6 col-lg-4">
                <a href="{{ route('loans.personal') }}" class="text-decoration-none">
                    <div class="glass-card p-4 h-100 position-relative overflow-hidden">
                        <div class="accent-bar accent-bar-indigo"></div>
                        <div class="icon-box gradient-card-1 mb-3" style="width:56px;height:56px;"><i class="fas fa-user text-white fs-5"></i></div>
                        <h5 class="text-white fw-bold mb-2">Personal Loan</h5>
                        <p class="text-muted-custom small mb-3">Fulfill your personal dreams — wedding, travel, medical expenses, or home renovation with quick disbursement.</p>
                        <ul class="list-unstyled small mb-3">
                            <li class="text-muted-custom mb-1"><i class="fas fa-check text-primary me-2"></i>Up to &#8377;25 Lakhs</li>
                            <li class="text-muted-custom mb-1"><i class="fas fa-check text-primary me-2"></i>Quick 24hr approval</li>
                            <li class="text-muted-custom"><i class="fas fa-check text-primary me-2"></i>Tenure up to 5 years</li>
                        </ul>
                        <span class="small fw-semibold" style="color:#818cf8;">Learn More <i class="fas fa-arrow-right ms-1"></i></span>
                    </div>
                </a>
            </div>
            <!-- Business Loan -->
            <div class="col-md-6 col-lg-4">
                <a href="{{ route('loans.business') }}" class="text-decoration-none">
                    <div class="glass-card p-4 h-100 position-relative overflow-hidden">
                        <div class="accent-bar accent-bar-cyan"></div>
                        <div class="icon-box gradient-card-2 mb-3" style="width:56px;height:56px;"><i class="fas fa-briefcase text-white fs-5"></i></div>
                        <h5 class="text-white fw-bold mb-2">Business Loan</h5>
                        <p class="text-muted-custom small mb-3">Grow your business with working capital, equipment purchase, or expansion funding with flexible repayment.</p>
                        <ul class="list-unstyled small mb-3">
                            <li class="text-muted-custom mb-1"><i class="fas fa-check text-info me-2"></i>Up to &#8377;50 Lakhs</li>
                            <li class="text-muted-custom mb-1"><i class="fas fa-check text-info me-2"></i>Minimal documentation</li>
                            <li class="text-muted-custom"><i class="fas fa-check text-info me-2"></i>Tenure up to 7 years</li>
                        </ul>
                        <span class="small fw-semibold" style="color:#22d3ee;">Learn More <i class="fas fa-arrow-right ms-1"></i></span>
                    </div>
                </a>
            </div>
            <!-- Car Loan -->
            <div class="col-md-6 col-lg-4">
                <a href="{{ route('loans.car') }}" class="text-decoration-none">
                    <div class="glass-card p-4 h-100 position-relative overflow-hidden">
                        <div class="accent-bar accent-bar-amber"></div>
                        <div class="icon-box gradient-card-3 mb-3" style="width:56px;height:56px;"><i class="fas fa-car text-white fs-5"></i></div>
                        <h5 class="text-white fw-bold mb-2">Car Loan</h5>
                        <p class="text-muted-custom small mb-3">Drive your dream car home today with up to 100% on-road financing and affordable monthly payments.</p>
                        <ul class="list-unstyled small mb-3">
                            <li class="text-muted-custom mb-1"><i class="fas fa-check text-warning me-2"></i>Up to 100% financing</li>
                            <li class="text-muted-custom mb-1"><i class="fas fa-check text-warning me-2"></i>Same day approval</li>
                            <li class="text-muted-custom"><i class="fas fa-check text-warning me-2"></i>Tenure up to 7 years</li>
                        </ul>
                        <span class="small fw-semibold" style="color:#fbbf24;">Learn More <i class="fas fa-arrow-right ms-1"></i></span>
                    </div>
                </a>
            </div>
            <!-- Education Loan -->
            <div class="col-md-6 col-lg-4">
                <a href="{{ route('loans.education') }}" class="text-decoration-none">
                    <div class="glass-card p-4 h-100 position-relative overflow-hidden">
                        <div class="accent-bar accent-bar-emerald"></div>
                        <div class="icon-box gradient-card-4 mb-3" style="width:56px;height:56px;"><i class="fas fa-graduation-cap text-white fs-5"></i></div>
                        <h5 class="text-white fw-bold mb-2">Education Loan</h5>
                        <p class="text-muted-custom small mb-3">Invest in your future with loans covering tuition fees, hostel, books, and living expenses.</p>
                        <ul class="list-unstyled small mb-3">
                            <li class="text-muted-custom mb-1"><i class="fas fa-check text-success me-2"></i>Up to &#8377;75 Lakhs</li>
                            <li class="text-muted-custom mb-1"><i class="fas fa-check text-success me-2"></i>Easy eligibility</li>
                            <li class="text-muted-custom"><i class="fas fa-check text-success me-2"></i>Moratorium period available</li>
                        </ul>
                        <span class="small fw-semibold" style="color:#34d399;">Learn More <i class="fas fa-arrow-right ms-1"></i></span>
                    </div>
                </a>
            </div>
            <!-- Unsecured Loan -->
            <div class="col-md-6 col-lg-4">
                <a href="{{ route('loans.unsecured') }}" class="text-decoration-none">
                    <div class="glass-card p-4 h-100 position-relative overflow-hidden">
                        <div class="accent-bar accent-bar-pink"></div>
                        <div class="icon-box gradient-card-5 mb-3" style="width:56px;height:56px;"><i class="fas fa-shield-alt text-white fs-5"></i></div>
                        <h5 class="text-white fw-bold mb-2">Unsecured Loan</h5>
                        <p class="text-muted-custom small mb-3">No collateral required. Get funds purely based on your credit score and income with quick processing.</p>
                        <ul class="list-unstyled small mb-3">
                            <li class="text-muted-custom mb-1"><i class="fas fa-check me-2" style="color:#f472b6;"></i>No collateral needed</li>
                            <li class="text-muted-custom mb-1"><i class="fas fa-check me-2" style="color:#f472b6;"></i>Fast processing</li>
                            <li class="text-muted-custom"><i class="fas fa-check me-2" style="color:#f472b6;"></i>Quick disbursal</li>
                        </ul>
                        <span class="small fw-semibold" style="color:#f472b6;">Learn More <i class="fas fa-arrow-right ms-1"></i></span>
                    </div>
                </a>
            </div>
            <!-- Home Loan -->
            <div class="col-md-6 col-lg-4">
                <a href="{{ route('loans.home') }}" class="text-decoration-none">
                    <div class="glass-card p-4 h-100 position-relative overflow-hidden">
                        <div class="accent-bar accent-bar-orange"></div>
                        <div class="icon-box gradient-card-6 mb-3" style="width:56px;height:56px;"><i class="fas fa-home text-white fs-5"></i></div>
                        <h5 class="text-white fw-bold mb-2">Home Loan</h5>
                        <p class="text-muted-custom small mb-3">Make your dream home a reality with attractive rates, long tenure, and hassle-free processing.</p>
                        <ul class="list-unstyled small mb-3">
                            <li class="text-muted-custom mb-1"><i class="fas fa-check me-2" style="color:#fb923c;"></i>Up to &#8377;5 Crore</li>
                            <li class="text-muted-custom mb-1"><i class="fas fa-check me-2" style="color:#fb923c;"></i>Same day approval</li>
                            <li class="text-muted-custom"><i class="fas fa-check me-2" style="color:#fb923c;"></i>Tenure up to 30 years</li>
                        </ul>
                        <span class="small fw-semibold" style="color:#fb923c;">Learn More <i class="fas fa-arrow-right ms-1"></i></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>


<!-- Comparison Table -->
<section class="section-padding section-gradient">
    <div class="container position-relative" style="z-index:2;">
        <div class="text-center mb-5">
            <span class="badge-glass text-warning mb-3">Compare</span>
            <h2 class="display-6 fw-bold text-white mb-3">Quick <span class="gradient-text">Comparison</span></h2>
        </div>
        <div class="glass-card overflow-hidden p-0">
            <div class="table-responsive">
                <table class="table table-glass mb-0">
                    <thead>
                        <tr>
                            <th>Loan Type</th>
                            <th>Amount</th>
                            <th>Max Tenure</th>
                            <th>Processing</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="fw-medium text-white"><i class="fas fa-user text-primary me-2"></i>Personal Loan</td>
                            <td>Up to &#8377;25L</td>
                            <td>5 Years</td>
                            <td><span class="badge bg-success bg-opacity-10 text-success">24 Hours</span></td>
                        </tr>
                        <tr>
                            <td class="fw-medium text-white"><i class="fas fa-briefcase text-info me-2"></i>Business Loan</td>
                            <td>Up to &#8377;50L</td>
                            <td>7 Years</td>
                            <td><span class="badge bg-warning bg-opacity-10 text-warning">48 Hours</span></td>
                        </tr>
                        <tr>
                            <td class="fw-medium text-white"><i class="fas fa-car text-warning me-2"></i>Car Loan</td>
                            <td>100% On-road</td>
                            <td>7 Years</td>
                            <td><span class="badge bg-success bg-opacity-10 text-success">24 Hours</span></td>
                        </tr>
                        <tr>
                            <td class="fw-medium text-white"><i class="fas fa-graduation-cap text-success me-2"></i>Education Loan</td>
                            <td>Up to &#8377;75L</td>
                            <td>15 Years</td>
                            <td><span class="badge bg-warning bg-opacity-10 text-warning">3-5 Days</span></td>
                        </tr>
                        <tr>
                            <td class="fw-medium text-white"><i class="fas fa-shield-alt me-2" style="color:#f472b6;"></i>Unsecured Loan</td>
                            <td>Up to &#8377;20L</td>
                            <td>5 Years</td>
                            <td><span class="badge bg-success bg-opacity-10 text-success">24 Hours</span></td>
                        </tr>
                        <tr>
                            <td class="fw-medium text-white"><i class="fas fa-home me-2" style="color:#fb923c;"></i>Home Loan</td>
                            <td>Up to &#8377;5Cr</td>
                            <td>30 Years</td>
                            <td><span class="badge bg-warning bg-opacity-10 text-warning">5-7 Days</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section-padding position-relative overflow-hidden">
    <div class="position-absolute top-0 start-0 w-100 h-100 gradient-hero"></div>
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background:rgba(0,0,0,0.3);"></div>
    <div class="container position-relative text-center" style="z-index:5;">
        <h2 class="display-6 fw-bold text-white mb-3">Not Sure Which Loan is Right?</h2>
        <p class="lead text-muted-custom mb-4 mx-auto" style="max-width:600px;">Use our EMI calculator to estimate your monthly payments or contact our team for personalized guidance.</p>
        <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
            <a href="{{ route('calculator') }}" class="btn-gradient fs-6 px-4 py-3">
                <i class="fas fa-calculator me-2"></i> EMI Calculator
            </a>
            <a href="{{ route('contact') }}" class="btn-outline-glass fs-6 px-4 py-3">
                <i class="fas fa-phone me-2"></i> Talk to Expert
            </a>
        </div>
    </div>
</section>

@endsection

@extends('layouts.app')

@section('title', 'Aastha Capital Finance - Home')
@section('meta_description', 'Aastha Capital Finance offers Personal Loans, Business Loans, Home Loans, Car Loans, Education Loans with fast approval and competitive rates.')

@section('content')

<!-- ====== HERO SECTION ====== -->
<section class="position-relative min-vh-100 d-flex align-items-center overflow-hidden">
    <!-- Background -->
    <div class="position-absolute top-0 start-0 w-100 h-100 gradient-hero"></div>

    <!-- Decorative Orbs -->
    <div class="orb orb-1"></div>
    <div class="orb orb-2"></div>
    <div class="orb orb-3"></div>

    <div class="container position-relative" style="z-index:5;">
        <div class="row align-items-center g-5 py-5">
            <!-- Left Content -->
            <div class="col-lg-6 animate-slide-up">
                <span class="badge-glass text-info mb-3">
                    <span class="d-inline-block rounded-circle bg-success me-2" style="width:8px;height:8px;"></span>
                    Trusted by 10,000+ Customers
                </span>
                <h1 class="display-4 fw-bold text-white lh-sm mb-4">
                    Your Dreams,<br>
                    <span class="gradient-text">Our Finance.</span>
                </h1>
                <p class="lead text-muted-custom mb-4" style="max-width:500px;">
                    Get instant loan approvals with fast processing. From personal needs to business growth, we've got the right financial solution for you.
                </p>
                <div class="d-flex flex-column flex-sm-row gap-3 mb-5">
                    <a href="{{ route('loans') }}" class="btn-gradient text-center">
                        Explore Loans <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                    <a href="{{ route('calculator') }}" class="btn-outline-glass text-center">
                        <i class="fas fa-calculator me-2"></i> EMI Calculator
                    </a>
                </div>

                <!-- Stats -->
                <div class="row g-4">
                    <div class="col-4">
                        <div class="text-white fw-bold fs-4">10K+</div>
                        <div class="text-muted-custom small">Happy Customers</div>
                    </div>
                    <div class="col-4">
                        <div class="text-white fw-bold fs-4">&#8377;50Cr+</div>
                        <div class="text-muted-custom small">Loans Disbursed</div>
                    </div>
                    <div class="col-4">
                        <div class="text-white fw-bold fs-4">24hrs</div>
                        <div class="text-muted-custom small">Fast Approval</div>
                    </div>
                </div>
            </div>

            <!-- Right Content - Hero Visual with 3 Cards -->
            <div class="col-lg-6 d-none d-lg-block animate-fade-in">
                <div class="position-relative" style="min-height:380px;">
                    <!-- Main Card -->
                    <div class="glass-card p-4 mx-auto" style="max-width:320px;">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="icon-box gradient-card-2" style="width:44px;height:44px;">
                                <i class="fas fa-wallet text-white"></i>
                            </div>
                            <span class="text-success small fw-semibold"><i class="fas fa-check-circle me-1"></i>Approved</span>
                        </div>
                        <p class="text-muted-custom small mb-1">Loan Amount</p>
                        <p class="text-white fw-bold fs-2 mb-2">&#8377;5,00,000</p>
                        <div class="row g-2 mb-3">
                            <div class="col-6">
                                <p class="text-muted-custom small mb-0">Tenure</p>
                                <p class="text-white fw-semibold small mb-0">36 Months</p>
                            </div>
                            <div class="col-6">
                                <p class="text-muted-custom small mb-0">Status</p>
                                <p class="text-success fw-semibold small mb-0">Disbursed</p>
                            </div>
                        </div>
                        <div class="progress-gradient">
                            <div class="progress-bar" style="width:75%;"></div>
                        </div>
                        <p class="text-muted-custom small mt-1 mb-0">75% disbursed</p>
                    </div>

                    <!-- Floating Card 2 - Top Right -->
                    <div class="glass-card p-3 position-absolute animate-float" style="top:-10px;right:10px;animation-delay:1s;">
                        <div class="d-flex align-items-center gap-2">
                            <div class="icon-box gradient-card-4" style="width:36px;height:36px;border-radius:50%;">
                                <i class="fas fa-arrow-up text-white small"></i>
                            </div>
                            <div>
                                <p class="text-muted-custom small mb-0" style="font-size:0.7rem;">Monthly EMI</p>
                                <p class="text-white fw-bold small mb-0">&#8377;16,253</p>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Card 3 - Bottom Left -->
                    <div class="glass-card p-3 position-absolute animate-float" style="bottom:10px;left:0;animation-delay:3s;">
                        <div class="d-flex align-items-center gap-2">
                            <div class="icon-box gradient-card-1" style="width:36px;height:36px;border-radius:50%;">
                                <i class="fas fa-users text-white small"></i>
                            </div>
                            <div>
                                <p class="text-muted-custom small mb-0" style="font-size:0.7rem;">Happy Customers</p>
                                <p class="text-white fw-bold small mb-0">10,000+</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ====== LOAN TYPES SECTION ====== -->
<section class="section-padding section-dark">
    <div class="orb" style="width:350px;height:350px;background:#6366f1;top:10%;right:0;"></div>
    <div class="container position-relative" style="z-index:2;">
        <div class="text-center mb-4">
            <span class="badge-glass text-info mb-3">Our Services</span>
            <h2 class="display-6 fw-bold text-white mb-2">Loan Solutions for <span class="gradient-text">Every Need</span></h2>
            <p class="text-muted-custom mx-auto" style="max-width:600px;">Choose from our wide range of loan products designed to meet your specific financial requirements.</p>
            <img src="{{ asset('images/hero-finance.svg') }}" alt="Finance Solutions" class="img-fluid mt-3 mb-2" style="max-height:160px;opacity:0.85;">
        </div>

        <div class="row g-4">
            <!-- Personal Loan -->
            <div class="col-md-6 col-lg-4">
                <a href="{{ route('loans.personal') }}" class="text-decoration-none">
                    <div class="glass-card p-4 h-100 position-relative overflow-hidden">
                        <div class="accent-bar accent-bar-indigo"></div>
                        <div class="icon-box gradient-card-1 mb-3">
                            <i class="fas fa-user text-white fs-5"></i>
                        </div>
                        <h5 class="text-white fw-bold mb-2">Personal Loan</h5>
                        <p class="text-muted-custom small mb-3">Fulfill your personal dreams — wedding, travel, medical expenses, or home renovation.</p>
                        <ul class="list-unstyled small mb-3">
                            <li class="text-muted-custom mb-1"><i class="fas fa-check text-primary me-2 small"></i>Up to &#8377;25 Lakhs</li>
                            <li class="text-muted-custom mb-1"><i class="fas fa-check text-primary me-2 small"></i>Quick 24hr approval</li>
                            <li class="text-muted-custom"><i class="fas fa-check text-primary me-2 small"></i>Tenure up to 5 years</li>
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
                        <div class="icon-box gradient-card-2 mb-3">
                            <i class="fas fa-briefcase text-white fs-5"></i>
                        </div>
                        <h5 class="text-white fw-bold mb-2">Business Loan</h5>
                        <p class="text-muted-custom small mb-3">Grow your business with working capital, equipment purchase, or expansion funding.</p>
                        <ul class="list-unstyled small mb-3">
                            <li class="text-muted-custom mb-1"><i class="fas fa-check text-info me-2 small"></i>Up to &#8377;50 Lakhs</li>
                            <li class="text-muted-custom mb-1"><i class="fas fa-check text-info me-2 small"></i>Minimal documentation</li>
                            <li class="text-muted-custom"><i class="fas fa-check text-info me-2 small"></i>Tenure up to 7 years</li>
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
                        <div class="icon-box gradient-card-3 mb-3">
                            <i class="fas fa-car text-white fs-5"></i>
                        </div>
                        <h5 class="text-white fw-bold mb-2">Car Loan</h5>
                        <p class="text-muted-custom small mb-3">Drive your dream car home today with up to 100% on-road financing.</p>
                        <ul class="list-unstyled small mb-3">
                            <li class="text-muted-custom mb-1"><i class="fas fa-check text-warning me-2 small"></i>Up to 100% financing</li>
                            <li class="text-muted-custom mb-1"><i class="fas fa-check text-warning me-2 small"></i>Same day approval</li>
                            <li class="text-muted-custom"><i class="fas fa-check text-warning me-2 small"></i>Tenure up to 7 years</li>
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
                        <div class="icon-box gradient-card-4 mb-3">
                            <i class="fas fa-graduation-cap text-white fs-5"></i>
                        </div>
                        <h5 class="text-white fw-bold mb-2">Education Loan</h5>
                        <p class="text-muted-custom small mb-3">Invest in your future with loans covering tuition, hostel, and living expenses.</p>
                        <ul class="list-unstyled small mb-3">
                            <li class="text-muted-custom mb-1"><i class="fas fa-check text-success me-2 small"></i>Up to &#8377;75 Lakhs</li>
                            <li class="text-muted-custom mb-1"><i class="fas fa-check text-success me-2 small"></i>Easy eligibility</li>
                            <li class="text-muted-custom"><i class="fas fa-check text-success me-2 small"></i>Moratorium period available</li>
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
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="icon-box gradient-card-5">
                                <i class="fas fa-shield-alt text-white fs-5"></i>
                            </div>
                            <img src="{{ asset('images/unsecured-loan.svg') }}" alt="Unsecured Loan" style="height:50px;opacity:0.7;">
                        </div>
                        <h5 class="text-white fw-bold mb-2">Unsecured Loan</h5>
                        <p class="text-muted-custom small mb-3">No collateral required. Get funds based on your credit score and income.</p>
                        <ul class="list-unstyled small mb-3">
                            <li class="text-muted-custom mb-1"><i class="fas fa-check me-2 small" style="color:#f472b6;"></i>No collateral needed</li>
                            <li class="text-muted-custom mb-1"><i class="fas fa-check me-2 small" style="color:#f472b6;"></i>Interest from 11% p.a.</li>
                            <li class="text-muted-custom"><i class="fas fa-check me-2 small" style="color:#f472b6;"></i>Quick disbursal</li>
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
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="icon-box gradient-card-6">
                                <i class="fas fa-home text-white fs-5"></i>
                            </div>
                            <img src="{{ asset('images/home-loan.svg') }}" alt="Home Loan" style="height:50px;opacity:0.7;">
                        </div>
                        <h5 class="text-white fw-bold mb-2">Home Loan</h5>
                        <p class="text-muted-custom small mb-3">Make your dream home a reality with attractive rates and long tenure.</p>
                        <ul class="list-unstyled small mb-3">
                            <li class="text-muted-custom mb-1"><i class="fas fa-check text-warning me-2 small"></i>Up to &#8377;5 Crore</li>
                            <li class="text-muted-custom mb-1"><i class="fas fa-check text-warning me-2 small"></i>Interest from 8.5% p.a.</li>
                            <li class="text-muted-custom"><i class="fas fa-check text-warning me-2 small"></i>Tenure up to 30 years</li>
                        </ul>
                        <span class="small fw-semibold" style="color:#fb923c;">Learn More <i class="fas fa-arrow-right ms-1"></i></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ====== HOW IT WORKS ====== -->
<section class="section-padding section-gradient">
    <div class="container position-relative" style="z-index:2;">
        <div class="text-center mb-5">
            <span class="badge-glass text-warning mb-3">Simple Process</span>
            <h2 class="display-6 fw-bold text-white mb-3">How It <span class="gradient-text">Works</span></h2>
            <p class="text-muted-custom mx-auto" style="max-width:600px;">Get your loan in just 3 simple steps. We've made the process quick and hassle-free.</p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="glass-card p-4 text-center h-100">
                    <div class="icon-box gradient-card-1 mx-auto mb-3" style="width:64px;height:64px;">
                        <i class="fas fa-file-alt text-white fs-4"></i>
                    </div>
                    <div class="badge rounded-pill bg-primary bg-opacity-25 text-primary mb-2">Step 1</div>
                    <h5 class="text-white fw-bold mb-2">Apply Online</h5>
                    <p class="text-muted-custom small mb-0">Fill out a simple application form with basic details. Takes less than 5 minutes.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="glass-card p-4 text-center h-100">
                    <div class="icon-box gradient-card-2 mx-auto mb-3" style="width:64px;height:64px;">
                        <i class="fas fa-search text-white fs-4"></i>
                    </div>
                    <div class="badge rounded-pill bg-info bg-opacity-25 text-info mb-2">Step 2</div>
                    <h5 class="text-white fw-bold mb-2">Quick Verification</h5>
                    <p class="text-muted-custom small mb-0">Our team verifies your documents and checks eligibility within hours.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="glass-card p-4 text-center h-100">
                    <div class="icon-box gradient-card-4 mx-auto mb-3" style="width:64px;height:64px;">
                        <i class="fas fa-hand-holding-usd text-white fs-4"></i>
                    </div>
                    <div class="badge rounded-pill bg-success bg-opacity-25 text-success mb-2">Step 3</div>
                    <h5 class="text-white fw-bold mb-2">Get Funded</h5>
                    <p class="text-muted-custom small mb-0">Once approved, loan amount is disbursed directly to your bank account.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ====== WHY CHOOSE US ====== -->
<section class="section-padding section-dark">
    <div class="orb" style="width:300px;height:300px;background:#8b5cf6;bottom:10%;left:5%;"></div>
    <div class="container position-relative" style="z-index:2;">
        <div class="text-center mb-5">
            <span class="badge-glass text-success mb-3">Our Advantage</span>
            <h2 class="display-6 fw-bold text-white mb-3">Why Choose <span class="gradient-text">Aastha Capital</span></h2>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="glass-card p-4 text-center h-100">
                    <div class="icon-box gradient-card-1 mx-auto mb-3">
                        <i class="fas fa-bolt text-white"></i>
                    </div>
                    <h6 class="text-white fw-bold mb-2">Fast Processing</h6>
                    <p class="text-muted-custom small mb-0">Get approved within 24 hours with minimal documentation required.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="glass-card p-4 text-center h-100">
                    <div class="icon-box gradient-card-2 mx-auto mb-3">
                        <i class="fas fa-file-alt text-white"></i>
                    </div>
                    <h6 class="text-white fw-bold mb-2">Minimal Documents</h6>
                    <p class="text-muted-custom small mb-0">Simple paperwork — just basic KYC and income proof needed.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="glass-card p-4 text-center h-100">
                    <div class="icon-box gradient-card-4 mx-auto mb-3">
                        <i class="fas fa-headset text-white"></i>
                    </div>
                    <h6 class="text-white fw-bold mb-2">Dedicated Support</h6>
                    <p class="text-muted-custom small mb-0">Personal relationship manager for every customer throughout the journey.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="glass-card p-4 text-center h-100">
                    <div class="icon-box gradient-card-5 mx-auto mb-3">
                        <i class="fas fa-shield-alt text-white"></i>
                    </div>
                    <h6 class="text-white fw-bold mb-2">100% Secure</h6>
                    <p class="text-muted-custom small mb-0">Your data is encrypted and protected with bank-grade security.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ====== TESTIMONIALS ====== -->
<section class="section-padding section-gradient">
    <div class="container position-relative" style="z-index:2;">
        <div class="text-center mb-5">
            <span class="badge-glass text-info mb-3">Testimonials</span>
            <h2 class="display-6 fw-bold text-white mb-3">What Our <span class="gradient-text">Customers Say</span></h2>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="glass-card p-4 h-100">
                    <div class="d-flex mb-3 text-warning small">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p class="text-muted-custom small mb-4">"Got my personal loan approved within 24 hours! The process was so smooth and the team was very helpful. Highly recommended for anyone looking for quick finance."</p>
                    <div class="d-flex align-items-center gap-3">
                        <div class="icon-box gradient-card-1" style="width:40px;height:40px;border-radius:50%;">
                            <span class="text-white fw-bold small">R</span>
                        </div>
                        <div>
                            <p class="text-white fw-semibold small mb-0">Rahul Sharma</p>
                            <p class="text-muted-custom small mb-0">Personal Loan</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="glass-card p-4 h-100">
                    <div class="d-flex mb-3 text-warning small">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p class="text-muted-custom small mb-4">"Aastha Capital helped me expand my business with a quick business loan. Their rates are competitive and the documentation process was minimal."</p>
                    <div class="d-flex align-items-center gap-3">
                        <div class="icon-box gradient-card-2" style="width:40px;height:40px;border-radius:50%;">
                            <span class="text-white fw-bold small">P</span>
                        </div>
                        <div>
                            <p class="text-white fw-semibold small mb-0">Priya Patel</p>
                            <p class="text-muted-custom small mb-0">Business Loan</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="glass-card p-4 h-100">
                    <div class="d-flex mb-3 text-warning small">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                    </div>
                    <p class="text-muted-custom small mb-4">"Thanks to Aastha Capital, I could buy my dream home. The home loan process was transparent and the EMI is very affordable. Great service!"</p>
                    <div class="d-flex align-items-center gap-3">
                        <div class="icon-box gradient-card-6" style="width:40px;height:40px;border-radius:50%;">
                            <span class="text-white fw-bold small">A</span>
                        </div>
                        <div>
                            <p class="text-white fw-semibold small mb-0">Amit Verma</p>
                            <p class="text-muted-custom small mb-0">Home Loan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ====== EMI CALCULATOR SECTION ====== -->
<section class="section-padding section-dark">
    <div class="container position-relative" style="z-index:2;">
        <div class="text-center mb-4">
            <span class="badge-glass text-warning mb-3">Financial Tool</span>
            <h2 class="display-6 fw-bold text-white mb-2">Loan EMI <span class="gradient-text">Calculator</span></h2>
            <p class="text-muted-custom">Calculate your monthly EMI easily and plan your loan better</p>
        </div>

        <div class="row g-4 align-items-stretch">
            <!-- EMI Input Form -->
            <div class="col-lg-4">
                <div class="glass-card p-4 h-100 position-relative overflow-hidden">
                    <div class="accent-bar accent-bar-indigo"></div>
                    <h5 class="text-white fw-bold mb-4 mt-2">Enter Loan Details</h5>

                    <label class="form-label-glass">Loan Amount</label>
                    <input type="number" id="homeLoanAmount" class="form-control form-control-glass mb-3" placeholder="Enter loan amount">

                    <label class="form-label-glass">Interest Rate (%)</label>
                    <input type="number" id="homeInterestRate" class="form-control form-control-glass mb-3" placeholder="Enter interest rate" step="0.1">

                    <label class="form-label-glass">Loan Tenure</label>
                    <div class="input-group mb-3">
                        <input type="number" id="homeLoanTenure" class="form-control form-control-glass" placeholder="Enter tenure">
                        <select id="homeTenureOption" class="form-select form-select-glass" style="max-width:120px;">
                            <option value="months">Months</option>
                            <option value="years">Years</option>
                        </select>
                    </div>

                    <button class="btn-gradient w-100" onclick="calculateHomeEMI()">
                        Calculate EMI <i class="fas fa-calculator ms-2"></i>
                    </button>
                </div>
            </div>

            <!-- EMI Details -->
            <div class="col-lg-4">
                <div class="glass-card p-4 h-100 position-relative overflow-hidden">
                    <div class="accent-bar accent-bar-emerald"></div>
                    <h5 class="text-white fw-bold mb-4 mt-2">EMI Details</h5>
                    <div class="mb-3">
                        <div class="glass p-3 mb-2" style="border-radius:0.75rem;">
                            <small class="text-muted-custom d-block">Monthly EMI</small>
                            <span class="text-white fw-bold fs-5" id="homeEmiAmount">&mdash;</span>
                        </div>
                        <div class="glass p-3 mb-2" style="border-radius:0.75rem;">
                            <small class="text-muted-custom d-block">Interest Payable</small>
                            <span class="text-white fw-bold fs-5" id="homeInterestPayable">&mdash;</span>
                        </div>
                        <div class="glass p-3" style="border-radius:0.75rem;">
                            <small class="text-muted-custom d-block">Total Payment</small>
                            <span class="text-white fw-bold fs-5" id="homeTotalPayment">&mdash;</span>
                        </div>
                    </div>
                    <a href="{{ route('contact') }}" class="btn-outline-glass w-100 text-center d-block small py-2">
                        Apply for Loan <i class="fas fa-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>

            <!-- EMI Chart -->
            <div class="col-lg-4">
                <div class="glass-card p-4 h-100 position-relative overflow-hidden">
                    <div class="accent-bar accent-bar-cyan"></div>
                    <h5 class="text-white fw-bold mb-4 mt-2">Payment Breakup</h5>
                    <div class="d-flex justify-content-center align-items-center" style="min-height:220px;">
                        <canvas id="homeEmiChart" width="220" height="220"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ====== CTA SECTION ====== -->
<section class="section-padding position-relative overflow-hidden">
    <div class="position-absolute top-0 start-0 w-100 h-100 gradient-hero"></div>
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background:rgba(0,0,0,0.3);"></div>
    <div class="orb" style="width:400px;height:400px;background:#6366f1;top:50%;left:50%;transform:translate(-50%,-50%);"></div>

    <div class="container position-relative text-center" style="z-index:5;">
        <h2 class="display-6 fw-bold text-white mb-3">Ready to Get Started?</h2>
        <p class="lead text-muted-custom mb-4 mx-auto" style="max-width:600px;">Apply for a loan today and get instant approval. Our team is ready to help you achieve your financial goals.</p>
        <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
            <a href="{{ route('contact') }}" class="btn-gradient fs-6 px-4 py-3">
                Apply Now <i class="fas fa-arrow-right ms-2"></i>
            </a>
            <a href="{{ route('calculator') }}" class="btn-outline-glass fs-6 px-4 py-3">
                <i class="fas fa-calculator me-2"></i> Calculate EMI
            </a>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
<script>
let homeChart;
document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('homeEmiChart').getContext('2d');
    homeChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Principal', 'Interest'],
            datasets: [{
                data: [50, 50],
                backgroundColor: ['#6366f1', '#06b6d4'],
                borderWidth: 0
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: true,
            cutout: '65%',
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: { color: '#94a3b8', padding: 15, font: { size: 12 } }
                }
            }
        }
    });
});

function calculateHomeEMI() {
    const principal = parseFloat(document.getElementById('homeLoanAmount').value);
    const rate = parseFloat(document.getElementById('homeInterestRate').value);
    const tenure = parseFloat(document.getElementById('homeLoanTenure').value);
    const tenureOpt = document.getElementById('homeTenureOption').value;

    if (isNaN(principal) || isNaN(rate) || isNaN(tenure) || principal <= 0 || rate <= 0 || tenure <= 0) {
        alert('Please enter valid values.');
        return;
    }

    const monthlyRate = rate / 100 / 12;
    const months = tenureOpt === 'months' ? tenure : tenure * 12;
    const emi = principal * monthlyRate * Math.pow(1 + monthlyRate, months) / (Math.pow(1 + monthlyRate, months) - 1);
    const totalPayment = emi * months;
    const interestPayable = totalPayment - principal;

    document.getElementById('homeEmiAmount').innerHTML = '&#8377;' + Math.round(emi).toLocaleString('en-IN');
    document.getElementById('homeInterestPayable').innerHTML = '&#8377;' + Math.round(interestPayable).toLocaleString('en-IN');
    document.getElementById('homeTotalPayment').innerHTML = '&#8377;' + Math.round(totalPayment).toLocaleString('en-IN');

    homeChart.data.datasets[0].data = [
        ((principal / totalPayment) * 100).toFixed(1),
        ((interestPayable / totalPayment) * 100).toFixed(1)
    ];
    homeChart.update();
}
</script>
@endpush

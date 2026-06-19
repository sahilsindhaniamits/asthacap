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
                    Get instant loan approvals with competitive interest rates. From personal needs to business growth, we've got the right financial solution for you.
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

            <!-- Right Content - Hero Visual Card -->
            <div class="col-lg-6 d-none d-lg-block animate-fade-in">
                <div class="glass-card p-4 p-md-5 mx-auto" style="max-width:400px;">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="icon-box gradient-card-2" style="width:48px;height:48px;">
                            <i class="fas fa-wallet text-white fs-5"></i>
                        </div>
                        <span class="text-success small fw-semibold"><i class="fas fa-check-circle me-1"></i>Approved</span>
                    </div>
                    <p class="text-muted-custom small mb-1">Loan Amount</p>
                    <p class="text-white fw-bold display-6 mb-3">&#8377;5,00,000</p>
                    <div class="row g-3 mb-4">
                        <div class="col-6">
                            <p class="text-muted-custom small mb-0">Interest Rate</p>
                            <p class="text-white fw-semibold mb-0">10.5% p.a.</p>
                        </div>
                        <div class="col-6">
                            <p class="text-muted-custom small mb-0">Tenure</p>
                            <p class="text-white fw-semibold mb-0">36 Months</p>
                        </div>
                    </div>
                    <div class="progress-gradient">
                        <div class="progress-bar" style="width:75%;"></div>
                    </div>
                    <p class="text-muted-custom small mt-2 mb-0">75% disbursed</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ====== LOAN TYPES SECTION ====== -->
<section class="section-padding section-dark">
    <div class="orb" style="width:350px;height:350px;background:#6366f1;top:10%;right:0;"></div>
    <div class="container position-relative" style="z-index:2;">
        <div class="text-center mb-5">
            <span class="badge-glass text-info mb-3">Our Services</span>
            <h2 class="display-6 fw-bold text-white mb-3">Loan Solutions for <span class="gradient-text">Every Need</span></h2>
            <p class="text-muted-custom mx-auto" style="max-width:600px;">Choose from our wide range of loan products designed to meet your specific financial requirements.</p>
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
                            <li class="text-muted-custom mb-1"><i class="fas fa-check text-primary me-2 small"></i>Interest from 10.5% p.a.</li>
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
                            <li class="text-muted-custom mb-1"><i class="fas fa-check text-info me-2 small"></i>Interest from 12% p.a.</li>
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
                            <li class="text-muted-custom mb-1"><i class="fas fa-check text-warning me-2 small"></i>Interest from 8.5% p.a.</li>
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
                            <li class="text-muted-custom mb-1"><i class="fas fa-check text-success me-2 small"></i>Interest from 9% p.a.</li>
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
                        <div class="icon-box gradient-card-5 mb-3">
                            <i class="fas fa-shield-alt text-white fs-5"></i>
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
                        <div class="icon-box gradient-card-6 mb-3">
                            <i class="fas fa-home text-white fs-5"></i>
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
                        <i class="fas fa-percentage text-white"></i>
                    </div>
                    <h6 class="text-white fw-bold mb-2">Best Rates</h6>
                    <p class="text-muted-custom small mb-0">Competitive interest rates starting from just 8.5% per annum.</p>
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

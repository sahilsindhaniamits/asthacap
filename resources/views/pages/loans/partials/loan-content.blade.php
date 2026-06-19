{{-- Reusable Loan Detail Content Partial (Bootstrap 5) --}}

<!-- Page Header -->
<section class="position-relative overflow-hidden page-header">
    <div class="position-absolute top-0 start-0 w-100 h-100 gradient-hero"></div>
    <div class="orb" style="width:250px;height:250px;background:{{ $gradientClass == 'bg-indigo-600' ? '#6366f1' : ($gradientClass == 'bg-cyan-600' ? '#06b6d4' : '#8b5cf6') }};top:20%;right:10%;"></div>
    <div class="container position-relative" style="z-index:2;">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <span class="badge-glass {{ $accentTextClass == 'text-indigo-300' ? 'text-info' : 'text-info' }} mb-3">{{ $loanCategory }}</span>
                <h1 class="display-5 fw-bold text-white mb-3">{{ $loanTitle }}</h1>
                <p class="text-muted-custom mb-4">{{ $loanDescription }}</p>
                <div class="d-flex flex-column flex-sm-row gap-3">
                    <a href="{{ route('contact') }}" class="btn-gradient text-center">Apply Now <i class="fas fa-arrow-right ms-2"></i></a>
                    <a href="{{ route('calculator') }}" class="btn-outline-glass text-center"><i class="fas fa-calculator me-2"></i> Calculate EMI</a>
                </div>
            </div>
            <!-- Quick Info Card -->
            <div class="col-lg-6">
                <!-- Loan Image -->
                @php
                    $imageMap = [
                        'fas fa-user' => 'personal-loan.svg',
                        'fas fa-briefcase' => 'business-loan.svg',
                        'fas fa-car' => 'car-loan.svg',
                        'fas fa-graduation-cap' => 'education-loan.svg',
                        'fas fa-shield-alt' => 'unsecured-loan.svg',
                        'fas fa-home' => 'home-loan.svg',
                    ];
                    $img = $imageMap[$iconClass] ?? 'hero-finance.svg';
                @endphp
                <div class="text-center mb-4">
                    <img src="{{ asset('images/' . $img) }}" alt="{{ $loanTitle }}" class="img-fluid" style="max-height:180px;opacity:0.9;">
                </div>
                <div class="glass-card p-4 position-relative overflow-hidden">
                    <div class="accent-bar accent-bar-indigo"></div>
                    <div class="d-flex align-items-center gap-3 mb-4 mt-2">
                        <div class="icon-box {{ $gradientCardClass }}" style="width:48px;height:48px;">
                            <i class="{{ $iconClass }} text-white fs-5"></i>
                        </div>
                        <div>
                            <h5 class="text-white fw-bold mb-0">{{ $loanTitle }}</h5>
                            <small class="text-muted-custom">Quick Overview</small>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-6"><div class="glass p-3"><small class="text-muted-custom d-block">Loan Amount</small><span class="text-white fw-bold">{{ $loanAmount }}</span></div></div>
                        <div class="col-6"><div class="glass p-3"><small class="text-muted-custom d-block">Highlight</small><span class="text-white fw-bold">{{ $interestRate }}</span></div></div>
                        <div class="col-6"><div class="glass p-3"><small class="text-muted-custom d-block">Tenure</small><span class="text-white fw-bold">{{ $tenure }}</span></div></div>
                        <div class="col-6"><div class="glass p-3"><small class="text-muted-custom d-block">Processing</small><span class="text-white fw-bold">{{ $processing }}</span></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Features Section -->
<section class="section-padding section-dark">
    <div class="container position-relative" style="z-index:2;">
        <div class="text-center mb-4">
            <h2 class="display-6 fw-bold text-white mb-3">Key <span class="gradient-text">Features</span></h2>
            <p class="text-muted-custom mx-auto" style="max-width:600px;">What makes our {{ $loanTitle }} stand out from the rest.</p>
        </div>
        <div class="row g-4">
            @foreach($features as $feature)
            <div class="col-md-6 col-lg-4">
                <div class="glass-card p-4 h-100">
                    <div class="icon-box {{ $gradientCardClass }} mb-3">
                        <i class="{{ $feature['icon'] }} text-white"></i>
                    </div>
                    <h6 class="text-white fw-bold mb-2">{{ $feature['title'] }}</h6>
                    <p class="text-muted-custom small mb-0">{{ $feature['description'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Eligibility & Documents -->
<section class="section-padding section-gradient">
    <div class="container position-relative" style="z-index:2;">
        <div class="row g-4">
            <!-- Eligibility -->
            <div class="col-md-6">
                <div class="glass-card p-4 p-md-5 h-100 position-relative overflow-hidden">
                    <div class="accent-bar accent-bar-emerald"></div>
                    <div class="d-flex align-items-center gap-3 mb-4 mt-2">
                        <div class="icon-box" style="width:40px;height:40px;background:rgba(16,185,129,0.2);border-radius:0.75rem;">
                            <i class="fas fa-user-check" style="color:#34d399;"></i>
                        </div>
                        <h5 class="text-white fw-bold mb-0">Eligibility Criteria</h5>
                    </div>
                    <ul class="list-unstyled">
                        @foreach($eligibility as $item)
                        <li class="d-flex align-items-start gap-2 mb-2">
                            <i class="fas fa-check-circle mt-1 small" style="color:#34d399;"></i>
                            <span class="text-muted-custom small">{{ $item }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- Documents -->
            <div class="col-md-6">
                <div class="glass-card p-4 p-md-5 h-100 position-relative overflow-hidden">
                    <div class="accent-bar accent-bar-indigo"></div>
                    <div class="d-flex align-items-center gap-3 mb-4 mt-2">
                        <div class="icon-box" style="width:40px;height:40px;background:rgba(99,102,241,0.2);border-radius:0.75rem;">
                            <i class="fas fa-folder-open" style="color:#818cf8;"></i>
                        </div>
                        <h5 class="text-white fw-bold mb-0">Documents Required</h5>
                    </div>
                    <ul class="list-unstyled">
                        @foreach($documents as $item)
                        <li class="d-flex align-items-start gap-2 mb-2">
                            <i class="fas fa-file-alt mt-1 small" style="color:#818cf8;"></i>
                            <span class="text-muted-custom small">{{ $item }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- FAQ Section -->
<section class="section-padding section-dark">
    <div class="container position-relative" style="z-index:2;">
        <div class="text-center mb-4">
            <h2 class="display-6 fw-bold text-white mb-3">Frequently Asked <span class="gradient-text">Questions</span></h2>
        </div>
        <div class="mx-auto" style="max-width:800px;">
            <div class="accordion" id="faqAccordion">
                @foreach($faqs as $index => $faq)
                <div class="glass-card mb-3 overflow-hidden">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed bg-transparent text-white fw-medium border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#faq{{ $index }}">
                            {{ $faq['question'] }}
                        </button>
                    </h2>
                    <div id="faq{{ $index }}" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="px-4 pb-4 text-muted-custom small" style="border-top:1px solid rgba(255,255,255,0.05);padding-top:1rem;">
                            {{ $faq['answer'] }}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section-padding position-relative overflow-hidden">
    <div class="position-absolute top-0 start-0 w-100 h-100 gradient-hero"></div>
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background:rgba(0,0,0,0.3);"></div>
    <div class="container position-relative text-center" style="z-index:5;">
        <h2 class="display-6 fw-bold text-white mb-3">Ready to Apply for {{ $loanTitle }}?</h2>
        <p class="lead text-muted-custom mb-4 mx-auto" style="max-width:600px;">Get started today with a simple application. Our team will guide you through every step.</p>
        <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
            <a href="{{ route('contact') }}" class="btn-gradient fs-6 px-4 py-3">Apply Now <i class="fas fa-arrow-right ms-2"></i></a>
            <a href="tel:+919999999999" class="btn-outline-glass fs-6 px-4 py-3"><i class="fas fa-phone me-2"></i> Call Us</a>
        </div>
    </div>
</section>

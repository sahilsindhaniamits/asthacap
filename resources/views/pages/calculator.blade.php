@extends('layouts.app')

@section('title', 'Loan EMI Calculator - Aastha Capital Finance')
@section('meta_description', 'Calculate your monthly EMI for Personal Loan, Business Loan, Home Loan, Car Loan and more. Free online EMI calculator by Aastha Capital Finance.')

@section('content')

<!-- Page Header -->
<section class="position-relative overflow-hidden" style="padding-top:8rem;padding-bottom:5rem;">
    <div class="position-absolute top-0 start-0 w-100 h-100 gradient-hero"></div>
    <div class="orb" style="width:250px;height:250px;background:#f59e0b;top:20%;left:5%;opacity:0.1;"></div>
    <div class="container position-relative text-center" style="z-index:2;">
        <span class="badge-glass text-warning mb-3">Financial Tool</span>
        <h1 class="display-5 fw-bold text-white mb-3">Loan EMI <span class="gradient-text">Calculator</span></h1>
        <p class="text-muted-custom mx-auto" style="max-width:600px;">Plan your finances better. Calculate your monthly EMI, total interest, and total payment amount instantly.</p>
    </div>
</section>


<!-- Calculator Section -->
<section class="section-padding section-dark">
    <div class="orb" style="width:300px;height:300px;background:#6366f1;top:20%;left:0;"></div>
    <div class="orb" style="width:300px;height:300px;background:#06b6d4;bottom:20%;right:0;"></div>
    <div class="container position-relative" style="z-index:2;">
        <div class="row g-4">
            <!-- Calculator Input -->
            <div class="col-lg-6">
                <div class="glass-card p-4 p-md-5 position-relative overflow-hidden">
                    <div class="accent-bar accent-bar-indigo"></div>
                    <h4 class="text-white fw-bold mb-4 mt-2">Calculate Your EMI</h4>

                    <!-- Loan Type -->
                    <div class="mb-4">
                        <label class="form-label-glass">Loan Type</label>
                        <div class="row g-2">
                            <div class="col-4"><button class="btn btn-sm w-100 loan-type-btn active" data-type="personal" onclick="setLoanType('personal')">Personal</button></div>
                            <div class="col-4"><button class="btn btn-sm w-100 loan-type-btn" data-type="business" onclick="setLoanType('business')">Business</button></div>
                            <div class="col-4"><button class="btn btn-sm w-100 loan-type-btn" data-type="car" onclick="setLoanType('car')">Car</button></div>
                            <div class="col-4"><button class="btn btn-sm w-100 loan-type-btn" data-type="education" onclick="setLoanType('education')">Education</button></div>
                            <div class="col-4"><button class="btn btn-sm w-100 loan-type-btn" data-type="home" onclick="setLoanType('home')">Home</button></div>
                            <div class="col-4"><button class="btn btn-sm w-100 loan-type-btn" data-type="unsecured" onclick="setLoanType('unsecured')">Unsecured</button></div>
                        </div>
                    </div>

                    <!-- Loan Amount -->
                    <div class="mb-4">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <label class="form-label-glass mb-0">Loan Amount</label>
                            <span class="glass px-3 py-1 text-white fw-bold small" style="border-radius:0.5rem;" id="amountDisplay">&#8377;5,00,000</span>
                        </div>
                        <input type="range" class="range-slider w-100" id="amountSlider" min="50000" max="2500000" step="10000" value="500000" oninput="calculate()">
                        <div class="d-flex justify-content-between small text-muted-custom mt-1">
                            <span id="minAmountLabel">&#8377;50,000</span>
                            <span id="maxAmountLabel">&#8377;25,00,000</span>
                        </div>
                    </div>

                    <!-- Interest Rate -->
                    <div class="mb-4">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <label class="form-label-glass mb-0">Interest Rate (% p.a.)</label>
                            <span class="glass px-3 py-1 text-white fw-bold small" style="border-radius:0.5rem;" id="rateDisplay">10.5%</span>
                        </div>
                        <input type="range" class="range-slider w-100" id="rateSlider" min="5" max="30" step="0.5" value="10.5" oninput="calculate()">
                        <div class="d-flex justify-content-between small text-muted-custom mt-1">
                            <span>5%</span><span>30%</span>
                        </div>
                    </div>

                    <!-- Tenure -->
                    <div class="mb-4">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <label class="form-label-glass mb-0">Loan Tenure</label>
                            <span class="glass px-3 py-1 text-white fw-bold small" style="border-radius:0.5rem;" id="tenureDisplay">3 Years (36 months)</span>
                        </div>
                        <input type="range" class="range-slider w-100" id="tenureSlider" min="1" max="5" step="1" value="3" oninput="calculate()">
                        <div class="d-flex justify-content-between small text-muted-custom mt-1">
                            <span id="minTenureLabel">1 Year</span>
                            <span id="maxTenureLabel">5 Years</span>
                        </div>
                    </div>

                    <a href="{{ route('contact') }}" class="btn-gradient w-100 text-center d-block">
                        Apply for This Loan <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>


            <!-- Results Panel -->
            <div class="col-lg-6">
                <!-- EMI Result -->
                <div class="glass-card p-4 p-md-5 position-relative overflow-hidden mb-4">
                    <div class="accent-bar accent-bar-emerald"></div>
                    <h5 class="text-muted-custom fw-semibold mb-4 mt-2">Your EMI Breakdown</h5>
                    <div class="text-center mb-4">
                        <p class="text-muted-custom small mb-1">Monthly EMI</p>
                        <p class="display-5 fw-bold gradient-text mb-0" id="emiResult">&#8377;16,253</p>
                    </div>
                    <div class="mb-3">
                        <div class="glass p-3 d-flex justify-content-between align-items-center mb-2" style="border-radius:0.75rem;">
                            <span class="text-muted-custom small"><span class="d-inline-block rounded-circle bg-primary me-2" style="width:10px;height:10px;"></span>Principal Amount</span>
                            <span class="text-white fw-bold" id="principalDisplay">&#8377;5,00,000</span>
                        </div>
                        <div class="glass p-3 d-flex justify-content-between align-items-center mb-2" style="border-radius:0.75rem;">
                            <span class="text-muted-custom small"><span class="d-inline-block rounded-circle bg-info me-2" style="width:10px;height:10px;"></span>Total Interest</span>
                            <span class="text-white fw-bold" id="interestDisplay">&#8377;85,096</span>
                        </div>
                        <div class="glass p-3 d-flex justify-content-between align-items-center border-glass" style="border-radius:0.75rem;">
                            <span class="text-white small fw-medium"><span class="d-inline-block rounded-circle me-2" style="width:10px;height:10px;background:#8b5cf6;"></span>Total Payment</span>
                            <span class="text-white fw-bold fs-5" id="totalDisplay">&#8377;5,85,096</span>
                        </div>
                    </div>
                    <!-- Progress Bar -->
                    <div class="d-flex overflow-hidden rounded-pill" style="height:12px;background:rgba(255,255,255,0.05);">
                        <div class="h-100" id="principalBar" style="width:85%;background:linear-gradient(90deg,#6366f1,#818cf8);"></div>
                        <div class="h-100" id="interestBar" style="width:15%;background:linear-gradient(90deg,#06b6d4,#22d3ee);"></div>
                    </div>
                    <div class="d-flex justify-content-between small text-muted-custom mt-2">
                        <span>Principal (<span id="principalPct">85</span>%)</span>
                        <span>Interest (<span id="interestPct">15</span>%)</span>
                    </div>
                </div>

                <!-- Tips -->
                <div class="glass-card p-4">
                    <h6 class="text-white fw-semibold mb-3"><i class="fas fa-lightbulb text-warning me-2"></i>Quick Tips</h6>
                    <ul class="list-unstyled mb-0 small">
                        <li class="d-flex align-items-start gap-2 mb-2 text-muted-custom"><i class="fas fa-check text-success mt-1 small"></i>Higher down payment = Lower EMI and less interest paid</li>
                        <li class="d-flex align-items-start gap-2 mb-2 text-muted-custom"><i class="fas fa-check text-success mt-1 small"></i>Shorter tenure = Higher EMI but significantly less total interest</li>
                        <li class="d-flex align-items-start gap-2 mb-2 text-muted-custom"><i class="fas fa-check text-success mt-1 small"></i>Good credit score (750+) helps you get lower interest rates</li>
                        <li class="d-flex align-items-start gap-2 text-muted-custom"><i class="fas fa-check text-success mt-1 small"></i>Prepayment can save significant interest — ask about our terms</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- How EMI is Calculated -->
<section class="section-padding section-gradient">
    <div class="container position-relative" style="z-index:2;">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold text-white mb-3">How EMI is <span class="gradient-text">Calculated</span></h2>
            <p class="text-muted-custom">Understanding the math behind your monthly payments.</p>
        </div>
        <div class="glass-card p-4 p-md-5 mx-auto" style="max-width:800px;">
            <div class="text-center mb-4">
                <p class="text-muted-custom small mb-3">EMI Formula:</p>
                <div class="glass d-inline-block px-4 py-3">
                    <p class="text-white fw-bold fs-5 font-monospace mb-0">EMI = P &times; R &times; (1+R)<sup>N</sup> / [(1+R)<sup>N</sup> - 1]</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4 text-center">
                    <div class="icon-box gradient-card-1 mx-auto mb-3" style="width:48px;height:48px;border-radius:50%;">
                        <span class="text-white fw-bold">P</span>
                    </div>
                    <h6 class="text-white fw-semibold mb-1">Principal</h6>
                    <p class="text-muted-custom small mb-0">The loan amount you borrow from us.</p>
                </div>
                <div class="col-md-4 text-center">
                    <div class="icon-box gradient-card-2 mx-auto mb-3" style="width:48px;height:48px;border-radius:50%;">
                        <span class="text-white fw-bold">R</span>
                    </div>
                    <h6 class="text-white fw-semibold mb-1">Rate of Interest</h6>
                    <p class="text-muted-custom small mb-0">Monthly interest rate (annual rate / 12 / 100).</p>
                </div>
                <div class="col-md-4 text-center">
                    <div class="icon-box gradient-card-5 mx-auto mb-3" style="width:48px;height:48px;border-radius:50%;">
                        <span class="text-white fw-bold">N</span>
                    </div>
                    <h6 class="text-white fw-semibold mb-1">Number of EMIs</h6>
                    <p class="text-muted-custom small mb-0">Total number of monthly installments.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section-padding position-relative overflow-hidden">
    <div class="position-absolute top-0 start-0 w-100 h-100 gradient-hero"></div>
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background:rgba(0,0,0,0.3);"></div>
    <div class="container position-relative text-center" style="z-index:5;">
        <h2 class="display-6 fw-bold text-white mb-3">Like What You See? <span class="gradient-text">Apply Now!</span></h2>
        <p class="lead text-muted-custom mb-4 mx-auto" style="max-width:600px;">Our team is ready to help you get the best loan offer. Contact us today for personalized assistance.</p>
        <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
            <a href="{{ route('contact') }}" class="btn-gradient fs-6 px-4 py-3">Apply Now <i class="fas fa-arrow-right ms-2"></i></a>
            <a href="{{ route('loans') }}" class="btn-outline-glass fs-6 px-4 py-3"><i class="fas fa-list me-2"></i> View All Loans</a>
        </div>
    </div>
</section>

@endsection

@push('styles')
<style>
.loan-type-btn {
    background: rgba(255,255,255,0.05);
    border: 1px solid rgba(255,255,255,0.1);
    color: #94a3b8;
    border-radius: 0.75rem;
    font-size: 0.8rem;
    font-weight: 500;
    transition: all 0.3s ease;
}
.loan-type-btn:hover, .loan-type-btn.active {
    background: rgba(99,102,241,0.3);
    border-color: #6366f1;
    color: #fff;
}
</style>
@endpush

@push('scripts')
<script>
const loanPresets = {
    personal: { min: 50000, max: 2500000, step: 10000, rate: 10.5, minT: 1, maxT: 5, tenure: 3, amount: 500000 },
    business: { min: 100000, max: 5000000, step: 50000, rate: 12, minT: 1, maxT: 7, tenure: 4, amount: 1000000 },
    car: { min: 100000, max: 3000000, step: 25000, rate: 8.5, minT: 1, maxT: 7, tenure: 5, amount: 800000 },
    education: { min: 100000, max: 7500000, step: 50000, rate: 9, minT: 1, maxT: 15, tenure: 7, amount: 1500000 },
    home: { min: 500000, max: 50000000, step: 100000, rate: 8.5, minT: 5, maxT: 30, tenure: 20, amount: 5000000 },
    unsecured: { min: 50000, max: 2000000, step: 10000, rate: 11, minT: 1, maxT: 5, tenure: 3, amount: 500000 }
};

function formatINR(num) {
    return parseInt(num).toLocaleString('en-IN');
}

function setLoanType(type) {
    const p = loanPresets[type];
    const s = document.getElementById('amountSlider');
    s.min = p.min; s.max = p.max; s.step = p.step; s.value = p.amount;
    document.getElementById('rateSlider').value = p.rate;
    const t = document.getElementById('tenureSlider');
    t.min = p.minT; t.max = p.maxT; t.value = p.tenure;
    document.getElementById('minAmountLabel').textContent = '\u20B9' + formatINR(p.min);
    document.getElementById('maxAmountLabel').textContent = '\u20B9' + formatINR(p.max);
    document.getElementById('minTenureLabel').textContent = p.minT + ' Year';
    document.getElementById('maxTenureLabel').textContent = p.maxT + ' Years';
    document.querySelectorAll('.loan-type-btn').forEach(b => b.classList.remove('active'));
    document.querySelector('[data-type="'+type+'"]').classList.add('active');
    calculate();
}

function calculate() {
    const P = parseFloat(document.getElementById('amountSlider').value);
    const annualRate = parseFloat(document.getElementById('rateSlider').value);
    const years = parseInt(document.getElementById('tenureSlider').value);
    const R = annualRate / 12 / 100;
    const N = years * 12;
    let emi = R === 0 ? P / N : P * R * Math.pow(1+R, N) / (Math.pow(1+R, N) - 1);
    const totalPayment = emi * N;
    const totalInterest = totalPayment - P;
    const principalPct = Math.round((P / totalPayment) * 100);
    const interestPctVal = 100 - principalPct;

    document.getElementById('amountDisplay').innerHTML = '\u20B9' + formatINR(P);
    document.getElementById('rateDisplay').textContent = annualRate + '%';
    document.getElementById('tenureDisplay').textContent = years + ' Years (' + N + ' months)';
    document.getElementById('emiResult').innerHTML = '\u20B9' + formatINR(Math.round(emi));
    document.getElementById('principalDisplay').innerHTML = '\u20B9' + formatINR(P);
    document.getElementById('interestDisplay').innerHTML = '\u20B9' + formatINR(Math.round(totalInterest));
    document.getElementById('totalDisplay').innerHTML = '\u20B9' + formatINR(Math.round(totalPayment));
    document.getElementById('principalBar').style.width = principalPct + '%';
    document.getElementById('interestBar').style.width = interestPctVal + '%';
    document.getElementById('principalPct').textContent = principalPct;
    document.getElementById('interestPct').textContent = interestPctVal;
}

document.addEventListener('DOMContentLoaded', function() { calculate(); });
</script>
@endpush

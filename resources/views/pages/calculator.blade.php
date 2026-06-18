@extends('layouts.app')

@section('title', 'Loan EMI Calculator - Aastha Capital Finance')
@section('meta_description', 'Calculate your monthly EMI for Personal Loan, Business Loan, Home Loan, Car Loan and more. Free online EMI calculator by Aastha Capital Finance.')

@section('content')

<!-- Page Header -->
<section class="relative pt-32 pb-20 overflow-hidden">
    <div class="absolute inset-0 gradient-hero"></div>
    <div class="absolute top-20 left-10 w-72 h-72 bg-indigo-600/20 rounded-full blur-3xl animate-float"></div>
    <div class="absolute bottom-10 right-10 w-64 h-64 bg-cyan-600/15 rounded-full blur-3xl animate-float" style="animation-delay: 2s;"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="inline-block px-4 py-1.5 rounded-full glass text-xs font-semibold text-amber-300 uppercase tracking-wider mb-4">Financial Tool</span>
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">Loan EMI <span class="gradient-text">Calculator</span></h1>
        <p class="text-lg text-gray-400 max-w-2xl mx-auto">Plan your finances better. Calculate your monthly EMI, total interest, and total payment amount instantly.</p>
    </div>
</section>

<!-- Calculator Section -->
<section class="relative section-padding overflow-hidden">
    <div class="absolute inset-0 bg-slate-900"></div>
    <div class="absolute top-1/4 left-0 w-96 h-96 bg-indigo-600/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-1/4 right-0 w-96 h-96 bg-cyan-600/5 rounded-full blur-3xl"></div>

    <div class="relative z-10 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div x-data="emiCalculator()" class="grid lg:grid-cols-2 gap-10">

            <!-- Calculator Input -->
            <div class="glass-card p-8 relative overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-indigo-500 to-cyan-500"></div>

                <h2 class="text-2xl font-bold text-white mb-8">Calculate Your EMI</h2>

                <!-- Loan Type Selector -->
                <div class="mb-8">
                    <label class="block text-sm font-medium text-gray-400 mb-3">Loan Type</label>
                    <div class="grid grid-cols-3 gap-2">
                        <button @click="setLoanType('personal')" :class="loanType === 'personal' ? 'bg-indigo-600 text-white border-indigo-500' : 'glass text-gray-400 border-white/10'" class="px-3 py-2 rounded-xl text-xs font-medium border transition-all cursor-pointer hover:text-white">Personal</button>
                        <button @click="setLoanType('business')" :class="loanType === 'business' ? 'bg-cyan-600 text-white border-cyan-500' : 'glass text-gray-400 border-white/10'" class="px-3 py-2 rounded-xl text-xs font-medium border transition-all cursor-pointer hover:text-white">Business</button>
                        <button @click="setLoanType('car')" :class="loanType === 'car' ? 'bg-amber-600 text-white border-amber-500' : 'glass text-gray-400 border-white/10'" class="px-3 py-2 rounded-xl text-xs font-medium border transition-all cursor-pointer hover:text-white">Car</button>
                        <button @click="setLoanType('education')" :class="loanType === 'education' ? 'bg-emerald-600 text-white border-emerald-500' : 'glass text-gray-400 border-white/10'" class="px-3 py-2 rounded-xl text-xs font-medium border transition-all cursor-pointer hover:text-white">Education</button>
                        <button @click="setLoanType('home')" :class="loanType === 'home' ? 'bg-orange-600 text-white border-orange-500' : 'glass text-gray-400 border-white/10'" class="px-3 py-2 rounded-xl text-xs font-medium border transition-all cursor-pointer hover:text-white">Home</button>
                        <button @click="setLoanType('unsecured')" :class="loanType === 'unsecured' ? 'bg-pink-600 text-white border-pink-500' : 'glass text-gray-400 border-white/10'" class="px-3 py-2 rounded-xl text-xs font-medium border transition-all cursor-pointer hover:text-white">Unsecured</button>
                    </div>
                </div>

                <!-- Loan Amount -->
                <div class="mb-8">
                    <div class="flex items-center justify-between mb-3">
                        <label class="text-sm font-medium text-gray-400">Loan Amount</label>
                        <div class="glass px-3 py-1 rounded-lg">
                            <span class="text-white font-bold text-sm" x-text="'₹' + formatNumber(amount)"></span>
                        </div>
                    </div>
                    <input type="range" x-model="amount" :min="minAmount" :max="maxAmount" :step="stepAmount"
                        class="w-full h-2 bg-white/10 rounded-full appearance-none cursor-pointer accent-indigo-500">
                    <div class="flex justify-between mt-2">
                        <span class="text-xs text-gray-500" x-text="'₹' + formatNumber(minAmount)"></span>
                        <span class="text-xs text-gray-500" x-text="'₹' + formatNumber(maxAmount)"></span>
                    </div>
                </div>

                <!-- Interest Rate -->
                <div class="mb-8">
                    <div class="flex items-center justify-between mb-3">
                        <label class="text-sm font-medium text-gray-400">Interest Rate (% p.a.)</label>
                        <div class="glass px-3 py-1 rounded-lg">
                            <span class="text-white font-bold text-sm" x-text="rate + '%'"></span>
                        </div>
                    </div>
                    <input type="range" x-model="rate" min="5" max="30" step="0.5"
                        class="w-full h-2 bg-white/10 rounded-full appearance-none cursor-pointer accent-cyan-500">
                    <div class="flex justify-between mt-2">
                        <span class="text-xs text-gray-500">5%</span>
                        <span class="text-xs text-gray-500">30%</span>
                    </div>
                </div>

                <!-- Loan Tenure -->
                <div class="mb-8">
                    <div class="flex items-center justify-between mb-3">
                        <label class="text-sm font-medium text-gray-400">Loan Tenure</label>
                        <div class="glass px-3 py-1 rounded-lg">
                            <span class="text-white font-bold text-sm" x-text="tenureYears + ' Years (' + (tenureYears * 12) + ' months)'"></span>
                        </div>
                    </div>
                    <input type="range" x-model="tenureYears" :min="minTenure" :max="maxTenure" step="1"
                        class="w-full h-2 bg-white/10 rounded-full appearance-none cursor-pointer accent-purple-500">
                    <div class="flex justify-between mt-2">
                        <span class="text-xs text-gray-500" x-text="minTenure + ' Year'"></span>
                        <span class="text-xs text-gray-500" x-text="maxTenure + ' Years'"></span>
                    </div>
                </div>

                <!-- Calculate Button (visual only, calculation is reactive) -->
                <a href="{{ route('contact') }}" class="btn-primary w-full text-center block">
                    Apply for This Loan <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>


            <!-- Results Panel -->
            <div class="space-y-6">
                <!-- EMI Result Card -->
                <div class="glass-card p-8 relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-emerald-500 to-cyan-500"></div>
                    <h3 class="text-lg font-semibold text-gray-400 mb-6">Your EMI Breakdown</h3>

                    <!-- Monthly EMI -->
                    <div class="text-center mb-8">
                        <p class="text-gray-400 text-sm mb-2">Monthly EMI</p>
                        <p class="text-4xl md:text-5xl font-bold gradient-text" x-text="'₹' + formatNumber(Math.round(emi))"></p>
                    </div>

                    <!-- Breakdown Cards -->
                    <div class="grid grid-cols-1 gap-4 mb-6">
                        <div class="glass p-4 rounded-xl flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="w-3 h-3 rounded-full bg-indigo-500"></div>
                                <span class="text-gray-400 text-sm">Principal Amount</span>
                            </div>
                            <span class="text-white font-bold" x-text="'₹' + formatNumber(amount)"></span>
                        </div>
                        <div class="glass p-4 rounded-xl flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="w-3 h-3 rounded-full bg-cyan-500"></div>
                                <span class="text-gray-400 text-sm">Total Interest</span>
                            </div>
                            <span class="text-white font-bold" x-text="'₹' + formatNumber(Math.round(totalInterest))"></span>
                        </div>
                        <div class="glass p-4 rounded-xl flex items-center justify-between border border-indigo-500/30">
                            <div class="flex items-center gap-3">
                                <div class="w-3 h-3 rounded-full bg-purple-500"></div>
                                <span class="text-white text-sm font-medium">Total Payment</span>
                            </div>
                            <span class="text-white font-bold text-lg" x-text="'₹' + formatNumber(Math.round(totalPayment))"></span>
                        </div>
                    </div>

                    <!-- Visual Bar -->
                    <div class="mb-2">
                        <div class="w-full h-4 rounded-full bg-white/5 overflow-hidden flex">
                            <div class="h-full bg-gradient-to-r from-indigo-500 to-indigo-600 transition-all duration-500" :style="'width: ' + principalPercentage + '%'"></div>
                            <div class="h-full bg-gradient-to-r from-cyan-500 to-cyan-600 transition-all duration-500" :style="'width: ' + interestPercentage + '%'"></div>
                        </div>
                    </div>
                    <div class="flex justify-between text-xs text-gray-500">
                        <span>Principal (<span x-text="principalPercentage"></span>%)</span>
                        <span>Interest (<span x-text="interestPercentage"></span>%)</span>
                    </div>
                </div>

                <!-- Quick Tips Card -->
                <div class="glass-card p-6">
                    <h4 class="text-white font-semibold mb-4"><i class="fas fa-lightbulb text-amber-400 mr-2"></i>Quick Tips</h4>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-2 text-sm text-gray-400">
                            <i class="fas fa-check text-emerald-400 mt-1 text-xs"></i>
                            Higher down payment = Lower EMI and less interest paid
                        </li>
                        <li class="flex items-start gap-2 text-sm text-gray-400">
                            <i class="fas fa-check text-emerald-400 mt-1 text-xs"></i>
                            Shorter tenure = Higher EMI but significantly less total interest
                        </li>
                        <li class="flex items-start gap-2 text-sm text-gray-400">
                            <i class="fas fa-check text-emerald-400 mt-1 text-xs"></i>
                            Good credit score (750+) helps you get lower interest rates
                        </li>
                        <li class="flex items-start gap-2 text-sm text-gray-400">
                            <i class="fas fa-check text-emerald-400 mt-1 text-xs"></i>
                            Prepayment can save significant interest — ask about our prepayment terms
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- How EMI is Calculated -->
<section class="relative section-padding overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-slate-900 via-slate-800 to-slate-900"></div>

    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-white mb-4">How EMI is <span class="gradient-text">Calculated</span></h2>
            <p class="text-gray-400">Understanding the math behind your monthly payments.</p>
        </div>

        <div class="glass-card p-8">
            <div class="text-center mb-8">
                <p class="text-gray-400 text-sm mb-4">EMI Formula:</p>
                <div class="glass inline-block px-8 py-4 rounded-2xl">
                    <p class="text-white font-mono text-lg">EMI = P x R x (1+R)<sup>N</sup> / [(1+R)<sup>N</sup> - 1]</p>
                </div>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                <div class="text-center">
                    <div class="w-12 h-12 rounded-full gradient-card-1 flex items-center justify-center mx-auto mb-3">
                        <span class="text-white font-bold">P</span>
                    </div>
                    <h4 class="text-white font-semibold mb-1">Principal</h4>
                    <p class="text-gray-400 text-sm">The loan amount you borrow from us.</p>
                </div>
                <div class="text-center">
                    <div class="w-12 h-12 rounded-full gradient-card-2 flex items-center justify-center mx-auto mb-3">
                        <span class="text-white font-bold">R</span>
                    </div>
                    <h4 class="text-white font-semibold mb-1">Rate of Interest</h4>
                    <p class="text-gray-400 text-sm">Monthly interest rate (annual rate / 12 / 100).</p>
                </div>
                <div class="text-center">
                    <div class="w-12 h-12 rounded-full gradient-card-5 flex items-center justify-center mx-auto mb-3">
                        <span class="text-white font-bold">N</span>
                    </div>
                    <h4 class="text-white font-semibold mb-1">Number of EMIs</h4>
                    <p class="text-gray-400 text-sm">Total number of monthly installments.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="relative section-padding overflow-hidden">
    <div class="absolute inset-0 gradient-hero"></div>
    <div class="absolute inset-0 bg-black/30"></div>

    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Like What You See? <span class="gradient-text">Apply Now!</span></h2>
        <p class="text-lg text-gray-400 mb-10 max-w-2xl mx-auto">Our team is ready to help you get the best loan offer. Contact us today for personalized assistance.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}" class="btn-primary text-lg px-8 py-4">
                Apply Now <i class="fas fa-arrow-right ml-2"></i>
            </a>
            <a href="{{ route('loans') }}" class="btn-secondary text-lg px-8 py-4">
                <i class="fas fa-list mr-2"></i> View All Loans
            </a>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
function emiCalculator() {
    return {
        loanType: 'personal',
        amount: 500000,
        rate: 10.5,
        tenureYears: 3,
        minAmount: 50000,
        maxAmount: 2500000,
        stepAmount: 10000,
        minTenure: 1,
        maxTenure: 5,

        setLoanType(type) {
            this.loanType = type;
            switch(type) {
                case 'personal':
                    this.minAmount = 50000; this.maxAmount = 2500000; this.stepAmount = 10000;
                    this.rate = 10.5; this.minTenure = 1; this.maxTenure = 5; this.tenureYears = 3;
                    this.amount = 500000;
                    break;
                case 'business':
                    this.minAmount = 100000; this.maxAmount = 5000000; this.stepAmount = 50000;
                    this.rate = 12; this.minTenure = 1; this.maxTenure = 7; this.tenureYears = 4;
                    this.amount = 1000000;
                    break;
                case 'car':
                    this.minAmount = 100000; this.maxAmount = 3000000; this.stepAmount = 25000;
                    this.rate = 8.5; this.minTenure = 1; this.maxTenure = 7; this.tenureYears = 5;
                    this.amount = 800000;
                    break;
                case 'education':
                    this.minAmount = 100000; this.maxAmount = 7500000; this.stepAmount = 50000;
                    this.rate = 9; this.minTenure = 1; this.maxTenure = 15; this.tenureYears = 7;
                    this.amount = 1500000;
                    break;
                case 'home':
                    this.minAmount = 500000; this.maxAmount = 50000000; this.stepAmount = 100000;
                    this.rate = 8.5; this.minTenure = 5; this.maxTenure = 30; this.tenureYears = 20;
                    this.amount = 5000000;
                    break;
                case 'unsecured':
                    this.minAmount = 50000; this.maxAmount = 2000000; this.stepAmount = 10000;
                    this.rate = 11; this.minTenure = 1; this.maxTenure = 5; this.tenureYears = 3;
                    this.amount = 500000;
                    break;
            }
        },

        get emi() {
            let p = parseFloat(this.amount);
            let r = parseFloat(this.rate) / 12 / 100;
            let n = parseInt(this.tenureYears) * 12;
            if (r === 0) return p / n;
            let emi = p * r * Math.pow(1 + r, n) / (Math.pow(1 + r, n) - 1);
            return emi;
        },

        get totalPayment() {
            return this.emi * parseInt(this.tenureYears) * 12;
        },

        get totalInterest() {
            return this.totalPayment - parseFloat(this.amount);
        },

        get principalPercentage() {
            if (this.totalPayment === 0) return 0;
            return Math.round((parseFloat(this.amount) / this.totalPayment) * 100);
        },

        get interestPercentage() {
            return 100 - this.principalPercentage;
        },

        formatNumber(num) {
            return parseInt(num).toLocaleString('en-IN');
        }
    }
}
</script>
@endpush

@extends('layouts.app')

@section('title', 'Our Loan Services - Aastha Capital Finance')
@section('meta_description', 'Explore all loan types offered by Aastha Capital Finance - Personal Loan, Business Loan, Car Loan, Education Loan, Unsecured Loan, and Home Loan.')

@section('content')

<!-- Page Header -->
<section class="relative pt-32 pb-20 overflow-hidden">
    <div class="absolute inset-0 gradient-hero"></div>
    <div class="absolute top-20 left-10 w-72 h-72 bg-indigo-600/20 rounded-full blur-3xl animate-float"></div>
    <div class="absolute bottom-10 right-10 w-64 h-64 bg-cyan-600/15 rounded-full blur-3xl animate-float" style="animation-delay: 2s;"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="inline-block px-4 py-1.5 rounded-full glass text-xs font-semibold text-cyan-300 uppercase tracking-wider mb-4">Our Services</span>
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">Loan Solutions for <span class="gradient-text">Every Need</span></h1>
        <p class="text-lg text-gray-400 max-w-2xl mx-auto">From personal aspirations to business growth, we offer a wide range of loan products with competitive rates and flexible terms.</p>
    </div>
</section>

<!-- Loan Types Grid -->
<section class="relative section-padding overflow-hidden">
    <div class="absolute inset-0 bg-slate-900"></div>
    <div class="absolute top-1/4 left-0 w-96 h-96 bg-indigo-600/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-1/4 right-0 w-96 h-96 bg-cyan-600/5 rounded-full blur-3xl"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">


            <!-- Personal Loan Card -->
            <a href="{{ route('loans.personal') }}" class="glass-card p-8 group cursor-pointer relative overflow-hidden">
                <div class="absolute top-0 right-0 w-40 h-40 gradient-card-1 opacity-10 rounded-full blur-2xl group-hover:opacity-25 transition-opacity"></div>
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-indigo-500 to-purple-500 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                <div class="relative">
                    <div class="w-16 h-16 rounded-2xl gradient-card-1 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform shadow-lg">
                        <i class="fas fa-user text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Personal Loan</h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-4">Fulfill your personal dreams — wedding, travel, medical expenses, or home renovation with quick disbursement.</p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center gap-2 text-sm text-gray-400">
                            <i class="fas fa-check text-indigo-400 text-xs"></i> Up to ₹25 Lakhs
                        </li>
                        <li class="flex items-center gap-2 text-sm text-gray-400">
                        </li>
                        <li class="flex items-center gap-2 text-sm text-gray-400">
                            <i class="fas fa-check text-indigo-400 text-xs"></i> Tenure up to 5 years
                        </li>
                    </ul>
                    <div class="flex items-center text-indigo-400 text-sm font-semibold group-hover:gap-3 transition-all gap-2">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </a>

            <!-- Business Loan Card -->
            <a href="{{ route('loans.business') }}" class="glass-card p-8 group cursor-pointer relative overflow-hidden">
                <div class="absolute top-0 right-0 w-40 h-40 gradient-card-2 opacity-10 rounded-full blur-2xl group-hover:opacity-25 transition-opacity"></div>
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-cyan-500 to-blue-500 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                <div class="relative">
                    <div class="w-16 h-16 rounded-2xl gradient-card-2 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform shadow-lg">
                        <i class="fas fa-briefcase text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Business Loan</h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-4">Grow your business with working capital, equipment purchase, or expansion funding with flexible repayment.</p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center gap-2 text-sm text-gray-400">
                            <i class="fas fa-check text-cyan-400 text-xs"></i> Up to ₹50 Lakhs
                        </li>
                        <li class="flex items-center gap-2 text-sm text-gray-400">
                        </li>
                        <li class="flex items-center gap-2 text-sm text-gray-400">
                            <i class="fas fa-check text-cyan-400 text-xs"></i> Tenure up to 7 years
                        </li>
                    </ul>
                    <div class="flex items-center text-cyan-400 text-sm font-semibold group-hover:gap-3 transition-all gap-2">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </a>

            <!-- Car Loan Card -->
            <a href="{{ route('loans.car') }}" class="glass-card p-8 group cursor-pointer relative overflow-hidden">
                <div class="absolute top-0 right-0 w-40 h-40 gradient-card-3 opacity-10 rounded-full blur-2xl group-hover:opacity-25 transition-opacity"></div>
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-amber-500 to-red-500 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                <div class="relative">
                    <div class="w-16 h-16 rounded-2xl gradient-card-3 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform shadow-lg">
                        <i class="fas fa-car text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Car Loan</h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-4">Drive your dream car home today with up to 100% on-road financing and affordable monthly payments.</p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center gap-2 text-sm text-gray-400">
                            <i class="fas fa-check text-amber-400 text-xs"></i> Up to 100% financing
                        </li>
                        <li class="flex items-center gap-2 text-sm text-gray-400">
                        </li>
                        <li class="flex items-center gap-2 text-sm text-gray-400">
                            <i class="fas fa-check text-amber-400 text-xs"></i> Tenure up to 7 years
                        </li>
                    </ul>
                    <div class="flex items-center text-amber-400 text-sm font-semibold group-hover:gap-3 transition-all gap-2">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </a>


            <!-- Education Loan Card -->
            <a href="{{ route('loans.education') }}" class="glass-card p-8 group cursor-pointer relative overflow-hidden">
                <div class="absolute top-0 right-0 w-40 h-40 gradient-card-4 opacity-10 rounded-full blur-2xl group-hover:opacity-25 transition-opacity"></div>
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-emerald-500 to-cyan-500 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                <div class="relative">
                    <div class="w-16 h-16 rounded-2xl gradient-card-4 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform shadow-lg">
                        <i class="fas fa-graduation-cap text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Education Loan</h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-4">Invest in your future with loans covering tuition fees, hostel, books, and living expenses.</p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center gap-2 text-sm text-gray-400">
                            <i class="fas fa-check text-emerald-400 text-xs"></i> Up to ₹75 Lakhs
                        </li>
                        <li class="flex items-center gap-2 text-sm text-gray-400">
                        </li>
                        <li class="flex items-center gap-2 text-sm text-gray-400">
                            <i class="fas fa-check text-emerald-400 text-xs"></i> Moratorium period available
                        </li>
                    </ul>
                    <div class="flex items-center text-emerald-400 text-sm font-semibold group-hover:gap-3 transition-all gap-2">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </a>

            <!-- Unsecured Loan Card -->
            <a href="{{ route('loans.unsecured') }}" class="glass-card p-8 group cursor-pointer relative overflow-hidden">
                <div class="absolute top-0 right-0 w-40 h-40 gradient-card-5 opacity-10 rounded-full blur-2xl group-hover:opacity-25 transition-opacity"></div>
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-pink-500 to-purple-500 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                <div class="relative">
                    <div class="w-16 h-16 rounded-2xl gradient-card-5 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform shadow-lg">
                        <i class="fas fa-shield-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Unsecured Loan</h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-4">No collateral required. Get funds purely based on your credit score and income with quick processing.</p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center gap-2 text-sm text-gray-400">
                            <i class="fas fa-check text-pink-400 text-xs"></i> No collateral needed
                        </li>
                        <li class="flex items-center gap-2 text-sm text-gray-400">
                        </li>
                        <li class="flex items-center gap-2 text-sm text-gray-400">
                            <i class="fas fa-check text-pink-400 text-xs"></i> Quick disbursal
                        </li>
                    </ul>
                    <div class="flex items-center text-pink-400 text-sm font-semibold group-hover:gap-3 transition-all gap-2">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </a>

            <!-- Home Loan Card -->
            <a href="{{ route('loans.home') }}" class="glass-card p-8 group cursor-pointer relative overflow-hidden">
                <div class="absolute top-0 right-0 w-40 h-40 gradient-card-6 opacity-10 rounded-full blur-2xl group-hover:opacity-25 transition-opacity"></div>
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-orange-500 to-amber-500 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                <div class="relative">
                    <div class="w-16 h-16 rounded-2xl gradient-card-6 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform shadow-lg">
                        <i class="fas fa-home text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Home Loan</h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-4">Make your dream home a reality with attractive rates, long tenure, and hassle-free processing.</p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center gap-2 text-sm text-gray-400">
                            <i class="fas fa-check text-orange-400 text-xs"></i> Up to ₹5 Crore
                        </li>
                        <li class="flex items-center gap-2 text-sm text-gray-400">
                        </li>
                        <li class="flex items-center gap-2 text-sm text-gray-400">
                            <i class="fas fa-check text-orange-400 text-xs"></i> Tenure up to 30 years
                        </li>
                    </ul>
                    <div class="flex items-center text-orange-400 text-sm font-semibold group-hover:gap-3 transition-all gap-2">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>


<!-- Comparison Table -->
<section class="relative section-padding overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-slate-900 via-slate-800 to-slate-900"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <span class="inline-block px-4 py-1.5 rounded-full glass text-xs font-semibold text-amber-300 uppercase tracking-wider mb-4">Compare</span>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Quick <span class="gradient-text">Comparison</span></h2>
        </div>

        <div class="glass-card overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="border-b border-white/10">
                            <th class="px-6 py-4 text-left text-gray-400 font-semibold">Loan Type</th>
                            <th class="px-6 py-4 text-left text-gray-400 font-semibold">Amount</th>
                            <th class="px-6 py-4 text-left text-gray-400 font-semibold">Max Tenure</th>
                            <th class="px-6 py-4 text-left text-gray-400 font-semibold">Processing</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-white/5 hover:bg-white/5 transition-colors">
                            <td class="px-6 py-4 text-white font-medium"><i class="fas fa-user text-indigo-400 mr-2"></i>Personal Loan</td>
                            <td class="px-6 py-4 text-gray-300">Up to ₹25L</td>
                            <td class="px-6 py-4 text-gray-300">5 Years</td>
                            <td class="px-6 py-4"><span class="px-2 py-1 rounded-full bg-green-500/10 text-green-400 text-xs">24 Hours</span></td>
                        </tr>
                        <tr class="border-b border-white/5 hover:bg-white/5 transition-colors">
                            <td class="px-6 py-4 text-white font-medium"><i class="fas fa-briefcase text-cyan-400 mr-2"></i>Business Loan</td>
                            <td class="px-6 py-4 text-gray-300">Up to ₹50L</td>
                            <td class="px-6 py-4 text-gray-300">7 Years</td>
                            <td class="px-6 py-4"><span class="px-2 py-1 rounded-full bg-amber-500/10 text-amber-400 text-xs">48 Hours</span></td>
                        </tr>
                        <tr class="border-b border-white/5 hover:bg-white/5 transition-colors">
                            <td class="px-6 py-4 text-white font-medium"><i class="fas fa-car text-amber-400 mr-2"></i>Car Loan</td>
                            <td class="px-6 py-4 text-gray-300">100% On-road</td>
                            <td class="px-6 py-4 text-gray-300">7 Years</td>
                            <td class="px-6 py-4"><span class="px-2 py-1 rounded-full bg-green-500/10 text-green-400 text-xs">24 Hours</span></td>
                        </tr>
                        <tr class="border-b border-white/5 hover:bg-white/5 transition-colors">
                            <td class="px-6 py-4 text-white font-medium"><i class="fas fa-graduation-cap text-emerald-400 mr-2"></i>Education Loan</td>
                            <td class="px-6 py-4 text-gray-300">Up to ₹75L</td>
                            <td class="px-6 py-4 text-gray-300">15 Years</td>
                            <td class="px-6 py-4"><span class="px-2 py-1 rounded-full bg-amber-500/10 text-amber-400 text-xs">3-5 Days</span></td>
                        </tr>
                        <tr class="border-b border-white/5 hover:bg-white/5 transition-colors">
                            <td class="px-6 py-4 text-white font-medium"><i class="fas fa-shield-alt text-pink-400 mr-2"></i>Unsecured Loan</td>
                            <td class="px-6 py-4 text-gray-300">Up to ₹20L</td>
                            <td class="px-6 py-4 text-gray-300">5 Years</td>
                            <td class="px-6 py-4"><span class="px-2 py-1 rounded-full bg-green-500/10 text-green-400 text-xs">24 Hours</span></td>
                        </tr>
                        <tr class="hover:bg-white/5 transition-colors">
                            <td class="px-6 py-4 text-white font-medium"><i class="fas fa-home text-orange-400 mr-2"></i>Home Loan</td>
                            <td class="px-6 py-4 text-gray-300">Up to ₹5Cr</td>
                            <td class="px-6 py-4 text-gray-300">30 Years</td>
                            <td class="px-6 py-4"><span class="px-2 py-1 rounded-full bg-amber-500/10 text-amber-400 text-xs">5-7 Days</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="relative section-padding overflow-hidden">
    <div class="absolute inset-0 gradient-hero"></div>
    <div class="absolute inset-0 bg-black/30"></div>
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[600px] bg-indigo-600/10 rounded-full blur-3xl"></div>

    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Not Sure Which Loan is Right?</h2>
        <p class="text-lg text-gray-400 mb-10 max-w-2xl mx-auto">Use our EMI calculator to estimate your monthly payments or contact our team for personalized guidance.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('calculator') }}" class="btn-primary text-lg px-8 py-4">
                <i class="fas fa-calculator mr-2"></i> EMI Calculator
            </a>
            <a href="{{ route('contact') }}" class="btn-secondary text-lg px-8 py-4">
                <i class="fas fa-phone mr-2"></i> Talk to Expert
            </a>
        </div>
    </div>
</section>

@endsection

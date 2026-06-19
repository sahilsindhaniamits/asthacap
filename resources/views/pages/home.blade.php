@extends('layouts.app')

@section('title', 'Aastha Capital Finance - Home')
@section('meta_description', 'Aastha Capital Finance offers Personal Loans, Business Loans, Home Loans, Car Loans, Education Loans with fast approval and competitive rates.')

@section('content')

<!-- Hero Section -->
<section class="relative min-h-screen flex items-center overflow-hidden">
    <!-- Background -->
    <div class="absolute inset-0 gradient-hero"></div>

    <!-- Animated Background Orbs -->
    <div class="absolute top-20 left-10 w-72 h-72 bg-indigo-600/20 rounded-full blur-3xl animate-float"></div>
    <div class="absolute bottom-20 right-10 w-96 h-96 bg-cyan-600/20 rounded-full blur-3xl animate-float" style="animation-delay: 2s;"></div>
    <div class="absolute top-1/2 left-1/2 w-64 h-64 bg-purple-600/10 rounded-full blur-3xl animate-float" style="animation-delay: 4s;"></div>

    <!-- Grid Pattern Overlay -->
    <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px); background-size: 40px 40px;"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div class="animate-slide-up">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full glass text-sm text-indigo-300 mb-6">
                    <span class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></span>
                    Trusted by 10,000+ Customers
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                    Your Dreams,<br>
                    <span class="gradient-text">Our Finance.</span>
                </h1>
                <p class="text-lg text-gray-400 leading-relaxed mb-8 max-w-lg">
                    Get instant loan approvals with competitive interest rates. From personal needs to business growth, we've got the right financial solution for you.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('loans') }}" class="btn-primary text-center">
                        Explore Loans <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                    <a href="{{ route('calculator') }}" class="btn-secondary text-center">
                        <i class="fas fa-calculator mr-2"></i> EMI Calculator
                    </a>
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-3 gap-6 mt-12">
                    <div>
                        <div class="text-2xl md:text-3xl font-bold text-white">10K+</div>
                        <div class="text-sm text-gray-500">Happy Customers</div>
                    </div>
                    <div>
                        <div class="text-2xl md:text-3xl font-bold text-white">₹50Cr+</div>
                        <div class="text-sm text-gray-500">Loans Disbursed</div>
                    </div>
                    <div>
                        <div class="text-2xl md:text-3xl font-bold text-white">24hrs</div>
                        <div class="text-sm text-gray-500">Fast Approval</div>
                    </div>
                </div>
            </div>

            <!-- Right Content - Hero Visual -->
            <div class="hidden lg:block animate-fade-in">
                <div class="relative">
                    <!-- Main Card -->
                    <div class="glass-card p-8 max-w-sm mx-auto">
                        <div class="flex items-center justify-between mb-6">
                            <div class="w-12 h-12 rounded-2xl gradient-card-2 flex items-center justify-center">
                                <i class="fas fa-wallet text-white text-xl"></i>
                            </div>
                            <span class="text-green-400 text-sm font-semibold"><i class="fas fa-check-circle mr-1"></i> Approved</span>
                        </div>
                        <div class="mb-4">
                            <p class="text-gray-400 text-sm">Loan Amount</p>
                            <p class="text-3xl font-bold text-white">₹5,00,000</p>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mb-6">
                            <div>
                                <p class="text-gray-400 text-xs">Tenure</p>
                                <p class="text-white font-semibold">36 Months</p>
                            </div>
                            <div>
                                <p class="text-gray-400 text-xs">Status</p>
                                <p class="text-white font-semibold">Disbursed</p>
                            </div>
                        </div>
                        <div class="w-full bg-white/10 rounded-full h-2">
                            <div class="bg-gradient-to-r from-indigo-500 to-cyan-400 h-2 rounded-full" style="width: 75%"></div>
                        </div>
                        <p class="text-gray-500 text-xs mt-2">75% disbursed</p>
                    </div>

                    <!-- Floating mini cards -->
                    <div class="absolute -top-4 -right-4 glass-card p-4 animate-float" style="animation-delay: 1s;">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 rounded-full bg-green-500/20 flex items-center justify-center">
                                <i class="fas fa-arrow-up text-green-400 text-xs"></i>
                            </div>
                            <div>
                                <p class="text-xs text-gray-400">EMI</p>
                                <p class="text-sm font-bold text-white">₹16,253</p>
                            </div>
                        </div>
                    </div>

                    <div class="absolute -bottom-4 -left-4 glass-card p-4 animate-float" style="animation-delay: 3s;">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 rounded-full bg-indigo-500/20 flex items-center justify-center">
                                <i class="fas fa-clock text-indigo-400 text-xs"></i>
                            </div>
                            <div>
                                <p class="text-xs text-gray-400">Approval</p>
                                <p class="text-sm font-bold text-white">24 Hours</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll indicator -->
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce">
        <div class="w-6 h-10 rounded-full border-2 border-white/30 flex items-start justify-center p-2">
            <div class="w-1.5 h-3 bg-white/50 rounded-full"></div>
        </div>
    </div>
</section>


<!-- Why Choose Us Section -->
<section class="relative section-padding overflow-hidden">
    <div class="absolute inset-0 bg-slate-900"></div>
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-indigo-600/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-cyan-600/5 rounded-full blur-3xl"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-1.5 rounded-full glass text-xs font-semibold text-indigo-300 uppercase tracking-wider mb-4">Why Choose Us</span>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Why Thousands Trust <span class="gradient-text">Aastha Capital</span></h2>
            <p class="text-gray-400 max-w-2xl mx-auto">We combine technology with a personal touch to deliver financial solutions that are fast, transparent, and tailored to your needs.</p>
        </div>

        <!-- Features Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="glass-card p-8 group">
                <div class="w-14 h-14 rounded-2xl gradient-card-1 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <i class="fas fa-bolt text-white text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Quick Approval</h3>
                <p class="text-gray-400 text-sm leading-relaxed">Get your loan approved within 24 hours with minimal documentation. Our streamlined process saves you time.</p>
            </div>

            <!-- Feature 2 -->
            <div class="glass-card p-8 group">
                <div class="w-14 h-14 rounded-2xl gradient-card-2 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <i class="fas fa-hand-holding-usd text-white text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Affordable EMIs</h3>
                <p class="text-gray-400 text-sm leading-relaxed">Easy monthly installments with flexible repayment options tailored to your budget and income.</p>
            </div>

            <!-- Feature 3 -->
            <div class="glass-card p-8 group">
                <div class="w-14 h-14 rounded-2xl gradient-card-4 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <i class="fas fa-shield-alt text-white text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">100% Secure</h3>
                <p class="text-gray-400 text-sm leading-relaxed">Your data is fully encrypted and secured. We follow the highest industry standards for data protection.</p>
            </div>

            <!-- Feature 4 -->
            <div class="glass-card p-8 group">
                <div class="w-14 h-14 rounded-2xl gradient-card-3 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <i class="fas fa-file-alt text-white text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Minimal Documents</h3>
                <p class="text-gray-400 text-sm leading-relaxed">Say goodbye to paperwork hassles. Apply with just basic KYC documents and get approved quickly.</p>
            </div>

            <!-- Feature 5 -->
            <div class="glass-card p-8 group">
                <div class="w-14 h-14 rounded-2xl gradient-card-5 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <i class="fas fa-headset text-white text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">24/7 Support</h3>
                <p class="text-gray-400 text-sm leading-relaxed">Our dedicated support team is always available to help you with queries, applications, and post-disbursement needs.</p>
            </div>

            <!-- Feature 6 -->
            <div class="glass-card p-8 group">
                <div class="w-14 h-14 rounded-2xl gradient-card-6 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <i class="fas fa-handshake text-white text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Flexible Terms</h3>
                <p class="text-gray-400 text-sm leading-relaxed">Choose repayment tenure from 12 to 60 months. We adjust terms to match your financial comfort.</p>
            </div>
        </div>
    </div>
</section>


<!-- Loan Types Section -->
<section class="relative section-padding overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-slate-900 via-slate-800 to-slate-900"></div>
    <div class="absolute top-1/2 left-0 w-full h-px bg-gradient-to-r from-transparent via-indigo-500/20 to-transparent"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-1.5 rounded-full glass text-xs font-semibold text-cyan-300 uppercase tracking-wider mb-4">Our Services</span>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Loan Solutions for <span class="gradient-text">Every Need</span></h2>
            <p class="text-gray-400 max-w-2xl mx-auto">Whether you need funds for personal goals, business growth, or asset purchase — we have the perfect loan for you.</p>
        </div>

        <!-- Loan Cards Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Personal Loan -->
            <a href="{{ route('loans.personal') }}" class="glass-card p-8 group cursor-pointer relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 gradient-card-1 opacity-10 rounded-full blur-2xl group-hover:opacity-20 transition-opacity"></div>
                <div class="relative">
                    <div class="w-14 h-14 rounded-2xl gradient-card-1 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-user text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Personal Loan</h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-4">Fulfill your personal aspirations with quick disbursement and flexible EMI options.</p>
                    <div class="flex items-center text-indigo-400 text-sm font-semibold group-hover:gap-3 transition-all gap-2">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </a>

            <!-- Business Loan -->
            <a href="{{ route('loans.business') }}" class="glass-card p-8 group cursor-pointer relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 gradient-card-2 opacity-10 rounded-full blur-2xl group-hover:opacity-20 transition-opacity"></div>
                <div class="relative">
                    <div class="w-14 h-14 rounded-2xl gradient-card-2 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-briefcase text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Business Loan</h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-4">Fuel your business growth with capital for expansion, inventory, or working capital needs.</p>
                    <div class="flex items-center text-cyan-400 text-sm font-semibold group-hover:gap-3 transition-all gap-2">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </a>

            <!-- Car Loan -->
            <a href="{{ route('loans.car') }}" class="glass-card p-8 group cursor-pointer relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 gradient-card-3 opacity-10 rounded-full blur-2xl group-hover:opacity-20 transition-opacity"></div>
                <div class="relative">
                    <div class="w-14 h-14 rounded-2xl gradient-card-3 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-car text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Car Loan</h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-4">Drive your dream car home with affordable EMIs and up to 100% on-road financing.</p>
                    <div class="flex items-center text-amber-400 text-sm font-semibold group-hover:gap-3 transition-all gap-2">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </a>

            <!-- Education Loan -->
            <a href="{{ route('loans.education') }}" class="glass-card p-8 group cursor-pointer relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 gradient-card-4 opacity-10 rounded-full blur-2xl group-hover:opacity-20 transition-opacity"></div>
                <div class="relative">
                    <div class="w-14 h-14 rounded-2xl gradient-card-4 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-graduation-cap text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Education Loan</h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-4">Invest in your future with education loans covering tuition, living expenses, and more.</p>
                    <div class="flex items-center text-emerald-400 text-sm font-semibold group-hover:gap-3 transition-all gap-2">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </a>

            <!-- Unsecured Loan -->
            <a href="{{ route('loans.unsecured') }}" class="glass-card p-8 group cursor-pointer relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 gradient-card-5 opacity-10 rounded-full blur-2xl group-hover:opacity-20 transition-opacity"></div>
                <div class="relative">
                    <div class="w-14 h-14 rounded-2xl gradient-card-5 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-shield-alt text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Unsecured Loan</h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-4">No collateral needed. Get funds based on your creditworthiness with minimal paperwork.</p>
                    <div class="flex items-center text-pink-400 text-sm font-semibold group-hover:gap-3 transition-all gap-2">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </a>

            <!-- Home Loan -->
            <a href="{{ route('loans.home') }}" class="glass-card p-8 group cursor-pointer relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 gradient-card-6 opacity-10 rounded-full blur-2xl group-hover:opacity-20 transition-opacity"></div>
                <div class="relative">
                    <div class="w-14 h-14 rounded-2xl gradient-card-6 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-home text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Home Loan</h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-4">Own your dream home with attractive interest rates and long repayment tenure up to 30 years.</p>
                    <div class="flex items-center text-orange-400 text-sm font-semibold group-hover:gap-3 transition-all gap-2">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </a>
        </div>

        <!-- View All Button -->
        <div class="text-center mt-12">
            <a href="{{ route('loans') }}" class="btn-primary inline-block">View All Loan Types <i class="fas fa-arrow-right ml-2"></i></a>
        </div>
    </div>
</section>


<!-- How It Works Section -->
<section class="relative section-padding overflow-hidden">
    <div class="absolute inset-0 bg-slate-900"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-1.5 rounded-full glass text-xs font-semibold text-amber-300 uppercase tracking-wider mb-4">Simple Process</span>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">How It <span class="gradient-text">Works</span></h2>
            <p class="text-gray-400 max-w-2xl mx-auto">Get your loan in 3 simple steps. Our streamlined process ensures you get funds when you need them.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 relative">
            <!-- Connecting Line -->
            <div class="hidden md:block absolute top-24 left-1/6 right-1/6 h-0.5 bg-gradient-to-r from-indigo-500 via-cyan-500 to-purple-500 opacity-30"></div>

            <!-- Step 1 -->
            <div class="text-center relative">
                <div class="w-16 h-16 rounded-full gradient-card-1 flex items-center justify-center mx-auto mb-6 relative z-10 animate-pulse-glow">
                    <span class="text-2xl font-bold text-white">1</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Apply Online</h3>
                <p class="text-gray-400 text-sm">Fill a simple application form with basic details. Takes less than 5 minutes.</p>
            </div>

            <!-- Step 2 -->
            <div class="text-center relative">
                <div class="w-16 h-16 rounded-full gradient-card-2 flex items-center justify-center mx-auto mb-6 relative z-10 animate-pulse-glow" style="animation-delay: 1s;">
                    <span class="text-2xl font-bold text-white">2</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Get Approved</h3>
                <p class="text-gray-400 text-sm">Our team reviews your application and provides approval within 24 hours.</p>
            </div>

            <!-- Step 3 -->
            <div class="text-center relative">
                <div class="w-16 h-16 rounded-full gradient-card-5 flex items-center justify-center mx-auto mb-6 relative z-10 animate-pulse-glow" style="animation-delay: 2s;">
                    <span class="text-2xl font-bold text-white">3</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Receive Funds</h3>
                <p class="text-gray-400 text-sm">Once approved, funds are transferred directly to your bank account.</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="relative section-padding overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-slate-900 via-indigo-950/30 to-slate-900"></div>
    <div class="absolute top-1/2 right-0 w-96 h-96 bg-purple-600/10 rounded-full blur-3xl"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-1.5 rounded-full glass text-xs font-semibold text-purple-300 uppercase tracking-wider mb-4">Testimonials</span>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">What Our Customers <span class="gradient-text">Say</span></h2>
            <p class="text-gray-400 max-w-2xl mx-auto">Don't just take our word for it. Here's what our satisfied customers have to say about their experience.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="glass-card p-8">
                <div class="flex items-center gap-1 mb-4">
                    <i class="fas fa-star text-amber-400"></i>
                    <i class="fas fa-star text-amber-400"></i>
                    <i class="fas fa-star text-amber-400"></i>
                    <i class="fas fa-star text-amber-400"></i>
                    <i class="fas fa-star text-amber-400"></i>
                </div>
                <p class="text-gray-300 text-sm leading-relaxed mb-6">"Got my personal loan approved in just 12 hours! The process was incredibly smooth and the team was very supportive throughout."</p>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full gradient-card-1 flex items-center justify-center">
                        <span class="text-white font-bold text-sm">RK</span>
                    </div>
                    <div>
                        <p class="text-white font-semibold text-sm">Rajesh Kumar</p>
                        <p class="text-gray-500 text-xs">Personal Loan Customer</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="glass-card p-8">
                <div class="flex items-center gap-1 mb-4">
                    <i class="fas fa-star text-amber-400"></i>
                    <i class="fas fa-star text-amber-400"></i>
                    <i class="fas fa-star text-amber-400"></i>
                    <i class="fas fa-star text-amber-400"></i>
                    <i class="fas fa-star text-amber-400"></i>
                </div>
                <p class="text-gray-300 text-sm leading-relaxed mb-6">"Aastha Capital helped my business grow with their quick business loan. Minimal documentation and excellent interest rates."</p>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full gradient-card-2 flex items-center justify-center">
                        <span class="text-white font-bold text-sm">PS</span>
                    </div>
                    <div>
                        <p class="text-white font-semibold text-sm">Priya Sharma</p>
                        <p class="text-gray-500 text-xs">Business Loan Customer</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="glass-card p-8">
                <div class="flex items-center gap-1 mb-4">
                    <i class="fas fa-star text-amber-400"></i>
                    <i class="fas fa-star text-amber-400"></i>
                    <i class="fas fa-star text-amber-400"></i>
                    <i class="fas fa-star text-amber-400"></i>
                    <i class="fas fa-star text-amber-400"></i>
                </div>
                <p class="text-gray-300 text-sm leading-relaxed mb-6">"Bought my dream home thanks to Aastha Capital's home loan. The EMI is very affordable and the 25-year tenure made it easy."</p>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full gradient-card-4 flex items-center justify-center">
                        <span class="text-white font-bold text-sm">AM</span>
                    </div>
                    <div>
                        <p class="text-white font-semibold text-sm">Amit Mehta</p>
                        <p class="text-gray-500 text-xs">Home Loan Customer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="relative section-padding overflow-hidden">
    <div class="absolute inset-0 gradient-hero"></div>
    <div class="absolute inset-0 bg-black/30"></div>
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[800px] bg-indigo-600/10 rounded-full blur-3xl"></div>

    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-5xl font-bold text-white mb-6">Ready to Get Your Loan <span class="gradient-text">Today?</span></h2>
        <p class="text-lg text-gray-400 mb-10 max-w-2xl mx-auto">Join thousands of satisfied customers who have achieved their financial goals with Aastha Capital Finance.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <button @click="$dispatch('open-lead-form')" class="btn-primary text-lg px-8 py-4 cursor-pointer">
                Apply Now <i class="fas fa-arrow-right ml-2"></i>
            </button>
            <a href="tel:+919999999999" class="btn-secondary text-lg px-8 py-4">
                <i class="fas fa-phone mr-2"></i> Call Us
            </a>
        </div>
    </div>
</section>

@endsection

@extends('layouts.app')

@section('title', 'About Us - Aastha Capital Finance')
@section('meta_description', 'Learn about Aastha Capital Finance - our mission, values, and commitment to providing accessible financial solutions across India.')

@section('content')

<!-- Page Header -->
<section class="relative pt-32 pb-20 overflow-hidden">
    <div class="absolute inset-0 gradient-hero"></div>
    <div class="absolute top-20 right-10 w-72 h-72 bg-indigo-600/20 rounded-full blur-3xl animate-float"></div>
    <div class="absolute bottom-10 left-10 w-64 h-64 bg-cyan-600/15 rounded-full blur-3xl animate-float" style="animation-delay: 2s;"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="inline-block px-4 py-1.5 rounded-full glass text-xs font-semibold text-indigo-300 uppercase tracking-wider mb-4">About Us</span>
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">Building Trust Through <span class="gradient-text">Financial Excellence</span></h1>
        <p class="text-lg text-gray-400 max-w-2xl mx-auto">We are committed to making financial services accessible, transparent, and hassle-free for every Indian.</p>
    </div>
</section>

<!-- Our Story -->
<section class="relative section-padding overflow-hidden">
    <div class="absolute inset-0 bg-slate-900"></div>
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-indigo-600/5 rounded-full blur-3xl"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Left - Image/Visual -->
            <div class="relative">
                <div class="glass-card p-8 relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-indigo-500 to-cyan-500"></div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="glass p-6 rounded-2xl text-center">
                            <div class="text-3xl font-bold text-white mb-1">5+</div>
                            <div class="text-xs text-gray-400">Years Experience</div>
                        </div>
                        <div class="glass p-6 rounded-2xl text-center">
                            <div class="text-3xl font-bold text-white mb-1">10K+</div>
                            <div class="text-xs text-gray-400">Happy Customers</div>
                        </div>
                        <div class="glass p-6 rounded-2xl text-center">
                            <div class="text-3xl font-bold text-white mb-1">₹50Cr+</div>
                            <div class="text-xs text-gray-400">Loans Disbursed</div>
                        </div>
                        <div class="glass p-6 rounded-2xl text-center">
                            <div class="text-3xl font-bold text-white mb-1">50+</div>
                            <div class="text-xs text-gray-400">Partner Banks</div>
                        </div>
                    </div>
                </div>
                <!-- Floating accent -->
                <div class="absolute -bottom-6 -right-6 w-24 h-24 gradient-card-2 rounded-2xl opacity-20 blur-sm"></div>
            </div>

            <!-- Right - Content -->
            <div>
                <span class="inline-block px-4 py-1.5 rounded-full glass text-xs font-semibold text-cyan-300 uppercase tracking-wider mb-4">Our Story</span>
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Empowering Dreams Since <span class="gradient-text">Day One</span></h2>
                <p class="text-gray-400 leading-relaxed mb-6">
                    Aastha Capital Finance was founded with a simple yet powerful vision — to make financial services accessible to every individual and business in India. We believe that lack of funds should never be a barrier to achieving one's dreams.
                </p>
                <p class="text-gray-400 leading-relaxed mb-6">
                    Over the years, we have grown from a small finance company to a trusted financial partner serving thousands of customers across the country. Our commitment to transparency, speed, and customer satisfaction has been the cornerstone of our growth.
                </p>
                <p class="text-gray-400 leading-relaxed">
                    Today, we offer a comprehensive range of loan products — from personal and business loans to home and education loans — all designed with competitive rates and flexible terms to suit diverse financial needs.
                </p>
            </div>
        </div>
    </div>
</section>


<!-- Mission & Vision -->
<section class="relative section-padding overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-slate-900 via-slate-800 to-slate-900"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Mission -->
            <div class="glass-card p-10 relative overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-indigo-500 to-purple-500"></div>
                <div class="w-14 h-14 rounded-2xl gradient-card-1 flex items-center justify-center mb-6">
                    <i class="fas fa-bullseye text-white text-xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-white mb-4">Our Mission</h3>
                <p class="text-gray-400 leading-relaxed">
                    To provide fast, transparent, and affordable financial solutions that empower individuals and businesses to achieve their goals. We strive to simplify the lending process and make credit accessible to all sections of society.
                </p>
            </div>

            <!-- Vision -->
            <div class="glass-card p-10 relative overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-cyan-500 to-blue-500"></div>
                <div class="w-14 h-14 rounded-2xl gradient-card-2 flex items-center justify-center mb-6">
                    <i class="fas fa-eye text-white text-xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-white mb-4">Our Vision</h3>
                <p class="text-gray-400 leading-relaxed">
                    To become India's most trusted and customer-centric financial services company, known for innovation, integrity, and inclusive growth. We envision a world where financial freedom is within everyone's reach.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Core Values -->
<section class="relative section-padding overflow-hidden">
    <div class="absolute inset-0 bg-slate-900"></div>
    <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-purple-600/5 rounded-full blur-3xl"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-1.5 rounded-full glass text-xs font-semibold text-amber-300 uppercase tracking-wider mb-4">Our Values</span>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Values That <span class="gradient-text">Define Us</span></h2>
            <p class="text-gray-400 max-w-2xl mx-auto">Our core values guide every decision we make and every interaction we have with our customers.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Value 1 -->
            <div class="glass-card p-6 text-center group">
                <div class="w-16 h-16 rounded-full gradient-card-1 flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                    <i class="fas fa-handshake text-white text-2xl"></i>
                </div>
                <h4 class="text-lg font-bold text-white mb-2">Trust</h4>
                <p class="text-gray-400 text-sm">Building lasting relationships through honesty and reliability.</p>
            </div>

            <!-- Value 2 -->
            <div class="glass-card p-6 text-center group">
                <div class="w-16 h-16 rounded-full gradient-card-2 flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                    <i class="fas fa-lightbulb text-white text-2xl"></i>
                </div>
                <h4 class="text-lg font-bold text-white mb-2">Innovation</h4>
                <p class="text-gray-400 text-sm">Leveraging technology to simplify financial processes.</p>
            </div>

            <!-- Value 3 -->
            <div class="glass-card p-6 text-center group">
                <div class="w-16 h-16 rounded-full gradient-card-4 flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                    <i class="fas fa-users text-white text-2xl"></i>
                </div>
                <h4 class="text-lg font-bold text-white mb-2">Customer First</h4>
                <p class="text-gray-400 text-sm">Every decision is made keeping our customers' interests at heart.</p>
            </div>

            <!-- Value 4 -->
            <div class="glass-card p-6 text-center group">
                <div class="w-16 h-16 rounded-full gradient-card-5 flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                    <i class="fas fa-balance-scale text-white text-2xl"></i>
                </div>
                <h4 class="text-lg font-bold text-white mb-2">Integrity</h4>
                <p class="text-gray-400 text-sm">Transparent practices with no hidden charges or surprises.</p>
            </div>
        </div>
    </div>
</section>

<!-- Team / Leadership Section -->
<section class="relative section-padding overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-slate-900 via-indigo-950/20 to-slate-900"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-1.5 rounded-full glass text-xs font-semibold text-emerald-300 uppercase tracking-wider mb-4">Leadership</span>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Meet Our <span class="gradient-text">Team</span></h2>
            <p class="text-gray-400 max-w-2xl mx-auto">Led by experienced professionals with decades of combined experience in banking and finance.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 max-w-4xl mx-auto">
            <!-- Team Member 1 -->
            <div class="glass-card p-8 text-center group">
                <div class="w-20 h-20 rounded-full gradient-card-1 flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                    <i class="fas fa-user-tie text-white text-3xl"></i>
                </div>
                <h4 class="text-lg font-bold text-white mb-1">Director</h4>
                <p class="text-indigo-400 text-sm mb-3">Founder & CEO</p>
                <p class="text-gray-400 text-xs">Visionary leader with 15+ years in financial services industry.</p>
            </div>

            <!-- Team Member 2 -->
            <div class="glass-card p-8 text-center group">
                <div class="w-20 h-20 rounded-full gradient-card-2 flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                    <i class="fas fa-user-tie text-white text-3xl"></i>
                </div>
                <h4 class="text-lg font-bold text-white mb-1">Operations Head</h4>
                <p class="text-cyan-400 text-sm mb-3">COO</p>
                <p class="text-gray-400 text-xs">Expert in streamlining processes and ensuring customer satisfaction.</p>
            </div>

            <!-- Team Member 3 -->
            <div class="glass-card p-8 text-center group">
                <div class="w-20 h-20 rounded-full gradient-card-4 flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                    <i class="fas fa-user-tie text-white text-3xl"></i>
                </div>
                <h4 class="text-lg font-bold text-white mb-1">Finance Head</h4>
                <p class="text-emerald-400 text-sm mb-3">CFO</p>
                <p class="text-gray-400 text-xs">Seasoned financial expert ensuring sustainable growth and compliance.</p>
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
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Want to Partner With Us?</h2>
        <p class="text-lg text-gray-400 mb-10 max-w-2xl mx-auto">Whether you're looking for a loan or want to explore business partnerships, we'd love to hear from you.</p>
        <a href="{{ route('contact') }}" class="btn-primary text-lg px-8 py-4 inline-block">
            Get in Touch <i class="fas fa-arrow-right ml-2"></i>
        </a>
    </div>
</section>

@endsection

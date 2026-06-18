@extends('layouts.app')

@section('title', 'Contact Us - Aastha Capital Finance')
@section('meta_description', 'Get in touch with Aastha Capital Finance. Apply for loans, ask questions, or visit our office. We are here to help you with your financial needs.')

@section('content')

<!-- Page Header -->
<section class="relative pt-32 pb-20 overflow-hidden">
    <div class="absolute inset-0 gradient-hero"></div>
    <div class="absolute top-20 right-10 w-72 h-72 bg-indigo-600/20 rounded-full blur-3xl animate-float"></div>
    <div class="absolute bottom-10 left-10 w-64 h-64 bg-cyan-600/15 rounded-full blur-3xl animate-float" style="animation-delay: 2s;"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="inline-block px-4 py-1.5 rounded-full glass text-xs font-semibold text-emerald-300 uppercase tracking-wider mb-4">Get In Touch</span>
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">We'd Love to <span class="gradient-text">Hear From You</span></h1>
        <p class="text-lg text-gray-400 max-w-2xl mx-auto">Have questions about our loan products? Want to apply? Our team is ready to assist you every step of the way.</p>
    </div>
</section>

<!-- Contact Section -->
<section class="relative section-padding overflow-hidden">
    <div class="absolute inset-0 bg-slate-900"></div>
    <div class="absolute top-1/4 left-0 w-96 h-96 bg-indigo-600/5 rounded-full blur-3xl"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-3 gap-10">

            <!-- Contact Info Cards -->
            <div class="space-y-6">
                <!-- Phone -->
                <div class="glass-card p-6 group">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-xl gradient-card-1 flex items-center justify-center group-hover:scale-110 transition-transform">
                            <i class="fas fa-phone text-white"></i>
                        </div>
                        <div>
                            <h4 class="text-white font-semibold">Call Us</h4>
                            <a href="tel:+919999999999" class="text-gray-400 text-sm hover:text-indigo-400 transition-colors">+91 99999 99999</a>
                        </div>
                    </div>
                </div>

                <!-- Email -->
                <div class="glass-card p-6 group">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-xl gradient-card-2 flex items-center justify-center group-hover:scale-110 transition-transform">
                            <i class="fas fa-envelope text-white"></i>
                        </div>
                        <div>
                            <h4 class="text-white font-semibold">Email Us</h4>
                            <a href="mailto:info@aasthacapital.com" class="text-gray-400 text-sm hover:text-cyan-400 transition-colors">info@aasthacapital.com</a>
                        </div>
                    </div>
                </div>

                <!-- Address -->
                <div class="glass-card p-6 group">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-xl gradient-card-4 flex items-center justify-center group-hover:scale-110 transition-transform">
                            <i class="fas fa-map-marker-alt text-white"></i>
                        </div>
                        <div>
                            <h4 class="text-white font-semibold">Visit Us</h4>
                            <p class="text-gray-400 text-sm">Aastha Capital Finance<br>India</p>
                        </div>
                    </div>
                </div>

                <!-- Working Hours -->
                <div class="glass-card p-6 group">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-xl gradient-card-5 flex items-center justify-center group-hover:scale-110 transition-transform">
                            <i class="fas fa-clock text-white"></i>
                        </div>
                        <div>
                            <h4 class="text-white font-semibold">Working Hours</h4>
                            <p class="text-gray-400 text-sm">Mon - Sat: 9:00 AM - 6:00 PM</p>
                        </div>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="glass-card p-6">
                    <h4 class="text-white font-semibold mb-4">Follow Us</h4>
                    <div class="flex space-x-3">
                        <a href="#" class="w-10 h-10 rounded-full glass flex items-center justify-center text-gray-400 hover:text-white hover:bg-indigo-600/50 transition-all">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full glass flex items-center justify-center text-gray-400 hover:text-white hover:bg-indigo-600/50 transition-all">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full glass flex items-center justify-center text-gray-400 hover:text-white hover:bg-indigo-600/50 transition-all">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full glass flex items-center justify-center text-gray-400 hover:text-white hover:bg-indigo-600/50 transition-all">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full glass flex items-center justify-center text-gray-400 hover:text-white hover:bg-indigo-600/50 transition-all">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>


            <!-- Contact Form -->
            <div class="lg:col-span-2">
                <div class="glass-card p-8 relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-indigo-500 to-cyan-500"></div>

                    <h2 class="text-2xl font-bold text-white mb-2">Send Us a Message</h2>
                    <p class="text-gray-400 text-sm mb-8">Fill out the form below and our team will get back to you within 24 hours.</p>

                    <form action="#" method="POST" x-data="{ submitted: false }" @submit.prevent="submitted = true">
                        @csrf
                        <div class="grid md:grid-cols-2 gap-6 mb-6">
                            <!-- Full Name -->
                            <div>
                                <label class="block text-sm font-medium text-gray-400 mb-2">Full Name *</label>
                                <input type="text" name="name" required
                                    class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white placeholder-gray-500 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 focus:outline-none transition-all"
                                    placeholder="Enter your full name">
                            </div>

                            <!-- Phone -->
                            <div>
                                <label class="block text-sm font-medium text-gray-400 mb-2">Phone Number *</label>
                                <input type="tel" name="phone" required
                                    class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white placeholder-gray-500 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 focus:outline-none transition-all"
                                    placeholder="+91 99999 99999">
                            </div>

                            <!-- Email -->
                            <div>
                                <label class="block text-sm font-medium text-gray-400 mb-2">Email Address *</label>
                                <input type="email" name="email" required
                                    class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white placeholder-gray-500 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 focus:outline-none transition-all"
                                    placeholder="your@email.com">
                            </div>

                            <!-- Loan Type -->
                            <div>
                                <label class="block text-sm font-medium text-gray-400 mb-2">Interested In</label>
                                <select name="loan_type"
                                    class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 focus:outline-none transition-all">
                                    <option value="" class="bg-slate-800">Select Loan Type</option>
                                    <option value="personal" class="bg-slate-800">Personal Loan</option>
                                    <option value="business" class="bg-slate-800">Business Loan</option>
                                    <option value="car" class="bg-slate-800">Car Loan</option>
                                    <option value="education" class="bg-slate-800">Education Loan</option>
                                    <option value="unsecured" class="bg-slate-800">Unsecured Loan</option>
                                    <option value="home" class="bg-slate-800">Home Loan</option>
                                    <option value="other" class="bg-slate-800">Other / General Inquiry</option>
                                </select>
                            </div>
                        </div>

                        <!-- Loan Amount -->
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-400 mb-2">Required Loan Amount (Optional)</label>
                            <input type="text" name="amount"
                                class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white placeholder-gray-500 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 focus:outline-none transition-all"
                                placeholder="e.g., ₹5,00,000">
                        </div>

                        <!-- Message -->
                        <div class="mb-8">
                            <label class="block text-sm font-medium text-gray-400 mb-2">Message *</label>
                            <textarea name="message" rows="4" required
                                class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white placeholder-gray-500 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 focus:outline-none transition-all resize-none"
                                placeholder="Tell us about your requirements..."></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="flex items-center gap-4">
                            <button type="submit" class="btn-primary" x-show="!submitted">
                                Send Message <i class="fas fa-paper-plane ml-2"></i>
                            </button>
                            <div x-show="submitted" x-transition class="flex items-center gap-3 px-6 py-3 rounded-full bg-emerald-500/20 border border-emerald-500/30">
                                <i class="fas fa-check-circle text-emerald-400"></i>
                                <span class="text-emerald-400 font-medium">Message Sent Successfully! We'll contact you soon.</span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section (Placeholder) -->
<section class="relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-slate-900 to-slate-800"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="glass-card p-2 rounded-2xl overflow-hidden">
            <div class="w-full h-64 md:h-96 bg-slate-800 rounded-xl flex items-center justify-center">
                <div class="text-center">
                    <i class="fas fa-map-marked-alt text-4xl text-indigo-400 mb-4"></i>
                    <p class="text-gray-400">Google Maps integration will be added here</p>
                    <p class="text-gray-500 text-sm mt-2">Replace this section with your actual Google Maps embed</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'Aastha Capital Finance - Your trusted partner for Personal Loans, Business Loans, Home Loans, Car Loans, Education Loans and more. Fast approvals, competitive rates.')">
    <meta name="keywords" content="@yield('meta_keywords', 'loans, personal loan, business loan, home loan, car loan, education loan, finance, Aastha Capital')">
    <title>@yield('title', 'Aastha Capital Finance') - Trusted Financial Partner</title>

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>
<body class="bg-slate-900 text-white font-sans antialiased" x-data="{ mobileMenu: false }">

    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 transition-all duration-300" id="navbar"
         x-data="{ scrolled: false }"
         x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 50 })"
         :class="scrolled ? 'glass-dark shadow-2xl' : 'bg-transparent'">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="flex items-center space-x-3 group">
                    <div class="w-10 h-10 rounded-xl gradient-card-1 flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                        <span class="text-white font-bold text-lg">A</span>
                    </div>
                    <div>
                        <span class="text-xl font-bold text-white">Aastha</span>
                        <span class="text-xl font-light text-indigo-300"> Capital</span>
                    </div>
                </a>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center space-x-1">
                    <a href="{{ route('home') }}" class="px-4 py-2 rounded-full text-sm font-medium text-gray-300 hover:text-white hover:bg-white/10 transition-all {{ request()->routeIs('home') ? 'text-white bg-white/10' : '' }}">Home</a>
                    <a href="{{ route('about') }}" class="px-4 py-2 rounded-full text-sm font-medium text-gray-300 hover:text-white hover:bg-white/10 transition-all {{ request()->routeIs('about') ? 'text-white bg-white/10' : '' }}">About Us</a>

                    <!-- Loans Dropdown -->
                    <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                        <a href="{{ route('loans') }}" class="px-4 py-2 rounded-full text-sm font-medium text-gray-300 hover:text-white hover:bg-white/10 transition-all flex items-center gap-1 {{ request()->routeIs('loans*') ? 'text-white bg-white/10' : '' }}">
                            Loans
                            <i class="fas fa-chevron-down text-xs transition-transform" :class="open ? 'rotate-180' : ''"></i>
                        </a>
                        <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-2" class="absolute top-full left-0 mt-2 w-56 glass-dark rounded-2xl shadow-2xl p-3 space-y-1">
                            <a href="{{ route('loans.personal') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm text-gray-300 hover:text-white hover:bg-white/10 transition-all">
                                <i class="fas fa-user text-indigo-400"></i> Personal Loan
                            </a>
                            <a href="{{ route('loans.business') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm text-gray-300 hover:text-white hover:bg-white/10 transition-all">
                                <i class="fas fa-briefcase text-cyan-400"></i> Business Loan
                            </a>
                            <a href="{{ route('loans.car') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm text-gray-300 hover:text-white hover:bg-white/10 transition-all">
                                <i class="fas fa-car text-amber-400"></i> Car Loan
                            </a>
                            <a href="{{ route('loans.education') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm text-gray-300 hover:text-white hover:bg-white/10 transition-all">
                                <i class="fas fa-graduation-cap text-emerald-400"></i> Education Loan
                            </a>
                            <a href="{{ route('loans.unsecured') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm text-gray-300 hover:text-white hover:bg-white/10 transition-all">
                                <i class="fas fa-shield-alt text-pink-400"></i> Unsecured Loan
                            </a>
                            <a href="{{ route('loans.home') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm text-gray-300 hover:text-white hover:bg-white/10 transition-all">
                                <i class="fas fa-home text-orange-400"></i> Home Loan
                            </a>
                        </div>
                    </div>

                    <a href="{{ route('calculator') }}" class="px-4 py-2 rounded-full text-sm font-medium text-gray-300 hover:text-white hover:bg-white/10 transition-all {{ request()->routeIs('calculator') ? 'text-white bg-white/10' : '' }}">Calculator</a>
                    <a href="{{ route('contact') }}" class="px-4 py-2 rounded-full text-sm font-medium text-gray-300 hover:text-white hover:bg-white/10 transition-all {{ request()->routeIs('contact') ? 'text-white bg-white/10' : '' }}">Contact</a>
                </div>

                <div class="hidden lg:flex items-center space-x-4">
                    <button @click="$dispatch('open-lead-form')" class="btn-primary text-sm cursor-pointer">
                        Apply Now <i class="fas fa-arrow-right ml-2"></i>
                    </button>
                </div>

                <!-- Mobile Menu Button -->
                <button @click="mobileMenu = !mobileMenu" class="lg:hidden p-2 rounded-xl text-gray-300 hover:text-white hover:bg-white/10 transition-all">
                    <i class="fas" :class="mobileMenu ? 'fa-times text-xl' : 'fa-bars text-xl'"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-show="mobileMenu" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-4" class="lg:hidden glass-dark border-t border-white/10">
            <div class="max-w-7xl mx-auto px-4 py-6 space-y-2">
                <a href="{{ route('home') }}" class="block px-4 py-3 rounded-xl text-gray-300 hover:text-white hover:bg-white/10 transition-all">Home</a>
                <a href="{{ route('about') }}" class="block px-4 py-3 rounded-xl text-gray-300 hover:text-white hover:bg-white/10 transition-all">About Us</a>
                <a href="{{ route('loans') }}" class="block px-4 py-3 rounded-xl text-gray-300 hover:text-white hover:bg-white/10 transition-all">All Loans</a>
                <div class="pl-4 space-y-1">
                    <a href="{{ route('loans.personal') }}" class="block px-4 py-2 rounded-xl text-sm text-gray-400 hover:text-white hover:bg-white/10 transition-all"><i class="fas fa-user mr-2 text-indigo-400"></i>Personal Loan</a>
                    <a href="{{ route('loans.business') }}" class="block px-4 py-2 rounded-xl text-sm text-gray-400 hover:text-white hover:bg-white/10 transition-all"><i class="fas fa-briefcase mr-2 text-cyan-400"></i>Business Loan</a>
                    <a href="{{ route('loans.car') }}" class="block px-4 py-2 rounded-xl text-sm text-gray-400 hover:text-white hover:bg-white/10 transition-all"><i class="fas fa-car mr-2 text-amber-400"></i>Car Loan</a>
                    <a href="{{ route('loans.education') }}" class="block px-4 py-2 rounded-xl text-sm text-gray-400 hover:text-white hover:bg-white/10 transition-all"><i class="fas fa-graduation-cap mr-2 text-emerald-400"></i>Education Loan</a>
                    <a href="{{ route('loans.unsecured') }}" class="block px-4 py-2 rounded-xl text-sm text-gray-400 hover:text-white hover:bg-white/10 transition-all"><i class="fas fa-shield-alt mr-2 text-pink-400"></i>Unsecured Loan</a>
                    <a href="{{ route('loans.home') }}" class="block px-4 py-2 rounded-xl text-sm text-gray-400 hover:text-white hover:bg-white/10 transition-all"><i class="fas fa-home mr-2 text-orange-400"></i>Home Loan</a>
                </div>
                <a href="{{ route('calculator') }}" class="block px-4 py-3 rounded-xl text-gray-300 hover:text-white hover:bg-white/10 transition-all">Loan Calculator</a>
                <a href="{{ route('contact') }}" class="block px-4 py-3 rounded-xl text-gray-300 hover:text-white hover:bg-white/10 transition-all">Contact Us</a>
                <div class="pt-4">
                    <button @click="$dispatch('open-lead-form'); mobileMenu = false" class="btn-primary block text-center text-sm w-full cursor-pointer">Apply Now <i class="fas fa-arrow-right ml-2"></i></button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="relative overflow-hidden">
        <!-- Background -->
        <div class="absolute inset-0 gradient-hero"></div>
        <div class="absolute inset-0 bg-black/40"></div>

        <!-- Decorative Elements -->
        <div class="absolute top-0 left-0 w-96 h-96 bg-indigo-600/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-cyan-600/10 rounded-full blur-3xl"></div>

        <div class="relative z-10">
            <!-- Main Footer -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                    <!-- Company Info -->
                    <div class="lg:col-span-1">
                        <a href="{{ route('home') }}" class="flex items-center space-x-3 mb-6">
                            <div class="w-10 h-10 rounded-xl gradient-card-1 flex items-center justify-center shadow-lg">
                                <span class="text-white font-bold text-lg">A</span>
                            </div>
                            <div>
                                <span class="text-xl font-bold text-white">Aastha</span>
                                <span class="text-xl font-light text-indigo-300"> Capital</span>
                            </div>
                        </a>
                        <p class="text-gray-400 text-sm leading-relaxed mb-6">
                            Your trusted financial partner providing fast, transparent, and affordable loan solutions to help you achieve your dreams.
                        </p>
                        <div class="flex space-x-4">
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
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div>
                        <h4 class="text-white font-semibold text-lg mb-6">Quick Links</h4>
                        <ul class="space-y-3">
                            <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-indigo-400 transition-colors text-sm">Home</a></li>
                            <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-indigo-400 transition-colors text-sm">About Us</a></li>
                            <li><a href="{{ route('loans') }}" class="text-gray-400 hover:text-indigo-400 transition-colors text-sm">Our Services</a></li>
                            <li><a href="{{ route('calculator') }}" class="text-gray-400 hover:text-indigo-400 transition-colors text-sm">Loan Calculator</a></li>
                            <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-indigo-400 transition-colors text-sm">Contact Us</a></li>
                        </ul>
                    </div>

                    <!-- Loan Types -->
                    <div>
                        <h4 class="text-white font-semibold text-lg mb-6">Our Loans</h4>
                        <ul class="space-y-3">
                            <li><a href="{{ route('loans.personal') }}" class="text-gray-400 hover:text-indigo-400 transition-colors text-sm">Personal Loan</a></li>
                            <li><a href="{{ route('loans.business') }}" class="text-gray-400 hover:text-indigo-400 transition-colors text-sm">Business Loan</a></li>
                            <li><a href="{{ route('loans.car') }}" class="text-gray-400 hover:text-indigo-400 transition-colors text-sm">Car Loan</a></li>
                            <li><a href="{{ route('loans.education') }}" class="text-gray-400 hover:text-indigo-400 transition-colors text-sm">Education Loan</a></li>
                            <li><a href="{{ route('loans.unsecured') }}" class="text-gray-400 hover:text-indigo-400 transition-colors text-sm">Unsecured Loan</a></li>
                            <li><a href="{{ route('loans.home') }}" class="text-gray-400 hover:text-indigo-400 transition-colors text-sm">Home Loan</a></li>
                        </ul>
                    </div>

                    <!-- Contact Info -->
                    <div>
                        <h4 class="text-white font-semibold text-lg mb-6">Contact Us</h4>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <i class="fas fa-map-marker-alt text-indigo-400 mt-1"></i>
                                <span class="text-gray-400 text-sm">Aastha Capital Finance<br>India</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <i class="fas fa-phone text-indigo-400"></i>
                                <a href="tel:+919999999999" class="text-gray-400 hover:text-indigo-400 transition-colors text-sm">+91 99999 99999</a>
                            </li>
                            <li class="flex items-center gap-3">
                                <i class="fas fa-envelope text-indigo-400"></i>
                                <a href="mailto:info@aasthacapital.com" class="text-gray-400 hover:text-indigo-400 transition-colors text-sm">info@aasthacapital.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="border-t border-white/10">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 flex flex-col md:flex-row items-center justify-between gap-4">
                    <p class="text-gray-500 text-sm">&copy; {{ date('Y') }} Aastha Capital Finance. All rights reserved.</p>
                    <div class="flex items-center space-x-6">
                        <a href="{{ route('privacy') }}" class="text-gray-500 hover:text-indigo-400 transition-colors text-sm">Privacy Policy</a>
                        <a href="{{ route('terms') }}" class="text-gray-500 hover:text-indigo-400 transition-colors text-sm">Terms & Conditions</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button x-data="{ show: false }" x-init="window.addEventListener('scroll', () => { show = window.scrollY > 500 })" x-show="show" x-transition @click="window.scrollTo({ top: 0, behavior: 'smooth' })" class="fixed bottom-8 right-8 w-12 h-12 rounded-full gradient-card-1 flex items-center justify-center shadow-lg hover:scale-110 transition-transform z-50 cursor-pointer">
        <i class="fas fa-arrow-up text-white"></i>
    </button>

    <!-- Lead Popup Form -->
    <div x-data="{ showPopup: false }"
         x-init="setTimeout(() => { if(!sessionStorage.getItem('popupShown')) { showPopup = true; sessionStorage.setItem('popupShown', '1'); } }, 3000)"
         @open-lead-form.window="showPopup = true">

        <template x-if="showPopup">
            <div class="popup-overlay" @click.self="showPopup = false">
                <div class="popup-content">
                    <button class="popup-close" @click="showPopup = false"><i class="fas fa-times"></i></button>

                    <h3 class="text-2xl font-bold text-white mb-2">Apply for Loan</h3>
                    <p class="text-gray-400 text-sm mb-6">Fill your details below and our team will contact you within 24 hours.</p>

                    <form action="{{ route('contact') }}" method="GET" x-data="{ submitted: false }" @submit.prevent="submitted = true">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <input type="text" name="name" required placeholder="Full Name"
                                class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white placeholder-gray-500 focus:border-indigo-500 focus:outline-none">
                            <input type="email" name="email" required placeholder="Email Address"
                                class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white placeholder-gray-500 focus:border-indigo-500 focus:outline-none">
                            <input type="tel" name="phone" required placeholder="Phone Number"
                                class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white placeholder-gray-500 focus:border-indigo-500 focus:outline-none">
                            <select name="loan_type" required
                                class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white focus:border-indigo-500 focus:outline-none">
                                <option value="" class="bg-slate-800">Loan Type</option>
                                <option value="personal" class="bg-slate-800">Personal Loan</option>
                                <option value="business" class="bg-slate-800">Business Loan</option>
                                <option value="car" class="bg-slate-800">Car Loan</option>
                                <option value="education" class="bg-slate-800">Education Loan</option>
                                <option value="unsecured" class="bg-slate-800">Unsecured Loan</option>
                                <option value="home" class="bg-slate-800">Home Loan</option>
                            </select>
                            <input type="text" name="amount" placeholder="Loan Amount"
                                class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white placeholder-gray-500 focus:border-indigo-500 focus:outline-none">
                            <input type="text" name="state" placeholder="State"
                                class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white placeholder-gray-500 focus:border-indigo-500 focus:outline-none">
                        </div>
                        <input type="text" name="aadhaar" placeholder="Aadhaar Number"
                            class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white placeholder-gray-500 focus:border-indigo-500 focus:outline-none mb-4">
                        <textarea name="message" rows="3" placeholder="Message"
                            class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white placeholder-gray-500 focus:border-indigo-500 focus:outline-none resize-none mb-4"></textarea>

                        <div class="flex gap-4" x-show="!submitted">
                            <button type="submit" class="btn-primary flex-1 text-center">Send Request</button>
                            <button type="button" @click="showPopup = false" class="flex-1 text-center py-3 rounded-full border-2 border-red-500/50 text-red-400 font-semibold hover:bg-red-500/10 transition-all">Cancel</button>
                        </div>
                        <div x-show="submitted" x-transition class="flex items-center gap-3 px-6 py-3 rounded-full bg-emerald-500/20 border border-emerald-500/30 justify-center">
                            <i class="fas fa-check-circle text-emerald-400"></i>
                            <span class="text-emerald-400 font-medium">Request Sent! We'll contact you soon.</span>
                        </div>
                    </form>
                </div>
            </div>
        </template>
    </div>

    @stack('scripts')
</body>
</html>

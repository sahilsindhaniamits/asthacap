<!-- Header -->
<header class="fixed top-0 right-0 left-0 lg:left-64 h-16 bg-white border-b border-gray-200 z-30 flex items-center justify-between px-4 lg:px-6">
    
    <!-- Left: Mobile menu + Page title -->
    <div class="flex items-center gap-3">
        <button onclick="toggleSidebar()" class="lg:hidden w-9 h-9 rounded-lg bg-gray-100 flex items-center justify-center text-gray-600 hover:bg-gray-200 transition-colors">
            <i class="fas fa-bars"></i>
        </button>
        <div>
            <h2 class="text-base font-semibold text-gray-800">Welcome back!</h2>
            <p class="text-xs text-gray-400 hidden sm:block">Aastha Capital Finance Admin Panel</p>
        </div>
    </div>

    <!-- Right: Actions -->
    <div class="flex items-center gap-2">
        <!-- Visit Site -->
        <a href="/" target="_blank" class="hidden sm:flex items-center gap-2 px-3 py-2 text-xs font-medium text-gray-500 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
            <i class="fas fa-external-link-alt"></i>
            <span>Visit Site</span>
        </a>

        <!-- Profile Dropdown -->
        <div class="relative" x-data="{ open: false }">
            <button onclick="this.nextElementSibling.classList.toggle('hidden')" class="flex items-center gap-2 pl-3 pr-2 py-1.5 rounded-lg hover:bg-gray-50 transition-colors">
                <div class="w-8 h-8 rounded-full bg-gradient-to-br from-primary-400 to-primary-600 flex items-center justify-center text-white text-xs font-bold">
                    A
                </div>
                <i class="fas fa-chevron-down text-[10px] text-gray-400"></i>
            </button>
            <div class="hidden absolute right-0 top-12 w-48 bg-white rounded-xl border border-gray-200 shadow-lg py-2 z-50">
                <a href="{{ route('admin.profile') }}" class="flex items-center gap-2 px-4 py-2 text-sm text-gray-600 hover:bg-gray-50">
                    <i class="fas fa-user w-4 text-gray-400"></i> My Profile
                </a>
                <hr class="my-1 border-gray-100">
                <a href="{{ route('admin.logout') }}" class="flex items-center gap-2 px-4 py-2 text-sm text-red-500 hover:bg-red-50">
                    <i class="fas fa-sign-out-alt w-4"></i> Logout
                </a>
            </div>
        </div>
    </div>
</header>

<!-- Mobile Overlay -->
<div id="sidebarOverlay" class="hidden fixed inset-0 bg-black/40 z-40 lg:hidden" onclick="toggleSidebar()"></div>

<!-- Sidebar -->
<aside id="sidebar" class="sidebar fixed top-0 left-0 h-full w-64 bg-white border-r border-gray-200 z-50 flex flex-col transition-transform duration-300 lg:translate-x-0">
    
    <!-- Logo -->
    <div class="h-16 flex items-center px-5 border-b border-gray-100">
        <div class="flex items-center gap-3">
            <div class="w-9 h-9 rounded-lg bg-gradient-to-br from-primary-500 to-primary-700 flex items-center justify-content-center text-white text-sm font-bold flex items-center justify-center">
                A
            </div>
            <div>
                <h1 class="text-sm font-bold text-gray-800 leading-tight">Aastha Capital</h1>
                <p class="text-[10px] text-gray-400 leading-tight">Finance Admin</p>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="flex-1 py-4 px-3 overflow-y-auto">
        <p class="text-[10px] font-semibold text-gray-400 uppercase tracking-wider px-3 mb-2">Main</p>
        
        <a href="/admin" class="sidebar-link flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium text-gray-600 mb-1 {{ request()->is('admin') ? 'active' : '' }}">
            <i class="fas fa-chart-pie text-base w-5 text-center"></i>
            <span>Dashboard</span>
        </a>

        <p class="text-[10px] font-semibold text-gray-400 uppercase tracking-wider px-3 mb-2 mt-4">Leads Management</p>
        
        <a href="{{ route('admin.loan_request') }}" class="sidebar-link flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium text-gray-600 mb-1 {{ request()->routeIs('admin.loan_request') ? 'active' : '' }}">
            <i class="fas fa-clipboard-list text-base w-5 text-center"></i>
            <span>All Leads</span>
            <span class="ml-auto text-[10px] bg-primary-100 text-primary-600 font-bold px-2 py-0.5 rounded-full">New</span>
        </a>

        <a href="{{ route('admin.loan_request_approved') }}" class="sidebar-link flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium text-gray-600 mb-1 {{ request()->routeIs('admin.loan_request_approved') ? 'active' : '' }}">
            <i class="fas fa-check-circle text-base w-5 text-center"></i>
            <span>Approved Leads</span>
        </a>

        <p class="text-[10px] font-semibold text-gray-400 uppercase tracking-wider px-3 mb-2 mt-4">Communication</p>
        
        <a href="{{ route('admin.message.create') }}" class="sidebar-link flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium text-gray-600 mb-1 {{ request()->routeIs('admin.message.create') ? 'active' : '' }}">
            <i class="fas fa-paper-plane text-base w-5 text-center"></i>
            <span>Send SMS</span>
        </a>

        <p class="text-[10px] font-semibold text-gray-400 uppercase tracking-wider px-3 mb-2 mt-4">Settings</p>
        
        <a href="{{ route('admin.profile') }}" class="sidebar-link flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium text-gray-600 mb-1 {{ request()->routeIs('admin.profile') ? 'active' : '' }}">
            <i class="fas fa-user-cog text-base w-5 text-center"></i>
            <span>Profile</span>
        </a>
    </nav>

    <!-- Bottom -->
    <div class="p-4 border-t border-gray-100">
        <a href="{{ route('admin.logout') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium text-red-500 hover:bg-red-50 transition-colors">
            <i class="fas fa-sign-out-alt text-base w-5 text-center"></i>
            <span>Logout</span>
        </a>
    </div>
</aside>

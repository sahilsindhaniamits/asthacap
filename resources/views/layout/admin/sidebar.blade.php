<aside class="admin-sidebar" id="adminSidebar">
    <div class="brand">
        <img src="{{ asset('images/logo_loan.png') }}" alt="Logo">
        <span>Prime Finance</span>
    </div>

    <nav class="nav flex-column py-2">
        <div class="sidebar-section-title">Main</div>

        <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <i class="bi bi-grid-1x2-fill"></i>
            <span>Dashboard</span>
        </a>

        <div class="sidebar-section-title">Leads</div>

        <a href="{{ route('admin.loan_request') }}" class="nav-link {{ request()->routeIs('admin.loan_request') ? 'active' : '' }}">
            <i class="bi bi-people-fill"></i>
            <span>All Leads</span>
        </a>

        <a href="{{ route('admin.loan_request_approved') }}" class="nav-link {{ request()->routeIs('admin.loan_request_approved') ? 'active' : '' }}">
            <i class="bi bi-check-circle-fill"></i>
            <span>Approved Leads</span>
        </a>

        <div class="sidebar-section-title">Tools</div>

        <a href="{{ route('admin.message.create') }}" class="nav-link {{ request()->routeIs('admin.message.create') ? 'active' : '' }}">
            <i class="bi bi-chat-dots-fill"></i>
            <span>Send SMS</span>
        </a>

        <div class="sidebar-section-title">Account</div>

        <a href="{{ route('admin.profile') }}" class="nav-link {{ request()->routeIs('admin.profile') ? 'active' : '' }}">
            <i class="bi bi-person-circle"></i>
            <span>My Profile</span>
        </a>

        <a href="{{ route('admin.logout') }}" class="nav-link"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="bi bi-box-arrow-left"></i>
            <span>Logout</span>
        </a>
        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">@csrf</form>
    </nav>
</aside>

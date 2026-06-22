<header class="admin-header">
    <button class="btn-toggle-sidebar" id="sidebarToggle">
        <i class="bi bi-list"></i>
    </button>

    <h6 class="mb-0 fw-semibold text-dark">@yield('page-title', 'Dashboard')</h6>

    <div class="ms-auto d-flex align-items-center gap-3">
        <!-- Admin User Dropdown -->
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width:34px;height:34px;font-size:0.85rem;">
                    {{ strtoupper(substr(Auth::user()->name ?? 'A', 0, 1)) }}
                </div>
                <span class="ms-2 d-none d-md-inline text-dark fw-medium" style="font-size:0.9rem;">
                    {{ Auth::user()->name ?? 'Admin' }}
                </span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="userDropdown">
                <li>
                    <a class="dropdown-item" href="{{ route('admin.profile') }}">
                        <i class="bi bi-person me-2"></i>Profile
                    </a>
                </li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    <a class="dropdown-item text-danger" href="{{ route('admin.logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="bi bi-box-arrow-left me-2"></i>Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>

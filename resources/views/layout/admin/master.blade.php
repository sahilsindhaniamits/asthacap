<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aastha Capital Finance - Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="shortcut icon" href="/images/logo_loan.png"/>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: { 50: '#eef2ff', 100: '#e0e7ff', 200: '#c7d2fe', 300: '#a5b4fc', 400: '#818cf8', 500: '#6366f1', 600: '#4f46e5', 700: '#4338ca', 800: '#3730a3', 900: '#312e81' },
                        accent: { 50: '#ecfeff', 100: '#cffafe', 200: '#a5f3fc', 300: '#67e8f9', 400: '#22d3ee', 500: '#06b6d4', 600: '#0891b2', 700: '#0e7490' },
                    }
                }
            }
        }
    </script>
    <style>
        body { font-family: 'Inter', system-ui, -apple-system, sans-serif; }
        .sidebar-link.active { background: linear-gradient(135deg, #6366f1, #8b5cf6); color: #fff; }
        .sidebar-link:hover:not(.active) { background: #f1f5f9; color: #4f46e5; }
        .stat-card { transition: transform 0.2s ease, box-shadow 0.2s ease; }
        .stat-card:hover { transform: translateY(-2px); box-shadow: 0 10px 25px -5px rgba(0,0,0,0.1); }
        @media (max-width: 1024px) { .sidebar { transform: translateX(-100%); } .sidebar.open { transform: translateX(0); } }
    </style>
    @yield('style')
</head>
<body class="bg-gray-50 min-h-screen">

    <div class="flex">
        <!-- Sidebar -->
        @include('layout.admin.sidebar')

        <!-- Main Content -->
        <div class="flex-1 lg:ml-64">
            <!-- Header -->
            @include('layout.admin.header')

            <!-- Page Content -->
            <main class="p-4 lg:p-6 mt-16">
                @yield('content')
            </main>

            <!-- Footer -->
            <footer class="px-6 py-4 text-center text-sm text-gray-400 border-t border-gray-100">
                &copy; {{ date('Y') }} Aastha Capital Finance. All rights reserved.
            </footer>
        </div>
    </div>

    <script>
        const CSRF_TOKEN = "{{ csrf_token() }}";
        
        // Mobile sidebar toggle
        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('open');
            document.getElementById('sidebarOverlay').classList.toggle('hidden');
        }
    </script>
    @yield('script')
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Aastha Capital Finance</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 40%, #312e81 70%, #1e1b4b 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
        }
        .login-card {
            background: rgba(255, 255, 255, 0.06);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 1.5rem;
            padding: 2.5rem;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 25px 80px rgba(0, 0, 0, 0.4);
        }
        .login-card .logo {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
            margin-bottom: 2rem;
        }
        .login-card .logo-icon {
            width: 48px; height: 48px; border-radius: 0.75rem;
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            display: flex; align-items: center; justify-content: center;
        }
        .login-card .logo-icon span { color: #fff; font-weight: 700; font-size: 1.3rem; }
        .login-card .logo-text { color: #fff; font-size: 1.25rem; font-weight: 700; }
        .login-card .logo-text span { color: #a5b4fc; font-weight: 300; }
        .login-card h4 { color: #fff; text-align: center; margin-bottom: 0.5rem; font-weight: 700; }
        .login-card p.subtitle { color: #94a3b8; text-align: center; font-size: 0.85rem; margin-bottom: 2rem; }
        .login-card label { color: #94a3b8; font-size: 0.85rem; font-weight: 500; margin-bottom: 0.4rem; display: block; }
        .login-card .form-control {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.12);
            color: #fff; border-radius: 0.75rem; padding: 0.75rem 1rem;
        }
        .login-card .form-control::placeholder { color: #64748b; }
        .login-card .form-control:focus {
            background: rgba(255, 255, 255, 0.08);
            border-color: #6366f1;
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.2);
            color: #fff;
        }
        .login-card .btn-login {
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            color: #fff; border: none; border-radius: 9999px;
            padding: 0.75rem; font-weight: 600; font-size: 0.95rem;
            width: 100%; transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(99, 102, 241, 0.4);
        }
        .login-card .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(99, 102, 241, 0.6);
        }
        .login-card .form-check-label { color: #94a3b8; font-size: 0.8rem; }
        .login-card .form-check-input { background-color: rgba(255,255,255,0.1); border-color: rgba(255,255,255,0.2); }
        .login-card .form-check-input:checked { background-color: #6366f1; border-color: #6366f1; }
        .alert-danger { background: rgba(239,68,68,0.1); border: 1px solid rgba(239,68,68,0.3); color: #fca5a5; border-radius: 0.75rem; font-size: 0.85rem; }
        .back-link { text-align: center; margin-top: 1.5rem; }
        .back-link a { color: #818cf8; font-size: 0.85rem; text-decoration: none; }
        .back-link a:hover { color: #a5b4fc; }
    </style>
</head>
<body>
    <div class="login-card">
        <!-- Logo -->
        <div class="logo">
            <div class="logo-icon"><span>A</span></div>
            <div class="logo-text">Aastha <span>Capital</span></div>
        </div>

        <h4>Admin Panel</h4>
        <p class="subtitle">Sign in to manage leads and applications</p>

        <!-- Error Messages -->
        @if($errors->any())
            <div class="alert alert-danger mb-3">
                @foreach($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3">
                <label>Email or Phone</label>
                <input type="text" name="email" class="form-control" placeholder="Enter email or phone" value="{{ old('email') }}" required autofocus>
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter password" required>
            </div>

            <div class="form-check mb-4">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">Remember Me</label>
            </div>

            <button type="submit" class="btn-login">
                <i class="fas fa-sign-in-alt me-2"></i> Sign In
            </button>
        </form>

        <div class="back-link">
            <a href="{{ route('home') }}"><i class="fas fa-arrow-left me-1"></i> Back to Website</a>
        </div>
    </div>
</body>
</html>

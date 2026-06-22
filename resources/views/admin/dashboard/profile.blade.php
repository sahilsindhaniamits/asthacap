@extends('layout.admin.master')

@section('title', 'My Profile')
@section('page-title', 'My Profile')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white py-3 d-flex align-items-center">
                <i class="bi bi-person-circle text-primary fs-4 me-2"></i>
                <h5 class="mb-0 fw-semibold">Profile Settings</h5>
            </div>
            <div class="card-body p-4">
                <!-- Profile Avatar -->
                <div class="text-center mb-4">
                    <div class="rounded-circle bg-primary bg-opacity-10 d-inline-flex align-items-center justify-content-center" style="width:80px;height:80px;">
                        <span class="text-primary fw-bold fs-2">{{ strtoupper(substr($user->name ?? 'A', 0, 1)) }}</span>
                    </div>
                    <h5 class="mt-2 mb-0 fw-semibold">{{ $user->name }}</h5>
                    <p class="text-muted small">{{ $user->email }}</p>
                </div>

                <hr>

                <form action="{{ route('admin.profile.update') }}" method="POST">
                    @csrf

                    <div class="row g-3">
                        <!-- Name -->
                        <div class="col-md-6">
                            <label class="form-label fw-medium">Full Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $user->name }}" placeholder="Full Name" required>
                        </div>

                        <!-- Email -->
                        <div class="col-md-6">
                            <label class="form-label fw-medium">Email Address</label>
                            <input type="email" class="form-control" name="email" value="{{ $user->email }}" placeholder="Email" required>
                        </div>

                        <!-- Phone -->
                        <div class="col-md-6">
                            <label class="form-label fw-medium">Phone Number</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light">+91</span>
                                <input type="number" class="form-control" name="phone" value="{{ $user->phone }}" placeholder="Phone Number">
                            </div>
                        </div>
                    </div>

                    <!-- Password Section -->
                    <hr class="my-4">
                    <h6 class="fw-semibold text-muted mb-3"><i class="bi bi-shield-lock me-2"></i>Change Password</h6>
                    <p class="text-muted small mb-3">Leave blank if you don't want to change your password.</p>

                    <div class="row g-3">
                        <!-- New Password -->
                        <div class="col-md-6">
                            <label class="form-label fw-medium">New Password</label>
                            <input type="password" class="form-control" name="password" placeholder="New Password">
                        </div>

                        <!-- Confirm Password -->
                        <div class="col-md-6">
                            <label class="form-label fw-medium">Confirm Password</label>
                            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password">
                        </div>
                    </div>

                    <!-- Submit -->
                    <div class="mt-4 d-flex gap-2">
                        <button type="submit" class="btn btn-primary px-4">
                            <i class="bi bi-check-lg me-1"></i>Update Profile
                        </button>
                        <a href="{{ route('admin.dashboard') }}" class="btn btn-light">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

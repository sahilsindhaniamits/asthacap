@extends('layout.admin.master')

@section('content')
<!-- Page Header -->
<div class="flex items-center justify-between mb-5">
    <div>
        <h1 class="text-xl font-bold text-gray-800">Profile Settings</h1>
        <p class="text-sm text-gray-400">Update your account information</p>
    </div>
</div>

<!-- Profile Card -->
<div class="max-w-xl">
    <div class="bg-white rounded-xl border border-gray-100 shadow-sm overflow-hidden">
        <!-- Avatar Section -->
        <div class="px-6 py-5 bg-gradient-to-r from-primary-500 to-primary-600 flex items-center gap-4">
            <div class="w-14 h-14 rounded-full bg-white/20 flex items-center justify-center text-white text-xl font-bold border-2 border-white/30">
                {{ strtoupper(substr($user->name, 0, 1)) }}
            </div>
            <div>
                <h3 class="text-white font-semibold">{{ $user->name }}</h3>
                <p class="text-white/70 text-sm">{{ $user->email }}</p>
            </div>
        </div>

        <!-- Form -->
        <form action="{{ route('admin.profile') }}" method="POST" class="p-6">
            @csrf
            <div class="space-y-4">
                <div>
                    <label class="text-xs font-medium text-gray-500 mb-1 block">Full Name</label>
                    <input type="text" name="name" value="{{ $user->name }}" class="w-full px-3 py-2.5 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all">
                </div>
                <div>
                    <label class="text-xs font-medium text-gray-500 mb-1 block">Email Address</label>
                    <input type="email" name="email" value="{{ $user->email }}" class="w-full px-3 py-2.5 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all">
                </div>
                <div>
                    <label class="text-xs font-medium text-gray-500 mb-1 block">Phone Number</label>
                    <input type="text" name="phone" value="{{ $user->phone }}" class="w-full px-3 py-2.5 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all">
                </div>
                <hr class="border-gray-100">
                <div>
                    <label class="text-xs font-medium text-gray-500 mb-1 block">New Password</label>
                    <input type="password" name="password" class="w-full px-3 py-2.5 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all" placeholder="Leave blank to keep current">
                </div>
                <div>
                    <label class="text-xs font-medium text-gray-500 mb-1 block">Confirm Password</label>
                    <input type="password" name="confirm_password" class="w-full px-3 py-2.5 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all" placeholder="Confirm new password">
                </div>
            </div>

            <div class="flex items-center justify-end gap-3 mt-6 pt-4 border-t border-gray-100">
                <button type="submit" class="px-6 py-2.5 text-sm font-medium text-white bg-gradient-to-r from-primary-500 to-primary-600 rounded-lg hover:from-primary-600 hover:to-primary-700 shadow-sm transition-all">
                    <i class="fas fa-save mr-2"></i>Save Changes
                </button>
            </div>
        </form>
    </div>
</div>

@if(session('success'))
<script>alert("{{ session('success') }}");</script>
@endif
@if(session('error'))
<script>alert("{{ session('error') }}");</script>
@endif
@endsection

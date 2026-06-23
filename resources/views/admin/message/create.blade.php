@extends('layout.admin.master')

@section('content')
<!-- Page Header -->
<div class="flex items-center justify-between mb-5">
    <div>
        <h1 class="text-xl font-bold text-gray-800">Send SMS</h1>
        <p class="text-sm text-gray-400">Send a message to a customer</p>
    </div>
</div>

<!-- Form Card -->
<div class="max-w-xl">
    <div class="bg-white rounded-xl border border-gray-100 shadow-sm overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-50">
            <h3 class="text-sm font-semibold text-primary-600 uppercase tracking-wider flex items-center gap-2">
                <i class="fas fa-sms"></i> Compose Message
            </h3>
        </div>
        <form action="{{ route('admin.message.send') }}" method="POST" class="p-6">
            @csrf
            <div class="mb-4">
                <label class="text-xs font-medium text-gray-500 mb-1 block">Phone Number</label>
                <input type="text" name="mobile" required class="w-full px-3 py-2.5 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all" placeholder="Enter phone number">
            </div>
            <div class="mb-5">
                <label class="text-xs font-medium text-gray-500 mb-1 block">Message</label>
                <textarea name="message" rows="5" required class="w-full px-3 py-2.5 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all resize-none" placeholder="Type your message here..."></textarea>
            </div>
            <button type="submit" class="w-full px-5 py-2.5 text-sm font-medium text-white bg-gradient-to-r from-primary-500 to-primary-600 rounded-lg hover:from-primary-600 hover:to-primary-700 shadow-sm transition-all">
                <i class="fas fa-paper-plane mr-2"></i>Send Message
            </button>
        </form>
    </div>
</div>
@endsection

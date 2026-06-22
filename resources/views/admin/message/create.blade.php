@extends('layout.admin.master')

@section('title', 'Send SMS')
@section('page-title', 'Send SMS')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-7">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white py-3 d-flex align-items-center">
                <i class="bi bi-chat-dots-fill text-info fs-4 me-2"></i>
                <h5 class="mb-0 fw-semibold">Send SMS Message</h5>
            </div>
            <div class="card-body p-4">
                <form action="{{ route('admin.message.send') }}" method="POST">
                    @csrf

                    <!-- Mobile Number -->
                    <div class="mb-3">
                        <label class="form-label fw-medium">Mobile Number <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text bg-light">
                                <i class="bi bi-phone me-1"></i>+91
                            </span>
                            <input type="text" class="form-control" name="mobile" placeholder="Enter 10-digit mobile number" maxlength="10" required>
                        </div>
                        <small class="text-muted">Enter the recipient's 10-digit mobile number</small>
                    </div>

                    <!-- Message -->
                    <div class="mb-4">
                        <label class="form-label fw-medium">Message <span class="text-danger">*</span></label>
                        <textarea class="form-control" name="message" rows="6" placeholder="Type your message here..." required></textarea>
                        <div class="d-flex justify-content-between mt-1">
                            <small class="text-muted">SMS will be sent via HiveMsg API</small>
                            <small class="text-muted"><span id="charCount">0</span> characters</small>
                        </div>
                    </div>

                    <!-- Submit -->
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary px-4">
                            <i class="bi bi-send me-1"></i>Send SMS
                        </button>
                        <a href="{{ route('admin.dashboard') }}" class="btn btn-light">Cancel</a>
                    </div>
                </form>
            </div>
        </div>

        <!-- Info Card -->
        <div class="card border-0 shadow-sm mt-3">
            <div class="card-body">
                <div class="d-flex align-items-start gap-3">
                    <i class="bi bi-info-circle-fill text-primary fs-5"></i>
                    <div>
                        <h6 class="fw-semibold mb-1">SMS Delivery Info</h6>
                        <p class="text-muted small mb-0">
                            Messages are delivered via HiveMsg transactional SMS service. 
                            Ensure the mobile number is valid and active. 
                            Messages are typically delivered within 30 seconds.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    // Character counter
    document.querySelector('textarea[name="message"]').addEventListener('input', function() {
        document.getElementById('charCount').textContent = this.value.length;
    });
</script>
@endsection

@extends('layout.admin.master')

@section('title', 'Send SMS')
@section('page-title', 'Send SMS')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white py-3 d-flex align-items-center">
                <i class="bi bi-chat-dots-fill text-info fs-4 me-2"></i>
                <h5 class="mb-0 fw-semibold">Send SMS Message</h5>
            </div>
            <div class="card-body p-4">

                <!-- Mobile Number -->
                <div class="mb-3">
                    <label class="form-label fw-medium">Mobile Number <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text bg-light">
                            <i class="bi bi-phone me-1"></i>+91
                        </span>
                        <input type="text" class="form-control" id="sms_mobile" placeholder="Enter 10-digit mobile number" maxlength="10" required>
                    </div>
                    <small class="text-muted">Enter the recipient's 10-digit mobile number</small>
                </div>

                <!-- Template Dropdown -->
                <div class="mb-3">
                    <label class="form-label fw-medium">Select Message Template <span class="text-danger">*</span></label>
                    <select class="form-select" id="sms_template">
                        <option value="" disabled selected>-- Choose a template --</option>
                        <option value="1">Bond Charges</option>
                        <option value="2">File Reopen</option>
                        <option value="3">Refund File</option>
                        <option value="4">Underprocess File</option>
                        <option value="5">Processing Charge</option>
                        <option value="6">File Reopen Charge</option>
                        <option value="7">Login File</option>
                        <option value="8">Disburse Charge</option>
                        <option value="9">Stamp Duty</option>
                        <option value="10">Registration</option>
                    </select>
                </div>

                <!-- Message (editable) -->
                <div class="mb-3">
                    <label class="form-label fw-medium">Message <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="sms_message" rows="5" placeholder="Select a template above or type your message..." required></textarea>
                    <div class="d-flex justify-content-between mt-1">
                        <small class="text-muted">You can edit the message before sending</small>
                        <small class="text-muted"><span id="charCount">0</span> characters</small>
                    </div>
                </div>

                <!-- Send Button -->
                <div class="d-flex gap-2">
                    <button type="button" class="btn btn-primary px-4" id="sendSmsBtn">
                        <i class="bi bi-send me-1"></i>Send SMS
                    </button>
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-light">Cancel</a>
                </div>

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
                            Replace <code>{#var#}</code> placeholders with actual values before sending.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center py-4">
                <i class="bi bi-check-circle-fill text-success fs-1 mb-3 d-block"></i>
                <h6 class="fw-bold">SMS Sent Successfully!</h6>
                <p class="text-muted small mb-0" id="successMsg"></p>
                <button type="button" class="btn btn-success mt-3 px-4" data-bs-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>

<!-- Error Modal -->
<div class="modal fade" id="errorModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center py-4">
                <i class="bi bi-x-circle-fill text-danger fs-1 mb-3 d-block"></i>
                <h6 class="fw-bold">SMS Failed!</h6>
                <p class="text-muted small mb-0" id="errorMsg"></p>
                <button type="button" class="btn btn-danger mt-3 px-4" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
// Template messages with IDs
const templates = {
    1: { id: '1707178273468627710', name: 'Bond Charges', message: 'DEAR {#var#} Please submit your BOND Charges is Rs. {#var#} For more queries, contact our team members {#var#}.Thanks for Choosing Aastha capital Service. TC Apply' },
    2: { id: '1707178273066009663', name: 'File Reopen', message: 'DEAR {#var#}, your file has been RE OPEN. For more queries please contact our team members {#var#}.Thanks for Choosing Aastha capital Service. TC Apply' },
    3: { id: '1707178273072691345', name: 'Refund File', message: 'DEAR {#var#},Your Refund File has been accepted. Your Refund amount will be transferred into your Account within 30-90 working days. Thanks for Choosing Aastha Capital Service. TC Apply' },
    4: { id: '1707178273102117992', name: 'Underprocess File', message: 'DEAR {#var#}, Your file has UNDER PROCESS we will update you shortly . For more queries please contact our team members {#var#}.Thanks for Choosing Aastha Capital service. TC Apply' },
    5: { id: '1707178273112649370', name: 'Processing Charge', message: 'DEAR {#var#} Please submit your PROCESSING Charges is Rs. {#var#} For more queries contact our team members {#var#}.Thanks for Choosing Aastha Capital Service. TC Apply' },
    6: { id: '1707178273121927319', name: 'File Reopen Charge', message: 'DEAR {#var#} Please submit your FILE RE OPEN Charges is Rs. {#var#} For more queries contact our team members {#var#}.Thanks for Choosing Aastha Capital Service. TC Apply' },
    7: { id: '1707178273132850792', name: 'Login File', message: 'DEAR {#var#}, KYC {#var#} Please submit your LOGIN FILE Charges is Rs. {#var#} For more queries contact our team members {#var#}.Thanks for Choosing Aastha capital Service. TC Apply' },
    8: { id: '1707178273151657503', name: 'Disburse Charge', message: 'DEAR {#var#}, KYC {#var#} Please submit your Disbursement Charges is Rs. {#var#} For more queries contact our team members {#var#}.Thanks for Choosing Aastha Capital service. TC Apply' },
    9: { id: '1707178273162341218', name: 'Stamp Duty', message: 'Dear {#var#}, a stamp duty of Rs {#var#} is now due for your Personal loan at {#var#}. Please complete the payment avoid processing delays.contact our team members .Thanks for Choosing . TC Apply Aastha Capital Service' },
    10: { id: '1707178273170935084', name: 'Registration', message: 'Dear {#var#}, a registration fee of ₹ {#var#} is now due for your Personal loan at {#var#}. Please complete the payment avoid processing delays. Contact our team members .Thanks for Choosing . TC Apply Aastha capital Service' }
};

// Template dropdown change - auto-fill message
document.getElementById('sms_template').addEventListener('change', function() {
    const selected = templates[this.value];
    if (selected) {
        document.getElementById('sms_message').value = selected.message;
        document.getElementById('charCount').textContent = selected.message.length;
    }
});

// Character counter
document.getElementById('sms_message').addEventListener('input', function() {
    document.getElementById('charCount').textContent = this.value.length;
});

// Send SMS via AJAX
document.getElementById('sendSmsBtn').addEventListener('click', function() {
    const mobile = document.getElementById('sms_mobile').value.trim();
    const message = document.getElementById('sms_message').value.trim();
    const templateSelect = document.getElementById('sms_template').value;
    const templateId = templateSelect ? templates[templateSelect]?.id : '';
    const btn = this;

    // Validation
    if (!mobile || mobile.length !== 10 || isNaN(mobile)) {
        document.getElementById('errorMsg').textContent = 'Please enter a valid 10-digit mobile number.';
        new bootstrap.Modal(document.getElementById('errorModal')).show();
        return;
    }
    if (!message) {
        document.getElementById('errorMsg').textContent = 'Please enter or select a message.';
        new bootstrap.Modal(document.getElementById('errorModal')).show();
        return;
    }

    // Disable button & show loading
    btn.disabled = true;
    btn.innerHTML = '<span class="spinner-border spinner-border-sm me-1"></span>Sending...';

    // Send AJAX request
    fetch('{{ route("admin.message.send") }}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
            'Accept': 'application/json'
        },
        body: JSON.stringify({
            mobile: mobile,
            message: message,
            template_id: templateId
        })
    })
    .then(response => response.json())
    .then(data => {
        btn.disabled = false;
        btn.innerHTML = '<i class="bi bi-send me-1"></i>Send SMS';

        if (data.status === true) {
            document.getElementById('successMsg').textContent = 'SMS sent to +91 ' + mobile;
            new bootstrap.Modal(document.getElementById('successModal')).show();
            // Clear form
            document.getElementById('sms_mobile').value = '';
            document.getElementById('sms_message').value = '';
            document.getElementById('sms_template').selectedIndex = 0;
            document.getElementById('charCount').textContent = '0';
        } else {
            document.getElementById('errorMsg').textContent = data.message || 'SMS delivery failed. Please try again.';
            new bootstrap.Modal(document.getElementById('errorModal')).show();
        }
    })
    .catch(error => {
        btn.disabled = false;
        btn.innerHTML = '<i class="bi bi-send me-1"></i>Send SMS';
        document.getElementById('errorMsg').textContent = 'Network error. Please check your connection and try again.';
        new bootstrap.Modal(document.getElementById('errorModal')).show();
    });
});
</script>
@endsection

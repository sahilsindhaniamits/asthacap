@extends('layout.admin.master')

@section('title', 'All Leads')
@section('page-title', 'All Leads')

@section('content')
@php use Carbon\Carbon; @endphp

<!-- Action Bar -->
<div class="d-flex flex-wrap justify-content-between align-items-center mb-3 gap-2">
    <h5 class="fw-bold mb-0">Loan Requests</h5>
    <a href="{{ route('admin.export_excel') }}" class="btn btn-success btn-sm">
        <i class="bi bi-file-earmark-excel me-1"></i>Export Excel
    </a>
</div>

<!-- Leads Table -->
<div class="card border-0 shadow-sm">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0" id="leadsTable">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Lead Token</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Loan Type</th>
                        <th>Amount</th>
                        <th>State</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($requests as $index => $lead)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td><code class="text-primary">{{ $lead->lead_token }}</code></td>
                        <td class="fw-medium">{{ $lead->name }}</td>
                        <td>{{ $lead->email }}</td>
                        <td>{{ $lead->phone }}</td>
                        <td><span class="badge bg-info text-dark">{{ $lead->loan_type }}</span></td>
                        <td class="fw-semibold">{{ number_format($lead->loan_amount) }}</td>
                        <td>{{ $lead->state }}</td>
                        <td>
                            @if($lead->status == 1)
                                <span class="badge bg-success">Approved</span>
                            @elseif($lead->status == 3)
                                <span class="badge bg-danger">Rejected</span>
                            @else
                                <span class="badge bg-warning text-dark">Pending</span>
                            @endif
                        </td>
                        <td><small class="text-muted">{{ Carbon::parse($lead->created_at)->format('d M Y') }}</small></td>
                        <td class="text-center">
                            <div class="btn-group btn-group-sm">
                                @if($lead->status == 0)
                                <button class="btn btn-outline-success btn-approve" data-id="{{ $lead->id }}" title="Approve">
                                    <i class="bi bi-check-lg"></i>
                                </button>
                                @endif
                                <button class="btn btn-outline-primary btn-edit" data-id="{{ $lead->id }}" title="Edit">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <button class="btn btn-outline-danger btn-delete" data-id="{{ $lead->id }}" title="Delete">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Edit Lead Modal -->
<div class="modal fade" id="editLeadModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="bi bi-pencil-square me-2"></i>Edit Lead</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="edit_lead_id">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" id="edit_name" placeholder="Name">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" id="edit_email" placeholder="Email">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Phone</label>
                        <input type="text" class="form-control" id="edit_phone" placeholder="Phone">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Loan Type</label>
                        <input type="text" class="form-control" id="edit_loan_type" placeholder="Loan Type">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Loan Amount</label>
                        <input type="number" class="form-control" id="edit_loan_amount" placeholder="Amount">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">State</label>
                        <input type="text" class="form-control" id="edit_state" placeholder="State">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Message</label>
                        <textarea class="form-control" id="edit_message" rows="3" placeholder="Message"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="saveEditBtn">
                    <i class="bi bi-check-lg me-1"></i>Save Changes
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Approve Lead Modal -->
<div class="modal fade" id="approveLeadModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-success bg-opacity-10">
                <h5 class="modal-title text-success"><i class="bi bi-check-circle me-2"></i>Approve Lead</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="approve_lead_id">
                <h6 class="text-muted mb-3">Lead Information</h6>
                <div class="row g-3 mb-4">
                    <div class="col-md-4">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" id="approve_name">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" id="approve_email">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Phone</label>
                        <input type="text" class="form-control" id="approve_phone">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Loan Type</label>
                        <input type="text" class="form-control" id="approve_loan_type">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Loan Amount</label>
                        <input type="number" class="form-control" id="approve_loan_amount">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">State</label>
                        <input type="text" class="form-control" id="approve_state">
                    </div>
                </div>

                <hr>
                <h6 class="text-muted mb-3">Approval Details</h6>
                <div class="row g-3">
                    <div class="col-md-4">
                        <label class="form-label">UTOKEN</label>
                        <input type="text" class="form-control" id="approve_UTOKEN">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Application Number</label>
                        <input type="text" class="form-control" id="approve_appno">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Sanction Amount</label>
                        <input type="number" class="form-control" id="approve_sanctionamt">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">EMI Amount</label>
                        <input type="number" class="form-control" id="approve_emiamt">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Loan Tenure</label>
                        <input type="text" class="form-control" id="approve_loant">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Rate of Interest</label>
                        <input type="text" class="form-control" id="approve_roi">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Processing Fee (PF)</label>
                        <input type="text" class="form-control" id="approve_pf">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">GST</label>
                        <input type="text" class="form-control" id="approve_gst">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Total Amount</label>
                        <input type="text" class="form-control" id="approve_totalv">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Security</label>
                        <input type="text" class="form-control" id="approve_security">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Date</label>
                        <input type="text" class="form-control" id="approve_dummy" value="{{ Carbon::now()->format('d-m-Y') }}">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Aadhaar Number</label>
                        <input type="number" class="form-control" id="approve_adhaar_number">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Message</label>
                        <textarea class="form-control" id="approve_message" rows="2"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success" id="confirmApproveBtn">
                    <i class="bi bi-check-circle me-1"></i>Approve Lead
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteLeadModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center py-4">
                <i class="bi bi-exclamation-triangle-fill text-danger fs-1 mb-3 d-block"></i>
                <h6 class="fw-bold">Delete this lead?</h6>
                <p class="text-muted small">This action cannot be undone.</p>
                <form id="deleteForm" action="{{ route('admin.lead_delete') }}" method="POST">
                    @csrf
                    <input type="hidden" name="lead_id" id="delete_lead_id">
                    <div class="d-flex gap-2 justify-content-center mt-3">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
$(document).ready(function() {
    // Initialize DataTable
    $('#leadsTable').DataTable({
        order: [[0, 'desc']],
        pageLength: 25,
        language: {
            search: "",
            searchPlaceholder: "Search leads..."
        }
    });

    // Edit Lead
    $('.btn-edit').click(function() {
        var leadId = $(this).data('id');
        $.ajax({
            url: '/admin/loan-request/' + leadId + '/details',
            method: 'GET',
            success: function(res) {
                $('#edit_lead_id').val(leadId);
                $('#edit_name').val(res.name);
                $('#edit_email').val(res.email);
                $('#edit_phone').val(res.phone);
                $('#edit_loan_type').val(res.loan_type);
                $('#edit_loan_amount').val(res.loan_amount);
                $('#edit_state').val(res.state);
                $('#edit_message').val(res.message);
                new bootstrap.Modal('#editLeadModal').show();
            },
            error: function() {
                alert('Failed to fetch lead details.');
            }
        });
    });

    // Save Edit
    $('#saveEditBtn').click(function() {
        var btn = $(this);
        btn.prop('disabled', true).html('<span class="spinner-border spinner-border-sm me-1"></span>Saving...');
        $.ajax({
            url: '{{ route("admin.lead_edit") }}',
            method: 'POST',
            data: {
                leadId: $('#edit_lead_id').val(),
                leadName: $('#edit_name').val(),
                leadEmail: $('#edit_email').val(),
                phone: $('#edit_phone').val(),
                loan_type: $('#edit_loan_type').val(),
                loan_amount: $('#edit_loan_amount').val(),
                state: $('#edit_state').val(),
                message: $('#edit_message').val()
            },
            success: function() {
                bootstrap.Modal.getInstance(document.getElementById('editLeadModal')).hide();
                location.reload();
            },
            error: function() {
                btn.prop('disabled', false).html('<i class="bi bi-check-lg me-1"></i>Save Changes');
                alert('Failed to update lead.');
            }
        });
    });

    // Delete Lead
    $('.btn-delete').click(function() {
        $('#delete_lead_id').val($(this).data('id'));
        new bootstrap.Modal('#deleteLeadModal').show();
    });

    // Approve Lead - Open Modal
    $('.btn-approve').click(function() {
        var leadId = $(this).data('id');
        $.ajax({
            url: '/admin/loan-request/' + leadId + '/details',
            method: 'GET',
            success: function(res) {
                $('#approve_lead_id').val(leadId);
                $('#approve_name').val(res.name);
                $('#approve_email').val(res.email);
                $('#approve_phone').val(res.phone);
                $('#approve_loan_type').val(res.loan_type);
                $('#approve_loan_amount').val(res.loan_amount);
                $('#approve_state').val(res.state);
                $('#approve_message').val(res.message);
                $('#approve_UTOKEN').val(res.lead_token);
                $('#approve_appno').val(res.lead_token);
                $('#approve_adhaar_number').val(res.adhaar);
                new bootstrap.Modal('#approveLeadModal').show();
            },
            error: function() {
                alert('Failed to fetch lead details.');
            }
        });
    });

    // Confirm Approve
    $('#confirmApproveBtn').click(function() {
        var btn = $(this);
        btn.prop('disabled', true).html('<span class="spinner-border spinner-border-sm me-1"></span>Approving...');
        $.ajax({
            url: '{{ route("admin.lead_approve") }}',
            method: 'POST',
            data: {
                leadhidden: $('#approve_lead_id').val(),
                leadName: $('#approve_name').val(),
                leadEmail: $('#approve_email').val(),
                phone: $('#approve_phone').val(),
                loan_type: $('#approve_loan_type').val(),
                loan_amount: $('#approve_loan_amount').val(),
                state: $('#approve_state').val(),
                message: $('#approve_message').val(),
                UTOKEN: $('#approve_UTOKEN').val(),
                appno: $('#approve_appno').val(),
                sanctionamt: $('#approve_sanctionamt').val(),
                emiamt: $('#approve_emiamt').val(),
                loant: $('#approve_loant').val(),
                roi: $('#approve_roi').val(),
                pf: $('#approve_pf').val(),
                gst: $('#approve_gst').val(),
                totalv: $('#approve_totalv').val(),
                security: $('#approve_security').val(),
                dummy: $('#approve_dummy').val(),
                adhaar_number: $('#approve_adhaar_number').val()
            },
            success: function() {
                bootstrap.Modal.getInstance(document.getElementById('approveLeadModal')).hide();
                alert('Lead Approved Successfully!');
                location.reload();
            },
            error: function() {
                btn.prop('disabled', false).html('<i class="bi bi-check-circle me-1"></i>Approve Lead');
                alert('Failed to approve lead.');
            }
        });
    });
});
</script>
@endsection

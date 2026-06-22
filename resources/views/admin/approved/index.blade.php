@extends('layout.admin.master')

@section('title', 'Approved Leads')
@section('page-title', 'Approved Leads')

@section('content')
@php use Carbon\Carbon; @endphp

<!-- Page Header -->
<div class="d-flex flex-wrap justify-content-between align-items-center mb-3 gap-2">
    <h5 class="fw-bold mb-0">Approved Leads</h5>
    <span class="badge bg-success fs-6">{{ count($approved) }} Approved</span>
</div>

<!-- Approved Leads Table -->
<div class="card border-0 shadow-sm">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0" id="approvedTable">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>App No.</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Loan Type</th>
                        <th>Loan Amt</th>
                        <th>Sanction Amt</th>
                        <th>EMI</th>
                        <th>Tenure</th>
                        <th>ROI</th>
                        <th>Approved On</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($approved as $index => $value)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td><code class="text-primary">{{ $value->appno }}</code></td>
                        <td class="fw-medium">{{ $value->name }}</td>
                        <td>{{ $value->phone }}</td>
                        <td><span class="badge bg-info text-dark">{{ $value->loan_type }}</span></td>
                        <td>{{ number_format($value->loan_amount) }}</td>
                        <td class="fw-semibold text-success">{{ number_format($value->sanctionamt) }}</td>
                        <td>{{ number_format($value->emiamt) }}</td>
                        <td>{{ $value->loant }} yr</td>
                        <td>{{ $value->roi }}%</td>
                        <td><small class="text-muted">{{ Carbon::parse($value->created_at)->format('d M Y') }}</small></td>
                        <td class="text-center">
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">
                                    <i class="bi bi-three-dots"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end shadow-sm">
                                    <li>
                                        <button class="dropdown-item btn-edit-approved" data-id="{{ $value->loan_request_id }}">
                                            <i class="bi bi-pencil text-primary me-2"></i>Edit
                                        </button>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('admin.view_pdf') }}?leadId={{ $value->loan_request_id }}">
                                            <i class="bi bi-file-pdf text-danger me-2"></i>Download PDF
                                        </a>
                                    </li>
                                    <li><hr class="dropdown-divider"></li>
                                    @if(is_null($value->sanction_letter_id))
                                    <li>
                                        <a class="dropdown-item" href="{{ route('admin.sanction_page') }}?leadId={{ $value->lead_token }}">
                                            <i class="bi bi-plus-circle text-success me-2"></i>Create Sanction Letter
                                        </a>
                                    </li>
                                    @else
                                    <li>
                                        <a class="dropdown-item" href="{{ route('admin.edit_sanction_page') }}?SanctionletterId={{ $value->sanction_letter_id }}">
                                            <i class="bi bi-pencil-square text-warning me-2"></i>Edit Sanction Letter
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('admin.print_sanction_page') }}?sanction_letter_id={{ $value->sanction_letter_id }}">
                                            <i class="bi bi-printer text-info me-2"></i>Print Sanction Letter
                                        </a>
                                    </li>
                                    @endif
                                </ul>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Edit Approved Lead Modal -->
<div class="modal fade" id="editApprovedModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form action="{{ route('admin.edit_approve_lead.submit') }}" method="POST">
                @csrf
                <input type="hidden" name="lead_id" id="ea_lead_id">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="bi bi-pencil-square me-2"></i>Edit Approved Lead</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <h6 class="text-muted mb-3">Lead Information</h6>
                    <div class="row g-3 mb-4">
                        <div class="col-md-4">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="ea_name">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="ea_email">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Phone</label>
                            <input type="text" class="form-control" name="phone" id="ea_phone">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Loan Type</label>
                            <input type="text" class="form-control" name="loan_type" id="ea_loan_type">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Loan Amount</label>
                            <input type="number" class="form-control" name="loan_amount" id="ea_loan_amount">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">State</label>
                            <input type="text" class="form-control" name="state" id="ea_state">
                        </div>
                    </div>

                    <hr>
                    <h6 class="text-muted mb-3">Approval Details</h6>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label class="form-label">UTOKEN</label>
                            <input type="text" class="form-control" name="UTOKEN" id="ea_UTOKEN">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Sanction Amount</label>
                            <input type="number" class="form-control" name="sanctionamt" id="ea_sanctionamt">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">EMI Amount</label>
                            <input type="number" class="form-control" name="emiamt" id="ea_emiamt">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Loan Tenure</label>
                            <input type="text" class="form-control" name="loant" id="ea_loant">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Rate of Interest</label>
                            <input type="text" class="form-control" name="roi" id="ea_roi">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Processing Fee</label>
                            <input type="text" class="form-control" name="pf" id="ea_pf">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">GST</label>
                            <input type="text" class="form-control" name="gst" id="ea_gst">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Total Amount</label>
                            <input type="text" class="form-control" name="totalv" id="ea_totalv">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Security</label>
                            <input type="text" class="form-control" name="security" id="ea_security">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Date</label>
                            <input type="text" class="form-control" name="dummy" id="ea_dummy">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Aadhaar Number</label>
                            <input type="text" class="form-control" name="adhaar_number" id="ea_adhaar_number">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Message</label>
                            <input type="text" class="form-control" name="message" id="ea_message">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-check-lg me-1"></i>Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
$(document).ready(function() {
    // Initialize DataTable
    $('#approvedTable').DataTable({
        order: [[0, 'desc']],
        pageLength: 25,
        language: {
            search: "",
            searchPlaceholder: "Search approved leads..."
        }
    });

    // Edit Approved Lead
    $('.btn-edit-approved').click(function() {
        var leadId = $(this).data('id');
        $.ajax({
            url: '{{ route("admin.edit_approve_lead") }}',
            method: 'GET',
            data: { leadId: leadId },
            success: function(res) {
                $('#ea_lead_id').val(res.loan_request_id);
                $('#ea_name').val(res.name);
                $('#ea_email').val(res.email);
                $('#ea_phone').val(res.phone);
                $('#ea_loan_type').val(res.loan_type);
                $('#ea_loan_amount').val(res.loan_amount);
                $('#ea_state').val(res.state);
                $('#ea_UTOKEN').val(res.lead_token);
                $('#ea_sanctionamt').val(res.sanctionamt);
                $('#ea_emiamt').val(res.emiamt);
                $('#ea_loant').val(res.loant);
                $('#ea_roi').val(res.roi);
                $('#ea_pf').val(res.pf);
                $('#ea_gst').val(res.gst);
                $('#ea_totalv').val(res.totalv);
                $('#ea_security').val(res.security);
                $('#ea_dummy').val(res.dummy);
                $('#ea_adhaar_number').val(res.adhaar_number);
                $('#ea_message').val(res.message);
                new bootstrap.Modal('#editApprovedModal').show();
            },
            error: function() {
                alert('Failed to fetch approved lead details.');
            }
        });
    });
});
</script>
@endsection

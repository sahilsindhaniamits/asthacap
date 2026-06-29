@extends('layout.admin.master')

@section('content')
@php use Carbon\Carbon; $currentDateTime = Carbon::now(); @endphp

<!-- Page Header -->
<div class="flex items-center justify-between mb-5 flex-wrap gap-3">
    <div>
        <h1 class="text-xl font-bold text-gray-800">All Leads</h1>
        <p class="text-sm text-gray-400">Manage loan applications</p>
    </div>
    <a href="{{ route('admin.export_excel') }}" class="inline-flex items-center gap-2 px-4 py-2 text-xs font-medium text-white bg-emerald-500 rounded-lg hover:bg-emerald-600 shadow-sm transition-colors">
        <i class="fas fa-file-csv"></i> Export CSV
    </a>
</div>

<!-- Search Bar -->
<div class="bg-white rounded-xl border border-gray-100 shadow-sm p-4 mb-4">
    <form method="GET" action="{{ route('admin.loan_request') }}" class="flex items-center gap-3">
        <div class="flex-1 relative">
            <i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 text-sm"></i>
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Search by name, phone, email, token, loan type..." class="w-full pl-9 pr-4 py-2.5 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all">
        </div>
        <button type="submit" class="px-4 py-2.5 text-sm font-medium text-white bg-primary-500 rounded-lg hover:bg-primary-600 transition-colors">Search</button>
        @if(request('search'))
        <a href="{{ route('admin.loan_request') }}" class="px-4 py-2.5 text-sm font-medium text-gray-500 bg-gray-100 rounded-lg hover:bg-gray-200 transition-colors">Clear</a>
        @endif
    </form>
</div>

<!-- Table -->
<div class="bg-white rounded-xl border border-gray-100 shadow-sm overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead class="bg-gray-50 border-b border-gray-100">
                <tr>
                    <th class="text-left px-4 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Actions</th>
                    <th class="text-left px-4 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">#</th>
                    <th class="text-left px-4 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Lead Token</th>
                    <th class="text-left px-4 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Name</th>
                    <th class="text-left px-4 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Email</th>
                    <th class="text-left px-4 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Phone</th>
                    <th class="text-left px-4 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Loan Type</th>
                    <th class="text-left px-4 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Amount</th>
                    <th class="text-left px-4 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">State</th>
                    <th class="text-left px-4 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Info</th>
                    <th class="text-left px-4 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="text-left px-4 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Loan Stage</th>
                    <th class="text-left px-4 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Date</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-50">
                @foreach($requests as $index => $value)
                <tr class="hover:bg-gray-50/50 transition-colors">
                    <td class="px-4 py-3">
                        <div class="flex flex-wrap gap-1.5">
                            @if($value->status == 0)
                            <button type="button" class="approve inline-flex items-center gap-1 px-2.5 py-1.5 text-xs font-medium rounded-md bg-emerald-50 text-emerald-600 hover:bg-emerald-100 transition-colors" data-lead-id="{{ $value->id }}">
                                <i class="fas fa-check text-[10px]"></i> Approve
                            </button>
                            @else
                            <span class="inline-flex items-center gap-1 px-2.5 py-1.5 text-xs font-medium rounded-md bg-emerald-100 text-emerald-700">
                                <i class="fas fa-check-double text-[10px]"></i> Done
                            </span>
                            @endif
                            <button type="button" class="edit inline-flex items-center gap-1 px-2.5 py-1.5 text-xs font-medium rounded-md bg-blue-50 text-blue-600 hover:bg-blue-100 transition-colors" data-lead-id="{{ $value->id }}">
                                <i class="fas fa-edit text-[10px]"></i> Edit
                            </button>
                            <form action="{{ route('admin.lead_delete') }}" method="POST" class="inline" onsubmit="return confirm('Delete this lead?')">
                                @csrf
                                <input type="hidden" name="lead_id" value="{{ $value->id }}">
                                <button type="submit" class="inline-flex items-center gap-1 px-2.5 py-1.5 text-xs font-medium rounded-md bg-red-50 text-red-600 hover:bg-red-100 transition-colors">
                                    <i class="fas fa-trash text-[10px]"></i> Delete
                                </button>
                            </form>
                        </div>
                    </td>
                    <td class="px-4 py-3 text-gray-500">{{ $index + 1 }}</td>
                    <td class="px-4 py-3 font-mono text-xs text-primary-600">{{ $value->lead_token }}</td>
                    <td class="px-4 py-3 font-medium text-gray-800">{{ $value->name }}</td>
                    <td class="px-4 py-3 text-gray-500 text-xs">{{ $value->email }}</td>
                    <td class="px-4 py-3 text-gray-600">{{ $value->phone }}</td>
                    <td class="px-4 py-3">
                        <span class="inline-flex px-2 py-0.5 text-[11px] font-medium rounded-full bg-primary-50 text-primary-600">{{ $value->loan_type }}</span>
                    </td>
                    <td class="px-4 py-3 font-medium text-gray-700">&#8377;{{ number_format($value->loan_amount) }}</td>
                    <td class="px-4 py-3 text-gray-500 text-xs">{{ $value->state }}</td>
                    <td class="px-4 py-3 text-gray-500 text-xs max-w-[150px] truncate" title="{{ $value->message }}">{{ $value->message }}</td>
                    <td class="px-4 py-3">
                        @if($value->status == 1)
                        <span class="inline-flex items-center gap-1 px-2 py-0.5 text-[11px] font-medium rounded-full bg-emerald-50 text-emerald-600">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Approved
                        </span>
                        @else
                        <span class="inline-flex items-center gap-1 px-2 py-0.5 text-[11px] font-medium rounded-full bg-amber-50 text-amber-600">
                            <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span> Pending
                        </span>
                        @endif
                    </td>
                    <td class="px-4 py-3">
                        <select class="loan-stage-select text-xs border border-gray-200 rounded-md px-2 py-1.5 bg-white focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none" data-lead-id="{{ $value->id }}" onchange="updateLoanStage(this)">
                            <option value="pending" {{ ($value->loan_stage ?? 'pending') == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="under_process" {{ ($value->loan_stage ?? '') == 'under_process' ? 'selected' : '' }}>Under Process</option>
                            <option value="loan_approved" {{ ($value->loan_stage ?? '') == 'loan_approved' ? 'selected' : '' }}>Loan Approved</option>
                            <option value="agreement_created" {{ ($value->loan_stage ?? '') == 'agreement_created' ? 'selected' : '' }}>Agreement Created</option>
                            <option value="file_closed" {{ ($value->loan_stage ?? '') == 'file_closed' ? 'selected' : '' }}>File Closed</option>
                            <option value="insurance" {{ ($value->loan_stage ?? '') == 'insurance' ? 'selected' : '' }}>Insurance</option>
                        </select>
                    </td>
                    <td class="px-4 py-3 text-xs text-gray-400">{{ Carbon::parse($value->created_at)->format('d M Y') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Pagination -->
<div class="mt-4">
    {{ $requests->links('vendor.pagination.tailwind') }}
</div>
<div id="editModal" class="hidden fixed inset-0 z-50 flex items-center justify-center p-4">
    <div class="absolute inset-0 bg-black/40" onclick="closeModal('editModal')"></div>
    <div class="relative bg-white rounded-2xl shadow-2xl w-full max-w-lg max-h-[80vh] overflow-y-auto">
        <div class="sticky top-0 bg-white border-b border-gray-100 px-6 py-4 rounded-t-2xl flex items-center justify-between">
            <h3 class="text-lg font-bold text-gray-800">Edit Lead</h3>
            <button onclick="closeModal('editModal')" class="w-8 h-8 rounded-lg bg-gray-100 flex items-center justify-center text-gray-500 hover:bg-gray-200"><i class="fas fa-times"></i></button>
        </div>
        <div class="p-6">
            <input type="hidden" id="lead-hidden">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div><label class="text-xs font-medium text-gray-500 mb-1 block">Name</label><input type="text" id="name" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none"></div>
                <div><label class="text-xs font-medium text-gray-500 mb-1 block">Email</label><input type="text" id="email" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none"></div>
                <div><label class="text-xs font-medium text-gray-500 mb-1 block">Phone</label><input type="text" id="phone" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none"></div>
                <div><label class="text-xs font-medium text-gray-500 mb-1 block">Loan Type</label><input type="text" id="loan_type" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none"></div>
                <div><label class="text-xs font-medium text-gray-500 mb-1 block">Loan Amount</label><input type="text" id="loan_amount" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none"></div>
                <div><label class="text-xs font-medium text-gray-500 mb-1 block">State</label><input type="text" id="state" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none"></div>
            </div>
            <div class="mt-4"><label class="text-xs font-medium text-gray-500 mb-1 block">Message</label><textarea id="message" rows="3" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none resize-none"></textarea></div>
            <div class="flex justify-end gap-3 mt-5 pt-4 border-t border-gray-100">
                <button onclick="closeModal('editModal')" class="px-4 py-2 text-sm font-medium text-gray-600 bg-gray-100 rounded-lg hover:bg-gray-200">Cancel</button>
                <button id="request" class="px-5 py-2 text-sm font-medium text-white bg-gradient-to-r from-primary-500 to-primary-600 rounded-lg hover:from-primary-600 hover:to-primary-700 shadow-sm"><i class="fas fa-save mr-1"></i> Save</button>
            </div>
        </div>
    </div>
</div>

<!-- Approve Modal -->
<div id="approveModal" class="hidden fixed inset-0 z-50 flex items-center justify-center p-4">
    <div class="absolute inset-0 bg-black/40" onclick="closeModal('approveModal')"></div>
    <div class="relative bg-white rounded-2xl shadow-2xl w-full max-w-3xl max-h-[85vh] overflow-y-auto">
        <div class="sticky top-0 bg-white border-b border-gray-100 px-6 py-4 rounded-t-2xl flex items-center justify-between">
            <h3 class="text-lg font-bold text-gray-800">Approve Lead</h3>
            <button onclick="closeModal('approveModal')" class="w-8 h-8 rounded-lg bg-gray-100 flex items-center justify-center text-gray-500 hover:bg-gray-200"><i class="fas fa-times"></i></button>
        </div>
        <div class="p-6">
            <input type="hidden" id="approve_lead-hidden">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <div><label class="text-xs font-medium text-gray-500 mb-1 block">Name</label><input type="text" id="approve_name" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none"></div>
                <div><label class="text-xs font-medium text-gray-500 mb-1 block">Email</label><input type="text" id="approve_email" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none"></div>
                <div><label class="text-xs font-medium text-gray-500 mb-1 block">Phone</label><input type="text" id="approve_phone" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none"></div>
                <div><label class="text-xs font-medium text-gray-500 mb-1 block">Loan Type</label><input type="text" id="approve_loan_type" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none"></div>
                <div><label class="text-xs font-medium text-gray-500 mb-1 block">Loan Amount</label><input type="text" id="approve_loan_amount" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none"></div>
                <div><label class="text-xs font-medium text-gray-500 mb-1 block">State</label><input type="text" id="approve_state" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none"></div>
                <div><label class="text-xs font-medium text-gray-500 mb-1 block">UTOKEN</label><input type="text" id="UTOKEN" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none"></div>
                <div><label class="text-xs font-medium text-gray-500 mb-1 block">Application No</label><input type="text" id="appno" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none"></div>
                <div><label class="text-xs font-medium text-gray-500 mb-1 block">Sanction Amt</label><input type="text" id="sanctionamt" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none"></div>
                <div><label class="text-xs font-medium text-gray-500 mb-1 block">EMI Amt</label><input type="text" id="emiamt" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none"></div>
                <div><label class="text-xs font-medium text-gray-500 mb-1 block">Loan Tenure</label><input type="text" id="loant" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none"></div>
                <div><label class="text-xs font-medium text-gray-500 mb-1 block">Rate of Interest</label><input type="text" id="roi" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none"></div>
                <div><label class="text-xs font-medium text-gray-500 mb-1 block">PF</label><input type="text" id="pf" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none"></div>
                <div><label class="text-xs font-medium text-gray-500 mb-1 block">GST</label><input type="text" id="gst" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none"></div>
                <div><label class="text-xs font-medium text-gray-500 mb-1 block">Total</label><input type="text" id="totalv" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none"></div>
                <div><label class="text-xs font-medium text-gray-500 mb-1 block">Security</label><input type="text" id="security" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none"></div>
                <div><label class="text-xs font-medium text-gray-500 mb-1 block">Date</label><input type="text" id="dummy" value="{{ $currentDateTime->format('d-m-Y') }}" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none"></div>
                <div><label class="text-xs font-medium text-gray-500 mb-1 block">Aadhaar</label><input type="number" id="adhaar_number" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none"></div>
            </div>
            <div class="mt-4"><label class="text-xs font-medium text-gray-500 mb-1 block">Message</label><textarea id="approve_message" rows="2" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none resize-none"></textarea></div>
            <div class="flex justify-end gap-3 mt-5 pt-4 border-t border-gray-100">
                <button onclick="closeModal('approveModal')" class="px-4 py-2 text-sm font-medium text-gray-600 bg-gray-100 rounded-lg hover:bg-gray-200">Cancel</button>
                <button id="approve_request" class="px-5 py-2 text-sm font-medium text-white bg-gradient-to-r from-emerald-500 to-emerald-600 rounded-lg hover:from-emerald-600 hover:to-emerald-700 shadow-sm"><i class="fas fa-check mr-1"></i> Approve Lead</button>
            </div>
        </div>
    </div>
</div>

@if(session('delete_success'))
<script>alert('Lead deleted successfully');</script>
@endif
@endsection

@section('script')
<script>
function closeModal(id) { document.getElementById(id).classList.add('hidden'); }

// Update Loan Stage
function updateLoanStage(el) {
    const leadId = el.dataset.leadId;
    const stage = el.value;
    const formData = new FormData();
    formData.append('_token', CSRF_TOKEN);
    formData.append('lead_id', leadId);
    formData.append('loan_stage', stage);
    fetch('/admin/update-loan-stage', { method: 'POST', body: formData })
    .then(r => r.json())
    .then(d => { if(d.status) { el.style.borderColor = '#10b981'; setTimeout(() => el.style.borderColor = '', 1500); } })
    .catch(() => alert('Failed to update'));
}

// Edit Lead
document.querySelectorAll('.edit').forEach(btn => {
    btn.addEventListener('click', function() {
        const leadId = this.dataset.leadId;
        document.getElementById('editModal').classList.remove('hidden');
        fetch('/admin/lead-details/' + leadId, { headers: {"X-CSRF-TOKEN": CSRF_TOKEN} })
        .then(r => r.json())
        .then(d => {
            document.getElementById('lead-hidden').value = leadId;
            document.getElementById('name').value = d.name || '';
            document.getElementById('email').value = d.email || '';
            document.getElementById('phone').value = d.phone || '';
            document.getElementById('loan_type').value = d.loan_type || '';
            document.getElementById('loan_amount').value = d.loan_amount || '';
            document.getElementById('state').value = d.state || '';
            document.getElementById('message').value = d.message || '';
        }).catch(() => alert('Failed to load'));
    });
});

// Save Edit
document.getElementById('request').addEventListener('click', function() {
    const data = new FormData();
    data.append('_token', CSRF_TOKEN);
    data.append('leadId', document.getElementById('lead-hidden').value);
    data.append('leadName', document.getElementById('name').value);
    data.append('leadEmail', document.getElementById('email').value);
    data.append('phone', document.getElementById('phone').value);
    data.append('loan_type', document.getElementById('loan_type').value);
    data.append('loan_amount', document.getElementById('loan_amount').value);
    data.append('state', document.getElementById('state').value);
    data.append('message', document.getElementById('message').value);
    data.append('leadhidden', document.getElementById('lead-hidden').value);
    fetch('/admin/lead-edit', { method: 'POST', body: data })
    .then(() => { alert('Lead Edited Successfully'); closeModal('editModal'); location.reload(); })
    .catch(() => alert('Failed'));
});

// Approve Lead
document.querySelectorAll('.approve').forEach(btn => {
    btn.addEventListener('click', function() {
        const leadId = this.dataset.leadId;
        document.getElementById('approveModal').classList.remove('hidden');
        fetch('/admin/lead-details/' + leadId, { headers: {"X-CSRF-TOKEN": CSRF_TOKEN} })
        .then(r => r.json())
        .then(d => {
            document.getElementById('approve_lead-hidden').value = leadId;
            document.getElementById('approve_name').value = d.name || '';
            document.getElementById('approve_email').value = d.email || '';
            document.getElementById('approve_phone').value = d.phone || '';
            document.getElementById('approve_loan_type').value = d.loan_type || '';
            document.getElementById('approve_loan_amount').value = d.loan_amount || '';
            document.getElementById('approve_state').value = d.state || '';
            document.getElementById('approve_message').value = d.message || '';
            document.getElementById('UTOKEN').value = d.lead_token || '';
            document.getElementById('appno').value = d.lead_token || '';
            document.getElementById('adhaar_number').value = d.adhaar || '';
        }).catch(() => alert('Failed to load'));
    });
});

// Submit Approve
document.getElementById('approve_request').addEventListener('click', function() {
    const fields = ['approve_lead-hidden:leadhidden','approve_name:leadName','approve_email:leadEmail','approve_phone:phone','approve_loan_type:loan_type','approve_loan_amount:loan_amount','approve_state:state','approve_message:message','UTOKEN:UTOKEN','appno:appno','sanctionamt:sanctionamt','emiamt:emiamt','loant:loant','roi:roi','pf:pf','gst:gst','totalv:totalv','security:security','dummy:dummy','adhaar_number:adhaar_number'];
    const formData = new FormData();
    formData.append('_token', CSRF_TOKEN);
    fields.forEach(f => { const [id, key] = f.split(':'); formData.append(key, document.getElementById(id).value); });
    fetch('/admin/lead-approve', { method: 'POST', body: formData })
    .then(r => { if(r.ok) { alert('Lead Approved Successfully ✅'); closeModal('approveModal'); setTimeout(() => location.reload(), 1000); } else { alert('Failed to approve'); } })
    .catch(() => alert('Failed'));
});
</script>
@endsection

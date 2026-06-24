@extends('layout.admin.master')

@section('content')
@php use Carbon\Carbon; $currentDateTime = Carbon::now(); @endphp

<!-- Page Header -->
<div class="flex items-center justify-between mb-5 flex-wrap gap-3">
    <div>
        <h1 class="text-xl font-bold text-gray-800">Approved Leads</h1>
        <p class="text-sm text-gray-400">Manage approved loan applications</p>
    </div>
    <span class="text-xs font-medium bg-emerald-50 text-emerald-600 px-3 py-1.5 rounded-full">
        {{ $approved->total() }} Records
    </span>
</div>

<!-- Search Bar -->
<div class="bg-white rounded-xl border border-gray-100 shadow-sm p-4 mb-4">
    <form method="GET" action="{{ route('admin.loan_request_approved') }}" class="flex items-center gap-3">
        <div class="flex-1 relative">
            <i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 text-sm"></i>
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Search by name, phone, token, loan type..." class="w-full pl-9 pr-4 py-2.5 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all">
        </div>
        <button type="submit" class="px-4 py-2.5 text-sm font-medium text-white bg-primary-500 rounded-lg hover:bg-primary-600 transition-colors">Search</button>
        @if(request('search'))
        <a href="{{ route('admin.loan_request_approved') }}" class="px-4 py-2.5 text-sm font-medium text-gray-500 bg-gray-100 rounded-lg hover:bg-gray-200 transition-colors">Clear</a>
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
                    <th class="text-left px-4 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Sanction Amt</th>
                    <th class="text-left px-4 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">EMI</th>
                    <th class="text-left px-4 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Tenure</th>
                    <th class="text-left px-4 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">ROI</th>
                    <th class="text-left px-4 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Total</th>
                    <th class="text-left px-4 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Security</th>
                    <th class="text-left px-4 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Info</th>
                    <th class="text-left px-4 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="text-left px-4 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Date</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-50">
                @foreach($approved as $index => $value)
                <tr class="hover:bg-gray-50/50 transition-colors">
                    <!-- Actions -->
                    <td class="px-4 py-3">
                        <div class="grid grid-cols-2 gap-1.5 w-[120px]">
                            <button type="button" class="approve_edit inline-flex items-center gap-1 px-2.5 py-1.5 text-xs font-medium rounded-md bg-blue-50 text-blue-600 hover:bg-blue-100 transition-colors" data-lead-id="{{ $value->loan_request_id }}">
                                <i class="fas fa-edit text-[10px]"></i> Edit
                            </button>
                            <a href="{{ route('admin.view_pdf') }}?leadId={{ $value->loan_request_id }}" class="inline-flex items-center gap-1 px-2.5 py-1.5 text-xs font-medium rounded-md bg-purple-50 text-purple-600 hover:bg-purple-100 transition-colors">
                                <i class="fas fa-download text-[10px]"></i> PDF
                            </a>
                            @if(is_null($value->sanction_letter_id))
                            <a href="{{ route('admin.sanction_page') }}?leadId={{ $value->lead_token }}" class="inline-flex items-center gap-1 px-2.5 py-1.5 text-xs font-medium rounded-md bg-emerald-50 text-emerald-600 hover:bg-emerald-100 transition-colors">
                                <i class="fas fa-plus text-[10px]"></i> Sanction
                            </a>
                            @else
                            <a href="{{ route('admin.edit_sanction_page') }}?SanctionletterId={{ $value->sanction_letter_id }}" class="inline-flex items-center gap-1 px-2.5 py-1.5 text-xs font-medium rounded-md bg-amber-50 text-amber-600 hover:bg-amber-100 transition-colors">
                                <i class="fas fa-edit text-[10px]"></i> Edit SL
                            </a>
                            <a href="{{ route('admin.print_sanction_page') }}?sanction_letter_id={{ $value->sanction_letter_id }}" class="inline-flex items-center gap-1 px-2.5 py-1.5 text-xs font-medium rounded-md bg-rose-50 text-rose-600 hover:bg-rose-100 transition-colors">
                                <i class="fas fa-file-pdf text-[10px]"></i> SL PDF
                            </a>
                            @endif
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
                    <td class="px-4 py-3 font-medium text-emerald-600">&#8377;{{ number_format($value->sanctionamt) }}</td>
                    <td class="px-4 py-3 text-gray-600">&#8377;{{ number_format($value->emiamt) }}</td>
                    <td class="px-4 py-3 text-gray-600">{{ $value->loant ?? '-' }}</td>
                    <td class="px-4 py-3 text-gray-600">{{ $value->roi ?? '-' }}%</td>
                    <td class="px-4 py-3 text-gray-600">&#8377;{{ number_format($value->totalv ?? 0) }}</td>
                    <td class="px-4 py-3 text-gray-500 text-xs">{{ $value->security ?? '-' }}</td>
                    <td class="px-4 py-3 text-gray-500 text-xs max-w-[100px] truncate" title="{{ $value->message }}">{{ $value->message ?? '-' }}</td>
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
                    <td class="px-4 py-3 text-xs text-gray-400">{{ Carbon::parse($value->created_at)->format('d M Y') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Pagination -->
<div class="mt-4">
    {{ $approved->links('vendor.pagination.tailwind') }}
</div>

<!-- Edit Modal -->
<div id="editModal" class="hidden fixed inset-0 z-50 flex items-center justify-center p-4">
    <div class="absolute inset-0 bg-black/40" onclick="closeEditModal()"></div>
    <div class="relative bg-white rounded-2xl shadow-2xl w-full max-w-3xl max-h-[85vh] overflow-y-auto">
        <!-- Modal Header -->
        <div class="sticky top-0 bg-white border-b border-gray-100 px-6 py-4 rounded-t-2xl flex items-center justify-between">
            <h3 class="text-lg font-bold text-gray-800">Edit Approved Lead</h3>
            <button onclick="closeEditModal()" class="w-8 h-8 rounded-lg bg-gray-100 flex items-center justify-center text-gray-500 hover:bg-gray-200">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <!-- Modal Body -->
        <form action="{{ route('admin.edit_approve_lead.submit') }}" method="POST" class="p-6">
            @csrf
            <input type="hidden" id="approve_lead-hidden" name="lead_id">
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <div>
                    <label class="text-xs font-medium text-gray-500 mb-1 block">Name</label>
                    <input type="text" name="name" id="approve_name" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all" placeholder="Name">
                </div>
                <div>
                    <label class="text-xs font-medium text-gray-500 mb-1 block">Email</label>
                    <input type="text" name="email" id="approve_email" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all" placeholder="Email">
                </div>
                <div>
                    <label class="text-xs font-medium text-gray-500 mb-1 block">Phone</label>
                    <input type="text" name="phone" id="approve_phone" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all" placeholder="Phone">
                </div>
                <div>
                    <label class="text-xs font-medium text-gray-500 mb-1 block">Loan Type</label>
                    <input type="text" name="loan_type" id="approve_loan_type" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all" placeholder="Loan Type">
                </div>
                <div>
                    <label class="text-xs font-medium text-gray-500 mb-1 block">Loan Amount</label>
                    <input type="text" name="loan_amount" id="approve_loan_amount" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all" placeholder="Loan Amount">
                </div>
                <div>
                    <label class="text-xs font-medium text-gray-500 mb-1 block">State</label>
                    <input type="text" name="state" id="approve_state" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all" placeholder="State">
                </div>
                <div>
                    <label class="text-xs font-medium text-gray-500 mb-1 block">UTOKEN</label>
                    <input type="text" name="UTOKEN" id="UTOKEN" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all" placeholder="UTOKEN">
                </div>
                <div>
                    <label class="text-xs font-medium text-gray-500 mb-1 block">Application No</label>
                    <input type="text" name="appno" id="appno" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all" placeholder="App Number">
                </div>
                <div>
                    <label class="text-xs font-medium text-gray-500 mb-1 block">Sanction Amount</label>
                    <input type="text" name="sanctionamt" id="sanctionamt" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all" placeholder="Sanction Amt">
                </div>
                <div>
                    <label class="text-xs font-medium text-gray-500 mb-1 block">EMI Amount</label>
                    <input type="text" name="emiamt" id="emiamt" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all" placeholder="EMI Amount">
                </div>
                <div>
                    <label class="text-xs font-medium text-gray-500 mb-1 block">Loan Tenure</label>
                    <input type="text" name="loant" id="loant" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all" placeholder="Tenure">
                </div>
                <div>
                    <label class="text-xs font-medium text-gray-500 mb-1 block">Rate of Interest</label>
                    <input type="text" name="roi" id="roi" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all" placeholder="ROI">
                </div>
                <div>
                    <label class="text-xs font-medium text-gray-500 mb-1 block">Processing Fee</label>
                    <input type="text" name="pf" id="pf" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all" placeholder="PF">
                </div>
                <div>
                    <label class="text-xs font-medium text-gray-500 mb-1 block">GST</label>
                    <input type="text" name="gst" id="gst" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all" placeholder="GST">
                </div>
                <div>
                    <label class="text-xs font-medium text-gray-500 mb-1 block">Total Amount</label>
                    <input type="text" name="totalv" id="totalv" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all" placeholder="Total">
                </div>
                <div>
                    <label class="text-xs font-medium text-gray-500 mb-1 block">Security</label>
                    <input type="text" name="security" id="security" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all" placeholder="Security">
                </div>
                <div>
                    <label class="text-xs font-medium text-gray-500 mb-1 block">Date</label>
                    <input type="text" name="dummy" id="dummy" value="{{ $currentDateTime->format('d-m-Y') }}" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all">
                </div>
                <div>
                    <label class="text-xs font-medium text-gray-500 mb-1 block">Aadhaar Number</label>
                    <input type="text" name="adhaar_number" id="adhaar_number" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all" placeholder="Aadhaar">
                </div>
                <div>
                    <label class="text-xs font-medium text-gray-500 mb-1 block">Message</label>
                    <input type="text" name="message" id="approve_message" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-200 focus:border-primary-400 outline-none transition-all" placeholder="Message">
                </div>
            </div>

            <!-- Modal Footer -->
            <div class="flex items-center justify-end gap-3 mt-6 pt-4 border-t border-gray-100">
                <button type="button" onclick="closeEditModal()" class="px-4 py-2 text-sm font-medium text-gray-600 bg-gray-100 rounded-lg hover:bg-gray-200 transition-colors">Cancel</button>
                <button type="submit" class="px-5 py-2 text-sm font-medium text-white bg-gradient-to-r from-primary-500 to-primary-600 rounded-lg hover:from-primary-600 hover:to-primary-700 shadow-sm transition-all">
                    <i class="fas fa-save mr-1"></i> Save Changes
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('script')
<script>
function closeEditModal() {
    document.getElementById('editModal').classList.add('hidden');
}

document.querySelectorAll('.approve_edit').forEach(btn => {
    btn.addEventListener('click', function() {
        const leadId = this.dataset.leadId;
        document.getElementById('editModal').classList.remove('hidden');
        
        fetch("{{ route('admin.edit_approve_lead') }}?leadId=" + leadId, {
            headers: { "X-CSRF-TOKEN": CSRF_TOKEN }
        })
        .then(res => res.json())
        .then(data => {
            document.getElementById('approve_lead-hidden').value = data.loan_request_id || leadId;
            document.getElementById('approve_name').value = data.name || '';
            document.getElementById('approve_email').value = data.email || '';
            document.getElementById('approve_phone').value = data.phone || '';
            document.getElementById('approve_loan_type').value = data.loan_type || '';
            document.getElementById('approve_loan_amount').value = data.loan_amount || '';
            document.getElementById('approve_state').value = data.state || '';
            document.getElementById('approve_message').value = data.message || '';
            document.getElementById('UTOKEN').value = data.lead_token || '';
            document.getElementById('appno').value = data.lead_token || '';
            document.getElementById('sanctionamt').value = data.sanctionamt || '';
            document.getElementById('emiamt').value = data.emiamt || '';
            document.getElementById('loant').value = data.loant || '';
            document.getElementById('roi').value = data.roi || '';
            document.getElementById('pf').value = data.pf || '';
            document.getElementById('gst').value = data.gst || '';
            document.getElementById('totalv').value = data.totalv || '';
            document.getElementById('security').value = data.security || '';
            document.getElementById('adhaar_number').value = data.adhaar_number || '';
        })
        .catch(() => alert('Failed to load lead data'));
    });
});
</script>
@endsection

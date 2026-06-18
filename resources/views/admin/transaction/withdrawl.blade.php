@extends('layout.admin.master')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Sr. no</th>
                            <th>User</th>
                            <th>Phone</th>
                            <th>Amount</th>
                            <th>Wallet Balance</th>
                            <th>Account No.</th>
                            <th>IFSC Code</th>
                            <th>Acc. Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($transactions as $index => $transaction)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <!-- <td>
                                <a href="#" target="_blank" class="btn ">
                                    <i class="ti-link"></i>
                                </a>
                            </td> -->
                            <td>
                                {{ $transaction->user->name ?? '-' }}
                            </td>
                            <td>
                                {{ $transaction->user->phone ?? '-' }}
                            </td>
                            <td>{{ $transaction->detail->amount ?? '-' }}</td>
                            <td>{{ $transaction->wallet->balance ?? '-' }}</td>
                            <td>{{ $transaction->wallet->account_number ?? '-' }}</td>
                            <td>{{ $transaction->wallet->ifsc_code ?? '-' }}</td>
                            <td>{{ $transaction->wallet->account_holder_name ?? '-' }}</td>
                            <td>
                                <form data-target="{{ route('admin.transaction.withdrawl.reject', $transaction->id) }}">
                                    <a data-target="{{ route('admin.transaction.withdrawl.accept', $transaction->id) }}" data-amount="{{ $transaction->detail->amount ?? '-' }}" class="withdrawlBalance  btn btn-dark btn-rounded btn-icon">
                                        <i class="ti-file"></i>
                                    </a>
                                    <button type="button" class="btn btn-danger btn-rounded btn-icon rejectRequest">
                                        <i class="ti-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
@if(session('success'))
<script>
    swal({
        text: "{{ session('success') }}",
        icon: 'success',
        timer: 5000,
        buttons: false,
    });
</script>
@endif

<script>
    $('.withdrawlBalance').click(function() {
        const target = $(this).data('target');
        const row = $(this).closest('tr');
        const amount = $(this).data('amount');

        let input = document.createElement("input");
        input.value = amount;
        input.type = 'text';
        input.className = 'swal-content__input';

        swal('', {
                content: input,
                text: 'Accept withdrawl of below amount',
                icon: 'info',
                buttons: ['Cancel', 'Accept']
            })
            .then((res) => {
                if (res) makeRequest(target, row, input.value)
            });
    });

    $('.rejectRequest').click(function() {
        const target = $(this).closest('form').data('target');
        const row = $(this).closest('tr');

        swal('', {
                text: 'Reject withdrawl request ',
                icon: 'warning',
                buttons: ['Cancel', 'Reject']
            })
            .then((res) => {
                if (res) makeRequest(target, row)
            });
    });



    function makeRequest(target, row, amount = false) {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': CSRF_TOKEN
            },
            url: target,
            data: {
                amount
            },
            type: 'POST',
            dataType: 'json',
            success: function(result) {
                if (!result.status) {
                    swal({
                        text: result.message,
                        icon: 'error',
                        timer: 3000,
                        buttons: false,
                    });
                    return;
                }
                row.remove();
                swal({
                    text: result.message,
                    icon: 'success',
                    timer: 3000,
                    buttons: false,
                });
            },
            error: function(result) {
                swal({
                    title: 'Something went wrong',
                    text: "Please try again later",
                    icon: 'error',
                    timer: 3000,
                    buttons: false,
                })
            }
        });
    }
</script>
@endsection
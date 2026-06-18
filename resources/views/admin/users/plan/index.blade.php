@extends('layout.admin.master')

@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card" style="padding: 20px;">
        <div class="card-body">
            <h4 class="card-title">User Information</h4>
            <p class="card-description">
                <!-- A simple suggestion engine -->
            </p>
            <div class="form-group row">
                <div class="col">
                    <label>Name</label>
                    <div id="bloodhound">
                        <h4>{{ $user->name ?? '' }}</h4>
                    </div>
                </div>
                <div class="col">
                    <label>Phone</label>
                    <div id="bloodhound">
                        <h4>{{ $user->phone ?? '' }}</h4>
                    </div>
                </div>

                <div class="col">
                    <label>Balance</label>
                    <div id="bloodhound">
                        <h4>${{ $wallet->balance ?? 0 }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Sr. no</th>
                            <th>Plan ID</th>
                            <th>Plan Name</th>
                            <th>Price</th>
                            <th>Qty</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($plans as $index => $plan)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $plan->plan_id }}</td>
                            <td>
                                {{ $plan->name ?? '-' }}
                            </td>
                            <td>${{ $plan->price ?? '-' }}</td>
                            <td>
                               x<b> {{ $plan->userPlans ?? '-' }}</b>
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
    $('.depositBalance').click(function() {
        const target = $(this).data('target');
        const row = $(this).closest('tr');
        const amount = $(this).data('amount');
        const transaction = $(this).data('transaction');

        let input = document.createElement("input");
        input.value = amount;
        input.type = 'text';
        input.className = 'swal-content__input';

        swal('', {
                content: input,
                text: 'Transaction id ' + transaction,
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
        const transaction = $(this).data('transaction');

        swal('', {
                text: 'Reject request for Transaction id ' + transaction,
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
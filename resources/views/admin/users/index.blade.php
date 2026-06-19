@extends('layout.admin.master')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <!-- <a href="{{ route('admin.plan.create') }}" class="btn btn-primary btn-rounded btn-fw">Create</a> -->
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Sr. no</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Balance</th>
                            <th>Plans</th>
                            <th>Network</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $index => $user)
                        <tr>
                            <td>{{ $index + 1 }}
                            </td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>${{ $user->with_wallet->balance ?? '0' }}</td>
                            <td>
                                <a href="{{ route('admin.user.plans', $user->id) }}" target="_blank" class="btn ">
                                    <i class="mdi mdi-format-list-checks"></i>
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('admin.user.network', $user->id) }}" target="_blank" class="btn ">
                                    <i class="mdi mdi-account-switch"></i>
                                </a>
                            </td>
                            <td>{{ $user->created_at }}</td>
                            <td>
                                <form action="{{ route('admin.plan.destroy', $user->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <!-- <a href="{{ route('admin.plan.edit', $user->id) }}" class="btn btn-dark btn-rounded btn-icon">
                                        <i class="ti-file"></i>
                                    </a> -->
                                    <button type="submit" class="btn btn-danger btn-rounded btn-icon">
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

@endsection
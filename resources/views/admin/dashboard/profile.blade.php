@extends('layout.admin.master')
@section('content')

<div class="col-md-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.profile') }}" method="POST" class="forms-sample">
                @csrf
                <div class="form-group">
                    <label for="exampleInputUsername1">Name</label>
                    <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Name" name="name" value="{{ $user->name }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email" value="{{ $user->email }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Number" name="phone" value="{{ $user->phone }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                </div>
                <div class="form-group">
                    <label for="exampleInputConfirmPassword1">Confirm Password</label>
                    <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password" name="confirm_password">
                </div>
                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
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

@if(session('error'))
<script>
    swal({
        text: "{{ session('error') }}",
        icon: 'error',
        timer: 5000,
        buttons: false,
    });
</script>
@endif


@endsection


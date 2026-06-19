@extends('layout.admin.master')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <a href="{{ route('admin.banner.create') }}" class="btn btn-primary btn-rounded btn-fw">Create</a>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Sr. no</th>
                            <th>Name</th>
                            <th>url</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($banners as $index => $banner)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $banner->name }}</td>
                            <td>
                                <a href="{{ $banner->url }}" target="_blank" class="btn ">
                                    <i class="ti-link"></i>
                                </a>
                            </td>
                            <td>
                                <img src="{{ $banner->image }}" class="img-fluid" alt="" width="200px">
                            </td>
                            <td>
                                @if(empty($banner->status))
                                <label class="badge badge-danger">Inactive</label>
                                @else
                                <label class="badge badge-success">Active</label>
                                @endif
                            </td>
                            <td>
                                <form action="{{ route('admin.banner.destroy', $banner->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <a href="{{ route('admin.banner.edit', $banner->id) }}" class="btn btn-dark btn-rounded btn-icon">
                                        <i class="ti-file"></i>
                                    </a>
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
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
                            <th>slug</th>
                            <th>description</th>
                            <th>image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $index => $category)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                                <a href="{{ $category->slug }}" target="_blank" class="btn ">
                                    <i class="ti-link"></i>
                                </a>
                            </td>
                            <td>
                                <img src="{{ $category->image }}" class="img-fluid" alt="" width="200px">
                            </td>
                            <td>
                                @if(empty($category->status))
                                <label class="badge badge-danger">Inactive</label>
                                @else
                                <label class="badge badge-success">Active</label>
                                @endif
                            </td>
                            <td>
                                <form action="{{ route('admin.category.destroy', $category->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-dark btn-rounded btn-icon">
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
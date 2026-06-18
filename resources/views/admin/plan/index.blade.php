@extends('layout.admin.master')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <a href="{{ route('admin.plan.create') }}" class="btn btn-primary btn-rounded btn-fw">Create</a>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Sr. no</th>
                            <th>Name</th>
                             <th>Image</th>
                             <th>Price</th>
                            <th>Image</th>
                             <th>Short Description</th>
                             <th>Description</th>
                          
                            <th>Status</th>
                           
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <tr>
                            <td>Jacob</td>
                            <td>Photoshop</td>
                            <td class="text-danger"> 28.76% <i class="ti-arrow-down"></i></td>
                            <td><label class="badge badge-danger">Pending</label></td>
                        </tr>
                        <tr>
                            <td>Messsy</td>
                            <td>Flash</td>
                            <td class="text-danger"> 21.06% <i class="ti-arrow-down"></i></td>
                            <td><label class="badge badge-warning">In progress</label></td>
                        </tr>
                        <tr>
                            <td>John</td>
                            <td>Premier</td>
                            <td class="text-danger"> 35.00% <i class="ti-arrow-down"></i></td>
                            <td><label class="badge badge-info">Fixed</label></td>
                        </tr>
                        <tr>
                            <td>Peter</td>
                            <td>After effects</td>
                            <td class="text-success"> 82.00% <i class="ti-arrow-up"></i></td>
                            <td><label class="badge badge-success">Completed</label></td>
                        </tr>
                        <tr>
                            <td>Dave</td>
                            <td>53275535</td>
                            <td class="text-success"> 98.05% <i class="ti-arrow-up"></i></td>
                            <td><label class="badge badge-warning">In progress</label></td>
                        </tr> -->
                        @foreach($plans as $index => $plan)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $plan->name }}</td>
                            <td>
                                <img src="{{ $plan->image }}" class="img-fluid" alt="" width="100px">
                            </td>
                          <td>$<b>{{ $plan->price }}</b></td>
                          <td><b>{!!$plan->description!!}</b></td>
                          <td><b>{!!$plan->short_description!!}</b></td>
                         
                           
                            <td>
                                @if(empty($plan->status))
                                <label class="badge badge-danger">Inactive</label>
                                @else
                                <label class="badge badge-success">Active</label>
                                @endif
                            </td>
                          
                            <td>
                                <form action="{{ route('admin.plan.destroy', $plan->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <a href="{{ route('admin.plan.edit', $plan->id) }}" class="btn btn-dark btn-rounded btn-icon">
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
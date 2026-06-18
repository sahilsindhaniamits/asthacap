@extends('layout.admin.master')

@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/basic.min.css">
@endsection



@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add Plan</h4>
            <!-- <p class="card-description">
                Basic form layout
            </p> -->
            <form class="forms-sample" action="{{ route('admin.plan.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Price</label>
                            <input type="number" class="form-control" name="price" placeholder="Price">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="exampleInputUsername1"> Max slots</label>
                            <input type="number" class="form-control" name="max_slots" placeholder="Max slots.." min="1" maxLength="10000000" value="10000000">
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="exampleInputUsername1"> Max slots for one user</label>
                            <input type="number" class="form-control" name="max_slot_for_one_user" min="1" maxLength="10000000" placeholder=" Max slots for one user" >
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Daily income</label>
                            <input type="number" class="form-control" name="daily_income" placeholder="Daily Income...">
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Complete Cycle</label>
                            <input type="number" class="form-control" name="complete_cycle" placeholder="Complete Cycle...">
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Total income</label>
                            <input type="number" class="form-control" name="total_income" placeholder="Total Income...">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 ">
                        <label>Image</label>
                        <input type="hidden" class="image" name="image">
                        <div class="dropzone  dropzone-file-area" >
                            <div class="dz-default dz-message">
                                <h3 class="sbold">Drop Images here to upload</h3>
                                <span>You can also click to open file browser</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label for="exampleInputUsername1">Description</label>
                    <textarea type="text" class="form-control" name="description" placeholder="Description..." style="min-height: 100px;"></textarea>
                </div>


                <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="status">
                        Active
                        <i class="input-helper"></i></label>
                </div>

                <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="is_locked">
                        Locked
                        <i class="input-helper"></i></label>
                </div>
                <button type="submit" class="btn btn-primary me-2">Create</button>
            </form>
        </div>
    </div>
</div>


@endsection


@section('script')
<script src="/js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"></script>
<script>
    const CSRF_TOKEN = '{{ csrf_token() }}';
</script>
<script>
    var images = new Dropzone(".dropzone", {
        url: "{{ route('admin.storage.upload', ['plan']) }}",
        autoProcessQueue: true,
        uploadMultiple: true,
        maxFilesize: 5,
        maxFiles: 3,
        acceptedFiles: ".jpeg,.jpg,.png,.gif",
    });
    images.on("sending", function(file, xhr, formData) {
        formData.append("_token", CSRF_TOKEN);
    });
    images.on("success", function(file, response) {
        if (response.status)
            $('.image').val(response.url)
    });
</script>
@endsection
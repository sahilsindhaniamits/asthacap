
@extends('layout.admin.master')

@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/basic.min.css">
@endsection


@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add Banner</h4>
            <!-- <p class="card-description">
                Basic form layout
            </p> -->
            <form class="forms-sample" action="{{ route('admin.banner.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-5 ">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-md-7 ">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Url</label>
                            <input type="text" class="form-control" name="url" placeholder="Url">
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

                <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="status">
                        Active
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
        url: "{{ route('admin.storage.upload', ['banner']) }}",
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
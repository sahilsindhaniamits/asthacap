@extends('layout.admin.master')

@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/basic.min.css">
@endsection



@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Settings</h4>
            <!-- <p class="card-description">
                Basic form layout
            </p> -->
            <form class="forms-sample" action="{{ route('admin.setting.create') }}" method="GET">
                @csrf
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Binance Address</label>
                            <input type="text" class="form-control" name="address" placeholder="Binance Address">
                        </div>
                    </div>
                  
                </div>

                <div class="row">
                    
                   
                </div>

             

                <div class="row">
                    <div class="col-md-12 ">
                       
                    </div>
                </div>




               
            
                <button type="submit" class="btn btn-primary me-2">Update</button>
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
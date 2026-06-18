@extends('layout.admin.master')

@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/basic.min.css">
@endsection


@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Sanction Letter</h4>
            <!-- <p class="card-description">
                Basic form layout
            </p> -->
            <form class="forms-sample" action="{{ route('admin.create.sanction_letter') }}" method="POST">
                @csrf
                <!--<div class="row">-->
                <!--    <div class="col-md-6 ">-->
                <!--        <div class="form-group">-->
                <!--            <label for="exampleInputUsername1">Name</label>-->
                <!--            <input type="text" class="form-control" name="name" placeholder="Name">-->
                <!--        </div>-->
                <!--    </div>-->
                <!--    <div class="col-md-6 ">-->
                <!--        <div class="form-group">-->
                <!--            <label for="exampleInputUsername1">Url</label>-->
                <!--            <input type="text" class="form-control" name="url" placeholder="Url">-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                  <div class="row">
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Sanction Amount</label>
                            <input type="text" class="form-control" name="sanctioned_amount" placeholder="sanctioned amount" value="{{$data['sanctionamt']}}" required>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Application Number</label>
                            <input type="text" class="form-control" name="lead_token" placeholder="Application Number" value="{{ $data['appno'] }}" required>
                        </div>
                    </div>
                </div>
                  <div class="row">
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Date</label>
                            <input type="date" class="form-control" name="date" placeholder="date" value="{{ $data['created_at'] }}" required>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Applicant Name</label>
                            <input type="text" class="form-control" name="applicant_name" placeholder="Applicant Name" value="{{ $data['name'] }}" required>
                        </div>
                    </div>
                </div>
                  <div class="row">
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Father name</label>
                            <input type="text" class="form-control" name="father_name" placeholder="Name" required>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Phone</label>
                            <input type="text" class="form-control" name="mobile" placeholder="phone" value="{{ $data['phone'] }}" required>
                        </div>
                    </div>
                </div>
              
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Loan Type</label>
                            <input type="text" class="form-control" name="loan_type" placeholder="Loan Type" value="{{ $data['loan_type'] }}" required>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="exampleInputUsername1">EMI</label>
                            <input type="text" class="form-control" name="emi" placeholder="EMI" value="{{ $data['emiamt'] }}" required>
                        </div>
                    </div>
                </div>
                   <div class="row">
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="exampleInputUsername1">EMI amount</label>
                            <input type="text" class="form-control" name="emi_amount" placeholder="EMI amount" value="{{ $data['emiamt'] }}" required>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Payee name</label>
                            <input type="text" class="form-control" name="payee_name" placeholder="Payee name" required>
                        </div>
                    </div>
                </div>
                
                 <div class="row">
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Bank name</label>
                            <input type="text" class="form-control" name="bank_number" placeholder="Bank name" required>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Account number</label>
                            <input type="text" class="form-control" name="account_number" placeholder="Account number" required>
                        </div>
                    </div>
                </div>
                
                  <div class="row">
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="exampleInputUsername1">IFSC </label>
                            <input type="text" class="form-control" name="ifsc" placeholder="IFSC" required>
                        </div>
                    </div>
                    
                     <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="exampleInputUsername1">ACCOUNT TYPE </label>
                            <input type="text" class="form-control" name="account_type" placeholder="Enter Account Type" required>
                        </div>
                    </div>
                 
                </div>
              
              
                <button type="submit" class="btn btn-primary me-2">Create</button>
            </form>
        </div>
    </div>
</div>
@if(session('success'))
<script>
    alert('Letter Created successfully😊');
</script>
              
                @endif

@endsection
@extends('layout.admin.master')

@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/basic.min.css">
@endsection


@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Sanction Letter</h4>
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
                            <input type="text" class="form-control" name="sanctioned_amount" placeholder="sanctioned amount" value="{{$data['sanctioned_amount']}}">
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Application Number</label>
                            <input type="text" class="form-control" name="lead_token" placeholder="Application Number" value="{{ $data['lead_token'] }}">
                        </div>
                    </div>
                </div>
                  <div class="row">
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Date</label>
                            <input type="date" class="form-control" name="date" placeholder="date" value="{{ $data['date'] }}">
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Applicant Name</label>
                            <input type="text" class="form-control" name="applicant_name" placeholder="Applicant Name" value="{{ $data['applicant_name'] }}">
                        </div>
                    </div>
                </div>
                  <div class="row">
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Father name</label>
                            <input type="text" class="form-control" name="father_name" placeholder="Name" value="{{ $data['father_name'] }}">
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Phone</label>
                            <input type="text" class="form-control" name="mobile" placeholder="phone" value="{{ $data['mobile'] }}">
                        </div>
                    </div>
                </div>
              
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Loan Type</label>
                            <input type="text" class="form-control" name="loan_type" placeholder="Loan Type" value="{{ $data['loan_type'] }}">
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="exampleInputUsername1">EMI</label>
                            <input type="text" class="form-control" name="emi" placeholder="EMI" value="{{ $data['emi_amount'] }}">
                        </div>
                    </div>
                </div>
                   <div class="row">
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="exampleInputUsername1">EMI amount</label>
                            <input type="text" class="form-control" name="emi_amount" placeholder="EMI amount" value="{{ $data['emi_amount'] }}">
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Payee name</label>
                            <input type="text" class="form-control" name="payee_name" placeholder="Payee name" value="{{ $data['payee_name'] }}">
                        </div>
                    </div>
                </div>
                
                 <div class="row">
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Bank name</label>
                            <input type="text" class="form-control" name="bank_number" placeholder="Bank name" value="{{ $data['bank_number'] }}">
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Account number</label>
                            <input type="text" class="form-control" name="account_number" placeholder="Account number" value="{{ $data['account_number'] }}">
                        </div>
                    </div>
                </div>
                
                  <div class="row">
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="exampleInputUsername1">IFSC </label>
                            <input type="text" class="form-control" name="ifsc" placeholder="IFSC"  value="{{ $data['ifsc'] }}">
                        </div>
                    </div>
                    
                      <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="exampleInputUsername1">ACCOUNT TYPE </label>
                            <input type="text" class="form-control" name="account_type" placeholder="Enter Account Type" value="{{ $data['account_type'] }}" required>
                        </div>
                    </div>
                 
                </div>
              
              
                <button type="submit" class="btn btn-primary me-2">Create</button>
            </form>
        </div>
    </div>
</div>


@endsection
@if(session('success'))
<script>
    alert('Letter Edited successfully😊');
</script>
              
                @endif


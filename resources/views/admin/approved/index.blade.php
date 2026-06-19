@extends('layout.admin.master')
<style>
    .enquiry_filtes{
        display:flex;
        flex-direction:column;
        widtH:100%;
        height:15%;
        justify-content:center;
        align-items:center;
        border-bottom:solid;
    }
    button{
        border:none;
        height:35px;
        background-color:#009ef7;
        color:#fff;
        font-weight:bold;
        
    }
 .popup_overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5); /* semi-transparent black background */
  display: none; /* hide the overlay by default */
  z-index:400;
}
 .popup_overlay_approve {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5); /* semi-transparent black background */
  display: none; /* hide the overlay by default */
  z-index:400;
}
 .login_popup{
      display:none;
      flex-direction:column;
      background:#fff;
      width:45%;
      height:80%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index:1000000000000;
      gap:0.3rem
  }
  .login_popup_aaprove{
      display:none;
      flex-direction:column;
      background:#fff;
      width:87%;
      height:71%;
      position: absolute;
      top: 40%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index:1000000000000;
      gap:3px
  }
  .form_row{
    display:flex;
    width:100%;
    height:67%;
    flex-wrap:wrap;
}
.form_main{
      display:flex;
      flex-direction:column;
      background:#fff;
      width:100%;
      height:100%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index:1000000000000;
      gap:0.3rem
    }
.loan_input{
    display: flex;
    width: 45%;
    height: 25%;
    margin-left: 1em;
}
.loan_input_approve{
    display: flex;
    width: 28%;
    height: 20%;
    margin-left: 1em;
}
input{
     height: 60%;
    width: 200%;
 }
</style>
@section('content')
 @php
    use Carbon\Carbon;
@endphp
@php
    $currentDateTime = Carbon::now();
@endphp
<div class="popup_overlay_approve">
           <div class="login_popup_aaprove">
               <div class="form_main">
               <h3>Edit Approved Lead</h3>
               <div class="form_row">
                   <form action="{{route('admin.edit_approve_lead.submit')}}" method="POST" class="form_row">
                       @csrf
         <input type="hidden" id="approve_lead-hidden" value="" name="lead_id">
          <div class="loan_input_approve">
              <input type="text" name="name" placeholder="name" id="approve_name" >
          </div>
             <div class="loan_input_approve">
              <input type="text" name="email" placeholder="email" id="approve_email">
          </div>
             <div class="loan_input_approve">
              <input type="text" name="phone" placeholder="Phone" id="approve_phone">
          </div>
             <div class="loan_input_approve">
              <input type="text" name="loan_type" placeholder="Loan type" id="approve_loan_type">
          </div>
             <div class="loan_input_approve">
              <input type="text" name="loan_amount" placeholder="Loan Amount" id="approve_loan_amount">
          </div>
            <div class="loan_input_approve">
              <input type="text" name="state" placeholder="Your State" id="approve_state">
          </div>
           <div class="loan_input_approve">
              <input type="text" name="UTOKEN" placeholder="UTOKEN" id="UTOKEN">
          </div>
           <div class="loan_input_approve">
              <input type="text" name="appno" placeholder="APPLICATION NUMBER" id="appno">
          </div>
          <div class="loan_input_approve">
              <input type="text" name="sanctionamt" placeholder="SANCTION AMT" id="sanctionamt">
          </div>
           <div class="loan_input_approve">
              <input type="text" name="emiamt" placeholder="EMI AMT" id="emiamt">
          </div>
           <div class="loan_input_approve">
              <input type="text" name="loant" placeholder="LOAN TENURE" id="loant">
          </div>
           <div class="loan_input_approve">
              <input type="text" name="roi" placeholder="RATE INTEREST" id="roi">
          </div>
          <div class="loan_input_approve">
              <input type="text" name="state" placeholder="APPROVED VALIDITY" id="appva">
          </div>
           <div class="loan_input_approve">
              <input type="text" name="pf" placeholder="PF" id="pf">
          </div>
          <div class="loan_input_approve">
              <input type="text" name="gst" placeholder="GST" id="gst">
          </div>
           <div class="loan_input_approve">
              <input type="text" name="totalv" placeholder="TOTAL AMT" id="totalv">
          </div>
           <div class="loan_input_approve">
              <input type="text" name="security" placeholder="SECURITY" id="security">
          </div>
           <div class="loan_input_approve">
              <input type="text" name="dummy" placeholder="DATE"  id="dummy" value="{{ $currentDateTime->format('d-m-Y') }}">
          </div>
              <div class="loan_input_approve">
              <input type="text" name="adhaar_number" placeholder="Adhhar Number"  id="adhaar_number">
          </div>
           <div class="loan_input_approve">
              <input type="text" name="message" placeholder="Message" id="approve_message">
          </div>
             <div class="loan_input" style="justify-content:space-between">
              <button type="Submit" class="submit_button" id="approve_request">Edit Lead</button>
             <button type="button" class="submit_button cancel" >Cancel</button>
          </div>
         </div>
        </form>
        
         </div>
         </div>
    
      </div>
      
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      
        <div class="card-body">
            <!--<a href="{{ route('admin.banner.create') }}" class="btn btn-primary btn-rounded btn-fw">Create</a>-->
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Action</th>
                            <th>Lead Id</th>
                            <th>Lead Token</th>
                            <th>Name</th>
                            <th>email</th>
                            <th>Mobile</th>
                            <th>Loan type</th>
                            <th>Loan amount</th>
                            <th>State</th>
                            <th>Info</th>
                            <th>Time-date</th>
                            <th>Approve</th>
                            <th>Approve date</th>
                            <th>Approve Amount</th>
                            <th>Status</th>
                            <th>Ip Address</th>
                            <th>UTOKEN</th>
                            <th>appno</th>
                            <th>sanctionamt</th>
                            <th>emiamt</th>
                            <th>loant</th>
                            <th>roi</th>
                            <th>appva</th>
                            <th>pf</th>
                            <th>gst</th>
                            <th>totalv</th>
                            <th>security</th>
                            <th>dummy</th>
                            <th>dummy1</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($approved as $index => $value)
                        <tr>
                            <td>
                                 <button type="button" class="approve_edit btn btn-outline-primary" data-lead-id="{{$value->loan_request_id}}" >Edit</button>
                                 <a href="{{ route('admin.view_pdf') }}?leadId={{ $value->loan_request_id }}">
                                 <button type="submit" class="approve btn btn-outline-info" >Download Pdf</button>
                                 </a>
                                 @if(is_null($value->sanction_letter_id))
                                  <a href="{{ route('admin.sanction_page') }}?leadId={{ $value->lead_token }}">
                                 <button type="submit" class="approve btn btn-outline-info" >Create Sanction </button>
                                 </a>
                                 @else
                                  <a href="{{ route('admin.edit_sanction_page') }}?SanctionletterId={{ $value->sanction_letter_id }}">
                                 <button type="submit" class="approve btn btn-outline-info" >Edit Sanction Letter </button>
                                 </a>
                                 @endif
                                  @if(is_null($value->sanction_letter_id))
                                   <button type="submit" class="approve btn btn-outline-info" >No Sanction Letter </button>
                                @else
                                  <a href="{{ route('admin.print_sanction_page') }}?sanction_letter_id={{ $value->sanction_letter_id }}">
                                 <button type="submit" class="approve btn btn-outline-info" >Download Sanction </button>
                                 </a>
                               
                                @endif
                            
                            </td>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $value->lead_token}}</td>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->email }}</td>
                            <td>{{ $value->phone }}</td>
                            <td>{{ $value->loan_type }}</td>
                            <td>{{ $value->loan_amount }}</td>
                            <td>{{ $value->state }}</td>
                            <td>{{ $value->message }}</td>
                            <td>{{ $value->created_at }}</td>
                            <td>{{ $value->status }}</td>
                             @if($value->status==1)
                            <td>{{ $value->updated_at }}</td>
                            @else
                             <td>Not Approved yet</td>
                            @endif
                            @if($value->status==1)
                            <td>{{ $value->loan_amount }}</td>
                            @else
                              <td>0</td>
                            @endif
                            <td>{{ $value->status }}</td>
                            <td>{{ $value->ip_address }}</td>
                            <td>{{ $value->UTOKEN }}</td>
                            <td>{{ $value->appno }}</td>
                            <td>{{ $value->sanctionamt }}</td>
                            <td>{{ $value->emiamt }}</td>
                            <td>{{ $value->loant }}</td>
                            <td>{{ $value->roi }}</td>
                            <td>{{ $value->appva }}</td>
                            <td>{{ $value->pf }}</td>
                            <td>{{ $value->gst }}</td>
                            <td>{{ $value->totalv }}</td>
                            <td>{{ $value->security }}</td>
                            <td>{{ $value->dummy }}</td>
                            <td>{{ $value->dummy1 }}</td>
                           
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

 <script>
     $(document).ready(function(){
     $('.approve_edit').click(function(){
    
     var leadId = $(this).data('lead-id');
     var leadhidden = $('#approve_lead-hidden');
    var leadName = $('#approve_name');
    var leadEmail = $('#approve_email');     
    var phone = $('#approve_phone');     
    var loan_type=  $('#approve_loan_type');  
    var loan_amount=  $('#approve_loan_amount');  
    var state=  $('#approve_state');  
    var message=  $('#approve_message'); 
   
    var utoken=  $('#UTOKEN');
    var appno = $('#appno');
    var appva=  $('#appva'); 
    var gst=  $('#gst'); 
    var pf=  $('#pf'); 
    var totalv=  $('#totalv'); 
    var emi=  $('#emiamt'); 
    var loant=  $('#loant'); 
    var sanctionamt=  $('#sanctionamt'); 
    var roi=  $('#roi'); 
    var totalv=  $('#totalv');   
    var security=  $('#security');   
    var dummy=  $('#dummy');   
    var dummy1=  $('#dummy1');  
    var adhaar_number = $('#adhaar_number')
      $('.navbar').css('z-index', '-1');
       $('.login_popup_aaprove').show();
       $('.popup_overlay_approve').show();
       
   
   
     $.ajax({
     headers: {
    "X-CSRF-TOKEN": "{{csrf_token()}}"
    },
    url: "{{ route('admin.edit_approve_lead') }}",
    method: "GET",
    data: {leadId},
    success: function(response) {
      
      leadhidden.val(leadId); 
      leadName.val(response.name);
      leadEmail.val(response.email);
      phone.val(response.phone);
      loan_type.val(response.loan_type);
      loan_amount.val(response.loan_amount);
      state.val(response.state);
      message.val(response.message);
      utoken.val(response.lead_token);
      appno.val(response.lead_token);
      gst.val(response.gst);
      pf.val(response.pf);
      totalv.val(response.totalv);
      emi.val(response.emiamt);
      loant.val(response.loant);
      sanctionamt.val(response.sanctionamt);
      roi.val(response.roi);
        leadhidden.val(response.loan_request_id);
    adhaar_number.val(response.adhaar_number);
     
      dummy.val(response.dummy);
      dummy1.val(response.dummy1);
        message.val(response.message);
      
      
    },
    error: function(response) {
               swal({
                        text: ' Request Failed,Contact To Developer',
                        icon: 'error',
                        buttons: false,
                        timer: 5000
                    });
    }
  });
   
   $('.navbar').css('z-index', '100');
   
     
       
       $('.cancel').click(function(){
      $('.navbar').css('z-index', '100');
      $('.login_popup_aaprove').hide();
      $('.popup_overlay_approve').hide();// Replace .popup with the class or ID of your popup
  });
       
   
  });
      
  });
    </script>
   

@endsection
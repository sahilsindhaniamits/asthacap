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
.delete{
    margin-top:3px;
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
 <div class="popup_overlay">
           <div class="login_popup">
               <div class="form_main">
               <h3>Apply for loan online</h3>
               <div class="form_row">
         <input type="hidden" id="lead-hidden" value="" name="lead_id">
          <div class="loan_input">
              <input type="text" name="name" placeholder="name" id="name">
          </div>
             <div class="loan_input">
              <input type="text" name="email" placeholder="email" id="email">
          </div>
             <div class="loan_input">
              <input type="text" name="phone" placeholder="Phone" id="phone">
          </div>
             <div class="loan_input">
              <input type="text" name="loan_type" placeholder="Loan type" id="loan_type">
          </div>
             <div class="loan_input">
              <input type="text" name="loan_amount" placeholder="Loan Amount" id="loan_amount">
          </div>
            <div class="loan_input">
              <input type="text" name="state" placeholder="Your State" id="state">
          </div>
          
             <div class="loan_input" style="width:90%;
             height:40%" >
              <textarea  name="message" placeholder="Message" style="width:100%;
             height:60%" id="message"></textarea>
          </div>
        
         </div>
         <div class="submit">
           <button type="button" class="submit_button" id="request">Send Request</button>
            <button  class="cancel" >Cancel</button>
          </div>
         </div>
         </div>
    
      </div>
<div class="popup_overlay_approve">
           <div class="login_popup_aaprove">
               <div class="form_main">
               <h3>Approve Selected  lead</h3>
               <div class="form_row">
         <input type="hidden" id="approve_lead-hidden" value="" name="lead_id">
          <div class="loan_input_approve">
              <input type="text" name="name" placeholder="NAME" id="approve_name" >
          </div>
             <div class="loan_input_approve">
              <input type="text" name="email" placeholder="EMAIL" id="approve_email">
          </div>
             <div class="loan_input_approve">
              <input type="text" name="phone" placeholder="PHONE" id="approve_phone">
          </div>
             <div class="loan_input_approve">
              <input type="text" name="loan_type" placeholder="LOAN TYPE" id="approve_loan_type">
          </div>
             <div class="loan_input_approve">
              <input type="text" name="loan_amount" placeholder="LOAN AMOUNT" id="approve_loan_amount">
          </div>
            <div class="loan_input_approve">
              <input type="text" name="state" placeholder="STATE" id="approve_state">
          </div>
           <div class="loan_input_approve">
              <input type="text" name="state" placeholder="UTOKEN" id="UTOKEN">
          </div>
           <div class="loan_input_approve">
              <input type="text" name="state" placeholder="APPLICATION NUMBER" id="appno">
          </div>
          <div class="loan_input_approve">
              <input type="text" name="state" placeholder="SANCTION AMT" id="sanctionamt">
          </div>
           <div class="loan_input_approve">
              <input type="text" name="state" placeholder="EMI AMT" id="emiamt">
          </div>
           <div class="loan_input_approve">
              <input type="text" name="state" placeholder="LOAN TENURE" id="loant">
          </div>
           <div class="loan_input_approve">
              <input type="text" name="state" placeholder="RATE INTEREST" id="roi">
          </div>
           <div class="loan_input_approve">
              <input type="text" name="state" placeholder="PF" id="pf">
          </div>
          <div class="loan_input_approve">
              <input type="text" name="state" placeholder="GST" id="gst">
          </div>
           <div class="loan_input_approve">
              <input type="text" name="state" placeholder="TOTAL" id="totalv">
          </div>
           <div class="loan_input_approve">
              <input type="text" name="state" placeholder="SECURITY" id="security">
          </div>
           <div class="loan_input_approve">
              <input type="text" name="dummy" placeholder="DATE" id="dummy" value="{{ $currentDateTime->format('d-m-Y') }}">
          </div>
          
          <div class="loan_input_approve">
              <input type="number" name="adhaar_number" placeholder="Enter Aadhaar" id="adhaar_number" >
          </div>
           <div class="loan_input_approve">
            <textarea  name="message" placeholder="Message" style="width:100%;
             height:70%" id="approve_message"></textarea>
            </div>
             <div class="loan_input_approve" style="justify-content:space-between">
           <button type="button" class="submit_button"  id="approve_request">Approve Lead</button>
             <button  class="cancel_approve" >Cancel</button>
          </div>
         </div>
        
         </div>
         </div>
    
      </div>
      
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="excel">
            <a href="{{ route('admin.export_excel') }}" ><button>Export Excel</button></a>
        </div>
      
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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($requests as $index => $value)
                        <td>
                              @if($value->status==0)
                            <button class="approve" data-lead-id="{{ $value->id }}">Approve</button>
                              @else
                               <button class="approve" data-lead-id="{{ $value->id }}" style="display:none">Approved</button>
                              @endif
                              
                            <button class="edit" data-lead-id="{{ $value->id }}">edit</button>
                           <form class="delete" action="{{route('admin.lead_delete')}}" method="POST">
                               @csrf
                           <input type="hidden" name="lead_id" value="{{ $value->id }}">
                           <button type="submit">delete</button>
                            </form>
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

    $(document).ready(function() {
        $('.enquiry_new').on('change', function() {
            var enquiry_id = $(this).prev('.enquiry_id').val();
            var status = $('.enquiry_new').val();

            $.ajax({
                type: 'POST',
                url: '{{ route('admin.enquiry_status') }}',
                data: {
                    '_token': '{{ csrf_token() }}',
                    'enquiry_id': enquiry_id,
                    'enquiry_status': status
                },
                success: function(response) {
                    if (response.status) {
                         alert('Enquiry status Updated');
                        
                    } 
                },
                error: function() {
                    alert('Unable to update status');
                }
            });
        });
    });
</script>
 <script>
     $(document).ready(function(){
     $('.edit').click(function(){
    var leadId = $(this).data('lead-id');
    var leadName = $('#name');
    var leadEmail = $('#email');     
    var phone = $('#phone');     
    var loan_type=  $('#loan_type');  
    var loan_amount=  $('#loan_amount');  
    var state=  $('#state');  
    var message=  $('#message'); 
    var leadhidden=  $('#lead-hidden'); 
    
       $('.navbar').css('z-index', '-1');
       $('.login_popup').show();
       $('.popup_overlay').show();
    
     $.ajax({
     headers: {
    "X-CSRF-TOKEN": "{{csrf_token()}}"
    },
    url:'loan-request/' + leadId + '/details',
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
    },
    error: function(response) {
       swal({
                        text: ' Request Failed<Contact To Developer',
                        icon: 'error',
                        buttons: false,
                        timer: 5000
                    });
    }
  });
       $('.navbar').css('z-index', '100');
     
    // Replace .popup with the class or ID of your popup
  });
      $('.cancel').click(function(){
       $('.navbar').css('z-index', '100');
      $('.login_popup').hide();
      $('.popup_overlay').hide();// Replace .popup with the class or ID of your popup
  });
});
    </script>
    <script>
     $(document).ready(function(){
     $('#request').click(function(){
    var leadId = $('#lead-hidden').val();
    var leadName = $('#name').val();
    var leadEmail = $('#email').val();     
    var phone = $('#phone').val();     
    var loan_type=  $('#loan_type').val();  
    var loan_amount=  $('#loan_amount').val();  
    var state=  $('#state').val();  
    var message=  $('#message').val(); 
    var leadhidden=  $('#lead-hidden').val(); 
     $.ajax({
     headers: {
    "X-CSRF-TOKEN": "{{csrf_token()}}"
    },
    url:'loan-request/edit',
    method: "POST",
    data: {leadId,leadName,leadEmail,phone,loan_type,loan_amount,state,message,leadhidden},
    success: function(response) {
       swal({
                        text: 'Lead Edited Successfully',
                        icon: 'success',
                        buttons: false,
                        timer: 5000
                    });
    },
    error: function(response) {
       swal({
                        text: ' Request Failed<Contact To Developer',
                        icon: 'error',
                        buttons: false,
                        timer: 2000
                    });
    }
  });
       $('.login_popup').hide();
      $('.popup_overlay').hide();
      
   
  });
      
});
    </script>
    
<script>
//ajax request to delete lead
     $(document).ready(function(){
     $('#delete').click(function(){
    
      
     var leadId = $(this).data('lead-id');
     console.log(leadId);
   
   
     $.ajax({
     headers: {
    "X-CSRF-TOKEN": "{{csrf_token()}}"
    },
    url:'loan-request/delete',
    method: "POST",
    data: {leadId},
   
    success: function(response) {
       swal({
                        text: ' Lead Successfully Deleted',
                        icon: 'success',
                        buttons: false,
                        timer: 5000
                    });
    }
     error: function(response) {
       swal({
                        text: ' Request Failed,Contact To Developer',
                        icon: 'error',
                        buttons: false,
                        timer: 5000
                    });
    }
    
  });
     });
});
    </script>
    <script>
//ajax request to delete lead
     $(document).ready(function(){
     $('.approve').click(function(){
        var leadId = $(this).data('lead-id');
    var leadName = $('#approve_name');
    var leadEmail = $('#approve_email');     
    var phone = $('#approve_phone');     
    var loan_type=  $('#approve_loan_type');  
    var loan_amount=  $('#approve_loan_amount');  
    var state=  $('#approve_state');  
    var message=  $('#approve_message'); 
    var leadhidden=  $('#approve_lead-hidden'); 
     var utoken=  $('#UTOKEN');
     var adhaar=  $('#adhaar_number');
       var app=  $('#appno');
     
     
     $('.navbar').css('z-index', '-1');
     $('.login_popup_aaprove').show();
     $('.popup_overlay_approve').show();
     
     $.ajax({
     headers: {
    "X-CSRF-TOKEN": "{{csrf_token()}}"
    },
     url:'loan-request/' + leadId + '/details',
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
       adhaar.val(response.adhaar);
       app.val(response.lead_token);
      
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
       
    // Replace .popup with the class or ID of your popup
  });
      $('.cancel_approve').click(function(){
       
       $('.navbar').css('z-index', '100');
      $('.login_popup').hide();
      $('.popup_overlay_approve').hide();// Replace .popup with the class or ID of your popup
           location.reload();
  });
     });
z
    </script>
    <script>
//ajax request to approve lead
     $(document).ready(function(){
     $('#approve_request').click(function(){
    var leadhidden=  $('#approve_lead-hidden').val(); 
    var leadName = $('#approve_name').val();
    var leadEmail = $('#approve_email').val();     
    var phone = $('#approve_phone').val();     
    var loan_type=  $('#approve_loan_type').val();  
    var loan_amount=  $('#approve_loan_amount').val();  
    var state=  $('#approve_state').val();  
    var message=  $('#approve_message').val(); 
    var UTOKEN=  $('#UTOKEN').val(); 
    var appno=  $('#appno').val(); 
    var sanctionamt=  $('#sanctionamt').val(); 
    var emiamt=  $('#emiamt').val(); 
    var loant=  $('#loant').val(); 
    var roi=  $('#roi').val(); 
    var appva=  $('#appva').val(); 
    var pf=  $('#pf').val(); 
    var gst=  $('#gst').val(); 
    var totalv=  $('#totalv').val(); 
    var security=  $('#security').val(); 
    var dummy=  $('#dummy').val(); 
    var dummy1=  $('#dummy1').val(); 
    var adhaar_number=  $('#adhaar_number').val(); 
   
     $.ajax({
     headers: {
    "X-CSRF-TOKEN": "{{csrf_token()}}"
    },
    url:'loan-request/approve',
    method: "POST",
    data: {leadhidden,leadName,leadEmail,phone,loan_type,loan_amount,state,message,UTOKEN,appno,sanctionamt,emiamt,loant,roi,appva,pf,gst,totalv,security,dummy,dummy1,adhaar_number},
    success: function(response) {
        alert('Lead Approved Successfully✅')
    //   swal({
    //                     text: 'Lead Approved Successfully',
    //                     icon: 'success',
    //                     buttons: false,
    //                     timer: 5000
    //                 });
                    
      setTimeout(function () {
        location.reload();
    }, 2000);
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
      $('.login_popup').hide();
      $('.popup_overlay_approve').hide();// Replace .popup with the class or ID of your popup
     });
});
    </script>
  
        @if(session('delete_success'))
          <script>
         alert('lead deleted successfuly');
        </script>
      @endif

    
   
@endsection
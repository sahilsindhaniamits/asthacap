<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Loan Approval Letter</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      padding: 40px;
    }
    h2 {
      text-transform: uppercase;
      color: #333;
    }
    .table th {
      width: 40%;
    }
    .signature-space {
      height: 60px;
      border-bottom: 1px solid #ccc;
      margin-top: 10px;
      margin-bottom: 30px;
    }
    .image-placeholder {
      height: 100px;
      background: #e9ecef;
      border: 1px dashed #adb5bd;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #6c757d;
      margin-bottom: 20px;
    }
    .table-bordered-bold, 
    .table-bordered-bold th, 
    .table-bordered-bold td {
      border: 2px solid #000 !important;
    }
  </style>
</head>
<body>

  <div class="container bg-white p-5 shadow rounded">
    
    <!-- Logo Placeholder -->
    <div class="image-placeholder mb-4">
      Company Logo
    </div>

    <h2 class="text-center mb-4 fw-bold text-decoration-underline">Loan Approval Letter</h2>


    <!-- <div class="mb-4">
      <p><strong>Loan Type:</strong> XXXX</p>
      <p><strong>Sanction Amount:</strong> XXXX</p>
      <p><strong>Monthly EMI:</strong> XXXX</p>
      <p><strong>Loan Tenure:</strong> XXXX</p>
      <p><strong>Rate of Interest (Yearly):</strong> XXXX</p>
      <p><strong>Approval Letter Validity:</strong> XXXX</p>
      <p><strong>Aadhaar Number:</strong> XXXX</p>
      <p><strong>Total Non-Refundable Charges (Inc. GST):</strong> XXXX</p>
    </div> -->
   
    <div class = "row d-flex">
      <div class = "col-4">
      <div class="mb-4">
        <p><strong>To:</strong></p>
        <p>NAME&nsp;-nsp;{{$details->name}}<br>NUMBER<br>APPLICATION NUMBER-{{$details->lead_token}}</p>
      </div>
     </div>

    </div>
   
   
    <div class="mb-4">
     <b> <p>Dear Sir/Madam,</p></b>
      <p>We are delighted to inform you that your loan application has been successfully approved by Sun
        Life Finance. After conducting a comprehensive evaluation of your application, including a
        detailed assessment of your financial profile, credit history, and overall eligibility, we are confident
        in your ability to manage and repay the approved loan amount..</p>
    </div>

   

    <div class="mb-4">
      <table  class="table table-bordered table-bordered-bold mb-2">
        <tr><th class="text-center">Application Details</th>
        </table>
      <table  class="table table-bordered table-bordered-bold mb-2">
        <tr><th class="text-center">LOAN TYPE</th><td class="text-center">{{$details->loan_type}}</td></tr>
        <tr><th class="text-center">SANCTION AMOUNT</th><td class="text-center">  Rs.{{$approved->sanctionamt}}/-</td></tr>
        <tr><th class="text-center">EMI</th><td class="text-center">₹{{$approved->emiamt}}</td></tr>
        <tr><th class="text-center">LOAN TENURE</th><td class="text-center">{{$approved->loant}} Year</td></tr>
        <tr><th class="text-center">RATE OF INTEREST</th><td class="text-center">{{$approved->roi}} % P.A.</td></tr>
        <!--<tr><th class="text-center">APPRVAL LETTER VALIDITY</th><td class="text-center">XXXX</td></tr>-->
        <!-- <tr><th class="text-center">AADHAR NUMBER</th><td class="text-center">XXXX</td></tr>-->
      </table>
    </div>

    <div class="mb-4">
      <h5 class="mb-3">Primary Terms and Conditions</h5>
      <ul>
        <li>Loan repayment is on a monthly installment basis, with applicable interest.</li>
        <li>Applicant bears legal/file charges, property verification, mortgage deed costs, etc. (non-refundable).</li>
        <li>2% per day late charge on any outstanding EMI.</li>
        <li>Submit all documentation within 15 days from approval date or file will be canceled.</li>
        <li>Loan sanctioned up to 70% of market value of mortgage property.</li>
        <li>Company reserves right to suspend/cancel any request.</li>
        <li>No acceptance of returned, disputed, unauthorized, or fraudulent transactions.</li>
        <li>Disputes under Rajasthan court jurisdiction only.</li>
      </ul>
    </div>
    

   

    <p class="text-muted"><strong>Sanction Letter Validity:</strong> Valid for 10 days from the date of issuance.</p>

    <div class="mb-4">
      <p>For queries, contact: <a href="mailto:contact@sunlifefinance.org.in">contact@sunlifefinance.org.in</a></p>
    </div>

    <!-- Signatures -->
    <div class="row">
      <div class="col-md-6">
        <p><strong>Verified By:</strong></p>
        <div class="signature-space"></div>
        <div class="image-placeholder">Signature Image</div>
      </div>
      <div class="col-md-6">
        <p><strong>Applicant Signature & Date:</strong></p>
        <div class="signature-space"></div>
        <div class="image-placeholder">Signature Image</div>
      </div>
    </div>

    <div class="mt-4">
      <p><strong>Declaration:</strong> I accept and have read the loan terms & conditions.</p>
    </div>

  </div>

</body>
</html>

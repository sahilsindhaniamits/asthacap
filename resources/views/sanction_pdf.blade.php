<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Loan Sanction Letter</title>

<style>
@page {
  size: A4;
  margin: 0;
}

* { box-sizing: border-box; }

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background: #fff;
  color: #000;
}

/* Print Button */
.print-btn {
  position: fixed;
  top: 12px;
  right: 18px;
  padding: 7px 12px;
  background: #1f2a8c;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  z-index: 9999;
}
@media print {
  .print-btn { display: none; }
}

/* Header & Footer */
.header,
.footer {
  position: fixed;
  left: 0;
  width: 100%;
}
.header { top: 0; }
.footer { bottom: 0; }

.header img,
.footer img {
  width: 100%;
  display: block;
}

/* Heading */
.letter-heading {
  position: fixed;
  top: 200px;
  width: 100%;
  text-align: center;
  font-size: 18px;
  font-weight: 700;
  text-decoration: underline;
}

/* Page */
.page {
  width: 794px;
  height: 1123px;
  margin: auto;
  padding: 230px 55px 190px 55px;
}

/* Layout */
.row {
  display: flex;
  justify-content: space-between;
}
.left { width: 65%; }
.right { width: 30%; text-align: right; }

/* Text */
p {
  font-size: 15px;
  line-height: 1.25;
  margin: 5px 0;
}
.bold { font-weight: 700; }

/* Section title */
.section-title {
  font-weight: 700;
  margin-top: 14px;
  margin-bottom: 6px;
}

/* Lists */
ul {
  padding-left: 18px;
  margin: 6px 0 12px;
}
ul li {
  font-size: 14px;
  margin-bottom: 4px;
}

/* Table */
.table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 10px;
}
.table th,
.table td {
  border: 1px solid #000;
  padding: 7px;
  font-size: 14px;
}
.table th {
  text-align: center;
  background: #f2f2f2;
}
/* Tighten terms section so it doesn't hit footer */
.section-title {
  margin-top: 10px;
}

ul li {
  margin-bottom: 2px;
  line-height: 1.15;
}

</style>
</head>

<body>

<button class="print-btn" onclick="window.print()">Print / Save PDF</button>

<!-- HEADER (same as approval letter) -->
<div class="header">
  <img src="{{ asset('images/uppfi.jpg') }}" alt="Header">
</div>

<!-- HEADING -->
<div class="letter-heading">
  Loan Sanction Letter
</div>

<!-- FOOTER (same as approval letter) -->
<div class="footer">
  <img src="{{ asset('images/newdown.png') }}" alt="Footer">
</div>

<div class="page">

<!-- TOP DETAILS -->
<div class="row">
  <div class="left">
    <p class="bold">To:</p>
    <p><span class="bold">NAME :</span> {{ $obj->applicant_name }}</p>
    <p><span class="bold">S/O :</span> {{ $obj->father_name }}</p>
    <p><span class="bold">NUMBER :</span> +91 {{ $obj->mobile }}</p>
    <p><span class="bold">APPLICATION NO. :</span> {{ $obj->lead_token }}</p>
  </div>

  <div class="right">
    <p><span class="bold">Date :</span> {{ $obj->new_format }}</p>
  </div>
</div>

<p class="bold" style="margin-top:7px;">Dear Sir/Madam,</p>

<p>
We are pleased to inform you that based on your loan application and the
information provided by you, Prime Finance India has sanctioned your loan
subject to the terms and conditions mentioned below.
</p>

<!-- SANCTION DETAILS -->
<div class="section-title">Sanctioned Loan Details</div>
<ul>
  <li><b>Sanctioned Loan Amount :</b> ₹ {{ $obj->sanctioned_amount }}</li>
  <li><b>Type of Loan :</b> {{ $obj->loan_type }}</li>
  <li><b>Loan Tenure :</b> {{ $obj->loan_tenure ?? 'As per agreement' }}</li>
  <li><b>Rate of Interest :</b> {{ $obj->interest_rate ?? 'As applicable' }}</li>
  <li><b>EMI Amount :</b> ₹ {{ $obj->emi_amount }}</li>
</ul>

<p class="bold">
As per Terms & Conditions we request you to please submit your two EMI
₹{{ $obj->emi_amount }} + ₹{{ $obj->emi_amount }} in advance.
We have in-Principle sanctioned you a loan facility.
</p>

<!-- BANK DETAILS -->
<table class="table">
  <tr>
    <th colspan="2">BANK DETAILS</th>
  </tr>
  <tr>
    <td><b>Account Holder Name</b></td>
    <td>{{ $obj->payee_name }}</td>
  </tr>
  <tr>
    <td><b>Account Type</b></td>
    <td>{{ $obj->account_type }}</td>
  </tr>
  <tr>
    <td><b>Bank Name</b></td>
    <td>{{ $obj->bank_number }}</td>
  </tr>
  <tr>
    <td><b>Account Number</b></td>
    <td>{{ $obj->account_number }}</td>
  </tr>
  <tr>
    <td><b>IFSC Code</b></td>
    <td>{{ $obj->ifsc }}</td>
  </tr>
</table>

<!-- TERMS -->
<div class="section-title">Primary Terms and Conditions</div>
<ul>
  <li>Loan repayment is on a monthly installment basis, with applicable interest.</li>
  <li>Applicant bears legal/file charges, property verification, mortgage deed costs, etc. (non-refundable).</li>
  <li>2% per day late charge on any outstanding EMI.</li>
  <li>Submit all documentation within 15 days from approval date or file will be canceled.</li>
  <li>Loan sanctioned up to 70% of market value of mortgage property.</li>
  <li>Company reserves right to suspend/cancel any request.</li>
  <li>No acceptance of returned, disputed, unauthorized or fraudulent transactions.</li>
  <li>Disputes under Rajasthan court jurisdiction only.</li>
</ul>



</div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Loan Approval Letter</title>

<style>
@page {
  size: A4;
  margin: 0;
}

* {
  box-sizing: border-box;
}

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

/* 🔥 HEADING UNDER HEADER IMAGE (KEY FIX) */
.letter-heading {
  position: fixed;
  top: 200px; /* must be BELOW header image */
  left: 0;
  width: 100%;
  text-align: center;
  font-size: 18px;
  font-weight: 700;
  text-decoration: underline;
  padding: 6px 0;
  z-index: 5;
}

/* Page Content */
.page {
  width: 794px;
  height: 1123px;
  margin: auto;
  padding: 185px 55px 145px 55px; /* starts AFTER heading */
}

/* Layout */
.row {
  display: flex;
  justify-content: space-between;
  margin-top: 50px;
}

.left { width: 65%;  }
.right { width: 30%; text-align: right; }

/* Text */
p {
  font-size: 15px;
  line-height: 1.2;
  margin: 6px 0;
}

.bold {
  font-weight: 700;
}

/* Sections */
.section-title {
  font-weight: 700;
  margin-top: 16px;
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

/* Note */
.note-text {
  font-size: 18px;
  font-weight: 700;
  color: #4f55d4;
  margin: 12px 0 14px;
  line-height: 1.3;
}
</style>
</head>

<body>

<button class="print-btn" onclick="window.print()">Print / Save PDF</button>

<!-- HEADER IMAGE -->
<div class="header">
  <img src="{{ asset('images/uppfi.jpg') }}" alt="Header">
</div>

<!-- ✅ HEADING EXACTLY UNDER HEADER IMAGE -->
<div class="letter-heading">
  Loan Approval Letter
</div>

<!-- FOOTER IMAGE -->
<div class="footer">
  <img src="{{ asset('images/newdown.png') }}" alt="Footer">
</div>

<div class="page">

<div class="row">
  <div class="left">
    <p class="bold">To:</p>
    <p><span class="bold">NAME :</span> {{ $details->name }}</p>
    <p><span class="bold">NUMBER :</span> +91 {{ $details->phone }}</p>
    <p><span class="bold">APPLICATION NO. :</span> {{ $details->lead_token }}</p>
    <p><span class="bold">AADHAAR NO. :</span> {{ $approved->adhaar_number }}</p>
    <p><span class="bold">SUBJECT :</span> Approval for {{ $details->loan_type }} Loan</p>
  </div>

  <div class="right">
    <p><span class="bold">Date :</span> {{ $approved->created_at->format('d-m-Y') }}</p>
  </div>
</div>

<p class="bold" style="margin-top:12px;">Dear Sir/Madam,</p>

<p>
We are pleased to inform you that your loan application submitted with
{{ $details->lead_token }} has been approved, subject to the terms and
conditions mentioned below.
</p>

<p class="bold" style="margin-top:12px;">
LOAN AMOUNT : ₹ {{ $approved->sanctionamt }}
</p>

<p><span class="bold">Loan Type :</span> {{ $details->loan_type }}</p>
<p><span class="bold">Loan Tenure :</span> {{ $approved->loant }} Year</p>
<p><span class="bold">Rate of Interest :</span> {{ $approved->roi }} % per annum (Reducing Rate)</p>
<p><span class="bold">EMI Amount :</span> ₹ {{ $approved->emiamt }}</p>

<p class="bold" style="margin-top:10px;">
Processing fee Rs. {{ $approved->totalv }}/- will be deducted directly from your
loan amount Rs. {{ $approved->sanctionamt }}/-. You don’t need to pay processing fee in advance.
</p>

<div class="section-title">Disbursement Details</div>
<ul>
  <li>The approved loan amount will be credited to your registered bank account after verification.</li>
  <li>Applicable charges will be deducted at the time of disbursement.</li>
  <!--<li><b>No advance payment is required from your side.</b></li>-->
</ul>

<p class="note-text">
Note:- Cash deposit not accepted by Company (Online Transaction required for
IMPS / NEFT / RTGS / Mobile Banking / Net Banking).
</p>

<div class="section-title">Primary Terms and Conditions</div>

<ul style="line-height: 1; font-size: 9px;">
  <li>Loan repayment is on a monthly installment basis.</li>
  <li>Legal / file charges are non-refundable.</li>
  <li>2% per day late charge on outstanding EMI.</li>
  <li>All documentation must be completed within 15 days.</li>
  <li>Loan sanctioned up to 70% of market value.</li>
  <li>Company reserves the right to cancel any request.</li>
  <li>Disputes subject to Rajasthan court jurisdiction only.</li>
</ul>


</div>
</body>
</html>

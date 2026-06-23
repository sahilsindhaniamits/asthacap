<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Loan Sanction Letter - Aastha Capital Finance</title>
<style>
@page { size: A4; margin: 0; }
* { box-sizing: border-box; margin: 0; padding: 0; }
body { font-family: 'Segoe UI', Arial, sans-serif; background: #fff; color: #222; font-size: 11px; line-height: 1.5; }

.print-btn { position: fixed; top: 12px; right: 18px; padding: 8px 18px; background: linear-gradient(135deg, #6366f1, #8b5cf6); color: #fff; border: none; border-radius: 6px; cursor: pointer; font-weight: 600; z-index: 9999; }
@media print { .print-btn { display: none; } }

.page { width: 794px; min-height: 1123px; margin: auto; position: relative; overflow: hidden; display: flex; flex-direction: column; }

/* Watermark */
.watermark { position: absolute; top: 42%; left: 50%; transform: translate(-50%, -50%); opacity: 0.05; z-index: 0; pointer-events: none; }
.watermark img { width: 400px; }

/* Top bar */
.top-bar { height: 6px; background: linear-gradient(90deg, #6366f1, #06b6d4, #8b5cf6); flex-shrink: 0; }

/* Header */
.header { padding: 16px 40px 12px; display: flex; align-items: center; justify-content: space-between; border-bottom: 3px solid; border-image: linear-gradient(90deg, #6366f1, #06b6d4, #8b5cf6) 1; flex-shrink: 0; }
.logo-area { display: flex; align-items: center; gap: 12px; }
.logo-area img { height: 50px; }
.company-info h1 { font-size: 18px; color: #1e1b4b; font-weight: 800; letter-spacing: 0.5px; }
.company-info p { font-size: 9.5px; color: #6366f1; font-style: italic; }
.ref-info { text-align: right; font-size: 9.5px; color: #555; }
.ref-info span { display: block; color: #1e1b4b; font-weight: 700; font-size: 10px; }

/* Content */
.content { padding: 14px 40px; position: relative; z-index: 1; flex: 1; display: flex; flex-direction: column; }

/* Title */
.letter-title { text-align: center; margin: 8px 0 12px; }
.letter-title h2 { font-size: 15px; color: #1e1b4b; display: inline-block; padding: 4px 22px; border: 2px solid #6366f1; border-radius: 4px; letter-spacing: 1px; }

/* Info */
.info-row { display: flex; justify-content: space-between; margin-bottom: 10px; }
.info-left p, .info-right p { margin: 2px 0; font-size: 10.5px; }
.info-left p span, .info-right p span { font-weight: 700; color: #1e1b4b; }

/* Body */
.body-text { margin: 6px 0; }
.body-text p { font-size: 10.5px; margin: 3px 0; }

/* Loan box */
.loan-box { background: #fafbff; border: 1px solid #d4d8f0; border-radius: 5px; padding: 10px 14px; margin: 8px 0; border-left: 4px solid #6366f1; }
.loan-box h3 { font-size: 12px; color: #6366f1; margin-bottom: 6px; font-weight: 700; }
.loan-box table { width: 100%; border-collapse: collapse; }
.loan-box table td { padding: 3px 0; font-size: 10.5px; border-bottom: 1px dotted #e5e7eb; }
.loan-box table tr:last-child td { border-bottom: none; }
.loan-box table td:first-child { font-weight: 600; color: #333; width: 35%; }
.loan-amount { font-size: 14px; font-weight: 800; color: #1e1b4b; }

/* Bank details table */
.bank-box { background: #f0fdf4; border: 1px solid #bbf7d0; border-radius: 5px; padding: 10px 14px; margin: 8px 0; border-left: 4px solid #10b981; }
.bank-box h3 { font-size: 12px; color: #059669; margin-bottom: 6px; font-weight: 700; }
.bank-box table { width: 100%; border-collapse: collapse; }
.bank-box table td { padding: 3px 0; font-size: 10.5px; border-bottom: 1px dotted #e5e7eb; }
.bank-box table tr:last-child td { border-bottom: none; }
.bank-box table td:first-child { font-weight: 600; color: #333; width: 35%; }

/* Notes */
.processing-note { background: #eff6ff; border: 1px solid #bfdbfe; border-radius: 4px; padding: 7px 12px; margin: 8px 0; font-size: 9.5px; font-weight: 600; color: #1e40af; }
.important-note { background: #fef3c7; border: 1px solid #f59e0b; border-radius: 4px; padding: 7px 12px; margin: 8px 0; font-size: 9.5px; font-weight: 700; color: #92400e; }

/* Section heading */
.section-heading { font-size: 11px; font-weight: 700; color: #1e1b4b; margin: 8px 0 4px; }

ul { padding-left: 16px; margin: 4px 0 6px; }
ul li { font-size: 9.5px; margin-bottom: 2px; color: #444; line-height: 1.4; }

/* Signature area */
.signature-area { display: flex; justify-content: space-between; align-items: flex-end; margin-top: auto; padding-top: 15px; }
.sig-block { text-align: center; width: 35%; }
.sig-line { border-bottom: 1.5px solid #333; height: 35px; margin-bottom: 4px; }
.sig-block p { font-size: 9px; font-weight: 700; color: #1e1b4b; }
.sig-block .sig-label { font-size: 8px; color: #666; font-weight: 400; }
.stamp-block { text-align: center; width: 30%; }
.stamp-block img { height: 50px; opacity: 0.85; }
.stamp-block p { font-size: 8px; color: #666; margin-top: 2px; }

/* Footer */
.footer { border-top: 3px solid; border-image: linear-gradient(90deg, #6366f1, #06b6d4, #8b5cf6) 1; flex-shrink: 0; }
.footer-content { display: flex; justify-content: space-between; padding: 8px 40px; font-size: 9px; color: #555; background: #f8fafc; }
.footer-bar { height: 4px; background: linear-gradient(90deg, #6366f1, #06b6d4, #8b5cf6); }
.footer-web { text-align: center; background: #1e1b4b; padding: 5px; }
.footer-web a { color: #a5b4fc; font-size: 9.5px; font-weight: 600; text-decoration: none; letter-spacing: 0.5px; }
</style>
</head>
<body>

<button class="print-btn" onclick="window.print()">Print / Save PDF</button>

<div class="page">

<!-- Watermark -->
<div class="watermark"><img src="{{ asset('images/aastha_capital_finance_logo.png') }}" alt=""></div>

<!-- Top Bar -->
<div class="top-bar"></div>

<!-- Header -->
<div class="header">
    <div class="logo-area">
        <img src="{{ asset('images/aastha_capital_finance_logo.png') }}" alt="Logo">
        <div class="company-info">
            <h1>AASTHA CAPITAL FINANCE</h1>
            <p>Trusted Financial Solutions for Every Need</p>
        </div>
    </div>
    <div class="ref-info">
        <span>Ref: ACF/SL/{{ date('Y') }}/{{ $obj->id }}</span>
        GST: XXXXXXXXXXXXXXX
    </div>
</div>

<!-- Content -->
<div class="content">

    <div class="letter-title"><h2>LOAN SANCTION LETTER</h2></div>

    <div class="info-row">
        <div class="info-left">
            <p><span>To:</span></p>
            <p><span>Name:</span> {{ $obj->applicant_name }}</p>
            <p><span>S/O:</span> {{ $obj->father_name }}</p>
            <p><span>Mobile:</span> +91 {{ $obj->mobile }}</p>
            <p><span>Application No.:</span> {{ $obj->lead_token }}</p>
        </div>
        <div class="info-right">
            <p><span>Date:</span> {{ $obj->new_format }}</p>
            <p><span>Validity:</span> 10 Days</p>
        </div>
    </div>

    <div class="body-text">
        <p><strong>Dear {{ $obj->applicant_name }},</strong></p>
        <p>We are pleased to inform you that based on your loan application and the information provided by you, Aastha Capital Finance has <strong>sanctioned</strong> your loan subject to the terms and conditions mentioned below.</p>
    </div>

    <!-- Sanctioned Loan Details -->
    <div class="loan-box">
        <h3>&#9654; Sanctioned Loan Details</h3>
        <table>
            <tr><td>Sanctioned Amount</td><td class="loan-amount">&#8377; {{ $obj->sanctioned_amount }}/-</td></tr>
            <tr><td>Loan Type</td><td>{{ $obj->loan_type }}</td></tr>
            <tr><td>Loan Tenure</td><td>{{ $obj->loan_tenure ?? 'As per agreement' }}</td></tr>
            <tr><td>Rate of Interest</td><td>{{ $obj->interest_rate ?? 'As applicable' }}</td></tr>
            <tr><td>Monthly EMI</td><td>&#8377; {{ $obj->emi_amount }}/-</td></tr>
        </table>
    </div>

    <div class="processing-note">
        &#9432; As per Terms & Conditions, please submit advance EMI of &#8377; {{ $obj->emi_amount }} + &#8377; {{ $obj->emi_amount }} via online banking. We have in-principle sanctioned you a loan facility.
    </div>

    <!-- Bank Details -->
    <div class="bank-box">
        <h3>&#127974; Bank Details for Payment</h3>
        <table>
            <tr><td>Account Holder Name</td><td>{{ $obj->payee_name }}</td></tr>
            <tr><td>Account Type</td><td>{{ $obj->account_type }}</td></tr>
            <tr><td>Bank Name</td><td>{{ $obj->bank_number }}</td></tr>
            <tr><td>Account Number</td><td>{{ $obj->account_number }}</td></tr>
            <tr><td>IFSC Code</td><td>{{ $obj->ifsc }}</td></tr>
        </table>
    </div>

    <div class="important-note">
        &#9888; Cash deposits are NOT accepted. All transactions must be done via IMPS / NEFT / RTGS / Mobile Banking / Net Banking only.
    </div>

    <!-- Terms & Conditions -->
    <div class="section-heading">&#9878; Terms & Conditions</div>
    <ul>
        <li>Loan repayment is on a monthly installment basis, with applicable interest.</li>
        <li>Applicant bears legal/file charges, property verification, mortgage deed costs (non-refundable).</li>
        <li>Late payment penalty of 2% per day on outstanding EMI amount.</li>
        <li>All documentation must be submitted within 15 days from sanction date or file will be canceled.</li>
        <li>Loan sanctioned up to 70% of market value of mortgage property (if applicable).</li>
        <li>Company reserves right to suspend/cancel any request at its sole discretion.</li>
        <li>No acceptance of returned, disputed, unauthorized or fraudulent transactions.</li>
        <li>All disputes subject to jurisdiction of courts in Rajasthan only.</li>
    </ul>

    <!-- Signature Area -->
    <div class="signature-area">
        <div class="sig-block">
            <div class="sig-line"></div>
            <p>Customer Signature</p>
            <span class="sig-label">{{ $obj->applicant_name }}</span>
        </div>
        <div class="stamp-block">
            <img src="{{ asset('images/aastha_capital_finance_logo.png') }}" alt="Stamp">
            <p>Company Stamp & Seal</p>
        </div>
    </div>

</div>

<!-- Footer -->
<div class="footer">
    <div class="footer-content">
        <span>&#9742; +91 9649596982</span>
        <span>&#9993; Support@aasthacapitalfinance.com</span>
        <span>&#9679; Aastha Capital Finance, India</span>
    </div>
    <div class="footer-bar"></div>
    <div class="footer-web"><a href="https://aastha.primefinanceindia.com">www.aasthacapitalfinance.com</a></div>
</div>

</div>
</body>
</html>

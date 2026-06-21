<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Loan Approval Letter - Aastha Capital Finance</title>
<style>
@page { size: A4; margin: 0; }
* { box-sizing: border-box; margin: 0; padding: 0; }
body { font-family: 'Segoe UI', Arial, sans-serif; background: #fff; color: #1a1a2e; font-size: 11px; line-height: 1.4; }

.print-btn { position: fixed; top: 12px; right: 18px; padding: 8px 16px; background: linear-gradient(135deg, #6366f1, #8b5cf6); color: #fff; border: none; border-radius: 6px; cursor: pointer; font-weight: 600; font-size: 13px; z-index: 9999; }
@media print { .print-btn { display: none; } }

.page { width: 794px; height: 1123px; margin: auto; position: relative; overflow: hidden; }

/* Watermark */
.watermark { position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); opacity: 0.04; z-index: 0; pointer-events: none; }
.watermark img { width: 350px; height: 350px; object-fit: contain; }

/* Top bar */
.top-bar { height: 6px; background: linear-gradient(90deg, #6366f1, #06b6d4, #8b5cf6); }

/* Header */
.letter-header { padding: 15px 40px 12px; display: flex; align-items: center; justify-content: space-between; border-bottom: 2px solid #e2e8f0; position: relative; z-index: 1; }
.logo-area { display: flex; align-items: center; gap: 12px; }
.logo-area img { height: 50px; }
.company-info h1 { font-size: 18px; color: #1e1b4b; font-weight: 700; }
.company-info p { font-size: 10px; color: #64748b; }
.ref-info { text-align: right; font-size: 10px; color: #64748b; }
.ref-info span { display: block; color: #1e1b4b; font-weight: 600; font-size: 11px; }

/* Content */
.content { padding: 12px 40px 10px; position: relative; z-index: 1; }

/* Title */
.letter-title { text-align: center; margin: 6px 0 12px; }
.letter-title h2 { font-size: 16px; color: #1e1b4b; display: inline-block; padding-bottom: 4px; border-bottom: 3px solid #6366f1; }

/* Info */
.info-row { display: flex; justify-content: space-between; margin-bottom: 10px; }
.info-left p, .info-right p { margin: 2px 0; font-size: 11px; }
.info-left p span, .info-right p span { font-weight: 700; color: #1e1b4b; }

/* Body */
.body-text p { margin: 4px 0; font-size: 11px; }

/* Loan box */
.loan-box { background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 6px; padding: 10px 15px; margin: 10px 0; border-left: 4px solid #6366f1; }
.loan-box h3 { font-size: 13px; color: #6366f1; margin-bottom: 6px; }
.loan-box table { width: 100%; }
.loan-box table td { padding: 3px 0; font-size: 11px; }
.loan-box table td:first-child { font-weight: 600; color: #1e1b4b; width: 35%; }
.loan-amount { font-size: 16px; font-weight: 800; color: #1e1b4b; }

/* Notes */
.processing-note { background: #eff6ff; border: 1px solid #bfdbfe; border-radius: 5px; padding: 8px 12px; margin: 8px 0; font-size: 10px; font-weight: 600; color: #1e40af; }
.important-note { background: #fef3c7; border: 1px solid #f59e0b; border-radius: 5px; padding: 8px 12px; margin: 8px 0; font-size: 10px; font-weight: 700; color: #92400e; }

/* Section heading */
.section-heading { font-size: 12px; font-weight: 700; color: #1e1b4b; margin: 8px 0 4px; border-bottom: 1px solid #e2e8f0; padding-bottom: 3px; }

ul { padding-left: 16px; margin: 4px 0 8px; }
ul li { font-size: 10px; margin-bottom: 2px; color: #334155; }

/* Signature area */
.signature-area { display: flex; justify-content: space-between; align-items: flex-end; margin-top: 15px; padding-top: 10px; border-top: 1px dashed #cbd5e1; }
.sig-block { text-align: center; }
.sig-line { width: 130px; height: 40px; border-bottom: 1px solid #1e1b4b; margin-bottom: 4px; }
.sig-block p { font-size: 9px; font-weight: 700; color: #1e1b4b; }
.sig-block .sig-label { font-size: 8px; color: #64748b; font-weight: 400; }
.stamp-block img { height: 60px; }

/* Footer */
.letter-footer { position: absolute; bottom: 0; left: 0; width: 100%; z-index: 1; }
.footer-content { display: flex; justify-content: space-between; align-items: center; padding: 8px 40px; background: #f8fafc; border-top: 1px solid #e2e8f0; font-size: 9px; color: #64748b; }
.footer-bar { height: 5px; background: linear-gradient(90deg, #6366f1, #06b6d4, #8b5cf6); }
.footer-web { text-align: center; background: #1e1b4b; padding: 6px; }
.footer-web a { color: #a5b4fc; font-size: 10px; font-weight: 600; text-decoration: none; }
</style>
</head>
<body>

<button class="print-btn" onclick="window.print()">Print / Save PDF</button>

<div class="page">

<!-- Watermark -->
<div class="watermark">
    <img src="{{ asset('images/aastha_capital_finance_logo.png') }}" alt="">
</div>

<!-- Top Bar -->
<div class="top-bar"></div>

<!-- Header -->
<div class="letter-header">
    <div class="logo-area">
        <img src="{{ asset('images/aastha_capital_finance_logo.png') }}" alt="Logo">
        <div class="company-info">
            <h1>AASTHA CAPITAL FINANCE</h1>
            <p>Trusted Financial Solutions for Every Need</p>
        </div>
    </div>
    <div class="ref-info">
        <span>Ref: ACF/LOAN/{{ date('Y') }}/{{ $details->id }}</span>
        GST: XXXXXXXXXXXXXXX
    </div>
</div>

<!-- Content -->
<div class="content">

    <div class="letter-title"><h2>LOAN APPROVAL LETTER</h2></div>

    <div class="info-row">
        <div class="info-left">
            <p><span>To:</span></p>
            <p><span>Name:</span> {{ $details->name }}</p>
            <p><span>Mobile:</span> +91 {{ $details->phone }}</p>
            <p><span>Application No.:</span> {{ $details->lead_token }}</p>
            <p><span>Aadhaar No.:</span> {{ $approved->adhaar_number ?? 'XXXX XXXX XXXX' }}</p>
            <p><span>Subject:</span> Approval for {{ ucfirst($details->loan_type) }} Loan</p>
        </div>
        <div class="info-right">
            <p><span>Date:</span> {{ $approved->created_at->format('d M Y') }}</p>
        </div>
    </div>

    <div class="body-text">
        <p><strong>Dear {{ $details->name }},</strong></p>
        <p>We are delighted to inform you that your loan application bearing reference number <strong>{{ $details->lead_token }}</strong> has been reviewed and <strong>approved</strong> by our credit committee, subject to the terms and conditions outlined below.</p>
    </div>

    <div class="loan-box">
        <h3>Approved Loan Details</h3>
        <table>
            <tr><td>Sanctioned Amount</td><td class="loan-amount">&#8377; {{ number_format($approved->sanctionamt) }}/-</td></tr>
            <tr><td>Loan Type</td><td>{{ ucfirst($details->loan_type) }} Loan</td></tr>
            <tr><td>Loan Tenure</td><td>{{ $approved->loant }} Year(s)</td></tr>
            <tr><td>Rate of Interest</td><td>{{ $approved->roi }}% per annum (Reducing)</td></tr>
            <tr><td>Monthly EMI</td><td>&#8377; {{ number_format($approved->emiamt) }}/-</td></tr>
        </table>
    </div>

    <div class="processing-note">
        Processing fee of &#8377; {{ number_format($approved->totalv) }}/- will be deducted directly from your sanctioned amount of &#8377; {{ number_format($approved->sanctionamt) }}/-. No advance payment is required.
    </div>

    <div class="section-heading">Disbursement Details</div>
    <ul>
        <li>The approved loan amount will be credited to your registered bank account post verification.</li>
        <li>Applicable charges and processing fees will be adjusted at disbursement.</li>
        <li>Disbursement within 3-5 working days after document verification.</li>
    </ul>

    <div class="important-note">
        Important: Cash deposits are NOT accepted. All transactions via IMPS / NEFT / RTGS / Mobile Banking / Net Banking only.
    </div>

    <div class="section-heading">Terms & Conditions</div>
    <ul>
        <li>Loan repayment on monthly EMI basis as per agreed schedule.</li>
        <li>Legal / file charges are non-refundable.</li>
        <li>2% per day late payment penalty on outstanding EMI.</li>
        <li>All documentation must be completed within 15 days.</li>
        <li>Loan sanctioned up to 70% of market value (if applicable).</li>
        <li>Company reserves the right to cancel or modify approval.</li>
        <li>Disputes subject to Rajasthan court jurisdiction only.</li>
    </ul>

    <!-- Signature Area -->
    <div class="signature-area">
        <div class="sig-block">
            <div class="sig-line"></div>
            <p>Customer Signature</p>
            <span class="sig-label">{{ $details->name }}</span>
        </div>
        <div class="stamp-block">
            <img src="{{ asset('images/aastha_capital_finance_logo.png') }}" alt="Company Stamp">
            <p style="font-size:8px;color:#64748b;margin-top:2px;">Company Stamp & Seal</p>
        </div>
    </div>

</div>

<!-- Footer -->
<div class="letter-footer">
    <div class="footer-content">
        <span>+91 99999 99999</span>
        <span>info@aasthacapital.com</span>
        <span>Aastha Capital Finance, India</span>
    </div>
    <div class="footer-bar"></div>
    <div class="footer-web"><a href="https://aastha.primefinanceindia.com">www.aasthacapitalfinance.com</a></div>
</div>

</div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Loan Approval Letter - Aastha Capital Finance</title>
<style>
@page { size: A4; margin: 0; }
* { box-sizing: border-box; margin: 0; padding: 0; }
body { font-family: 'Segoe UI', Arial, sans-serif; background: #fff; color: #222; font-size: 11.5px; line-height: 1.5; }

.print-btn { position: fixed; top: 12px; right: 18px; padding: 8px 18px; background: linear-gradient(135deg, #6366f1, #8b5cf6); color: #fff; border: none; border-radius: 6px; cursor: pointer; font-weight: 600; z-index: 9999; }
@media print { .print-btn { display: none; } }

.page { width: 794px; height: 1123px; margin: auto; position: relative; overflow: hidden; }

/* Watermark */
.watermark { position: absolute; top: 45%; left: 50%; transform: translate(-50%, -50%); opacity: 0.035; z-index: 0; }
.watermark img { width: 380px; }

/* Decorative corner */
.corner-decor { position: absolute; width: 80px; height: 80px; border: 3px solid #6366f1; opacity: 0.15; }
.corner-tl { top: 20px; left: 20px; border-right: none; border-bottom: none; }
.corner-br { bottom: 60px; right: 20px; border-left: none; border-top: none; }

/* Top bar */
.top-bar { height: 7px; background: linear-gradient(90deg, #6366f1, #06b6d4, #8b5cf6); }

/* Header */
.header { padding: 18px 45px 14px; display: flex; align-items: center; justify-content: space-between; border-bottom: 2px solid #1e1b4b; }
.logo-area { display: flex; align-items: center; gap: 12px; }
.logo-area img { height: 55px; }
.company-info h1 { font-size: 19px; color: #1e1b4b; font-weight: 800; letter-spacing: 0.5px; }
.company-info p { font-size: 10px; color: #6366f1; font-style: italic; }
.ref-info { text-align: right; font-size: 10px; color: #555; }
.ref-info span { display: block; color: #1e1b4b; font-weight: 700; }

/* Thin decorative line under header */
.header-line { height: 1px; background: linear-gradient(90deg, transparent, #6366f1, transparent); margin: 0 45px; }

/* Content */
.content { padding: 14px 45px 10px; position: relative; z-index: 1; }

/* Title */
.letter-title { text-align: center; margin: 8px 0 14px; }
.letter-title h2 { font-size: 16px; color: #1e1b4b; display: inline-block; padding: 4px 20px; border: 2px solid #6366f1; border-radius: 4px; letter-spacing: 1px; }

/* Info */
.info-row { display: flex; justify-content: space-between; margin-bottom: 10px; padding-bottom: 8px; border-bottom: 1px solid #eee; }
.info-left p, .info-right p { margin: 2px 0; font-size: 11px; }
.info-left p span, .info-right p span { font-weight: 700; color: #1e1b4b; }

/* Body */
.body-text { margin: 8px 0; }
.body-text p { font-size: 11px; margin: 3px 0; }

/* Loan box */
.loan-box { background: #fafbff; border: 1px solid #d4d8f0; border-radius: 6px; padding: 10px 16px; margin: 10px 0; border-left: 4px solid #6366f1; }
.loan-box h3 { font-size: 13px; color: #6366f1; margin-bottom: 6px; font-weight: 700; }
.loan-box table { width: 100%; border-collapse: collapse; }
.loan-box table td { padding: 3px 0; font-size: 11px; border-bottom: 1px dotted #e5e7eb; }
.loan-box table tr:last-child td { border-bottom: none; }
.loan-box table td:first-child { font-weight: 600; color: #333; width: 35%; }
.loan-amount { font-size: 15px; font-weight: 800; color: #1e1b4b; }

/* Notes */
.processing-note { background: #eff6ff; border: 1px solid #bfdbfe; border-radius: 4px; padding: 7px 12px; margin: 8px 0; font-size: 10px; font-weight: 600; color: #1e40af; }
.important-note { background: #fef3c7; border: 1px solid #f59e0b; border-radius: 4px; padding: 7px 12px; margin: 8px 0; font-size: 10px; font-weight: 700; color: #92400e; }

/* Section heading */
.section-heading { font-size: 12px; font-weight: 700; color: #1e1b4b; margin: 10px 0 4px; padding-bottom: 3px; border-bottom: 1px solid #e2e8f0; }

ul { padding-left: 16px; margin: 4px 0; }
ul li { font-size: 10px; margin-bottom: 2px; color: #444; }

/* Divider line */
.divider { height: 1px; background: linear-gradient(90deg, transparent, #6366f1, transparent); margin: 12px 0; }

/* Signature area - more space */
.signature-area { display: flex; justify-content: space-between; align-items: flex-end; margin-top: 20px; padding: 15px 0 5px; }
.sig-block { text-align: center; width: 35%; }
.sig-line { border-bottom: 1.5px solid #333; height: 35px; margin-bottom: 5px; }
.sig-block p { font-size: 10px; font-weight: 700; color: #1e1b4b; }
.sig-block .sig-label { font-size: 9px; color: #666; font-weight: 400; }
.stamp-block { text-align: center; width: 30%; }
.stamp-block img { height: 55px; opacity: 0.85; }
.stamp-block p { font-size: 8px; color: #666; margin-top: 3px; }

/* Footer */
.footer { position: absolute; bottom: 0; left: 0; width: 100%; z-index: 1; }
.footer-line { height: 1px; background: linear-gradient(90deg, transparent, #6366f1, transparent); margin: 0 45px; }
.footer-content { display: flex; justify-content: space-between; padding: 8px 45px; font-size: 9px; color: #666; }
.footer-bar { height: 5px; background: linear-gradient(90deg, #6366f1, #06b6d4, #8b5cf6); }
.footer-web { text-align: center; background: #1e1b4b; padding: 5px; }
.footer-web a { color: #a5b4fc; font-size: 10px; font-weight: 600; text-decoration: none; letter-spacing: 0.5px; }
</style>
</head>
<body>

<button class="print-btn" onclick="window.print()">Print / Save PDF</button>

<div class="page">

<!-- Decorative corners -->
<div class="corner-decor corner-tl"></div>
<div class="corner-decor corner-br"></div>

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
        <span>Ref: ACF/LOAN/{{ date('Y') }}/{{ $details->id }}</span>
        GST: XXXXXXXXXXXXXXX
    </div>
</div>
<div class="header-line"></div>

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
        <p>We are pleased to inform you that your loan application (Ref: <strong>{{ $details->lead_token }}</strong>) has been <strong>approved</strong> by our credit committee, subject to the following terms and conditions.</p>
    </div>

    <div class="loan-box">
        <h3>&#9654; Approved Loan Details</h3>
        <table>
            <tr><td>Sanctioned Amount</td><td class="loan-amount">&#8377; {{ number_format($approved->sanctionamt) }}/-</td></tr>
            <tr><td>Loan Type</td><td>{{ ucfirst($details->loan_type) }} Loan</td></tr>
            <tr><td>Loan Tenure</td><td>{{ $approved->loant }} Year(s)</td></tr>
            <tr><td>Rate of Interest</td><td>{{ $approved->roi }}% per annum (Reducing)</td></tr>
            <tr><td>Monthly EMI</td><td>&#8377; {{ number_format($approved->emiamt) }}/-</td></tr>
        </table>
    </div>

    <div class="processing-note">
        &#9432; Processing fee of &#8377; {{ number_format($approved->totalv) }}/- will be deducted directly from your sanctioned amount. No advance payment is required.
    </div>

    <div class="section-heading">&#127974; Disbursement Details</div>
    <ul>
        <li>Loan amount credited to registered bank account post document verification.</li>
        <li>Applicable charges adjusted at the time of disbursement.</li>
        <li>Disbursement within 3-5 working days after verification.</li>
    </ul>

    <div class="important-note">
        &#9888; Cash deposits NOT accepted. Transactions only via IMPS / NEFT / RTGS / Mobile Banking / Net Banking.
    </div>

    <div class="section-heading">&#9878; Terms & Conditions</div>
    <ul>
        <li>Repayment on monthly EMI basis as per agreed schedule.</li>
        <li>Legal / file charges are non-refundable.</li>
        <li>2% per day late payment penalty on outstanding EMI.</li>
        <li>All documentation must be completed within 15 days.</li>
        <li>Loan sanctioned up to 70% of market value (if applicable).</li>
        <li>Company reserves the right to cancel or modify approval.</li>
        <li>Disputes subject to Rajasthan court jurisdiction only.</li>
    </ul>

    <!-- Decorative divider -->
    <div class="divider"></div>

    <!-- Signature Area - with space -->
    <div class="signature-area">
        <div class="sig-block">
            <div class="sig-line"></div>
            <p>Customer Signature</p>
            <span class="sig-label">{{ $details->name }}</span>
        </div>
        <div class="stamp-block">
            <img src="{{ asset('images/aastha_capital_finance_logo.png') }}" alt="Stamp">
            <p>Company Stamp & Seal</p>
        </div>
    </div>

</div>

<!-- Footer -->
<div class="footer">
    <div class="footer-line"></div>
    <div class="footer-content">
        <span>&#9742; +91 99999 99999</span>
        <span>&#9993; info@aasthacapital.com</span>
        <span>&#9679; Aastha Capital Finance, India</span>
    </div>
    <div class="footer-bar"></div>
    <div class="footer-web"><a href="https://aastha.primefinanceindia.com">www.aasthacapitalfinance.com</a></div>
</div>

</div>
</body>
</html>

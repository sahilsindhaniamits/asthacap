<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Loan Approval Letter - Aastha Capital Finance</title>
<style>
@page { size: A4; margin: 0; }
* { box-sizing: border-box; }
body { margin: 0; font-family: 'Segoe UI', Arial, sans-serif; background: #fff; color: #1a1a2e; font-size: 14px; line-height: 1.5; }

.print-btn { position: fixed; top: 15px; right: 20px; padding: 10px 20px; background: linear-gradient(135deg, #6366f1, #8b5cf6); color: #fff; border: none; border-radius: 6px; cursor: pointer; font-weight: 600; font-size: 14px; z-index: 9999; box-shadow: 0 4px 15px rgba(99,102,241,0.4); }
.print-btn:hover { transform: translateY(-1px); box-shadow: 0 6px 20px rgba(99,102,241,0.5); }
@media print { .print-btn { display: none; } }

.page { width: 794px; min-height: 1123px; margin: auto; padding: 0; position: relative; background: #fff; }

/* Top gradient bar */
.top-bar { height: 8px; background: linear-gradient(90deg, #6366f1, #06b6d4, #8b5cf6); }

/* Header */
.letter-header { padding: 30px 50px 20px; display: flex; align-items: center; justify-content: space-between; border-bottom: 2px solid #e2e8f0; }
.letter-header .logo-area { display: flex; align-items: center; gap: 15px; }
.letter-header .logo-area img { height: 65px; }
.letter-header .company-info { }
.letter-header .company-info h1 { font-size: 22px; color: #1e1b4b; margin: 0; font-weight: 700; }
.letter-header .company-info p { font-size: 12px; color: #64748b; margin: 2px 0 0; }
.letter-header .ref-info { text-align: right; font-size: 11px; color: #64748b; }
.letter-header .ref-info span { display: block; color: #1e1b4b; font-weight: 600; font-size: 12px; }

/* Content */
.content { padding: 25px 50px 30px; }

/* Title */
.letter-title { text-align: center; margin: 10px 0 25px; }
.letter-title h2 { font-size: 20px; color: #1e1b4b; margin: 0; padding-bottom: 8px; border-bottom: 3px solid #6366f1; display: inline-block; }

/* Info Grid */
.info-row { display: flex; justify-content: space-between; margin-bottom: 20px; }
.info-left { width: 65%; }
.info-right { width: 30%; text-align: right; }
.info-left p, .info-right p { margin: 4px 0; font-size: 13px; }
.info-left p span, .info-right p span { font-weight: 700; color: #1e1b4b; }

/* Body text */
.body-text { margin: 15px 0; font-size: 13.5px; }
.body-text p { margin: 8px 0; }

/* Loan details box */
.loan-box { background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 18px 22px; margin: 18px 0; border-left: 4px solid #6366f1; }
.loan-box h3 { font-size: 16px; color: #6366f1; margin: 0 0 12px; }
.loan-box table { width: 100%; }
.loan-box table td { padding: 5px 0; font-size: 13px; vertical-align: top; }
.loan-box table td:first-child { font-weight: 600; color: #1e1b4b; width: 40%; }
.loan-box table td:last-child { color: #334155; }
.loan-amount { font-size: 22px; font-weight: 800; color: #1e1b4b; }

/* Processing note */
.processing-note { background: #eff6ff; border: 1px solid #bfdbfe; border-radius: 6px; padding: 12px 16px; margin: 15px 0; font-size: 13px; font-weight: 600; color: #1e40af; }

/* Sections */
.section-heading { font-size: 14px; font-weight: 700; color: #1e1b4b; margin: 18px 0 8px; padding-bottom: 4px; border-bottom: 1px solid #e2e8f0; }

ul { padding-left: 20px; margin: 8px 0 15px; }
ul li { font-size: 12.5px; margin-bottom: 5px; color: #334155; }

/* Important note */
.important-note { background: linear-gradient(135deg, #fef3c7, #fde68a); border: 1px solid #f59e0b; border-radius: 6px; padding: 12px 16px; margin: 15px 0; font-size: 13px; font-weight: 700; color: #92400e; }
.important-note i { margin-right: 6px; }

/* Signature area */
.signature-area { display: flex; justify-content: space-between; align-items: flex-end; margin-top: 35px; padding-top: 20px; border-top: 1px dashed #cbd5e1; }
.sig-block { text-align: center; }
.sig-block .sig-line { width: 150px; border-bottom: 1px solid #1e1b4b; margin-bottom: 5px; height: 60px; }
.sig-block p { font-size: 11px; font-weight: 700; color: #1e1b4b; margin: 0; }
.sig-block .sig-label { font-size: 10px; color: #64748b; font-weight: 400; }
.stamp-area { text-align: center; }
.stamp-area img { height: 80px; opacity: 0.9; }
.stamp-area p { font-size: 10px; color: #64748b; margin: 4px 0 0; }

/* Footer */
.letter-footer { position: absolute; bottom: 0; left: 0; width: 100%; }
.footer-content { display: flex; justify-content: space-between; align-items: center; padding: 12px 50px; background: #f8fafc; border-top: 1px solid #e2e8f0; }
.footer-content .contact-item { display: flex; align-items: center; gap: 6px; font-size: 11px; color: #64748b; }
.footer-content .contact-item i { color: #6366f1; font-size: 12px; }
.footer-bar { height: 6px; background: linear-gradient(90deg, #6366f1, #06b6d4, #8b5cf6); }
.footer-web { text-align: center; background: #1e1b4b; padding: 8px; }
.footer-web a { color: #a5b4fc; font-size: 12px; font-weight: 600; text-decoration: none; letter-spacing: 0.5px; }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

<button class="print-btn" onclick="window.print()"><i class="fas fa-print"></i> Print / Save PDF</button>

<div class="page">

<!-- Top Bar -->
<div class="top-bar"></div>

<!-- Header -->
<div class="letter-header">
    <div class="logo-area">
        <img src="{{ asset('images/aastha_capital_finance_logo.png') }}" alt="Aastha Capital Finance">
        <div class="company-info">
            <h1>AASTHA CAPITAL FINANCE</h1>
            <p>Trusted Financial Solutions for Every Need</p>
        </div>
    </div>
    <div class="ref-info">
        <span>Ref: ACF/LOAN/{{ date('Y') }}/{{ $details->id }}</span>
        CIN: XXXXXXXXXX
    </div>
</div>

<!-- Content -->
<div class="content">

    <!-- Title -->
    <div class="letter-title">
        <h2>LOAN APPROVAL LETTER</h2>
    </div>

    <!-- Applicant Info -->
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

    <!-- Body -->
    <div class="body-text">
        <p><strong>Dear {{ $details->name }},</strong></p>
        <p>
            We are delighted to inform you that your loan application bearing reference number
            <strong>{{ $details->lead_token }}</strong> has been reviewed and <strong>approved</strong>
            by our credit committee, subject to the terms and conditions outlined below.
        </p>
    </div>

    <!-- Loan Details Box -->
    <div class="loan-box">
        <h3><i class="fas fa-file-invoice-dollar"></i> Approved Loan Details</h3>
        <table>
            <tr>
                <td>Sanctioned Amount</td>
                <td class="loan-amount">&#8377; {{ number_format($approved->sanctionamt) }}/-</td>
            </tr>
            <tr><td>Loan Type</td><td>{{ ucfirst($details->loan_type) }} Loan</td></tr>
            <tr><td>Loan Tenure</td><td>{{ $approved->loant }} Year(s)</td></tr>
            <tr><td>Rate of Interest</td><td>{{ $approved->roi }}% per annum (Reducing)</td></tr>
            <tr><td>Monthly EMI</td><td>&#8377; {{ number_format($approved->emiamt) }}/-</td></tr>
        </table>
    </div>

    <!-- Processing Note -->
    <div class="processing-note">
        <i class="fas fa-info-circle"></i>
        Processing fee of &#8377; {{ number_format($approved->totalv) }}/- will be deducted directly from your
        sanctioned amount of &#8377; {{ number_format($approved->sanctionamt) }}/-. No advance payment is required.
    </div>

    <!-- Disbursement -->
    <div class="section-heading"><i class="fas fa-university"></i> Disbursement Details</div>
    <ul>
        <li>The approved loan amount will be credited to your registered bank account post successful verification of all submitted documents.</li>
        <li>Applicable statutory charges and processing fees will be adjusted at the time of disbursement.</li>
        <li>Disbursement will be completed within 3-5 working days after document verification.</li>
    </ul>

    <!-- Important Note -->
    <div class="important-note">
        <i class="fas fa-exclamation-triangle"></i>
        Important: Cash deposits are NOT accepted. All transactions must be done via
        IMPS / NEFT / RTGS / Mobile Banking / Net Banking only.
    </div>

    <!-- Terms -->
    <div class="section-heading"><i class="fas fa-gavel"></i> Terms &amp; Conditions</div>
    <ul>
        <li>Loan repayment shall be made on a monthly installment (EMI) basis as per the agreed schedule.</li>
        <li>Legal / file charges once paid are non-refundable under any circumstances.</li>
        <li>A late payment penalty of 2% per day shall be levied on any outstanding EMI amount.</li>
        <li>All required documentation must be completed within 15 days from the date of this letter.</li>
        <li>Loan is sanctioned up to 70% of the market value of the collateral (if applicable).</li>
        <li>The company reserves the right to cancel or modify the approval at its sole discretion.</li>
        <li>All disputes shall be subject to the jurisdiction of courts in Rajasthan only.</li>
    </ul>

    <!-- Signature -->
    <div class="signature-area">
        <div class="sig-block">
            <div class="sig-line"></div>
            <p>Applicant Signature</p>
            <span class="sig-label">{{ $details->name }}</span>
        </div>
        <div class="stamp-area">
            <img src="{{ asset('images/stamp.png') }}" alt="Company Stamp" onerror="this.style.display='none'">
            <p>Company Seal</p>
        </div>
        <div class="sig-block">
            <div class="sig-line">
                <img src="{{ asset('images/signature.png') }}" alt="Authorized Signature" style="height:55px;margin-top:5px;" onerror="this.style.display='none'">
            </div>
            <p>Authorized Signatory</p>
            <span class="sig-label">Aastha Capital Finance</span>
        </div>
    </div>

</div>

<!-- Footer -->
<div class="letter-footer">
    <div class="footer-content">
        <div class="contact-item"><i class="fas fa-phone"></i> +91 99999 99999</div>
        <div class="contact-item"><i class="fas fa-envelope"></i> info@aasthacapital.com</div>
        <div class="contact-item"><i class="fas fa-map-marker-alt"></i> Aastha Capital Finance, India</div>
    </div>
    <div class="footer-bar"></div>
    <div class="footer-web"><a href="https://aastha.primefinanceindia.com">www.aasthacapitalfinance.com</a></div>
</div>

</div>
</body>
</html>

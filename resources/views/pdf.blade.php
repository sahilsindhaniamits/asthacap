<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Loan Approval Letter - Aastha Capital Finance</title>
<style>
@page { size: A4; margin: 0; }
* { box-sizing: border-box; margin: 0; padding: 0; }
body { font-family: 'Segoe UI', Arial, sans-serif; background: #fff; color: #1a1a2e; font-size: 11px; line-height: 1.5; }

.print-btn { position: fixed; top: 12px; right: 18px; padding: 8px 18px; background: linear-gradient(135deg, #6366f1, #8b5cf6); color: #fff; border: none; border-radius: 6px; cursor: pointer; font-weight: 600; z-index: 9999; box-shadow: 0 4px 12px rgba(99,102,241,0.4); }
@media print { .print-btn { display: none; } }

.page { width: 794px; height: 1123px; margin: auto; position: relative; overflow: hidden; display: flex; flex-direction: column; background: #fff; }

/* Watermark */
.watermark { position: absolute; top: 44%; left: 50%; transform: translate(-50%, -50%) rotate(-25deg); opacity: 0.03; z-index: 0; pointer-events: none; }
.watermark img { width: 500px; }

/* Side accent */
.side-accent { position: absolute; left: 0; top: 0; width: 5px; height: 100%; background: linear-gradient(180deg, #6366f1, #06b6d4, #8b5cf6); }

/* Top bar */
.top-bar { height: 5px; background: linear-gradient(90deg, #6366f1, #06b6d4, #8b5cf6, #6366f1); flex-shrink: 0; }

/* Header */
.header { padding: 14px 40px 12px; display: flex; align-items: center; justify-content: space-between; flex-shrink: 0; position: relative; border-bottom: none; }
.header::after { content: ''; position: absolute; bottom: 0; left: 40px; right: 40px; height: 2px; background: linear-gradient(90deg, #6366f1, #06b6d4, #8b5cf6); border-radius: 2px; }
.logo-area { display: flex; align-items: center; gap: 12px; }
.logo-area img { height: 50px; }
.company-info h1 { font-size: 18px; color: #1e1b4b; font-weight: 800; letter-spacing: 0.3px; }
.company-info .tagline { font-size: 9px; color: #6366f1; font-style: italic; margin-top: 1px; }
.company-info .reg-info { font-size: 7.5px; color: #666; margin-top: 3px; letter-spacing: 0.3px; }
.header-right { text-align: right; }
.header-right .ref-no { font-size: 10px; color: #1e1b4b; font-weight: 700; background: #f0f0ff; padding: 3px 10px; border-radius: 3px; border: 1px solid #e0e0f0; display: inline-block; margin-bottom: 4px; }
.header-right .meta { font-size: 8px; color: #666; }
.header-right .meta span { display: block; margin: 1px 0; }

/* Content */
.content { padding: 12px 40px 8px; position: relative; z-index: 1; flex: 1; display: flex; flex-direction: column; }

/* Document Title */
.doc-title { text-align: center; margin: 8px 0 12px; }
.doc-title h2 { font-size: 15px; color: #fff; display: inline-block; padding: 6px 30px; background: linear-gradient(135deg, #1e1b4b, #312e81); border-radius: 3px; letter-spacing: 1.5px; text-transform: uppercase; }
.doc-title .doc-id { font-size: 8px; color: #888; margin-top: 4px; letter-spacing: 0.5px; }

/* Info Grid */
.info-grid { display: flex; justify-content: space-between; margin-bottom: 12px; padding: 10px 14px; background: #fafbff; border: 1px solid #eef0f8; border-radius: 4px; }
.info-grid .info-col p { margin: 2px 0; font-size: 10.5px; }
.info-grid .info-col p span { font-weight: 700; color: #1e1b4b; }
.info-grid .info-col .label { color: #6b7280; font-size: 8px; text-transform: uppercase; letter-spacing: 0.5px; }

/* Body */
.body-text { margin: 8px 0; }
.body-text p { font-size: 11px; margin: 3px 0; color: #333; }

/* Detail boxes */
.detail-box { border-radius: 4px; padding: 12px 16px; margin: 8px 0; }
.detail-box h3 { font-size: 12px; margin-bottom: 8px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; }
.detail-box table { width: 100%; border-collapse: collapse; }
.detail-box table td { padding: 4px 0; font-size: 11px; border-bottom: 1px solid rgba(0,0,0,0.06); }
.detail-box table tr:last-child td { border-bottom: none; }
.detail-box table td:first-child { font-weight: 600; color: #444; width: 38%; }
.detail-box table td:last-child { color: #1e1b4b; font-weight: 500; }

.loan-box { background: #f8f9ff; border: 1px solid #e0e3f0; border-left: 4px solid #6366f1; }
.loan-box h3 { color: #4338ca; }
.loan-amount { font-size: 16px !important; font-weight: 800 !important; color: #1e1b4b !important; }

/* Alert boxes */
.alert-box { border-radius: 4px; padding: 8px 12px; margin: 8px 0; font-size: 9.5px; display: flex; align-items: flex-start; gap: 6px; }
.alert-box .alert-icon { font-size: 12px; flex-shrink: 0; margin-top: -1px; }
.alert-info { background: #eff6ff; border: 1px solid #bfdbfe; color: #1e40af; }
.alert-warning { background: #fffbeb; border: 1px solid #fde68a; color: #92400e; }

/* Section heading */
.section-heading { font-size: 12px; font-weight: 700; color: #1e1b4b; margin: 10px 0 5px; text-transform: uppercase; letter-spacing: 0.5px; border-bottom: 1px solid #e5e7eb; padding-bottom: 3px; }

ul { padding-left: 16px; margin: 4px 0 8px; }
ul li { font-size: 9.5px; margin-bottom: 2px; color: #444; line-height: 1.4; }

/* Signature area */
.signature-area { display: flex; justify-content: space-between; align-items: flex-end; margin-top: 14px; padding-top: 8px; border-top: 1px dashed #d1d5db; }
.sig-block { text-align: center; width: 30%; }
.sig-line { border-bottom: 1.5px solid #1e1b4b; height: 24px; margin-bottom: 4px; }
.sig-block p { font-size: 9px; font-weight: 700; color: #1e1b4b; }
.sig-block .sig-label { font-size: 8px; color: #666; font-weight: 400; display: block; }
.stamp-block { text-align: center; width: 25%; position: relative; }
.stamp-block img { height: 70px; opacity: 0.85; position: relative; margin-bottom: -8px; }
.stamp-block p { font-size: 7.5px; color: #666; margin-top: 2px; }
.auth-sig-block { text-align: center; width: 30%; }
.auth-sig-block .sig-line { border-bottom-style: dashed; }
.auth-sig-block p { font-size: 9px; font-weight: 700; color: #1e1b4b; }
.auth-sig-block .sig-label { font-size: 8px; color: #666; font-weight: 400; display: block; }

/* System note */
.system-note { text-align: center; font-size: 7.5px; color: #999; margin-top: 8px; padding-top: 4px; letter-spacing: 0.3px; }

/* Footer */
.footer { flex-shrink: 0; }
.footer-main { display: flex; justify-content: space-between; align-items: center; padding: 8px 40px; background: #f8fafc; border-top: 1px solid #e5e7eb; }
.footer-left { font-size: 8px; color: #666; }
.footer-left span { display: block; margin: 1px 0; }
.footer-center { text-align: center; }
.footer-center span { font-size: 7.5px; color: #888; display: block; }
.footer-right { text-align: right; font-size: 8px; color: #666; }
.footer-right span { display: block; margin: 1px 0; }
.footer-bar { height: 4px; background: linear-gradient(90deg, #6366f1, #06b6d4, #8b5cf6, #6366f1); }
.footer-bottom { text-align: center; background: #1e1b4b; padding: 5px; }
.footer-bottom a { color: #a5b4fc; font-size: 9px; font-weight: 600; text-decoration: none; letter-spacing: 0.5px; }
.footer-bottom .disclaimer { font-size: 7px; color: #6b7280; margin-top: 2px; }
</style>
</head>
<body>

<button class="print-btn" onclick="window.print()">Print / Save PDF</button>

<div class="page">

<!-- Side Accent -->
<div class="side-accent"></div>

<!-- Watermark -->
<div class="watermark"><img src="{{ asset('images/aastha_capital_finance_logo.png') }}" alt=""></div>

<!-- Top Bar -->
<div class="top-bar"></div>

<!-- Header -->
<div class="header">
    <div class="logo-area">
        <img src="{{ asset('images/aastha_capital_finance_logo.png') }}" alt="Aastha Capital Finance">
        <div class="company-info">
            <h1>AASTHA CAPITAL FINANCE</h1>
            <div class="tagline">Trusted Financial Solutions for Every Need</div>
            <div class="reg-info">GSTIN: XXXXXXXXXXXXX</div>
        </div>
    </div>
    <div class="header-right">
        <div class="ref-no">ACF/AL/{{ date('Y') }}/{{ str_pad($details->id, 5, '0', STR_PAD_LEFT) }}</div>
        <div class="meta">
            <span>Head Office: SGNR, Rajasthan</span>
            <span>GSTIN: XXXXXXXXXXXXX</span>
        </div>
    </div>
</div>

<!-- Content -->
<div class="content">

    <!-- Document Title -->
    <div class="doc-title">
        <h2>Loan Approval Letter</h2>
        <div class="doc-id">Document ID: ACF-AL-{{ date('Ymd') }}-{{ str_pad($details->id, 5, '0', STR_PAD_LEFT) }}</div>
    </div>

    <!-- Applicant Info Grid -->
    <div class="info-grid">
        <div class="info-col">
            <p><span class="label">Applicant</span></p>
            <p><span>{{ $details->name }}</span></p>
            <p>Mobile: +91 {{ $details->phone }}</p>
            <p>Aadhaar: {{ $approved->adhaar_number ?? 'XXXX XXXX XXXX' }}</p>
        </div>
        <div class="info-col">
            <p><span class="label">Application Details</span></p>
            <p><span>{{ $details->lead_token }}</span></p>
            <p>Date: {{ $approved->created_at->format('d M Y') }}</p>
            <p>Subject: {{ ucfirst($details->loan_type) }} Loan</p>
        </div>
    </div>

    <!-- Salutation -->
    <div class="body-text">
        <p><strong>Dear {{ $details->name }},</strong></p>
        <p>We are pleased to inform you that your loan application (Ref: <strong>{{ $details->lead_token }}</strong>) has been <strong>approved</strong> by the Credit Committee of Aastha Capital Finance, subject to the following terms and conditions.</p>
    </div>

    <!-- Approved Loan Details -->
    <div class="detail-box loan-box">
        <h3>Approved Loan Details</h3>
        <table>
            <tr><td>Sanctioned Amount</td><td class="loan-amount">&#8377; {{ number_format($approved->sanctionamt) }}/-</td></tr>
            <tr><td>Type of Loan Facility</td><td>{{ ucfirst($details->loan_type) }} Loan</td></tr>
            <tr><td>Loan Tenure</td><td>{{ $approved->loant }} Year(s)</td></tr>
            <tr><td>Rate of Interest (p.a.)</td><td>{{ $approved->roi }}% per annum (Reducing Balance)</td></tr>
            <tr><td>Equated Monthly Installment</td><td>&#8377; {{ number_format($approved->emiamt) }}/- per month</td></tr>
        </table>
    </div>

    <!-- Processing Note -->
    <div class="alert-box alert-info">
        <span class="alert-icon">&#9432;</span>
        <span>Processing fee of <strong>&#8377; {{ number_format($approved->totalv) }}/-</strong> shall be deducted directly from the sanctioned amount at the time of disbursement. No advance payment is required from the borrower.</span>
    </div>

    <!-- Disbursement -->
    <div class="section-heading">Disbursement Details</div>
    <ul>
        <li>Loan amount will be credited to your registered bank account post document verification.</li>
        <li>Applicable charges and processing fees will be adjusted at the time of disbursement.</li>
        <li>Disbursement will be completed within 3-5 working days after final verification.</li>
    </ul>

    <!-- Important Warning -->
    <div class="alert-box alert-warning">
        <span class="alert-icon">&#9888;</span>
        <span><strong>IMPORTANT:</strong> Cash deposits are strictly NOT accepted. All transactions must be done via IMPS / NEFT / RTGS / UPI / Mobile Banking / Net Banking only.</span>
    </div>

    <!-- Terms -->
    <div class="section-heading">Terms & Conditions</div>
    <ul>
        <li>Repayment shall be made via monthly EMI as per the agreed schedule.</li>
        <li>Legal / file charges once paid are non-refundable under any circumstances.</li>
        <li>A penal interest of 2% per day shall be levied on any outstanding EMI amount.</li>
        <li>All required documentation must be completed within 15 days from date of this letter.</li>
        <li>Loan sanctioned up to 70% of market value of collateral (if applicable).</li>
        <li>The Company reserves the right to cancel or modify this approval at its sole discretion.</li>
        <li>All disputes subject to exclusive jurisdiction of courts in SGNR, Rajasthan.</li>
    </ul>

    <!-- Signature Area -->
    <div class="signature-area">
        <div class="sig-block">
            <div class="sig-line"></div>
            <p>Borrower's Signature</p>
            <span class="sig-label">{{ $details->name }}</span>
            <span class="sig-label">Date: ___/___/______</span>
        </div>
        <div class="stamp-block">
            <img src="{{ asset('images/stampacf.png') }}" alt="Company Seal">
            <p>Verified By:</p>
        </div>
        <div class="auth-sig-block">
            <div class="sig-line"></div>
            <p>Authorized Signatory</p>
            <span class="sig-label">For Aastha Capital Finance</span>
            <span class="sig-label">Branch Manager / Credit Head</span>
        </div>
    </div>

    <!-- System Note -->
    <div class="system-note">
        This is a system-generated document. | Doc Ref: ACF-AL-{{ date('Ymd') }}-{{ str_pad($details->id, 5, '0', STR_PAD_LEFT) }} | For any queries, contact: +91 9649596982
    </div>

</div>

<!-- Footer -->
<div class="footer">
    <div class="footer-main">
        <div class="footer-left">
            <span><strong>Regd. Office:</strong> SGNR, Rajasthan, India</span>
            <span>Phone: +91 9649596982</span>
        </div>
        <div class="footer-center">
            <span>Page 1 of 1</span>
            <span>Confidential</span>
        </div>
        <div class="footer-right">
            <span>Email: support@aasthacapitalfinance.com</span>
            <span>Web: www.aasthacapitalfinance.com</span>
        </div>
    </div>
    <div class="footer-bar"></div>
    <div class="footer-bottom">
        <a href="https://aastha.primefinanceindia.com">AASTHA CAPITAL FINANCE | www.aasthacapitalfinance.com</a>
        <div class="disclaimer">This document is confidential and intended solely for the named recipient. Unauthorized use or distribution is prohibited.</div>
    </div>
</div>

</div>
</body>
</html>

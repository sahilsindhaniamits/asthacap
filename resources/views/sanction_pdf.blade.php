<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Loan Sanction Letter - Aastha Capital Finance</title>
<style>
@page { size: A4; margin: 0; }
* { box-sizing: border-box; margin: 0; padding: 0; }
body { font-family: 'Segoe UI', Arial, sans-serif; background: #fff; color: #1a1a2e; font-size: 11px; line-height: 1.5; }

.print-btn { position: fixed; top: 12px; right: 18px; padding: 8px 18px; background: linear-gradient(135deg, #6366f1, #8b5cf6); color: #fff; border: none; border-radius: 6px; cursor: pointer; font-weight: 600; z-index: 9999; box-shadow: 0 4px 12px rgba(99,102,241,0.4); }
@media print { .print-btn { display: none; } }

.page { width: 794px; min-height: 1123px; margin: auto; position: relative; overflow: hidden; display: flex; flex-direction: column; background: #fff; }

/* Watermark */
.watermark { position: absolute; top: 44%; left: 50%; transform: translate(-50%, -50%) rotate(-25deg); opacity: 0.03; z-index: 0; pointer-events: none; }
.watermark img { width: 500px; }

/* Side accent */
.side-accent { position: absolute; left: 0; top: 0; width: 5px; height: 100%; background: linear-gradient(180deg, #6366f1, #06b6d4, #8b5cf6); }

/* Top bar */
.top-bar { height: 5px; background: linear-gradient(90deg, #6366f1, #06b6d4, #8b5cf6, #6366f1); flex-shrink: 0; }

/* Header */
.header { padding: 18px 40px 14px; display: flex; align-items: center; justify-content: space-between; border-bottom: 2px solid #1e1b4b; flex-shrink: 0; position: relative; }
.header::after { content: ''; position: absolute; bottom: -4px; left: 40px; right: 40px; height: 1px; background: linear-gradient(90deg, #6366f1, #06b6d4, #8b5cf6); }
.logo-area { display: flex; align-items: center; gap: 12px; }
.logo-area img { height: 48px; }
.company-info h1 { font-size: 17px; color: #1e1b4b; font-weight: 800; letter-spacing: 0.3px; }
.company-info .tagline { font-size: 8.5px; color: #6366f1; font-style: italic; margin-top: 1px; }
.company-info .reg-info { font-size: 7.5px; color: #666; margin-top: 3px; letter-spacing: 0.3px; }
.header-right { text-align: right; }
.header-right .ref-no { font-size: 10px; color: #1e1b4b; font-weight: 700; background: #f0f0ff; padding: 3px 10px; border-radius: 3px; border: 1px solid #e0e0f0; display: inline-block; margin-bottom: 4px; }
.header-right .meta { font-size: 8px; color: #666; }
.header-right .meta span { display: block; margin: 1px 0; }

/* Content */
.content { padding: 14px 40px 10px; position: relative; z-index: 1; flex: 1; display: flex; flex-direction: column; }

/* Document Title */
.doc-title { text-align: center; margin: 10px 0 14px; }
.doc-title h2 { font-size: 14px; color: #fff; display: inline-block; padding: 6px 30px; background: linear-gradient(135deg, #1e1b4b, #312e81); border-radius: 3px; letter-spacing: 1.5px; text-transform: uppercase; }
.doc-title .doc-id { font-size: 8px; color: #888; margin-top: 4px; letter-spacing: 0.5px; }

/* Info Grid */
.info-grid { display: flex; justify-content: space-between; margin-bottom: 12px; padding: 10px 14px; background: #fafbff; border: 1px solid #eef0f8; border-radius: 4px; }
.info-grid .info-col p { margin: 2px 0; font-size: 10px; }
.info-grid .info-col p span { font-weight: 700; color: #1e1b4b; }
.info-grid .info-col .label { color: #6b7280; font-size: 8px; text-transform: uppercase; letter-spacing: 0.5px; }

/* Body */
.body-text { margin: 6px 0 10px; }
.body-text p { font-size: 10.5px; margin: 3px 0; color: #333; }

/* Detail boxes */
.detail-box { border-radius: 4px; padding: 10px 14px; margin: 6px 0; }
.detail-box h3 { font-size: 11px; margin-bottom: 6px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; }
.detail-box table { width: 100%; border-collapse: collapse; }
.detail-box table td { padding: 4px 0; font-size: 10px; border-bottom: 1px solid rgba(0,0,0,0.06); }
.detail-box table tr:last-child td { border-bottom: none; }
.detail-box table td:first-child { font-weight: 600; color: #444; width: 38%; }
.detail-box table td:last-child { color: #1e1b4b; font-weight: 500; }

.loan-box { background: #f8f9ff; border: 1px solid #e0e3f0; border-left: 4px solid #6366f1; }
.loan-box h3 { color: #4338ca; }
.loan-amount { font-size: 15px !important; font-weight: 800 !important; color: #1e1b4b !important; }

.bank-box { background: #f0fdf8; border: 1px solid #d1fae5; border-left: 4px solid #059669; }
.bank-box h3 { color: #047857; }

/* Alert boxes */
.alert-box { border-radius: 4px; padding: 8px 12px; margin: 6px 0; font-size: 9px; display: flex; align-items: flex-start; gap: 6px; }
.alert-box .alert-icon { font-size: 12px; flex-shrink: 0; margin-top: -1px; }
.alert-info { background: #eff6ff; border: 1px solid #bfdbfe; color: #1e40af; }
.alert-warning { background: #fffbeb; border: 1px solid #fde68a; color: #92400e; }

/* Terms */
.terms-section { margin: 8px 0; }
.terms-section h4 { font-size: 10px; font-weight: 700; color: #1e1b4b; margin-bottom: 5px; text-transform: uppercase; letter-spacing: 0.5px; border-bottom: 1px solid #e5e7eb; padding-bottom: 3px; }
.terms-section ul { padding-left: 14px; margin: 4px 0; }
.terms-section ul li { font-size: 9px; margin-bottom: 2px; color: #444; line-height: 1.4; }

/* Signature area */
.signature-area { display: flex; justify-content: space-between; align-items: flex-end; margin-top: auto; padding-top: 12px; border-top: 1px dashed #d1d5db; }
.sig-block { text-align: center; width: 30%; }
.sig-line { border-bottom: 1.5px solid #1e1b4b; height: 32px; margin-bottom: 4px; }
.sig-block p { font-size: 8.5px; font-weight: 700; color: #1e1b4b; }
.sig-block .sig-label { font-size: 7.5px; color: #666; font-weight: 400; display: block; }
.stamp-block { text-align: center; width: 25%; }
.stamp-block img { height: 45px; opacity: 0.8; }
.stamp-block p { font-size: 7.5px; color: #666; margin-top: 2px; }
.auth-sig-block { text-align: center; width: 30%; }
.auth-sig-block .sig-line { border-bottom-style: dashed; }
.auth-sig-block p { font-size: 8.5px; font-weight: 700; color: #1e1b4b; }
.auth-sig-block .sig-label { font-size: 7.5px; color: #666; font-weight: 400; display: block; }

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
            <div class="reg-info">CIN: U65910RJ2024PTC012345 | RBI Reg. No: N-05.03XXX</div>
        </div>
    </div>
    <div class="header-right">
        <div class="ref-no">ACF/SL/{{ date('Y') }}/{{ str_pad($obj->id, 5, '0', STR_PAD_LEFT) }}</div>
        <div class="meta">
            <span>Head Office: Jaipur, Rajasthan</span>
            <span>GSTIN: 08XXXXXXXXXXXXXXXXX</span>
        </div>
    </div>
</div>

<!-- Content -->
<div class="content">

    <!-- Document Title -->
    <div class="doc-title">
        <h2>Loan Sanction Letter</h2>
        <div class="doc-id">Document ID: ACF-SL-{{ date('Ymd') }}-{{ str_pad($obj->id, 5, '0', STR_PAD_LEFT) }} | Generated: {{ date('d M Y, h:i A') }}</div>
    </div>

    <!-- Applicant Info Grid -->
    <div class="info-grid">
        <div class="info-col">
            <p><span class="label">Applicant</span></p>
            <p><span>{{ $obj->applicant_name }}</span></p>
            <p>S/O: {{ $obj->father_name }}</p>
            <p>Mobile: +91 {{ $obj->mobile }}</p>
        </div>
        <div class="info-col">
            <p><span class="label">Application Details</span></p>
            <p><span>{{ $obj->lead_token }}</span></p>
            <p>Date: {{ $obj->new_format }}</p>
            <p>Validity: 10 Days from issue</p>
        </div>
    </div>

    <!-- Salutation -->
    <div class="body-text">
        <p><strong>Dear {{ $obj->applicant_name }},</strong></p>
        <p>With reference to your loan application, we are pleased to inform you that the Credit Committee of Aastha Capital Finance has <strong>sanctioned</strong> a loan facility in your favour, subject to the terms and conditions detailed herein.</p>
    </div>

    <!-- Sanctioned Loan Details -->
    <div class="detail-box loan-box">
        <h3>Sanctioned Loan Details</h3>
        <table>
            <tr><td>Sanctioned Loan Amount</td><td class="loan-amount">&#8377; {{ $obj->sanctioned_amount }}/-</td></tr>
            <tr><td>Type of Loan Facility</td><td>{{ $obj->loan_type }}</td></tr>
            <tr><td>Loan Tenure</td><td>{{ $obj->loan_tenure ?? 'As per agreement' }}</td></tr>
            <tr><td>Rate of Interest (p.a.)</td><td>{{ $obj->interest_rate ?? 'As applicable' }}</td></tr>
            <tr><td>Equated Monthly Installment</td><td>&#8377; {{ $obj->emi_amount }}/- per month</td></tr>
            <tr><td>Sanction Letter Validity</td><td>10 Days from date of issue</td></tr>
        </table>
    </div>

    <!-- Processing Note -->
    <div class="alert-box alert-info">
        <span class="alert-icon">&#9432;</span>
        <span>As per terms, the borrower is required to submit advance EMI of <strong>&#8377; {{ $obj->emi_amount }} + &#8377; {{ $obj->emi_amount }}</strong> via NEFT/RTGS/IMPS to the below-mentioned account. Upon receipt, the loan shall be processed for final disbursement.</span>
    </div>

    <!-- Bank Details -->
    <div class="detail-box bank-box">
        <h3>Payment / Remittance Details</h3>
        <table>
            <tr><td>Beneficiary Name</td><td>{{ $obj->payee_name }}</td></tr>
            <tr><td>Account Type</td><td>{{ $obj->account_type }}</td></tr>
            <tr><td>Bank Name</td><td>{{ $obj->bank_number }}</td></tr>
            <tr><td>Account Number</td><td><strong>{{ $obj->account_number }}</strong></td></tr>
            <tr><td>IFSC Code</td><td><strong>{{ $obj->ifsc }}</strong></td></tr>
        </table>
    </div>

    <!-- Important Warning -->
    <div class="alert-box alert-warning">
        <span class="alert-icon">&#9888;</span>
        <span><strong>IMPORTANT:</strong> Cash deposits are strictly NOT accepted. All payments must be made via IMPS / NEFT / RTGS / UPI / Mobile Banking / Net Banking only. Any cash deposit will not be acknowledged.</span>
    </div>

    <!-- Terms & Conditions -->
    <div class="terms-section">
        <h4>Terms & Conditions</h4>
        <ul>
            <li>Repayment shall be made via monthly EMI on the designated date as per the loan agreement.</li>
            <li>All legal charges, file charges, property verification and mortgage deed costs are borne by the applicant and are non-refundable.</li>
            <li>A penal interest of 2% per day shall be levied on any overdue EMI installment.</li>
            <li>Complete documentation must be submitted within 15 days from date of this letter, failing which the sanction stands cancelled.</li>
            <li>The sanctioned amount shall not exceed 70% of current market value of collateral (if applicable).</li>
            <li>The Company reserves the right to modify, suspend or cancel this sanction at its sole discretion without prior notice.</li>
            <li>Returned, disputed, unauthorized or fraudulent transactions shall not be entertained.</li>
            <li>All disputes are subject to exclusive jurisdiction of courts in Jaipur, Rajasthan.</li>
        </ul>
    </div>

    <!-- Signature Area -->
    <div class="signature-area">
        <div class="sig-block">
            <div class="sig-line"></div>
            <p>Borrower's Signature</p>
            <span class="sig-label">{{ $obj->applicant_name }}</span>
            <span class="sig-label">Date: ___/___/______</span>
        </div>
        <div class="stamp-block">
            <img src="{{ asset('images/aastha_capital_finance_logo.png') }}" alt="Company Seal">
            <p>Company Seal</p>
        </div>
        <div class="auth-sig-block">
            <div class="sig-line"></div>
            <p>Authorized Signatory</p>
            <span class="sig-label">For Aastha Capital Finance</span>
            <span class="sig-label">Branch Manager / Credit Head</span>
        </div>
    </div>

    <!-- System Generated Note -->
    <div class="system-note">
        This is a system-generated document. | Doc Ref: ACF-SL-{{ date('Ymd') }}-{{ str_pad($obj->id, 5, '0', STR_PAD_LEFT) }} | For any queries, contact: +91 9649596982
    </div>

</div>

<!-- Footer -->
<div class="footer">
    <div class="footer-main">
        <div class="footer-left">
            <span><strong>Regd. Office:</strong> Jaipur, Rajasthan, India</span>
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

<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Model;
class SanctionAmount extends Model
{
    protected $table    = 'sanction_letter';

    const ACTIVE = 1;
    
    protected $fillable = ['lead_token','sanctioned_amount','date','applicant_name','father_name','mobile','loan_type','emi','emi_amount','payee_name','bank_number','account_number','ifsc','account_type'];

    
}
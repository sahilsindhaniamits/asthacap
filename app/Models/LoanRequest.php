<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class LoanRequest extends Model
{
    protected $table         = 'loan_requests';
    

   
    // const REFFER_RECHARGE_BONUS = 0;

    const STATUS_PENDING     = 0;
    const STATUS_COMPLETE    = 1;
    const STATUS_REJECTED    = 3;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'state',
        'loan_amount',
        'loan_type',
        'status',
        'message',
        'lead_token',
        'ip_address',
        'aadhar_number'
      
    ];
}
